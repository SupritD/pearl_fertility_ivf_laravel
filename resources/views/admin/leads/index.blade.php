@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-4">
            <h2>Leads</h2>
        </div>
        <div class="col-md-4 offset-md-4">
            <form action="{{ route('admin.leads.index') }}" method="GET">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search name, email, phone..." value="{{ request('q') }}">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($leads as $lead)
                    <tr>
                        <td>{{ $lead->created_at->format('d M Y, h:i A') }}</td>
                        <td>{{ $lead->name }}</td>
                        <td>{{ $lead->email }}</td>
                        <td>{{ $lead->phone }}</td>
                        <td>
                            @if($lead->status == 'New')
                                <span class="badge bg-primary">New</span>
                            @elseif($lead->status == 'Contacted')
                                <span class="badge bg-warning">Contacted</span>
                            @elseif($lead->status == 'Converted')
                                <span class="badge bg-success">Converted</span>
                            @elseif($lead->status == 'Lost')
                                <span class="badge bg-danger">Lost</span>
                            @else
                                <span class="badge bg-secondary">{{ $lead->status }}</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.leads.show', $lead->id) }}" class="btn btn-sm btn-info text-white">View</a>
                            <form action="{{ route('admin.leads.destroy', $lead->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this lead?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">No leads found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $leads->appends(['q' => request('q')])->links() }}
        </div>
    </div>
</div>
@endsection
