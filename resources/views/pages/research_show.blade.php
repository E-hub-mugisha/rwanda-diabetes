@extends('layouts.app')

@section('content')
<div class="container py-5">

    <a href="{{ route('research.category', $category->slug) }}" class="btn btn-light mb-3">
        ← Back to {{ $category->name }}
    </a>

    <h2>{{ $item->title }}</h2>

    <p class="text-muted">
        Category: <strong>{{ $category->name }}</strong>
    </p>

    @if($item->file_path)
        <a href="{{ asset('storage/'.$item->file_path) }}" class="btn btn-primary mb-4" target="_blank">
            Download PDF
        </a>
    @endif

    <div class="content">
        {!! nl2br($item->content) !!}
    </div>

</div>
@endsection
