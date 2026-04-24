@extends('layouts.base')
@section('title', $program->title)

@section('content')

<style>
    /* ── Tokens ─────────────────────────────────────── */
    :root {
        --ink:        #0d1117;
        --ink-light:  #4a5568;
        --surface:    #ffffff;
        --surface-2:  #f7f8fa;
        --border:     #e8eaed;
        --accent:     #1a6b4a;
        --accent-2:   #d4f0e4;
        --gold:       #c8963e;
        --radius-sm:  8px;
        --radius-md:  16px;
        --radius-lg:  24px;
        --shadow-sm:  0 1px 3px rgba(0,0,0,.06), 0 1px 2px rgba(0,0,0,.04);
        --shadow-md:  0 4px 16px rgba(0,0,0,.08), 0 2px 6px rgba(0,0,0,.04);
        --shadow-lg:  0 12px 40px rgba(0,0,0,.1), 0 4px 12px rgba(0,0,0,.05);
        --font-display: 'Cormorant Garamond', 'Georgia', serif;
        --font-body:    'DM Sans', 'Segoe UI', sans-serif;
        --transition:   0.22s cubic-bezier(.4,0,.2,1);
    }

    /* ── Page shell ─────────────────────────────────── */
    .pd-page {
        background: var(--surface);
        min-height: 100vh;
    }

    /* ── Hero strip ─────────────────────────────────── */
    .pd-hero {
        position: relative;
        overflow: hidden;
        border-radius: 0 0 var(--radius-lg) var(--radius-lg);
        max-height: 520px;
    }
    .pd-hero img {
        width: 100%;
        height: 520px;
        object-fit: cover;
        display: block;
        transition: transform 6s ease;
    }
    .pd-hero:hover img { transform: scale(1.03); }
    .pd-hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to top,
            rgba(13,17,23,.82) 0%,
            rgba(13,17,23,.35) 55%,
            transparent 100%
        );
    }
    .pd-hero-label {
        position: absolute;
        top: 28px;
        left: 32px;
        background: var(--accent);
        color: #fff;
        font-family: var(--font-body);
        font-size: 11px;
        font-weight: 600;
        letter-spacing: .1em;
        text-transform: uppercase;
        padding: 5px 14px;
        border-radius: 100px;
    }

    /* ── Layout wrapper ─────────────────────────────── */
    .pd-layout {
        display: grid;
        grid-template-columns: 1fr 320px;
        gap: 48px;
        align-items: start;
        padding: 56px 0 80px;
    }
    @media (max-width: 991px) {
        .pd-layout { grid-template-columns: 1fr; gap: 40px; padding: 40px 0 64px; }
    }

    /* ── Article ────────────────────────────────────── */
    .pd-article-title {
        font-family: var(--font-display);
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 600;
        line-height: 1.22;
        color: var(--ink);
        margin: 0 0 24px;
        letter-spacing: -.01em;
    }
    .pd-article-divider {
        width: 48px;
        height: 3px;
        background: var(--accent);
        border: none;
        margin: 0 0 28px;
        border-radius: 2px;
    }
    .pd-article-body {
        font-family: var(--font-body);
        font-size: 16px;
        line-height: 1.8;
        color: var(--ink-light);
    }
    .pd-article-body p { margin-bottom: 20px; }
    .pd-article-body p:last-child { margin-bottom: 0; }
    .pd-article-body strong { color: var(--ink); }
    .pd-article-body a { color: var(--accent); text-decoration: underline; text-underline-offset: 3px; }

    /* ── Share bar ──────────────────────────────────── */
    .pd-share {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px 32px;
        padding: 24px 0;
        border-top: 1px solid var(--border);
        border-bottom: 1px solid var(--border);
        margin-top: 40px;
    }
    .pd-share-group {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .pd-share-label {
        font-family: var(--font-body);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--ink-light);
    }
    .pd-tag {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: var(--accent-2);
        color: var(--accent);
        font-family: var(--font-body);
        font-size: 13px;
        font-weight: 600;
        padding: 5px 14px;
        border-radius: 100px;
        text-decoration: none;
        transition: background var(--transition), color var(--transition);
    }
    .pd-tag:hover { background: var(--accent); color: #fff; }

    .pd-social-icons {
        display: flex;
        align-items: center;
        gap: 6px;
        list-style: none;
        margin: 0; padding: 0;
    }
    .pd-social-icons a {
        display: grid;
        place-items: center;
        width: 36px;
        height: 36px;
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
        color: var(--ink-light);
        background: var(--surface);
        transition: border-color var(--transition), color var(--transition), background var(--transition), transform var(--transition);
    }
    .pd-social-icons a:hover {
        border-color: var(--accent);
        color: var(--accent);
        background: var(--accent-2);
        transform: translateY(-2px);
    }

    /* ── Sidebar ────────────────────────────────────── */
    .pd-sidebar { position: sticky; top: 100px; }
    .pd-sidebar-card {
        background: var(--surface-2);
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 28px;
    }
    .pd-sidebar-title {
        font-family: var(--font-body);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--accent);
        margin-bottom: 20px;
    }
    .pd-recent-list {
        list-style: none;
        margin: 0; padding: 0;
        display: flex;
        flex-direction: column;
        gap: 0;
    }
    .pd-recent-item {
        padding: 16px 0;
        border-bottom: 1px solid var(--border);
    }
    .pd-recent-item:last-child { border-bottom: none; padding-bottom: 0; }
    .pd-recent-date {
        font-family: var(--font-body);
        font-size: 11px;
        font-weight: 500;
        color: var(--ink-light);
        letter-spacing: .04em;
        margin-bottom: 6px;
    }
    .pd-recent-link {
        font-family: var(--font-body);
        font-size: 14px;
        font-weight: 600;
        color: var(--ink);
        text-decoration: none;
        line-height: 1.45;
        display: block;
        transition: color var(--transition);
    }
    .pd-recent-link:hover { color: var(--accent); }

    /* ── News section ───────────────────────────────── */
    .pd-news-section {
        background: var(--surface-2);
        padding: 80px 0;
        margin-top: 0;
    }
    .pd-news-header {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
        margin-bottom: 48px;
    }
    .pd-news-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-family: var(--font-body);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--accent);
        margin-bottom: 10px;
    }
    .pd-news-eyebrow-dot {
        width: 6px; height: 6px;
        background: var(--accent);
        border-radius: 50%;
        display: inline-block;
    }
    .pd-news-heading {
        font-family: var(--font-display);
        font-size: clamp(1.8rem, 3vw, 2.4rem);
        font-weight: 600;
        color: var(--ink);
        margin: 0;
        line-height: 1.2;
        letter-spacing: -.01em;
    }
    .pd-discover-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-family: var(--font-body);
        font-size: 13px;
        font-weight: 600;
        color: var(--accent);
        text-decoration: none;
        padding: 10px 20px;
        border: 1.5px solid var(--accent);
        border-radius: var(--radius-sm);
        transition: background var(--transition), color var(--transition), transform var(--transition);
        white-space: nowrap;
    }
    .pd-discover-btn:hover {
        background: var(--accent);
        color: #fff;
        transform: translateY(-1px);
    }
    .pd-discover-btn svg { transition: transform var(--transition); }
    .pd-discover-btn:hover svg { transform: translate(2px, -2px); }

    /* ── News card ──────────────────────────────────── */
    .pd-news-card {
        background: var(--surface);
        border-radius: var(--radius-md);
        overflow: hidden;
        border: 1px solid var(--border);
        box-shadow: var(--shadow-sm);
        transition: box-shadow var(--transition), transform var(--transition);
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    .pd-news-card:hover {
        box-shadow: var(--shadow-lg);
        transform: translateY(-4px);
    }
    .pd-news-card-image {
        position: relative;
        overflow: hidden;
        aspect-ratio: 16/10;
    }
    .pd-news-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }
    .pd-news-card:hover .pd-news-card-image img { transform: scale(1.06); }
    .pd-news-cat-badge {
        position: absolute;
        top: 14px;
        left: 14px;
        background: rgba(255,255,255,.92);
        backdrop-filter: blur(8px);
        color: var(--accent);
        font-family: var(--font-body);
        font-size: 10px;
        font-weight: 700;
        letter-spacing: .1em;
        text-transform: uppercase;
        padding: 4px 12px;
        border-radius: 100px;
    }
    .pd-news-card-body {
        padding: 24px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }
    .pd-news-meta {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 12px;
    }
    .pd-news-meta-item {
        display: flex;
        align-items: center;
        gap: 5px;
        font-family: var(--font-body);
        font-size: 12px;
        color: var(--ink-light);
    }
    .pd-news-meta-item svg { flex-shrink: 0; opacity: .6; }
    .pd-news-card-title {
        font-family: var(--font-display);
        font-size: 19px;
        font-weight: 600;
        line-height: 1.4;
        color: var(--ink);
        margin: 0 0 16px;
        flex: 1;
    }
    .pd-news-card-title a {
        text-decoration: none;
        color: inherit;
        transition: color var(--transition);
    }
    .pd-news-card-title a:hover { color: var(--accent); }
    .pd-read-more {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-family: var(--font-body);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: var(--accent);
        text-decoration: none;
        margin-top: auto;
        transition: gap var(--transition);
    }
    .pd-read-more:hover { gap: 10px; }
    .pd-read-more svg { transition: transform var(--transition); }
    .pd-read-more:hover svg { transform: translate(3px, -3px); }

    /* ── Filter drawer toggle (mobile) ─────────────── */
    .pd-filter-toggle {
        display: none;
        align-items: center;
        gap: 8px;
        font-family: var(--font-body);
        font-size: 13px;
        font-weight: 600;
        color: var(--ink);
        background: var(--surface-2);
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
        padding: 8px 16px;
        cursor: pointer;
        margin-bottom: 24px;
    }
    @media (max-width: 991px) { .pd-filter-toggle { display: inline-flex; } }

    /* ── News grid spacing ──────────────────────────── */
    .pd-news-grid .col-12 { margin-bottom: 24px; }
