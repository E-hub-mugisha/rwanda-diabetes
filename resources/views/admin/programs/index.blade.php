@extends('layouts.app')
@section('title', 'Programs')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2>Programs</h2>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createProgramModal">
        Add Program
    </button>
</div>

<!-- Programs Table -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Title</th>
            <th>Short Description</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($programs as $program)
        <tr>
            <td>{{ $loop->iteration }}</td>

            <td>
                @if($program->image)
                <img src="{{ asset('storage/' . $program->image) }}" width="70">
                @else
                <span class="text-muted">No image</span>
                @endif
            </td>

            <td>{{ $program->title }}</td>
            <td>{{ Str::limit($program->short_description, 50) }}</td>
            <td>{{ ucfirst($program->status) }}</td>

            <td>
                <!-- Edit button -->
                <button class="btn btn-primary btn-sm"
                    data-bs-toggle="modal"
                    data-bs-target="#editProgramModal{{ $program->id }}">
                    Edit
                </button>

                <!-- Delete -->
                <form action="{{ route('admin.programs.destroy', $program) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Delete this program?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>

        <!-- Edit Modal -->
        <div class="modal fade" id="editProgramModal{{ $program->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="{{ route('admin.programs.update', $program) }}" method="POST" enctype="multipart/form-data">
                        @csrf @method('PUT')

                        <div class="modal-header">
                            <h5>Edit Program</h5>
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

                            <div class="mb-3">
                                <label>Content</label>
                                <textarea name="content" class="form-control" rows="6">{{ $program->content }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
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

{{ $programs->links() }}

<!-- Create Program Modal -->
<div class="modal fade" id="createProgramModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form action="{{ route('admin.programs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-header">
                    <h5>Add Program</h5>
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

                    <div class="mb-3">
                        <label>Content</label>
                        <textarea name="content" class="form-control" rows="6"></textarea>
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

@endsection