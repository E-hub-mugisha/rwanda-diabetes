@extends('layouts.base')
@section('title', 'Programs')
@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=DM+Sans:wght@300;400;500;600&display=swap');

    :root {
        --ink:       #0f0e0d;
        --ink-soft:  #4a4540;
        --ink-muted: #8a847c;
        --paper:     #faf9f6;
        --cream:     #f2efe8;
        --accent:    #c8522a;
        --accent-lt: #f0e0d8;
        --accent-dk: #a33f1e;
        --rule:      #e3ddd5;
        --serif:     'Playfair Display', Georgia, serif;
        --sans:      'DM Sans', system-ui, sans-serif;
        --shadow:    0 2px 24px rgba(15,14,13,.07);
        --shadow-md: 0 8px 40px rgba(15,14,13,.13);
        --radius:    10px;
    }

    *, *::before, *::after { box-sizing: border-box; }

    /* ── Hero header ── */
    .programs-hero {
        background: var(--ink);
        padding: 5rem clamp(1.5rem, 6vw, 6rem) 4rem;
        position: relative;
        overflow: hidden;
    }
    .programs-hero::before {
        content: '';
        position: absolute; inset: 0;
        background:
            radial-gradient(ellipse 60% 80% at 80% 50%, rgba(200,82,42,.18) 0%, transparent 65%),
            radial-gradient(ellipse 40% 60% at 10% 80%, rgba(200,82,42,.1) 0%, transparent 60%);
        pointer-events: none;
    }
    /* decorative grid lines */
    .programs-hero::after {
        content: '';
        position: absolute; inset: 0;
        background-image:
            linear-gradient(rgba(255,255,255,.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255,255,255,.03) 1px, transparent 1px);
        background-size: 60px 60px;
        pointer-events: none;
    }
    .programs-hero-inner {
        position: relative; z-index: 2;
        max-width: 1200px; margin: 0 auto;
        display: flex; flex-wrap: wrap; gap: 1.5rem;
        justify-content: space-between; align-items: flex-end;
    }
    .programs-hero-text {}
    .hero-eyebrow {
        display: inline-flex; align-items: center; gap: .5rem;
        background: rgba(200,82,42,.15); border: 1px solid rgba(200,82,42,.3);
        padding: .3rem .85rem; border-radius: 100px;
        font-family: var(--sans); font-size: .72rem; letter-spacing: .12em;
        text-transform: uppercase; color: #e8854f;
        margin-bottom: 1.25rem;
    }
    .hero-eyebrow span { width: 5px; height: 5px; border-radius: 50%; background: #e8854f; }
    .programs-hero h1 {
        font-family: var(--serif);
        font-size: clamp(2rem, 5vw, 3.4rem);
        font-weight: 700; color: #fff; line-height: 1.15;
        margin: 0 0 1rem;
    }
    .programs-hero h1 em {
        font-style: italic; color: #e8854f;
    }
    .hero-desc {
        font-family: var(--sans); font-size: 1rem;
        color: rgba(255,255,255,.55); max-width: 520px; line-height: 1.7;
    }
    .hero-stat-row {
        display: flex; gap: 2rem; flex-wrap: wrap;
        align-self: flex-end;
    }
    .hero-stat { text-align: right; }
    .hero-stat-num {
        font-family: var(--serif); font-size: 2rem; font-weight: 700;
        color: #fff; line-height: 1;
    }
    .hero-stat-label {
        font-size: .75rem; color: rgba(255,255,255,.4);
        text-transform: uppercase; letter-spacing: .08em; margin-top: .25rem;
    }

    @media (max-width: 640px) {
        .hero-stat-row { display: none; }
    }

    /* ── Filter / breadcrumb bar ── */
    .programs-bar {
        background: var(--cream); border-bottom: 1px solid var(--rule);
        padding: .85rem clamp(1.5rem, 6vw, 6rem);
    }
    .programs-bar-inner {
        max-width: 1200px; margin: 0 auto;
        display: flex; align-items: center; gap: 1rem; flex-wrap: wrap;
    }
    .bar-crumb {
        font-size: .8rem; color: var(--ink-muted); display: flex; gap: .4rem; align-items: center; margin-right: auto;
    }
    .bar-crumb a { color: var(--ink-soft); text-decoration: none; transition: color .18s; }
    .bar-crumb a:hover { color: var(--accent); }
    .bar-count {
        font-family: 'DM Mono', monospace, var(--sans);
        font-size: .75rem; color: var(--ink-muted);
        background: #fff; border: 1px solid var(--rule);
        padding: .3rem .8rem; border-radius: 100px;
    }

    /* ── Grid section ── */
    .programs-section {
        background: var(--paper);
        padding: 3.5rem clamp(1.5rem, 6vw, 6rem) 5rem;
    }
    .programs-grid {
        max-width: 1200px; margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.75rem;
    }
    @media (max-width: 1024px) { .programs-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 640px)  { .programs-grid { grid-template-columns: 1fr; } }

    /* ── Program card ── */
    .program-card {
        background: #fff;
        border: 1px solid var(--rule);
        border-radius: var(--radius);
        overflow: hidden;
        box-shadow: var(--shadow);
        display: flex; flex-direction: column;
        transition: box-shadow .28s, transform .28s, border-color .28s;
    }
    .program-card:hover {
        box-shadow: var(--shadow-md);
        transform: translateY(-4px);
        border-color: var(--accent-lt);
    }

    /* image */
    .card-media {
        position: relative; overflow: hidden;
        aspect-ratio: 16/10;
    }
    .card-media img {
        width: 100%; height: 100%; object-fit: cover; display: block;
        transition: transform .5s ease;
    }
    .program-card:hover .card-media img { transform: scale(1.06); }
    .card-media-overlay {
        position: absolute; inset: 0;
        background: linear-gradient(to top, rgba(15,14,13,.5) 0%, transparent 50%);
        opacity: 0; transition: opacity .3s;
    }
    .program-card:hover .card-media-overlay { opacity: 1; }
    .card-index {
        position: absolute; top: .9rem; left: .9rem;
        width: 32px; height: 32px; border-radius: 50%;
        background: rgba(15,14,13,.55); backdrop-filter: blur(6px);
        border: 1px solid rgba(255,255,255,.15);
        display: flex; align-items: center; justify-content: center;
        font-family: 'DM Mono', monospace, var(--sans);
        font-size: .68rem; color: rgba(255,255,255,.7);
    }

    /* body */
    .card-body {
        padding: 1.4rem 1.5rem 1.6rem;
        display: flex; flex-direction: column; flex: 1;
    }
    .card-title {
        font-family: var(--serif); font-size: 1.15rem; font-weight: 700;
        color: var(--ink); line-height: 1.3; margin-bottom: .75rem;
        transition: color .18s;
    }
    .program-card:hover .card-title { color: var(--accent); }
    .card-desc {
        font-family: var(--sans); font-size: .9rem;
        color: var(--ink-soft); line-height: 1.7;
        flex: 1; margin-bottom: 1.4rem;
        display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* CTA */
    .card-cta {
        display: inline-flex; align-items: center; gap: .5rem;
        padding: .6rem 1.1rem;
        background: var(--ink); color: #fff;
        border-radius: 6px;
        text-decoration: none;
        font-family: var(--sans); font-size: .85rem; font-weight: 600;
        align-self: flex-start;
        transition: background .22s, gap .22s;
    }
    .card-cta svg {
        transition: transform .22s;
        flex-shrink: 0;
    }
    .card-cta:hover {
        background: var(--accent);
        gap: .75rem;
    }
    .card-cta:hover svg { transform: translate(2px, -2px); }

    /* ── Empty state ── */
    .programs-empty {
        grid-column: 1 / -1;
        text-align: center; padding: 4rem 2rem;
        color: var(--ink-muted);
    }
    .programs-empty svg { opacity: .25; margin-bottom: 1rem; }
    .programs-empty p { font-size: 1rem; }
</style>

<!-- ── Hero ── -->
<div class="programs-hero">
    <div class="programs-hero-inner">
        <div class="programs-hero-text">
            <p class="hero-eyebrow"><span></span> Programs</p>
            <h1>Learn about <em>{{ $category->name }}</em></h1>
            <p class="hero-desc">
                Explore our curated programs designed to inform, empower, and inspire action around {{ $category->name }}.
            </p>
        </div>
        <div class="hero-stat-row">
            <div class="hero-stat">
                <div class="hero-stat-num">{{ $programs->count() }}</div>
                <div class="hero-stat-label">Programs</div>
            </div>
            <div class="hero-stat">
                <div class="hero-stat-num">{{ $category->name }}</div>
                <div class="hero-stat-label">Category</div>
            </div>
        </div>
    </div>
</div>

<!-- ── Breadcrumb / meta bar ── -->
<div class="programs-bar">
    <div class="programs-bar-inner">
        <nav class="bar-crumb" aria-label="Breadcrumb">
            <a href="/">Home</a> <span>›</span>
            <a href="/programs">Programs</a> <span>›</span>
            <span>{{ $category->name }}</span>
        </nav>
        <span class="bar-count">{{ $programs->count() }} {{ Str::plural('program', $programs->count()) }}</span>
    </div>
</div>

<!-- ── Programs grid ── -->
<section class="programs-section">
    <div class="programs-grid">
        @forelse($programs as $index => $program)
        <article class="program-card" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 80 }}">
            <div class="card-media">
                <img
                    src="{{ asset('image/program') }}/{{ $program->image }}"
                    alt="{{ $program->title }}"
                    width="1000" height="625" loading="lazy">
                <div class="card-media-overlay"></div>
                <span class="card-index">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
            </div>
            <div class="card-body">
                <h2 class="card-title">{{ $program->title }}</h2>
                <p class="card-desc">{{ $program->short_description }}</p>
                <a href="{{ route('programs.show', $program->slug) }}" class="card-cta" aria-label="Learn more about {{ $program->title }}">
                    Learn More
                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.336 7.845L6.164 15.017 4.986 13.84 12.158 6.667H5.837V5h9.166v9.167h-1.667V7.845Z" fill="currentColor"/>
                    </svg>
                </a>
            </div>
        </article>
        @empty
        <div class="programs-empty">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M9 9h6M9 13h4"/></svg>
            <p>No programs found in this category yet.</p>
        </div>
        @endforelse
    </div>
</section>

@endsection