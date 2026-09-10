<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\Blog;
use App\Models\Slider;
use App\Models\Category;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $startDateInput = $request->input('start_date');
        $endDateInput = $request->input('end_date');

        if ($startDateInput && $endDateInput) {
            $range = 'custom';
            $startDate = $startDateInput;
            $endDate = $endDateInput;
        } else {
            $range = $request->input('range', 'monthly');
            $now = Carbon::now();

            switch ($range) {
                case 'today':
                    $startDate = Carbon::today()->toDateString();
                    $endDate = Carbon::today()->toDateString();
                    break;
                case 'weekly':
                    $startDate = Carbon::now()->startOfWeek()->toDateString();
                    $endDate = Carbon::now()->endOfWeek()->toDateString();
                    break;
                case 'yearly':
                    $startDate = Carbon::now()->startOfYear()->toDateString();
                    $endDate = Carbon::now()->endOfYear()->toDateString();
                    break;
                case 'all_time':
                    $startDate = Carbon::now()->subYears(10)->toDateString(); // Arbitrary far back date
                    $endDate = Carbon::now()->toDateString();
                    break;
                case 'monthly':
                default:
                    $startDate = Carbon::now()->startOfMonth()->toDateString();
                    $endDate = Carbon::now()->endOfMonth()->toDateString();
                    break;
            }
        }

        // Leads Stats
        $totalLeads = Lead::count();
        $newLeads = Lead::where('status', 'New')->count();
        $leadsToday = Lead::whereDate('created_at', Carbon::today())->count();
        $convertedLeads = Lead::where('status', 'Converted')->count();
        $conversionRate = $totalLeads > 0 ? round(($convertedLeads / $totalLeads) * 100) : 0;

        // Content Stats
        $totalBlogs = Blog::count();
        $publishedBlogs = Blog::where('is_published', true)->count();
        $totalSliders = Slider::count();
        $totalCategories = Category::count();
        $topCategories = Category::withCount('blogs')->orderBy('blogs_count', 'desc')->take(4)->get();

        $recentLeads = Lead::latest()->take(5)->get();
        $recentBlogs = Blog::latest()->take(5)->get();

        $leadsByStatus = Lead::whereBetween('created_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59'])
                             ->select('status', \DB::raw('count(*) as count'))
                             ->groupBy('status')
                             ->pluck('count', 'status')
                             ->toArray();

        $leadsOverTimeQuery = Lead::whereBetween('created_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59'])
                             ->select(\DB::raw('DATE(created_at) as date'), \DB::raw('count(*) as count'))
                             ->groupBy('date')
                             ->orderBy('date', 'ASC')
                             ->pluck('count', 'date')
                             ->toArray();

        // Dynamically adjust the chart period based on range
        if ($range == 'yearly' || $range == 'all_time') {
            // Group by month instead for better visual if long period
            $leadsOverTime = Lead::whereBetween('created_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59'])
                                 ->select(\DB::raw('DATE_FORMAT(created_at, "%Y-%m") as date'), \DB::raw('count(*) as count'))
                                 ->groupBy('date')
                                 ->orderBy('date', 'ASC')
                                 ->pluck('count', 'date')
                                 ->toArray();
            
            $period = \Carbon\CarbonPeriod::create($startDate, '1 month', $endDate);
            $chartDates = [];
            $chartCounts = [];
            foreach ($period as $date) {
                $dateString = $date->format('Y-m');
                $chartDates[] = $date->format('M Y');
                $chartCounts[] = $leadsOverTime[$dateString] ?? 0;
            }
        } else {
            $period = \Carbon\CarbonPeriod::create($startDate, $endDate);
            $chartDates = [];
            $chartCounts = [];
            foreach ($period as $date) {
                $dateString = $date->format('Y-m-d');
                $chartDates[] = $date->format('d M');
                $chartCounts[] = $leadsOverTimeQuery[$dateString] ?? 0;
            }
        }

        return view('admin.dashboard', compact(
            'totalLeads', 'newLeads', 'leadsToday', 'conversionRate', 
            'totalBlogs', 'publishedBlogs', 'totalSliders', 'totalCategories', 'topCategories',
            'recentLeads', 'recentBlogs', 'leadsByStatus', 'chartDates', 'chartCounts',
            'range'
        ));
    }
}
