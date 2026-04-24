@extends('layouts.base')
@section('title', 'Stories & Testimonials')
@section('content')

{{-- ═══════════════════════════════════════════
     PAGE HERO
═══════════════════════════════════════════ --}}
<section class="st-hero">
    <div class="container">
        <div class="st-hero__inner">
            <div class="st-hero__text" data-aos="fade-up">
                <span class="st-eyebrow">Stories &amp; Testimonials</span>
                <h1 class="st-h1">Real voices. <em>Real change.</em></h1>
                <p class="st-lead">
                    Stay updated with the latest activities, health alerts, events, and diabetes education from our organization — told through the people we serve.
                </p>
            </div>
            <div class="st-hero__meta" data-aos="fade-up" data-aos-delay="100">
                <div class="st-hero__badge">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                    <span>{{ $stories->count() }} stories shared</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     STORIES GRID
═══════════════════════════════════════════ --}}
<section class="st-grid-section">
    <div class="container">
        <div class="st-grid">
            @foreach($stories as $index => $story)
            <article class="st-card {{ $index === 0 ? 'st-card--featured' : '' }}"
                     data-aos="fade-up"
                     data-aos-delay="{{ ($index % 3) * 70 }}">

                {{-- Top bar --}}
                <div class="st-card__top">
                    <div class="st-card__stars">
                        @for($s = 0; $s < 5; $s++)
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 17l-5.878 3.59 1.598-6.71-4.73-4.09 6.865-.556L12 2.5l2.145 6.734 6.865.556-4.73 4.09 1.598 6.71z"/>
                        </svg>
                        @endfor
                    </div>
                    @if($index === 0)
                    <span class="st-card__badge">Featured</span>
                    @endif
                </div>

                {{-- Quote mark --}}
                <div class="st-card__quote-mark">
                    <svg width="28" height="22" viewBox="0 0 62 46" fill="currentColor">
                        <path d="M14.531 0C6.517 0 0 6.519 0 14.531c0 7.315 5.432 13.385 12.477 14.386-.564 4.097-2.128 8-4.573 11.377-.474.66-.457 1.554.051 2.193.498.628 1.363.866 2.122.546C21.61 38.22 29.063 27.03 29.063 14.531 29.063 6.519 22.546 0 14.531 0zm32.937 0C39.455 0 32.938 6.519 32.938 14.531c0 7.315 5.431 13.385 12.476 14.386-.564 4.097-2.129 8-4.573 11.377-.474.66-.457 1.554.05 2.193.498.628 1.363.866 2.122.546C54.547 38.22 62 27.03 62 14.531 62 6.519 55.483 0 47.468 0z"/>
                    </svg>
                </div>

                {{-- Title --}}
                <h2 class="st-card__title">
                    <a href="#">{{ $story->title }}</a>
                </h2>

                {{-- Excerpt if available --}}
                @if(isset($story->excerpt) && $story->excerpt)
                <p class="st-card__excerpt">"{{ Str::limit($story->excerpt, 160) }}"</p>
                @endif

                {{-- Footer --}}
                <div class="st-card__footer">
                    <div class="st-card__author">
                        <div class="st-card__avatar">
                            {{ strtoupper(substr($story->author_name ?? $story->title, 0, 1)) }}
                        </div>
                        <div class="st-card__author-info">
                            <span class="st-card__author-name">{{ $story->author_name ?? 'Community Member' }}</span>
                            <span class="st-card__date">
                                <svg width="12" height="12" viewBox="0 0 18 18" fill="currentColor" style="margin-right:4px;opacity:.5">
                                    <path fill-rule="evenodd" d="M4.833 1.703v-.625a.625.625 0 0 0-1.25 0v.625H3.25A3.25 3.25 0 0 0 0 4.953v8.5A3.25 3.25 0 0 0 3.25 16.7h11.5A3.25 3.25 0 0 0 18 13.453v-8.5A3.25 3.25 0 0 0 14.75 1.7h-.333v-.625a.625.625 0 0 0-1.25 0v.625H4.833zm-3.583 5.5h15.5v6.25a2 2 0 0 1-2 2H3.25a2 2 0 0 1-2-2V7.203z"/>
                                </svg>
                                {{ isset($story->created_at) ? $story->created_at->format('M j, Y') : 'October 2, 2025' }}
                            </span>
                        </div>
                    </div>
                    <a href="#" class="st-card__read-link">
                        Read
                        <svg width="13" height="13" viewBox="0 0 20 20" fill="none">
                            <path d="M13.336 7.845L6.164 15.017l-1.178-1.178 7.172-7.172H5.836V5H15v9.167h-1.664V7.845Z" fill="currentColor"/>
                        </svg>
                    </a>
                </div>

            </article>
            @endforeach
        </div>

        {{-- ═══════════════════════════════════
             PAGINATION
        ═══════════════════════════════════ --}}
        <nav class="st-pagination" aria-label="Stories pagination" data-aos="fade-up">
            @if(method_exists($stories, 'links'))
                {{-- Laravel paginator --}}
                <div class="st-pagination__inner">
                    @if($stories->onFirstPage())
                        <span class="st-page-btn st-page-btn--disabled">
                            <svg width="14" height="14" viewBox="0 0 8 12" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.089 5.41a.833.833 0 0 0 0-1.178L2.375.72A.833.833 0 0 0 1.197 1.9L5.322 6 1.197 10.1a.833.833 0 0 0 1.178 1.178l4.714-4.69z" fill="currentColor" transform="scale(-1,1) translate(-8,0)"/></svg>
                        </span>
                    @else
                        <a href="{{ $stories->previousPageUrl() }}" class="st-page-btn" aria-label="Previous">
                            <svg width="14" height="14" viewBox="0 0 8 12" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.089 5.41a.833.833 0 0 0 0-1.178L2.375.72A.833.833 0 0 0 1.197 1.9L5.322 6 1.197 10.1a.833.833 0 0 0 1.178 1.178l4.714-4.69z" fill="currentColor" transform="scale(-1,1) translate(-8,0)"/></svg>
                        </a>
                    @endif

                    @foreach($stories->getUrlRange(1, $stories->lastPage()) as $page => $url)
                        @if($page == $stories->currentPage())
                            <span class="st-page-btn st-page-btn--active">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="st-page-btn">{{ $page }}</a>
                        @endif
                    @endforeach

                    @if($stories->hasMorePages())
                        <a href="{{ $stories->nextPageUrl() }}" class="st-page-btn" aria-label="Next">
                            <svg width="14" height="14" viewBox="0 0 8 12" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.089 5.41a.833.833 0 0 0 0-1.178L2.375.72A.833.833 0 0 0 1.197 1.9L5.322 6 1.197 10.1a.833.833 0 0 0 1.178 1.178l4.714-4.69z" fill="currentColor"/></svg>
                        </a>
                    @else
                        <span class="st-page-btn st-page-btn--disabled">
                            <svg width="14" height="14" viewBox="0 0 8 12" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.089 5.41a.833.833 0 0 0 0-1.178L2.375.72A.833.833 0 0 0 1.197 1.9L5.322 6 1.197 10.1a.833.833 0 0 0 1.178 1.178l4.714-4.69z" fill="currentColor"/></svg>
                        </span>
                    @endif
                </div>
            @else
            {{-- Static fallback --}}
            <div class="st-pagination__inner">
                <span class="st-page-btn st-page-btn--disabled">
                    <svg width="14" height="14" viewBox="0 0 8 12" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.089 5.41a.833.833 0 0 0 0-1.178L2.375.72A.833.833 0 0 0 1.197 1.9L5.322 6 1.197 10.1a.833.833 0 0 0 1.178 1.178l4.714-4.69z" fill="currentColor" transform="scale(-1,1) translate(-8,0)"/></svg>
                </span>
                <a href="#" class="st-page-btn st-page-btn--active">1</a>
                <a href="#" class="st-page-btn">2</a>
                <a href="#" class="st-page-btn">3</a>
                <a href="#" class="st-page-btn">
                    <svg width="14" height="14" viewBox="0 0 8 12" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.089 5.41a.833.833 0 0 0 0-1.178L2.375.72A.833.833 0 0 0 1.197 1.9L5.322 6 1.197 10.1a.833.833 0 0 0 1.178 1.178l4.714-4.69z" fill="currentColor"/></svg>
                </a>
            </div>
            @endif
        </nav>
    </div>
