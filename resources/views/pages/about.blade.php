@extends('layouts.base')
@section('title', 'WHO WE ARE')
@section('content')

{{-- ═══════════════════════════════════════════
     HERO — Who We Are
═══════════════════════════════════════════ --}}
<section class="rda-hero-split">
    <div class="container">
        <div class="rda-hero-split__grid">
            <div class="rda-hero-split__image" data-aos="fade-right">
                <div class="rda-image-frame">
                    <img src="assets/img/1I7A8070.jpeg" alt="Rwanda Diabetes Association" loading="lazy">
                    <div class="rda-image-badge">
                        <span class="badge-year">Est.</span>
                        <span class="badge-num">1997</span>
                        <span class="badge-label">Serving Rwanda</span>
                    </div>
                </div>
            </div>

            <div class="rda-hero-split__content" data-aos="fade-left">
                <span class="rda-eyebrow">Who We Are</span>
                <h1 class="rda-h1">Dedicated to a <em>diabetes-free</em> Rwanda</h1>
                <p class="rda-body-lg">
                    The Rwanda Diabetes Association (RDA) is a national, non-profit organization dedicated to improving the lives of people living with diabetes across Rwanda.
                    Founded in 1997, we work to prevent complications, strengthen community awareness, and support individuals and families through quality education, screening, and care.
                </p>
                <p class="rda-body">
                    For more than two decades, we have partnered with local and international institutions to promote better health, reduce stigma, and ensure that reliable information and lifesaving support reach communities everywhere.
                </p>
                <div class="rda-hero-split__actions">
                    <a href="{{ route('about') }}" class="rda-btn rda-btn--primary">
                        More About Us
                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><path d="M13.336 7.845L6.164 15.017l-1.178-1.178 7.172-7.172H5.836V5H15v9.167h-1.664V7.845Z" fill="currentColor"/></svg>
                    </a>
                    <a href="{{ route('impact') }}" class="rda-btn rda-btn--ghost">View Our Impact</a>
                </div>
                <div class="rda-stat-strip">
                    <div class="rda-stat">
                        <span class="rda-stat__num">27+</span>
                        <span class="rda-stat__label">Years of service</span>
                    </div>
                    <div class="rda-stat-divider"></div>
                    <div class="rda-stat">
                        <span class="rda-stat__num">30+</span>
                        <span class="rda-stat__label">Districts reached</span>
                    </div>
                    <div class="rda-stat-divider"></div>
                    <div class="rda-stat">
                        <span class="rda-stat__num">50k+</span>
                        <span class="rda-stat__label">Lives impacted</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     MISSION · VISION · OBJECTIVES
