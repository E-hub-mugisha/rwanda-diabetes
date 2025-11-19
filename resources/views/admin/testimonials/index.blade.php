@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-3">Testimonials / Stories</h3>

    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary mb-3">Add Testimonial</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Title</th>
                <th>Status</th>
                <th width="160">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testimonials as $t)
            <tr>
                <td>
                    @if($t->photo)
                        <img src="{{ asset('storage/'.$t->photo) }}" width="60" class="rounded">
                    @endif
                </td>
                <td>{{ $t->name }}</td>
                <td>{{ $t->title }}</td>
                <td>
                    @if($t->is_active)
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-secondary">Disabled</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.testimonials.edit',$t->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    
                    <form action="{{ route('admin.testimonials.destroy', $t->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Delete this testimonial?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $testimonials->links() }}
</div>
@endsection