</section>


<style>
/* ── Tokens ─────────────────────────────────────── */
:root {
    --st-navy:      #19265d;
    --st-navy-mid:  #243580;
    --st-orange:    #D05208;
    --st-orange-lt: #fdf0ea;
    --st-teal:      #0e7c6a;
    --st-teal-lt:   #e4f4f1;
    --st-text:      #1a1e2e;
    --st-muted:     #5a6278;
    --st-border:    #e3e8f0;
    --st-bg:        #f5f7fc;
    --st-white:     #ffffff;
    --ff-h:         'Cormorant Garamond', Georgia, serif;
    --ff-b:         'DM Sans', system-ui, sans-serif;
    --r-md:         12px;
    --r-lg:         20px;
}

/* ── Helpers ────────────────────────────────────── */
.st-eyebrow {
    display: inline-block;
    font-family: var(--ff-b);
    font-size: 11.5px; font-weight: 600;
    letter-spacing: 0.13em; text-transform: uppercase;
    color: var(--st-orange); margin-bottom: 12px;
}
.st-h1 {
    font-family: var(--ff-h);
    font-size: clamp(38px, 5vw, 58px);
    font-weight: 600; line-height: 1.1;
    color: var(--st-navy); margin: 0 0 20px;
}
.st-h1 em { font-style: italic; color: var(--st-orange); }
.st-lead {
    font-family: var(--ff-b);
    font-size: 17px; line-height: 1.75;
    color: var(--st-muted); margin: 0;
    max-width: 600px;
}

