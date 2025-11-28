@extends('layouts.app')
@section('title', 'Donation Details')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8 offset-md-2 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-4">Donation Details</h2>

                    {{-- Success Message --}}
                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="mb-3">
                        <strong>Name:</strong>
                        <p>{{ $donation->name }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Email:</strong>
                        <p>{{ $donation->email }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Phone:</strong>
                        <p>{{ $donation->phone ?? '-' }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Amount:</strong>
                        <p>${{ number_format($donation->amount, 2) }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Payment Method:</strong>
                        <p class="text-capitalize">{{ $donation->method }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Status:</strong>
                        <p class="text-capitalize">{{ $donation->status }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Transaction ID:</strong>
                        <p>{{ $donation->transaction_id ?? '-' }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Message:</strong>
                        <p>{{ $donation->message ?? '-' }}</p>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('admin.donations.index') }}" class="btn btn-secondary">Back to Donations</a>

                        {{-- Optional: Delete Button --}}
                        <form action="{{ route('admin.donations.destroy', $donation) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this donation?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection