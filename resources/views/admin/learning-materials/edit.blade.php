@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Edit Learning Material</h3>

    <form action="{{ route('admin.learning-materials.update', $learning_material->id) }}" 
          method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('admin.learning-materials.form')

        <button class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