/* ─────────────────────────────────────────────── */
/* HERO                                            */
/* ─────────────────────────────────────────────── */
.st-hero {
    padding: 100px 0 72px;
    background: var(--st-white);
    border-bottom: 1px solid var(--st-border);
}
.st-hero__inner {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 32px;
    flex-wrap: wrap;
}
.st-hero__badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--st-teal-lt);
    color: var(--st-teal);
    font-family: var(--ff-b);
    font-size: 13px; font-weight: 600;
    padding: 10px 16px;
    border-radius: 100px;
    white-space: nowrap;
    flex-shrink: 0;
}

/* ─────────────────────────────────────────────── */
/* GRID                                            */
/* ─────────────────────────────────────────────── */
.st-grid-section {
    padding: 72px 0 100px;
    background: var(--st-bg);
}
.st-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin-bottom: 56px;
}
@media (max-width: 960px) { .st-grid { grid-template-columns: 1fr 1fr; } }
@media (max-width: 580px) { .st-grid { grid-template-columns: 1fr; } }

/* ─────────────────────────────────────────────── */
/* STORY CARD                                      */
/* ─────────────────────────────────────────────── */
.st-card {
    background: var(--st-white);
    border: 1px solid var(--st-border);
    border-radius: var(--r-lg);
    padding: 32px 28px;
    display: flex;
    flex-direction: column;
    gap: 14px;
    transition: transform 0.22s, box-shadow 0.22s;
    position: relative;
}
.st-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 14px 44px rgba(25,38,93,0.09);
}
.st-card::before {
    content: '';
    position: absolute;
    top: 0; left: 28px; right: 28px;
    height: 3px;
    background: var(--st-border);
    border-radius: 0 0 4px 4px;
    transition: background 0.2s;
}
.st-card:hover::before { background: var(--st-teal); }
.st-card--featured::before { background: var(--st-orange); }
.st-card--featured { border-color: rgba(208,82,8,0.2); }

