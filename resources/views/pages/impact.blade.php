@extends('layouts.base')
@section('title', 'Our Impact')
@section('content')

{{-- ═══════════════════════════════════════════
     HERO
═══════════════════════════════════════════ --}}
<section class="imp-hero">
    <div class="container">
        <div class="imp-hero__grid">
            <div class="imp-hero__text" data-aos="fade-up">
                <span class="imp-eyebrow">Our Impact</span>
                <h1 class="imp-h1">Trusted advice.<br><em>Proven results.</em></h1>
                <p class="imp-lead">
                    Transforming Rwanda's health landscape through community programs, evidence-based education, early diabetes detection, and lifesaving support — one person at a time.
                </p>
                <a href="{{ route('stories.index') }}" class="imp-btn imp-btn--primary">
                    Read Success Stories
                    <svg width="15" height="15" viewBox="0 0 20 20" fill="none"><path d="M13.336 7.845L6.164 15.017l-1.178-1.178 7.172-7.172H5.836V5H15v9.167h-1.664V7.845Z" fill="currentColor"/></svg>
                </a>
            </div>

            <div class="imp-hero__cards" data-aos="fade-left" data-aos-delay="100">
                <div class="imp-hero-card imp-hero-card--orange">
                    <div class="imp-hero-card__num">50k<span>+</span></div>
                    <div class="imp-hero-card__label">Lives Impacted</div>
                    <div class="imp-hero-card__icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                    </div>
                </div>
                <div class="imp-hero-card imp-hero-card--navy">
                    <div class="imp-hero-card__num">30<span>+</span></div>
                    <div class="imp-hero-card__label">Districts Reached</div>
                    <div class="imp-hero-card__icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><circle cx="12" cy="10" r="3"/><path d="M12 2a8 8 0 0 1 8 8c0 5.25-8 14-8 14S4 15.25 4 10a8 8 0 0 1 8-8z"/></svg>
                    </div>
                </div>
                <div class="imp-hero-card imp-hero-card--teal">
                    <div class="imp-hero-card__num">27<span>yrs</span></div>
                    <div class="imp-hero-card__label">Serving Rwanda</div>
                    <div class="imp-hero-card__icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     STATS STRIP
═══════════════════════════════════════════ --}}
<section class="imp-stats">
    <div class="container">
        <div class="imp-stats__inner">
            <div class="imp-stat" data-aos="fade-up" data-aos-delay="0">
                <div class="imp-stat__num" data-target="20">20<span>+</span></div>
                <div class="imp-stat__label">Researchers Trained</div>
                <div class="imp-stat__sub">Equipped with tools and knowledge</div>
            </div>
            <div class="imp-stat-divider"></div>
            <div class="imp-stat" data-aos="fade-up" data-aos-delay="80">
                <div class="imp-stat__num" data-target="12">12<span>+</span></div>
                <div class="imp-stat__label">Community Programs</div>
                <div class="imp-stat__sub">Running nationwide</div>
            </div>
            <div class="imp-stat-divider"></div>
            <div class="imp-stat" data-aos="fade-up" data-aos-delay="160">
                <div class="imp-stat__num" data-target="25">25<span>+</span></div>
                <div class="imp-stat__label">Published Studies</div>
                <div class="imp-stat__sub">Advancing diabetes research</div>
            </div>
            <div class="imp-stat-divider"></div>
            <div class="imp-stat" data-aos="fade-up" data-aos-delay="240">
                <div class="imp-stat__num">100<span>%</span></div>
                <div class="imp-stat__label">Non-profit</div>
                <div class="imp-stat__sub">Community-funded, community-led</div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     STORIES
