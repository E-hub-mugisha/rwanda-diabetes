@extends('layouts.base')
@section('title', 'Latest Research')
@section('content')

<style>
    /* ─── Design Tokens ─────────────────────────────────────── */
    :root {
        --ink:        #0a0f1e;
        --ink-soft:   #1c2540;
        --ink-muted:  #374166;
        --surface:    #f7f8fc;
        --surface-2:  #eef0f7;
        --accent:     #2563eb;
        --accent-2:   #0ea5e9;
        --gold:       #f59e0b;
        --text-body:  #4b5675;
        --text-light: #8892b0;
        --white:      #ffffff;
        --radius-lg:  16px;
        --radius-xl:  24px;
        --shadow-sm:  0 2px 8px rgba(10,15,30,.06);
        --shadow-md:  0 8px 32px rgba(10,15,30,.10);
        --shadow-lg:  0 20px 60px rgba(10,15,30,.14);
        --transition: 0.32s cubic-bezier(0.22,1,0.36,1);
    }

    /* ─── Reset helpers ─────────────────────────────────────── */
    .research-page * { box-sizing: border-box; }
    .research-page { font-family: 'DM Sans', 'Helvetica Neue', sans-serif; }

    /* ─── Category Section ──────────────────────────────────── */
    .research-categories {
        padding: 120px 0 80px;
        background: var(--surface);
    }

    .research-categories .section-label {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--accent);
        background: rgba(37,99,235,.08);
        border: 1px solid rgba(37,99,235,.18);
        border-radius: 100px;
        padding: 6px 16px;
        margin-bottom: 24px;
    }

    .research-categories .section-label span.dot {
        width: 6px; height: 6px;
        border-radius: 50%;
        background: var(--accent);
        display: inline-block;
    }

    .research-categories .section-title {
        font-family: 'Cormorant Garamond', 'Georgia', serif;
        font-size: clamp(36px, 5vw, 58px);
        font-weight: 700;
        color: var(--ink);
        line-height: 1.1;
        letter-spacing: -.02em;
        margin-bottom: 56px;
        max-width: 640px;
    }

    /* Category Cards */
    .cat-card {
        background: var(--white);
        border: 1px solid rgba(10,15,30,.07);
        border-radius: var(--radius-xl);
        padding: 36px 32px 32px;
        height: 100%;
        display: flex;
        flex-direction: column;
        position: relative;
        overflow: hidden;
        transition: transform var(--transition), box-shadow var(--transition), border-color var(--transition);
    }

    .cat-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(37,99,235,.03) 0%, transparent 60%);
        opacity: 0;
        transition: opacity var(--transition);
    }

    .cat-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--shadow-lg);
        border-color: rgba(37,99,235,.20);
    }

    .cat-card:hover::before { opacity: 1; }

    .cat-card-number {
        font-family: 'Cormorant Garamond', serif;
        font-size: 72px;
        font-weight: 700;
        line-height: 1;
        color: var(--surface-2);
        position: absolute;
        top: 20px;
        right: 24px;
        letter-spacing: -.04em;
        transition: color var(--transition);
        user-select: none;
    }

    .cat-card:hover .cat-card-number { color: rgba(37,99,235,.08); }

    .cat-card-icon {
        width: 52px; height: 52px;
        background: linear-gradient(135deg, rgba(37,99,235,.10), rgba(14,165,233,.08));
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        color: var(--accent);
        flex-shrink: 0;
        transition: background var(--transition);
    }

    .cat-card:hover .cat-card-icon {
        background: linear-gradient(135deg, rgba(37,99,235,.18), rgba(14,165,233,.14));
    }

    .cat-card-icon svg { width: 24px; height: 24px; }

    .cat-card-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 24px;
        font-weight: 700;
        color: var(--ink);
        margin: 0 0 10px;
        letter-spacing: -.01em;
        line-height: 1.25;
    }

    .cat-card-desc {
        font-size: 14px;
        color: var(--text-body);
        line-height: 1.65;
        margin-bottom: 24px;
    }

    .cat-items-list {
        list-style: none;
        padding: 0;
        margin: 0 0 28px;
        flex-grow: 1;
        border-top: 1px solid var(--surface-2);
        padding-top: 20px;
    }

    .cat-items-list li {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 13.5px;
        color: var(--text-body);
        padding: 8px 0;
        border-bottom: 1px solid var(--surface-2);
        line-height: 1.4;
        font-weight: 500;
    }

    .cat-items-list li:last-child { border-bottom: none; }

    .cat-items-list .item-dot {
        width: 6px; height: 6px;
        border-radius: 50%;
        background: var(--accent);
        flex-shrink: 0;
        margin-top: 5px;
    }

    .cat-card-cta {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--ink);
        color: var(--white);
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .03em;
        padding: 11px 22px;
        border-radius: 100px;
        text-decoration: none;
        transition: background var(--transition), gap var(--transition);
        align-self: flex-start;
        white-space: nowrap;
    }

    .cat-card-cta:hover {
        background: var(--accent);
        color: var(--white);
        gap: 12px;
        text-decoration: none;
    }

    .cat-card-cta svg { width: 12px; height: 12px; }

    /* ─── Latest Research Section ───────────────────────────── */
    .latest-research {
        padding: 100px 0;
        background: var(--ink);
        position: relative;
        overflow: hidden;
    }

    .latest-research::before {
        content: '';
        position: absolute;
        top: -200px; right: -200px;
        width: 600px; height: 600px;
        background: radial-gradient(circle, rgba(37,99,235,.12) 0%, transparent 70%);
        pointer-events: none;
    }

    .latest-research::after {
        content: '';
        position: absolute;
        bottom: -150px; left: -150px;
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(14,165,233,.08) 0%, transparent 70%);
        pointer-events: none;
    }

    .latest-research .section-label {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--gold);
        background: rgba(245,158,11,.10);
        border: 1px solid rgba(245,158,11,.25);
        border-radius: 100px;
        padding: 6px 16px;
        margin-bottom: 20px;
    }

    .latest-research .section-label .dot {
        width: 6px; height: 6px;
        border-radius: 50%;
        background: var(--gold);
        display: inline-block;
    }

    .latest-research .section-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: clamp(32px, 4.5vw, 52px);
        font-weight: 700;
        color: var(--white);
        line-height: 1.1;
        letter-spacing: -.02em;
        margin-bottom: 60px;
        max-width: 560px;
    }

    /* Research Item Cards */
    .research-item-card {
        background: rgba(255,255,255,.04);
        border: 1px solid rgba(255,255,255,.08);
        border-radius: var(--radius-lg);
        padding: 32px 28px;
        height: 100%;
        display: flex;
        flex-direction: column;
        position: relative;
        overflow: hidden;
        transition: background var(--transition), border-color var(--transition), transform var(--transition);
        backdrop-filter: blur(8px);
    }

    .research-item-card:hover {
        background: rgba(255,255,255,.08);
        border-color: rgba(37,99,235,.40);
        transform: translateY(-4px);
    }

    .research-item-card .item-category {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: .10em;
        text-transform: uppercase;
        color: var(--accent-2);
        margin-bottom: 16px;
    }

    .research-item-card .item-category::before {
        content: '';
        width: 18px; height: 2px;
        background: var(--accent-2);
        border-radius: 2px;
    }

    .research-item-card .item-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 22px;
        font-weight: 700;
        color: var(--white);
        line-height: 1.35;
        letter-spacing: -.01em;
        margin: 0 0 auto;
        padding-bottom: 24px;
    }

    .research-item-card .item-read-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 12.5px;
        font-weight: 600;
        letter-spacing: .05em;
        color: rgba(255,255,255,.50);
        text-decoration: none;
        border-top: 1px solid rgba(255,255,255,.08);
        padding-top: 20px;
        transition: color var(--transition), gap var(--transition);
        text-transform: uppercase;
    }

    .research-item-card:hover .item-read-link {
        color: var(--white);
        gap: 14px;
    }

    .research-item-card .item-read-link svg {
        width: 14px; height: 14px;
        transition: transform var(--transition);
    }

    .research-item-card:hover .item-read-link svg {
        transform: translate(3px, -3px);
    }

    /* Divider glyph */
    .section-glyph {
        display: inline-block;
        width: 8px; height: 8px;
        border-radius: 50%;
        background: currentColor;
        vertical-align: middle;
    }

    /* Responsive tweaks */
    @media (max-width: 768px) {
        .research-categories { padding: 80px 0 60px; }
        .latest-research { padding: 80px 0; }
        .cat-card { padding: 28px 24px 24px; }
        .cat-card-number { font-size: 52px; }
    }
