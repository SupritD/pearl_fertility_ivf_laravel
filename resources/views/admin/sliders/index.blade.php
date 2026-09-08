@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-4">
            <h2>Sliders</h2>
        </div>
        <div class="col-md-4">
            <form action="{{ route('admin.sliders.index') }}" method="GET">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search by heading..." value="{{ request('q') }}">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
        <div class="col-md-4 text-end">
            <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary">Create Slider</a>
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
                        <th>Image</th>
                        <th>Heading</th>
                        <th>Status</th>
                        <th>Created By</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($sliders as $slider)
                    <tr>
                        <td>
                            @if($slider->image_desktop)
                                <img src="{{ asset('storage/' . $slider->image_desktop) }}" alt="{{ $slider->image_alt }}" width="100">
                            @endif
                        </td>
                        <td>{{ $slider->heading }}</td>
                        <td>
                            @if($slider->is_active)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Inactive</span>
                            @endif
                        </td>
                        <td>{{ optional($slider->createdBy)->name ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('admin.sliders.edit', $slider->id) }}" class="btn btn-sm btn-info text-white">Edit</a>
                            <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this slider?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">No sliders found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $sliders->appends(['q' => request('q')])->links() }}
        </div>
    </div>
</div>
@endsection