═══════════════════════════════════════════ --}}
<section class="imp-stories">
    <div class="container">
        <div class="imp-stories__header" data-aos="fade-up">
            <div class="imp-stories__header-text">
                <span class="imp-eyebrow">Success Stories</span>
                <h2 class="imp-h2">Voices from our community</h2>
                <p class="imp-body">
                    Real stories from individuals whose lives have been transformed through early detection, education, and compassionate support.
                </p>
            </div>
            <a href="{{ route('stories.index') }}" class="imp-btn imp-btn--ghost">
                All Stories
                <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><path d="M13.336 7.845L6.164 15.017l-1.178-1.178 7.172-7.172H5.836V5H15v9.167h-1.664V7.845Z" fill="currentColor"/></svg>
            </a>
        </div>

        {{-- Story cards grid --}}
        <div class="imp-stories__grid">
            @foreach($stories as $i => $story)
            <div class="imp-story-card {{ $i === 0 ? 'imp-story-card--featured' : '' }}"
                 data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 80 }}">

                {{-- Quote mark --}}
                <div class="imp-story-card__quote-icon">
                    <svg width="32" height="24" viewBox="0 0 62 46" fill="none">
                        <path d="M14.531 0C6.517 0 0 6.519 0 14.531c0 7.315 5.432 13.385 12.477 14.386-.564 4.097-2.128 8-4.573 11.377-.474.66-.457 1.554.051 2.193.498.628 1.363.866 2.122.546C21.61 38.22 29.063 27.03 29.063 14.531 29.063 6.519 22.546 0 14.531 0zm32.937 0C39.455 0 32.938 6.519 32.938 14.531c0 7.315 5.431 13.385 12.476 14.386-.564 4.097-2.129 8-4.573 11.377-.474.66-.457 1.554.05 2.193.498.628 1.363.866 2.122.546C54.547 38.22 62 27.03 62 14.531 62 6.519 55.483 0 47.468 0z" fill="currentColor"/>
                    </svg>
                </div>

                {{-- Stars --}}
                <div class="imp-story-card__stars">
                    @for($s = 0; $s < 5; $s++)
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17l-5.878 3.59 1.598-6.71-4.73-4.09 6.865-.556L12 2.5l2.145 6.734 6.865.556-4.73 4.09 1.598 6.71z"/></svg>
                    @endfor
                </div>

                <p class="imp-story-card__excerpt">"{{ $story->excerpt }}"</p>

                <div class="imp-story-card__author">
                    <div class="imp-story-card__avatar">
                        {{ strtoupper(substr($story->title, 0, 1)) }}
                    </div>
                    <div>
                        <div class="imp-story-card__name">{{ $story->title }}</div>
                        <div class="imp-story-card__meta">Community Member</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     BOTTOM CTA
═══════════════════════════════════════════ --}}
<section class="imp-cta">
    <div class="container">
        <div class="imp-cta__inner" data-aos="fade-up">
            <div class="imp-cta__rings">
                <div class="imp-ring imp-ring--1"></div>
                <div class="imp-ring imp-ring--2"></div>
                <div class="imp-ring imp-ring--3"></div>
                <div class="imp-cta__icon">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
            </div>
            <div class="imp-cta__text">
                <h3 class="imp-cta__title">Be part of the change</h3>
                <p class="imp-cta__body">Partner with us or donate to help more Rwandans access diabetes education, screening, and care.</p>
                <div class="imp-cta__actions">
                    <a href="{{ route('partner_with_us') }}" class="imp-btn imp-btn--white">
                        Partner with Us
                        <svg width="15" height="15" viewBox="0 0 20 20" fill="none"><path d="M13.336 7.845L6.164 15.017l-1.178-1.178 7.172-7.172H5.836V5H15v9.167h-1.664V7.845Z" fill="currentColor"/></svg>
                    </a>
                    <a role="button" data-bs-toggle="modal" data-bs-target="#donationModal" class="imp-btn imp-btn--outline-white">
                        Donate Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
/* ── Tokens ─────────────────────────────────────── */
:root {
    --i-navy:     #19265d;
    --i-navy-mid: #243580;
    --i-orange:   #D05208;
    --i-orange-lt:#fdf0ea;
    --i-teal:     #0e7c6a;
    --i-teal-lt:  #e4f4f1;
    --i-text:     #1a1e2e;
    --i-muted:    #5a6278;
    --i-border:   #e3e8f0;
    --i-bg:       #f5f7fc;
    --i-white:    #ffffff;
    --ff-h:       'Cormorant Garamond', Georgia, serif;
    --ff-b:       'DM Sans', system-ui, sans-serif;
    --r-md:       12px;
    --r-lg:       20px;
}