═══════════════════════════════════════════ --}}
<section class="rda-mvp">
    <div class="container">
        <div class="rda-section-header" data-aos="fade-up">
            <span class="rda-eyebrow">Our Purpose</span>
            <h2 class="rda-h2">What drives everything we do</h2>
        </div>

        <div class="rda-mvp__grid">
            {{-- Mission --}}
            <div class="rda-mvp-card rda-mvp-card--mission" data-aos="fade-up" data-aos-delay="0">
                <div class="rda-mvp-card__icon">
                    <svg viewBox="0 0 40 40" fill="none" width="28" height="28">
                        <path d="M20 3.5a16.5 16.5 0 1 1 0 33 16.5 16.5 0 0 1 0-33Zm0 4a12.5 12.5 0 1 0 0 25 12.5 12.5 0 0 0 0-25Zm0 5a7.5 7.5 0 1 1 0 15 7.5 7.5 0 0 1 0-15Zm0 3a4.5 4.5 0 1 0 0 9 4.5 4.5 0 0 0 0-9Z" fill="currentColor"/>
                    </svg>
                </div>
                <span class="rda-mvp-card__tag">Mission</span>
                <h3 class="rda-mvp-card__title">Our Mission</h3>
                <p class="rda-mvp-card__body">
                    To enhance the well-being of people living with diabetes in Rwanda through education, early detection, advocacy, and accessible care.
                </p>
            </div>

            {{-- Vision --}}
            <div class="rda-mvp-card rda-mvp-card--vision" data-aos="fade-up" data-aos-delay="100">
                <div class="rda-mvp-card__icon">
                    <svg viewBox="0 0 40 40" fill="none" width="28" height="28">
                        <path d="M20 8C11.2 8 4 20 4 20s7.2 12 16 12 16-12 16-12S28.8 8 20 8Zm0 20a8 8 0 1 1 0-16 8 8 0 0 1 0 16Zm0-12a4 4 0 1 0 0 8 4 4 0 0 0 0-8Z" fill="currentColor"/>
                    </svg>
                </div>
                <span class="rda-mvp-card__tag">Vision</span>
                <h3 class="rda-mvp-card__title">Our Vision</h3>
                <p class="rda-mvp-card__body">
                    A Rwanda where no one dies or suffers preventable complications from diabetes — a future we build together, every day.
                </p>
            </div>

            {{-- Objectives --}}
            <div class="rda-mvp-card rda-mvp-card--objectives" data-aos="fade-up" data-aos-delay="200">
                <div class="rda-mvp-card__icon">
                    <svg viewBox="0 0 40 40" fill="none" width="28" height="28">
                        <path d="M8 10h24M8 20h16M8 30h20" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <span class="rda-mvp-card__tag">Objectives</span>
                <h3 class="rda-mvp-card__title">Our Objectives</h3>
                <ul class="rda-mvp-card__list">
                    <li>Prevent and treat diabetes and its complications</li>
                    <li>Educate and mobilize citizens to understand diabetes</li>
                    <li>Support families with reliable health information</li>
                    <li>Promote research to improve national diabetes care</li>
                    <li>Advocate for stronger policies and partnerships</li>
                </ul>
            </div>
        </div>

        {{-- Side Image Block --}}
        <div class="rda-mvp__image-row" data-aos="fade-up">
            <div class="rda-mvp__image-wrap">
                <img src="assets/img/C66A9303.jpg" alt="RDA Community" loading="lazy">
            </div>
            <div class="rda-mvp__image-caption">
                <blockquote class="rda-blockquote">
                    "Ensuring every Rwandan has access to quality diabetes care and the knowledge to manage their health."
                </blockquote>
                <a href="{{ route('impact') }}" class="rda-btn rda-btn--primary">
                    See Our Impact
                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><path d="M13.336 7.845L6.164 15.017l-1.178-1.178 7.172-7.172H5.836V5H15v9.167h-1.664V7.845Z" fill="currentColor"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     PROGRAMS
═══════════════════════════════════════════ --}}
<section class="rda-programs">
    <div class="container">
        <div class="rda-programs__header" data-aos="fade-up">
            <div>
                <span class="rda-eyebrow">Programs &amp; Services</span>
                <h2 class="rda-h2">Our programs at a glance</h2>
                <p class="rda-body">
                    Through mobile clinics, outreach events, and health facility partnerships, we help communities access early screening critical for reducing complications and saving lives.
                </p>
            </div>
        </div>

        <div class="rda-programs__grid">
            @foreach($programs as $index => $program)
            <div class="rda-program-card" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 80 }}">
                <div class="rda-program-card__num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                <h3 class="rda-program-card__title">{{ $program->title }}</h3>
                <p class="rda-program-card__body">{{ $program->short_description }}</p>
                <a href="{{ route('programs.show', $program->slug) }}" class="rda-program-card__link">
                    Learn more
                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><path d="M13.336 7.845L6.164 15.017l-1.178-1.178 7.172-7.172H5.836V5H15v9.167h-1.664V7.845Z" fill="currentColor"/></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     COMMITMENT BANNER
