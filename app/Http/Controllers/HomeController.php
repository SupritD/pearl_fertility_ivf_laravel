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
        $startDate = $request->input('start_date', Carbon::now()->subDays(30)->toDateString());
        $endDate = $request->input('end_date', Carbon::now()->toDateString());

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

        $leadsOverTime = Lead::whereBetween('created_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59'])
                             ->select(\DB::raw('DATE(created_at) as date'), \DB::raw('count(*) as count'))
                             ->groupBy('date')
                             ->orderBy('date', 'ASC')
                             ->pluck('count', 'date')
                             ->toArray();

        $period = \Carbon\CarbonPeriod::create($startDate, $endDate);
        $chartDates = [];
        $chartCounts = [];
        foreach ($period as $date) {
            $dateString = $date->format('Y-m-d');
            $chartDates[] = $date->format('d M');
            $chartCounts[] = $leadsOverTime[$dateString] ?? 0;
        }

        return view('admin.dashboard', compact(
            'totalLeads', 'newLeads', 'leadsToday', 'conversionRate', 
            'totalBlogs', 'publishedBlogs', 'totalSliders', 'totalCategories', 'topCategories',
            'recentLeads', 'recentBlogs', 'leadsByStatus', 'chartDates', 'chartCounts',
            'startDate', 'endDate'
        ));
    }
}
