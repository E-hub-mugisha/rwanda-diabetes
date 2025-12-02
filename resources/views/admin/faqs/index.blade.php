@extends('layouts.app')

@section('title', 'Manage FAQs')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h3>FAQs Management</h3>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addFaqModal">
            Add FAQ
        </button>
    </div>

    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Question</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($faqs as $faq)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ Str::limit($faq->question, 60) }}</td>
                        <td>
                            <span class="badge {{ $faq->is_active ? 'bg-success' : 'bg-secondary' }}">
                                {{ $faq->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>

                        <td>
                            <!-- Show -->
                            <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                data-bs-target="#showFaqModal{{ $faq->id }}">
                                View
                            </button>

                            <!-- Edit -->
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                data-bs-target="#editFaqModal{{ $faq->id }}">
                                Edit
                            </button>

                            <!-- Delete -->
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteFaqModal{{ $faq->id }}">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <!-- Show Modal -->
                    <div class="modal fade" id="showFaqModal{{ $faq->id }}" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">FAQ Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Question:</strong> {{ $faq->question }}</p>
                                    <p><strong>Answer:</strong> {!! nl2br(e($faq->answer)) !!}</p>
                                    <p>
                                        <strong>Status:</strong>
                                        {{ $faq->is_active ? 'Active' : 'Inactive' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editFaqModal{{ $faq->id }}" tabindex="-1">
                        <div class="modal-dialog">
                            <form class="modal-content" action="{{ route('admin.faqs.update', $faq->id) }}"
                                method="POST">
                                @csrf
                                @method('PUT')

                                <div class="modal-header">
                                    <h5 class="modal-title">Edit FAQ</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label>Question</label>
                                        <input type="text" class="form-control" name="question" value="{{ $faq->question }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label>Answer</label>
                                        <textarea class="form-control" name="answer" rows="5" required>{{ $faq->answer }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label>Status</label>
                                        <select name="is_active" class="form-control">
                                            <option value="1" {{ $faq->is_active ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ !$faq->is_active ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="deleteFaqModal{{ $faq->id }}" tabindex="-1">
                        <div class="modal-dialog">
                            <form class="modal-content" action="{{ route('admin.faqs.destroy', $faq->id) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')

                                <div class="modal-header">
                                    <h5 class="modal-title">Delete FAQ</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">
                                    Are you sure you want to delete this FAQ?
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-danger">Delete</button>
                                </div>

                            </form>
                        </div>
                    </div>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- ADD FAQ MODAL -->
<div class="modal fade" id="addFaqModal" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('admin.faqs.store') }}" method="POST">
            @csrf

            <div class="modal-header">
                <h5 class="modal-title">Add FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <div class="mb-3">
                    <label>Question</label>
                    <input type="text" class="form-control" name="question" required>
                </div>

                <div class="mb-3">
                    <label>Answer</label>
                    <textarea class="form-control" name="answer" rows="5" required></textarea>
                </div>

                <div class="mb-3">
                    <label>Status</label>
                    <select name="is_active" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

            </div>

            <div class="modal-footer">
                <button class="btn btn-primary">Save FAQ</button>
            </div>

        </form>
    </div>
</div>

@endsection
