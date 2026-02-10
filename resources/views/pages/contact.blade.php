@extends('layouts.base')
@section('title', 'Contact Us')
@section('content')

<!-- Contact Form -->
<div class="section-contact-form contact-2 section-padding">
    <div class="container">
        <div class="section-headings text-center">
            <div
                class="subheading text-20 subheading-bg"
                data-aos="fade-up">
                <svg
                    class="icon icon-14"
                    xmlns="http://www.w3.org/2000/svg"
                    width="14"
                    height="14"
                    viewBox="0 0 14 14"
                    fill="none">
                    <g clip-path="url(#clip0_9088_4143)">
                        <path
                            d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                            fill="CurrentColor" />
                    </g>
                    <defs>
                        <clipPath>
                            <rect width="14" height="14" fill="CurrentColor" />
                        </clipPath>
                    </defs>
                </svg>
                <span>Contact Us</span>
                <svg
                    class="icon icon-14"
                    xmlns="http://www.w3.org/2000/svg"
                    width="14"
                    height="14"
                    viewBox="0 0 14 14"
                    fill="none">
                    <g clip-path="url(#clip0_9088_4143)">
                        <path
                            d="M8.71401 5.28599C11.7514 5.4205 14 5.9412 14 7C14 8.0588 11.7514 8.5795 8.71401 8.71401C8.5795 11.7514 8.0588 14 7 14C5.9412 14 5.4205 11.7514 5.28599 8.71401C2.2486 8.5795 -1.33117e-07 8.0588 0 7C4.62818e-08 5.94119 2.2486 5.4205 5.28599 5.28599C5.4205 2.2486 5.9412 0 7 0C8.0588 0 8.5795 2.2486 8.71401 5.28599Z"
                            fill="CurrentColor" />
                    </g>
                    <defs>
                        <clipPath>
                            <rect width="14" height="14" fill="CurrentColor" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <h2 class="heading text-50" data-aos="fade-up">
                Let's Build a strong community Together
            </h2>
        </div>
        <div class="contact-box radius18">
            <div class="row product-grid justify-content-between">
                <div class="col-12 col-lg-6 col-contact-content">
                    <!-- Google Map -->
                    <div class="google-map">
                        <div class="iframe-wrapper">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.4462098724225!2d30.09644067479381!3d-1.9758321367681504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca5d08300cdef%3A0x1304c918f4e3d5c0!2sRwanda%20Diabetes%20Association!5e0!3m2!1sen!2srw!4v1770726554466!5m2!1sen!2srw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="contact-info-list">
                        <div class="card-icon-text card-icon-text-horizontal" data-aos="fade-up">
                            <div class="svg-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                            </div>
                            <div class="content">
                                <h2 class="heading text-16 fw-500">
                                    Our Address
                                </h2>
                                <p class="text text-20">
                                    64KN 8 Avenue, Kigali, Rwanda
                                </p>
                            </div>
                        </div>
                        <div class="card-icon-text card-icon-text-horizontal" data-aos="fade-up">
                            <div class="svg-wrapper">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.8337 3.67188C28.2097 3.67188 32.4066 5.41026 35.5009 8.50461C38.5953 11.599 40.3337 15.7958 40.3337 20.1719M23.8337 11.0052C26.2648 11.0052 28.5964 11.971 30.3155 13.6901C32.0346 15.4091 33.0003 17.7407 33.0003 20.1719M25.359 30.3799C25.7376 30.5538 26.1642 30.5935 26.5684 30.4925C26.9727 30.3915 27.3304 30.1559 27.5828 29.8244L28.2337 28.9719C28.5752 28.5165 29.0181 28.1469 29.5272 27.8923C30.0363 27.6377 30.5978 27.5052 31.167 27.5052H36.667C37.6395 27.5052 38.5721 27.8915 39.2597 28.5791C39.9473 29.2668 40.3337 30.1994 40.3337 31.1719V36.6719C40.3337 37.6443 39.9473 38.577 39.2597 39.2646C38.5721 39.9522 37.6395 40.3385 36.667 40.3385C27.9148 40.3385 19.5212 36.8618 13.3325 30.6731C7.14377 24.4844 3.66699 16.0907 3.66699 7.33854C3.66699 6.36608 4.0533 5.43345 4.74093 4.74582C5.42857 4.05818 6.3612 3.67188 7.33366 3.67188H12.8337C13.8061 3.67188 14.7387 4.05818 15.4264 4.74582C16.114 5.43345 16.5003 6.36608 16.5003 7.33854V12.8385C16.5003 13.4078 16.3678 13.9692 16.1132 14.4783C15.8587 14.9875 15.489 15.4303 15.0337 15.7719L14.1757 16.4154C13.8391 16.6724 13.6019 17.0379 13.5043 17.45C13.4067 17.8621 13.4548 18.2952 13.6403 18.6759C16.1459 23.765 20.2668 27.8807 25.359 30.3799Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="content">
                                <h2 class="heading text-16 fw-500">
                                    Call Us
                                </h2>
                                <a
                                    href="tel:0788 224 628"
                                    class="text text-20"
                                    aria-label="Call us">
                                    0788 224 628
                                </a>
                                <a
                                    href="tel:0788 224 628"
                                    class="text text-20"
                                    aria-label="Call us">
                                    0788 224 628
                                </a>
                            </div>
                        </div>
                        <div class="card-icon-text card-icon-text-horizontal" data-aos="fade-up">
                            <div class="svg-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z" />
                                </svg>
                            </div>
                            <div class="content">
                                <h2 class="heading text-16 fw-500">
                                    Email Us
                                </h2>
                                <a
                                    href="mailto:info@rwandadiabetes.rw"
                                    class="text text-20"
                                    aria-label="Email us">
                                    info@rwandadiabetes.rw
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-social" data-aos="fade-up">
                        <h2 class="heading text-20 fw-500">Connect With Us</h2>
                        <ul
                            class="social-icons list-unstyled">
                            <li>
                                <a
                                    class="social-link text"
                                    href="https://web.facebook.com/">
                                    <svg
                                        width="10"
                                        height="18"
                                        viewBox="0 0 10 18"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.66634 10.2552H8.74967L9.58301 6.92188H6.66634V5.25521C6.66634 4.39739 6.66634 3.58854 8.33301 3.58854H9.58301V0.788625C9.31159 0.752583 8.28551 0.671875 7.20209 0.671875C4.94001 0.671875 3.33301 2.05259 3.33301 4.5883V6.92188H0.833008V10.2552H3.33301V17.3385H6.66634V10.2552Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="visually-hidden">Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a
                                    class="social-link text"
                                    href="https://www.linkedin.com/">
                                    <svg
                                        width="17"
                                        height="16"
                                        viewBox="0 0 17 16"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.78357 2.16742C3.78326 2.84601 3.37157 3.45666 2.74262 3.71142C2.11367 3.96619 1.39306 3.81419 0.920587 3.32711C0.448112 2.84001 0.318129 2.11511 0.59192 1.49421C0.86572 0.873305 1.48862 0.480397 2.1669 0.500755C3.0678 0.527797 3.78398 1.26612 3.78357 2.16742ZM3.83357 5.06742H0.500237V15.5007H3.83357V5.06742ZM9.10025 5.06742H5.78357V15.5007H9.06692V10.0257C9.06692 6.97573 13.0419 6.6924 13.0419 10.0257V15.5007H16.3336V8.8924C16.3336 3.75075 10.4503 3.94242 9.06692 6.4674L9.10025 5.06742Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="visually-hidden">Linkedin</span>
                                </a>
                            </li>
                            <li>
                                <a
                                    class="social-link text"
                                    href="https://x.com/">
                                    <svg
                                        width="18"
                                        height="14"
                                        viewBox="0 0 18 14"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.5104 1.71289C16.8743 1.9943 16.1996 2.17914 15.5088 2.26127C16.2366 1.82561 16.7812 1.14026 17.0411 0.332886C16.3573 0.739186 15.6088 1.02515 14.8282 1.17835C14.1693 0.475394 13.2483 0.0770356 12.2848 0.0781272C10.3605 0.0781272 8.79975 1.63835 8.79975 3.56354C8.79975 3.83666 8.83109 4.10153 8.88967 4.35709C5.99206 4.21121 3.42506 2.82455 1.70565 0.715686C1.39608 1.24757 1.23338 1.85216 1.2342 2.46757C1.2342 3.67667 1.84967 4.74388 2.78458 5.36868C2.23115 5.35118 1.6899 5.20171 1.20599 4.93262C1.20545 4.94726 1.20545 4.9619 1.20545 4.97574C1.20545 6.66484 2.40683 8.07384 4.00166 8.39376C3.70234 8.47476 3.3936 8.51568 3.08352 8.51543C2.85831 8.51543 2.63976 8.49468 2.42733 8.45393C2.8711 9.83826 4.15739 10.8461 5.683 10.8738C4.44845 11.8427 2.92391 12.3683 1.35453 12.3661C1.07677 12.3663 0.799246 12.3499 0.523438 12.3171C2.1167 13.3413 3.97127 13.8849 5.86535 13.8829C12.2763 13.8829 15.7817 8.57243 15.7817 3.9671C15.7817 3.81643 15.778 3.66523 15.7713 3.51615C16.4536 3.02322 17.0425 2.41257 17.5104 1.71289Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="visually-hidden">Twitter</span>
                                </a>
                            </li>
                            <li>
                                <a
                                    class="social-link text"
                                    href="https://www.instagram.com/">
                                    <svg
                                        width="18"
                                        height="18"
                                        viewBox="0 0 18 18"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.85724 0.671875C10.7951 0.673425 11.2703 0.678392 11.681 0.690617L11.8427 0.6959C12.0296 0.702542 12.2139 0.710875 12.4362 0.721292C13.3229 0.762267 13.9278 0.902542 14.4591 1.10879C15.0083 1.3206 15.4722 1.60671 15.9354 2.06991C16.3979 2.5331 16.6841 2.99837 16.8966 3.54629C17.1021 4.07685 17.2424 4.68241 17.2841 5.56921C17.294 5.79143 17.302 5.97577 17.3086 6.16263L17.3138 6.32437C17.326 6.73499 17.3316 7.21032 17.3333 8.14818L17.334 8.76952C17.3341 8.84543 17.3341 8.92377 17.3341 9.0046L17.334 9.23968L17.3335 9.8611C17.3319 10.7989 17.327 11.2743 17.3147 11.6848L17.3094 11.8466C17.3028 12.0335 17.2945 12.2178 17.2841 12.44C17.2431 13.3268 17.1021 13.9317 16.8966 14.4629C16.6847 15.0123 16.3979 15.4762 15.9354 15.9393C15.4722 16.4018 15.0062 16.6879 14.4591 16.9004C13.9278 17.106 13.3229 17.2463 12.4362 17.2879C12.2139 17.2978 12.0296 17.3059 11.8427 17.3124L11.681 17.3177C11.2703 17.3299 10.7951 17.3354 9.85724 17.3373L9.23582 17.3379C9.1599 17.3379 9.08157 17.3379 9.00074 17.3379H8.76565L8.14424 17.3373C7.2064 17.3358 6.73109 17.3309 6.32046 17.3186L6.15873 17.3134C5.97185 17.3067 5.78752 17.2983 5.5653 17.2879C4.67849 17.247 4.07433 17.106 3.54239 16.9004C2.99377 16.6887 2.52919 16.4018 2.06599 15.9393C1.6028 15.4762 1.31739 15.0102 1.10489 14.4629C0.898636 13.9317 0.759052 13.3268 0.717386 12.44C0.707486 12.2178 0.69941 12.0335 0.692869 11.8466L0.687627 11.6848C0.675435 11.2743 0.669877 10.7989 0.668077 9.8611L0.667969 8.14818C0.669519 7.21032 0.674477 6.73499 0.686702 6.32437L0.691994 6.16263C0.698635 5.97577 0.706969 5.79143 0.717386 5.56921C0.758352 4.68171 0.898636 4.07754 1.10489 3.54629C1.31669 2.99768 1.6028 2.5331 2.06599 2.06991C2.52919 1.60671 2.99447 1.32129 3.54239 1.10879C4.07364 0.902542 4.6778 0.762958 5.5653 0.721292C5.78752 0.7114 5.97185 0.703325 6.15873 0.696783L6.32046 0.691542C6.73109 0.679342 7.2064 0.673783 8.14424 0.671983L9.85724 0.671875ZM9.00074 4.83796C6.6983 4.83796 4.83405 6.70423 4.83405 9.0046C4.83405 11.307 6.70033 13.1713 9.00074 13.1713C11.3032 13.1713 13.1674 11.305 13.1674 9.0046C13.1674 6.70221 11.3011 4.83796 9.00074 4.83796ZM9.00074 6.50462C10.3815 6.50462 11.5007 7.62352 11.5007 9.0046C11.5007 10.3853 10.3818 11.5046 9.00074 11.5046C7.61999 11.5046 6.50072 10.3858 6.50072 9.0046C6.50072 7.62385 7.61957 6.50462 9.00074 6.50462ZM13.3757 3.58796C12.8013 3.58796 12.3341 4.05455 12.3341 4.62892C12.3341 5.20329 12.8007 5.6706 13.3757 5.6706C13.9501 5.6706 14.4174 5.20402 14.4174 4.62892C14.4174 4.05455 13.9493 3.58724 13.3757 3.58796Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="visually-hidden">Instagram</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-contact-form">
                    <div class="contact-form-wrap radius18">
                        <div class="contact-form-headings">
                            <h2 class="heading text-32" data-aos="fade-up">
                                Make an Appointment
                            </h2>
                            <p class="text text-16" data-aos="fade-up">
                                Feel free to contact with us, we don't spam your email
                            </p>
                        </div>
                        <form action="{{ route('contact.submit') }}" method="POST" class="form contact-form" data-aos="fade-up">
                            @csrf
                            <div class="field">
                                <input type="text" name="name" placeholder="Your Name *" required>
                            </div>

                            <div class="field">
                                <input type="email" name="email" placeholder="Email Here *" required>
                            </div>

                            <div class="field">
                                <input type="text" name="service" placeholder="Service Type *" required>
                            </div>

                            <div class="field">
                                <textarea name="message" rows="4" placeholder="Your Comment *" required></textarea>
                            </div>

                            <div class="form-button">
                                <button type="submit" class="button button--secondary">
                                    Send Message
                                </button>
                            </div>
                        </form>

                    </div>
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

@endsection