═══════════════════════════════════════════ --}}
<section class="rda-commitment">
    <div class="container">
        <div class="rda-commitment__inner" data-aos="fade-up">
            <div class="rda-commitment__content">
                <span class="rda-eyebrow rda-eyebrow--light">Our Commitment</span>
                <h2 class="rda-h2 text-white">Building a healthier Rwanda, together</h2>
                <p class="rda-body text-white-70">
                    We believe that every Rwandan deserves access to accurate information, quality care, and a supportive community. Through strong partnerships and community-driven programs, we remain committed to a future free from preventable diabetes complications.
                </p>
                <div class="rda-commitment__actions">
                    <a href="{{ route('partner_with_us') }}" class="rda-btn rda-btn--white">
                        Partner with Us
                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><path d="M13.336 7.845L6.164 15.017l-1.178-1.178 7.172-7.172H5.836V5H15v9.167h-1.664V7.845Z" fill="currentColor"/></svg>
                    </a>
                    <a href="{{ route('contact') }}" class="rda-btn rda-btn--outline-white">Get in Touch</a>
                </div>
            </div>
            <div class="rda-commitment__visual">
                <div class="rda-commitment__ring rda-commitment__ring--1"></div>
                <div class="rda-commitment__ring rda-commitment__ring--2"></div>
                <div class="rda-commitment__ring rda-commitment__ring--3"></div>
                <div class="rda-commitment__icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     FAQ
═══════════════════════════════════════════ --}}
<section class="rda-faq">
    <div class="container">
        <div class="rda-faq__grid">

            {{-- Left --}}
            <div class="rda-faq__left" data-aos="fade-right">
                <span class="rda-eyebrow">FAQ</span>
                <h2 class="rda-h2">Frequently asked questions</h2>
                <p class="rda-body">Here are some of the questions we often receive from our community. Can't find what you're looking for?</p>
                <button class="rda-btn rda-btn--primary mt-2" data-bs-toggle="modal" data-bs-target="#askQuestionModal">
                    Ask Your Question
                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><path d="M13.336 7.845L6.164 15.017l-1.178-1.178 7.172-7.172H5.836V5H15v9.167h-1.664V7.845Z" fill="currentColor"/></svg>
                </button>
            </div>

            {{-- Right --}}
            <div class="rda-faq__right" data-aos="fade-left">
                <div class="rda-accordion">
                    @foreach($faqs as $i => $faq)
                    <div class="rda-accordion__item {{ $i === 0 ? 'is-open' : '' }}">
                        <button class="rda-accordion__trigger" aria-expanded="{{ $i === 0 ? 'true' : 'false' }}">
                            <span>{{ $faq->question }}</span>
                            <svg class="rda-accordion__arrow" width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="rda-accordion__body">
                            <div class="rda-accordion__body-inner">
                                {{ $faq->answer }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     MODAL
═══════════════════════════════════════════ --}}
<div class="modal fade" id="askQuestionModal" tabindex="-1" aria-labelledby="askQuestionModalLabel">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rda-modal">
            <div class="rda-modal__header">
                <div>
                    <h5 class="rda-modal__title" id="askQuestionModalLabel">Submit Your Question</h5>
                    <p class="rda-modal__sub">We'll get back to you as soon as possible.</p>
                </div>
                <button class="rda-modal__close" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6 6 18M6 6l12 12"/></svg>
                </button>
            </div>

            <form action="{{ route('questions.store') }}" method="POST">
                @csrf
                <div class="rda-modal__body">
                    <label class="rda-label" for="question-input">Your Question <span class="rda-required">*</span></label>
                    <textarea id="question-input" name="question" rows="5" class="rda-textarea" required placeholder="Type your question here…"></textarea>
                </div>
                <div class="rda-modal__footer">
                    <button type="button" class="rda-btn rda-btn--ghost" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="rda-btn rda-btn--primary">Submit Question</button>
                </div>
            </form>
        </div>
    </div>
</div>


{{-- ═══════════════════════════════════════════
     STYLES
═══════════════════════════════════════════ --}}
<style>
/* ── Variables ─────────────────────────────── */
:root {
    --rda-blue:       #19265d;
    --rda-blue-mid:   #243580;
    --rda-accent:     #D05208;
    --rda-accent-lt:  #f4ede7;
    --rda-teal:       #0e7c6a;
    --rda-teal-lt:    #e6f4f1;
    --rda-sky:        #1a6eb5;
    --rda-sky-lt:     #e8f1fb;
    --rda-text:       #1a1e2e;
    --rda-muted:      #5a6278;
    --rda-border:     #e4e8f0;
    --rda-bg:         #f6f8fc;
    --rda-white:      #ffffff;
    --rda-radius:     12px;
    --rda-radius-lg:  20px;
    --ff-head:        'Cormorant Garamond', Georgia, serif;
    --ff-body:        'DM Sans', system-ui, sans-serif;
}

/* ── Typography helpers ────────────────────── */
.rda-eyebrow {
    display: inline-block;
    font-family: var(--ff-body);
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--rda-accent);
    margin-bottom: 12px;
}
.rda-eyebrow--light { color: rgba(255,255,255,0.65); }
.rda-h1 {
    font-family: var(--ff-head);
    font-size: clamp(36px, 4vw, 52px);
    font-weight: 600;
    line-height: 1.15;
    color: var(--rda-blue);
    margin: 0 0 20px;
}
.rda-h1 em { font-style: italic; color: var(--rda-accent); }
.rda-h2 {
    font-family: var(--ff-head);
    font-size: clamp(28px, 3.5vw, 40px);
    font-weight: 600;
    line-height: 1.2;
    color: var(--rda-blue);
    margin: 0 0 16px;
}
.rda-h2.text-white { color: #fff; }
.rda-body-lg { font-family: var(--ff-body); font-size: 17px; line-height: 1.75; color: var(--rda-muted); margin: 0 0 16px; }
.rda-body { font-family: var(--ff-body); font-size: 15px; line-height: 1.75; color: var(--rda-muted); margin: 0 0 16px; }
.rda-body.text-white-70 { color: rgba(255,255,255,0.75); }

/* ── Buttons ───────────────────────────────── */
.rda-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: var(--ff-body);
    font-size: 14px;
    font-weight: 600;
    padding: 12px 24px;
    border-radius: 8px;
    text-decoration: none;
    border: none;
    cursor: pointer;
    transition: all 0.2s;
    letter-spacing: 0.01em;
}
.rda-btn--primary { background: var(--rda-accent); color: #fff; }
.rda-btn--primary:hover { background: #b3420a; color: #fff; transform: translateY(-1px); }
.rda-btn--ghost { background: transparent; color: var(--rda-blue); border: 1.5px solid var(--rda-border); }
.rda-btn--ghost:hover { border-color: var(--rda-blue); background: var(--rda-bg); }
.rda-btn--white { background: #fff; color: var(--rda-blue); }
.rda-btn--white:hover { background: rgba(255,255,255,0.9); color: var(--rda-blue); transform: translateY(-1px); }
.rda-btn--outline-white { background: transparent; color: #fff; border: 1.5px solid rgba(255,255,255,0.4); }
.rda-btn--outline-white:hover { background: rgba(255,255,255,0.1); color: #fff; }
.mt-2 { margin-top: 8px; }

/* ─────────────────────────────────────────── */
/* SECTION 1: Hero Split                       */
/* ─────────────────────────────────────────── */
.rda-hero-split {
    padding: 100px 0 80px;
    background: var(--rda-white);
}
.rda-hero-split__grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 72px;
    align-items: center;
}
@media (max-width: 900px) {
    .rda-hero-split__grid { grid-template-columns: 1fr; gap: 40px; }
}

/* Image frame */
.rda-image-frame {
    position: relative;
    border-radius: var(--rda-radius-lg);
    overflow: hidden;
}
.rda-image-frame img {
    width: 100%;
    height: 520px;
    object-fit: cover;
    border-radius: var(--rda-radius-lg);
    display: block;
}
.rda-image-badge {
    position: absolute;
    bottom: 24px;
    left: 24px;
    background: var(--rda-white);
    border-radius: var(--rda-radius);
    padding: 14px 20px;
    display: flex;
    flex-direction: column;
    box-shadow: 0 4px 20px rgba(0,0,0,0.12);
}
.badge-year { font-size: 11px; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; color: var(--rda-muted); }
.badge-num { font-family: var(--ff-head); font-size: 32px; font-weight: 700; line-height: 1; color: var(--rda-blue); }
.badge-label { font-size: 11px; color: var(--rda-muted); margin-top: 2px; }

/* Content */
.rda-hero-split__actions {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
    margin: 28px 0 36px;
}
.rda-stat-strip {
    display: flex;
    align-items: center;
    gap: 24px;
    padding: 20px 24px;
    background: var(--rda-bg);
    border-radius: var(--rda-radius);
    border: 1px solid var(--rda-border);
}
.rda-stat { display: flex; flex-direction: column; }
.rda-stat__num { font-family: var(--ff-head); font-size: 26px; font-weight: 700; color: var(--rda-blue); line-height: 1; }
.rda-stat__label { font-size: 12px; color: var(--rda-muted); margin-top: 3px; }
.rda-stat-divider { width: 1px; height: 36px; background: var(--rda-border); }

/* ─────────────────────────────────────────── */
/* SECTION 2: Mission / Vision / Objectives   */
/* ─────────────────────────────────────────── */
.rda-mvp {
    padding: 100px 0;
    background: var(--rda-bg);
}
.rda-section-header {
    margin-bottom: 52px;
}
.rda-mvp__grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin-bottom: 64px;
}
@media (max-width: 860px) {
    .rda-mvp__grid { grid-template-columns: 1fr; }
}

/* MVP Card */
.rda-mvp-card {
    background: var(--rda-white);
    border-radius: var(--rda-radius-lg);
    padding: 36px 32px;
    border: 1px solid var(--rda-border);
    position: relative;
    overflow: hidden;
    transition: transform 0.2s, box-shadow 0.2s;
}
.rda-mvp-card:hover { transform: translateY(-4px); box-shadow: 0 12px 40px rgba(25,38,93,0.1); }
.rda-mvp-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
}
.rda-mvp-card--mission::before { background: var(--rda-accent); }
.rda-mvp-card--vision::before  { background: var(--rda-teal); }
.rda-mvp-card--objectives::before { background: var(--rda-sky); }

.rda-mvp-card__icon {
    width: 52px; height: 52px;
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 20px;
}
.rda-mvp-card--mission .rda-mvp-card__icon { background: var(--rda-accent-lt); color: var(--rda-accent); }
.rda-mvp-card--vision  .rda-mvp-card__icon { background: var(--rda-teal-lt); color: var(--rda-teal); }
.rda-mvp-card--objectives .rda-mvp-card__icon { background: var(--rda-sky-lt); color: var(--rda-sky); }

.rda-mvp-card__tag {
    display: inline-block;
    font-size: 11px; font-weight: 600;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    margin-bottom: 8px;
}
.rda-mvp-card--mission .rda-mvp-card__tag { color: var(--rda-accent); }
.rda-mvp-card--vision  .rda-mvp-card__tag { color: var(--rda-teal); }
.rda-mvp-card--objectives .rda-mvp-card__tag { color: var(--rda-sky); }

.rda-mvp-card__title {
    font-family: var(--ff-head);
    font-size: 24px; font-weight: 700;
    color: var(--rda-blue);
    margin: 0 0 12px;
}
.rda-mvp-card__body { font-family: var(--ff-body); font-size: 15px; line-height: 1.75; color: var(--rda-muted); margin: 0; }
.rda-mvp-card__list {
    list-style: none; margin: 0; padding: 0;
    display: flex; flex-direction: column; gap: 10px;
}
.rda-mvp-card__list li {
    font-family: var(--ff-body); font-size: 14px; line-height: 1.6; color: var(--rda-muted);
    padding-left: 18px; position: relative;
}
.rda-mvp-card__list li::before {
    content: '';
    position: absolute; left: 0; top: 9px;
    width: 6px; height: 6px;
    border-radius: 50%;
    background: var(--rda-sky);
}

/* Image row */
.rda-mvp__image-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 48px;
    align-items: center;
}
@media (max-width: 768px) {
    .rda-mvp__image-row { grid-template-columns: 1fr; }
}
.rda-mvp__image-wrap img {
    width: 100%; height: 380px;
    object-fit: cover;
    border-radius: var(--rda-radius-lg);
    display: block;
}
.rda-blockquote {
    font-family: var(--ff-head);
    font-size: 22px;
    font-weight: 500;
    font-style: italic;
    line-height: 1.5;
    color: var(--rda-blue);
    border-left: 3px solid var(--rda-accent);
    padding-left: 20px;
    margin: 0 0 32px;
}

/* ─────────────────────────────────────────── */
/* SECTION 3: Programs                         */
/* ─────────────────────────────────────────── */
.rda-programs {
    padding: 100px 0;
    background: var(--rda-white);
}
.rda-programs__header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 48px;
    gap: 24px;
}
.rda-programs__grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}
@media (max-width: 860px) {
    .rda-programs__grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 560px) {
    .rda-programs__grid { grid-template-columns: 1fr; }
}

