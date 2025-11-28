@extends('layouts.auth')
@section('title', 'Create Account')

@section('content')

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <div class="input-group">
            <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="enter your names" />
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline"></i>
                </span>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="input-group">
            <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="enter your email" />
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline"></i>
                </span>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="input-group">
            <input id="password" class="form-control"
                type="password"
                name="password"
                required autocomplete="new-password" placeholder="enter your password" />
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline"></i>
                </span>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="input-group">
            <input id="password_confirmation" class="form-control"
                type="password"
                name="password_confirmation" required autocomplete="new-password" placeholder="confirm your password" />
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline"></i>
                </span>
            </div>
        </div>
    </div>

    <div class="form-group d-flex justify-content-center">
        <div class="form-check form-check-flat mt-0">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" checked> I agree to the terms </label>
        </div>
    </div>
    <div class="form-group d-grid gap-2">
        <button type="submit" class="btn btn-primary submit-btn">Register</button>
    </div>
    <div class="text-block text-center my-3">
        <span class="text-small fw-semibold">Already have and account ?</span>
        <a href="{{ route('login') }}" class="text-black text-small">Login</a>
    </div>
</form>

@endsection