/* ── Helpers ────────────────────────────────────── */
.imp-eyebrow {
    display: inline-block;
    font-family: var(--ff-b);
    font-size: 11.5px; font-weight: 600;
    letter-spacing: 0.13em; text-transform: uppercase;
    color: var(--i-orange); margin-bottom: 12px;
}
.imp-h1 {
    font-family: var(--ff-h);
    font-size: clamp(38px, 5vw, 60px);
    font-weight: 600; line-height: 1.1;
    color: var(--i-navy); margin: 0 0 20px;
}
.imp-h1 em { font-style: italic; color: var(--i-orange); }
.imp-h2 {
    font-family: var(--ff-h);
    font-size: clamp(28px, 3vw, 40px);
    font-weight: 600; line-height: 1.2;
    color: var(--i-navy); margin: 0 0 14px;
}
.imp-lead {
    font-family: var(--ff-b);
    font-size: 17px; line-height: 1.75;
    color: var(--i-muted); margin: 0 0 32px;
    max-width: 520px;
}
.imp-body {
    font-family: var(--ff-b);
    font-size: 15px; line-height: 1.75;
    color: var(--i-muted); margin: 0;
}
.imp-btn {
    display: inline-flex; align-items: center; gap: 8px;
    font-family: var(--ff-b); font-size: 14px; font-weight: 600;
    padding: 12px 24px; border-radius: 8px;
    text-decoration: none; border: none; cursor: pointer;
    transition: all 0.2s; letter-spacing: 0.01em;
    white-space: nowrap;
}
.imp-btn--primary { background: var(--i-orange); color: #fff; }
.imp-btn--primary:hover { background: #b3420a; color: #fff; transform: translateY(-1px); }
.imp-btn--ghost { background: transparent; color: var(--i-navy); border: 1.5px solid var(--i-border); }
.imp-btn--ghost:hover { border-color: var(--i-navy); background: var(--i-bg); }
.imp-btn--white { background: #fff; color: var(--i-navy); }
.imp-btn--white:hover { background: rgba(255,255,255,0.9); transform: translateY(-1px); }
.imp-btn--outline-white {
    background: transparent; color: #fff;
    border: 1.5px solid rgba(255,255,255,0.35);
}
.imp-btn--outline-white:hover { background: rgba(255,255,255,0.1); color: #fff; }

/* ─────────────────────────────────────────────── */
/* HERO                                            */
/* ─────────────────────────────────────────────── */
.imp-hero {
    padding: 100px 0 80px;
    background: var(--i-white);
}
.imp-hero__grid {
    display: grid;
    grid-template-columns: 1fr 360px;
    gap: 64px;
    align-items: center;
}
@media (max-width: 900px) {
    .imp-hero__grid { grid-template-columns: 1fr; gap: 48px; }
}

/* Hero stat cards */
.imp-hero__cards {
    display: flex;
    flex-direction: column;
    gap: 16px;
}
.imp-hero-card {
    border-radius: var(--r-lg);
    padding: 24px 28px;
    display: flex;
    align-items: center;
    gap: 16px;
    position: relative;
    overflow: hidden;
}
.imp-hero-card--orange { background: var(--i-orange); }
.imp-hero-card--navy   { background: var(--i-navy); }
.imp-hero-card--teal   { background: var(--i-teal); }

.imp-hero-card__num {
    font-family: var(--ff-h);
    font-size: 42px; font-weight: 700;
    color: #fff; line-height: 1;
    flex: 1;
}
.imp-hero-card__num span {
    font-size: 24px;
    opacity: 0.7;
}
.imp-hero-card__label {
    font-family: var(--ff-b);
    font-size: 13px; font-weight: 600;
    color: rgba(255,255,255,0.85);
    text-align: right;
    flex: 1;
}
.imp-hero-card__icon {
    color: rgba(255,255,255,0.35);
    position: absolute; right: 20px; top: 50%;
    transform: translateY(-50%);
    opacity: 0.4;
}

/* ─────────────────────────────────────────────── */
/* STATS STRIP                                     */
/* ─────────────────────────────────────────────── */
.imp-stats {
    padding: 0 0 80px;
    background: var(--i-white);
}
.imp-stats__inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: var(--i-navy);
    border-radius: var(--r-lg);
    padding: 48px 56px;
    gap: 0;
}
@media (max-width: 768px) {
    .imp-stats__inner {
        flex-direction: column;
        padding: 36px 28px;
        gap: 28px;
        text-align: center;
    }
    .imp-stat-divider { width: 80px; height: 1px; background: rgba(255,255,255,0.1); }
}

.imp-stat { text-align: center; }
.imp-stat__num {
    font-family: var(--ff-h);
    font-size: 48px; font-weight: 700;
    color: #fff; line-height: 1;
    margin-bottom: 6px;
}
.imp-stat__num span { font-size: 28px; color: var(--i-orange); }
.imp-stat__label {
    font-family: var(--ff-b);
    font-size: 15px; font-weight: 600;
    color: rgba(255,255,255,0.9);
    margin-bottom: 4px;
}
.imp-stat__sub {
    font-family: var(--ff-b);
    font-size: 12px;
    color: rgba(255,255,255,0.4);
}
.imp-stat-divider {
    width: 1px; height: 64px;
    background: rgba(255,255,255,0.1);
}

/* ─────────────────────────────────────────────── */
/* STORIES                                         */
/* ─────────────────────────────────────────────── */
.imp-stories {
    padding: 100px 0;
    background: var(--i-bg);
}
.imp-stories__header {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 24px;
    margin-bottom: 52px;
    flex-wrap: wrap;
}

/* Stories masonry-style grid */
.imp-stories__grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}
@media (max-width: 900px) {
    .imp-stories__grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 580px) {
    .imp-stories__grid { grid-template-columns: 1fr; }
}

/* Story card */
.imp-story-card {
    background: var(--i-white);
    border: 1px solid var(--i-border);
    border-radius: var(--r-lg);
    padding: 32px 28px;
    display: flex;
    flex-direction: column;
    gap: 16px;
    transition: transform 0.2s, box-shadow 0.2s;
    position: relative;
}
.imp-story-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 40px rgba(25,38,93,0.09);
}

/* Featured first card spans 2 rows */
.imp-story-card--featured {
    border-color: var(--i-orange);
    grid-row: span 1;
}
.imp-story-card--featured::before {
    content: 'Featured Story';
    position: absolute;
    top: -1px; left: 28px;
    font-family: var(--ff-b);
    font-size: 10px; font-weight: 700;
    letter-spacing: 0.1em; text-transform: uppercase;
    background: var(--i-orange);
    color: #fff;
    padding: 4px 10px;
    border-radius: 0 0 6px 6px;
}

.imp-story-card__quote-icon {
    color: var(--i-border);
    line-height: 1;
}
.imp-story-card--featured .imp-story-card__quote-icon { color: var(--i-orange-lt); }
.imp-story-card--featured .imp-story-card__quote-icon svg { fill: var(--i-orange); opacity: 0.15; }

.imp-story-card__stars {
    display: flex; gap: 3px;
    color: #f59e0b;
}
.imp-story-card__excerpt {
    font-family: var(--ff-h);
    font-size: 17px; font-style: italic; font-weight: 500;
    line-height: 1.65;
    color: var(--i-text);
    margin: 0; flex: 1;
}
.imp-story-card--featured .imp-story-card__excerpt {
    font-size: 19px;
}

.imp-story-card__author {
    display: flex; align-items: center; gap: 12px;
    padding-top: 16px;
    border-top: 1px solid var(--i-border);
    margin-top: auto;
}
.imp-story-card__avatar {
    width: 38px; height: 38px;
    border-radius: 50%;
    background: var(--i-navy);
    color: #fff;
    font-family: var(--ff-h);
    font-size: 16px; font-weight: 700;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
}
.imp-story-card--featured .imp-story-card__avatar { background: var(--i-orange); }
.imp-story-card__name {
    font-family: var(--ff-b);
    font-size: 14px; font-weight: 600;
    color: var(--i-text);
}
.imp-story-card__meta {
    font-family: var(--ff-b);
    font-size: 12px; color: var(--i-muted);
}

/* ─────────────────────────────────────────────── */
/* BOTTOM CTA                                      */
/* ─────────────────────────────────────────────── */
.imp-cta {
    padding: 0 0 100px;
    background: var(--i-bg);
}
.imp-cta__inner {
    background: linear-gradient(135deg, var(--i-navy) 0%, var(--i-navy-mid) 100%);
    border-radius: var(--r-lg);
    padding: 64px;
    display: grid;
    grid-template-columns: 200px 1fr;
    gap: 56px;
    align-items: center;
}
@media (max-width: 768px) {
    .imp-cta__inner {
        grid-template-columns: 1fr;
        padding: 44px 32px;
        gap: 32px;
    }
    .imp-cta__rings { display: none; }
}

/* Rings visual */
.imp-cta__rings {
    position: relative;
    display: flex; align-items: center; justify-content: center;
    height: 160px;
}
.imp-ring {
    position: absolute; border-radius: 50%;
    border: 1px solid rgba(255,255,255,0.12);
}
.imp-ring--1 { width: 160px; height: 160px; }
.imp-ring--2 { width: 112px; height: 112px; border-color: rgba(255,255,255,0.18); }
.imp-ring--3 { width: 68px; height: 68px; background: rgba(255,255,255,0.07); }
.imp-cta__icon {
    position: relative; z-index: 1;
    width: 64px; height: 64px; border-radius: 50%;
    background: rgba(255,255,255,0.1);
    display: flex; align-items: center; justify-content: center;
}

.imp-cta__title {
    font-family: var(--ff-h);
    font-size: clamp(26px, 3vw, 36px);
    font-weight: 600; line-height: 1.2;
    color: #fff; margin: 0 0 10px;
}
.imp-cta__body {
    font-family: var(--ff-b);
    font-size: 15px; line-height: 1.7;
    color: rgba(255,255,255,0.65);
    margin: 0 0 28px;
}
.imp-cta__actions { display: flex; gap: 12px; flex-wrap: wrap; }
</style>

@endsection