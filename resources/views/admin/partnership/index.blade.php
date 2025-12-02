@extends('layouts.app')
@section('title', 'Partnership Requests')
@section('content')
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold">Partnership Requests</h3>
    </div>

    <div class="card">
        <div class="card-body table-responsive">

            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Organization</th>
                    <th>Contact Person</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th width="230">Actions</th>
                </tr>
                </thead>

                <tbody>
                @foreach($requests as $req)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $req->organization }}</td>
                        <td>{{ $req->name }}</td>
                        <td>{{ $req->email }}</td>
                        <td>{{ ucfirst($req->type) }}</td>
                        <td>
                            <span class="badge 
                                @if($req->status == 'pending') bg-warning 
                                @elseif($req->status == 'approved') bg-success
                                @else bg-danger @endif">
                                {{ ucfirst($req->status) }}
                            </span>
                        </td>

                        <td>
                            <!-- View Message -->
                            <button class="btn btn-info btn-sm"
                                    data-bs-toggle="modal"
                                    data-bs-target="#viewMsg{{ $req->id }}">
                                <i class="ti ti-eye"></i>
                            </button>

                            <!-- Approve -->
                            @if($req->status == 'pending')
                                <form action="{{ route('admin.partnership.requests.approve', $req->id) }}"
                                      method="POST" class="d-inline">
                                    @csrf
                                    <button onclick="return confirm('Approve this request?')"
                                            class="btn btn-success btn-sm">
                                        <i class="ti ti-check"></i>
                                    </button>
                                </form>

                                <!-- Reject -->
                                <form action="{{ route('admin.partnership.requests.reject', $req->id) }}"
                                      method="POST" class="d-inline">
                                    @csrf
                                    <button onclick="return confirm('Reject this request?')"
                                            class="btn btn-danger btn-sm">
                                        <i class="ti ti-x"></i>
                                    </button>
                                </form>
                            @endif
                        </td>
                    </tr>

                    <!-- ================= VIEW MESSAGE MODAL ================= -->
                    <div class="modal fade" id="viewMsg{{ $req->id }}" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header bg-info text-white">
                                    <h5 class="modal-title">Message from {{ $req->organization }}</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">
                                    <p><strong>Contact:</strong> {{ $req->name }}</p>
                                    <p><strong>Email:</strong> {{ $req->email }}</p>
                                    <p><strong>Phone:</strong> {{ $req->phone }}</p>
                                    <p><strong>Type:</strong> {{ $req->type }}</p>

                                    <hr>

                                    <p><strong>Message:</strong></p>
                                    <p>{{ $req->message }}</p>
                                </div>

                            </div>
                        </div>
                    </div>

                @endforeach
                </tbody>

            </table>
        </div>
    </div>

</div>
@endsection
