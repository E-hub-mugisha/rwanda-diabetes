@extends('layouts.base')
@section('title', $new->title)
@section('content')

<style>
    /* ── Design tokens ── */
    :root {
        --ink:       #0f0e0d;
        --ink-soft:  #4a4540;
        --ink-muted: #8a847c;
        --paper:     #faf9f6;
        --cream:     #f2efe8;
        --accent:    #c8522a;
        --accent-lt: #f0e0d8;
        --rule:      #e3ddd5;
        --serif:     'Playfair Display', Georgia, serif;
        --sans:      'DM Sans', system-ui, sans-serif;
        --mono:      'DM Mono', monospace;
        --radius:    4px;
        --shadow:    0 2px 24px rgba(15,14,13,.07);
        --shadow-md: 0 8px 40px rgba(15,14,13,.12);
    }

    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap');

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    body { background: var(--paper); color: var(--ink); font-family: var(--sans); }

    /* ── Page Banner ── */
    .page-banner {
        position: relative;
        height: 400px;
        display: flex;
        align-items: flex-end;
        overflow: hidden;
    }
    .page-banner .media-bg {
        position: absolute; inset: 0; width: 100%; height: 100%; display: block;
    }
    .page-banner .media-bg img {
        width: 100%; height: 100%; object-fit: cover;
        filter: brightness(.55) saturate(.8);
    }
    .page-banner::after {
        content: '';
        position: absolute; inset: 0;
        background: linear-gradient(to top, rgba(15,14,13,.72) 0%, transparent 55%);
    }
    .banner-content {
        position: relative; z-index: 2;
        width: 100%; padding: 0 clamp(1.5rem, 5vw, 6rem) 3rem;
    }
    .banner-eyebrow {
        display: flex; align-items: center; gap: .6rem;
        font-family: var(--mono); font-size: .72rem; letter-spacing: .12em;
        text-transform: uppercase; color: rgba(255,255,255,.55);
        margin-bottom: 1rem;
    }
    .banner-eyebrow span { color: var(--accent); }
    .banner-eyebrow svg { opacity: .5; }
    .banner-title {
        font-family: var(--serif); font-size: clamp(1.8rem, 4.5vw, 3rem);
        font-weight: 700; color: #fff;
        line-height: 1.18; max-width: 780px;
        text-shadow: 0 2px 20px rgba(0,0,0,.3);
    }

    /* ── Layout wrapper ── */
    .article-layout {
        display: grid;
        grid-template-columns: 1fr 340px;
        gap: 3rem;
        max-width: 1200px;
        margin: 0 auto;
        padding: 3.5rem clamp(1rem, 4vw, 2.5rem) 5rem;
        align-items: start;
    }
    @media (max-width: 1024px) {
        .article-layout { grid-template-columns: 1fr; }
    }

    /* ── Main article ── */
    .article-main {}

    .article-hero {
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 2.5rem;
        box-shadow: var(--shadow-md);
        aspect-ratio: 16/9;
    }
    .article-hero img {
        width: 100%; height: 100%; object-fit: cover;
        display: block;
        transition: transform .6s ease;
    }
    .article-hero:hover img { transform: scale(1.02); }

    .article-meta {
        display: flex; flex-wrap: wrap; gap: .5rem 1.5rem;
        align-items: center; margin-bottom: 1.5rem;
        padding-bottom: 1.5rem;
        border-bottom: 1px solid var(--rule);
    }
    .meta-chip {
        display: flex; align-items: center; gap: .4rem;
        font-family: var(--sans); font-size: .82rem; font-weight: 500;
        color: var(--ink-soft);
    }
    .meta-chip svg { color: var(--accent); flex-shrink: 0; }
    .meta-chip.category {
        background: var(--accent-lt); color: var(--accent);
        padding: .25rem .7rem; border-radius: 100px;
        font-weight: 600; font-size: .75rem; letter-spacing: .05em;
        text-transform: uppercase;
    }

    .article-title {
        font-family: var(--serif); font-size: clamp(1.6rem, 3.5vw, 2.4rem);
        font-weight: 700; color: var(--ink); line-height: 1.25;
        margin-bottom: 1.25rem;
    }

    .article-excerpt {
        font-size: 1.1rem; font-weight: 500; color: var(--ink-soft);
        line-height: 1.7; margin-bottom: 2rem;
        padding-left: 1.2rem;
        border-left: 3px solid var(--accent);
    }

    .article-body {
        font-size: 1rem; line-height: 1.85; color: var(--ink-soft);
    }
    .article-body p { margin-bottom: 1.4rem; }
    .article-body h2, .article-body h3 {
        font-family: var(--serif); color: var(--ink); margin: 2rem 0 .75rem;
    }
    .article-body a { color: var(--accent); text-decoration: underline; text-decoration-color: transparent; transition: text-decoration-color .2s; }
    .article-body a:hover { text-decoration-color: var(--accent); }
    .article-body blockquote {
        border-left: 3px solid var(--accent);
        padding: .75rem 1.25rem; margin: 1.5rem 0;
        background: var(--cream); border-radius: 0 var(--radius) var(--radius) 0;
        font-style: italic; color: var(--ink-soft);
    }

    /* ── Tags & Share ── */
    .article-footer {
        margin-top: 3rem; padding-top: 2rem;
        border-top: 1px solid var(--rule);
        display: flex; flex-wrap: wrap; gap: 1.5rem;
        justify-content: space-between; align-items: center;
    }
    .footer-tags { display: flex; flex-wrap: wrap; gap: .5rem; align-items: center; }
    .footer-tags-label {
        font-family: var(--mono); font-size: .72rem; letter-spacing: .1em;
        text-transform: uppercase; color: var(--ink-muted); margin-right: .25rem;
    }
    .tag-pill {
        display: inline-block;
        padding: .3rem .8rem;
        background: var(--cream); border: 1px solid var(--rule);
        border-radius: 100px;
        font-size: .8rem; font-weight: 500; color: var(--ink-soft);
        text-decoration: none;
        transition: background .2s, border-color .2s, color .2s;
    }
    .tag-pill:hover { background: var(--accent-lt); border-color: var(--accent); color: var(--accent); }

    .share-group { display: flex; align-items: center; gap: .75rem; }
    .share-label {
        font-family: var(--mono); font-size: .72rem; letter-spacing: .1em;
        text-transform: uppercase; color: var(--ink-muted);
    }
    .share-btn {
        width: 38px; height: 38px; border-radius: 50%;
        border: 1px solid var(--rule); background: #fff;
        display: flex; align-items: center; justify-content: center;
        color: var(--ink-soft); text-decoration: none;
        transition: background .2s, border-color .2s, color .2s, transform .2s;
        box-shadow: 0 1px 4px rgba(0,0,0,.06);
    }
    .share-btn:hover {
        background: var(--accent); border-color: var(--accent); color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(200,82,42,.25);
    }

    /* ── Sidebar ── */
    .article-sidebar { position: sticky; top: 2rem; }

    .sidebar-card {
        background: #fff; border: 1px solid var(--rule);
        border-radius: 8px; overflow: hidden;
        box-shadow: var(--shadow);
        margin-bottom: 1.75rem;
    }
    .sidebar-card-header {
        padding: 1rem 1.4rem .85rem;
        border-bottom: 1px solid var(--rule);
        display: flex; align-items: center; gap: .6rem;
    }
    .sidebar-card-header h3 {
        font-family: var(--mono); font-size: .72rem; letter-spacing: .12em;
        text-transform: uppercase; color: var(--ink-muted); font-weight: 500;
    }
    .sidebar-card-header .accent-dot {
        width: 6px; height: 6px; border-radius: 50%; background: var(--accent); flex-shrink: 0;
    }

    /* Related posts */
    .related-post {
        display: flex; gap: 1rem; padding: 1rem 1.4rem;
        border-bottom: 1px solid var(--rule); text-decoration: none;
        transition: background .18s;
    }
    .related-post:last-child { border-bottom: none; }
    .related-post:hover { background: var(--cream); }
    .related-post-thumb {
        width: 72px; height: 60px; border-radius: var(--radius);
        overflow: hidden; flex-shrink: 0;
    }
    .related-post-thumb img {
        width: 100%; height: 100%; object-fit: cover;
        display: block; transition: transform .3s;
    }
    .related-post:hover .related-post-thumb img { transform: scale(1.07); }
    .related-post-body { flex: 1; min-width: 0; }
    .related-post-date {
        font-size: .72rem; color: var(--ink-muted); margin-bottom: .3rem;
        font-family: var(--mono);
    }
    .related-post-title {
        font-family: var(--serif); font-size: .93rem; font-weight: 600;
        color: var(--ink); line-height: 1.35;
        display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .related-post:hover .related-post-title { color: var(--accent); }

    /* Author card */
    .author-card-body { padding: 1.25rem 1.4rem; }
    .author-avatar-row { display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem; }
    .author-avatar {
        width: 52px; height: 52px; border-radius: 50%;
        background: var(--accent-lt); display: flex; align-items: center; justify-content: center;
        font-family: var(--serif); font-size: 1.3rem; font-weight: 700; color: var(--accent);
        flex-shrink: 0; border: 2px solid var(--accent-lt);
    }
    .author-name { font-family: var(--serif); font-size: 1rem; font-weight: 700; color: var(--ink); }
    .author-role { font-size: .78rem; color: var(--ink-muted); margin-top: .1rem; }
    .author-bio { font-size: .85rem; color: var(--ink-soft); line-height: 1.65; }

    /* Tags sidebar */
    .tags-sidebar-body { padding: 1rem 1.4rem 1.25rem; }
    .tags-cloud { display: flex; flex-wrap: wrap; gap: .45rem; }

    /* TOC */
    .toc-body { padding: 1rem 1.4rem 1.25rem; }
    .toc-list { list-style: none; }
    .toc-list li { border-bottom: 1px solid var(--rule); }
    .toc-list li:last-child { border-bottom: none; }
    .toc-list a {
        display: flex; align-items: center; gap: .5rem;
        padding: .5rem 0; text-decoration: none;
        font-size: .85rem; color: var(--ink-soft);
        transition: color .18s, padding-left .18s;
    }
    .toc-list a::before {
        content: ''; display: inline-block;
        width: 4px; height: 4px; border-radius: 50%;
        background: var(--rule); flex-shrink: 0;
        transition: background .18s;
    }
    .toc-list a:hover { color: var(--accent); padding-left: .4rem; }
    .toc-list a:hover::before { background: var(--accent); }

    /* ── Reading progress bar ── */
    #reading-progress {
        position: fixed; top: 0; left: 0; right: 0; height: 3px;
        background: linear-gradient(90deg, var(--accent), #e8854f);
        transform-origin: left; transform: scaleX(0);
        z-index: 9999; transition: transform .1s linear;
    }

    /* ── Breadcrumb ── */
    .breadcrumb-bar {
        background: var(--cream); border-bottom: 1px solid var(--rule);
        padding: .7rem clamp(1rem, 4vw, 2.5rem);
    }
    .breadcrumb-inner {
        max-width: 1200px; margin: 0 auto;
        display: flex; align-items: center; gap: .5rem;
        font-size: .8rem; color: var(--ink-muted);
    }
    .breadcrumb-inner a { color: var(--ink-soft); text-decoration: none; transition: color .18s; }
    .breadcrumb-inner a:hover { color: var(--accent); }
    .breadcrumb-inner .sep { color: var(--rule); }
    .breadcrumb-inner .current { color: var(--ink); font-weight: 500; }

    /* ── Responsive ── */
    @media (max-width: 640px) {
        .article-footer { flex-direction: column; align-items: flex-start; }
    }
</style>

<!-- Reading progress bar -->
<div id="reading-progress"></div>

<!-- Page Banner -->
<div class="page-banner">
    <picture class="media media-bg">
        <source media="(max-width: 575px)" srcset="assets/img/banner/page-banner-575.jpg">
        <source media="(max-width: 991px)" srcset="assets/img/banner/page-banner-991.jpg">
        <img src="assets/img/banner/page-banner.jpg" width="1920" height="520" loading="eager" alt="">
    </picture>
    <div class="banner-content">
        <p class="banner-eyebrow">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5.5" stroke="currentColor"/></svg>
            <a href="/" style="color:inherit;text-decoration:none;">Home</a>
            <span>›</span>
            <span>Blog</span>
            <span>›</span>
            <span style="color:rgba(255,255,255,.75);">Article</span>
        </p>
        <h1 class="banner-title">{{ $new->title }}</h1>
    </div>
</div>

<!-- Breadcrumb bar -->
<div class="breadcrumb-bar">
    <div class="breadcrumb-inner">
        <a href="/">Home</a>
        <span class="sep">›</span>
        <a href="/blog">Blog</a>
        <span class="sep">›</span>
        <span class="current">{{ Str::limit($new->title, 55) }}</span>
    </div>
</div>

<!-- Main layout -->
<div class="article-layout">

    <!-- ── Left: Article content ── -->
    <main class="article-main" id="article-body">

        <!-- Hero image -->
        <div class="article-hero">
            <img
                src="{{ asset('image/posts') }}/{{ $new->featured_image }}"
                alt="{{ $new->title }}"
                width="1000" height="562" loading="lazy">
        </div>

        <!-- Meta row -->
        <div class="article-meta">
            @if($new->category ?? null)
            <span class="meta-chip category">{{ $new->category }}</span>
            @endif
            <span class="meta-chip">
                <svg width="15" height="15" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.001 0.65C11.499 0.65 13.544 2.694 13.544 5.192C13.544 7.69 11.499 9.735 9.001 9.735C6.503 9.735 4.459 7.69 4.459 5.192C4.459 2.694 6.503 0.65 9.001 0.65Z" stroke="currentColor" stroke-width="1.3"/><path d="M5.204 11.409C6.416 12.24 7.686 12.646 9 12.646C10.314 12.646 11.583 12.24 12.655 11.453C14.469 11.645 15.912 12.559 16.852 13.948C16.476 14.478 16.073 14.953 15.729 15.594C14.079 16.692 12.061 17.35 8.977 17.35C5.897 17.35 3.885 16.694 2.21 15.447C1.699 14.789 1.248 14.16 0.944 15.07L0.712 14.718C0.836 14.457 0.982 14.185 1.143 13.953C2.068 12.557 3.536 11.64 5.165 11.416L5.204 11.409Z" stroke="currentColor" stroke-width="1.3"/></svg>
                {{ $new->author->name }}
            </span>
            <span class="meta-chip">
                <svg width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="2.5" width="16" height="14" rx="2" stroke="currentColor" stroke-width="1.3"/><path d="M1 7h16" stroke="currentColor" stroke-width="1.3"/><path d="M5 1v3M13 1v3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
                {{ $new->created_at->format('F d, Y') }}
            </span>
            <span class="meta-chip" style="margin-left:auto;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                {{ ceil(str_word_count(strip_tags($new->content)) / 200) }} min read
            </span>
        </div>

        <!-- Title -->
        <h1 class="article-title">{{ $new->title }}</h1>

        <!-- Excerpt / pull quote -->
        @if($new->excerpt)
        <p class="article-excerpt">{{ $new->excerpt }}</p>
        @endif

        <!-- Body content -->
        <div class="article-body">
            {!! $new->content !!}
        </div>

        <!-- Footer: tags + share -->
        <div class="article-footer">
            <div class="footer-tags">
                <span class="footer-tags-label">Tags</span>
                @php
                    $tags = is_array($new->tags)
                        ? $new->tags
                        : explode(',', $new->tags ?? '');
                @endphp
                @foreach($tags as $tag)
                    @php $tag = trim($tag); @endphp
                    @if($tag)
                        <a href="#" class="tag-pill" aria-label="Tag: {{ $tag }}">{{ $tag }}</a>
                    @endif
                @endforeach
            </div>

            <div class="share-group">
                <span class="share-label">Share</span>
                <a class="share-btn" href="https://web.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" rel="noopener" aria-label="Share on Facebook">
                    <svg width="9" height="16" viewBox="0 0 10 18" fill="currentColor"><path d="M6.666 10.255H8.75l.833-3.333H6.666V5.255C6.666 4.397 6.666 3.588 8.333 3.588H9.583V.789C9.312.752 8.286.672 7.202.672 4.94.672 3.333 2.053 3.333 4.588V6.922H.833v3.333h2.5v7.083h3.333v-7.083Z"/></svg>
                </a>
                <a class="share-btn" href="https://www.linkedin.com/shareArticle?url={{ urlencode(request()->url()) }}" target="_blank" rel="noopener" aria-label="Share on LinkedIn">
                    <svg width="15" height="14" viewBox="0 0 17 16" fill="currentColor"><path d="M3.784 2.167C3.784 2.846 3.372 3.456 2.743 3.711 2.114 3.966 1.393 3.814.921 3.327.448 2.84.318 2.115.592 1.494.866.873 1.489.48 2.167.501c.9.027 1.617.765 1.617 1.666ZM3.834 5.067H.5V15.5h3.333V5.067ZM9.1 5.067H5.784V15.5h3.283v-5.475c0-3.05 3.975-3.333 3.975 0V15.5h3.292V8.892C16.334 3.75 10.45 3.942 9.067 6.467L9.1 5.067Z"/></svg>
                </a>
                <a class="share-btn" href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($new->title) }}" target="_blank" rel="noopener" aria-label="Share on X / Twitter">
                    <svg width="16" height="12" viewBox="0 0 18 14" fill="currentColor"><path d="M17.51 1.713A8.33 8.33 0 0 1 15.509 2.26 4.166 4.166 0 0 0 17.04.333a8.33 8.33 0 0 1-2.64 1.009 4.157 4.157 0 0 0-7.084 3.79A11.8 11.8 0 0 1 1.706.716a4.157 4.157 0 0 0 1.286 5.548 4.14 4.14 0 0 1-1.882-.52v.053a4.158 4.158 0 0 0 3.333 4.073 4.17 4.17 0 0 1-1.877.071 4.158 4.158 0 0 0 3.882 2.887A8.339 8.339 0 0 1 .524 14.389 11.76 11.76 0 0 0 6.865 16.5a11.76 11.76 0 0 0 11.847-11.97c0-.18-.004-.36-.012-.537A8.46 8.46 0 0 0 20.8 2C20.116 2.3 19.386 2.5 18.617 2.6A4.17 4.17 0 0 0 17.51 1.713Z"/></svg>
                </a>
                <a class="share-btn" href="https://www.instagram.com/" target="_blank" rel="noopener" aria-label="Share on Instagram">
                    <svg width="16" height="16" viewBox="0 0 18 18" fill="currentColor"><path d="M9.857.672c.938.002 1.413.007 1.824.02l.161.005c.187.007.371.015.593.025.887.041 1.492.181 2.023.387.55.212 1.013.498 1.477.961.462.463.748.927.961 1.476.206.53.346 1.136.387 2.023.01.222.018.406.024.593l.005.162c.012.41.018.885.019 1.822l.001.622-.001.847v.234l-.001.622-.001.622c-.002.937-.007 1.412-.02 1.822l-.005.162c-.007.187-.015.371-.025.593-.041.887-.181 1.492-.387 2.023a3.99 3.99 0 0 1-.961 1.476 3.99 3.99 0 0 1-1.477.961c-.531.206-1.136.346-2.023.387-.222.01-.406.018-.593.024l-.161.005c-.411.012-.886.018-1.824.019l-.621.001h-.47l-.622-.001-.622-.001c-.937-.002-1.412-.007-1.822-.02l-.162-.005c-.187-.007-.371-.015-.593-.025-.887-.041-1.492-.181-2.023-.387a3.99 3.99 0 0 1-1.476-.961A3.99 3.99 0 0 1 1.1 14.463c-.206-.531-.346-1.136-.387-2.023a48.3 48.3 0 0 1-.024-.593l-.006-.162C.671 11.275.667 10.8.666 9.862L.666 8.145c.002-.937.007-1.412.02-1.822l.005-.162C.698 5.974.706 5.79.717 5.568c.04-.887.181-1.492.387-2.023.212-.549.498-1.013.96-1.476.463-.463.928-.749 1.477-.961.53-.206 1.136-.346 2.023-.387.222-.01.406-.018.593-.025l.162-.005C6.73.679 7.206.673 8.143.671L9.857.672ZM9 4.838a4.167 4.167 0 1 0 0 8.333A4.167 4.167 0 0 0 9 4.838ZM9 6.505a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5Zm4.375-3.084a.833.833 0 1 0 0 1.667.833.833 0 0 0 0-1.667Z"/></svg>
                </a>
            </div>
        </div>
    </main>

    <!-- ── Right: Sidebar ── -->
    <aside class="article-sidebar">

        <!-- Author card -->
        <div class="sidebar-card">
            <div class="sidebar-card-header">
                <span class="accent-dot"></span>
                <h3>About the Author</h3>
            </div>
            <div class="author-card-body">
                <div class="author-avatar-row">
                    <div class="author-avatar">{{ strtoupper(substr($new->author->name, 0, 1)) }}</div>
                    <div>
                        <div class="author-name">{{ $new->author->name }}</div>
                        <div class="author-role">Staff Writer</div>
                    </div>
                </div>
                <p class="author-bio">Expert contributor covering the latest insights and trends. Passionate about sharing knowledge and actionable perspectives.</p>
            </div>
        </div>

        <!-- Related posts -->
        @if(isset($relatedPosts) && $relatedPosts->count())
        <div class="sidebar-card">
            <div class="sidebar-card-header">
                <span class="accent-dot"></span>
                <h3>Related Articles</h3>
            </div>
            @foreach($relatedPosts as $related)
            <a href="/news/{{ $related->slug ?? $related->id }}" class="related-post">
                <div class="related-post-thumb">
                    <img src="{{ asset('image/posts') }}/{{ $related->featured_image }}"
                         alt="{{ $related->title }}" loading="lazy">
                </div>
                <div class="related-post-body">
                    <div class="related-post-date">{{ $related->created_at->format('M d, Y') }}</div>
                    <div class="related-post-title">{{ $related->title }}</div>
                </div>
            </a>
            @endforeach
        </div>
        @else
        {{-- Fallback: static placeholder cards shown when no related posts injected --}}
        <div class="sidebar-card">
            <div class="sidebar-card-header">
                <span class="accent-dot"></span>
                <h3>Related Articles</h3>
            </div>
            <div style="padding:1.25rem 1.4rem; color:var(--ink-muted); font-size:.85rem;">
                No related articles at the moment.
            </div>
        </div>
        @endif

        <!-- Tags cloud -->
        @if(isset($allTags) && count($allTags))
        <div class="sidebar-card">
            <div class="sidebar-card-header">
                <span class="accent-dot"></span>
                <h3>Popular Tags</h3>
            </div>
            <div class="tags-sidebar-body">
                <div class="tags-cloud">
                    @foreach($allTags as $t)
                    <a href="#" class="tag-pill">{{ trim($t) }}</a>
                    @endforeach
                </div>
            </div>
        </div>
        @else
        {{-- Fallback: current post tags --}}
        <div class="sidebar-card">
            <div class="sidebar-card-header">
                <span class="accent-dot"></span>
                <h3>Tags</h3>
            </div>
            <div class="tags-sidebar-body">
                <div class="tags-cloud">
                    @php
                        $tags = is_array($new->tags)
                            ? $new->tags
                            : explode(',', $new->tags ?? '');
                    @endphp
                    @foreach($tags as $tag)
                        @php $tag = trim($tag); @endphp
                        @if($tag)
                            <a href="#" class="tag-pill">{{ $tag }}</a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        <!-- Newsletter CTA -->
        <div class="sidebar-card" style="background: linear-gradient(135deg, var(--ink) 0%, #2a2320 100%); border-color: transparent;">
            <div style="padding: 1.5rem 1.4rem; text-align:center;">
                <div style="width:40px;height:40px;background:var(--accent);border-radius:50%;margin:0 auto 1rem;display:flex;align-items:center;justify-content:center;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </div>
                <h4 style="font-family:var(--serif);color:#fff;font-size:1.05rem;margin-bottom:.5rem;">Stay in the Loop</h4>
                <p style="font-size:.82rem;color:rgba(255,255,255,.6);line-height:1.6;margin-bottom:1.1rem;">Get the latest articles delivered to your inbox weekly.</p>
                <input type="email" placeholder="Your email address"
                    style="width:100%;padding:.6rem .9rem;border-radius:var(--radius);border:1px solid rgba(255,255,255,.12);background:rgba(255,255,255,.07);color:#fff;font-size:.85rem;margin-bottom:.6rem;outline:none;"
                    onfocus="this.style.borderColor='var(--accent)'" onblur="this.style.borderColor='rgba(255,255,255,.12)'">
                <button style="width:100%;padding:.65rem;background:var(--accent);color:#fff;border:none;border-radius:var(--radius);font-weight:600;font-size:.85rem;cursor:pointer;transition:opacity .2s;" onmouseover="this.style.opacity='.85'" onmouseout="this.style.opacity='1'">Subscribe</button>
            </div>
        </div>

    </aside>
</div>

<script>
    // Reading progress bar
    (function () {
        const bar = document.getElementById('reading-progress');
        const body = document.getElementById('article-body');
        if (!bar || !body) return;
        function update() {
            const rect = body.getBoundingClientRect();
            const total = rect.height - window.innerHeight;
            const progress = Math.min(1, Math.max(0, -rect.top / total));
            bar.style.transform = 'scaleX(' + progress + ')';
        }
        window.addEventListener('scroll', update, { passive: true });
        update();
    })();
</script>

@endsection