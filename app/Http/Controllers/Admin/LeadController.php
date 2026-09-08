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
            $query->where('name', 'like', '%' . request('q') . '%')
                  ->orWhere('email', 'like', '%' . request('q') . '%')
                  ->orWhere('phone', 'like', '%' . request('q') . '%');
        }
        $leads = $query->latest()->paginate(10);
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
        return view('admin.leads.show', compact('lead'));
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
