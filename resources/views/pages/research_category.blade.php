@extends('layouts.base')
@section('title', $category->name)
@section('content')

<!-- Pricing Plan -->
<div class="pricing-plan pricing-plan-page section-padding">
    <div class="media media-bg">
        <img src="{{ asset('assets/img/slider/slider-bg.jpg') }}" alt="slider background" width="1920" height="100" loading="eager">
    </div>
    <div class="container">
        <div class="section-headings text-center">
            <div class="subheading text-20 subheading-bg aos-init aos-animate" data-aos="fade-up">
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
                <span>Research</span>
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
            <h2 class="heading text-50 aos-init aos-animate" data-aos="fade-up">
                {{ $category->name }}
            </h2>
            <p class="text-muted">{{ $category->description }}</p>
        </div>

        <div class="section-content">
            <div class="pricing-cards">
                <div class="row product-grid justify-content-center">
                    @foreach ($items as $item)
                    <div class="col-12 col-lg-12 col-xl-4">
                        <div class="card-pricing radius18">
                            <div class="card-pricing-headings radius18 aos-init aos-animate" data-aos="fade-up">
                                <h2 class="heading text-24">{{ $item->title }}</h2>
                                <p class="text text-16">
                                    {{ $item->category->name }}
                                </p>
                            </div>
                            <div class="buttons aos-init aos-animate" data-aos="fade-up">
                                <a href="{{ route('research.show', [$item->category->slug, $item->slug]) }}" class="button button--primary btn-sm" aria-label="More About Us">
                                    Read More
                                    <svg viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.16668 0.833333C2.16668 0.61232 2.25448 0.400358 2.41076 0.244078C2.56704 0.0877975 2.779 0 3.00001 0H9.66668C9.88769 0 10.0997 0.0877975 10.2559 0.244078C10.4122 0.400358 10.5 0.61232 10.5 0.833333V7.5C10.5 7.72101 10.4122 7.93297 10.2559 8.08926C10.0997 8.24554 9.88769 8.33333 9.66668 8.33333C9.44567 8.33333 9.2337 8.24554 9.07742 8.08926C8.92114 7.93297 8.83335 7.72101 8.83335 7.5V2.845L1.92251 9.75583C1.76535 9.90763 1.55484 9.99163 1.33635 9.98973C1.11785 9.98783 0.908839 9.90019 0.754332 9.74568C0.599825 9.59118 0.512184 9.38216 0.510285 9.16367C0.508387 8.94517 0.592382 8.73467 0.744181 8.5775L7.65501 1.66667H3.00001C2.779 1.66667 2.56704 1.57887 2.41076 1.42259C2.25448 1.26631 2.16668 1.05435 2.16668 0.833333Z" fill="currentColor"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection