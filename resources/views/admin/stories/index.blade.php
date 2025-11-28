@extends('layouts.app')
@section('title', 'Stories & Testimonies')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Stories & Testimonies</h2>
                    <a href="{{ route('admin.stories.create') }}" class="btn btn-success mb-3">Add New</a>

                    {{-- Success message --}}
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Author Name</th>
                                    <th>Status</th>
                                    <th>Published At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($stories as $story)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $story->title }}</td>
                                        <td class="text-capitalize">{{ $story->type }}</td>
                                        <td>{{ $story->author_name ?? 'N/A' }}</td>
                                        <td class="text-capitalize">{{ $story->status }}</td>
                                        <td>{{ $story->published_at?->format('d M Y') ?? 'Not published' }}</td>
                                        <td>
                                            <a href="{{ route('admin.stories.edit', $story) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('admin.stories.destroy', $story) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this story/testimony?');">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No stories/testimonies found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {{-- Pagination --}}
                        {{ $stories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