</style>

<div class="research-page">

    {{-- ─── Research Categories ─────────────────────────────────── --}}
    <section class="research-categories">
        <div class="container">

            <div data-aos="fade-up">
                <div class="section-label">
                    <span class="dot"></span>
                    Our Research
                </div>
                <h2 class="section-title">Our Research&nbsp;Categories</h2>
            </div>

            <div class="row g-4">
                @foreach ($categories as $index => $cat)
                <div class="col-xl-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="{{ $index * 80 }}">
                    <div class="cat-card">

                        <span class="cat-card-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>

                        {{-- Icon --}}
                        <div class="cat-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>

                        <h3 class="cat-card-title">{{ $cat->name }}</h3>
                        <p class="cat-card-desc">
                            Tailored solutions to accelerate discovery — from research planning through to publication support.
                        </p>

                        <ul class="cat-items-list">
                            @foreach ($cat->items as $item)
                            <li>
                                <span class="item-dot"></span>
                                {{ $item->title }}
                            </li>
                            @endforeach
                        </ul>

                        <a href="{{ route('research.category', $cat->slug) }}" class="cat-card-cta">
                            View all ({{ $cat->items()->count() }})
                            <svg viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.167.833A.833.833 0 013 0h6.667c.46 0 .833.373.833.833V7.5a.833.833 0 01-1.667 0V2.845L1.923 9.756a.833.833 0 01-1.169-1.179L7.655 1.667H3A.833.833 0 012.167.833z" fill="currentColor"/>
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ─── Latest Research ─────────────────────────────────────── --}}
    <section class="latest-research">
        <div class="container" style="position:relative;z-index:1;">

            <div data-aos="fade-up">
                <div class="section-label">
                    <span class="dot"></span>
                    Publications
                </div>
                <h2 class="section-title">Latest Research &amp;&nbsp;Publications</h2>
            </div>

            <div class="row g-4">
                @foreach ($latestItems as $index => $item)
                <div class="col-12 col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="{{ $index * 70 }}">
                    <div class="research-item-card">
                        <div class="item-category">{{ $item->category->name }}</div>
                        <h3 class="item-title">{{ $item->title }}</h3>
                        <a href="{{ route('research.show', [$item->category->slug, $item->slug]) }}" class="item-read-link">
                            Read Publication
                            <svg viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.167.833A.833.833 0 013 0h6.667c.46 0 .833.373.833.833V7.5a.833.833 0 01-1.667 0V2.845L1.923 9.756a.833.833 0 01-1.169-1.179L7.655 1.667H3A.833.833 0 012.167.833z" fill="currentColor"/>
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</div>

@endsection