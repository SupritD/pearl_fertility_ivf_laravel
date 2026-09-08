@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>Create Blog</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>

    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Title *</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                            @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="10">{{ old('content') }}</textarea>
                            @error('content')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">SEO Details</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Meta Description</label>
                            <textarea name="meta_description" class="form-control" rows="2">{{ old('meta_description') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control" value="{{ old('meta_keywords') }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">Publishing</div>
                    <div class="card-body">
                        <div class="form-check mb-3">
                            <input type="checkbox" name="is_published" class="form-check-input" value="1" id="is_published" {{ old('is_published') ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_published">Publish Blog</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Save Blog</button>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">Categories & Tags</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Categories</label>
                            <select name="categories[]" class="form-select" multiple size="4">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-muted">Hold CTRL to select multiple</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tags</label>
                            <select name="tags[]" class="form-select" multiple size="4">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">Featured Image</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image Alt</label>
                            <input type="text" name="image_alt" class="form-control" value="{{ old('image_alt') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image Caption</label>
                            <input type="text" name="image_caption" class="form-control" value="{{ old('image_caption') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
