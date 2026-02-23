@extends('layouts.app')
@section('title', 'Team Members')
@section('content')
<div class="container py-4">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold">Team Members</h3>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
            <i class="ti ti-plus"></i> Add Member
        </button>
    </div>

    <!-- Team Table -->
    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th width="180">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teamMembers as $member)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('storage/'.$member->photo) }}" width="50" class="rounded">
                        </td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->position }}</td>
                        <td>{{ $member->role }}</td>
                        <td>{{ $member->email }}</td>
                        <td>
                            <span class="badge bg-success">{{ ucfirst($member->status) }}</span>
                        </td>
                        <td>

                            <!-- Show -->
                            <button class="btn btn-info btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#showModal{{ $member->id }}">
                                <i class="ti ti-eye"></i>
                            </button>

                            <!-- Edit -->
                            <button class="btn btn-warning btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#editModal{{ $member->id }}">
                                <i class="ti ti-pencil"></i>
                            </button>

                            <!-- Delete -->
                            <button class="btn btn-danger btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $member->id }}">
                                <i class="ti ti-trash"></i>
                            </button>

                        </td>
                    </tr>



                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@foreach($teamMembers as $member)
<!-- ================= SHOW MODAL ================= -->
<div class="modal fade" id="showModal{{ $member->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title">Team Member Details</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex gap-3">
                    <img src="{{ asset('storage/'.$member->photo) }}" width="150" class="rounded">
                    <div>
                        <h4>{{ $member->name }}</h4>
                        <p class="text-muted">{{ $member->position }} — <strong>{{ $member->role }}</strong></p>

                        <p><strong>Email:</strong> {{ $member->email }}</p>
                        <p><strong>Phone:</strong> {{ $member->phone }}</p>
                        <p><strong>Status:</strong> {{ ucfirst($member->status) }}</p>

                        <p class="mt-3"><strong>Bio:</strong></p>
                        <p>{{ $member->bio }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ================= EDIT MODAL ================= -->
<div class="modal fade" id="editModal{{ $member->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('admin.team-members.update', $member->id) }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            @method('PUT')

            <div class="modal-header bg-warning">
                <h5 class="modal-title">Edit Member</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <div class="row">
                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $member->name }}" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label>Position</label>
                        <input type="text" name="position" value="{{ $member->position }}" class="form-control" required>
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Role</label>
                        <input type="text" name="role" value="{{ $member->role }}" class="form-control" required>
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="active" {{ $member->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $member->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ $member->email }}" class="form-control">
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Phone</label>
                        <input type="text" name="phone" value="{{ $member->phone }}" class="form-control">
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Bio</label>

                        <!-- Quill Editor with unique ID -->
                        <div id="quillEditor-{{ $member->id }}" class="quill-editor" style="height: 250px;">
                            {!! old('bio', $member->bio) !!}
                        </div>

                        <!-- Hidden input with unique ID -->
                        <input type="hidden" name="bio" id="bio-{{ $member->id }}">

                        @error('bio') <div class="text-danger small">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-12 mt-3">
                        <label>Photo (optional)</label>
                        <input type="file" name="photo" class="form-control">
                        <small class="text-muted">Leave empty to keep current photo.</small>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button class="btn btn-warning">Update</button>
            </div>
        </form>
    </div>
</div>

<!-- ================= DELETE MODAL ================= -->
<div class="modal fade" id="deleteModal{{ $member->id }}" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.team-members.destroy', $member->id) }}" method="POST" class="modal-content">
            @csrf
            @method('DELETE')
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Delete Member</h5>
            </div>
            <div class="modal-body">
                Are you sure you want to delete <strong>{{ $member->name }}</strong>?
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button class="btn btn-danger">Delete</button>
            </div>
        </form>
    </div>
</div>
@endforeach
<!-- ================= ADD MODAL ================= -->
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('admin.team-members.store') }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Add Team Member</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label>Position</label>
                        <input type="text" name="position" class="form-control" required>
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Role</label>
                        <input type="text" name="role" class="form-control" required>
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label fw-bold">bio</label>

                        <!-- Quill Editor -->
                        <div id="quillEditor-add" class="quill-editor" style="height: 250px;">
                            {!! old('bio') !!}
                        </div>
                        <input type="hidden" name="bio" id="bio-add">

                        @error('bio') <div class="text-danger small">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-12 mt-3">
                        <label>Photo</label>
                        <input type="file" name="photo" class="form-control" required>
                    </div>

                </div>

            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button class="btn btn-primary">Save</button>
            </div>

        </form>
    </div>
</div>

<!-- Include Quill -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Initialize all editors
        document.querySelectorAll('.quill-editor').forEach(function(editorDiv) {
            var quill = new Quill(editorDiv, {
                theme: 'snow',
                placeholder: 'Write your bio here...',
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

            // Find the corresponding hidden input
            var hiddenInputId = editorDiv.id.replace('quillEditor', 'bio');
            var hiddenInput = document.getElementById(hiddenInputId);

            // Sync Quill content on form submit
            editorDiv.closest('form').addEventListener('submit', function() {
                hiddenInput.value = quill.root.innerHTML;
            });
        });
    });
</script>
@endsection