.rda-program-card {
    background: var(--rda-bg);
    border: 1px solid var(--rda-border);
    border-radius: var(--rda-radius-lg);
    padding: 32px 28px;
    display: flex;
    flex-direction: column;
    transition: background 0.2s, box-shadow 0.2s, transform 0.2s;
}
.rda-program-card:hover {
    background: var(--rda-white);
    box-shadow: 0 8px 32px rgba(25,38,93,0.08);
    transform: translateY(-3px);
}
.rda-program-card__num {
    font-family: var(--ff-head);
    font-size: 13px;
    font-weight: 600;
    color: var(--rda-accent);
    letter-spacing: 0.08em;
    margin-bottom: 16px;
    display: block;
}
.rda-program-card__title {
    font-family: var(--ff-head);
    font-size: 20px;
    font-weight: 700;
    color: var(--rda-blue);
    margin: 0 0 10px;
    line-height: 1.3;
}
.rda-program-card__body {
    font-family: var(--ff-body);
    font-size: 14px;
    line-height: 1.7;
    color: var(--rda-muted);
    margin: 0;
    flex: 1;
}
.rda-program-card__link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-family: var(--ff-body);
    font-size: 13px;
    font-weight: 600;
    color: var(--rda-accent);
    text-decoration: none;
    margin-top: 20px;
    transition: gap 0.2s;
}
.rda-program-card__link:hover { gap: 10px; }

