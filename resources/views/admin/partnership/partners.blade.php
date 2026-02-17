@extends('layouts.app')
@section('title', 'Partners Management')
@section('content')

<style>
    .bg-purple {
        background-color: #6f42c1;
        color: #fff;
    }
</style>

<div class="container py-4">

    <div class="d-flex justify-content-between mb-3">
        <h3>Partners Management</h3>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPartnerModal">Add Partner</button>
        <a class="btn btn-success" href="{{ route('admin.partnership.requests.index') }}">Partnership Request</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Logo</th>
                <th>Name</th>
                <th>Type</th>
                <th>Email</th>
                <th>Status</th>
                <th width="180">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($partners as $partner)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if($partner->logo)
                    <img src="{{asset('image/partners')}}/{{ $partner->logo }}" width="60">
                    @else
                    <span class="text-muted">No logo</span>
                    @endif
                </td>
                <td>{{ $partner->name }}</td>
                <td>@php
                    $badgeColors = [
                    'hospital' => 'bg-success',
                    'university' => 'bg-primary',
                    'ngo' => 'bg-purple',
                    'corporate' => 'bg-info',
                    'government' => 'bg-dark',
                    'media' => 'bg-warning text-dark',
                    'other' => 'bg-secondary',
                    ];
                    @endphp

                    <span class="badge {{ $badgeColors[$partner->type] ?? 'bg-secondary' }}">
                        {{ ucfirst($partner->type) }}
                    </span>
                </td>
                <td>{{ $partner->email }}</td>
                <td>{{ $partner->status }}</td>
                <td>

                    <!-- Show -->
                    <button class="btn btn-info btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#showPartnerModal{{ $partner->id }}">
                        View
                    </button>

                    <!-- Edit -->
                    <button class="btn btn-warning btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#editPartnerModal{{ $partner->id }}">
                        Edit
                    </button>

                    <!-- Delete -->
                    <form action="{{ route('admin.partners.destroy', $partner->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this partner?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>

                </td>
            </tr>

            <!-- SHOW MODAL -->
            <div class="modal fade" id="showPartnerModal{{ $partner->id }}">
                <div class="modal-dialog">
                    <div class="modal-content p-3">
                        <h4>{{ $partner->name }}</h4>
                        <hr>
                        <p><strong>Email:</strong> {{ $partner->email }}</p>
                        <p><strong>Phone:</strong> {{ $partner->phone }}</p>
                        <p><strong>Website:</strong> {{ $partner->website }}</p>
                        <p><strong>Type:</strong> @php
                            $badgeColors = [
                            'hospital' => 'bg-success',
                            'university' => 'bg-primary',
                            'ngo' => 'bg-purple',
                            'corporate' => 'bg-info',
                            'government' => 'bg-dark',
                            'media' => 'bg-warning text-dark',
                            'other' => 'bg-secondary',
                            ];
                            @endphp

                            <span class="badge {{ $badgeColors[$partner->type] ?? 'bg-secondary' }}">
                                {{ ucfirst($partner->type) }}
                            </span>
                        </p>
                        <p><strong>Status:</strong> {{ $partner->status }}</p>
                        <p><strong>Description:</strong><br>{{ $partner->description }}</p>
                    </div>
                </div>
            </div>

            <!-- EDIT MODAL -->
            <div class="modal fade" id="editPartnerModal{{ $partner->id }}">
                <form action="{{ route('admin.partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-dialog">
                        <div class="modal-content p-3">
                            <h4>Edit Partner</h4>
                            <hr>

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $partner->name }}" required>
                            </div>

                            <div class="mb-3">
                                <label>Logo</label>
                                <input type="file" name="logo" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Website</label>
                                <input type="text" name="website" class="form-control" value="{{ $partner->website }}">
                            </div>

                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $partner->email }}">
                            </div>

                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{ $partner->phone }}">
                            </div>

                            <div class="mb-3">
                                <label>Type</label>
                                <select name="type" class="form-control" required>
                                    <option value="hospital" {{ $partner->type == 'hospital' ? 'selected' : '' }}>Hospital</option>
                                    <option value="university" {{ $partner->type == 'university' ? 'selected' : '' }}>University</option>
                                    <option value="ngo" {{ $partner->type == 'ngo' ? 'selected' : '' }}>NGO</option>
                                    <option value="corporate" {{ $partner->type == 'corporate' ? 'selected' : '' }}>Corporate</option>
                                    <option value="government" {{ $partner->type == 'government' ? 'selected' : '' }}>Government</option>
                                    <option value="media" {{ $partner->type == 'media' ? 'selected' : '' }}>Media</option>
                                    <option value="other" {{ $partner->type == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="active" {{ $partner->status=='active'?'selected':'' }}>Active</option>
                                    <option value="inactive" {{ $partner->status=='inactive'?'selected':'' }}>Inactive</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control">{{ $partner->description }}</textarea>
                            </div>

                            <button class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>

            @endforeach
        </tbody>
    </table>
</div>

<!-- ADD PARTNER MODAL -->
<div class="modal fade" id="addPartnerModal">
    <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content p-3">

                <h4>Add New Partner</h4>
                <hr>

                <div class="mb-3">
                    <label>Name *</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Logo</label>
                    <input type="file" name="logo" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Website</label>
                    <input type="text" name="website" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Type</label>
                    <select name="type" class="form-control" required>
                        <option value="hospital">Hospital</option>
                        <option value="university">University</option>
                        <option value="ngo">NGO</option>
                        <option value="corporate">Corporate</option>
                        <option value="government">Government</option>
                        <option value="media">Media</option>
                        <option value="other" selected>Other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                <button class="btn btn-success">Save Partner</button>

            </div>
        </div>
    </form>
</div>

@endsection