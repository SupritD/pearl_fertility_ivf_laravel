@extends('frontend.layouts.master')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('frontend.blogs.index') }}">Blogs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($blog->title, 40) }}</li>
                </ol>
            </nav>

            @if($blog->image)
                <div class="mb-4 text-center">
                    <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid rounded shadow-sm w-100" alt="{{ $blog->image_alt ?? $blog->title }}" style="max-height: 500px; object-fit: cover;">
                    @if($blog->image_caption)
                        <p class="text-muted mt-2 small fst-italic">{{ $blog->image_caption }}</p>
                    @endif
                </div>
            @endif

            <h1 class="fw-bold mb-3">{{ $blog->title }}</h1>
            
            <div class="d-flex align-items-center text-muted mb-4">
                <span class="me-3"><i class="bi bi-calendar3"></i> {{ $blog->created_at->format('F d, Y') }}</span>
                @if($blog->categories->count() > 0)
                    <span><i class="bi bi-folder"></i> 
                        @foreach($blog->categories as $category)
                            <span class="badge bg-secondary me-1">{{ $category->name }}</span>
                        @endforeach
                    </span>
                @endif
            </div>

            <div class="blog-content" style="line-height: 1.8; font-size: 1.1rem;">
                {!! $blog->content !!}
            </div>

            @if($blog->tags->count() > 0)
                <div class="mt-5 pt-4 border-top">
                    <h5 class="fw-bold mb-3">Tags</h5>
                    <div>
                        @foreach($blog->tags as $tag)
                            <span class="badge bg-light text-dark border me-2 mb-2 px-3 py-2">{{ $tag->name }}</span>
                        @endforeach
                    </div>
                </div>
            @endif
            
            <div class="mt-5 text-center">
                <a href="{{ route('frontend.blogs.index') }}" class="btn btn-outline-primary"><i class="bi bi-arrow-left"></i> Back to all blogs</a>
            </div>
        </div>
    </div>

    {{-- Related Blogs --}}
    @if(isset($related_blogs) && $related_blogs->count() > 0)
        <div class="row mt-5 pt-5 border-top">
            <div class="col-12 mb-4">
                <h3 class="fw-bold">Related Blogs</h3>
            </div>
            @foreach($related_blogs as $related)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        @if($related->image)
                            <img src="{{ asset('storage/' . $related->image) }}" class="card-img-top" alt="{{ $related->image_alt ?? $related->title }}" style="height: 200px; object-fit: cover;">
                        @else
                            <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                                <i class="bi bi-image text-muted" style="font-size: 3rem;"></i>
                            </div>
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">
                                <a href="{{ route('frontend.blogs.show', $related->slug) }}" class="text-dark text-decoration-none">{{ Str::limit($related->title, 50) }}</a>
                            </h5>
                            <p class="card-text text-muted small mb-3">
                                <i class="bi bi-calendar3"></i> {{ $related->created_at->format('M d, Y') }}
                            </p>
                            <p class="card-text flex-grow-1">
                                {{ Str::limit(strip_tags($related->content), 80) }}
                            </p>
                            <a href="{{ route('frontend.blogs.show', $related->slug) }}" class="btn btn-outline-primary mt-auto align-self-start">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    {{-- Recent Blogs --}}
    @if(isset($recent_blogs) && $recent_blogs->count() > 0)
        <div class="row mt-5 pt-5 border-top">
            <div class="col-12 mb-4">
                <h3 class="fw-bold">Recent Blogs</h3>
            </div>
            @foreach($recent_blogs as $recent)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        @if($recent->image)
                            <img src="{{ asset('storage/' . $recent->image) }}" class="card-img-top" alt="{{ $recent->image_alt ?? $recent->title }}" style="height: 200px; object-fit: cover;">
                        @else
                            <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                                <i class="bi bi-image text-muted" style="font-size: 3rem;"></i>
                            </div>
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">
                                <a href="{{ route('frontend.blogs.show', $recent->slug) }}" class="text-dark text-decoration-none">{{ Str::limit($recent->title, 50) }}</a>
                            </h5>
                            <p class="card-text text-muted small mb-3">
                                <i class="bi bi-calendar3"></i> {{ $recent->created_at->format('M d, Y') }}
                            </p>
                            <p class="card-text flex-grow-1">
                                {{ Str::limit(strip_tags($recent->content), 80) }}
                            </p>
                            <a href="{{ route('frontend.blogs.show', $recent->slug) }}" class="btn btn-outline-primary mt-auto align-self-start">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
