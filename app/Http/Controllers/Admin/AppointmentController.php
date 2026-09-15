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
            $query->where('first_name', 'like', '%' . request('q') . '%')
                  ->orWhere('last_name', 'like', '%' . request('q') . '%')
                  ->orWhere('email', 'like', '%' . request('q') . '%')
                  ->orWhere('phone', 'like', '%' . request('q') . '%');
        }
        $appointments = $query->latest()->paginate(10);
        return view('admin.appointments.index', compact('appointments'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        return view('admin.appointments.show', compact('appointment'));
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
