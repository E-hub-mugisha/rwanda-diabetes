<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ route('admin.dashboard')}}">
            <img src="https://demo.bootstrapdash.com/star-admin-free/dist/themes/assets/images/logo.svg"
                alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('admin.dashboard')}}">
            <img src="https://demo.bootstrapdash.com/star-admin-free/dist/themes/assets/images/logo-mini.svg"
                alt="logo" />
        </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        
        <ul class="navbar-nav ms-auto">
            <li>
                <a href="{{ route('admin.partnership.requests.index') }}" class="nav-link fw-semibold badge badge-success">
                    Partnership Requests
                    @php $pending = \App\Models\PartnershipRequest::where('status','pending')->count(); @endphp
                    @if($pending > 0)
                    <span class="badge bg-danger">{{ $pending }}</span>
                    @endif
                </a>
            </li>

            @php
            use App\Models\PartnershipRequest;

            $pendingRequests = PartnershipRequest::where('status', 'pending')->latest()->take(5)->get();
            $pendingCount = $pendingRequests->count();
            @endphp

            <li class="nav-item dropdown">
                <a class="nav-link count-indicator" id="notificationDropdown" href="#"
                    data-bs-toggle="dropdown">
                    <i class="mdi mdi-email-outline"></i>
                    @if($pendingCount > 0)
                    <span class="count bg-success">{{ $pendingCount }}</span>
                    @endif
                </a>

                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                    aria-labelledby="notificationDropdown">
                    <a class="dropdown-item py-3" href="{{ route('admin.partnership.requests.index') }}">
                        <p class="mb-0 fw-medium float-start">
                            You have {{ $pendingCount }} pending requests
                        </p>
                        <span class="badge badge-pill bg-primary float-end">View all</span>
                    </a>
                    <div class="dropdown-divider"></div>

                    @forelse($pendingRequests as $request)
                    <button class="btn btn-info btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#showPartnerModal{{ $request->id }}">
                        View
                    </button>

                    <!-- SHOW MODAL -->
                    <div class="modal fade" id="showPartnerModal{{ $request->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content p-3">
                                <h4>{{ $request->name }}</h4>
                                <hr>
                                <p><strong>Email:</strong> {{ $request->email }}</p>
                                <p><strong>Phone:</strong> {{ $request->phone }}</p>
                                <p><strong>Website:</strong> {{ $request->website }}</p>
                                <p><strong>Type:</strong> @php
                                    $badgeColors = [
                                    'hospital' => 'bg-success',
                                    'university' => 'bg-primary',
                                    'ngo' => 'bg-purple',
                                    'corporate' => 'bg-info',
                                    'government' => 'bg-dark',
                                    'media' => 'bg-warning text-dark',
                                    'other' => 'bg-secondary',
                                    ];
                                    @endphp

                                    <span class="badge {{ $badgeColors[$request->type] ?? 'bg-secondary' }}">
                                        {{ ucfirst($request->type) }}
                                    </span>
                                </p>
                                <p><strong>Status:</strong> {{ $request->status }}</p>
                                <p><strong>Description:</strong><br>{{ $request->description }}</p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-center fw-light small-text py-2">No pending requests</p>
                    @endforelse
                </div>
            </li>

            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img class="img-xs rounded-circle" src="{{ asset('admin/assets/images/faces/face8.jpg') }}"
                        alt="Profile image" />
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <img class="img-md rounded-circle" src="{{ asset('admin/assets/images/faces/face8.jpg') }}"
                            alt="Profile image" />
                        <p class="mb-1 mt-3 fw-semibold">{{ Auth::user()->name }}</p>
                        <p class="fw-light text-muted mb-0"> {{ Auth::user()->email }} </p>
                    </div>
                    <a class="dropdown-item"><i
                            class="dropdown-item-icon mdi mdi-account-outline text-primary"></i> My Profile
                        <span class="badge badge-pill bg-danger">1</span></a>
                    <a class="dropdown-item"><i
                            class="dropdown-item-icon mdi mdi-message-text-outline text-primary"></i>
                        Messages</a>
                    <a class="dropdown-item"><i
                            class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary"></i>
                        Activity</a>
                    <a class="dropdown-item"><i
                            class="dropdown-item-icon mdi mdi-help-circle-outline text-primary"></i> FAQ</a>
                    <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary"></i>Sign
                        Out</a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
<!-- partial -->