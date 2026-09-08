@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>Edit Slider</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="image_desktop" class="form-label">Desktop Image</label>
                        @if($slider->image_desktop)
                            <div class="mb-2"><img src="{{ asset('storage/'.$slider->image_desktop) }}" height="50"></div>
                        @endif
                        <input type="file" name="image_desktop" id="image_desktop" class="form-control @error('image_desktop') is-invalid @enderror" accept="image/*">
                        <small class="text-muted">Leave blank to keep current image</small>
                        @error('image_desktop')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="image_tablet" class="form-label">Tablet Image</label>
                        @if($slider->image_tablet)
                            <div class="mb-2"><img src="{{ asset('storage/'.$slider->image_tablet) }}" height="50"></div>
                        @endif
                        <input type="file" name="image_tablet" id="image_tablet" class="form-control @error('image_tablet') is-invalid @enderror" accept="image/*">
                        @error('image_tablet')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="image_mobile" class="form-label">Mobile Image</label>
                        @if($slider->image_mobile)
                            <div class="mb-2"><img src="{{ asset('storage/'.$slider->image_mobile) }}" height="50"></div>
                        @endif
                        <input type="file" name="image_mobile" id="image_mobile" class="form-control @error('image_mobile') is-invalid @enderror" accept="image/*">
                        @error('image_mobile')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="image_alt" class="form-label">Image Alt</label>
                        <input type="text" name="image_alt" id="image_alt" class="form-control @error('image_alt') is-invalid @enderror" value="{{ old('image_alt', $slider->image_alt) }}">
                        @error('image_alt')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="image_caption" class="form-label">Image Caption</label>
                        <input type="text" name="image_caption" id="image_caption" class="form-control @error('image_caption') is-invalid @enderror" value="{{ old('image_caption', $slider->image_caption) }}">
                        @error('image_caption')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="heading" class="form-label">Heading</label>
                        <input type="text" name="heading" id="heading" class="form-control @error('heading') is-invalid @enderror" value="{{ old('heading', $slider->heading) }}">
                        @error('heading')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="subheading" class="form-label">Subheading</label>
                        <input type="text" name="subheading" id="subheading" class="form-control @error('subheading') is-invalid @enderror" value="{{ old('subheading', $slider->subheading) }}">
                        @error('subheading')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="btn_text" class="form-label">Button Text</label>
                        <input type="text" name="btn_text" id="btn_text" class="form-control @error('btn_text') is-invalid @enderror" value="{{ old('btn_text', $slider->btn_text) }}">
                        @error('btn_text')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="btn_url" class="form-label">Button URL</label>
                        <input type="text" name="btn_url" id="btn_url" class="form-control @error('btn_url') is-invalid @enderror" value="{{ old('btn_url', $slider->btn_url) }}">
                        @error('btn_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3 form-check">
                        <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1" {{ old('is_active', $slider->is_active) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">Is Active</label>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="priority" class="form-label">Priority</label>
                        <input type="number" name="priority" id="priority" class="form-control @error('priority') is-invalid @enderror" value="{{ old('priority', $slider->priority) }}">
                        @error('priority')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        <small class="text-muted">Lower numbers appear first.</small>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update Slider</button>
            </form>
        </div>
    </div>
</div>
@endsection
