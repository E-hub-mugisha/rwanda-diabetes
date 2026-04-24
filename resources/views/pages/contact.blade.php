@extends('layouts.base')
@section('title', 'Contact Us — Rwanda Diabetes Organization')
@section('content')

<style>
    /* ── Design tokens ──────────────────────────────────────────────── */
    :root {
        --ct-bg:          #f5f7fa;
        --ct-surface:     #ffffff;
        --ct-ink:         #0d1b2a;
        --ct-muted:       #5a6a7a;
        --ct-faint:       #e4eaf1;
        --ct-accent:      #1a6eb5;
        --ct-accent-2:    #e8f1fb;
        --ct-green:       #14875a;
        --ct-radius:      18px;
        --ct-radius-sm:   10px;
        --ct-shadow:      0 2px 16px rgba(13,27,42,.07), 0 1px 3px rgba(13,27,42,.04);
        --ct-shadow-lg:   0 8px 40px rgba(13,27,42,.11), 0 2px 8px rgba(13,27,42,.05);
        --ease-expo:      cubic-bezier(0.16, 1, 0.3, 1);
    }

    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&display=swap');

    .ct-page { font-family: 'DM Sans', sans-serif; background: var(--ct-bg); }

    /* ── Shared ─────────────────────────────────────────────────────── */
    .ct-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: .18em;
        text-transform: uppercase;
        color: var(--ct-accent);
        margin-bottom: 14px;
    }
    .ct-eyebrow::before {
        content: '';
        display: block;
        width: 24px; height: 2px;
        background: var(--ct-accent);
        border-radius: 2px;
    }

    .ct-btn {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 12px 24px;
        border-radius: 40px;
        font-size: 14px;
        font-weight: 500;
        font-family: 'DM Sans', sans-serif;
        text-decoration: none;
        cursor: pointer;
        border: 1.5px solid transparent;
        transition: transform .25s var(--ease-expo), box-shadow .25s ease, background .2s, border-color .2s, color .2s;
    }
    .ct-btn:hover { transform: translateY(-2px); }
    .ct-btn--primary {
        background: var(--ct-accent);
        color: #fff;
        box-shadow: 0 4px 16px rgba(26,110,181,.28);
    }
    .ct-btn--primary:hover { background: #155c9e; box-shadow: 0 8px 24px rgba(26,110,181,.38); color: #fff; }
    .ct-btn--outline { background: transparent; border-color: var(--ct-faint); color: var(--ct-ink); }
    .ct-btn--outline:hover { border-color: var(--ct-accent); color: var(--ct-accent); }

    /* ════════════════════════════════════════════════════════════════
       HERO BAND
    ════════════════════════════════════════════════════════════════ */
    .ct-hero {
        background: linear-gradient(135deg, #0d1b2a 0%, #1a3a5c 60%, #1a6eb5 100%);
        padding: 80px 0 72px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    .ct-hero::before {
        content: '';
        position: absolute; inset: 0;
        background: radial-gradient(circle at 70% 40%, rgba(26,110,181,.4) 0%, transparent 55%),
                    radial-gradient(circle at 20% 70%, rgba(20,135,90,.2) 0%, transparent 45%);
        pointer-events: none;
    }
    .ct-hero__inner { position: relative; z-index: 1; }
    .ct-hero .ct-eyebrow { color: #93c5fd; }
    .ct-hero .ct-eyebrow::before { background: #93c5fd; }
    .ct-hero__title {
        font-family: 'Playfair Display', serif;
        font-size: clamp(32px, 4.5vw, 52px);
        font-weight: 700;
        color: #fff;
        margin: 0 0 14px;
        letter-spacing: -.02em;
        line-height: 1.1;
    }
    .ct-hero__title em { font-style: italic; color: #93c5fd; }
    .ct-hero__sub {
        font-size: 16px;
        color: rgba(255,255,255,.68);
        font-weight: 300;
        max-width: 480px;
        margin: 0 auto;
        line-height: 1.7;
    }

    /* ════════════════════════════════════════════════════════════════
       MAIN CONTACT GRID
    ════════════════════════════════════════════════════════════════ */
    .ct-main { padding: 80px 0 96px; }

    .ct-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: start;
    }
    @media (max-width: 900px) { .ct-grid { grid-template-columns: 1fr; } }

    /* ── LEFT COLUMN ─────────────────────────────────────────────── */
    .ct-left {}

    /* Map */
    .ct-map {
        border-radius: var(--ct-radius);
        overflow: hidden;
        box-shadow: var(--ct-shadow-lg);
        margin-bottom: 28px;
        position: relative;
    }
    .ct-map::before {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: var(--ct-radius);
        box-shadow: inset 0 0 0 1.5px rgba(13,27,42,.10);
        z-index: 2;
        pointer-events: none;
    }
    .ct-map iframe {
        display: block;
        width: 100%;
        height: 240px;
        border: 0;
    }

    /* Contact info cards */
    .ct-info-cards {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 28px;
    }
    .ct-info-card {
        display: flex;
        align-items: center;
        gap: 16px;
        background: var(--ct-surface);
        border: 1.5px solid var(--ct-faint);
        border-radius: var(--ct-radius-sm);
        padding: 16px 20px;
        box-shadow: var(--ct-shadow);
        transition: border-color .2s ease, box-shadow .2s ease;
    }
    .ct-info-card:hover {
        border-color: var(--ct-accent);
        box-shadow: 0 0 0 3px var(--ct-accent-2);
    }
    .ct-info-card__icon {
        width: 44px; height: 44px;
        border-radius: 10px;
        background: var(--ct-accent-2);
        display: flex; align-items: center; justify-content: center;
        color: var(--ct-accent);
        flex-shrink: 0;
    }
    .ct-info-card__label {
        font-size: 11px;
        font-weight: 600;
        letter-spacing: .10em;
        text-transform: uppercase;
        color: var(--ct-muted);
        display: block;
        margin-bottom: 3px;
    }
    .ct-info-card__value {
        display: block;
        font-size: 15px;
        font-weight: 500;
        color: var(--ct-ink);
        text-decoration: none;
        line-height: 1.5;
        transition: color .2s ease;
    }
    .ct-info-card__value:hover { color: var(--ct-accent); }
    .ct-info-card__value + .ct-info-card__value { font-weight: 400; font-size: 14px; color: var(--ct-muted); }

    /* Social row */
    .ct-social-block {
        background: var(--ct-surface);
        border: 1.5px solid var(--ct-faint);
        border-radius: var(--ct-radius-sm);
        padding: 20px 24px;
        box-shadow: var(--ct-shadow);
    }
    .ct-social-block__label {
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--ct-muted);
        margin-bottom: 14px;
    }
    .ct-social-row {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }
    .ct-social-btn {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 8px 16px;
        border-radius: 40px;
        border: 1.5px solid var(--ct-faint);
        background: var(--ct-bg);
        color: var(--ct-ink);
        font-size: 13px;
        font-weight: 500;
        text-decoration: none;
        transition: border-color .2s, background .2s, color .2s, transform .2s var(--ease-expo);
    }
    .ct-social-btn:hover {
        border-color: var(--ct-accent);
        background: var(--ct-accent);
        color: #fff;
        transform: translateY(-2px);
    }

    /* ── RIGHT COLUMN ────────────────────────────────────────────── */
    .ct-form-card {
        background: var(--ct-surface);
        border-radius: var(--ct-radius);
        padding: 44px 40px;
        box-shadow: var(--ct-shadow-lg);
        border: 1.5px solid var(--ct-faint);
        position: sticky;
        top: 90px;
    }
    @media (max-width: 600px) { .ct-form-card { padding: 28px 20px; } }

    .ct-form-card__header { margin-bottom: 30px; }
    .ct-form-card__title {
        font-family: 'Playfair Display', serif;
        font-size: 26px;
        font-weight: 700;
        color: var(--ct-ink);
        margin: 0 0 6px;
        line-height: 1.2;
    }
    .ct-form-card__title em { font-style: italic; color: var(--ct-accent); }
    .ct-form-card__sub {
        font-size: 14px;
        color: var(--ct-muted);
        font-weight: 300;
        margin: 0;
    }

    /* Form fields */
    .ct-form-group { margin-bottom: 16px; }
    .ct-form-label {
        display: block;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: .10em;
        text-transform: uppercase;
        color: var(--ct-muted);
        margin-bottom: 7px;
    }
    .ct-form-field {
        width: 100%;
        padding: 12px 14px;
        border-radius: var(--ct-radius-sm);
        border: 1.5px solid var(--ct-faint);
        background: var(--ct-bg);
        font-size: 14px;
        font-family: 'DM Sans', sans-serif;
        color: var(--ct-ink);
        outline: none;
        transition: border-color .2s ease, box-shadow .2s ease, background .2s ease;
        resize: none;
    }
    .ct-form-field::placeholder { color: #aab4bf; }
    .ct-form-field:focus {
        border-color: var(--ct-accent);
        box-shadow: 0 0 0 3px var(--ct-accent-2);
        background: var(--ct-surface);
    }
    .ct-form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
    }
    @media (max-width: 500px) { .ct-form-row { grid-template-columns: 1fr; } }

    .ct-form-submit {
        width: 100%;
        justify-content: center;
        margin-top: 8px;
        padding: 14px;
        font-size: 15px;
    }

    /* char counter hint */
    .ct-form-hint {
        font-size: 12px;
        color: var(--ct-muted);
        margin-top: 4px;
        text-align: right;
    }

    /* success flash */
    .ct-alert-success {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px 16px;
        border-radius: var(--ct-radius-sm);
        background: #e8f6f1;
        border: 1.5px solid #b2dfcf;
        color: var(--ct-green);
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 20px;
    }

    /* ════════════════════════════════════════════════════════════════
       FAQ SECTION
    ════════════════════════════════════════════════════════════════ */
    .ct-faq {
        background: var(--ct-surface);
        border-top: 1px solid var(--ct-faint);
        padding: 88px 0 96px;
    }
    .ct-faq__grid {
        display: grid;
        grid-template-columns: 340px 1fr;
        gap: 72px;
        align-items: start;
    }
    @media (max-width: 900px) { .ct-faq__grid { grid-template-columns: 1fr; gap: 40px; } }

    /* FAQ left card */
    .ct-faq__card {
        background: linear-gradient(135deg, #0d1b2a, #1a3a5c);
        border-radius: var(--ct-radius);
        padding: 40px 34px;
        position: sticky;
        top: 90px;
    }
    .ct-faq__card .ct-eyebrow { color: #93c5fd; }
    .ct-faq__card .ct-eyebrow::before { background: #93c5fd; }
    .ct-faq__card-title {
        font-family: 'Playfair Display', serif;
        font-size: 24px;
        font-weight: 700;
        color: #fff;
        line-height: 1.3;
        margin: 0 0 12px;
    }
    .ct-faq__card-sub {
        font-size: 14px;
        color: rgba(255,255,255,.62);
        line-height: 1.7;
        font-weight: 300;
        margin-bottom: 28px;
    }
    .ct-btn--ghost {
        background: rgba(255,255,255,.12);
        border: 1.5px solid rgba(255,255,255,.25);
        color: #fff;
        backdrop-filter: blur(8px);
        width: 100%;
        justify-content: center;
    }
    .ct-btn--ghost:hover { background: rgba(255,255,255,.22); color: #fff; }

    /* Accordion */
    .ct-accordion { display: flex; flex-direction: column; gap: 10px; }
    .ct-accordion-item {
        background: var(--ct-bg);
        border: 1.5px solid var(--ct-faint);
        border-radius: var(--ct-radius-sm);
        overflow: hidden;
        transition: border-color .2s ease, box-shadow .2s ease;
    }
    .ct-accordion-item.open {
        border-color: var(--ct-accent);
        box-shadow: 0 0 0 3px var(--ct-accent-2);
    }
    .ct-accordion-btn {
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
        font-family: 'DM Sans', sans-serif;
        color: var(--ct-ink);
        gap: 14px;
        transition: color .2s ease;
    }
    .ct-accordion-item.open .ct-accordion-btn { color: var(--ct-accent); }
    .ct-acc-icon {
        width: 28px; height: 28px;
        border-radius: 50%;
        background: var(--ct-faint);
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
        color: var(--ct-muted);
        transition: background .2s, color .2s, transform .3s var(--ease-expo);
    }
    .ct-accordion-item.open .ct-acc-icon {
        background: var(--ct-accent);
        color: #fff;
        transform: rotate(45deg);
    }
    .ct-accordion-body {
        max-height: 0;
        overflow: hidden;
        transition: max-height .4s var(--ease-expo);
    }
    .ct-accordion-item.open .ct-accordion-body { max-height: 300px; }
    .ct-accordion-inner {
        padding: 0 20px 18px;
        font-size: 14px;
        line-height: 1.8;
        color: var(--ct-muted);
    }

    /* ── Entrance animations ─────────────────────────────────────── */
    .ct-anim { opacity: 0; animation: ctFadeUp .65s var(--ease-expo) forwards; }
    @keyframes ctFadeUp {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .ct-anim-1 { animation-delay: .06s; }
    .ct-anim-2 { animation-delay: .16s; }
    .ct-anim-3 { animation-delay: .26s; }
</style>

<div class="ct-page">

    {{-- ══════════════════════════════════════════
         HERO
    ══════════════════════════════════════════ --}}
    <section class="ct-hero">
        <div class="container ct-hero__inner">
            <span class="ct-eyebrow ct-anim ct-anim-1">Get in Touch</span>
            <h1 class="ct-hero__title ct-anim ct-anim-2">Let's <em>Build a Healthier</em><br>Rwanda Together</h1>
            <p class="ct-hero__sub ct-anim ct-anim-3">We'd love to hear from you. Reach out for appointments, inquiries, partnerships, or community support.</p>
        </div>
    </section>

    {{-- ══════════════════════════════════════════
         MAIN: MAP + INFO + FORM
    ══════════════════════════════════════════ --}}
    <section class="ct-main">
        <div class="container">
            <div class="ct-grid">

                {{-- LEFT: Map + contact details --}}
                <div class="ct-left ct-anim ct-anim-1">

                    {{-- Map --}}
                    <div class="ct-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d715.2156446963118!2d30.069160821609515!3d-1.9302546071539262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca6a90ac2c089%3A0xb8c2041d2b11deaa!2s64%20KN%208%20Ave%2C%20Kigali!5e1!3m2!1sen!2srw!4v1772540276961!5m2!1sen!2srw"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Our Location">
                        </iframe>
                    </div>

                    {{-- Info cards --}}
                    <div class="ct-info-cards">

                        <div class="ct-info-card">
                            <span class="ct-info-card__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </span>
                            <div>
                                <span class="ct-info-card__label">Our Address</span>
                                <span class="ct-info-card__value">64KN 8 Avenue, Kigali, Rwanda</span>
                            </div>
                        </div>

                        <div class="ct-info-card">
                            <span class="ct-info-card__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.17h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.74a16 16 0 0 0 6 6l1.87-1.87a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            </span>
                            <div>
                                <span class="ct-info-card__label">Call Us</span>
                                <a href="tel:+250788224628" class="ct-info-card__value">+250 788 224 628</a>
                            </div>
                        </div>

                        <div class="ct-info-card">
                            <span class="ct-info-card__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 7 10-7"/></svg>
                            </span>
                            <div>
                                <span class="ct-info-card__label">Email Us</span>
                                <a href="mailto:info@rwandadiabetes.rw" class="ct-info-card__value">info@rwandadiabetes.rw</a>
                            </div>
                        </div>

                    </div>

                    {{-- Social --}}
                    <div class="ct-social-block">
                        <p class="ct-social-block__label">Follow Us</p>
                        <div class="ct-social-row">

                            <a href="https://web.facebook.com/" target="_blank" rel="noopener" class="ct-social-btn">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                                Facebook
                            </a>

                            <a href="https://www.linkedin.com/" target="_blank" rel="noopener" class="ct-social-btn">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
                                LinkedIn
                            </a>

                            <a href="https://x.com/" target="_blank" rel="noopener" class="ct-social-btn">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.26 5.632 5.905-5.632zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                                X / Twitter
                            </a>

                            <a href="https://www.instagram.com/" target="_blank" rel="noopener" class="ct-social-btn">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="5"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
                                Instagram
                            </a>

                        </div>
                    </div>
                </div>

                {{-- RIGHT: Contact form --}}
                <div class="ct-right ct-anim ct-anim-2">
                    <div class="ct-form-card">

                        <div class="ct-form-card__header">
                            <span class="ct-eyebrow">Send a Message</span>
                            <h2 class="ct-form-card__title">Make an <em>Appointment</em></h2>
                            <p class="ct-form-card__sub">We'll get back to you within 24 hours. We don't spam your inbox.</p>
                        </div>

                        @if(session('success'))
                        <div class="ct-alert-success">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 12l3 3 5-5"/></svg>
                            {{ session('success') }}
                        </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf

                            <div class="ct-form-row">
                                <div class="ct-form-group">
                                    <label class="ct-form-label" for="ct_name">Full Name *</label>
                                    <input id="ct_name" type="text" name="name"
                                           class="ct-form-field"
                                           placeholder="Your full name"
                                           value="{{ old('name') }}" required>
                                </div>
                                <div class="ct-form-group">
                                    <label class="ct-form-label" for="ct_email">Email Address *</label>
                                    <input id="ct_email" type="email" name="email"
                                           class="ct-form-field"
                                           placeholder="email@example.com"
                                           value="{{ old('email') }}" required>
                                </div>
                            </div>

                            <div class="ct-form-group">
                                <label class="ct-form-label" for="ct_service">Service / Inquiry Type *</label>
                                <input id="ct_service" type="text" name="service"
                                       class="ct-form-field"
                                       placeholder="e.g. Screening appointment, General inquiry…"
                                       value="{{ old('service') }}" required>
                            </div>

                            <div class="ct-form-group">
                                <label class="ct-form-label" for="ct_message">Your Message *</label>
                                <textarea id="ct_message" name="message"
                                          class="ct-form-field"
                                          rows="5"
                                          placeholder="Tell us how we can help you…"
                                          required>{{ old('message') }}</textarea>
                            </div>

                            <button type="submit" class="ct-btn ct-btn--primary ct-form-submit">
                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                                Send Message
                            </button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════
         FAQ
    ══════════════════════════════════════════ --}}
    @if($faqs && $faqs->count())
    <section class="ct-faq">
        <div class="container">
            <div class="ct-faq__grid">

                {{-- Left sticky card --}}
                <div class="ct-faq__card ct-anim ct-anim-1">
                    <span class="ct-eyebrow">FAQ</span>
                    <h2 class="ct-faq__card-title">Have Questions? We Have Answers.</h2>
                    <p class="ct-faq__card-sub">Here are the most common questions our community sends us. Don't see yours? Ask below.</p>
                    <button class="ct-btn ct-btn--ghost"
                            data-bs-toggle="modal"
                            data-bs-target="#askQuestionModal">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                        Ask Your Question
                    </button>
                </div>

                {{-- Right: accordion --}}
                <div class="ct-accordion ct-anim ct-anim-2">
                    @foreach($faqs as $i => $faq)
                    <div class="ct-accordion-item {{ $i === 0 ? 'open' : '' }}">
                        <button class="ct-accordion-btn" type="button" onclick="ctToggle(this)">
                            {{ $faq->question }}
                            <span class="ct-acc-icon">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
                            </span>
                        </button>
                        <div class="ct-accordion-body">
                            <div class="ct-accordion-inner">{{ $faq->answer }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    @endif

</div>

{{-- ══════════════════════════════════════════
     MODAL: Ask a Question
══════════════════════════════════════════ --}}
<div class="modal fade" id="askQuestionModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border:none; border-radius:18px; overflow:hidden; box-shadow:0 24px 80px rgba(13,27,42,.18);">
            <div class="modal-header" style="background:linear-gradient(135deg,#0d1b2a,#1a3a5c); border:none; padding:22px 28px;">
                <h5 class="modal-title" style="font-family:'Playfair Display',serif; color:#fff; font-size:20px; font-weight:700;">
                    Ask a Question
                </h5>
                <button class="btn-close" data-bs-dismiss="modal" style="filter:invert(1) opacity(.7);"></button>
            </div>
            <form action="{{ route('questions.store') }}" method="POST">
                @csrf
                <div class="modal-body" style="padding:28px;">
                    <div class="ct-form-group">
                        <label class="ct-form-label">Your Question *</label>
                        <textarea required name="question" rows="5" class="ct-form-field" placeholder="Type your question here…"></textarea>
                    </div>
                </div>
                <div class="modal-footer" style="padding:16px 28px; border-top:1px solid var(--ct-faint);">
                    <button type="button" class="ct-btn ct-btn--outline" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="ct-btn ct-btn--primary">Submit Question</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function ctToggle(btn) {
        const item = btn.closest('.ct-accordion-item');
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.ct-accordion-item.open').forEach(el => el.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
    }
</script>

@endsection