</style>

<div class="pd-page">
    {{-- ── Main article + sidebar ──────────────────────────── --}}
    <div class="container">

        {{-- Mobile filter toggle --}}
        <drawer-opener
            class="pd-filter-toggle d-lg-none"
            data-drawer=".drawer-blog-sidebar">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="4" y1="6" x2="20" y2="6"/><line x1="8" y1="12" x2="20" y2="12"/><line x1="12" y1="18" x2="20" y2="18"/>
            </svg>
            Filter
        </drawer-opener>

        <div class="pd-layout">

            {{-- ── Article ── --}}
            <article>
                {{-- Hero image --}}
                <div class="pd-hero" data-aos="fade-up">
                    <img src="{{ asset('image/program') }}/{{ $program->image }}"
                         alt="{{ $program->title }}" width="1000" height="520" loading="lazy">
                    <div class="pd-hero-overlay"></div>
                    <span class="pd-hero-label">{{ $category->name }}</span>
                </div>

                {{-- Title & body --}}
                <div style="padding-top: 40px;" data-aos="fade-up" data-aos-delay="50">
                    <h1 class="pd-article-title">{{ $program->title }}</h1>
                    <hr class="pd-article-divider">
                    <div class="pd-article-body">
                        <p>{!! $program->short_description !!}</p>
                        <p>{!! $program->content !!}</p>
                    </div>
                </div>

                {{-- Share bar --}}
                <div class="pd-share" data-aos="fade-up" data-aos-delay="80">
                    <div class="pd-share-group">
                        <span class="pd-share-label">Tag</span>
                        <a href="#" class="pd-tag" aria-label="tag">{{ $category->name }}</a>
                    </div>
                    <div class="pd-share-group">
                        <span class="pd-share-label">Share</span>
                        <ul class="pd-social-icons">
                            <li>
                                <a href="https://web.facebook.com/" aria-label="Facebook">
                                    <svg width="10" height="16" viewBox="0 0 10 18" fill="currentColor">
                                        <path d="M6.66634 10.2552H8.74967L9.58301 6.92188H6.66634V5.25521C6.66634 4.39739 6.66634 3.58854 8.33301 3.58854H9.58301V0.788625C9.31159 0.752583 8.28551 0.671875 7.20209 0.671875C4.94001 0.671875 3.33301 2.05259 3.33301 4.5883V6.92188H0.833008V10.2552H3.33301V17.3385H6.66634V10.2552Z"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" aria-label="LinkedIn">
                                    <svg width="15" height="14" viewBox="0 0 17 16" fill="currentColor">
                                        <path d="M3.78357 2.16742C3.78326 2.84601 3.37157 3.45666 2.74262 3.71142C2.11367 3.96619 1.39306 3.81419 0.920587 3.32711C0.448112 2.84001 0.318129 2.11511 0.59192 1.49421C0.86572 0.873305 1.48862 0.480397 2.1669 0.500755C3.0678 0.527797 3.78398 1.26612 3.78357 2.16742ZM3.83357 5.06742H0.500237V15.5007H3.83357V5.06742ZM9.10025 5.06742H5.78357V15.5007H9.06692V10.0257C9.06692 6.97573 13.0419 6.6924 13.0419 10.0257V15.5007H16.3336V8.8924C16.3336 3.75075 10.4503 3.94242 9.06692 6.4674L9.10025 5.06742Z"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://x.com/" aria-label="X / Twitter">
                                    <svg width="16" height="13" viewBox="0 0 18 14" fill="currentColor">
                                        <path d="M17.5104 1.71289C16.8743 1.9943 16.1996 2.17914 15.5088 2.26127C16.2366 1.82561 16.7812 1.14026 17.0411 0.332886C16.3573 0.739186 15.6088 1.02515 14.8282 1.17835C14.1693 0.475394 13.2483 0.0770356 12.2848 0.0781272C10.3605 0.0781272 8.79975 1.63835 8.79975 3.56354C8.79975 3.83666 8.83109 4.10153 8.88967 4.35709C5.99206 4.21121 3.42506 2.82455 1.70565 0.715686C1.39608 1.24757 1.23338 1.85216 1.2342 2.46757C1.2342 3.67667 1.84967 4.74388 2.78458 5.36868C2.23115 5.35118 1.6899 5.20171 1.20599 4.93262V4.97574C1.20545 6.66484 2.40683 8.07384 4.00166 8.39376C3.70234 8.47476 3.3936 8.51568 3.08352 8.51543C2.85831 8.51543 2.63976 8.49468 2.42733 8.45393C2.8711 9.83826 4.15739 10.8461 5.683 10.8738C4.44845 11.8427 2.92391 12.3683 1.35453 12.3661C1.07677 12.3663 0.799246 12.3499 0.523438 12.3171C2.1167 13.3413 3.97127 13.8849 5.86535 13.8829C12.2763 13.8829 15.7817 8.57243 15.7817 3.9671C15.7817 3.81643 15.778 3.66523 15.7713 3.51615C16.4536 3.02322 17.0425 2.41257 17.5104 1.71289Z"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" aria-label="Instagram">
                                    <svg width="16" height="16" viewBox="0 0 18 18" fill="currentColor">
                                        <path d="M9.85724 0.671875C10.7951 0.673425 11.2703 0.678392 11.681 0.690617L11.8427 0.6959C12.0296 0.702542 12.2139 0.710875 12.4362 0.721292C13.3229 0.762267 13.9278 0.902542 14.4591 1.10879C15.0083 1.3206 15.4722 1.60671 15.9354 2.06991C16.3979 2.5331 16.6841 2.99837 16.8966 3.54629C17.1021 4.07685 17.2424 4.68241 17.2841 5.56921C17.294 5.79143 17.302 5.97577 17.3086 6.16263L17.3138 6.32437C17.326 6.73499 17.3316 7.21032 17.3333 8.14818L17.334 8.76952V9.23968L17.3335 9.8611C17.3319 10.7989 17.327 11.2743 17.3147 11.6848L17.3094 11.8466C17.3028 12.0335 17.2945 12.2178 17.2841 12.44C17.2431 13.3268 17.1021 13.9317 16.8966 14.4629C16.6847 15.0123 16.3979 15.4762 15.9354 15.9393C15.4722 16.4018 15.0062 16.6879 14.4591 16.9004C13.9278 17.106 13.3229 17.2463 12.4362 17.2879C12.2139 17.2978 12.0296 17.3059 11.8427 17.3124L11.681 17.3177C11.2703 17.3299 10.7951 17.3354 9.85724 17.3373L9.23582 17.3379H8.76565L8.14424 17.3373C7.2064 17.3358 6.73109 17.3309 6.32046 17.3186L6.15873 17.3134C5.97185 17.3067 5.78752 17.2983 5.5653 17.2879C4.67849 17.247 4.07433 17.106 3.54239 16.9004C2.99377 16.6887 2.52919 16.4018 2.06599 15.9393C1.6028 15.4762 1.31739 15.0102 1.10489 14.4629C0.898636 13.9317 0.759052 13.3268 0.717386 12.44C0.707486 12.2178 0.69941 12.0335 0.692869 11.8466L0.687627 11.6848C0.675435 11.2743 0.669877 10.7989 0.668077 9.8611L0.667969 8.14818C0.669519 7.21032 0.674477 6.73499 0.686702 6.32437L0.691994 6.16263C0.698635 5.97577 0.706969 5.79143 0.717386 5.56921C0.758352 4.68171 0.898636 4.07754 1.10489 3.54629C1.31669 2.99768 1.6028 2.5331 2.06599 2.06991C2.52919 1.60671 2.99447 1.32129 3.54239 1.10879C4.07364 0.902542 4.6778 0.762958 5.5653 0.721292C5.78752 0.7114 5.97185 0.703325 6.15873 0.696783L6.32046 0.691542C6.73109 0.679342 7.2064 0.673783 8.14424 0.671983L9.85724 0.671875ZM9.00074 4.83796C6.6983 4.83796 4.83405 6.70423 4.83405 9.0046C4.83405 11.307 6.70033 13.1713 9.00074 13.1713C11.3032 13.1713 13.1674 11.305 13.1674 9.0046C13.1674 6.70221 11.3011 4.83796 9.00074 4.83796ZM9.00074 6.50462C10.3815 6.50462 11.5007 7.62352 11.5007 9.0046C11.5007 10.3853 10.3818 11.5046 9.00074 11.5046C7.61999 11.5046 6.50072 10.3858 6.50072 9.0046C6.50072 7.62385 7.61957 6.50462 9.00074 6.50462ZM13.3757 3.58796C12.8013 3.58796 12.3341 4.05455 12.3341 4.62892C12.3341 5.20329 12.8007 5.6706 13.3757 5.6706C13.9501 5.6706 14.4174 5.20402 14.4174 4.62892C14.4174 4.05455 13.9493 3.58724 13.3757 3.58796Z"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>

            {{-- ── Sidebar ── --}}
            <aside class="pd-sidebar drawer-blog-sidebar">
                {{-- Mobile close --}}
                <div class="drawer-headings d-lg-none" style="display:flex;align-items:center;justify-content:space-between;margin-bottom:20px;">
                    <span style="font-family:var(--font-body);font-weight:700;font-size:15px;color:var(--ink);">Filter</span>
                    <drawer-opener data-drawer=".drawer-blog-sidebar">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 6L6 18M6 6l12 12"/>
                        </svg>
                    </drawer-opener>
                </div>

                <div class="pd-sidebar-card" data-aos="fade-up">
                    <p class="pd-sidebar-title">Recent Research</p>
                    <ul class="pd-recent-list">
                        @foreach ($latestItems as $item)
                        <li class="pd-recent-item">
                            <div class="pd-recent-date">October 12, 2025</div>
                            <a href="{{ route('research.show', [$item->category->slug, $item->slug]) }}"
                               class="pd-recent-link">
                                {{ $item->title }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </aside>

        </div>{{-- /.pd-layout --}}
    </div>{{-- /.container --}}

    {{-- ── Latest News section ─────────────────────────────── --}}
    <section class="pd-news-section">
        <div class="container">
            <div class="pd-news-header" data-aos="fade-up">
                <div>
                    <div class="pd-news-eyebrow">
                        <span class="pd-news-eyebrow-dot"></span>
                        {{ $program->title }}
                    </div>
                    <h2 class="pd-news-heading">Latest News From {{ $program->title }}</h2>
                </div>
                <a href="{{ route('news.index') }}" class="pd-discover-btn">
                    Discover More
                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none">
                        <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"/>
                    </svg>
                </a>
            </div>

            <div class="row pd-news-grid">
                @foreach($posts as $new)
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                    <div class="pd-news-card">
                        <div class="pd-news-card-image">
                            <img src="{{ asset('image/posts') }}/{{ $new->featured_image }}"
                                 alt="{{ $new->title }}" width="800" height="500" loading="lazy">
                            <span class="pd-news-cat-badge">{{ $new->category->name }}</span>
                        </div>
                        <div class="pd-news-card-body">
                            <div class="pd-news-meta">
                                <div class="pd-news-meta-item">
                                    <svg width="12" height="12" viewBox="0 0 16 18" fill="currentColor">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.0007 0.046875C6.95088 0.046875 5.94406 0.463912 5.20173 1.20624C4.4594 1.94858 4.04236 2.95539 4.04236 4.00521C4.04236 5.05502 4.4594 6.06184 5.20173 6.80417C5.94406 7.5465 6.95088 7.96354 8.0007 7.96354C9.05051 7.96354 10.0573 7.5465 10.7997 6.80417C11.542 6.06184 11.959 5.05502 11.959 4.00521C11.959 2.95539 11.542 1.94858 10.7997 1.20624C10.0573 0.463912 9.05051 0.046875 8.0007 0.046875ZM5.29236 4.00521C5.29236 3.28691 5.57771 2.59804 6.08562 2.09013C6.59353 1.58222 7.2824 1.29688 8.0007 1.29688C8.71899 1.29688 9.40787 1.58222 9.91578 2.09013C10.4237 2.59804 10.709 3.28691 10.709 4.00521C10.709 4.7235 10.4237 5.41238 9.91578 5.92029C9.40787 6.4282 8.71899 6.71354 8.0007 6.71354C7.2824 6.71354 6.59353 6.4282 6.08562 5.92029C5.57771 5.41238 5.29236 4.7235 5.29236 4.00521ZM8.0007 9.21354C6.0732 9.21354 4.29653 9.65187 2.9807 10.3919C1.68403 11.1219 0.709031 12.2269 0.709031 13.5885V13.6735C0.708198 14.6419 0.707364 15.8569 1.7732 16.7252C2.29736 17.1519 3.03153 17.456 4.0232 17.656C5.01653 17.8577 6.31236 17.9635 8.0007 17.9635C9.68903 17.9635 10.984 17.8577 11.979 17.656C12.9707 17.456 13.704 17.1519 14.229 16.7252C15.2949 15.8569 15.2932 14.6419 15.2924 13.6735V13.5885C15.2924 12.2269 14.3174 11.1219 13.0215 10.3919C11.7049 9.65187 9.92903 9.21354 8.0007 9.21354Z"/>
                                    </svg>
                                    {{ $new->author->name }}
                                </div>
                                <div class="pd-news-meta-item">
                                    <svg width="12" height="12" viewBox="0 0 18 18" fill="currentColor">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.83268 0.453125C4.99844 0.453125 5.15741 0.518973 5.27462 0.636183C5.39183 0.753394 5.45768 0.912365 5.45768 1.07812V1.71396C6.00935 1.70312 6.61685 1.70312 7.28518 1.70312H10.7127C11.3818 1.70312 11.9893 1.70312 12.541 1.71396V1.07812C12.541 0.912365 12.6069 0.753394 12.7241 0.636183C12.8413 0.518973 13.0003 0.453125 13.166 0.453125C13.3318 0.453125 13.4907 0.518973 13.608 0.636183C13.7252 0.753394 13.791 0.912365 13.791 1.07812V1.76729C14.0077 1.78396 14.2127 1.80479 14.4068 1.83063C15.3835 1.96229 16.1743 2.23896 16.7985 2.86229C17.4218 3.48646 17.6985 4.27729 17.8302 5.25396C17.9577 6.20396 17.9577 7.41646 17.9577 8.94812V10.7081C17.9577 12.2398 17.9577 13.4531 17.8302 14.4023C17.6985 15.379 17.4218 16.1698 16.7985 16.794C16.1743 17.4173 15.3835 17.694 14.4068 17.8256C13.4568 17.9531 12.2443 17.9531 10.7127 17.9531H7.28602C5.75435 17.9531 4.54102 17.9531 3.59185 17.8256C2.61518 17.694 1.82435 17.4173 1.20018 16.794C0.576849 16.1698 0.300182 15.379 0.168516 14.4023C0.0410156 13.4523 0.0410156 12.2398 0.0410156 10.7081V8.94812C0.0410156 7.41646 0.0410156 6.20312 0.168516 5.25396C0.300182 4.27729 0.576849 3.48646 1.20018 2.86229C1.82435 2.23896 2.61518 1.96229 3.59185 1.83063C3.78602 1.80479 3.99185 1.78396 4.20768 1.76729V1.07812C4.20768 0.912365 4.27353 0.753394 4.39074 0.636183C4.50795 0.518973 4.66692 0.453125 4.83268 0.453125Z"/>
                                    </svg>
                                    {{ $new->created_at->format('M d, Y') }}
                                </div>
                            </div>
                            <h3 class="pd-news-card-title">
                                <a href="{{ route('news.detail', $new->id) }}">{{ $new->title }}</a>
                            </h3>
                            <a href="{{ route('news.detail', $new->id) }}" class="pd-read-more">
                                Read Article
                                <svg width="12" height="12" viewBox="0 0 20 20" fill="none">
                                    <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</div>
@endsection