@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Appointments</h1>
</div>

@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="card shadow mb-4 border-0">
    <div class="card-header py-3 bg-white d-flex justify-content-between align-items-center border-bottom-0">
        <h6 class="m-0 font-weight-bold text-primary">All Appointments</h6>
        <form action="{{ route('admin.appointments.index') }}" method="GET" class="d-flex">
            <input type="text" name="q" class="form-control form-control-sm me-2" placeholder="Search name, email, phone..." value="{{ request('q') }}">
            <button type="submit" class="btn btn-sm btn-primary"><i class="bi bi-search"></i></button>
        </form>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Requested Slot</th>
                        <th>Status</th>
                        <th>Date Submitted</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($appointments as $appointment)
                        <tr>
                            <td>#{{ $appointment->id }}</td>
                            <td>{{ $appointment->first_name }} {{ $appointment->last_name }}</td>
                            <td>{{ $appointment->phone }}</td>
                            <td>{{ $appointment->email }}</td>
                            <td>{{ $appointment->slot ?: 'N/A' }}</td>
                            <td>
                                @if($appointment->status == 'pending')
                                    <span class="badge bg-warning text-dark">Pending</span>
                                @elseif($appointment->status == 'confirmed')
                                    <span class="badge bg-success">Confirmed</span>
                                @else
                                    <span class="badge bg-danger">Cancelled</span>
                                @endif
                            </td>
                            <td>{{ $appointment->created_at->format('M d, Y h:i A') }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.appointments.show', $appointment->id) }}" class="btn btn-sm btn-info text-white me-1" title="View Details">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <form action="{{ route('admin.appointments.destroy', $appointment->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-4">No appointments found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="d-flex justify-content-end mt-4">
            {{ $appointments->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection
