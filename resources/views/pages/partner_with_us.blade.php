@extends('layouts.base')
@section('title', 'Partner With Us — Rwanda Diabetes Organization')
@section('content')

<style>
    /* ── Design tokens ──────────────────────────────────────────────── */
    :root {
        --pw-bg:          #f5f7fa;
        --pw-surface:     #ffffff;
        --pw-ink:         #0d1b2a;
        --pw-muted:       #5a6a7a;
        --pw-faint:       #e4eaf1;
        --pw-accent:      #1a6eb5;      /* medical blue                  */
        --pw-accent-2:    #e8f1fb;      /* light tint                    */
        --pw-green:       #14875a;      /* life / health green           */
        --pw-green-tint:  #e8f6f1;
        --pw-radius:      18px;
        --pw-radius-sm:   10px;
        --pw-shadow:      0 2px 16px rgba(13,27,42,.07), 0 1px 3px rgba(13,27,42,.04);
        --pw-shadow-lg:   0 8px 40px rgba(13,27,42,.11), 0 2px 8px rgba(13,27,42,.05);
        --ease-expo:      cubic-bezier(0.16, 1, 0.3, 1);
    }

    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&display=swap');

    body { font-family: 'DM Sans', sans-serif; }

    /* ── Shared helpers ─────────────────────────────────────────────── */
    .pw-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: .18em;
        text-transform: uppercase;
        color: var(--pw-accent);
        margin-bottom: 16px;
    }

    .pw-eyebrow::before {
        content: '';
        display: block;
        width: 24px; height: 2px;
        background: var(--pw-accent);
        border-radius: 2px;
    }

    .pw-section-title {
        font-family: 'Playfair Display', serif;
        font-size: clamp(28px, 3.5vw, 44px);
        font-weight: 700;
        line-height: 1.15;
        color: var(--pw-ink);
        margin: 0 0 16px;
        letter-spacing: -.02em;
    }

    .pw-section-title em {
        font-style: italic;
        color: var(--pw-accent);
    }

    .pw-body {
        font-size: 16px;
        line-height: 1.8;
        color: var(--pw-muted);
        font-weight: 300;
    }

    /* ── Buttons ────────────────────────────────────────────────────── */
    .pw-btn {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 13px 26px;
        border-radius: 40px;
        font-size: 14px;
        font-weight: 500;
        text-decoration: none;
        cursor: pointer;
        transition: transform .25s var(--ease-expo), box-shadow .25s ease, background .2s ease, border-color .2s ease;
        border: 1.5px solid transparent;
    }

    .pw-btn:hover { transform: translateY(-2px); }

    .pw-btn--primary {
        background: var(--pw-accent);
        color: #fff;
        box-shadow: 0 4px 16px rgba(26,110,181,.30);
    }

    .pw-btn--primary:hover {
        background: #155c9e;
        box-shadow: 0 8px 24px rgba(26,110,181,.40);
        color: #fff;
    }

    .pw-btn--outline {
        background: transparent;
        border-color: var(--pw-faint);
        color: var(--pw-ink);
    }

    .pw-btn--outline:hover {
        border-color: var(--pw-accent);
        color: var(--pw-accent);
    }

    .pw-btn--ghost {
        background: rgba(255,255,255,.12);
        border-color: rgba(255,255,255,.30);
        color: #fff;
        backdrop-filter: blur(8px);
    }

    .pw-btn--ghost:hover {
        background: rgba(255,255,255,.22);
        color: #fff;
    }

    .pw-btn svg { flex-shrink: 0; }

    /* ════════════════════════════════════════════════════════════════
       1. HERO
    ════════════════════════════════════════════════════════════════ */
    .pw-hero {
        position: relative;
        background: linear-gradient(135deg, #0d1b2a 0%, #1a3a5c 55%, #1a6eb5 100%);
        overflow: hidden;
        padding: 110px 0 90px;
    }

    /* background pattern */
    .pw-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image:
            radial-gradient(circle at 75% 30%, rgba(26,110,181,.45) 0%, transparent 55%),
            radial-gradient(circle at 20% 80%, rgba(20,135,90,.25) 0%, transparent 45%);
        pointer-events: none;
    }

    .pw-hero__grid {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 40px;
        align-items: center;
    }

    @media (max-width: 768px) {
        .pw-hero__grid { grid-template-columns: 1fr; }
    }

    .pw-hero__badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 14px;
        border-radius: 40px;
        background: rgba(255,255,255,.12);
        border: 1px solid rgba(255,255,255,.20);
        color: rgba(255,255,255,.85);
        font-size: 12px;
        font-weight: 500;
        letter-spacing: .08em;
        margin-bottom: 24px;
    }

    .pw-hero__badge-dot {
        width: 7px; height: 7px;
        border-radius: 50%;
        background: #4ade80;
        box-shadow: 0 0 0 3px rgba(74,222,128,.25);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0%, 100% { box-shadow: 0 0 0 3px rgba(74,222,128,.25); }
        50%       { box-shadow: 0 0 0 7px rgba(74,222,128,.10); }
    }

    .pw-hero__title {
        font-family: 'Playfair Display', serif;
        font-size: clamp(36px, 5vw, 58px);
        font-weight: 700;
        line-height: 1.1;
        color: #ffffff;
        letter-spacing: -.02em;
        margin: 0 0 20px;
    }

    .pw-hero__title em {
        font-style: italic;
        color: #93c5fd;
    }

    .pw-hero__sub {
        font-size: 17px;
        line-height: 1.7;
        color: rgba(255,255,255,.72);
        font-weight: 300;
        max-width: 520px;
        margin-bottom: 36px;
    }

    .pw-hero__actions { display: flex; gap: 12px; flex-wrap: wrap; }

    /* stat pills */
    .pw-hero__stats {
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .pw-stat-pill {
        background: rgba(255,255,255,.10);
        border: 1px solid rgba(255,255,255,.18);
        backdrop-filter: blur(12px);
        border-radius: var(--pw-radius-sm);
        padding: 18px 22px;
        min-width: 170px;
    }

    .pw-stat-pill__num {
        font-family: 'Playfair Display', serif;
        font-size: 30px;
        font-weight: 700;
        color: #ffffff;
        line-height: 1;
        margin-bottom: 4px;
    }

    .pw-stat-pill__label {
        font-size: 12px;
        color: rgba(255,255,255,.65);
        font-weight: 400;
        letter-spacing: .04em;
    }

    /* ════════════════════════════════════════════════════════════════
       2. WHY PARTNER
    ════════════════════════════════════════════════════════════════ */
    .pw-why {
        background: var(--pw-bg);
        padding: 96px 0;
    }

    .pw-why__grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 72px;
        align-items: center;
    }

    @media (max-width: 900px) {
        .pw-why__grid { grid-template-columns: 1fr; gap: 40px; }
    }

    /* image */
    .pw-why__img-frame {
        position: relative;
        border-radius: var(--pw-radius);
        overflow: hidden;
        aspect-ratio: 4 / 3;
        box-shadow: var(--pw-shadow-lg);
    }

    .pw-why__img-frame img {
        width: 100%; height: 100%;
        object-fit: cover;
        display: block;
        transition: transform .7s var(--ease-expo);
    }

    .pw-why__img-frame:hover img { transform: scale(1.03); }

    /* floating badge on image */
    .pw-why__img-badge {
        position: absolute;
        bottom: 20px; left: 20px;
        background: var(--pw-surface);
        border-radius: var(--pw-radius-sm);
        padding: 14px 18px;
        box-shadow: var(--pw-shadow-lg);
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .pw-why__img-badge-icon {
        width: 40px; height: 40px;
        border-radius: 8px;
        background: var(--pw-green-tint);
        display: flex; align-items: center; justify-content: center;
        color: var(--pw-green);
        flex-shrink: 0;
    }

    .pw-why__img-badge-text strong {
        display: block;
        font-size: 14px;
        font-weight: 600;
        color: var(--pw-ink);
    }

    .pw-why__img-badge-text span {
        font-size: 12px;
        color: var(--pw-muted);
    }

    /* pillars list */
    .pw-pillars { list-style: none; padding: 0; margin: 28px 0 36px; display: flex; flex-direction: column; gap: 16px; }

    .pw-pillar {
        display: flex;
        align-items: flex-start;
        gap: 14px;
    }

    .pw-pillar__icon {
        width: 38px; height: 38px;
        border-radius: 8px;
        background: var(--pw-accent-2);
        display: flex; align-items: center; justify-content: center;
        color: var(--pw-accent);
        flex-shrink: 0;
        margin-top: 1px;
    }

    .pw-pillar__text strong {
        display: block;
        font-size: 15px;
        font-weight: 600;
        color: var(--pw-ink);
        margin-bottom: 2px;
    }

    .pw-pillar__text span {
        font-size: 14px;
        color: var(--pw-muted);
        line-height: 1.5;
    }

    /* ════════════════════════════════════════════════════════════════
       3. PARTNERS MARQUEE
    ════════════════════════════════════════════════════════════════ */
    .pw-marquee-section {
        background: var(--pw-surface);
        padding: 72px 0;
        border-top: 1px solid var(--pw-faint);
        border-bottom: 1px solid var(--pw-faint);
    }

    .pw-marquee-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
        margin-bottom: 44px;
    }

    .pw-marquee-track {
        overflow: hidden;
        position: relative;
    }

    .pw-marquee-track::before,
    .pw-marquee-track::after {
        content: '';
        position: absolute;
        top: 0; bottom: 0;
        width: 100px;
        z-index: 2;
        pointer-events: none;
    }

    .pw-marquee-track::before { left: 0; background: linear-gradient(to right, var(--pw-surface), transparent); }
    .pw-marquee-track::after  { right: 0; background: linear-gradient(to left,  var(--pw-surface), transparent); }

    .pw-marquee-inner {
        display: flex;
        width: max-content;
        animation: marqueeScroll 28s linear infinite;
    }

    .pw-marquee-inner:hover { animation-play-state: paused; }

    @keyframes marqueeScroll {
        from { transform: translateX(0); }
        to   { transform: translateX(-50%); }
    }

    .pw-logo-item {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 40px;
        height: 64px;
        flex-shrink: 0;
    }

    .pw-logo-item img {
        max-height: 40px;
        width: auto;
        object-fit: contain;
        filter: grayscale(1) opacity(.6);
        transition: filter .3s ease;
    }

    .pw-logo-item img:hover { filter: grayscale(0) opacity(1); }

    /* ════════════════════════════════════════════════════════════════
       4. GET INVOLVED / CTA
    ════════════════════════════════════════════════════════════════ */
    .pw-cta {
        background: var(--pw-bg);
        padding: 96px 0;
    }

    .pw-cta__grid {
        display: grid;
        grid-template-columns: 1fr 420px;
        gap: 64px;
        align-items: center;
    }

    @media (max-width: 900px) {
        .pw-cta__grid { grid-template-columns: 1fr; }
        .pw-cta__img { order: -1; }
    }

    /* contact card */
    .pw-contact-card {
        background: var(--pw-surface);
        border: 1px solid var(--pw-faint);
        border-radius: var(--pw-radius);
        padding: 32px;
        margin: 32px 0 36px;
        box-shadow: var(--pw-shadow);
    }

    .pw-contact-card__title {
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .10em;
        text-transform: uppercase;
        color: var(--pw-muted);
        margin-bottom: 18px;
    }

    .pw-contact-row {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 14px;
    }

    .pw-contact-row:last-child { margin-bottom: 0; }

    .pw-contact-row__icon {
        width: 38px; height: 38px;
        border-radius: 8px;
        background: var(--pw-accent-2);
        display: flex; align-items: center; justify-content: center;
        color: var(--pw-accent);
        flex-shrink: 0;
    }

    .pw-contact-row__label {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: .08em;
        color: var(--pw-muted);
        display: block;
        margin-bottom: 1px;
    }

    .pw-contact-row__value {
        font-size: 15px;
        font-weight: 500;
        color: var(--pw-ink);
        text-decoration: none;
    }

    .pw-contact-row__value:hover { color: var(--pw-accent); }

    /* partnership types grid */
    .pw-types {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
        margin-bottom: 36px;
    }

    .pw-type-chip {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 14px;
        border-radius: var(--pw-radius-sm);
        background: var(--pw-surface);
        border: 1.5px solid var(--pw-faint);
        font-size: 13px;
        font-weight: 500;
        color: var(--pw-ink);
        transition: border-color .2s ease, background .2s ease, color .2s ease;
    }

    .pw-type-chip:hover {
        border-color: var(--pw-accent);
        background: var(--pw-accent-2);
        color: var(--pw-accent);
    }

    .pw-type-chip__dot {
        width: 7px; height: 7px;
        border-radius: 50%;
        background: var(--pw-accent);
        opacity: .4;
        flex-shrink: 0;
    }

    /* CTA image */
    .pw-cta__img {
        position: relative;
        border-radius: var(--pw-radius);
        overflow: hidden;
        aspect-ratio: 3 / 4;
        box-shadow: var(--pw-shadow-lg);
    }

    .pw-cta__img img {
        width: 100%; height: 100%;
        object-fit: cover;
        display: block;
    }

    .pw-cta__img-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, transparent 50%, rgba(13,27,42,.65) 100%);
    }

    .pw-cta__img-caption {
        position: absolute;
        bottom: 24px; left: 24px; right: 24px;
        color: #fff;
    }

    .pw-cta__img-caption strong {
        display: block;
        font-family: 'Playfair Display', serif;
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 4px;
    }

    .pw-cta__img-caption span {
        font-size: 13px;
        color: rgba(255,255,255,.72);
    }

    /* ════════════════════════════════════════════════════════════════
       5. FAQ
    ════════════════════════════════════════════════════════════════ */
    .pw-faq {
        background: var(--pw-surface);
        padding: 96px 0;
        border-top: 1px solid var(--pw-faint);
    }

    .pw-faq__grid {
        display: grid;
        grid-template-columns: 340px 1fr;
        gap: 72px;
        align-items: start;
    }

    @media (max-width: 900px) {
        .pw-faq__grid { grid-template-columns: 1fr; gap: 40px; }
    }

    .pw-faq__left-card {
        background: linear-gradient(135deg, #0d1b2a, #1a3a5c);
        border-radius: var(--pw-radius);
        padding: 40px 36px;
        color: #fff;
        position: sticky;
        top: 100px;
    }

    .pw-faq__left-card .pw-eyebrow { color: #93c5fd; }
    .pw-faq__left-card .pw-eyebrow::before { background: #93c5fd; }

    .pw-faq__left-title {
        font-family: 'Playfair Display', serif;
        font-size: 26px;
        font-weight: 700;
        line-height: 1.25;
        color: #ffffff;
        margin: 0 0 12px;
    }

    .pw-faq__left-sub {
        font-size: 14px;
        color: rgba(255,255,255,.65);
        line-height: 1.7;
        margin-bottom: 28px;
    }

    /* accordion */
    .pw-accordion { display: flex; flex-direction: column; gap: 10px; }

    .pw-accordion-item {
        background: var(--pw-bg);
        border: 1.5px solid var(--pw-faint);
        border-radius: var(--pw-radius-sm);
        overflow: hidden;
        transition: border-color .2s ease, box-shadow .2s ease;
    }

    .pw-accordion-item.open {
        border-color: var(--pw-accent);
        box-shadow: 0 0 0 3px var(--pw-accent-2);
    }

    .pw-accordion-btn {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        padding: 18px 20px;
        background: none;
        border: none;
        cursor: pointer;
        text-align: left;
        font-size: 15px;
        font-weight: 500;
        color: var(--pw-ink);
        gap: 12px;
        transition: color .2s ease;
    }

    .pw-accordion-item.open .pw-accordion-btn { color: var(--pw-accent); }

    .pw-accordion-icon {
        width: 28px; height: 28px;
        border-radius: 50%;
        background: var(--pw-faint);
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
        transition: background .2s ease, transform .3s var(--ease-expo);
        color: var(--pw-muted);
    }

    .pw-accordion-item.open .pw-accordion-icon {
        background: var(--pw-accent);
        color: #fff;
        transform: rotate(45deg);
    }

    .pw-accordion-body {
        max-height: 0;
        overflow: hidden;
        transition: max-height .4s var(--ease-expo);
    }

    .pw-accordion-item.open .pw-accordion-body { max-height: 300px; }

    .pw-accordion-inner {
        padding: 0 20px 18px;
        font-size: 14px;
        line-height: 1.75;
        color: var(--pw-muted);
    }

    /* ════════════════════════════════════════════════════════════════
       6. MODALS (refined)
    ════════════════════════════════════════════════════════════════ */
    .pw-modal .modal-content {
        border: none;
        border-radius: var(--pw-radius);
        box-shadow: 0 24px 80px rgba(13,27,42,.18);
        overflow: hidden;
    }

    .pw-modal .modal-header {
        background: linear-gradient(135deg, #0d1b2a, #1a3a5c);
        border: none;
        padding: 24px 28px 20px;
    }

    .pw-modal .modal-title {
        font-family: 'Playfair Display', serif;
        font-size: 22px;
        font-weight: 700;
        color: #ffffff;
    }

    .pw-modal .btn-close {
        filter: invert(1) opacity(.7);
    }

    .pw-modal .modal-body { padding: 28px; }
    .pw-modal .modal-footer {
        padding: 16px 28px;
        border-top: 1px solid var(--pw-faint);
    }

    .pw-form-label {
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: var(--pw-muted);
        display: block;
        margin-bottom: 7px;
    }

    .pw-form-control {
        width: 100%;
        padding: 11px 14px;
        border-radius: var(--pw-radius-sm);
        border: 1.5px solid var(--pw-faint);
        background: var(--pw-bg);
        font-size: 14px;
        font-family: 'DM Sans', sans-serif;
        color: var(--pw-ink);
        outline: none;
        transition: border-color .2s ease, box-shadow .2s ease;
        appearance: none;
    }

    .pw-form-control:focus {
        border-color: var(--pw-accent);
        box-shadow: 0 0 0 3px var(--pw-accent-2);
    }

    .pw-form-group { margin-bottom: 18px; }

    .pw-form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }

    @media (max-width: 500px) {
        .pw-form-row { grid-template-columns: 1fr; }
    }

    /* ── Entrance animations ─────────────────────────────────────────── */
    .pw-anim {
        opacity: 0;
        animation: pwFadeUp .65s var(--ease-expo) forwards;
    }

    @keyframes pwFadeUp {
        from { opacity: 0; transform: translateY(22px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .pw-anim-1 { animation-delay: .05s; }
    .pw-anim-2 { animation-delay: .15s; }
    .pw-anim-3 { animation-delay: .25s; }
    .pw-anim-4 { animation-delay: .35s; }
</style>

{{-- ═══════════════════════════════════════════════════════════
     1. HERO
════════════════════════════════════════════════════════════ --}}
<section class="pw-hero">
    <div class="container">
        <div class="pw-hero__grid">

            <div class="pw-anim pw-anim-1">
                <div class="pw-hero__badge">
                    <span class="pw-hero__badge-dot"></span>
                    Rwanda Diabetes Organization
                </div>
                <h1 class="pw-hero__title">Partner With Us<br>to <em>Save Lives</em></h1>
                <p class="pw-hero__sub">Together, we can transform diabetes awareness, prevention, and access to care across Rwanda. Join a network committed to lasting health impact.</p>
                <div class="pw-hero__actions">
                    <button data-bs-toggle="modal" data-bs-target="#partnerModal" class="pw-btn pw-btn--primary">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        Become a Partner
                    </button>
                    <a href="{{ route('impact') }}" class="pw-btn pw-btn--ghost">
                        Our Impact
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <div class="pw-hero__stats pw-anim pw-anim-2">
                <div class="pw-stat-pill">
                    <div class="pw-stat-pill__num">800K+</div>
                    <div class="pw-stat-pill__label">Rwandans living with diabetes</div>
                </div>
                <div class="pw-stat-pill">
                    <div class="pw-stat-pill__num">30+</div>
                    <div class="pw-stat-pill__label">Partner organizations</div>
                </div>
                <div class="pw-stat-pill">
                    <div class="pw-stat-pill__num">47</div>
                    <div class="pw-stat-pill__label">Districts reached nationwide</div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     2. WHY PARTNER
════════════════════════════════════════════════════════════ --}}
<section class="pw-why">
    <div class="container">
        <div class="pw-why__grid">

            {{-- Image --}}
            <div class="pw-why__img-wrap pw-anim pw-anim-1">
                <div class="pw-why__img-frame">
                    <img src="{{ asset('assets/img/C66A9639.jpg') }}" alt="Rwanda Diabetes Organization in action" loading="lazy">
                    <div class="pw-why__img-badge">
                        <span class="pw-why__img-badge-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                        </span>
                        <div class="pw-why__img-badge-text">
                            <strong>Nationwide reach</strong>
                            <span>All 47 districts of Rwanda</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Content --}}
            <div class="pw-anim pw-anim-2">
                <span class="pw-eyebrow">Why Partner</span>
                <h2 class="pw-section-title">Why Partner With <em>Rwanda Diabetes Organization?</em></h2>
                <p class="pw-body">Rwanda Diabetes Organization works nationwide to raise awareness, improve early screening, educate families, and support people living with diabetes. By partnering with us, you join a mission dedicated to saving lives, preventing complications, and empowering communities.</p>

                <ul class="pw-pillars">
                    <li class="pw-pillar">
                        <span class="pw-pillar__icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 12l3 3 5-5"/></svg>
                        </span>
                        <div class="pw-pillar__text">
                            <strong>Nationwide Awareness Campaigns</strong>
                            <span>Co-brand health drives across all Rwandan districts reaching hundreds of thousands.</span>
                        </div>
                    </li>
                    <li class="pw-pillar">
                        <span class="pw-pillar__icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </span>
                        <div class="pw-pillar__text">
                            <strong>Early Screening & Prevention</strong>
                            <span>Support life-saving screening programs that detect diabetes before complications arise.</span>
                        </div>
                    </li>
                    <li class="pw-pillar">
                        <span class="pw-pillar__icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </span>
                        <div class="pw-pillar__text">
                            <strong>Community Education</strong>
                            <span>Fund family education workshops, patient support groups, and nutrition guidance.</span>
                        </div>
                    </li>
                </ul>

                <a href="{{ route('about') }}" class="pw-btn pw-btn--primary">
                    More About Us
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     3. PARTNERS MARQUEE
════════════════════════════════════════════════════════════ --}}
@if($partners && $partners->count())
<section class="pw-marquee-section">
    <div class="container">
        <div class="pw-marquee-header">
            <div>
                <span class="pw-eyebrow">Our Network</span>
                <h2 class="pw-section-title" style="font-size:28px; margin:0;">Recent Partners &amp; Collaborators</h2>
            </div>
            <button data-bs-toggle="modal" data-bs-target="#partnerModal" class="pw-btn pw-btn--outline">
                Partner With Us
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </button>
        </div>
    </div>

    <div class="pw-marquee-track">
        <div class="pw-marquee-inner">
            {{-- First pass --}}
            @foreach($partners as $partner)
            <div class="pw-logo-item">
                <a href="{{ $partner->website }}" target="_blank" rel="noopener">
                    <img src="{{ asset('image/partners') }}/{{ $partner->logo }}"
                         alt="{{ $partner->name }}" loading="lazy">
                </a>
            </div>
            @endforeach
            {{-- Duplicate for seamless loop --}}
            @foreach($partners as $partner)
            <div class="pw-logo-item" aria-hidden="true">
                <a href="{{ $partner->website }}" target="_blank" rel="noopener">
                    <img src="{{ asset('image/partners') }}/{{ $partner->logo }}"
                         alt="{{ $partner->name }}" loading="lazy">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- ═══════════════════════════════════════════════════════════
     4. GET INVOLVED
