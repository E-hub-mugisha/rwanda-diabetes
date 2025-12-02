@extends('layouts.app')
@section('title', 'Learning Material Details')
@section('content')
<div class="container">

    <h3>{{ $learning_material->title }}</h3>

    <p><strong>Type:</strong> {{ ucfirst($learning_material->material_type) }}</p>

    <p><strong>Status:</strong> {{ ucfirst($learning_material->status) }}</p>

    <p><strong>Excerpt:</strong></p>
    <p>{{ $learning_material->excerpt }}</p>

    <hr>

    <p><strong>Content:</strong></p>
    <div>{!! nl2br(e($learning_material->content)) !!}</div>

    <hr>

    @if($learning_material->file)
        <p><strong>Download File:</strong></p>
        <a href="{{ asset('storage/'.$learning_material->file) }}" class="btn btn-success" download>
            Download Material
        </a>
    @endif

</div>
@endsection
