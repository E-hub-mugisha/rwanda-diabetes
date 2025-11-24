@extends('layouts.base')

@section('content')
<div class="container mt-5">
    <div class="text-center">
        <h1 class="display-4 text-success">Thank You for Your Donation!</h1>
        <p class="lead">We appreciate your support. Your contribution will help us make a meaningful impact.</p>
        <a href="{{ url('/') }}" class="btn btn-primary mt-3">Back to Home</a>
    </div>
</div>
@endsection
