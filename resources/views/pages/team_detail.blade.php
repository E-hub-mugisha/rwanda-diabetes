@extends('layouts.base')
@section('title', $member->name . ' — Team Member')
@section('content')

<style>
    /* ── Design tokens ──────────────────────────────────────────────── */
    :root {
        --td-bg:          #f7f6f3;
        --td-surface:     #ffffff;
        --td-ink:         #111111;
        --td-muted:       #6b6b6b;
        --td-faint:       #e8e6e1;
        --td-accent:      #c8873a;
        --td-accent-dark: #a36825;
        --td-radius:      20px;
        --td-shadow:      0 4px 24px rgba(0,0,0,.07), 0 1px 4px rgba(0,0,0,.05);
        --ease-expo:      cubic-bezier(0.16, 1, 0.3, 1);
    }

    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap');

    /* ── Page wrapper ───────────────────────────────────────────────── */
    .td-page {
        background: var(--td-bg);
        padding: 60px 0 100px;
        font-family: 'DM Sans', sans-serif;
        min-height: 100vh;
    }

    /* ── Breadcrumb nav ─────────────────────────────────────────────── */
    .td-nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 56px;
        flex-wrap: wrap;
        gap: 16px;
    }

    .td-breadcrumb {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 12px;
        font-weight: 500;
        letter-spacing: .10em;
        text-transform: uppercase;
        color: var(--td-muted);
        text-decoration: none;
    }

    .td-breadcrumb svg { opacity: .5; }

    .td-breadcrumb span { color: var(--td-ink); }

    .td-back-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        border-radius: 40px;
        border: 1.5px solid var(--td-faint);
        background: var(--td-surface);
        color: var(--td-ink);
        font-size: 13px;
        font-weight: 500;
        text-decoration: none;
        transition: border-color .2s ease, background .2s ease, transform .2s var(--ease-expo);
    }

    .td-back-btn:hover {
        border-color: var(--td-accent);
        color: var(--td-accent);
        transform: translateX(-3px);
    }

    /* ── Main hero grid ─────────────────────────────────────────────── */
    .td-hero {
        display: grid;
        grid-template-columns: 420px 1fr;
        gap: 64px;
        align-items: start;
        margin-bottom: 80px;
    }

    @media (max-width: 900px) {
        .td-hero { grid-template-columns: 1fr; gap: 40px; }
    }

    /* ── Photo column ───────────────────────────────────────────────── */
    .td-photo-col { position: relative; }

    .td-photo-frame {
        position: relative;
        border-radius: var(--td-radius);
        overflow: hidden;
        box-shadow: var(--td-shadow);
        background: #e5e3de;
    }

    .td-photo-frame::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(160deg, transparent 55%, rgba(10,8,5,.35) 100%);
        z-index: 1;
        pointer-events: none;
    }

    .td-photo-frame img {
        width: 100%;
        aspect-ratio: 4 / 5;
        object-fit: cover;
        display: block;
    }

    /* gold corner accent */
    .td-photo-frame::after {
        content: '';
        position: absolute;
        top: 20px; right: 20px;
        width: 48px; height: 48px;
        border-top: 2.5px solid var(--td-accent);
        border-right: 2.5px solid var(--td-accent);
        border-radius: 2px;
        z-index: 2;
        pointer-events: none;
    }

    /* department badge */
    .td-department-badge {
        position: absolute;
        bottom: -16px;
        left: 28px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        border-radius: 40px;
        background: var(--td-accent);
        color: #fff;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .09em;
        text-transform: uppercase;
        box-shadow: 0 4px 16px rgba(200,135,58,.35);
        z-index: 3;
    }

    .td-department-badge::before {
        content: '';
        display: block;
        width: 6px; height: 6px;
        background: rgba(255,255,255,.6);
        border-radius: 50%;
    }

    /* ── Info column ────────────────────────────────────────────────── */
    .td-info-col {
        padding-top: 8px;
    }

    .td-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-size: 11px;
        font-weight: 500;
        letter-spacing: .16em;
        text-transform: uppercase;
        color: var(--td-accent);
        margin-bottom: 18px;
    }

    .td-eyebrow::before {
        content: '';
        display: block;
        width: 28px; height: 1.5px;
        background: var(--td-accent);
    }

    .td-name {
        font-family: 'Cormorant Garamond', serif;
        font-size: clamp(38px, 4.5vw, 62px);
        font-weight: 300;
        line-height: 1.06;
        letter-spacing: -.025em;
        color: var(--td-ink);
        margin: 0 0 10px;
    }

    .td-name em {
        font-style: italic;
        color: var(--td-accent);
    }

    .td-position {
        font-family: 'DM Sans', sans-serif;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--td-muted);
        margin-bottom: 36px;
        padding-bottom: 32px;
        border-bottom: 1px solid var(--td-faint);
    }

    /* ── Contact rows ───────────────────────────────────────────────── */
    .td-contact-list {
        list-style: none;
        padding: 0;
        margin: 0 0 36px;
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .td-contact-item {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .td-contact-icon {
        width: 40px; height: 40px;
        border-radius: 10px;
        background: var(--td-faint);
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
        color: var(--td-accent);
    }

    .td-contact-label {
        font-size: 11px;
        font-weight: 500;
        letter-spacing: .10em;
        text-transform: uppercase;
        color: var(--td-muted);
        display: block;
        margin-bottom: 1px;
    }

    .td-contact-value {
        font-size: 15px;
        font-weight: 400;
        color: var(--td-ink);
        text-decoration: none;
        transition: color .2s ease;
    }

    .td-contact-value:hover { color: var(--td-accent); }

    /* ── Social row ─────────────────────────────────────────────────── */
    .td-socials-label {
        font-size: 11px;
        font-weight: 500;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--td-muted);
        margin-bottom: 12px;
    }

    .td-socials {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .td-social-btn {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 9px 18px;
        border-radius: 40px;
        border: 1.5px solid var(--td-faint);
        background: var(--td-surface);
        color: var(--td-ink);
        font-size: 13px;
        font-weight: 500;
        text-decoration: none;
        transition: border-color .2s ease, background .2s ease, color .2s ease, transform .2s var(--ease-expo);
    }

    .td-social-btn:hover {
        border-color: var(--td-accent);
        background: var(--td-accent);
        color: #ffffff;
        transform: translateY(-2px);
    }

    .td-social-btn svg { flex-shrink: 0; }

    /* ── Bio section ────────────────────────────────────────────────── */
    .td-bio {
        background: var(--td-surface);
        border-radius: var(--td-radius);
        padding: 52px 56px;
        box-shadow: var(--td-shadow);
        position: relative;
        overflow: hidden;
    }

    .td-bio::before {
        content: '"';
        position: absolute;
        top: -10px; left: 40px;
        font-family: 'Cormorant Garamond', serif;
        font-size: 180px;
        font-weight: 300;
        line-height: 1;
        color: var(--td-accent);
        opacity: .08;
        pointer-events: none;
        user-select: none;
    }

    .td-bio__header {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 28px;
    }

    .td-bio__title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 28px;
        font-weight: 400;
        color: var(--td-ink);
        margin: 0;
    }

    .td-bio__title em { font-style: italic; color: var(--td-accent); }

    .td-bio__divider {
        flex: 1;
        height: 1px;
        background: linear-gradient(to right, var(--td-faint), transparent);
    }

    .td-bio__body {
        font-size: 16px;
        line-height: 1.85;
        color: #444444;
        font-weight: 300;
        max-width: 720px;
    }

    .td-bio__body p { margin-bottom: 1.2em; }
    .td-bio__body p:last-child { margin-bottom: 0; }

    @media (max-width: 600px) {
        .td-bio { padding: 32px 24px; }
    }

    /* ── Entrance animations ─────────────────────────────────────────── */
    .td-anim {
        opacity: 0;
        animation: tdFadeUp .65s var(--ease-expo) forwards;
    }

    @keyframes tdFadeUp {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .td-anim-1 { animation-delay: .05s; }
    .td-anim-2 { animation-delay: .15s; }
    .td-anim-3 { animation-delay: .25s; }
    .td-anim-4 { animation-delay: .35s; }
    .td-anim-5 { animation-delay: .45s; }
</style>

<section class="td-page">
    <div class="container">

        {{-- ── Top nav ─────────────────────────────────────────────── --}}
        <div class="td-nav td-anim td-anim-1">
            <span class="td-breadcrumb">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                <span>People</span>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span>{{ $member->name }}</span>
            </span>

            <a href="{{ route('our-team') }}" class="td-back-btn">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M5 12l7 7M5 12l7-7"/></svg>
                All members
            </a>
        </div>

        {{-- ── Hero grid ───────────────────────────────────────────── --}}
        <div class="td-hero">

            {{-- Photo --}}
            <div class="td-photo-col td-anim td-anim-2">
                <div class="td-photo-frame">
                    <img src="{{ asset('image/teams') }}/{{ $member->photo }}"
                         alt="{{ $member->name }}"
                         width="1000" height="1133"
                         loading="lazy">
                </div>
                <span class="td-department-badge">{{ $member->position }}</span>
            </div>

            {{-- Info --}}
            <div class="td-info-col">

                <div class="td-anim td-anim-2">
                    <span class="td-eyebrow">Team Member</span>
                    <h1 class="td-name">{{ $member->name }}</h1>
                    <p class="td-position">{{ $member->position }}</p>
                </div>

                {{-- Contact details --}}
                @if($member->phone || $member->email)
                <ul class="td-contact-list td-anim td-anim-3">

                    @if($member->phone)
                    <li class="td-contact-item">
                        <span class="td-contact-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.17h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.74a16 16 0 0 0 6 6l1.87-1.87a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </span>
                        <div>
                            <span class="td-contact-label">Phone</span>
                            <a href="tel:{{ $member->phone }}" class="td-contact-value">{{ $member->phone }}</a>
                        </div>
                    </li>
                    @endif

                    @if($member->email)
                    <li class="td-contact-item">
                        <span class="td-contact-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 7 10-7"/></svg>
                        </span>
                        <div>
                            <span class="td-contact-label">Email</span>
                            <a href="mailto:{{ $member->email }}" class="td-contact-value">{{ $member->email }}</a>
                        </div>
                    </li>
                    @endif

                </ul>
                @endif

                {{-- Social links --}}
                @if($member->facebook || $member->linkedin || $member->twitter || $member->instagram)
                <div class="td-anim td-anim-4">
                    <p class="td-socials-label">Connect</p>
                    <div class="td-socials">

                        @if($member->facebook)
                        <a href="{{ $member->facebook }}" target="_blank" rel="noopener" class="td-social-btn">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                            Facebook
                        </a>
                        @endif

                        @if($member->linkedin)
                        <a href="{{ $member->linkedin }}" target="_blank" rel="noopener" class="td-social-btn">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
                            LinkedIn
                        </a>
                        @endif

                        @if($member->twitter)
                        <a href="{{ $member->twitter }}" target="_blank" rel="noopener" class="td-social-btn">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.26 5.632 5.905-5.632zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            X / Twitter
                        </a>
                        @endif

                        @if($member->instagram)
                        <a href="{{ $member->instagram }}" target="_blank" rel="noopener" class="td-social-btn">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="5"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
                            Instagram
                        </a>
                        @endif

                    </div>
                </div>
                @endif

            </div>
        </div>

        {{-- ── Bio card ─────────────────────────────────────────────── --}}
        @if($member->bio)
        <div class="td-bio td-anim td-anim-5">
            <div class="td-bio__header">
                <h2 class="td-bio__title">About <em>{{ explode(' ', $member->name)[0] }}</em></h2>
                <div class="td-bio__divider"></div>
            </div>
            <div class="td-bio__body">
                {!! $member->bio !!}
            </div>
        </div>
        @endif

    </div>
</section>

@endsection