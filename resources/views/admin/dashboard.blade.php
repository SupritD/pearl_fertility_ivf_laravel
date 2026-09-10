@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-4 align-items-center">
        <div class="col-md-4">
            <h2>Dashboard</h2>
            <p class="text-muted mb-0">Welcome back! Here is a summary of your website's activity.</p>
        </div>
        <div class="col-md-8 text-end">
            <form method="GET" action="{{ route('admin.dashboard') }}" class="d-inline-flex align-items-center justify-content-end gap-2">
                <div>
                    <label class="form-label small text-muted mb-0 text-start d-block">Start Date</label>
                    <input type="date" name="start_date" class="form-control form-control-sm" value="{{ $startDate }}">
                </div>
                <div>
                    <label class="form-label small text-muted mb-0 text-start d-block">End Date</label>
                    <input type="date" name="end_date" class="form-control form-control-sm" value="{{ $endDate }}">
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-sm btn-primary">Filter</button>
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-sm btn-outline-secondary">Reset</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Summary Cards Row 1 (Leads) -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card bg-primary text-white h-100 shadow-sm border-0 position-relative overflow-hidden">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="card-title mb-0 fw-bold text-uppercase opacity-75">Total Leads</h6>
                        <i class="bi bi-people-fill fs-4 opacity-50"></i>
                    </div>
                    <h2 class="mb-0 fw-bold">{{ $totalLeads }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-dark h-100 shadow-sm border-0 position-relative overflow-hidden">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="card-title mb-0 fw-bold text-uppercase opacity-75">New Leads</h6>
                        <i class="bi bi-person-plus-fill fs-4 opacity-50"></i>
                    </div>
                    <h2 class="mb-0 fw-bold">{{ $newLeads }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-info text-white h-100 shadow-sm border-0 position-relative overflow-hidden">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="card-title mb-0 fw-bold text-uppercase opacity-75">Leads Today</h6>
                        <i class="bi bi-calendar-event-fill fs-4 opacity-50"></i>
                    </div>
                    <h2 class="mb-0 fw-bold">{{ $leadsToday }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white h-100 shadow-sm border-0 position-relative overflow-hidden">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="card-title mb-0 fw-bold text-uppercase opacity-75">Conversion Rate</h6>
                        <i class="bi bi-graph-up-arrow fs-4 opacity-50"></i>
                    </div>
                    <h2 class="mb-0 fw-bold">{{ $conversionRate }}%</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Summary Cards Row 2 (Content) -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card bg-secondary text-white h-100 shadow-sm border-0 position-relative overflow-hidden">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="card-title mb-0 fw-bold text-uppercase opacity-75">Total Blogs</h6>
                        <i class="bi bi-journal-text fs-4 opacity-50"></i>
                    </div>
                    <h2 class="mb-0 fw-bold">{{ $totalBlogs }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="background-color: #20c997; color: white; border: none;">
                <div class="card-body h-100 shadow-sm position-relative overflow-hidden">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="card-title mb-0 fw-bold text-uppercase opacity-75">Published Blogs</h6>
                        <i class="bi bi-check-circle-fill fs-4 opacity-50"></i>
                    </div>
                    <h2 class="mb-0 fw-bold">{{ $publishedBlogs }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-dark text-white h-100 shadow-sm border-0 position-relative overflow-hidden">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="card-title mb-0 fw-bold text-uppercase opacity-75">Total Categories</h6>
                        <i class="bi bi-tags-fill fs-4 opacity-50"></i>
                    </div>
                    <h2 class="mb-0 fw-bold">{{ $totalCategories }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-danger text-white h-100 shadow-sm border-0 position-relative overflow-hidden">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="card-title mb-0 fw-bold text-uppercase opacity-75">Active Sliders</h6>
                        <i class="bi bi-images fs-4 opacity-50"></i>
                    </div>
                    <h2 class="mb-0 fw-bold">{{ $totalSliders }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Lead Line Chart -->
        <div class="col-md-8 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="mb-0">Leads Over Time</h5>
                </div>
                <div class="card-body">
                    <div style="height: 300px;">
                        <canvas id="leadsTimeChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lead Status Chart -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="mb-0">Leads by Status (Selected Period)</h5>
                </div>
                <div class="card-body d-flex justify-content-center">
                    <div style="height: 300px; width: 100%;">
                        <canvas id="leadsStatusChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Recent Leads -->
        <div class="col-md-5 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center border-bottom-0 pt-3 pb-0">
                    <h6 class="mb-0 fw-bold text-uppercase text-muted">Recent Leads</h6>
                    <a href="{{ route('admin.leads.index') }}" class="text-decoration-none small">View All <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        @forelse($recentLeads as $lead)
                            <a href="{{ route('admin.leads.show', $lead->id) }}" class="list-group-item list-group-item-action px-0 border-bottom">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded-circle p-2 me-3 text-primary">
                                            <i class="bi bi-person-fill"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-bold">{{ $lead->name }}</h6>
                                            <small class="text-muted">{{ $lead->created_at->diffForHumans() }}</small>
                                        </div>
                                    </div>
                                    <div>
                                        @if($lead->status == 'New')
                                            <span class="badge bg-primary rounded-pill">New</span>
                                        @elseif($lead->status == 'Contacted')
                                            <span class="badge bg-warning rounded-pill">Contacted</span>
                                        @elseif($lead->status == 'Converted')
                                            <span class="badge bg-success rounded-pill">Converted</span>
                                        @elseif($lead->status == 'Lost')
                                            <span class="badge bg-danger rounded-pill">Lost</span>
                                        @else
                                            <span class="badge bg-secondary rounded-pill">{{ $lead->status }}</span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        @empty
                            <p class="text-center text-muted py-3 mb-0">No recent leads.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Blogs -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center border-bottom-0 pt-3 pb-0">
                    <h6 class="mb-0 fw-bold text-uppercase text-muted">Recent Blogs</h6>
                    <a href="{{ route('admin.blogs.index') }}" class="text-decoration-none small">View All <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        @forelse($recentBlogs as $blog)
                            <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="list-group-item list-group-item-action px-0 border-bottom">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-0 text-truncate" style="max-width: 180px;">{{ $blog->title }}</h6>
                                        <small class="text-muted">{{ $blog->created_at->format('M d, Y') }}</small>
                                    </div>
                                    <div>
                                        @if($blog->is_published)
                                            <span class="badge bg-success rounded-pill">Published</span>
                                        @else
                                            <span class="badge bg-warning text-dark rounded-pill">Draft</span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        @empty
                            <p class="text-center text-muted py-3 mb-0">No recent blogs.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Categories -->
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center border-bottom-0 pt-3 pb-0">
                    <h6 class="mb-0 fw-bold text-uppercase text-muted">Top Categories</h6>
                    <a href="{{ route('admin.categories.index') }}" class="text-decoration-none small">Manage <i class="bi bi-gear"></i></a>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        @forelse($topCategories as $category)
                            <div class="list-group-item px-0 border-bottom">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <span class="fw-bold">{{ $category->name }}</span>
                                    <span class="badge bg-light text-dark">{{ $category->blogs_count }} posts</span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: {{ $totalBlogs > 0 ? ($category->blogs_count / $totalBlogs) * 100 : 0 }}%"></div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center text-muted py-3 mb-0">No categories found.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Doughnut Chart (Leads by Status)
        const statusCtx = document.getElementById('leadsStatusChart').getContext('2d');
        const leadsData = @json($leadsByStatus);
        
        // Map colors securely based on status keys to ensure consistency
        const colorMap = {
            'New': 'rgba(13, 110, 253, 0.7)', // Primary
            'Contacted': 'rgba(255, 193, 7, 0.7)', // Warning
            'Converted': 'rgba(25, 135, 84, 0.7)', // Success
            'Lost': 'rgba(220, 53, 69, 0.7)' // Danger
        };
        const borderMap = {
            'New': 'rgb(13, 110, 253)',
            'Contacted': 'rgb(255, 193, 7)',
            'Converted': 'rgb(25, 135, 84)',
            'Lost': 'rgb(220, 53, 69)'
        };

        const statusLabels = Object.keys(leadsData);
        const statusValues = Object.values(leadsData);
        const bgColors = statusLabels.map(label => colorMap[label] || 'rgba(108, 117, 125, 0.7)');
        const borderColors = statusLabels.map(label => borderMap[label] || 'rgb(108, 117, 125)');
        
        new Chart(statusCtx, {
            type: 'doughnut',
            data: {
                labels: statusLabels,
                datasets: [{
                    data: statusValues,
                    backgroundColor: bgColors,
                    borderColor: borderColors,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'bottom' }
                }
            }
        });

        // Line Chart (Leads Over Time)
        const timeCtx = document.getElementById('leadsTimeChart').getContext('2d');
        const chartDates = @json($chartDates);
        const chartCounts = @json($chartCounts);

        new Chart(timeCtx, {
            type: 'line',
            data: {
                labels: chartDates,
                datasets: [{
                    label: 'Leads Acquired',
                    data: chartCounts,
                    borderColor: 'rgb(13, 110, 253)',
                    backgroundColor: 'rgba(13, 110, 253, 0.1)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.3,
                    pointBackgroundColor: 'rgb(13, 110, 253)',
                    pointRadius: 3
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { precision: 0 }
                    }
                },
                plugins: {
                    legend: { display: false }
                }
            }
        });
    });
</script>
@endsection
