@extends('layouts.base')
@section('title', 'team member details')
@section('content')

<!-- Page Banner -->
<div class="page-banner overlay">
    <picture class="media media-bg">
        <source media="(max-width: 575px)" srcset="assets/img/banner/page-banner-575.jpg">
        <source media="(max-width: 991px)" srcset="assets/img/banner/page-banner-991.jpg">
        <img src="assets/img/banner/page-banner.jpg" width="1920" height="520" loading="eager" alt="Page Banner Image">
    </picture>
    <div class="page-banner-content">
        <div class="container text-center">
            <h1 class="heading text-80 fw-700 aos-init aos-animate" data-aos="fade-up">
                {{ $member->name }}
            </h1>
            <ul class="breadcrumb list-unstyled aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <li>
                    <a href="index.html" class="text text-18" aria-label="Home Page">
                        Home
                    </a>
                </li>
                <li>
                    <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.08929 5.40903C7.24552 5.5653 7.33328 5.77723 7.33328 5.9982C7.33328 6.21917 7.24552 6.43109 7.08929 6.58736L2.37512 11.3015C2.29825 11.3811 2.2063 11.4446 2.10463 11.4883C2.00296 11.532 1.89361 11.5549 1.78296 11.5559C1.67231 11.5569 1.56258 11.5358 1.46016 11.4939C1.35775 11.452 1.2647 11.3901 1.18646 11.3119C1.10822 11.2336 1.04634 11.1406 1.00444 11.0382C0.962537 10.9357 0.941453 10.826 0.942414 10.7154C0.943376 10.6047 0.966364 10.4954 1.01004 10.3937C1.05371 10.292 1.1172 10.2001 1.19679 10.1232L5.32179 5.9982L1.19679 1.8732C1.04499 1.71603 0.960996 1.50553 0.962894 1.28703C0.964793 1.06853 1.05243 0.859522 1.20694 0.705015C1.36145 0.550508 1.57046 0.462868 1.78896 0.460969C2.00745 0.45907 2.21795 0.543066 2.37512 0.694864L7.08929 5.40903Z" fill="currentColor"></path>
                    </svg>
                </li>
                <li>
                    <a role="link" aria-disabled="true" class="text text-18 active">
                        {{ $member->name }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Team Details -->
<div class="team-details mt-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-12 td-column">
                <div class="td-media-wrap" data-aos="fade-up">
                    <div class="td-media radius18">
                        <img src="{{ asset('storage/' . $member->photo) }}" 
                             width="1000" height="1133" loading="lazy" 
                             alt="{{ $member->name }}">
                    </div>

                    @if($member->role)
                    <div class="text-absolute heading text-24">
                        {{ $member->role }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="content-info">
                    <h2 class="heading text-50" data-aos="fade-up">
                        {{ $member->name }}
                    </h2>

                    <div class="info-desig heading text-22" data-aos="fade-up" data-aos-delay="50">
                        {{ $member->position }}
                    </div>

                    @if($member->bio)
                    <p class="info-desc text text-18" data-aos="fade-up" data-aos-delay="100">
                        {{ $member->bio }}
                    </p>
                    @endif

                    @if($member->phone)
                    <div class="phn-number text text-18" data-aos="fade-up" data-aos-delay="150">
                        📞 {{ $member->phone }}
                    </div>
                    @endif

                    @if($member->email)
                    <div class="email text text-18" data-aos="fade-up" data-aos-delay="200">
                        ✉️ {{ $member->email }}
                    </div>
                    @endif

                    <ul class="social-icons list-unstyled">
                        @if($member->facebook)
                        <li><a class="social-link text" href="{{ $member->facebook }}" target="_blank">Facebook</a></li>
                        @endif

                        @if($member->linkedin)
                        <li><a class="social-link text" href="{{ $member->linkedin }}" target="_blank">LinkedIn</a></li>
                        @endif

                        @if($member->twitter)
                        <li><a class="social-link text" href="{{ $member->twitter }}" target="_blank">Twitter</a></li>
                        @endif

                        @if($member->instagram)
                        <li><a class="social-link text" href="{{ $member->instagram }}" target="_blank">Instagram</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @if($member->bio)
    <div class="container">
        <div class="team-bio mt-100">
            <h2 class="heading text-36" data-aos="fade-up">About {{ $member->name }}</h2>
            <p class="text text-18" data-aos="fade-up" data-aos-delay="50">
                {{ $member->bio }}
            </p>
        </div>
    </div>
    @endif
</div>


@endsection