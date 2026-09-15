@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Appointment Details</h1>
    <a href="{{ route('admin.appointments.index') }}" class="btn btn-secondary btn-sm">
        <i class="bi bi-arrow-left me-1"></i> Back to Appointments
    </a>
</div>

<div class="row">
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4 border-0">
            <div class="card-header py-3 bg-white border-bottom-0">
                <h6 class="m-0 font-weight-bold text-primary">Patient Information</h6>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-4 fw-bold text-muted">First Name:</div>
                    <div class="col-sm-8">{{ $appointment->first_name }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4 fw-bold text-muted">Last Name:</div>
                    <div class="col-sm-8">{{ $appointment->last_name }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4 fw-bold text-muted">Phone Number:</div>
                    <div class="col-sm-8"><a href="tel:{{ $appointment->phone }}" class="text-decoration-none">{{ $appointment->phone }}</a></div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4 fw-bold text-muted">Email Address:</div>
                    <div class="col-sm-8"><a href="mailto:{{ $appointment->email }}" class="text-decoration-none">{{ $appointment->email }}</a></div>
                </div>
                <hr>
                <div class="row mb-3">
                    <div class="col-sm-4 fw-bold text-muted">Date of Birth:</div>
                    <div class="col-sm-8">{{ $appointment->dob ? \Carbon\Carbon::parse($appointment->dob)->format('M d, Y') : 'N/A' }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4 fw-bold text-muted">Address:</div>
                    <div class="col-sm-8">{{ $appointment->address ?: 'N/A' }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4 fw-bold text-muted">City:</div>
                    <div class="col-sm-8">{{ $appointment->city ?: 'N/A' }}</div>
                </div>
                <hr>
                <div class="row mb-3">
                    <div class="col-sm-4 fw-bold text-muted">Preferred Slot:</div>
                    <div class="col-sm-8"><span class="badge bg-secondary">{{ $appointment->slot ?: 'No preference' }}</span></div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4 fw-bold text-muted">Special Message:</div>
                    <div class="col-sm-8 bg-light p-3 rounded text-dark">
                        {{ $appointment->message ?: 'No message provided.' }}
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-4 fw-bold text-muted">Submitted At:</div>
                    <div class="col-sm-8">{{ $appointment->created_at->format('F d, Y h:i A') }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4 border-0">
            <div class="card-header py-3 bg-white border-bottom-0">
                <h6 class="m-0 font-weight-bold text-primary">Manage Status</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.appointments.update', $appointment->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Current Status</label>
                        <select name="status" class="form-select @error('status') is-invalid @enderror">
                            <option value="pending" {{ $appointment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="confirmed" {{ $appointment->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                            <option value="cancelled" {{ $appointment->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Update Status</button>
                </form>

                <hr class="my-4">

                <form action="{{ route('admin.appointments.destroy', $appointment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to completely delete this appointment request? This cannot be undone.');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger w-100">
                        <i class="bi bi-trash"></i> Delete Appointment
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
