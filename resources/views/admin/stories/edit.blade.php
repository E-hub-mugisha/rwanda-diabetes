@extends('layouts.app')
@section('title', 'Edit Story/Testimony')

@section('content')
<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-md-8 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Edit Story / Testimony</h2>

                    {{-- Display Validation Errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>There were some problems with your input:</strong>
                            <ul class="mt-2 mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Success Message --}}
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.stories.update', $story) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" value="{{ old('title', $story->title) }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Author Name</label>
                            <input type="text" name="author_name" class="form-control" value="{{ old('author_name', $story->author_name) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Location</label>
                            <input type="text" name="location" class="form-control" value="{{ old('location', $story->location) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Type <span class="text-danger">*</span></label>
                            <select name="type" class="form-select" required>
                                <option value="story" {{ old('type', $story->type) === 'story' ? 'selected' : '' }}>Story</option>
                                <option value="testimony" {{ old('type', $story->type) === 'testimony' ? 'selected' : '' }}>Testimony</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Excerpt</label>
                            <textarea name="excerpt" class="form-control" rows="3">{{ old('excerpt', $story->excerpt) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Content <span class="text-danger">*</span></label>
                            <textarea name="content" class="form-control" rows="6" required>{{ old('content', $story->content) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Featured Image</label>
                            @if($story->featured_image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $story->featured_image) }}" alt="Featured Image" width="150">
                                </div>
                            @endif
                            <input type="file" name="featured_image" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-select" required>
                                <option value="draft" {{ old('status', $story->status) === 'draft' ? 'selected' : '' }}>Draft</option>
                                <option value="published" {{ old('status', $story->status) === 'published' ? 'selected' : '' }}>Published</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Story/Testimony</button>
                        <a href="{{ route('admin.stories.index') }}" class="btn btn-secondary">Back</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