════════════════════════════════════════════════════════════ --}}
<section class="pw-cta">
    <div class="container">
        <div class="pw-cta__grid">

            {{-- Left: content --}}
            <div class="pw-anim pw-anim-1">
                <span class="pw-eyebrow">Get Involved</span>
                <h2 class="pw-section-title">Start a <em>Partnership</em> Today</h2>
                <p class="pw-body">We welcome discussions with organizations, companies, and individuals committed to improving diabetes prevention and care across Rwanda.</p>

                {{-- Partnership types --}}
                <div class="pw-types">
                    @foreach(['Hospital / Clinic', 'University / Research', 'NGO / Community', 'Corporate Sponsor', 'Government Body', 'Media / Tech'] as $type)
                    <div class="pw-type-chip">
                        <span class="pw-type-chip__dot"></span>
                        {{ $type }}
                    </div>
                    @endforeach
                </div>

                {{-- Contact card --}}
                <div class="pw-contact-card">
                    <p class="pw-contact-card__title">Partnerships Team</p>
                    <div class="pw-contact-row">
                        <span class="pw-contact-row__icon">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 7 10-7"/></svg>
                        </span>
                        <div>
                            <span class="pw-contact-row__label">Email</span>
                            <a href="mailto:info@rwandadiabetes.rw" class="pw-contact-row__value">info@rwandadiabetes.rw</a>
                        </div>
                    </div>
                    <div class="pw-contact-row">
                        <span class="pw-contact-row__icon">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.17h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.74a16 16 0 0 0 6 6l1.87-1.87a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </span>
                        <div>
                            <span class="pw-contact-row__label">Phone</span>
                            <a href="tel:+250788224628" class="pw-contact-row__value">+250 788 224 628</a>
                        </div>
                    </div>
                    <div class="pw-contact-row">
                        <span class="pw-contact-row__icon">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </span>
                        <div>
                            <span class="pw-contact-row__label">Office</span>
                            <span class="pw-contact-row__value">Kigali, Rwanda</span>
                        </div>
                    </div>
                </div>

                <button data-bs-toggle="modal" data-bs-target="#partnerModal" class="pw-btn pw-btn--primary">
                    Submit a Partnership Request
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>

            {{-- Right: image --}}
            <div class="pw-cta__img pw-anim pw-anim-2">
                <img src="{{ asset('assets/img/C66A9353.jpg') }}" alt="Partnership impact" loading="lazy">
                <div class="pw-cta__img-overlay"></div>
                <div class="pw-cta__img-caption">
                    <strong>Together we make an impact</strong>
                    <span>Improving lives across all of Rwanda</span>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     5. FAQ
════════════════════════════════════════════════════════════ --}}
@if($faqs && $faqs->count())
<section class="pw-faq">
    <div class="container">
        <div class="pw-faq__grid">

            {{-- Left sticky card --}}
            <div class="pw-faq__left-card pw-anim pw-anim-1">
                <span class="pw-eyebrow">FAQ</span>
                <h2 class="pw-faq__left-title">Have questions about partnering?</h2>
                <p class="pw-faq__left-sub">Here are answers to questions we most often receive from potential partners and collaborators.</p>
                <button class="pw-btn pw-btn--ghost" data-bs-toggle="modal" data-bs-target="#askQuestionModal" style="width:100%; justify-content:center;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                    Ask Your Question
                </button>
            </div>

            {{-- Right: accordion --}}
            <div class="pw-accordion pw-anim pw-anim-2">
                @foreach($faqs as $i => $faq)
                <div class="pw-accordion-item {{ $i === 0 ? 'open' : '' }}">
                    <button class="pw-accordion-btn" type="button" onclick="pwToggle(this)">
                        {{ $faq->question }}
                        <span class="pw-accordion-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
                        </span>
                    </button>
                    <div class="pw-accordion-body">
                        <div class="pw-accordion-inner">{{ $faq->answer }}</div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
@endif

{{-- ═══════════════════════════════════════════════════════════
     MODAL: Ask a Question
════════════════════════════════════════════════════════════ --}}
<div class="modal fade pw-modal" id="askQuestionModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ask a Question</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('questions.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="pw-form-group">
                        <label class="pw-form-label">Your Question *</label>
                        <textarea required name="question" rows="5" class="pw-form-control" placeholder="Type your question here…"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="pw-btn pw-btn--outline" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="pw-btn pw-btn--primary">Submit Question</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════
     MODAL: Partner Form
════════════════════════════════════════════════════════════ --}}
<div class="modal fade pw-modal" id="partnerModal" tabindex="-1" aria-labelledby="partnerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="partnerModalLabel">Partnership Request</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('partners.store.request') }}" method="POST">
                @csrf
                <div class="modal-body">

                    @if(session('success'))
                    <div class="alert alert-success rounded-3 mb-4">{{ session('success') }}</div>
                    @endif

                    <div class="pw-form-row">
                        <div class="pw-form-group">
                            <label class="pw-form-label">Organization / Company *</label>
                            <input type="text" name="organization" class="pw-form-control" value="{{ old('organization') }}" placeholder="Organization name" required>
                            @error('organization') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="pw-form-group">
                            <label class="pw-form-label">Contact Person *</label>
                            <input type="text" name="name" class="pw-form-control" value="{{ old('name') }}" placeholder="Full name" required>
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    <div class="pw-form-row">
                        <div class="pw-form-group">
                            <label class="pw-form-label">Email *</label>
                            <input type="email" name="email" class="pw-form-control" value="{{ old('email') }}" placeholder="email@example.com" required>
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="pw-form-group">
                            <label class="pw-form-label">Phone</label>
                            <input type="text" name="phone" class="pw-form-control" value="{{ old('phone') }}" placeholder="+250 7XX XXX XXX">
                            @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    <div class="pw-form-group">
                        <label class="pw-form-label">Partnership Type *</label>
                        <select name="type" class="pw-form-control" required>
                            <option value="">Select partnership type</option>
                            <option value="hospital"    {{ old('type') == 'hospital'    ? 'selected' : '' }}>Hospital / Clinic</option>
                            <option value="university"  {{ old('type') == 'university'  ? 'selected' : '' }}>University / Research</option>
                            <option value="ngo"         {{ old('type') == 'ngo'         ? 'selected' : '' }}>NGO / Community</option>
                            <option value="corporate"   {{ old('type') == 'corporate'   ? 'selected' : '' }}>Corporate</option>
                            <option value="government"  {{ old('type') == 'government'  ? 'selected' : '' }}>Government</option>
                            <option value="media"       {{ old('type') == 'media'       ? 'selected' : '' }}>Media / Tech</option>
                            <option value="other"       {{ old('type') == 'other'       ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('type') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="pw-form-group">
                        <label class="pw-form-label">Message / Proposal *</label>
                        <textarea name="message" class="pw-form-control" rows="5" placeholder="Describe your partnership idea or proposal…" required>{{ old('message') }}</textarea>
                        @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="pw-btn pw-btn--outline" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="pw-btn pw-btn--primary">Submit Request</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function pwToggle(btn) {
        const item = btn.closest('.pw-accordion-item');
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.pw-accordion-item.open').forEach(el => el.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
    }
</script>

@endsection