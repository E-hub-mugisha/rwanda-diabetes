@extends('layouts.base')
@section('title', 'our team members')
@section('content')

<!-- Our Team -->
<div class="our-team mt-100" style="padding-top: 40px;">
    <div class="container">
        <div class="section-headings section-headings-horizontal">
            <div class="section-headings-left">
                
                <h2 class="heading text-30 aos-init aos-animate" data-aos="fade-right" data-aos-delay="20">
                    our team member
                </h2>
                <p class="text text-16 aos-init aos-animate" data-aos="fade-up">
                    Meet the dedicated individuals who drive our mission forward with passion and expertise.
                </p>
            </div>
            
        </div>
        <div id="team-section">

            {{-- ===================== Leadership ===================== --}}
            

            @if($leadership->count())
            <h2 class="mb-4 text-18">Leadership</h2>
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
                                <p class="text text-16">{{ $team->position }}</p>
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
            <h2 class="mt-5 mb-4 text-18">Board of Directors</h2>
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
                                <p class="text text-16">{{ $team->position }}</p>
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
            <h2 class="mt-5 mb-4 text-18">Other Team Members</h2>
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
                                <p class="text text-16">{{ $team->position }}</p>
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