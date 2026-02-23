@extends('layouts.app')
@section('title', 'Create Post')

@section('content')

<div class="content-wrapper">
    <div class="row grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h4 class="mb-3">Create New Post</h4>
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

                        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- Title --}}
                            <div class="mb-4">
                                <label class="form-label fw-bold">Title</label>
                                <input type="text" name="title" class="form-control form-control-lg" placeholder="Enter post title..." value="{{ old('title') }}" required>
                                @error('title') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>

                            {{-- Excerpt --}}
                            <div class="mb-4">
                                <label class="form-label fw-bold">Excerpt</label>
                                <textarea name="excerpt" class="form-control" rows="3" placeholder="Short summary here...">{{ old('excerpt') }}</textarea>
                            </div>

                            {{-- Content (Quill Editor) --}}
                            {{-- Content (Quill Editor) --}}
                            <div class="mb-4">
                                <label class="form-label fw-bold">Content</label>

                                <!-- Quill Editor -->
                                <div id="quillEditor" style="height: 250px;">
                                    {!! old('content') !!}
                                </div>

                                <!-- Hidden input -->
                                <input type="hidden" name="content" id="content">

                                @error('content') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>

                            {{-- Category --}}
                            <div class="mb-4">
                                <label class="form-label fw-bold">Category</label>
                                <select name="category_id" class="form-select">
                                    <option value="">-- Select Category --</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Tags --}}
                            <div class="mb-4">
                                <label class="form-label fw-bold">Tags <small class="text-muted">(comma separated)</small></label>
                                <input type="text" name="tags[]" class="form-control" placeholder="e.g. health, diabetes, rwanda" value="{{ old('tags.0') }}">
                            </div>

                            {{-- Featured Image --}}
                            <div class="mb-4">
                                <label class="form-label fw-bold">Featured Image</label>
                                <input type="file" name="featured_image" class="form-control">
                            </div>

                            {{-- Status --}}
                            <div class="mb-4">
                                <label class="form-label fw-bold">Status</label>
                                <select name="status" class="form-select" required>
                                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                                    <option value="archived" {{ old('status') == 'archived' ? 'selected' : '' }}>Archived</option>
                                </select>
                            </div>

                            {{-- Publish Date --}}
                            <div class="mb-4">
                                <label class="form-label fw-bold">Publish Date</label>
                                <input type="datetime-local" name="published_at" class="form-control" value="{{ old('published_at') }}">
                            </div>

                            {{-- Submit --}}
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-check-circle"></i> Create Post
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Include Quill -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
    var quill = new Quill('#quillEditor', {
        theme: 'snow',
        placeholder: 'Write your post content here...',
        modules: {
            toolbar: [
                [{ header: [1, 2, 3, false] }],
                ['bold', 'italic', 'underline'],
                [{ list: 'ordered' }, { list: 'bullet' }],
                ['link', 'image'],
                ['clean']
            ]
        }
    });

    // Sync Quill content to hidden input before submit
    document.querySelector("form").addEventListener("submit", function () {
        document.querySelector("#content").value = quill.root.innerHTML;
    });
</script>

@endsection