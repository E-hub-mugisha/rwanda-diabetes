@extends('layouts.app')
@section('title', $article->title)

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{ $article->title }}</h2>

                    <div class="mb-3">
                        @if($article->featured_image)
                        <img src="{{ asset('storage/' . $article->featured_image) }}" alt="{{ $article->title }}" class="img-fluid mb-3" style="max-height: 300px;">
                        @endif
                    </div>

                    <p><strong>Excerpt:</strong> {{ $article->excerpt ?? 'N/A' }}</p>

                    <p><strong>Category:</strong> {{ $article->category?->name ?? 'N/A' }}</p>
                    <p><strong>Author:</strong> {{ $article->author?->name ?? 'N/A' }}</p>

                    <p><strong>Tags:</strong>
                        @if($article->tags)
                        @foreach($article->tags as $tag)
                        <span class="badge bg-primary">{{ $tag }}</span>
                        @endforeach
                        @else
                        N/A
                        @endif
                    </p>

                    <p><strong>Status:</strong> <span class="text-capitalize">{{ $article->status }}</span></p>
                    <p><strong>Published At:</strong> {{ $article->published_at?->format('d M Y, H:i') ?? 'Not published' }}</p>

                    <hr>

                    <div class="article-content">
                        {!! $article->content !!}
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">Back to Articles</a>

                        {{-- Edit Modal Trigger --}}
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editArticleModal{{ $article->id }}">
                            <i class="bi bi-pencil-square"></i> Edit
                        </button>
                        <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this article?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

{{-- Edit Modal --}}
<div class="modal fade" id="editArticleModal{{ $article->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title">Edit Article</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ $article->title }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Excerpt</label>
                        <textarea name="excerpt" class="form-control" rows="3">{{ $article->excerpt }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label>Content</label>
                        <textarea name="content" class="form-control" rows="6">{{ $article->content }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label>Category</label>
                        <select name="category_id" class="form-select">
                            <option value="">-- Select Category --</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $article->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Tags (comma separated)</label>
                        <input type="text" name="tags" class="form-control" value="{{ $article->tags ? implode(',', $article->tags) : '' }}">
                    </div>

                    <div class="mb-3">
                        <label>Featured Image</label>
                        <input type="file" name="featured_image" class="form-control">
                        @if($article->featured_image)
                        <img src="{{ asset('storage/' . $article->featured_image) }}" width="100" class="mt-2 rounded">
                        @endif
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update Article</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection