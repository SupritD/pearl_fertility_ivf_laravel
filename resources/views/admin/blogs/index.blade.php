@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-4">
            <h2>Blogs</h2>
        </div>
        <div class="col-md-4">
            <form action="{{ route('admin.blogs.index') }}" method="GET">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search by title..." value="{{ request('q') }}">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
        <div class="col-md-4 text-end">
            <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Create Blog</a>
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
                        <th>Title</th>
                        <th>Categories</th>
                        <th>Status</th>
                        <th>Date Published</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($blogs as $blog)
                    <tr>
                        <td>{{ $blog->title }}</td>
                        <td>
                            @foreach($blog->categories as $category)
                                <span class="badge bg-secondary">{{ $category->name }}</span>
                            @endforeach
                        </td>
                        <td>
                            @if($blog->is_published)
                                <span class="badge bg-success">Published</span>
                            @else
                                <span class="badge bg-warning">Draft</span>
                            @endif
                        </td>
                        <td>{{ $blog->published_at ? \Carbon\Carbon::parse($blog->published_at)->format('d M Y') : 'N/A' }}</td>
                        <td>
                            <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-sm btn-info text-white">Edit</a>
                            <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">No blogs found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $blogs->appends(['q' => request('q')])->links() }}
        </div>
    </div>
</div>
@endsection
