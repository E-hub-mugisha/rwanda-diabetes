@extends('layouts.base')
@section('title', 'Our Team')
@section('content')

<style>
    /* ── Design tokens ──────────────────────────────────────────────── */
    :root {
        --team-bg:          #f7f6f3;
        --team-surface:     #ffffff;
        --team-ink:         #111111;
        --team-muted:       #6b6b6b;
        --team-accent:      #c8873a;       /* gold – matches Terra palette  */
        --team-accent-dark: #a36825;
        --team-border:      rgba(0,0,0,.08);
        --team-radius:      16px;
        --team-shadow:      0 2px 12px rgba(0,0,0,.07), 0 24px 48px rgba(0,0,0,.05);
        --team-shadow-h:    0 8px 32px rgba(0,0,0,.13), 0 2px 8px rgba(0,0,0,.06);
        --ease-out-expo:    cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* ── Google Fonts ───────────────────────────────────────────────── */
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap');

    /* ── Page shell ─────────────────────────────────────────────────── */
    .team-page {
        background: var(--team-bg);
        padding: 72px 0 100px;
        font-family: 'DM Sans', sans-serif;
    }

    /* ── Hero headline band ─────────────────────────────────────────── */
    .team-hero {
        margin-bottom: 64px;
    }

    .team-hero__eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-family: 'DM Sans', sans-serif;
        font-size: 11px;
        font-weight: 500;
        letter-spacing: .16em;
        text-transform: uppercase;
        color: var(--team-accent);
        margin-bottom: 16px;
    }

    .team-hero__eyebrow::before {
        content: '';
        display: block;
        width: 28px;
        height: 1.5px;
        background: var(--team-accent);
    }

    .team-hero__title {
        font-family: 'Cormorant Garamond', serif;
        font-size: clamp(40px, 5vw, 64px);
        font-weight: 300;
        line-height: 1.08;
        color: var(--team-ink);
        margin: 0 0 20px;
        letter-spacing: -.02em;
    }

    .team-hero__title em {
        font-style: italic;
        color: var(--team-accent);
    }

    .team-hero__sub {
        font-size: 16px;
        font-weight: 300;
        line-height: 1.7;
        color: var(--team-muted);
        max-width: 480px;
        margin: 0;
    }

    /* ── Section headings ────────────────────────────────────────────── */
    .team-section {
        margin-bottom: 72px;
    }

    .team-section-header {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 36px;
    }

    .team-section-header__label {
        font-family: 'Cormorant Garamond', serif;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .22em;
        text-transform: uppercase;
        color: var(--team-ink);
        white-space: nowrap;
    }

    .team-section-header__line {
        flex: 1;
        height: 1px;
        background: linear-gradient(to right, var(--team-border), transparent);
    }

    .team-section-header__count {
        font-family: 'DM Sans', sans-serif;
        font-size: 11px;
        font-weight: 500;
        color: var(--team-muted);
        letter-spacing: .06em;
    }

    /* ── Card ────────────────────────────────────────────────────────── */
    .team-card-wrap {
        padding: 8px;
    }

    .team-card {
        position: relative;
        border-radius: var(--team-radius);
        overflow: hidden;
        background: var(--team-surface);
        box-shadow: var(--team-shadow);
        transition: box-shadow .45s var(--ease-out-expo),
                    transform .45s var(--ease-out-expo);
        cursor: pointer;
    }

    .team-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--team-shadow-h);
    }

    /* photo */
    .team-card__img-wrap {
        position: relative;
        aspect-ratio: 4 / 5;
        overflow: hidden;
        background: #e5e3de;
    }

    .team-card__img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform .65s var(--ease-out-expo);
    }

    .team-card:hover .team-card__img-wrap img {
        transform: scale(1.04);
    }

    /* gradient veil */
    .team-card__veil {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to bottom,
            transparent 40%,
            rgba(10,8,5,.55) 75%,
            rgba(10,8,5,.80) 100%
        );
        transition: opacity .4s ease;
        opacity: .85;
    }

    .team-card:hover .team-card__veil {
        opacity: 1;
    }

    /* text overlay */
    .team-card__overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 24px 22px 20px;
    }

    .team-card__name {
        font-family: 'Cormorant Garamond', serif;
        font-size: 22px;
        font-weight: 600;
        line-height: 1.2;
        color: #ffffff;
        text-decoration: none;
        display: block;
        margin-bottom: 4px;
        transition: color .2s ease;
    }

    .team-card__name:hover {
        color: var(--team-accent);
    }

    .team-card__position {
        font-size: 12px;
        font-weight: 400;
        letter-spacing: .07em;
        color: rgba(255,255,255,.68);
        text-transform: uppercase;
        margin: 0 0 14px;
    }

    /* socials row */
    .team-card__socials {
        display: flex;
        gap: 8px;
        transform: translateY(8px);
        opacity: 0;
        transition: opacity .3s ease, transform .3s var(--ease-out-expo);
    }

    .team-card:hover .team-card__socials {
        opacity: 1;
        transform: translateY(0);
    }

    .team-card__social-btn {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 5px 11px;
        border-radius: 40px;
        background: rgba(255,255,255,.12);
        border: 1px solid rgba(255,255,255,.22);
        color: #ffffff;
        font-size: 11px;
        font-weight: 500;
        letter-spacing: .04em;
        text-decoration: none;
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        transition: background .2s ease, border-color .2s ease, color .2s ease;
    }

    .team-card__social-btn:hover {
        background: var(--team-accent);
        border-color: var(--team-accent);
        color: #ffffff;
    }

    /* accent stripe on top of card */
    .team-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: var(--team-accent);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .4s var(--ease-out-expo);
        z-index: 2;
    }

    .team-card:hover::before {
        transform: scaleX(1);
    }

    /* ── Leadership badge ────────────────────────────────────────────── */
    .badge-leadership {
        position: absolute;
        top: 14px;
        right: 14px;
        padding: 4px 10px;
        border-radius: 40px;
        background: var(--team-accent);
        font-size: 10px;
        font-weight: 600;
        letter-spacing: .10em;
        text-transform: uppercase;
        color: #ffffff;
        z-index: 3;
    }

    /* ── Empty state ─────────────────────────────────────────────────── */
    .team-empty {
        text-align: center;
        padding: 48px;
        color: var(--team-muted);
        font-size: 15px;
    }

    /* ── Staggered entrance animations ──────────────────────────────── */
    .team-card-wrap {
        opacity: 0;
        animation: cardIn .6s var(--ease-out-expo) forwards;
    }

    @keyframes cardIn {
        from { opacity: 0; transform: translateY(24px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* Stagger each card */
    .team-card-wrap:nth-child(1) { animation-delay: .05s; }
    .team-card-wrap:nth-child(2) { animation-delay: .12s; }
    .team-card-wrap:nth-child(3) { animation-delay: .19s; }
    .team-card-wrap:nth-child(4) { animation-delay: .26s; }
    .team-card-wrap:nth-child(5) { animation-delay: .33s; }
    .team-card-wrap:nth-child(6) { animation-delay: .40s; }
    .team-card-wrap:nth-child(7) { animation-delay: .47s; }
    .team-card-wrap:nth-child(8) { animation-delay: .54s; }

    /* ── Responsive tweaks ───────────────────────────────────────────── */
    @media (max-width: 575px) {
        .team-hero__title { font-size: 36px; }
        .team-card__name  { font-size: 20px; }
        .team-card__socials { opacity: 1; transform: none; }
    }
</style>

<section class="team-page">
    <div class="container">

        {{-- ── Hero ─────────────────────────────────────────────────── --}}
        <div class="team-hero" data-aos="fade-up">
            <span class="team-hero__eyebrow">People</span>
            <h1 class="team-hero__title">Meet the <em>minds</em><br>behind our mission</h1>
            <p class="team-hero__sub">
                Dedicated individuals who drive our mission forward with passion,
                expertise, and an unwavering commitment to excellence.
            </p>
        </div>

        {{-- ── Leadership ───────────────────────────────────────────── --}}
        @if($leadership->count())
        <div class="team-section">
            <div class="team-section-header">
                <span class="team-section-header__label">Leadership</span>
                <div class="team-section-header__line"></div>
                <span class="team-section-header__count">{{ $leadership->count() }} {{ Str::plural('member', $leadership->count()) }}</span>
            </div>

            <div class="row g-0">
                @foreach($leadership as $team)
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 team-card-wrap">
                    <div class="team-card">

                        {{-- badge --}}
                        <span class="badge-leadership">Leadership</span>

                        {{-- photo --}}
                        <div class="team-card__img-wrap">
                            <img src="{{ asset('image/teams') }}/{{ $team->photo }}"
                                 alt="{{ $team->name }}"
                                 width="500" height="625" loading="lazy">
                            <div class="team-card__veil"></div>
                        </div>

                        {{-- text + socials --}}
                        <div class="team-card__overlay">
                            <a href="{{ route('team.show', $team->slug) }}" class="team-card__name">
                                {{ $team->name }}
                            </a>
                            <p class="team-card__position">{{ $team->position }}</p>

                            <div class="team-card__socials">
                                @if($team->linkedin)
                                <a href="{{ $team->linkedin }}" target="_blank" rel="noopener" class="team-card__social-btn">
                                    <svg width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
                                    LinkedIn
                                </a>
                                @endif
                                @if($team->twitter)
                                <a href="{{ $team->twitter }}" target="_blank" rel="noopener" class="team-card__social-btn">
                                    <svg width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.26 5.632 5.905-5.632zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                                    X
                                </a>
                                @endif
                                @if($team->instagram)
                                <a href="{{ $team->instagram }}" target="_blank" rel="noopener" class="team-card__social-btn">
                                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="5"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
                                    IG
                                </a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        {{-- ── Board of Directors ────────────────────────────────────── --}}
        @if($board->count())
        <div class="team-section">
            <div class="team-section-header">
                <span class="team-section-header__label">Board of Directors</span>
                <div class="team-section-header__line"></div>
                <span class="team-section-header__count">{{ $board->count() }} {{ Str::plural('member', $board->count()) }}</span>
            </div>

            <div class="row g-0">
                @foreach($board as $team)
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 team-card-wrap">
                    <div class="team-card">

                        <div class="team-card__img-wrap">
                            <img src="{{ asset('image/teams') }}/{{ $team->photo }}"
                                 alt="{{ $team->name }}"
                                 width="500" height="625" loading="lazy">
                            <div class="team-card__veil"></div>
                        </div>

                        <div class="team-card__overlay">
                            <a href="{{ route('team.show', $team->slug) }}" class="team-card__name">
                                {{ $team->name }}
                            </a>
                            <p class="team-card__position">{{ $team->position }}</p>

                            <div class="team-card__socials">
                                @if($team->linkedin)
                                <a href="{{ $team->linkedin }}" target="_blank" rel="noopener" class="team-card__social-btn">
                                    <svg width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
                                    LinkedIn
                                </a>
                                @endif
                                @if($team->twitter)
                                <a href="{{ $team->twitter }}" target="_blank" rel="noopener" class="team-card__social-btn">
                                    <svg width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.26 5.632 5.905-5.632zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                                    X
                                </a>
                                @endif
                                @if($team->instagram)
                                <a href="{{ $team->instagram }}" target="_blank" rel="noopener" class="team-card__social-btn">
                                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="5"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
                                    IG
                                </a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        {{-- ── Other Team Members ────────────────────────────────────── --}}
        @if($others->count())
        <div class="team-section">
            <div class="team-section-header">
                <span class="team-section-header__label">Team Members</span>
                <div class="team-section-header__line"></div>
                <span class="team-section-header__count">{{ $others->count() }} {{ Str::plural('member', $others->count()) }}</span>
            </div>

            <div class="row g-0">
                @foreach($others as $team)
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 team-card-wrap">
                    <div class="team-card">

                        <div class="team-card__img-wrap">
                            <img src="{{ asset('image/teams') }}/{{ $team->photo }}"
                                 alt="{{ $team->name }}"
                                 width="500" height="625" loading="lazy">
                            <div class="team-card__veil"></div>
                        </div>

                        <div class="team-card__overlay">
                            <a href="{{ route('team.show', $team->slug) }}" class="team-card__name">
                                {{ $team->name }}
                            </a>
                            <p class="team-card__position">{{ $team->position }}</p>

                            <div class="team-card__socials">
                                @if($team->linkedin)
                                <a href="{{ $team->linkedin }}" target="_blank" rel="noopener" class="team-card__social-btn">
                                    <svg width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
                                    LinkedIn
                                </a>
                                @endif
                                @if($team->twitter)
                                <a href="{{ $team->twitter }}" target="_blank" rel="noopener" class="team-card__social-btn">
                                    <svg width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.26 5.632 5.905-5.632zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                                    X
                                </a>
                                @endif
                                @if($team->instagram)
                                <a href="{{ $team->instagram }}" target="_blank" rel="noopener" class="team-card__social-btn">
                                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="5"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
                                    IG
                                </a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>

@endsection