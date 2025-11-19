@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Add Testimonial</h3>
    @include('admin.testimonials.form', ['testimonial' => null])
</div>
@endsection
