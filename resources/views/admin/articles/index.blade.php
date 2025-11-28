@extends('layouts.app')
@section('title', 'Articles')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2>Articles</h2>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createArticleModal">
                            <i class="bi bi-plus-circle"></i> Add Article
                        </button>
                    </div>

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

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Excerpt</th>
                                            <th>Category</th>
                                            <th>Author</th>
                                            <th>Status</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($articles as $article)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>
                                                @if($article->featured_image)
                                                <img src="{{ asset('storage/' . $article->featured_image) }}" width="60" class="rounded">
                                                @else
                                                <span class="text-muted">No image</span>
                                                @endif
                                            </td>

                                            <td>{{ $article->title }}</td>

                                            <td>
                                                <span title="{{ $article->excerpt }}">
                                                    {{ Str::limit($article->excerpt, 50) }}
                                                </span>
                                            </td>

                                            <td>{{ $article->category?->name ?? 'N/A' }}</td>
                                            <td>{{ $article->author?->name ?? 'N/A' }}</td>

                                            <td>
                                                @php
                                                $statusColors = [
                                                'draft' => 'secondary',
                                                'published' => 'success',
                                                'archived' => 'warning'
                                                ];
                                                @endphp
                                                <span class="badge bg-{{ $statusColors[$article->status] ?? 'secondary' }}">
                                                    {{ ucfirst($article->status) }}
                                                </span>
                                            </td>

                                            <td class="text-end">
                                                <a class="btn btn-success btn-sm" href="{{ route('admin.articles.show', $article->slug) }}">
                                                    <i class="bi bi-eye"></i> Details
                                                </a>

                                                {{-- Edit Modal Trigger --}}
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editArticleModal{{ $article->id }}">
                                                    <i class="bi bi-pencil-square"></i> Edit
                                                </button>

                                                {{-- Status Update Modal Trigger --}}
                                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#updateStatusModal" data-article-id="{{ $article->id }}" data-article-status="{{ $article->status }}">
                                                    <i class="bi bi-arrow-repeat"></i> Update Status
                                                </button>

                                                {{-- Delete --}}
                                                <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" class="d-inline">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this article?')">
                                                        <i class="bi bi-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

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

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Create Article Modal -->
<div class="modal fade" id="createArticleModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add Article</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Excerpt</label>
                        <textarea name="excerpt" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Content</label>
                        <textarea name="content" class="form-control" rows="6"></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Category</label>
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
                        <label>Tags (comma separated)</label>
                        <input type="text" name="tags" class="form-control" value="{{ old('tags') }}">
                    </div>

                    <div class="mb-3">
                        <label>Featured Image</label>
                        <input type="file" name="featured_image" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">Create Article</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Update Status Modal -->
<div class="modal fade" id="updateStatusModal" tabindex="-1">
    <div class="modal-dialog">
        <form id="statusUpdateForm" method="POST">
            @csrf
            @method('PATCH')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Article Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="statusSelect" class="form-label">Select Status</label>
                        <select name="status" id="statusSelect" class="form-select" required>
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                            <option value="archived">Archived</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update Status</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@section('scripts')
<script>
    const statusModal = document.getElementById('updateStatusModal');
    statusModal.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget;
        const articleId = button.getAttribute('data-article-id');
        const status = button.getAttribute('data-article-status');
        const form = document.getElementById('statusUpdateForm');
        form.action = `/admin/articles/${articleId}/status`;
        document.getElementById('statusSelect').value = status;
    });
</script>
@endsection