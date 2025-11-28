@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h3>Edit Testimonial</h3>
                @include('admin.testimonials.form')
            </div>
        </div>
    </div>
</div>
@endsection