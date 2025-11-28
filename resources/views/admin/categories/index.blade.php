@extends('layouts.app')
@section('title', 'Categories')

@section('content')

<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Categories</h3>
          <!-- Button to open Create Modal -->
          <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createCategoryModal">Add Category</button>
          <div class="table-responsive">
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
            <table id="order-listing" class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @forelse($categories as $category)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $category->name }}</td>
                  <td>{{ $category->slug }}</td>
                  <td>
                    <!-- Edit button -->
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCategoryModal{{ $category->id }}">Edit</button>

                    <!-- Delete form -->
                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline-block">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                  </td>
                </tr>

                <!-- Edit Modal -->
                <div class="modal fade" id="editCategoryModal{{ $category->id }}" tabindex="-1" aria-labelledby="editCategoryModalLabel{{ $category->id }}" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form action="{{ route('admin.categories.update', $category->id ) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                          <h5 class="modal-title" id="editCategoryModalLabel{{ $category->id }}">Edit Category</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                          <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                @empty
                <tr>
                  <td colspan="5" class="text-center">No categories found</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Create Category Modal -->
<div class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="createCategoryModalLabel">Add Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Create Category</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection