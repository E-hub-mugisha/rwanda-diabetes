@extends('layouts.app')
@section('title', 'Posts')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Posts</h2>
    <a href="{{ route('admin.posts.create') }}" class="btn btn-success">Create New Post</a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Category</th>
            <th>Status</th>
            <th>Published At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($posts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category?->name ?? 'N/A' }}</td>
            <td>{{ ucfirst($post->status) }}</td>
            <td>{{ $post->published_at?->format('d M Y') ?? '-' }}</td>
            <td>
                <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">No posts found</td>
        </tr>
        @endforelse
    </tbody>
</table>

{{ $posts->links() }}
@endsection
