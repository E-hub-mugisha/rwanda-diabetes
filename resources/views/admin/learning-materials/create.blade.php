@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Create Learning Material</h3>

    <form action="{{ route('admin.learning-materials.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('admin.learning-materials.form')

        <button class="btn btn-primary mt-3">Save</button>
    </form>
</div>
@endsection
