@extends('layouts.base')
@section('title', 'team member details')
@section('content')

<!-- Team Details -->
<div class="team-details mt-100">
    <div class="container">
        <div class="section-headings section-headings-horizontal">
            <div class="section-headings-left">
                <div class="subheading text-20 subheading-bg aos-init aos-animate" data-aos="fade-right" data-aos-delay="10">
                    <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <g clip-path="url(#clip0_9088_4143)">
                            <path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"></path>
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="14" height="14" fill="CurrentColor"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <span>Our team member</span>
                    <svg class="icon icon-14" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <g clip-path="url(#clip0_9088_4143)">
                            <path d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z" fill="CurrentColor"></path>
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="14" height="14" fill="CurrentColor"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <h2 class="heading text-50 aos-init aos-animate" data-aos="fade-right" data-aos-delay="20">
                    our team member details
                </h2>
                <p class="text text-18 aos-init aos-animate" data-aos="fade-up">
                    Meet the dedicated individuals who drive our mission forward with passion and expertise.
                </p>
            </div>
            <div class="section-headings-right buttons aos-init aos-animate" data-aos="fade-left" data-aos-delay="20">
                <a href="{{ route('our_team') }}" class="button button--primary" aria-label="See All Post">
                    Discover More
                    <span class="svg-wrapper">
                        <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="row align-items-center" id="team-section">
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