/* ─────────────────────────────────────────── */
/* SECTION 4: Commitment                       */
/* ─────────────────────────────────────────── */
.rda-commitment {
    padding: 0 0 100px;
    background: var(--rda-white);
}
.rda-commitment__inner {
    background: linear-gradient(135deg, var(--rda-blue) 0%, var(--rda-blue-mid) 100%);
    border-radius: var(--rda-radius-lg);
    padding: 72px 64px;
    display: grid;
    grid-template-columns: 1fr 280px;
    gap: 48px;
    align-items: center;
    position: relative;
    overflow: hidden;
}
@media (max-width: 768px) {
    .rda-commitment__inner { grid-template-columns: 1fr; padding: 48px 32px; }
    .rda-commitment__visual { display: none; }
}
.rda-commitment__actions {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    margin-top: 28px;
}
.rda-commitment__visual {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 200px;
}
.rda-commitment__ring {
    position: absolute;
    border-radius: 50%;
    border: 1px solid rgba(255,255,255,0.15);
}
.rda-commitment__ring--1 { width: 180px; height: 180px; }
.rda-commitment__ring--2 { width: 130px; height: 130px; border-color: rgba(255,255,255,0.2); }
.rda-commitment__ring--3 { width: 80px; height: 80px; background: rgba(255,255,255,0.08); }
.rda-commitment__icon {
    position: relative; z-index: 1;
    width: 72px; height: 72px;
    border-radius: 50%;
    background: rgba(255,255,255,0.12);
    display: flex; align-items: center; justify-content: center;
}

