@extends('layouts.base')
@section('title', 'our team members')
@section('content')

<!-- Our Team -->
<div class="our-team mt-100" style="padding-top: 40px;">
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
                    our team member
                </h2>
                <p class="text text-18 aos-init aos-animate" data-aos="fade-up">
                    Meet the dedicated individuals who drive our mission forward with passion and expertise.
                </p>
            </div>
            <div class="section-headings-right buttons aos-init aos-animate" data-aos="fade-left" data-aos-delay="20">
                <a href="#team-section" class="button button--primary" aria-label="See All Post">
                    Discover More
                    <span class="svg-wrapper">
                        <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div id="team-section">

            {{-- ===================== Leadership ===================== --}}
            

            @if($leadership->count())
            <h2 class="mb-4">Leadership</h2>
            <div class="row product-grid">
                @foreach($leadership as $team)
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3"
                    data-aos="fade-up" data-aos-delay="100">

                    <div class="card-team radius18">

                        <img src="{{asset('image/teams')}}/{{ $team->photo }}"
                            alt="{{ $team->name }}"
                            width="500"
                            height="619"
                            loading="lazy">

                        <div class="card-team-content-absolute">
                            <div class="card-team-content">
                                <a href="{{ route('team.show', $team->slug) }}"
                                    class="heading text-22 fw-600">
                                    {{ $team->name }}
                                </a>
                                <p class="text text-18">{{ $team->position }}</p>
                            </div>
                        </div>

                        <div class="social-list">
                            @if($team->linkedin)
                            <a href="{{ $team->linkedin }}" target="_blank" class="svg-wrapper">LinkedIn</a>
                            @endif
                            @if($team->twitter)
                            <a href="{{ $team->twitter }}" target="_blank" class="svg-wrapper">Twitter</a>
                            @endif
                            @if($team->instagram)
                            <a href="{{ $team->instagram }}" target="_blank" class="svg-wrapper">Instagram</a>
                            @endif
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            @endif

            {{-- ===================== Board of Directors ===================== --}}
            

            @if($board->count())
            <h2 class="mt-5 mb-4">Board of Directors</h2>
            <div class="row product-grid">
                @foreach($board as $team)
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3"
                    data-aos="fade-up" data-aos-delay="100">

                    <div class="card-team radius18">

                        <img src="{{asset('image/teams')}}/{{ $team->photo }}"
                            alt="{{ $team->name }}"
                            width="500"
                            height="619"
                            loading="lazy">

                        <div class="card-team-content-absolute">
                            <div class="card-team-content">
                                <a href="{{ route('team.show', $team->slug) }}"
                                    class="heading text-22 fw-600">
                                    {{ $team->name }}
                                </a>
                                <p class="text text-18">{{ $team->position }}</p>
                            </div>
                        </div>

                        <div class="social-list">
                            @if($team->linkedin)
                            <a href="{{ $team->linkedin }}" target="_blank" class="svg-wrapper">LinkedIn</a>
                            @endif
                            @if($team->twitter)
                            <a href="{{ $team->twitter }}" target="_blank" class="svg-wrapper">Twitter</a>
                            @endif
                            @if($team->instagram)
                            <a href="{{ $team->instagram }}" target="_blank" class="svg-wrapper">Instagram</a>
                            @endif
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            @endif

            {{-- ===================== Other Team Members ===================== --}}
            

            @if($others->count())
            <h2 class="mt-5 mb-4">Other Team Members</h2>
            <div class="row product-grid">
                @foreach($others as $team)
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3"
                    data-aos="fade-up" data-aos-delay="100">

                    <div class="card-team radius18">

                        <img src="{{asset('image/teams')}}/{{ $team->photo }}"
                            alt="{{ $team->name }}"
                            width="500"
                            height="619"
                            loading="lazy">

                        <div class="card-team-content-absolute">
                            <div class="card-team-content">
                                <a href="{{ route('team.show', $team->slug) }}"
                                    class="heading text-22 fw-600">
                                    {{ $team->name }}
                                </a>
                                <p class="text text-18">{{ $team->position }}</p>
                            </div>
                        </div>

                        <div class="social-list">
                            @if($team->linkedin)
                            <a href="{{ $team->linkedin }}" target="_blank" class="svg-wrapper">LinkedIn</a>
                            @endif
                            @if($team->twitter)
                            <a href="{{ $team->twitter }}" target="_blank" class="svg-wrapper">Twitter</a>
                            @endif
                            @if($team->instagram)
                            <a href="{{ $team->instagram }}" target="_blank" class="svg-wrapper">Instagram</a>
                            @endif
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            @endif

        </div>

    </div>
</div>

@endsection