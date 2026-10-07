@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Leads</h1>
</div>

@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="card shadow mb-4 border-0">
    <div class="card-header py-3 bg-white border-bottom-0">
        <div class="row align-items-center mb-3">
            <div class="col">
                <h6 class="m-0 font-weight-bold text-primary">All Leads</h6>
            </div>
            @if(request()->hasAny(['q', 'status', 'start_date', 'end_date']) && (request('q') != '' || request('status') != '' || request('start_date') != '' || request('end_date') != ''))
                <div class="col-auto">
                    <a href="{{ route('admin.leads.index') }}" class="btn btn-sm btn-outline-secondary">Clear Filters</a>
                </div>
            @endif
        </div>
        <form action="{{ route('admin.leads.index') }}" method="GET">
            <div class="row g-2">
                <div class="col-md-3">
                    <input type="date" name="start_date" class="form-control form-control-sm" value="{{ request('start_date') }}" title="Start Date">
                </div>
                <div class="col-md-3">
                    <input type="date" name="end_date" class="form-control form-control-sm" value="{{ request('end_date') }}" title="End Date">
                </div>
                <div class="col-md-2">
                    <select name="status" class="form-select form-select-sm" title="Filter by status">
                        <option value="">All Statuses</option>
                        <option value="New" {{ request('status') == 'New' ? 'selected' : '' }}>New</option>
                        <option value="Contacted" {{ request('status') == 'Contacted' ? 'selected' : '' }}>Contacted</option>
                        <option value="Converted" {{ request('status') == 'Converted' ? 'selected' : '' }}>Converted</option>
                        <option value="Lost" {{ request('status') == 'Lost' ? 'selected' : '' }}>Lost</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <div class="input-group input-group-sm">
                        <input type="text" name="q" class="form-control" placeholder="Search name, email, phone..." value="{{ request('q') }}">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i> Search</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Date Submitted</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($leads as $lead)
                    <tr>
                        <td>{{ $lead->created_at->format('M d, Y h:i A') }}</td>
                        <td>
                            {{ $lead->name }}
                            @if($lead->is_repeated)
                                <span class="badge bg-danger ms-1" style="font-size: 0.65rem;">Repeated</span>
                            @endif
                        </td>
                        <td>{{ $lead->email }}</td>
                        <td>{{ $lead->phone }}</td>
                        <td>
                            @if($lead->status == 'New')
                                <span class="badge bg-primary">New</span>
                            @elseif($lead->status == 'Contacted')
                                <span class="badge bg-warning text-dark">Contacted</span>
                            @elseif($lead->status == 'Converted')
                                <span class="badge bg-success">Converted</span>
                            @elseif($lead->status == 'Lost')
                                <span class="badge bg-danger">Lost</span>
                            @else
                                <span class="badge bg-secondary">{{ $lead->status }}</span>
                            @endif
                        </td>
                        <td class="text-end">
                            <a href="{{ route('admin.leads.show', $lead->id) }}" class="btn btn-sm btn-info text-white me-1" title="View Details">
                                <i class="bi bi-eye"></i>
                            </a>
                            <form action="{{ route('admin.leads.destroy', $lead->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this lead?');">
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
                        <td colspan="6" class="text-center py-4">No leads found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end mt-4">
            {{ $leads->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection
