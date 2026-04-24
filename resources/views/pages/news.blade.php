@extends('layouts.base')
@section('title', 'Latest News & Updates — Rwanda Diabetes Organization')
@section('content')

<style>
    /* ── Design tokens ──────────────────────────────────────────────── */
    :root {
        --nb-bg:          #f5f7fa;
        --nb-surface:     #ffffff;
        --nb-ink:         #0d1b2a;
        --nb-muted:       #5a6a7a;
        --nb-faint:       #e4eaf1;
        --nb-accent:      #1a6eb5;
        --nb-accent-2:    #e8f1fb;
        --nb-green:       #14875a;
        --nb-radius:      18px;
        --nb-radius-sm:   10px;
        --nb-shadow:      0 2px 14px rgba(13,27,42,.07), 0 1px 3px rgba(13,27,42,.04);
        --nb-shadow-h:    0 10px 36px rgba(13,27,42,.12), 0 2px 8px rgba(13,27,42,.06);
        --ease-expo:      cubic-bezier(0.16, 1, 0.3, 1);
    }

    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&display=swap');

    .nb-page { font-family: 'DM Sans', sans-serif; background: var(--nb-bg); }

    /* ── Shared ─────────────────────────────────────────────────────── */
    .nb-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: .18em;
        text-transform: uppercase;
        color: var(--nb-accent);
        margin-bottom: 14px;
    }
    .nb-eyebrow::before {
        content: '';
        display: block;
        width: 24px; height: 2px;
        background: var(--nb-accent);
        border-radius: 2px;
    }

    .nb-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 11px 22px;
        border-radius: 40px;
        font-size: 14px;
        font-weight: 500;
        font-family: 'DM Sans', sans-serif;
        text-decoration: none;
        cursor: pointer;
        border: 1.5px solid transparent;
        transition: transform .25s var(--ease-expo), box-shadow .25s ease, background .2s, color .2s, border-color .2s;
    }
    .nb-btn:hover { transform: translateY(-2px); }
    .nb-btn--primary {
        background: var(--nb-accent);
        color: #fff;
        box-shadow: 0 4px 16px rgba(26,110,181,.28);
    }
    .nb-btn--primary:hover { background: #155c9e; box-shadow: 0 8px 24px rgba(26,110,181,.38); color: #fff; }
    .nb-btn--outline { background: transparent; border-color: var(--nb-faint); color: var(--nb-ink); }
    .nb-btn--outline:hover { border-color: var(--nb-accent); color: var(--nb-accent); }

    /* ════════════════════════════════════════════════════════════════
       HERO BAND
    ════════════════════════════════════════════════════════════════ */
    .nb-hero {
        background: linear-gradient(135deg, #0d1b2a 0%, #1a3a5c 60%, #1a6eb5 100%);
        padding: 80px 0 68px;
        position: relative;
        overflow: hidden;
    }
    .nb-hero::before {
        content: '';
        position: absolute; inset: 0;
        background:
            radial-gradient(circle at 75% 35%, rgba(26,110,181,.45) 0%, transparent 52%),
            radial-gradient(circle at 15% 75%, rgba(20,135,90,.22) 0%, transparent 42%);
        pointer-events: none;
    }
    .nb-hero__inner {
        position: relative; z-index: 1;
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 32px;
        flex-wrap: wrap;
    }
    .nb-hero .nb-eyebrow { color: #93c5fd; }
    .nb-hero .nb-eyebrow::before { background: #93c5fd; }
    .nb-hero__title {
        font-family: 'Playfair Display', serif;
        font-size: clamp(30px, 4.5vw, 50px);
        font-weight: 700;
        color: #fff;
        margin: 0 0 12px;
        letter-spacing: -.02em;
        line-height: 1.1;
    }
    .nb-hero__title em { font-style: italic; color: #93c5fd; }
    .nb-hero__sub {
        font-size: 15px;
        color: rgba(255,255,255,.68);
        font-weight: 300;
        max-width: 500px;
        line-height: 1.7;
        margin: 0;
    }
    .nb-hero__btn-wrap { flex-shrink: 0; padding-bottom: 6px; }
    .nb-btn--ghost {
        background: rgba(255,255,255,.12);
        border-color: rgba(255,255,255,.28);
        color: #fff;
        backdrop-filter: blur(8px);
    }
    .nb-btn--ghost:hover { background: rgba(255,255,255,.22); color: #fff; }

    /* ════════════════════════════════════════════════════════════════
       GRID SECTION
    ════════════════════════════════════════════════════════════════ */
    .nb-grid-section { padding: 72px 0 88px; }

    /* result meta bar */
    .nb-meta-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 12px;
        margin-bottom: 36px;
        padding-bottom: 20px;
        border-bottom: 1px solid var(--nb-faint);
    }
    .nb-meta-bar__count {
        font-size: 13px;
        font-weight: 500;
        color: var(--nb-muted);
    }
    .nb-meta-bar__count strong { color: var(--nb-ink); }

    /* ── Cards grid ─────────────────────────────────────────────────── */
    .nb-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }
    @media (max-width: 1024px) { .nb-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 640px)  { .nb-grid { grid-template-columns: 1fr; } }

    /* ── Card ───────────────────────────────────────────────────────── */
    .nb-card {
        background: var(--nb-surface);
        border-radius: var(--nb-radius);
        border: 1.5px solid var(--nb-faint);
        box-shadow: var(--nb-shadow);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transition: transform .4s var(--ease-expo), box-shadow .4s var(--ease-expo), border-color .2s ease;
        opacity: 0;
        animation: nbCardIn .6s var(--ease-expo) forwards;
    }
    .nb-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--nb-shadow-h);
        border-color: rgba(26,110,181,.18);
    }

    @keyframes nbCardIn {
        from { opacity: 0; transform: translateY(22px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .nb-card:nth-child(1) { animation-delay: .04s; }
    .nb-card:nth-child(2) { animation-delay: .10s; }
    .nb-card:nth-child(3) { animation-delay: .16s; }
    .nb-card:nth-child(4) { animation-delay: .22s; }
    .nb-card:nth-child(5) { animation-delay: .28s; }
    .nb-card:nth-child(6) { animation-delay: .34s; }
    .nb-card:nth-child(7) { animation-delay: .40s; }
    .nb-card:nth-child(8) { animation-delay: .46s; }
    .nb-card:nth-child(9) { animation-delay: .52s; }

    /* photo */
    .nb-card__img {
        position: relative;
        aspect-ratio: 16 / 10;
        overflow: hidden;
        background: #dde3ea;
        flex-shrink: 0;
    }
    .nb-card__img img {
        width: 100%; height: 100%;
        object-fit: cover;
        display: block;
        transition: transform .6s var(--ease-expo);
    }
    .nb-card:hover .nb-card__img img { transform: scale(1.05); }

    /* category pill */
    .nb-card__cat {
        position: absolute;
        top: 14px; left: 14px;
        padding: 4px 12px;
        border-radius: 40px;
        background: var(--nb-accent);
        color: #fff;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: .08em;
        text-transform: uppercase;
        z-index: 2;
        box-shadow: 0 2px 8px rgba(26,110,181,.30);
    }

    /* read-more overlay button */
    .nb-card__read-btn {
        position: absolute;
        bottom: 14px; right: 14px;
        width: 40px; height: 40px;
        border-radius: 50%;
        background: var(--nb-surface);
        display: flex; align-items: center; justify-content: center;
        color: var(--nb-accent);
        box-shadow: 0 2px 12px rgba(13,27,42,.16);
        opacity: 0;
        transform: scale(.8);
        transition: opacity .3s ease, transform .3s var(--ease-expo);
        text-decoration: none;
    }
    .nb-card:hover .nb-card__read-btn {
        opacity: 1;
        transform: scale(1);
    }

    /* card body */
    .nb-card__body {
        padding: 22px 24px 24px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    /* meta row */
    .nb-card__meta {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 12px;
        flex-wrap: wrap;
    }
    .nb-card__meta-item {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        font-weight: 400;
        color: var(--nb-muted);
    }
    .nb-card__meta-item svg { flex-shrink: 0; opacity: .7; }

    /* title */
    .nb-card__title {
        font-family: 'Playfair Display', serif;
        font-size: 18px;
        font-weight: 700;
        line-height: 1.35;
        color: var(--nb-ink);
        margin: 0 0 16px;
        flex: 1;
        transition: color .2s ease;
        text-decoration: none;
        display: block;
    }
    .nb-card__title:hover { color: var(--nb-accent); }

    /* read more link */
    .nb-card__link {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 13px;
        font-weight: 600;
        color: var(--nb-accent);
        text-decoration: none;
        letter-spacing: .03em;
        margin-top: auto;
        transition: gap .2s var(--ease-expo), color .2s ease;
    }
    .nb-card__link:hover { gap: 10px; color: #155c9e; }
    .nb-card__link svg { transition: transform .2s var(--ease-expo); }
    .nb-card__link:hover svg { transform: translateX(3px); }

    /* divider between meta and link */
    .nb-card__divider {
        height: 1px;
        background: var(--nb-faint);
        margin: 16px 0;
    }

    /* ════════════════════════════════════════════════════════════════
       EMPTY STATE
    ════════════════════════════════════════════════════════════════ */
    .nb-empty {
        text-align: center;
        padding: 80px 24px;
        background: var(--nb-surface);
        border-radius: var(--nb-radius);
        border: 1.5px dashed var(--nb-faint);
    }
    .nb-empty__icon {
        width: 64px; height: 64px;
        border-radius: 16px;
        background: var(--nb-accent-2);
        display: flex; align-items: center; justify-content: center;
        color: var(--nb-accent);
        margin: 0 auto 16px;
    }
    .nb-empty__title {
        font-family: 'Playfair Display', serif;
        font-size: 22px;
        font-weight: 700;
        color: var(--nb-ink);
        margin-bottom: 8px;
    }
    .nb-empty__sub { font-size: 14px; color: var(--nb-muted); }

    /* ════════════════════════════════════════════════════════════════
       PAGINATION
    ════════════════════════════════════════════════════════════════ */
    .nb-pagination {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        margin-top: 56px;
        flex-wrap: wrap;
    }

    .nb-page-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px; height: 40px;
        border-radius: var(--nb-radius-sm);
        font-size: 14px;
        font-weight: 500;
        color: var(--nb-ink);
        text-decoration: none;
        border: 1.5px solid var(--nb-faint);
        background: var(--nb-surface);
        transition: border-color .2s ease, background .2s ease, color .2s ease, transform .2s var(--ease-expo);
        cursor: pointer;
    }
    .nb-page-btn:hover:not(.nb-page-btn--disabled) {
        border-color: var(--nb-accent);
        background: var(--nb-accent-2);
        color: var(--nb-accent);
        transform: translateY(-1px);
    }
    .nb-page-btn--active {
        background: var(--nb-accent);
        border-color: var(--nb-accent);
        color: #fff;
        box-shadow: 0 4px 12px rgba(26,110,181,.30);
    }
    .nb-page-btn--active:hover { background: var(--nb-accent); color: #fff; transform: none; }
    .nb-page-btn--disabled {
        opacity: .35;
        cursor: not-allowed;
        pointer-events: none;
    }
    .nb-page-btn--wide {
        width: auto;
        padding: 0 16px;
        gap: 6px;
        font-size: 13px;
    }
</style>

<div class="nb-page">

    {{-- ══════════════════════════════════════════
         HERO
    ══════════════════════════════════════════ --}}
    <section class="nb-hero">
        <div class="container nb-hero__inner">
            <div>
                <span class="nb-eyebrow">Newsroom</span>
                <h1 class="nb-hero__title">Latest <em>News</em> &amp; Updates</h1>
                <p class="nb-hero__sub">Stay informed with the latest activities, health alerts, events, and diabetes education from our organization.</p>
            </div>
            <div class="nb-hero__btn-wrap">
                <a href="services.html" class="nb-btn nb-btn--ghost">
                    Discover More
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════
         ARTICLES GRID
    ══════════════════════════════════════════ --}}
    <section class="nb-grid-section">
        <div class="container">

            {{-- meta bar --}}
            <div class="nb-meta-bar">
                <p class="nb-meta-bar__count">
                    Showing <strong>{{ $news->firstItem() }}–{{ $news->lastItem() }}</strong> of <strong>{{ $news->total() }}</strong> articles
                </p>
            </div>

            @if($news->count())
            <div class="nb-grid">
                @foreach($news as $new)
                <article class="nb-card">

                    {{-- Image --}}
                    <div class="nb-card__img">
                        <span class="nb-card__cat">{{ $new->category->name }}</span>
                        <img src="{{ asset('image/posts') }}/{{ $new->featured_image }}"
                             alt="{{ $new->title }}"
                             width="800" height="500"
                             loading="lazy">
                        <a href="{{ route('news.detail', $new->id) }}" class="nb-card__read-btn" aria-label="Read more">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>

                    {{-- Body --}}
                    <div class="nb-card__body">

                        {{-- meta --}}
                        <div class="nb-card__meta">
                            <span class="nb-card__meta-item">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                {{ $new->author->name }}
                            </span>
                            <span class="nb-card__meta-item">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                {{ $new->created_at->format('M d, Y') }}
                            </span>
                        </div>

                        {{-- title --}}
                        <a href="{{ route('news.detail', $new->id) }}" class="nb-card__title">
                            {{ $new->title }}
                        </a>

                        <div class="nb-card__divider"></div>

                        {{-- read more --}}
                        <a href="{{ route('news.detail', $new->id) }}" class="nb-card__link">
                            Read Article
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>

                    </div>
                </article>
                @endforeach
            </div>

            @else
            <div class="nb-empty">
                <div class="nb-empty__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                </div>
                <h2 class="nb-empty__title">No articles yet</h2>
                <p class="nb-empty__sub">Check back soon — new updates are published regularly.</p>
            </div>
            @endif

            {{-- ═══ Pagination ══════════════════════════════════════ --}}
            @if($news->hasPages())
            <nav class="nb-pagination" aria-label="News pagination">

                {{-- Previous --}}
                @if($news->onFirstPage())
                <span class="nb-page-btn nb-page-btn--disabled" aria-disabled="true">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 18l-6-6 6-6"/></svg>
                </span>
                @else
                <a href="{{ $news->previousPageUrl() }}" class="nb-page-btn" aria-label="Previous page">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 18l-6-6 6-6"/></svg>
                </a>
                @endif

                {{-- Page numbers --}}
                @foreach($news->getUrlRange(1, $news->lastPage()) as $page => $url)
                    @if($news->lastPage() <= 7 || $page == 1 || $page == $news->lastPage() || abs($page - $news->currentPage()) <= 1)
                    <a href="{{ $url }}"
                       class="nb-page-btn {{ $news->currentPage() == $page ? 'nb-page-btn--active' : '' }}"
                       aria-label="Page {{ $page }}"
                       aria-current="{{ $news->currentPage() == $page ? 'page' : 'false' }}">
                        {{ $page }}
                    </a>
                    @elseif(abs($page - $news->currentPage()) == 2)
                    <span class="nb-page-btn nb-page-btn--disabled" style="border:none; background:none; cursor:default;">…</span>
                    @endif
                @endforeach

                {{-- Next --}}
                @if($news->hasMorePages())
                <a href="{{ $news->nextPageUrl() }}" class="nb-page-btn" aria-label="Next page">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
                </a>
                @else
                <span class="nb-page-btn nb-page-btn--disabled" aria-disabled="true">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
                </span>
                @endif

            </nav>
            @endif

        </div>
    </section>

</div>

@endsection