/* ─────────────────────────────────────────── */
/* SECTION 5: FAQ                              */
/* ─────────────────────────────────────────── */
.rda-faq {
    padding: 100px 0;
    background: var(--rda-bg);
}
.rda-faq__grid {
    display: grid;
    grid-template-columns: 400px 1fr;
    gap: 80px;
    align-items: start;
}
@media (max-width: 900px) {
    .rda-faq__grid { grid-template-columns: 1fr; gap: 40px; }
}
.rda-faq__left { position: sticky; top: 100px; }

/* Accordion */
.rda-accordion { display: flex; flex-direction: column; gap: 0; }
.rda-accordion__item {
    border-bottom: 1px solid var(--rda-border);
}
.rda-accordion__item:first-child { border-top: 1px solid var(--rda-border); }
.rda-accordion__trigger {
    width: 100%;
    background: none; border: none; cursor: pointer;
    display: flex; align-items: center; justify-content: space-between;
    gap: 16px;
    padding: 20px 0;
    font-family: var(--ff-body);
    font-size: 15px;
    font-weight: 500;
    color: var(--rda-text);
    text-align: left;
    transition: color 0.15s;
}
.rda-accordion__trigger:hover { color: var(--rda-blue); }
.rda-accordion__arrow {
    flex-shrink: 0;
    transition: transform 0.25s;
    color: var(--rda-muted);
}
.rda-accordion__item.is-open .rda-accordion__arrow { transform: rotate(180deg); }
.rda-accordion__item.is-open .rda-accordion__trigger { color: var(--rda-blue); }
.rda-accordion__body { display: none; }
.rda-accordion__item.is-open .rda-accordion__body { display: block; }
.rda-accordion__body-inner {
    padding: 0 0 20px;
    font-family: var(--ff-body);
    font-size: 14px;
    line-height: 1.75;
    color: var(--rda-muted);
}

/* ─────────────────────────────────────────── */
/* MODAL                                       */
/* ─────────────────────────────────────────── */
.rda-modal { border-radius: var(--rda-radius-lg); border: none; overflow: hidden; }
.rda-modal__header {
    display: flex; align-items: flex-start; justify-content: space-between;
    padding: 28px 28px 0;
}
.rda-modal__title {
    font-family: var(--ff-head);
    font-size: 22px; font-weight: 700;
    color: var(--rda-blue); margin: 0 0 4px;
}
.rda-modal__sub { font-size: 13px; color: var(--rda-muted); margin: 0; }
.rda-modal__close {
    background: none; border: none; cursor: pointer;
    color: var(--rda-muted); padding: 4px;
    border-radius: 6px; transition: background 0.15s;
}
.rda-modal__close:hover { background: var(--rda-bg); }
.rda-modal__body { padding: 24px 28px; }
.rda-label {
    display: block; font-family: var(--ff-body);
    font-size: 13px; font-weight: 600;
    color: var(--rda-text); margin-bottom: 8px;
}
.rda-required { color: var(--rda-accent); }
.rda-textarea {
    width: 100%; border: 1.5px solid var(--rda-border);
    border-radius: 10px; padding: 12px 14px;
    font-family: var(--ff-body); font-size: 14px;
    color: var(--rda-text); resize: vertical;
    transition: border-color 0.15s;
    outline: none;
    background: var(--rda-white);
}
.rda-textarea:focus { border-color: var(--rda-blue); }
.rda-modal__footer {
    padding: 0 28px 28px;
    display: flex; justify-content: flex-end; gap: 10px;
}
</style>

{{-- ═══════════════════════════════════════════
     SCRIPTS
═══════════════════════════════════════════ --}}
<script>
document.querySelectorAll('.rda-accordion__trigger').forEach(btn => {
    btn.addEventListener('click', () => {
        const item = btn.closest('.rda-accordion__item');
        const isOpen = item.classList.contains('is-open');
        document.querySelectorAll('.rda-accordion__item').forEach(i => i.classList.remove('is-open'));
        if (!isOpen) item.classList.add('is-open');
    });
});
</script>

@endsection