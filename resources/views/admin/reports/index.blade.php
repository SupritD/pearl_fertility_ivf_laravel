@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-12">
            <h2>Export Reports</h2>
            <p class="text-muted">Generate and download custom CSV reports for your Leads and Blogs.</p>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="{{ route('admin.reports.export') }}" method="POST">
                        @csrf
                        
                        <div class="mb-4">
                            <label class="form-label fw-bold">1. Select Data Type</label>
                            <select name="data_type" id="data_type" class="form-select" onchange="toggleColumns()">
                                <option value="leads">Leads</option>
                                <option value="blogs">Blogs</option>
                            </select>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">2. Start Date</label>
                                <input type="date" name="start_date" class="form-control" value="{{ \Carbon\Carbon::now()->subDays(30)->toDateString() }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">End Date</label>
                                <input type="date" name="end_date" class="form-control" value="{{ \Carbon\Carbon::now()->toDateString() }}" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">3. Select Columns to Export</label>
                            
                            <!-- Leads Columns -->
                            <div id="leads_columns" class="column-group">
                                <div class="row">
                                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" type="checkbox" name="columns[]" value="id" checked> <label class="form-check-label">ID</label></div></div>
                                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" type="checkbox" name="columns[]" value="name" checked> <label class="form-check-label">Name</label></div></div>
                                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" type="checkbox" name="columns[]" value="email" checked> <label class="form-check-label">Email</label></div></div>
                                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" type="checkbox" name="columns[]" value="phone" checked> <label class="form-check-label">Phone</label></div></div>
                                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" type="checkbox" name="columns[]" value="status" checked> <label class="form-check-label">Status</label></div></div>
                                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" type="checkbox" name="columns[]" value="subject"> <label class="form-check-label">Subject</label></div></div>
                                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" type="checkbox" name="columns[]" value="message"> <label class="form-check-label">Message</label></div></div>
                                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" type="checkbox" name="columns[]" value="source"> <label class="form-check-label">Source</label></div></div>
                                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" type="checkbox" name="columns[]" value="created_at" checked> <label class="form-check-label">Date Created</label></div></div>
                                </div>
                            </div>

                            <!-- Blogs Columns -->
                            <div id="blogs_columns" class="column-group d-none">
                                <div class="row">
                                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" type="checkbox" name="columns[]" value="id" checked disabled> <label class="form-check-label">ID</label></div></div>
                                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" type="checkbox" name="columns[]" value="title" checked disabled> <label class="form-check-label">Title</label></div></div>
                                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" type="checkbox" name="columns[]" value="slug" disabled> <label class="form-check-label">Slug</label></div></div>
                                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" type="checkbox" name="columns[]" value="is_published" checked disabled> <label class="form-check-label">Status</label></div></div>
                                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" type="checkbox" name="columns[]" value="published_at" checked disabled> <label class="form-check-label">Date Published</label></div></div>
                                    <div class="col-md-4 mb-2"><div class="form-check"><input class="form-check-input" type="checkbox" name="columns[]" value="created_at" disabled> <label class="form-check-label">Date Created</label></div></div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary"><i class="bi bi-download"></i> Export CSV</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleColumns() {
        var dataType = document.getElementById('data_type').value;
        
        // Hide all
        document.getElementById('leads_columns').classList.add('d-none');
        document.getElementById('blogs_columns').classList.add('d-none');
        
        // Disable all checkboxes to prevent submitting hidden ones
        var allCheckboxes = document.querySelectorAll('.column-group input[type="checkbox"]');
        allCheckboxes.forEach(function(cb) {
            // Keep original disabled state if it was there, but basically we disable everything first
            cb.disabled = true; 
        });

        // Show and enable selected
        var selectedGroup = document.getElementById(dataType + '_columns');
        selectedGroup.classList.remove('d-none');
        
        var selectedCheckboxes = selectedGroup.querySelectorAll('input[type="checkbox"]');
        selectedCheckboxes.forEach(function(cb) {
            cb.disabled = false;
        });
    }

    // Initialize on load
    document.addEventListener("DOMContentLoaded", function() {
        toggleColumns();
    });
</script>
@endsection