/* Top bar */
.st-card__top {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.st-card__stars {
    display: flex; gap: 3px;
    color: #f59e0b;
}
.st-card__badge {
    font-family: var(--ff-b);
    font-size: 10px; font-weight: 700;
    letter-spacing: 0.1em; text-transform: uppercase;
    background: var(--st-orange);
    color: #fff;
    padding: 3px 10px;
    border-radius: 100px;
}

/* Quote mark */
.st-card__quote-mark {
    color: var(--st-border);
    line-height: 1;
    margin-top: 4px;
}
.st-card--featured .st-card__quote-mark { color: rgba(208,82,8,0.18); }

/* Title */
.st-card__title {
    font-family: var(--ff-h);
    font-size: 20px; font-weight: 700;
    line-height: 1.3;
    margin: 0;
}
.st-card__title a {
    color: var(--st-navy);
    text-decoration: none;
    transition: color 0.15s;
}
.st-card__title a:hover { color: var(--st-orange); }
.st-card--featured .st-card__title { font-size: 22px; }

/* Excerpt */
.st-card__excerpt {
    font-family: var(--ff-h);
    font-size: 15px; font-style: italic; font-weight: 500;
    line-height: 1.7;
    color: var(--st-muted);
    margin: 0; flex: 1;
}

/* Footer */
.st-card__footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    padding-top: 16px;
    border-top: 1px solid var(--st-border);
    margin-top: auto;
}
.st-card__author {
    display: flex; align-items: center; gap: 10px;
    min-width: 0;
}
.st-card__avatar {
    width: 36px; height: 36px;
    border-radius: 50%;
    background: var(--st-navy);
    color: #fff;
    font-family: var(--ff-h);
    font-size: 15px; font-weight: 700;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
}
.st-card--featured .st-card__avatar { background: var(--st-orange); }
.st-card__author-info {
    display: flex; flex-direction: column;
    min-width: 0;
}
.st-card__author-name {
    font-family: var(--ff-b);
    font-size: 13px; font-weight: 600;
    color: var(--st-text);
    white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
}
.st-card__date {
    font-family: var(--ff-b);
    font-size: 11px; color: var(--st-muted);
    display: flex; align-items: center;
    margin-top: 2px;
}
.st-card__read-link {
    display: inline-flex; align-items: center; gap: 5px;
    font-family: var(--ff-b);
    font-size: 12px; font-weight: 600;
    color: var(--st-teal);
    text-decoration: none;
    white-space: nowrap;
    transition: gap 0.18s, color 0.15s;
    flex-shrink: 0;
}
.st-card--featured .st-card__read-link { color: var(--st-orange); }
.st-card__read-link:hover { gap: 9px; }

/* ─────────────────────────────────────────────── */
/* PAGINATION                                      */
/* ─────────────────────────────────────────────── */
.st-pagination { display: flex; justify-content: center; }
.st-pagination__inner {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: var(--st-white);
    border: 1px solid var(--st-border);
    border-radius: var(--r-md);
    padding: 6px;
}
.st-page-btn {
    display: inline-flex;
    align-items: center; justify-content: center;
    min-width: 38px; height: 38px;
    border-radius: 8px;
    font-family: var(--ff-b);
    font-size: 14px; font-weight: 500;
    color: var(--st-muted);
    text-decoration: none;
    transition: background 0.15s, color 0.15s;
    padding: 0 10px;
    cursor: pointer;
}
.st-page-btn:hover {
    background: var(--st-bg);
    color: var(--st-navy);
}
.st-page-btn--active {
    background: var(--st-navy);
    color: #fff;
    font-weight: 600;
}
.st-page-btn--active:hover {
    background: var(--st-navy-mid);
    color: #fff;
}
.st-page-btn--disabled {
    opacity: 0.3;
    cursor: not-allowed;
    pointer-events: none;
}
</style>

@endsection