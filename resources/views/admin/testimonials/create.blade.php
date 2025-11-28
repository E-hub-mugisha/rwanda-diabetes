@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h3>Add Testimonial</h3>
                @include('admin.testimonials.form', ['testimonial' => null])
            </div>
        </div>
    </div>
</div>
@endsection