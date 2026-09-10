@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-12">
            <h2>Edit Review</h2>
            <a href="{{ route('admin.reviews.index') }}" class="btn btn-outline-secondary btn-sm"><i class="bi bi-arrow-left"></i> Back to Reviews</a>
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

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.reviews.update', $review->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="patient_name" class="form-label">Patient Name</label>
                    <input type="text" class="form-control" id="patient_name" name="patient_name" value="{{ old('patient_name', $review->patient_name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="rating" class="form-label">Rating (1 to 5)</label>
                    <select class="form-select" id="rating" name="rating" required>
                        <option value="5" {{ old('rating', $review->rating) == 5 ? 'selected' : '' }}>5 Stars</option>
                        <option value="4" {{ old('rating', $review->rating) == 4 ? 'selected' : '' }}>4 Stars</option>
                        <option value="3" {{ old('rating', $review->rating) == 3 ? 'selected' : '' }}>3 Stars</option>
                        <option value="2" {{ old('rating', $review->rating) == 2 ? 'selected' : '' }}>2 Stars</option>
                        <option value="1" {{ old('rating', $review->rating) == 1 ? 'selected' : '' }}>1 Star</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="review_text" class="form-label">Review Text</label>
                    <textarea class="form-control" id="summernote" name="review_text" rows="4" required>{{ old('review_text', $review->review_text) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Patient Image (Optional)</label>
                    @if($review->image)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $review->image) }}" alt="Current Image" style="height: 100px; border-radius: 5px; object-fit: cover;">
                        </div>
                    @endif
                    <input class="form-control" type="file" id="image" name="image" accept="image/*">
                    <small class="text-muted">Leave blank to keep current image.</small>
                </div>

                <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="is_published" name="is_published" value="1" {{ old('is_published', $review->is_published) ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_published">Publish Review on Website</label>
                </div>

                <button type="submit" class="btn btn-primary">Update Review</button>
            </form>
        </div>
    </div>
</div>

<!-- Summernote CSS/JS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Write the review here...',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview']]
            ]
        });
    });
</script>
@endsection
