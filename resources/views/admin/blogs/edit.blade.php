@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>Edit Blog</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>

    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Title *</label>
                            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $blog->title) }}" required>
                            @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label class="form-label mb-0" for="slug">Slug (URL) *</label>
                                <button type="button" id="btn-generate-slug" class="btn btn-sm btn-link text-decoration-none p-0">
                                    <i class="bi bi-arrow-repeat"></i> Auto Generate
                                </button>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted small">{{ url('/blogs') }}/</span>
                                <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $blog->slug) }}" placeholder="auto-generated-slug">
                            </div>
                            @error('slug')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                            <small class="text-muted">Unique URL identifier for this blog post. Auto-generated from title or custom editable.</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea name="content" id="summernote" class="form-control @error('content') is-invalid @enderror" rows="10">{{ old('content', $blog->content) }}</textarea>
                            @error('content')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">SEO Details</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label class="form-label mb-0" for="meta_title">Meta Title</label>
                                <button type="button" id="btn-generate-meta-title" class="btn btn-sm btn-link text-decoration-none p-0">
                                    <i class="bi bi-arrow-repeat"></i> Auto Generate
                                </button>
                            </div>
                            <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ old('meta_title', $blog->meta_title) }}">
                            <div class="d-flex justify-content-between text-muted small mt-1">
                                <span>Format: <code>Pearl Fertility and IVF | {Title}</code></span>
                                <span id="meta_title_char_count">0 characters</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Meta Description</label>
                            <textarea name="meta_description" class="form-control" rows="2">{{ old('meta_description', $blog->meta_description) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control" value="{{ old('meta_keywords', $blog->meta_keywords) }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">Publishing</div>
                    <div class="card-body">
                        <div class="form-check mb-3">
                            <input type="checkbox" name="is_published" class="form-check-input" value="1" id="is_published" {{ old('is_published', $blog->is_published) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_published">Publish Blog</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Update Blog</button>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">Categories & Tags</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Categories</label>
                            <select name="categories[]" class="form-select" multiple size="4">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ in_array($category->id, old('categories', $blog->categories->pluck('id')->toArray())) ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="text-muted">Hold CTRL to select multiple</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tags</label>
                            <select name="tags[]" class="form-select" multiple size="4">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}" {{ in_array($tag->id, old('tags', $blog->tags->pluck('id')->toArray())) ? 'selected' : '' }}>
                                        {{ $tag->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Featured Image</span>
                        <span class="badge bg-light text-muted border">Comparison</span>
                    </div>
                    <div class="card-body">
                        <!-- Image Comparison Area -->
                        <div class="mb-3">
                            <label class="form-label fw-bold mb-2">
                                <i class="bi bi-images me-1 text-primary"></i> Image Preview & Comparison
                            </label>
                            <div class="row g-2">
                                <!-- Previous / Current Active Image -->
                                <div class="col-6">
                                    <div class="border rounded p-2 bg-light text-center h-100">
                                        <div class="d-flex justify-content-between align-items-center mb-2 px-1">
                                            <span class="badge bg-secondary"><i class="bi bi-clock-history me-1"></i> Current Image</span>
                                            <span class="badge bg-dark-subtle text-dark small">Active</span>
                                        </div>
                                        <div class="bg-white rounded border p-2 d-flex align-items-center justify-content-center" style="min-height: 160px; max-height: 200px;">
                                            @if($blog->image)
                                                <img src="{{ asset('storage/'.$blog->image) }}" id="current_image_display" class="img-fluid rounded" style="max-height: 180px; object-fit: contain;" alt="{{ $blog->image_alt }}">
                                            @else
                                                <div class="text-muted small py-4">
                                                    <i class="bi bi-image fs-1 d-block text-secondary opacity-50 mb-1"></i>
                                                    No current image
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mt-2 small text-muted text-truncate" title="{{ $blog->image ? basename($blog->image) : 'No file' }}">
                                            {{ $blog->image ? basename($blog->image) : 'None' }}
                                        </div>
                                    </div>
                                </div>

                                <!-- New Image Selected (Comparison) -->
                                <div class="col-6">
                                    <div class="border rounded p-2 bg-light text-center h-100 position-relative" id="new_image_card">
                                        <div class="d-flex justify-content-between align-items-center mb-2 px-1">
                                            <span class="badge bg-success" id="new_badge"><i class="bi bi-sparkles me-1"></i> New Image</span>
                                            <button type="button" id="btn_cancel_new_image" class="btn btn-sm btn-outline-danger py-0 px-2 d-none" title="Cancel new image selection">
                                                <i class="bi bi-x-lg"></i>
                                            </button>
                                        </div>
                                        <div class="bg-white rounded border p-2 d-flex align-items-center justify-content-center" style="min-height: 160px; max-height: 200px;">
                                            <!-- Placeholder before selection -->
                                            <div id="new_image_placeholder" class="text-muted small py-3 px-2">
                                                <i class="bi bi-cloud-arrow-up fs-2 d-block text-primary opacity-75 mb-1"></i>
                                                <span>Choose a new file below to preview & compare</span>
                                            </div>
                                            <!-- Preview element once new file chosen -->
                                            <img id="new_image_preview" src="#" alt="New Preview" class="img-fluid rounded d-none" style="max-height: 180px; object-fit: contain;">
                                        </div>
                                        <div class="mt-2 small text-success fw-semibold text-truncate d-none" id="new_image_details"></div>
                                    </div>
                                </div>
                            </div>
                            @if($blog->image)
                                <div class="alert alert-info py-2 px-3 mt-2 mb-0 small">
                                    <i class="bi bi-info-circle me-1"></i>
                                    Uploading a new image will replace the current active image when you update.
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="blog_image_input">Upload New Image</label>
                            <input type="file" name="image" id="blog_image_input" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                            @error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            <small class="text-muted">Supported: JPG, PNG, WEBP (Max: 2MB). Leave empty to keep current image.</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image Alt</label>
                            <input type="text" name="image_alt" class="form-control" value="{{ old('image_alt', $blog->image_alt) }}" placeholder="Image description for SEO">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image Caption</label>
                            <input type="text" name="image_caption" class="form-control" value="{{ old('image_caption', $blog->image_caption) }}" placeholder="Optional image caption">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Summernote CSS/JS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Write your blog content here...',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            styleTags: ['p', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6']
        });

        // Slug & Meta Title Auto-generation
        const $title = $('input[name="title"]');
        const $slug = $('input[name="slug"]');
        const $metaTitle = $('input[name="meta_title"]');
        const $charCount = $('#meta_title_char_count');

        function slugify(text) {
            return text.toString().toLowerCase().trim()
                .replace(/&/g, 'and')
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/[\s-]+/g, '-')
                .replace(/^-+|-+$/g, '');
        }

        const initialTitle = $title.val().trim();
        const initialExpected = initialTitle ? ('Pearl Fertility and IVF | ' + initialTitle) : '';
        let isMetaTitleManuallyEdited = ($metaTitle.val().trim() !== '' && $metaTitle.val().trim() !== initialExpected);

        const initialSlug = $slug.val().trim();
        const initialExpectedSlug = initialTitle ? slugify(initialTitle) : '';
        let isSlugManuallyEdited = (initialSlug !== '' && initialSlug !== initialExpectedSlug);

        function updateCharCount() {
            if ($charCount.length && $metaTitle.length) {
                const len = $metaTitle.val().length;
                $charCount.text(len + ' characters');
            }
        }

        function generateMetaTitle() {
            const rawTitle = $title.val().trim();
            if (rawTitle.length > 0) {
                $metaTitle.val('Pearl Fertility and IVF | ' + rawTitle);
            } else {
                $metaTitle.val('');
            }
            updateCharCount();
        }

        function generateSlug() {
            const rawTitle = $title.val().trim();
            $slug.val(slugify(rawTitle));
        }

        updateCharCount();

        // If meta_title was empty on load, auto-generate it
        if ($metaTitle.val().trim() === '' && $title.val().trim().length > 0) {
            generateMetaTitle();
        }

        // If slug was empty on load, auto-generate it
        if ($slug.val().trim() === '' && $title.val().trim().length > 0) {
            generateSlug();
        }

        // When title input changes
        $title.on('input propertychange', function() {
            if (!isSlugManuallyEdited || $slug.val().trim() === '') {
                generateSlug();
            }
            if (!isMetaTitleManuallyEdited || $metaTitle.val().trim() === '') {
                generateMetaTitle();
            }
        });

        // Track manual changes to slug
        $slug.on('input propertychange', function() {
            const expected = slugify($title.val());
            if ($(this).val().trim() !== expected) {
                isSlugManuallyEdited = true;
            }
        });

        // Track manual changes to meta_title
        $metaTitle.on('input propertychange', function() {
            const expected = $title.val().trim() ? ('Pearl Fertility and IVF | ' + $title.val().trim()) : '';
            if ($(this).val().trim() !== expected) {
                isMetaTitleManuallyEdited = true;
            }
            updateCharCount();
        });

        // Manual click to regenerate slug
        $('#btn-generate-slug').on('click', function(e) {
            e.preventDefault();
            isSlugManuallyEdited = false;
            generateSlug();
        });

        // Manual click to regenerate meta title
        $('#btn-generate-meta-title').on('click', function(e) {
            e.preventDefault();
            isMetaTitleManuallyEdited = false;
            generateMetaTitle();
        });

        // Image Comparison Live Preview
        const $imageInput = $('#blog_image_input');
        const $newImagePreview = $('#new_image_preview');
        const $newImagePlaceholder = $('#new_image_placeholder');
        const $newImageDetails = $('#new_image_details');
        const $cancelBtn = $('#btn_cancel_new_image');

        function resetNewImagePreview() {
            $imageInput.val('');
            $newImagePreview.attr('src', '#').addClass('d-none');
            $newImagePlaceholder.removeClass('d-none');
            $cancelBtn.addClass('d-none');
            $newImageDetails.empty().addClass('d-none');
        }

        $imageInput.on('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                if (!file.type.startsWith('image/')) {
                    alert('Please select a valid image file (JPG, PNG, WEBP).');
                    resetNewImagePreview();
                    return;
                }
                const reader = new FileReader();
                reader.onload = function(evt) {
                    $newImagePreview.attr('src', evt.target.result).removeClass('d-none');
                    $newImagePlaceholder.addClass('d-none');
                    $cancelBtn.removeClass('d-none');
                    const sizeInKB = (file.size / 1024).toFixed(1);
                    $newImageDetails.html('<strong>' + file.name + '</strong> (' + sizeInKB + ' KB)').removeClass('d-none');
                };
                reader.readAsDataURL(file);
            } else {
                resetNewImagePreview();
            }
        });

        $cancelBtn.on('click', function(e) {
            e.preventDefault();
            resetNewImagePreview();
        });
    });
</script>
@endsection
