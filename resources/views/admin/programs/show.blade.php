@extends('layouts.app')

@section('title', $program->title)

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    {{-- Program Image --}}
                    @if($program->image)
                    <img src="{{asset('image/programs')}}/{{ $program->image }}" alt="{{ $program->title }}" class="img-fluid rounded mb-4">
                    @endif

                    {{-- Title --}}
                    <h1 class="mb-3">{{ $program->title }}</h1>

                    {{-- Category --}}
                    <p class="text-muted">
                        <i class="bi bi-folder"></i>
                        {{ $program->category->name ?? 'Uncategorized' }}
                    </p>

                    {{-- Short Description --}}
                    <p class="lead">{{ $program->short_description }}</p>

                    {{-- Main Content --}}
                    <div class="mt-4">
                        {!! $program->content !!}
                    </div>
                </div>
            </div>
        </div>
        {{-- Sidebar --}}
        <div class="col-lg-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Program Details</h5>
                    <p><strong>Status:</strong>
                        <span class="badge 
                            @if($program->status == 'published') bg-success 
                            @elseif($program->status == 'draft') bg-secondary 
                            @else bg-warning @endif">
                            {{ ucfirst($program->status) }}
                        </span>
                    </p>
                    <p><strong>Category:</strong> {{ $program->category->name ?? 'None' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection