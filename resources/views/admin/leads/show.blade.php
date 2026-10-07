@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>Lead Details</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('admin.leads.index') }}" class="btn btn-secondary">Back to Leads</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-header">Message Information</div>
                <div class="card-body">
                    <p><strong>Name:</strong> {{ $lead->name }}</p>
                    <p><strong>Email:</strong> <a href="mailto:{{ $lead->email }}">{{ $lead->email }}</a></p>
                    <p><strong>Phone:</strong> <a href="tel:{{ $lead->phone }}">{{ $lead->phone }}</a></p>
                    <p><strong>Subject:</strong> {{ $lead->subject ?? 'N/A' }}</p>
                    <p><strong>Date Submitted:</strong> {{ $lead->created_at->format('d M Y, h:i A') }}</p>
                    <hr>
                    <p><strong>Message:</strong></p>
                    <div class="p-3 bg-light border rounded">
                        {{ $lead->message }}
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">Tracking Information</div>
                <div class="card-body">
                    <p><strong>Source:</strong> {{ $lead->source ?? 'Website' }}</p>
                    <p><strong>IP Address:</strong> {{ $lead->ip_address ?? 'N/A' }}</p>
                    <p><strong>User Agent:</strong> {{ $lead->user_agent ?? 'N/A' }}</p>
                </div>
            </div>

            @if($relatedLeads->isNotEmpty())
            <div class="card mb-3 border-danger">
                <div class="card-header bg-danger text-white">History: Related Leads (Same Email or Phone)</div>
                <div class="card-body p-0">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Date Submitted</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($relatedLeads as $relLead)
                            <tr>
                                <td>{{ $relLead->created_at->format('d M Y, h:i A') }}</td>
                                <td>{{ $relLead->name }}</td>
                                <td>
                                    @if($relLead->status == 'New')
                                        <span class="badge bg-primary">New</span>
                                    @elseif($relLead->status == 'Contacted')
                                        <span class="badge bg-warning">Contacted</span>
                                    @elseif($relLead->status == 'Converted')
                                        <span class="badge bg-success">Converted</span>
                                    @elseif($relLead->status == 'Lost')
                                        <span class="badge bg-danger">Lost</span>
                                    @else
                                        <span class="badge bg-secondary">{{ $relLead->status }}</span>
                                    @endif
                                </td>
                                <td><a href="{{ route('admin.leads.show', $relLead->id) }}" class="btn btn-sm btn-outline-danger">View Details</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>

        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">Update Status</div>
                <div class="card-body">
                    <form action="{{ route('admin.leads.update', $lead->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Current Status</label>
                            <select name="status" class="form-select">
                                <option value="New" {{ $lead->status == 'New' ? 'selected' : '' }}>New</option>
                                <option value="Contacted" {{ $lead->status == 'Contacted' ? 'selected' : '' }}>Contacted</option>
                                <option value="Converted" {{ $lead->status == 'Converted' ? 'selected' : '' }}>Converted</option>
                                <option value="Lost" {{ $lead->status == 'Lost' ? 'selected' : '' }}>Lost</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Update Lead</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
