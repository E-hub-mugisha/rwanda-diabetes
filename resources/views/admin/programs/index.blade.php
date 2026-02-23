@extends('layouts.app')
@section('title', 'Programs')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2>Programs</h2>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createProgramModal">
                            <i class="bi bi-plus-circle"></i> Add Program
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
                                            <th>Short Description</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($programs as $program)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>
                                                @if($program->image)
                                                <img src="{{asset('image/programs')}}/{{ $program->image }}" width="60" class="rounded">
                                                @else
                                                <span class="text-muted">No image</span>
                                                @endif
                                            </td>

                                            <td>{{ $program->title }}</td>

                                            <td>
                                                <span title="{{ $program->short_description }}">
                                                    {{ Str::limit($program->short_description, 50) }}
                                                </span>
                                            </td>

                                            <td>{{ ucfirst($program->category?->name ?? 'N/A') }}</td>

                                            <td>
                                                @php
                                                $statusColors = [
                                                'draft' => 'secondary',
                                                'published' => 'success',
                                                'archived' => 'warning'
                                                ];
                                                @endphp
                                                <span class="badge bg-{{ $statusColors[$program->status] ?? 'secondary' }}">
                                                    {{ ucfirst($program->status) }}
                                                </span>
                                            </td>

                                            <td class="text-end">
                                                <a class="btn btn-success btn-sm" href="{{ route('admin.programs.show', $program->slug) }}">
                                                    <i class="bi bi-eye"></i> Details
                                                </a>

                                                {{-- Edit Modal Trigger --}}
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editProgramModal{{ $program->id }}">
                                                    <i class="bi bi-pencil-square"></i> Edit
                                                </button>

                                                {{-- Status Update Modal Trigger --}}
                                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#updateStatusModal" data-program-id="{{ $program->id }}" data-program-status="{{ $program->status }}">
                                                    <i class="bi bi-arrow-repeat"></i> Update Status
                                                </button>

                                                {{-- Delete --}}
                                                <form action="{{ route('admin.programs.destroy', $program) }}" method="POST" class="d-inline">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this program?')">
                                                        <i class="bi bi-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                        {{-- Edit Modal --}}
                                        <div class="modal fade" id="editProgramModal{{ $program->id }}" tabindex="-1">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <form action="{{ route('admin.programs.update', $program) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf @method('PUT')

                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Program</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label>Title</label>
                                                                <input type="text" name="title" value="{{ $program->title }}" class="form-control" required>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label>Short Description</label>
                                                                <textarea name="short_description" class="form-control" rows="3">{{ $program->short_description }}</textarea>
                                                            </div>

                                                            {{-- Content (Quill Editor) --}}
                                                            <div class="mb-4">
                                                                <label class="form-label fw-bold">Content</label>

                                                                <!-- Quill Editor -->
                                                                <div id="quillEditor" style="height: 250px;">
                                                                    {!! old('content', $program->content) !!}
                                                                </div>

                                                                <!-- Hidden input -->
                                                                <input type="hidden" name="content" id="content">

                                                                @error('content') <div class="text-danger small">{{ $message }}</div> @enderror
                                                            </div>

                                                            <div class="mb-3">
                                                                <label>Category</label>
                                                                <select name="category_id" class="form-select">
                                                                    <option value="">-- Select Category --</option>
                                                                    @foreach($categories as $category)
                                                                    <option value="{{ $category->id }}" {{ $program->category_id == $category->id ? 'selected' : '' }}>
                                                                        {{ $category->name }}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label>Image</label>
                                                                <input type="file" name="image" class="form-control">
                                                                @if($program->image)
                                                                <img src="{{ asset('storage/' . $program->image) }}" width="100" class="mt-2 rounded">
                                                                @endif
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
<!-- Create Program Modal -->
<div class="modal fade" id="createProgramModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.programs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add Program</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Short Description</label>
                        <textarea name="short_description" class="form-control" rows="3"></textarea>
                    </div>

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
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
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
                    <h5 class="modal-title">Update Program Status</h5>
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

<!-- Include Quill -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
    var quill = new Quill('#quillEditor', {
        theme: 'snow',
        placeholder: 'Write your post content here...',
        modules: {
            toolbar: [
                [{
                    header: [1, 2, 3, false]
                }],
                ['bold', 'italic', 'underline'],
                [{
                    list: 'ordered'
                }, {
                    list: 'bullet'
                }],
                ['link', 'image'],
                ['clean']
            ]
        }
    });

    // Sync Quill content to hidden input before submit
    document.querySelector("form").addEventListener("submit", function() {
        document.querySelector("#content").value = quill.root.innerHTML;
    });
</script>

@endsection

@section('scripts')
<script>
    const statusModal = document.getElementById('updateStatusModal');
    statusModal.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget;
        const programId = button.getAttribute('data-program-id');
        const status = button.getAttribute('data-program-status');
        const form = document.getElementById('statusUpdateForm');
        form.action = `/admin/programs/${programId}/status`;
        document.getElementById('statusSelect').value = status;
    });
</script>
@endsection