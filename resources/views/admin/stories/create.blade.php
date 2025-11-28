@extends('layouts.app')
@section('title', 'Add Story/Testimony')

@section('content')
<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-md-8 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Add Story / Testimony</h2>

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

                    <form action="{{ route('admin.stories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Author Name</label>
                            <input type="text" name="author_name" class="form-control" value="{{ old('author_name') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Location</label>
                            <input type="text" name="location" class="form-control" value="{{ old('location') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Type <span class="text-danger">*</span></label>
                            <select name="type" class="form-select" required>
                                <option value="">-- Select Type --</option>
                                <option value="story" {{ old('type') === 'story' ? 'selected' : '' }}>Story</option>
                                <option value="testimony" {{ old('type') === 'testimony' ? 'selected' : '' }}>Testimony</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Excerpt</label>
                            <textarea name="excerpt" class="form-control" rows="3">{{ old('excerpt') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Content <span class="text-danger">*</span></label>
                            <textarea name="content" class="form-control" rows="6" required>{{ old('content') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Featured Image</label>
                            <input type="file" name="featured_image" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-select" required>
                                <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                                <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Published</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">Create Story/Testimony</button>
                        <a href="{{ route('admin.stories.index') }}" class="btn btn-secondary">Back</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
