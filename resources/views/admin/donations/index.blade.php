@extends('layouts.app')
@section('title', 'Donations')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Donations</h2>

                    {{-- Success Message --}}
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="donationTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Amount</th>
                                    <th>Method</th>
                                    <th>Status</th>
                                    <th>Transaction ID</th>
                                    <th>Message</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($donations as $donation)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $donation->name }}</td>
                                        <td>{{ $donation->email }}</td>
                                        <td>{{ $donation->phone ?? '-' }}</td>
                                        <td>${{ number_format($donation->amount, 2) }}</td>
                                        <td class="text-capitalize">{{ $donation->method }}</td>
                                        <td class="text-capitalize">{{ $donation->status }}</td>
                                        <td>{{ $donation->transaction_id }}</td>
                                        <td>{{ Str::limit($donation->message, 50) }}</td>
                                        <td>
                                            {{-- View Details --}}
                                            <a href="{{ route('admin.donations.show', $donation) }}" class="btn btn-info btn-sm">View</a>

                                            {{-- Delete --}}
                                            <form action="{{ route('admin.donations.destroy', $donation) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this donation?');">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">No donations found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {{-- Pagination --}}
                        {{ $donations->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
