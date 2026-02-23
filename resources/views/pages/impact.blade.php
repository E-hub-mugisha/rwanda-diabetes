@extends('layouts.base')

@section('title', 'Our Impact')

@section('content')

<div class="hero-banner-2 about-us-2 mt-100" style="padding-top: 100px;">
    <div class="container">
        <div class="section-headings section-headings-horizontal">
            <div class="section-headings-left">
                <h2 class="heading text-30 fw-700 aos-init aos-animate" data-aos="fade-up">Our Impact, Trusted Advice, Proven Success</h2>
                <p class="text text-18 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">Transforming Rwanda’s health research ecosystem through mentorship, digital learning,
                    community programs, and evidence-based research.</p>
            </div>
            <div class="section-headings-right">
                <div class="buttons d-flex gap-4 flex-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('stories.index')}}" class="button button--primary" aria-label="hero button">
                        Success Stories
                        <span class="svg-wrapper">
                            <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path>
                            </svg>
                        </span>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<counter-up class="counter-up d-block mt-100 mb-100 " id="summary" style="margin-bottom: 40px;">
    <div class="container">
        <div class="counter-up-box radius18">
            <div class="row product-grid text-center">
                <div class="col-12 col-md-4 aos-init aos-animate" data-aos="fade-up">
                    <div class="counter-item">
                        <h2 class="heading text-50" data-target="20">20<span>+</span>
                        </h2>
                        <div class="text text-18 fw-500">Researchers Trained</div>
                    </div>
                </div>

                <div class="col-12 col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="counter-item">
                        <h2 class="heading text-50" data-target="12">12<span>+</span>
                        </h2>
                        <div class="text text-18 fw-500">Community Programs</div>
                    </div>
                </div>

                <div class="col-12 col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="counter-item">
                        <h2 class="heading text-50" data-target="25">25<span>+</span>
                        </h2>
                        <div class="text text-18 fw-500">Published Studies</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</counter-up>

<div class="testimonial-3 mt-100 overflow-x-hidden">
    <div class="container">
        <div class="row product-grid">
            <div class="col-lg-6 col-12">
                <div class="section-headings section-headings-vertical aos-init aos-animate" data-aos="fade-right">
                    <div class="section-headings-top">
                        <div class="subheading text-20 subheading-bg">
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
                            <span>Testimonial</span>
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
                        <h2 class="heading" style="height: 3rem;">
                            Success story from our community outreach
                        </h2>
                    </div>
                    <div class="section-headings-bottom section-headings-horizontal">
                        <div class="text text-18">Real stories from individuals whose lives have been transformed through early detection, education, and support.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <testicolumn-slider class="team-slider testicolumn-slider aos-init aos-animate" data-aos="fade-left">
                    <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                        <div class="swiper-wrapper" id="swiper-wrapper-1b25cdeb34f748bb" aria-live="polite">
                            @foreach($stories as $story)
                            <div class="swiper-slide">
                                <div class="card-testimonial radius18">
                                    <ul class="rating-list list-unstyled">
                                        <li class="rating-icon">
                                            <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z" fill="CurrentColor"></path>
                                            </svg>
                                        </li>
                                        <li class="rating-icon">
                                            <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z" fill="CurrentColor"></path>
                                            </svg>
                                        </li>
                                        <li class="rating-icon">
                                            <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z" fill="CurrentColor"></path>
                                            </svg>
                                        </li>
                                        <li class="rating-icon">
                                            <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z" fill="CurrentColor"></path>
                                            </svg>
                                        </li>
                                        <li class="rating-icon">
                                            <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z" fill="CurrentColor"></path>
                                            </svg>
                                        </li>
                                    </ul>
                                    <p class="text text-24">
                                        “ {{ $story->excerpt }}”
                                    </p>
                                    <div class="user-info-wrap">
                                        <div class="user-info">
                                            <div class="user-name-desig">
                                                <h2 class="user-name heading text-18">
                                                    {{ $story->title }}
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="icon-quote">
                                            <svg class="icon icon-62" width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.5312 9.41406C6.51702 9.41406 0 15.9329 0 23.9453C0 31.2606 5.43154 37.3306 12.4771 38.3311C11.9131 42.4287 10.3486 46.3275 7.90415 49.7085C7.42874 50.3683 7.44654 51.2624 7.9538 51.9009C8.4515 52.5292 9.31635 52.7674 10.0754 52.4473C21.6088 47.6332 29.0625 36.4438 29.0625 23.9453C29.0625 15.9329 22.5455 9.41406 14.5312 9.41406ZM47.4688 9.41406C39.4545 9.41406 32.9375 15.9329 32.9375 23.9453C32.9375 31.2606 38.369 37.3306 45.4146 38.3311C44.8506 42.4287 43.2861 46.3275 40.8417 49.7085C40.3662 50.3683 40.384 51.2624 40.8913 51.9009C41.389 52.5292 42.2538 52.7674 43.0129 52.4473C54.5463 47.6332 62 36.4438 62 23.9453C62 15.9329 55.483 9.41406 47.4688 9.41406Z" fill="CurrentColor"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                </testicolumn-slider>
            </div>
        </div>
    </div>
</div>

@endsection