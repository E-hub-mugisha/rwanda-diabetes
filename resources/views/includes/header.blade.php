<script src="https://checkout.flutterwave.com/v3.js"></script>

<!-- Header 3 -->
<sticky-header data-sticky-type="always">
    <header class="header-1 header-floating">
        <div class="container-fluid">
            <div class="header-grid">
                <a class="header-logo" href="{{ route('home') }}" aria-label="Rwanda diabetes">
                    <img src="{{ asset('assets/img/logo-1.png') }}" alt="Rwanda diabetes Logo" width="189" height="32">
                </a>
                <drawer-menu>
                    <nav class="header-nav drawer-menu">
                        <div class="d-lg-none header-nav-headings">
                            <a class="header-logo" href="{{ route('home') }}" aria-label="Rwanda diabetes">
                                <img src="{{ asset('assets/img/logo-rda.png') }}" alt="Rwanda diabetes Logo" width="189" height="32" loading="lazy">
                            </a>
                            <drawer-opener class="svg-wrapper menu-close" data-drawer=".drawer-menu">
                                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
                                        fill="currentColor" />
                                </svg>
                            </drawer-opener>
                        </div>
                        <ul class="header-menu list-unstyled">

                            <li class="nav-item nav-item-static">
                                <a class="menu-link menu-link-main menu-accrodion" href="#">
                                    ABOUT US
                                    <svg width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5L0 0H10L5 5Z" fill="currentColor" />
                                    </svg>
                                </a>
                                <div class="header-megamenu header-submenu menu-absolute submenu-color">
                                    <ul class="list-unstyled">
                                        <li class="nav-item">
                                            <a class="menu-link heading fw-300">Organization</a>
                                            <ul class="submenu-lists reset-submenu list-unstyled submenu-color">
                                                <li class="nav-item">
                                                    <a class="menu-link" href="{{ route('about')}}">
                                                        <div class="heading text-18 fw-500">
                                                            who we are
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="menu-link" href="{{ route('values')}}">
                                                        <div class="heading text-18 fw-500">
                                                            Mission, Vision & objectives
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="menu-link" href="{{ route('our-team')}}">
                                                        <div class="heading text-18 fw-500">
                                                            Our Team
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="menu-link heading fw-300" href="#">Partnerships</a>
                                            <ul class="submenu-lists reset-submenu list-unstyled submenu-color">
                                                <li class="nav-item">
                                                    <a class="menu-link" href="{{ route('partner_with_us')}}">
                                                        <div class="heading text-18 fw-500">
                                                            Our Partners
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="menu-link" href="{{ route('impact')}}">
                                                        <div class="heading text-18 fw-500">
                                                            Our Impact
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="menu-link" href="{{ route('stories.index')}}">
                                                        <div class="heading text-18 fw-500">
                                                            Success Stories
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item megamenu-links">
                                            <a class="menu-link text-14 fw-300" href="{{ route('contact')}}">
                                                <svg class="icon-18" width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                    <path opacity="0.5" d="M8 10.5H16" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                    <path opacity="0.5" d="M8 14H13.5" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                </svg>
                                                Get Help
                                            </a>
                                            <a class="menu-link text-14 fw-300" href="{{ route('news.index')}}">
                                                <svg class="icon-18" width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                                                    <path
                                                        d="M15.4137 10.941C16.1954 11.4026 16.1954 12.5974 15.4137 13.059L10.6935 15.8458C9.93371 16.2944 9 15.7105 9 14.7868L9 9.21316C9 8.28947 9.93371 7.70561 10.6935 8.15419L15.4137 10.941Z"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                </svg>
                                                Latest News
                                            </a>
                                            <a class="menu-link text-14 fw-300" href="{{ route('articles.index')}}">
                                                <svg class="icon-18" width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9" cy="9" r="2" stroke="currentColor" stroke-width="1.5" />
                                                    <path
                                                        d="M13 15C13 16.1046 13 17 9 17C5 17 5 16.1046 5 15C5 13.8954 6.79086 13 9 13C11.2091 13 13 13.8954 13 15Z"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                    <path
                                                        d="M22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C21.298 5.64118 21.5794 6.2255 21.748 7"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path d="M19 12H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path d="M19 9H14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path d="M19 15H16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                </svg>
                                                Articles
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item nav-item-static">
                                <a class="menu-link menu-link-main menu-accrodion" href="#">
                                    PROGRAMS & INITIATIVES
                                    <svg width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5L0 0H10L5 5Z" fill="currentColor" />
                                    </svg>
                                </a>

                                <div class="header-megamenu header-submenu menu-absolute submenu-color">
                                    <ul class="list-unstyled">

                                        @foreach(\App\Models\Category::whereHas('programs')->with('programs')->get() as $category)
                                        <li class="nav-item">

                                            <!-- Category name -->
                                            <a class="menu-link heading fw-300"
                                                href="{{ route('programs.category', $category->slug) }}">
                                                {{ $category->name }}
                                            </a>

                                            <ul class="submenu-lists reset-submenu list-unstyled submenu-color">

                                                <!-- Show only first 5 programs -->
                                                @foreach($category->programs->take(5) as $program)
                                                <li class="nav-item">
                                                    <a class="menu-link" href="{{ route('programs.show', $program->slug) }}">
                                                        <div class="heading text-16 fw-300">
                                                            {{ $program->title }}
                                                        </div>
                                                    </a>
                                                </li>
                                                @endforeach

                                                <!-- See all link -->
                                                @if($category->programs->count() > 5)
                                                <li class="nav-item">
                                                    <a class="menu-link" href="{{ route('programs.category', $category->slug) }}">
                                                        <div class="heading text-18 fw-500">
                                                            See all
                                                        </div>
                                                    </a>
                                                </li>
                                                @endif

                                            </ul>

                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </li>


                            <li class="nav-item nav-item-static">
                                <a class="menu-link menu-link-main menu-accrodion" href="#!">
                                    RESOURCES
                                    <svg width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5L0 0H10L5 5Z" fill="currentColor" />
                                    </svg>
                                </a>
                                <div class="header-megamenu header-submenu menu-absolute submenu-color">
                                    <ul class="list-unstyled">

                                        {{-- ========================= --}}
                                        {{-- RESEARCH MENU BLOCK     --}}
                                        {{-- ========================= --}}
                                        @php
                                        $researchCategories = App\Models\ResearchCategory::where('type', 'research')->get();
                                        @endphp

                                        <li class="nav-item">
                                            <a class="menu-link heading fw-300" href="{{ route('research.index') }}">Research</a>

                                            <ul class="submenu-lists reset-submenu list-unstyled submenu-color">
                                                @foreach ($researchCategories as $cat)
                                                <li class="nav-item">
                                                    <a class="menu-link" href="{{ route('research.category', $cat->slug) }}">
                                                        <div class="heading text-18 fw-500">
                                                            {{ $cat->name }}
                                                        </div>
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>


                                        {{-- ========================= --}}
                                        {{-- DOWNLOADS MENU BLOCK    --}}
                                        {{-- ========================= --}}
                                        @php
                                        $downloadCategories = App\Models\ResearchCategory::where('type', 'download')->get();
                                        @endphp

                                        <li class="nav-item">
                                            <a class="menu-link heading fw-300" href="{{ route('downloads.index') }}">Downloads</a>

                                            <ul class="submenu-lists reset-submenu list-unstyled submenu-color">
                                                @foreach ($downloadCategories as $cat)
                                                <li class="nav-item">
                                                    <a class="menu-link" href="{{ route('downloads.category', $cat->slug) }}">
                                                        <div class="heading text-18 fw-500">
                                                            {{ $cat->name }}
                                                        </div>
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>


                                        {{-- ========================= --}}
                                        {{-- STATIC RIGHT SIDE    --}}
                                        {{-- ========================= --}}
                                        <li class="nav-item megamenu-links">
                                            <a class="menu-link text-14 fw-300" href="{{ route('impact')}}">
                                                <svg class="icon-18" width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                    <path opacity="0.5" d="M8 10.5H16" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                    <path opacity="0.5" d="M8 14H13.5" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                </svg>
                                                Our Impact
                                            </a>

                                            <a class="menu-link text-14 fw-300" href="{{ route('stories.index')}}">
                                                <svg class="icon-18" width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                                                    <path
                                                        d="M15.4137 10.941C16.1954 11.4026 16.1954 12.5974 15.4137 13.059L10.6935 15.8458C9.93371 16.2944 9 15.7105 9 14.7868L9 9.21316C9 8.28947 9.93371 7.70561 10.6935 8.15419L15.4137 10.941Z"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                </svg>
                                                Stories
                                            </a>

                                            <a class="menu-link text-14 fw-300" href="{{ route('partner_with_us')}}">
                                                <svg class="icon-18" width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9" cy="9" r="2" stroke="currentColor" stroke-width="1.5" />
                                                    <path
                                                        d="M13 15C13 16.1046 13 17 9 17C5 17 5 16.1046 5 15C5 13.8954 6.79086 13 9 13C11.2091 13 13 13.8954 13 15Z"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                    <path
                                                        d="M22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C21.298 5.64118 21.5794 6.2255 21.748 7"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path d="M19 12H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path d="M19 9H14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path d="M19 15H16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                </svg>
                                                Partner with us
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                            </li>
                            <li class="nav-item nav-item-static">
                                <a class="menu-link menu-link-main menu-accrodion" href="#">
                                    LEARNING TIPS
                                    <svg width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5L0 0H10L5 5Z" fill="currentColor" />
                                    </svg>
                                </a>

                                <div class="header-megamenu header-submenu menu-absolute submenu-color">
                                    <ul class="list-unstyled">
                                        @foreach(\App\Models\Category::with('materials')->get() as $category)
                                        <li class="nav-item">

                                            <!-- Category Name -->
                                            <a class="menu-link heading fw-300"
                                                href="{{ route('materials.category', $category->slug) }}">
                                                {{ $category->name }}
                                            </a>

                                            @if($category->materials->count() > 0)
                                            <ul class="submenu-lists reset-submenu list-unstyled submenu-color">

                                                <!-- Show max 5 materials -->
                                                @foreach($category->materials->take(5) as $material)
                                                <li class="nav-item">
                                                    <a class="menu-link" href="{{ route('materials.show', $material->slug) }}">
                                                        <div class="heading text-16 fw-300">
                                                            {{ $material->title }}
                                                        </div>
                                                    </a>
                                                </li>
                                                @endforeach

                                                <!-- “See all” -->
                                                @if($category->materials->count() > 5)
                                                <li class="nav-item">
                                                    <a class="menu-link" href="{{ route('materials.category', $category->slug) }}">
                                                        <div class="heading text-18 fw-500">
                                                            See all
                                                        </div>
                                                    </a>
                                                </li>
                                                @endif

                                            </ul>
                                            @endif

                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>


                            <li class="nav-item">
                                <a class="menu-link menu-link-main menu-accrodion" href="#">
                                    NEWS & STORIES
                                    <svg width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5L0 0H10L5 5Z" fill="currentColor" />
                                    </svg>
                                </a>
                                <div class="header-submenu menu-absolute submenu-color">
                                    <ul class="list-unstyled">
                                        <li class="nav-item">
                                            <a class="menu-link" href="{{ route('news.index')}}">Latest News</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="menu-link" href="{{ route('articles.index')}}">
                                                Articles (Health + Research)
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="menu-link" href="{{ route('stories.index')}}">Stories & Testimonials</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="menu-link" href="{{ route('media.index')}}">
                                                Media Gallery (Photos & Videos)
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item nav-item-static">
                                <a class="menu-link menu-link-main menu-accrodion" href="#">
                                    GET INVOLVED
                                    <svg width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5L0 0H10L5 5Z" fill="currentColor" />
                                    </svg>
                                </a>
                                <div class="header-megamenu header-submenu menu-absolute submenu-color">
                                    <ul class="list-unstyled">
                                        <li class="nav-item">
                                            <a class="menu-link heading fw-300" href="blog.html">
                                                GET INVOLVED
                                            </a>
                                            <ul class="reset-submenu list-unstyled submenu-color">
                                                <li class="nav-item">
                                                    <a class="menu-link" href="{{ route('partner_with_us')}}">
                                                        <div class="heading text-20">
                                                            Partner with us
                                                        </div>
                                                        <div class="text text-14">
                                                            Through Partners and collaborators we can make impact to the communities
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="menu-link" href="{{ route('contact')}}">
                                                        <div class="heading text-20">
                                                            Contact US
                                                        </div>
                                                        <div class="text text-14">
                                                            Let's get in touch to Build a strong community Together.
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="menu-link" role="button" data-bs-toggle="modal" data-bs-target="#donationModal">
                                                        <div class="heading text-20">
                                                            Make a donation
                                                        </div>
                                                        <div class="text text-14">
                                                            Your support can make a difference. Donate today to help us continue our mission.
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="menu-link heading fw-300" href="{{ route('news.index')}}">
                                                Our recent news and stories
                                            </a>
                                            <ul class="reset-submenu list-unstyled submenu-color">
                                                <li class="nav-item">
                                                    <a class="menu-link megamenu-image-wrap" href="{{ route('news.index')}}">
                                                        <picture>
                                                            <source media="(max-width: 575px)" srcset="assets/img/menu/575.jpg">
                                                            <img src="assets/img/menu/1.jpg" width="1000" height="668" loading="lazy"
                                                                alt="Hero Image">
                                                        </picture>
                                                        <div class="content">
                                                            <div class="heading text-20">
                                                                <div class="heading text-20">
                                                                    Rwanda diabetes success stories
                                                                </div>
                                                                <div class="text text-14">
                                                                    Read about the inspiring stories of individuals and communities in Rwanda who have successfully managed diabetes through education, support, and access to healthcare.
                                                                </div>
                                                            </div>
                                                            <div class="button button--primary">
                                                                <span class="svg-wrapper">
                                                                    <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item megamenu-links">
                                            <a class="menu-link text-14 fw-300" href="{{ route('contact')}}">
                                                <svg class="icon-18" width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                    <path opacity="0.5" d="M8 10.5H16" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                    <path opacity="0.5" d="M8 14H13.5" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                </svg>
                                                Get Help
                                            </a>
                                            <a class="menu-link text-14 fw-300" href="{{ route('impact') }}">
                                                <svg class="icon-18" width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                                                    <path
                                                        d="M15.4137 10.941C16.1954 11.4026 16.1954 12.5974 15.4137 13.059L10.6935 15.8458C9.93371 16.2944 9 15.7105 9 14.7868L9 9.21316C9 8.28947 9.93371 7.70561 10.6935 8.15419L15.4137 10.941Z"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                </svg>
                                                our Impact
                                            </a>
                                            <a class="menu-link text-14 fw-300" href="{{ route('our-team')}}">
                                                <svg class="icon-18" width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9" cy="9" r="2" stroke="currentColor" stroke-width="1.5" />
                                                    <path
                                                        d="M13 15C13 16.1046 13 17 9 17C5 17 5 16.1046 5 15C5 13.8954 6.79086 13 9 13C11.2091 13 13 13.8954 13 15Z"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                    <path
                                                        d="M22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C21.298 5.64118 21.5794 6.2255 21.748 7"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path d="M19 12H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path d="M19 9H14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path d="M19 15H16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                </svg>
                                                our Team
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                        <div class="drawer-content d-lg-none">
                            <div class="drawer-block">
                                <div class="drawer-heading text text-18">PROGRAMS & INITIATIVES</div>
                                <ul class="drawer-additional-menu list-unstyled flex-direction-column">
                                    @foreach(\App\Models\Category::whereHas('programs')->with('programs')->get() as $category)
                                    <li class="nav-item">
                                        <a class="menu-link" href="{{ route('programs.category', $category->slug) }}">{{ $category->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="drawer-block drawer-block-contact">
                                <div class="drawer-heading text text-18">Quick Contact</div>
                                <ul class="drawer-additional-menu list-unstyled flex-direction-column">
                                    <li class="nav-item">
                                        <div class="menu-link no-hover">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                            </svg>
                                            64KN 8 Avenue, Kigali
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="menu-link" href="tel:+001234567890">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                                            </svg>
                                            +0788 224 628
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="menu-link" href="mailto:info@rwandadiabetes.rw">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z" />
                                            </svg>
                                            info@rwandadiabetes.rw
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </drawer-menu>
                <div class="header-actions d-flex align-items-center">
                    <a role="button" data-bs-toggle="modal" data-bs-target="#donationModal" aria-label="contact us" class="button button--primary button--slim">
                        Donate
                        <span class="svg-wrapper">
                            <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                    </a>
                    <drawer-opener class="svg-wrapper menu-open d-lg-none" data-drawer=".drawer-menu">
                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="26" cy="26" r="25.5" fill="white" stroke="currentColor" />
                            <path
                                d="M32.5 18.2857C32.5 17.5757 31.9179 17 31.2 17H14.3C13.5821 17 13 17.5757 13 18.2857C13 18.9958 13.5821 19.5714 14.3 19.5714H31.2C31.9179 19.5714 32.5 18.9957 32.5 18.2857ZM14.3 24.7143H37.7C38.4179 24.7143 39 25.29 39 26C39 26.7101 38.4179 27.2857 37.7 27.2857H14.3C13.5821 27.2857 13 26.7101 13 26C13 25.29 13.5821 24.7143 14.3 24.7143ZM14.3 32.4286H26C26.7179 32.4286 27.3 33.0042 27.3 33.7143C27.3 34.4243 26.7179 35 26 35H14.3C13.5821 35 13 34.4243 13 33.7143C13 33.0042 13.5821 32.4286 14.3 32.4286Z"
                                fill="currentColor" />
                        </svg>
                    </drawer-opener>
                    <drawer-opener class="svg-wrapper menu-open d-none d-lg-flex" data-drawer=".drawer-additional">
                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="26" cy="26" r="25.5" fill="white" stroke="currentColor" />
                            <path
                                d="M32.5 18.2857C32.5 17.5757 31.9179 17 31.2 17H14.3C13.5821 17 13 17.5757 13 18.2857C13 18.9958 13.5821 19.5714 14.3 19.5714H31.2C31.9179 19.5714 32.5 18.9957 32.5 18.2857ZM14.3 24.7143H37.7C38.4179 24.7143 39 25.29 39 26C39 26.7101 38.4179 27.2857 37.7 27.2857H14.3C13.5821 27.2857 13 26.7101 13 26C13 25.29 13.5821 24.7143 14.3 24.7143ZM14.3 32.4286H26C26.7179 32.4286 27.3 33.0042 27.3 33.7143C27.3 34.4243 26.7179 35 26 35H14.3C13.5821 35 13 34.4243 13 33.7143C13 33.0042 13.5821 32.4286 14.3 32.4286Z"
                                fill="currentColor" />
                        </svg>
                    </drawer-opener>
                </div>
            </div>
        </div>
    </header>
</sticky-header>

<div class="theme-drawer drawer-additional" data-position="right">
    <div class="drawer-headings">
        <a class="header-logo" href="{{ route('home') }}" aria-label="Rwanda diabetes">
            <img src="{{ asset('assets/img/logo-rda.png') }}" alt="rwanda Logo" width="189" height="32" loading="lazy">
        </a>
        <drawer-opener class="svg-wrapper menu-close" data-drawer=".drawer-additional">
            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
                    fill="currentColor" />
            </svg>
        </drawer-opener>
    </div>
    <div class="drawer-content">
        <div class="drawer-block">
            <div class="drawer-heading text text-18">Our Programs</div>
            <ul class="drawer-additional-menu list-unstyled flex-direction-column">
                @foreach(\App\Models\Category::whereHas('programs')->with('programs')->get() as $category)
                <li class="nav-item">
                    <a class="menu-link" href="{{ route('programs.category', $category->slug) }}">{{ $category->name }}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="drawer-block drawer-block-contact">
            <div class="drawer-heading text text-18">Quick Contact</div>
            <ul class="drawer-additional-menu list-unstyled flex-direction-column">
                <li class="nav-item">
                    <div class="menu-link no-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                        64KN 8 Avenue, Kigali
                    </div>
                </li>
                <li class="nav-item">
                    <a class="menu-link" href="tel:0788 224 628">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                        </svg>
                        0788 224 628
                    </a>
                </li>
                <li class="nav-item">
                    <a class="menu-link" href="mailto:info@rwandadiabetes.rw">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z" />
                        </svg>
                        info@rwandadiabetes.rw
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Modern Donation Modal -->
<div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-lg border-0 rounded-4">

            <!-- Header -->
            <div class="modal-header border-0 text-center d-block pb-0">
                <h4 class="modal-title fw-bold text-primary" id="donationModalLabel">
                    Support Our Mission 💙
                </h4>
                <p class="text-muted mt-1 mb-0">
                    Your contribution helps us continue our programs & community outreach.
                </p>
            </div>

            <form id="donationForm" method="POST" action="{{ route('donate.pay') }}">
                @csrf

                <!-- Body -->
                <div class="modal-body px-4">

                    <!-- Suggested Quick Amounts -->
                    <div class="d-flex gap-2 mb-3 flex-wrap justify-content-center">
                        @foreach([5000, 10000, 20000, 50000] as $amount)
                            <button type="button" class="btn btn-outline-primary rounded-pill px-3 quick-amount"
                                data-amount="{{ $amount }}">
                                {{ number_format($amount) }} RWF
                            </button>
                        @endforeach
                    </div>

                    <!-- Name -->
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="bi bi-person"></i>
                        </span>
                        <input type="text" name="name" placeholder="Full Name"
                               class="form-control border-start-0" required>
                    </div>

                    <!-- Email -->
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="bi bi-envelope"></i>
                        </span>
                        <input type="email" name="email" placeholder="Email (optional)"
                               class="form-control border-start-0">
                    </div>

                    <!-- Phone -->
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="bi bi-telephone"></i>
                        </span>
                        <input type="text" name="phone" placeholder="Phone Number"
                               class="form-control border-start-0">
                    </div>

                    <!-- Amount -->
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="bi bi-cash-stack"></i>
                        </span>
                        <input type="number" name="amount" id="donationAmount"
                               placeholder="Enter Amount (RWF)" class="form-control border-start-0"
                               min="100" required>
                    </div>

                    <small class="text-muted">
                        Payments via Flutterwave – Card, MTN Mobile Money, Airtel Money.
                    </small>

                    <!-- Trust Badge -->
                    <div class="text-center mt-3">
                        <small class="text-success fw-semibold">
                            <i class="bi bi-shield-check"></i> Secure & Encrypted Payment
                        </small>
                    </div>

                </div>

                <!-- Footer -->
                <div class="modal-footer border-0 px-4 pb-4">
                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold rounded-pill">
                        Donate Now ❤️
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Quick Amount Script -->
<script>
    document.querySelectorAll('.quick-amount').forEach(btn => {
        btn.addEventListener('click', () => {
            document.getElementById('donationAmount').value = btn.getAttribute('data-amount');
        });
    });

    // Handle submission and run inline Flutterwave payment
    document.getElementById('donationForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent form submit

        let name = document.querySelector('input[name="name"]').value;
        let email = document.querySelector('input[name="email"]').value || "donor@example.com";
        let phone = document.querySelector('input[name="phone"]').value || "";
        let amount = document.querySelector('input[name="amount"]').value;

        if (amount < 100) {
            alert("Minimum donation is 100 RWF.");
            return;
        }

        FlutterwaveCheckout({
            public_key: "{{ env('FLW_PUBLIC_KEY') }}",
            tx_ref: "DON_" + Date.now(),
            amount: amount,
            currency: "RWF",
            payment_options: "card, mobilemoneyrwanda",
            customer: {
                email: email,
                phone_number: phone,
                name: name,
            },
            customizations: {
                title: "Donation",
                description: "Support Our Mission",
                logo: "{{ asset('logo.png') }}"
            },
            callback: function (response) {
                // Redirect to backend verification route
                window.location.href = "/donation/verify?transaction_id=" + response.transaction_id;
            },
            onclose: function () {
                console.log("Payment closed");
            }
        });

    });
</script>
