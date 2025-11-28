@extends('layouts.app')
@section('title', 'Edit Post')

@section('content')

<div class="content-wrapper">
    <div class="row grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h4 class="mb-3">Edit Post</h4>
                        {{-- Error Messages --}}
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
                        <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Excerpt</label>
                                <textarea name="excerpt" class="form-control">{{ old('excerpt', $post->excerpt) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Content</label>
                                <textarea name="content" class="form-control" rows="8" required>{{ old('content', $post->content) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <select name="category_id" class="form-select">
                                    <option value="">-- Select Category --</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ (old('category_id', $post->category_id) == $category->id) ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tags (comma separated)</label>
                                <input type="text" name="tags" class="form-control" value="{{ old('tags', $post->tags ? implode(',', $post->tags) : '') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Featured Image</label>
                                @if($post->featured_image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="Featured Image" width="150">
                                </div>
                                @endif
                                <input type="file" name="featured_image" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select" required>
                                    <option value="draft" {{ old('status', $post->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="published" {{ old('status', $post->status) == 'published' ? 'selected' : '' }}>Published</option>
                                    <option value="archived" {{ old('status', $post->status) == 'archived' ? 'selected' : '' }}>Archived</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Publish Date</label>
                                <input type="datetime-local" name="published_at" class="form-control" value="{{ old('published_at', $post->published_at?->format('Y-m-d\TH:i')) }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update Post</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection