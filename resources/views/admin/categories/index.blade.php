@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-4">
            <h2>Categories</h2>
        </div>
        <div class="col-md-4">
            <form action="{{ route('admin.categories.index') }}" method="GET">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search categories..." value="{{ request('q') }}">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
        <div class="col-md-4 text-end">
            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Create Category</a>
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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Created By</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>{{ optional($category->createdBy)->name ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-info text-white">Edit</a>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">No categories found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $categories->appends(['q' => request('q')])->links() }}
        </div>
    </div>
</div>
@endsection
