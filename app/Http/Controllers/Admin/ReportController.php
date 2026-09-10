<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;

class ReportController extends Controller
{
    public function index()
    {
        return view('admin.reports.index');
    }

    public function export(Request $request)
    {
        $request->validate([
            'data_type' => 'required|in:leads,blogs',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'columns' => 'required|array|min:1',
        ]);

        $dataType = $request->input('data_type');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $columns = $request->input('columns');

        $fileName = $dataType . '_report_' . date('Y_m_d_H_i_s') . '.csv';

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $callback = function() use($dataType, $startDate, $endDate, $columns) {
            $file = fopen('php://output', 'w');
            
            // Put CSV headers
            fputcsv($file, $columns);

            // Fetch data
            if ($dataType === 'leads') {
                $query = Lead::whereBetween('created_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59']);
            } else {
                $query = Blog::whereBetween('created_at', [$startDate . ' 00:00:00', $endDate . ' 23:59:59']);
            }

            // Chunk data to avoid memory issues
            $query->chunk(500, function($records) use ($file, $columns, $dataType) {
                foreach ($records as $record) {
                    $row = [];
                    foreach ($columns as $column) {
                        // Handle special columns if needed
                        if ($dataType === 'blogs' && $column === 'is_published') {
                            $row[] = $record->$column ? 'Published' : 'Draft';
                        } else {
                            $row[] = $record->$column;
                        }
                    }
                    fputcsv($file, $row);
                }
            });

            fclose($file);
        };

        return Response::stream($callback, 200, $headers);
    }
}
