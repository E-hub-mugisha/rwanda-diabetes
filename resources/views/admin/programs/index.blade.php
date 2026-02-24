@extends('layouts.app')
@section('title', 'Programs')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="card">
            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Programs</h2>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createProgramModal">
                        <i class="bi bi-plus-circle"></i> Add Program
                    </button>
                </div>

                {{-- GLOBAL ERRORS --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>There were some problems with your input:</strong>
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="table-dark">
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
                                        <img src="{{ asset('storage/'.$program->image) }}" width="60" class="rounded">
                                    @else
                                        <span class="text-muted">No image</span>
                                    @endif
                                </td>

                                <td>{{ $program->title }}</td>

                                <td>{{ \Illuminate\Support\Str::limit(strip_tags($program->short_description), 50) }}</td>

                                <td>{{ ucfirst($program->category?->name ?? 'N/A') }}</td>

                                <td>
                                    <span class="badge bg-{{ $program->status === 'published' ? 'success' : 'secondary' }}">
                                        {{ ucfirst($program->status) }}
                                    </span>
                                </td>

                                <td class="text-end">
                                    <button class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editProgramModal{{ $program->id }}">
                                        Edit
                                    </button>

                                    <form action="{{ route('admin.programs.destroy', $program) }}"
                                          method="POST"
                                          class="d-inline">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-danger btn-sm"
                                                onclick="return confirm('Delete this program?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

@foreach ($programs as $program)
{{-- EDIT MODAL --}}
                            <div class="modal fade" id="editProgramModal{{ $program->id }}" tabindex="-1">
                                <div class="modal-dialog modal-lg">
                                    <form action="{{ route('admin.programs.update', $program) }}"
                                          method="POST"
                                          enctype="multipart/form-data"
                                          class="modal-content">
                                        @csrf
                                        @method('PUT')

                                        <div class="modal-header">
                                            <h5>Edit Program</h5>
                                            <button class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">

                                            <div class="mb-3">
                                                <label>Title</label>
                                                <input type="text" name="title"
                                                       value="{{ $program->title }}"
                                                       class="form-control" required>
                                            </div>

                                            <div class="mb-3">
                                                <label>Short Description</label>
                                                <textarea name="short_description"
                                                          class="form-control"
                                                          rows="3">{{ $program->short_description }}</textarea>
                                            </div>

                                            {{-- QUILL --}}
                                            <div class="mb-3">
                                                <label class="fw-bold">Content</label>

                                                <div class="quill-editor"
                                                     data-target="content-{{ $program->id }}"
                                                     style="height:250px;">
                                                    {!! old('content', $program->content) !!}
                                                </div>

                                                <input type="hidden"
                                                       name="content"
                                                       id="content-{{ $program->id }}">
                                            </div>

                                            <div class="mb-3">
                                                <label>Category</label>
                                                <select name="category_id" class="form-select">
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ $program->category_id == $category->id ? 'selected' : '' }}>
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
                                            <button class="btn btn-primary">Update</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            @endforeach
{{-- CREATE MODAL --}}
<div class="modal fade" id="createProgramModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('admin.programs.store') }}"
              method="POST"
              enctype="multipart/form-data"
              class="modal-content">
            @csrf

            <div class="modal-header">
                <h5>Add Program</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
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

                <div class="mb-3">
                    <label class="fw-bold">Content</label>

                    <div class="quill-editor"
                         data-target="content-create"
                         style="height:250px;">
                        {!! old('content') !!}
                    </div>

                    <input type="hidden" name="content" id="content-create">
                </div>

                <div class="mb-3">
                    <label>Category</label>
                    <select name="category_id" class="form-select">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

            </div>

            <div class="modal-footer">
                <button class="btn btn-success">Create</button>
            </div>

        </form>
    </div>
</div>



{{-- QUILL --}}
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    document.querySelectorAll('.quill-editor').forEach(function (editor) {

        const quill = new Quill(editor, {
            theme: 'snow',
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

        const hiddenInput = document.getElementById(editor.dataset.target);
        const form = editor.closest('form');

        form.addEventListener('submit', function () {
            hiddenInput.value = quill.root.innerHTML;
        });
    });

});
</script>
@endsection