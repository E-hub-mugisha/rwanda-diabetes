@extends('layouts.app')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between mb-3">
        <h3>Learning Materials</h3>
        <a href="{{ route('admin.learning-materials.create') }}" class="btn btn-primary">Add New</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Thumbnail</th>
                <th>Title</th>
                <th>Type</th>
                <th>Status</th>
                <th>Author</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
        @foreach($materials as $m)
            <tr>
                <td>
                    @if($m->thumbnail)
                        <img src="{{ asset('storage/'.$m->thumbnail) }}" width="60">
                    @endif
                </td>
                <td>{{ $m->title }}</td>
                <td>{{ ucfirst($m->material_type) }}</td>
                <td>
                    <span class="badge bg-{{ $m->status == 'published' ? 'success' : 'secondary' }}">
                        {{ ucfirst($m->status) }}
                    </span>
                </td>
                <td>{{ $m->author->name ?? 'N/A' }}</td>
                <td>
                    <a href="{{ route('admin.learning-materials.show', $m->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('admin.learning-materials.edit', $m->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('admin.learning-materials.destroy', $m->id) }}"
                          method="POST" class="d-inline"
                          onsubmit="return confirm('Delete this item?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    
</div>
@endsection
