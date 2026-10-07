<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Lead::query();
        if (request('q')) {
            $query->where(function($q) {
                $q->where('name', 'like', '%' . request('q') . '%')
                  ->orWhere('email', 'like', '%' . request('q') . '%')
                  ->orWhere('phone', 'like', '%' . request('q') . '%');
            });
        }
        if (request('status')) {
            $query->where('status', request('status'));
        }
        if (request('start_date') && request('end_date')) {
            $query->whereBetween('created_at', [request('start_date') . ' 00:00:00', request('end_date') . ' 23:59:59']);
        } elseif (request('start_date')) {
            $query->whereDate('created_at', '>=', request('start_date'));
        } elseif (request('end_date')) {
            $query->whereDate('created_at', '<=', request('end_date'));
        }
        $leads = $query->latest()->paginate(10);
        
        foreach ($leads as $lead) {
            $lead->is_repeated = Lead::where('id', '!=', $lead->id)
                ->where(function($q) use ($lead) {
                    if ($lead->email) $q->where('email', $lead->email);
                    if ($lead->phone) $q->orWhere('phone', $lead->phone);
                })->exists();
        }

        return view('admin.leads.index', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lead $lead)
    {
        $relatedLeads = Lead::where('id', '!=', $lead->id)
            ->where(function($q) use ($lead) {
                if ($lead->email) $q->where('email', $lead->email);
                if ($lead->phone) $q->orWhere('phone', $lead->phone);
            })->latest()->get();

        return view('admin.leads.show', compact('lead', 'relatedLeads'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lead $lead)
    {
        return view('admin.leads.show', compact('lead')); // We will just use the show view for both
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lead $lead)
    {
        $request->validate([
            'status' => 'required|string|max:255',
        ]);

        $lead->update(['status' => $request->status]);

        return redirect()->route('admin.leads.index')->with('status', 'Lead updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lead $lead)
    {
        $lead->delete();
        return redirect()->route('admin.leads.index')->with('status', 'Lead deleted successfully.');
    }
}
