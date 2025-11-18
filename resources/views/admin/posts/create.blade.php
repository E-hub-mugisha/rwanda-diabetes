@extends('layouts.app')
@section('title', 'Create Post')

@section('content')
<h2>Create Post</h2>

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        @error('title') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Excerpt</label>
        <textarea name="excerpt" class="form-control">{{ old('excerpt') }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Content</label>
        <textarea name="content" class="form-control" rows="8" required>{{ old('content') }}</textarea>
        @error('content') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Category</label>
        <select name="category_id" class="form-select">
            <option value="">-- Select Category --</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Tags (comma separated)</label>
        <input type="text" name="tags[]" class="form-control" value="{{ old('tags.0') }}">

    </div>

    <div class="mb-3">
        <label class="form-label">Featured Image</label>
        <input type="file" name="featured_image" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select" required>
            <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
            <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
            <option value="archived" {{ old('status') == 'archived' ? 'selected' : '' }}>Archived</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Publish Date</label>
        <input type="datetime-local" name="published_at" class="form-control" value="{{ old('published_at') }}">
    </div>

    <button type="submit" class="btn btn-primary">Create Post</button>
</form>
@endsection