@extends('layouts.app')
@section('title','Testimonials')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="mb-3">Testimonials / Stories</h3>

                        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary mb-3">Add Testimonial</a>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    {{-- Error Messages --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>There were some problems with your input:</strong>
                        <ul class="mt-2 mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Title</th>
                                            <th>Story</th>
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
                                            <td>{{ $t->story }}</td>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection