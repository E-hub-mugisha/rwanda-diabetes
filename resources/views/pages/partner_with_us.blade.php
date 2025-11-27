@extends('layouts.base')
@section('title', 'Partner With Us')
@section('content')

<div class="hero-banner-2 about-us-2 mt-100">
    <div class="container">
        <div class="section-headings section-headings-horizontal">
            <div class="section-headings-left">
                <h2 class="heading text-64 fw-700 aos-init aos-animate" data-aos="fade-up">Partner With Us</h2>
                <p class="text text-18 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">Together, we can transform diabetes awareness, prevention, and access to care across Rwanda.</p>
            </div>
            <div class="section-headings-right">
                <div class="text-wrapper aos-init aos-animate" data-aos="fade-up">
                    <div class="d-flex align-items-start">
                        <h2 class="heading text-80">25</h2>
                        <div class="heading text-24">+</div>
                    </div>
                    <div class="text text-18 fw-500">Trusted <br> Partners</div>
                </div>
                <div class="buttons d-flex gap-4 flex-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <a role="button" data-bs-toggle="modal" data-bs-target="#partnerModal" class="button button--primary" aria-label="hero button">
                        Become a Partner Today
                        <span class="svg-wrapper">
                            <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="{{ route('impact') }}" class="button button--secondary" aria-label="hero button">
                        Our Impact
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
    <div class="section-content">
        <div class="banner-wrapper">
            <picture class="media media-bg d-flex">
                <source media="(max-width: 575px)" srcset="assets/img/slider/hero2-575.jpg">
                <source media="(max-width: 991px)" srcset="assets/img/slider/hero2-991.jpg">
                <img src="assets/img/slider/hero-2.jpg" width="1920" height="1000" loading="lazy" alt="Hero Image">
            </picture>
            <div class="content-absolute">
                <div class="container-fluid d-flex align-items-end height-100">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="image-text image-text-video mt-100 overflow-x-hidden">
    <div class="container">
        <div class="headings-width">
            <h2 class="heading text-50 aos-init aos-animate" data-aos="fade-down">
                Why Partner With Rwanda Diabetes Organization?
            </h2>
        </div>
        <div class="section-content">
            <div class="row product-grid align-items-xl-center">
                <div class="col-lg-5 col-12">
                    <modal-video class="video-wrap height-100">
                        <div class="image radius18 height-100 aos-init aos-animate" data-aos="fade-right">
                            <img src="assets/img/why-choose-us/1.jpg" width="1000" height="742" loading="lazy" alt="Image">
                            <div class="content-absolute">
                                <div class="flex-banner height-inherit d-flex align-items-center justify-content-center">
                                    <div class="content-box">
                                        <div class="button button--secondary open-video">
                                            <svg class="icon-24" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.858 5.1281C11.5377 5.51041 11.5377 6.48895 10.858 6.87125L2.04588 11.8281C1.37927 12.203 0.555618 11.7213 0.555618 10.9565V1.04285C0.555618 0.278027 1.37928 -0.203685 2.04588 0.171279L10.858 5.1281Z" fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="video-modal">
                            <div class="video-modal-inner">
                                <span class="close">
                                    <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M6 18 18 6M6 6l12 12"></path>
                                    </svg>
                                </span>
                                <video class="video-frame" width="1280" height="720" controls="">
                                    <source src="assets/img/video/video.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </modal-video>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="px-lg-4 section-headings aos-init aos-animate" data-aos="fade-left">
                        <div class="text text-18">
                            Rwanda Diabetes Organization works nationwide to raise awareness, improve early screening, educate families, and support people living with diabetes.
                            <br>
                            <br>
                            By partnering with us, you join a mission dedicated to saving lives, preventing complications, and empowering communities.
                        </div>
                        <div class="buttons">
                            <a href="{{ route('about')}}" class="button button--primary" aria-label="More About Us">
                                More About Us
                                <span class="svg-wrapper">
                                    <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="CurrentColor"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="brand brand-bg section-padding mt-100">
    <div class="container">
        <div class="section-headings text-center aos-init aos-animate" data-aos="fade-up">
            <h2 class="heading text-50">Our Trusted Partners</h2>
        </div>
        <div class="section-content">
            <div class="row product-grid">
                @foreach($partners as $partner)
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="brand-logo aos-init aos-animate" data-aos="fade-up">
                        <a href="about.html" class="content-link">
                            <img src="assets/img/brand/b1.png" width="108" height="36" loading="lazy" alt="Brand Image">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="promotion mt-100 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12">
                <div class="promtion-content section-headings">
                    <div class="subheading text-20 subheading-bg aos-init aos-animate" data-aos="fade-right">
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
                        <span>Why Choose Us</span>
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
                    <h2 class="heading text-50 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                        Get Involved Today
                    </h2>
                    <div class="text text-18 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                        We welcome discussions with organizations, companies, and individuals committed to improving diabetes prevention and care in Rwanda.
                    </div>
                    <ul class="promotion-lists list-unstyled">
                        <li class="promotion-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="10">
                            <div class="promotion-title">
                                <svg class="icon icon-50" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                    <circle cx="25" cy="25" r="25" fill="#1C2539"></circle>
                                    <g clip-path="url(#clip0_9088_5518)">
                                        <path d="M19.5985 31.1283L19.0574 34.375H19C18.5864 34.375 18.25 34.7114 18.25 35.125V35.875C18.25 36.2886 18.5864 36.625 19 36.625H31C31.4136 36.625 31.75 36.2886 31.75 35.875V35.125C31.75 34.7114 31.4136 34.375 31 34.375H30.9426L30.4015 31.1283C30.2886 30.451 29.7378 29.9526 29.0669 29.8878L32.5289 24.6947L31.2651 19.6409L26.2041 21.328L25.6371 23.0009L24.589 16.8869L18.8121 13.5858L16.3416 19.7609L21.0389 29.8784C20.3204 29.8971 19.7174 30.4154 19.5985 31.1283ZM31.0004 35.875H19V35.125H31L31.0004 35.875ZM29.662 31.2516L30.1825 34.375H19.8175L20.338 31.2516C20.3988 30.8886 20.71 30.625 21.0782 30.625H28.9221C29.29 30.625 29.6012 30.8886 29.662 31.2516ZM26.6991 29.1906L28.618 25.3525L31.3727 25.0769L28.1744 29.875H26.8165L26.6991 29.1906ZM31.6559 24.295L28.5831 24.6021L27.0475 21.8376L30.7349 20.6084L31.6559 24.295ZM26.5833 22.5475L27.9509 25.0094L26.4846 27.9419L25.9037 24.553L26.5833 22.5475ZM26.0553 29.875H24.5271L22.9934 24.8897L22.2768 25.1102L23.7423 29.875H21.8643L17.3894 20.2368L20.9598 20.8319L22.0454 24.3603L22.762 24.1397L21.67 20.5915L24.0119 17.9571L26.0553 29.875ZM19.1879 14.6643L23.6624 17.221L21.1071 20.0958L17.2709 19.4564L19.1879 14.6643ZM21.25 31.375H28.75V33.625H27.25V32.875H28V32.125H22V32.875H26.5V33.625H21.25V31.375ZM32.5 18.4052V19.375H33.25V18.4052L34.1553 17.5H35.125V16.75H34.1553L33.25 15.8447V14.875H32.5V15.8447L31.5947 16.75H30.625V17.5H31.5947L32.5 18.4052ZM32.875 16.5302L33.4697 17.125L32.875 17.7198L32.2803 17.125L32.875 16.5302ZM33.25 14.125H32.5V13.375H33.25V14.125ZM29.875 17.5H29.125V16.75H29.875V17.5ZM32.5 20.125H33.25V20.875H32.5V20.125ZM35.875 16.75H36.625V17.5H35.875V16.75ZM15.25 34.1553V35.125H16V34.1553L16.9052 33.25H17.875V32.5H16.9052L16 31.5947V30.625H15.25V31.5947L14.3447 32.5H13.375V33.25H14.3447L15.25 34.1553ZM15.625 32.2803L16.2198 32.875L15.625 33.4697L15.0303 32.875L15.625 32.2803ZM15.25 29.125H16V29.875H15.25V29.125ZM16 36.625H15.25V35.875H16V36.625ZM34.75 28.2197V27.25H34V28.2197L33.0947 29.125H32.125V29.875H33.0947L34 30.7803V31.75H34.75V30.7803L35.6553 29.875H36.625V29.125H35.6553L34.75 28.2197ZM34.375 30.0947L33.7803 29.5L34.375 28.9053L34.9697 29.5L34.375 30.0947ZM34 26.5V25.75H34.75V26.5H34ZM34.75 33.25H34V32.5H34.75V33.25ZM30.625 29.875V29.125H31.375V29.875H30.625ZM14.875 14.125H14.125V13.375H14.875V14.125ZM14.125 14.875H13.375V14.125H14.125V14.875ZM14.125 14.875H14.875V15.625H14.125V14.875ZM14.875 14.875V14.125H15.625V14.875H14.875ZM16.75 24.625H16V23.875H16.75V24.625ZM15.25 24.625H16V25.375H15.25V24.625ZM16 25.375H16.75V26.125H16V25.375ZM16.75 25.375V24.625H17.5V25.375H16.75ZM26.125 14.875H25.375V14.125H26.125V14.875ZM25.375 15.625H24.625V14.875H25.375V15.625ZM25.375 15.625H26.125V16.375H25.375V15.625ZM26.125 15.625V14.875H26.875V15.625H26.125Z" fill="white"></path>
                                    </g>
                                    <defs>
                                        <clipPath>
                                            <rect width="24" height="24" fill="white" transform="translate(13 13)"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="text text-18 fw-600">
                                    Contact Our Partnerships Team
                                </div>
                            </div>
                            <div class="promotion-text text text-16">
                                Email: partnerships@rdo.rw

                                Phone: +250 XXX XXX XXX
                                Office: Kigali, Rwanda
                            </div>
                        </li>
                    </ul>
                    <div class="buttons aos-init aos-animate" data-aos="fade-up">
                        <a role="button" data-bs-toggle="modal" data-bs-target="#partnerModal" class="button button--secondary" aria-label="View All Details">
                            Partner with us
                            <span class="svg-wrapper">
                                <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="CurrentColor"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="promotion-img radius18 aos-init aos-animate" data-aos="flip-left">
                    <img src="assets/img/promotion/1.jpg" width="1000" height="1469" loading="lazy" alt="Promotion image">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ -->
<div class="faq mt-100 mb-8">
    <div class="container">
        <div class="row faq-row">

            <!-- Left Side -->
            <div class="col-lg-6 col-12">
                <div class="section-headings">

                    <div class="subheading text-20 subheading-bg">
                        <span>Questions</span>
                    </div>

                    <h2 class="heading text-50">
                        Have any questions? Here are some answers
                    </h2>

                    <div class="text text-18">
                        Here are some of the questions we often receive from our community.
                    </div>

                    <div class="buttons mt-3">
                        <button class="button button--primary" data-bs-toggle="modal" data-bs-target="#askQuestionModal">
                            Ask Your Question
                        </button>
                    </div>

                    <div class="image-absolute">
                        <img src="{{ asset('assets/img/faq/question.png') }}" width="104" height="180" alt="Question">
                    </div>
                </div>
            </div>

            <!-- Right Side - Dynamic FAQ -->
            <div class="col-lg-6 col-12">
                <faq-accordion>
                    <div class="accordion-list">

                        @foreach($faqs as $faq)
                        <div class="accordion-block">
                            <div class="accordion-opener heading text-22">
                                {{ $faq->question }}
                                <div class="svg-wrapper">
                                    <svg class="icon icon-24" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M12.7083 15.7044C12.5208 15.8919..." fill="CurrentColor" />
                                    </svg>
                                </div>
                            </div>

                            <div class="accordion-content">
                                <div class="accordion-content-inner text text-18">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </faq-accordion>
            </div>

        </div>
    </div>
</div>


<!-- MODAL: Ask Question -->
<div class="modal fade" id="askQuestionModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">

            <div class="modal-header">
                <h5 class="modal-title">Ask a Question</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form action="{{ route('questions.store') }}" method="POST">
                @csrf

                <div class="modal-body">

                    <div class="mb-3">
                        <label>Your Question *</label>
                        <textarea required name="question" rows="4" class="form-control"></textarea>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary">Submit Question</button>
                </div>

            </form>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="partnerModal" tabindex="-1" aria-labelledby="partnerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="partnerModalLabel">Partner With Us</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form action="{{ route('partners.store.request') }}" method="POST">
                @csrf

                <div class="modal-body">

                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="mb-3">
                        <label class="form-label">Organization / Company Name</label>
                        <input type="text" name="organization" class="form-control" value="{{ old('organization') }}" required>
                        @error('organization') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contact Person</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                        @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                        @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                        @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Partnership Type</label>
                        <select name="type" class="form-control" required>
                            <option value="">Select Type</option>
                            <option value="hospital">Hospital / Clinic</option>
                            <option value="university">University / Research</option>
                            <option value="ngo">NGO / Community</option>
                            <option value="corporate">Corporate</option>
                            <option value="government">Government</option>
                            <option value="media">Media / Tech</option>
                            <option value="other">Other</option>
                        </select>
                        @error('type') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Message / Proposal</label>
                        <textarea name="message" class="form-control" rows="4" required>{{ old('message') }}</textarea>
                        @error('message') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit Request</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection