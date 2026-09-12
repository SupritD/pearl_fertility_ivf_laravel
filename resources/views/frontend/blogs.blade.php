@extends('frontend.layouts.master')

@section('content')
<div class="container py-5">
    <div class="row mb-5">
        <div class="col-md-12 text-center">
            <h1 class="fw-bold mb-3">Our Blogs</h1>
            <p class="lead text-muted">Stay up to date with the latest insights, tips, and news.</p>
        </div>
    </div>

    <div class="row">
        @forelse($blogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    @if($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" alt="{{ $blog->image_alt ?? $blog->title }}" style="height: 200px; object-fit: cover;">
                    @else
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                            <i class="bi bi-image text-muted" style="font-size: 3rem;"></i>
                        </div>
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">
                            <a href="{{ route('frontend.blogs.show', $blog->slug) }}" class="text-dark text-decoration-none">{{ $blog->title }}</a>
                        </h5>
                        <p class="card-text text-muted small mb-3">
                            <i class="bi bi-calendar3"></i> {{ $blog->created_at->format('M d, Y') }}
                        </p>
                        <p class="card-text flex-grow-1">
                            {{ Str::limit(strip_tags($blog->content), 100) }}
                        </p>
                        <a href="{{ route('frontend.blogs.show', $blog->slug) }}" class="btn btn-outline-primary mt-auto align-self-start">Read More</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="text-muted">No blogs published yet. Check back soon!</p>
            </div>
        @endforelse
    </div>

    <div class="row mt-4">
        <div class="col-12 d-flex justify-content-center">
            {{ $blogs->links() }}
        </div>
    </div>
</div>
@endsection