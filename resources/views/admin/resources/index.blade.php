@extends('layouts.app')
@section('title', 'Resources')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2>Resources</h2>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createResourceModal">
                            <i class="bi bi-plus-circle"></i> Add Resources
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
                                            <th>Title</th>
                                            <th>Summary</th>
                                            <th>Category</th>
                                            <th>Link</th>
                                            <th>Status</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($resources as $resource)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>{{ $resource->title }}</td>

                                            <td>
                                                <span title="{{ $resource->summary }}">
                                                    {{ Str::limit($resource->summary, 50) }}
                                                </span>
                                            </td>

                                            <td>{{ ucfirst($resource->category?->name ?? 'N/A') }}</td>
                                            <td><a href="{{ $resource->external_link }}">Link External </a></td>
                                            <td>
                                                @php
                                                $statusColors = [
                                                'draft' => 'secondary',
                                                'published' => 'success',
                                                'archived' => 'warning'
                                                ];
                                                @endphp
                                                <span class="badge bg-{{ $statusColors[$resource->status] ?? 'secondary' }}">
                                                    {{ ucfirst($resource->status) }}
                                                </span>
                                            </td>

                                            <td class="text-end">
                                                <a class="btn btn-success btn-sm" href="{{ route('admin.resources.show', $resource->slug) }}">
                                                    <i class="bi bi-eye"></i> Details
                                                </a>

                                                {{-- Edit Modal Trigger --}}
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editResourceModal{{ $resource->id }}">
                                                    <i class="bi bi-pencil-square"></i> Edit
                                                </button>

                                                {{-- Status Update Modal Trigger --}}
                                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#updateStatusModal" data-resource-id="{{ $resource->id }}" data-program-status="{{ $resource->status }}">
                                                    <i class="bi bi-arrow-repeat"></i> Update Status
                                                </button>

                                                {{-- Delete --}}
                                                <form action="{{ route('admin.resources.destroy', $resource) }}" method="POST" class="d-inline">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this resource?')">
                                                        <i class="bi bi-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                        {{-- Edit Modal --}}
                                        <div class="modal fade" id="editResourceModal{{ $resource->id }}" tabindex="-1">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <form action="{{ route('admin.resources.update', $resource) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf @method('PUT')

                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Resource</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label>Title</label>
                                                                <input type="text" name="title" value="{{ $resource->title }}" class="form-control" required>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label>Summary</label>
                                                                <textarea name="summary" class="form-control" rows="3">{{ $resource->summary }}</textarea>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label>Content</label>
                                                                <textarea name="content" class="form-control" rows="6">{{ $resource->content }}</textarea>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label>Category</label>
                                                                <select name="category_id" class="form-select">
                                                                    <option value="">-- Select Category --</option>
                                                                    @foreach($categories as $category)
                                                                    <option value="{{ $category->id }}" {{ $resource->category_id == $category->id ? 'selected' : '' }}>
                                                                        {{ $category->name }}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label>external_link</label>
                                                                <input type="text" name="external_link" class="form-control" value="{{ $resource->external_link }}">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label>File</label>
                                                                <input type="file" name="file" class="form-control">

                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Update</button>
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
<!-- Create Resource Modal -->
<div class="modal fade" id="createResourceModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.resources.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add Resource</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Summary</label>
                        <textarea name="summary" class="form-control" rows="3"></textarea>
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
                        <label>external_link</label>
                        <input type="text" name="external_link" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>file</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">Create Program</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Update Status Modal (Single Reusable) -->
<div class="modal fade" id="updateStatusModal" tabindex="-1">
    <div class="modal-dialog">
        <form id="statusUpdateForm" method="POST">
            @csrf
            @method('PATCH')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Resource Status</h5>
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
        const resourceId = button.getAttribute('data-resource-id');
        const status = button.getAttribute('data-resource-status');
        const form = document.getElementById('statusUpdateForm');
        form.action = `/admin/resources/${resourceId}/status`;
        document.getElementById('statusSelect').value = status;
    });
</script>
@endsection