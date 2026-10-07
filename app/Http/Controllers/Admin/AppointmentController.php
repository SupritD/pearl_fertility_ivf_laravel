<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Appointment::query();
        if (request('q')) {
            $query->where(function($q) {
                $q->where('first_name', 'like', '%' . request('q') . '%')
                  ->orWhere('last_name', 'like', '%' . request('q') . '%')
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
        $appointments = $query->latest()->paginate(10);
        
        foreach ($appointments as $appointment) {
            $appointment->is_repeated = Appointment::where('id', '!=', $appointment->id)
                ->where(function($q) use ($appointment) {
                    if ($appointment->email) $q->where('email', $appointment->email);
                    if ($appointment->phone) $q->orWhere('phone', $appointment->phone);
                })->exists();
        }

        return view('admin.appointments.index', compact('appointments'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        $relatedAppointments = Appointment::where('id', '!=', $appointment->id)
            ->where(function($q) use ($appointment) {
                if ($appointment->email) $q->where('email', $appointment->email);
                if ($appointment->phone) $q->orWhere('phone', $appointment->phone);
            })->latest()->get();

        return view('admin.appointments.show', compact('appointment', 'relatedAppointments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        return view('admin.appointments.show', compact('appointment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'status' => 'required|string|max:255',
        ]);

        $appointment->update(['status' => $request->status]);

        return redirect()->route('admin.appointments.index')->with('status', 'Appointment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('admin.appointments.index')->with('status', 'Appointment deleted successfully.');
    }
}
