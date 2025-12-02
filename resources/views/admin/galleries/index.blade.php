@extends('layouts.app')
@section('title', 'Manage Gallery')
@section('content')
<div class="container">

    <div class="d-flex justify-content-between mb-3">
        <h3>Gallery</h3>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addGalleryModal">Add New</button>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Type</th>
                <th>Preview</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($galleries as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ ucfirst($item->type) }}</td>
                <td>
                    @if($item->type === 'image' && $item->image)
                        <img src="{{ asset('storage/'.$item->image) }}" width="80">
                    @elseif($item->type === 'video' && $item->video_url)
                        <a href="{{ $item->video_url }}" target="_blank">Watch Video</a>
                    @endif
                </td>
                <td>
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                        data-bs-target="#editGalleryModal{{ $item->id }}">Edit</button>

                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                        data-bs-target="#deleteGalleryModal{{ $item->id }}">Delete</button>
                </td>
            </tr>

            <!-- Edit Modal -->
            <div class="modal fade" id="editGalleryModal{{ $item->id }}" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <form class="modal-content" action="{{ route('admin.galleries.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Gallery Item</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $item->title }}">
                            </div>

                            <div class="mb-3">
                                <label>Type</label>
                                <select name="type" class="form-control">
                                    <option value="image" {{ $item->type == 'image' ? 'selected' : '' }}>Image</option>
                                    <option value="video" {{ $item->type == 'video' ? 'selected' : '' }}>Video</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                                @if($item->image)
                                    <img src="{{ asset('storage/'.$item->image) }}" width="100" class="mt-2">
                                @endif
                            </div>

                            <div class="mb-3">
                                <label>Video URL</label>
                                <input type="text" name="video_url" class="form-control" value="{{ $item->video_url }}">
                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="4">{{ $item->description }}</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Delete Modal -->
            <div class="modal fade" id="deleteGalleryModal{{ $item->id }}" tabindex="-1">
                <div class="modal-dialog">
                    <form class="modal-content" action="{{ route('admin.galleries.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Gallery Item</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete "{{ $item->title }}"?
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

<!-- Add Modal -->
<div class="modal fade" id="addGalleryModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <form class="modal-content" action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Add Gallery Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Type</label>
                    <select name="type" class="form-control">
                        <option value="image">Image</option>
                        <option value="video">Video</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Video URL</label>
                    <input type="text" name="video_url" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
