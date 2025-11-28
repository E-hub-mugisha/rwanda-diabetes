@extends('layouts.auth')
@section('title', 'Login into Account')

@section('content')
<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group">
        <label class="label">Username</label>
        <div class="input-group">
            <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline"></i>
                </span>
            </div>
        </div>
    </div>

    <!-- Password -->
    <div class="form-group">
        <label class="label">Password</label>
        <div class="input-group">
            <input id="password" class="form-control"
                type="password"
                name="password"
                required autocomplete="current-password" />

            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline"></i>
                </span>
            </div>
        </div>
    </div>

    <div class="form-group d-grid gap-2">
        <button type="submit" class="btn btn-primary submit-btn">Login</button>
    </div>
    <div class="form-group d-flex justify-content-between">
        <div class="form-check form-check-flat mt-0">
            <label class="form-check-label">
                <input type="checkbox" id="remember_me" name="remember" class="form-check-input" checked> Keep me signed in </label>
        </div>
        <a href="{{ route('password.request')}}" class="text-small forgot-password text-black">Forgot Password</a>
    </div>
    <div class="text-block text-center my-3">
        <span class="text-small fw-semibold">Not a member ?</span>
        <a href="{{ route('register') }}" class="text-black text-small">Create new account</a>
    </div>
</form>

@endsection