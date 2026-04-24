@extends('layouts.base')
@section('title', 'Mission, Vision & Objectives')
@section('content')

{{-- ═══════════════════════════════════════════
     PAGE HERO
═══════════════════════════════════════════ --}}
<section class="mvp-hero">
    <div class="container">
        <div class="mvp-hero__inner" data-aos="fade-up">
            <span class="mvp-eyebrow">Our Foundation</span>
            <h1 class="mvp-h1">Mission, Vision <em>&amp; Objectives</em></h1>
            <p class="mvp-lead">
                The principles and purpose that guide every program, partnership, and person at the Rwanda Diabetes Association.
            </p>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     MISSION + VISION — SIDE BY SIDE
═══════════════════════════════════════════ --}}
<section class="mvp-two-col">
    <div class="container">
        <div class="mvp-two-col__grid">

            {{-- Mission --}}
            <div class="mvp-pillar mvp-pillar--mission" data-aos="fade-up" data-aos-delay="0">
                <div class="mvp-pillar__icon-wrap">
                    <div class="mvp-pillar__icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/>
                        </svg>
                    </div>
                </div>
                <div class="mvp-pillar__tag">Mission</div>
                <h2 class="mvp-pillar__title">Our Mission</h2>
                <p class="mvp-pillar__body">
                    To improve the well-being of people living with diabetes in Rwanda through education, early detection, advocacy, and accessible care — reaching every community, everywhere.
                </p>
                <div class="mvp-pillar__footer">
                    <span class="mvp-pillar__footer-label">Est. 1997</span>
                    <span class="mvp-pillar__footer-sep">·</span>
                    <span class="mvp-pillar__footer-label">Kigali, Rwanda</span>
                </div>
            </div>

            {{-- Vision --}}
            <div class="mvp-pillar mvp-pillar--vision" data-aos="fade-up" data-aos-delay="120">
                <div class="mvp-pillar__icon-wrap">
                    <div class="mvp-pillar__icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
                        </svg>
                    </div>
                </div>
                <div class="mvp-pillar__tag">Vision</div>
                <h2 class="mvp-pillar__title">Our Vision</h2>
                <p class="mvp-pillar__body">
                    A Rwanda where no one dies or suffers preventable complications from diabetes — a future built through unwavering commitment, community action, and quality care.
                </p>
                <div class="mvp-pillar__quote">
                    <blockquote>"A diabetes-complication-free Rwanda for every generation."</blockquote>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     OBJECTIVES — FULL SECTION
═══════════════════════════════════════════ --}}
<section class="mvp-objectives">
    <div class="container">
        <div class="mvp-objectives__header" data-aos="fade-up">
            <div class="mvp-objectives__header-text">
                <span class="mvp-eyebrow mvp-eyebrow--teal">Objectives</span>
                <h2 class="mvp-h2">Five pillars of our work</h2>
                <p class="mvp-body">
                    Every initiative we run is anchored to these core objectives — from grassroots community programs to national policy advocacy.
                </p>
            </div>
            <div class="mvp-objectives__image" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{ asset('assets/img/C66A9303.jpg') }}" alt="RDA Community Outreach" loading="lazy">
                <div class="mvp-objectives__image-badge">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    <span>Impact-driven since 1997</span>
                </div>
            </div>
        </div>

        <div class="mvp-objectives__list">
            <div class="mvp-obj-item" data-aos="fade-up" data-aos-delay="0">
                <div class="mvp-obj-item__num">01</div>
                <div class="mvp-obj-item__content">
                    <h3 class="mvp-obj-item__title">Prevention &amp; Treatment</h3>
                    <p class="mvp-obj-item__body">Prevent and treat diabetes and its complications through accessible screenings, clinical partnerships, and evidence-based care delivery across Rwanda.</p>
                </div>
                <div class="mvp-obj-item__icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                </div>
            </div>

            <div class="mvp-obj-item" data-aos="fade-up" data-aos-delay="60">
                <div class="mvp-obj-item__num">02</div>
                <div class="mvp-obj-item__content">
                    <h3 class="mvp-obj-item__title">Education &amp; Mobilisation</h3>
                    <p class="mvp-obj-item__body">Educate and mobilize citizens to understand, prevent, and effectively manage diabetes — equipping communities with the knowledge to protect their health.</p>
                </div>
                <div class="mvp-obj-item__icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                </div>
            </div>

            <div class="mvp-obj-item" data-aos="fade-up" data-aos-delay="120">
                <div class="mvp-obj-item__num">03</div>
                <div class="mvp-obj-item__content">
                    <h3 class="mvp-obj-item__title">Community &amp; Family Support</h3>
                    <p class="mvp-obj-item__body">Support families and empower communities with reliable, up-to-date health information — reducing stigma and building resilient support networks.</p>
                </div>
                <div class="mvp-obj-item__icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
            </div>

            <div class="mvp-obj-item" data-aos="fade-up" data-aos-delay="180">
                <div class="mvp-obj-item__num">04</div>
                <div class="mvp-obj-item__content">
                    <h3 class="mvp-obj-item__title">Research &amp; Data</h3>
                    <p class="mvp-obj-item__body">Promote diabetes research and data collection to continuously improve national care standards, inform evidence-based interventions, and track our collective progress.</p>
                </div>
                <div class="mvp-obj-item__icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                </div>
            </div>

            <div class="mvp-obj-item" data-aos="fade-up" data-aos-delay="240">
                <div class="mvp-obj-item__num">05</div>
                <div class="mvp-obj-item__content">
                    <h3 class="mvp-obj-item__title">Policy &amp; Partnerships</h3>
                    <p class="mvp-obj-item__body">Advocate for stronger national diabetes policies and collaborate with local and international partners to amplify impact and build a sustainable health ecosystem.</p>
                </div>
                <div class="mvp-obj-item__icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     CTA STRIP
═══════════════════════════════════════════ --}}
<section class="mvp-cta">
    <div class="container">
        <div class="mvp-cta__inner" data-aos="fade-up">
            <div class="mvp-cta__text">
                <h3 class="mvp-cta__title">See how our mission translates into real impact</h3>
                <p class="mvp-cta__body">Explore the stories, numbers, and milestones that show what these commitments mean in practice.</p>
            </div>
            <div class="mvp-cta__actions">
                <a href="{{ route('impact') }}" class="mvp-btn mvp-btn--primary">
                    Our Impact
                    <svg width="15" height="15" viewBox="0 0 20 20" fill="none"><path d="M13.336 7.845L6.164 15.017l-1.178-1.178 7.172-7.172H5.836V5H15v9.167h-1.664V7.845Z" fill="currentColor"/></svg>
                </a>
                <a href="{{ route('partner_with_us') }}" class="mvp-btn mvp-btn--ghost">Partner With Us</a>
            </div>
        </div>
    </div>
</section>


<style>
/* ── Design tokens ──────────────────────────────── */
:root {
    --c-navy:       #19265d;
    --c-navy-mid:   #243580;
    --c-orange:     #D05208;
    --c-orange-lt:  #fdf0ea;
    --c-teal:       #0e7c6a;
    --c-teal-lt:    #e4f4f1;
    --c-sky:        #1a6eb5;
    --c-sky-lt:     #e7f1fb;
    --c-text:       #1a1e2e;
    --c-muted:      #5a6278;
    --c-border:     #e3e8f0;
    --c-bg:         #f5f7fc;
    --c-white:      #ffffff;
    --r-md:         12px;
    --r-lg:         20px;
    --ff-h:         'Cormorant Garamond', Georgia, serif;
    --ff-b:         'DM Sans', system-ui, sans-serif;
}

/* ── Shared helpers ─────────────────────────────── */
.mvp-eyebrow {
    display: inline-block;
    font-family: var(--ff-b);
    font-size: 11.5px; font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--c-orange);
    margin-bottom: 10px;
}
.mvp-eyebrow--teal { color: var(--c-teal); }

.mvp-h1 {
    font-family: var(--ff-h);
    font-size: clamp(36px, 4.5vw, 56px);
    font-weight: 600; line-height: 1.12;
    color: var(--c-navy);
    margin: 0 0 16px;
}
.mvp-h1 em { font-style: italic; color: var(--c-orange); }

.mvp-h2 {
    font-family: var(--ff-h);
    font-size: clamp(26px, 3vw, 38px);
    font-weight: 600; line-height: 1.2;
    color: var(--c-navy);
    margin: 0 0 14px;
}

.mvp-lead {
    font-family: var(--ff-b);
    font-size: 17px; line-height: 1.75;
    color: var(--c-muted);
    max-width: 580px; margin: 0 auto;
}
.mvp-body {
    font-family: var(--ff-b);
    font-size: 15px; line-height: 1.75;
    color: var(--c-muted); margin: 0 0 14px;
}

.mvp-btn {
    display: inline-flex; align-items: center; gap: 8px;
    font-family: var(--ff-b); font-size: 14px; font-weight: 600;
    padding: 12px 24px; border-radius: 8px;
    text-decoration: none; border: none; cursor: pointer;
    transition: all 0.2s;
}
.mvp-btn--primary { background: var(--c-orange); color: #fff; }
.mvp-btn--primary:hover { background: #b3420a; color: #fff; transform: translateY(-1px); }
.mvp-btn--ghost {
    background: transparent; color: var(--c-navy);
    border: 1.5px solid var(--c-border);
}
.mvp-btn--ghost:hover { border-color: var(--c-navy); background: var(--c-bg); }

/* ─────────────────────────────────────────────── */
/* HERO                                            */
/* ─────────────────────────────────────────────── */
.mvp-hero {
    padding: 96px 0 64px;
    background: var(--c-white);
    text-align: center;
    border-bottom: 1px solid var(--c-border);
}
.mvp-hero__inner { max-width: 660px; margin: 0 auto; }

/* ─────────────────────────────────────────────── */
/* MISSION + VISION                                */
/* ─────────────────────────────────────────────── */
.mvp-two-col {
    padding: 80px 0;
    background: var(--c-bg);
}
.mvp-two-col__grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 28px;
}
@media (max-width: 768px) {
    .mvp-two-col__grid { grid-template-columns: 1fr; }
}

/* Pillar card */
.mvp-pillar {
    background: var(--c-white);
    border-radius: var(--r-lg);
    border: 1px solid var(--c-border);
    padding: 44px 40px;
    display: flex; flex-direction: column;
    position: relative; overflow: hidden;
    transition: transform 0.2s, box-shadow 0.2s;
}
.mvp-pillar:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 48px rgba(25,38,93,0.09);
}
.mvp-pillar::after {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 4px;
    border-radius: var(--r-lg) var(--r-lg) 0 0;
}
.mvp-pillar--mission::after { background: var(--c-orange); }
.mvp-pillar--vision::after  { background: var(--c-teal); }

/* Large decorative number watermark */
.mvp-pillar::before {
    content: attr(data-num);
    position: absolute;
    right: 24px; top: 16px;
    font-family: var(--ff-h);
    font-size: 80px; font-weight: 700;
    line-height: 1;
    color: var(--c-border);
    pointer-events: none;
    user-select: none;
}

.mvp-pillar__icon-wrap { margin-bottom: 24px; }
.mvp-pillar__icon {
    width: 56px; height: 56px;
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
}
.mvp-pillar--mission .mvp-pillar__icon { background: var(--c-orange-lt); color: var(--c-orange); }
.mvp-pillar--vision  .mvp-pillar__icon { background: var(--c-teal-lt);   color: var(--c-teal);   }

.mvp-pillar__tag {
    font-family: var(--ff-b);
    font-size: 11px; font-weight: 700;
    letter-spacing: 0.12em; text-transform: uppercase;
    margin-bottom: 8px;
}
.mvp-pillar--mission .mvp-pillar__tag { color: var(--c-orange); }
.mvp-pillar--vision  .mvp-pillar__tag { color: var(--c-teal); }

.mvp-pillar__title {
    font-family: var(--ff-h);
    font-size: 28px; font-weight: 700;
    color: var(--c-navy); margin: 0 0 16px; line-height: 1.2;
}
.mvp-pillar__body {
    font-family: var(--ff-b);
    font-size: 15px; line-height: 1.8;
    color: var(--c-muted); margin: 0; flex: 1;
}

/* Footer row inside pillar */
.mvp-pillar__footer {
    display: flex; align-items: center; gap: 8px;
    margin-top: 28px;
    padding-top: 20px;
    border-top: 1px solid var(--c-border);
}
.mvp-pillar__footer-label {
    font-family: var(--ff-b);
    font-size: 12px; color: var(--c-muted);
}
.mvp-pillar__footer-sep { color: var(--c-border); }

/* Quote block inside vision pillar */
.mvp-pillar__quote {
    margin-top: 28px;
    padding: 16px 20px;
    background: var(--c-teal-lt);
    border-radius: var(--r-md);
    border-left: 3px solid var(--c-teal);
}
.mvp-pillar__quote blockquote {
    font-family: var(--ff-h);
    font-size: 16px; font-style: italic; font-weight: 500;
    color: var(--c-teal); margin: 0; line-height: 1.6;
}

/* ─────────────────────────────────────────────── */
/* OBJECTIVES                                      */
/* ─────────────────────────────────────────────── */
.mvp-objectives {
    padding: 100px 0;
    background: var(--c-white);
}
.mvp-objectives__header {
    display: grid;
    grid-template-columns: 1fr 400px;
    gap: 60px;
    align-items: center;
    margin-bottom: 64px;
}
@media (max-width: 900px) {
    .mvp-objectives__header { grid-template-columns: 1fr; }
    .mvp-objectives__image { order: -1; }
}

.mvp-objectives__image {
    position: relative;
    border-radius: var(--r-lg);
    overflow: hidden;
}
.mvp-objectives__image img {
    width: 100%; height: 300px;
    object-fit: cover; display: block;
    border-radius: var(--r-lg);
}
.mvp-objectives__image-badge {
    position: absolute;
    bottom: 16px; left: 16px;
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(8px);
    border-radius: 10px;
    padding: 10px 14px;
    display: flex; align-items: center; gap: 8px;
    font-family: var(--ff-b); font-size: 13px; font-weight: 600;
    color: var(--c-teal);
    box-shadow: 0 4px 16px rgba(0,0,0,0.1);
}

/* Objective rows */
.mvp-objectives__list {
    display: flex; flex-direction: column;
    gap: 0;
    border: 1px solid var(--c-border);
    border-radius: var(--r-lg);
    overflow: hidden;
}

.mvp-obj-item {
    display: grid;
    grid-template-columns: 72px 1fr 52px;
    align-items: center;
    gap: 0;
    padding: 28px 32px;
    border-bottom: 1px solid var(--c-border);
    background: var(--c-white);
    transition: background 0.2s;
}
.mvp-obj-item:last-child { border-bottom: none; }
.mvp-obj-item:hover { background: var(--c-bg); }

.mvp-obj-item__num {
    font-family: var(--ff-h);
    font-size: 22px; font-weight: 700;
    color: var(--c-orange);
    line-height: 1;
    padding-right: 24px;
    border-right: 1px solid var(--c-border);
}
.mvp-obj-item__content {
    padding: 0 28px;
}
.mvp-obj-item__title {
    font-family: var(--ff-h);
    font-size: 20px; font-weight: 700;
    color: var(--c-navy);
    margin: 0 0 6px; line-height: 1.3;
}
.mvp-obj-item__body {
    font-family: var(--ff-b);
    font-size: 14px; line-height: 1.7;
    color: var(--c-muted); margin: 0;
}
.mvp-obj-item__icon {
    color: var(--c-border);
    display: flex; align-items: center; justify-content: flex-end;
    transition: color 0.2s;
}
.mvp-obj-item:hover .mvp-obj-item__icon { color: var(--c-teal); }

@media (max-width: 640px) {
    .mvp-obj-item {
        grid-template-columns: 48px 1fr;
        padding: 20px;
    }
    .mvp-obj-item__icon { display: none; }
    .mvp-obj-item__num { padding-right: 16px; font-size: 18px; }
    .mvp-obj-item__content { padding: 0 0 0 16px; }
}

/* ─────────────────────────────────────────────── */
/* CTA STRIP                                       */
/* ─────────────────────────────────────────────── */
.mvp-cta {
    padding: 0 0 100px;
    background: var(--c-white);
}
.mvp-cta__inner {
    background: linear-gradient(130deg, var(--c-navy) 0%, var(--c-navy-mid) 100%);
    border-radius: var(--r-lg);
    padding: 56px 64px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
}
@media (max-width: 768px) {
    .mvp-cta__inner { flex-direction: column; padding: 40px 28px; align-items: flex-start; }
}
.mvp-cta__title {
    font-family: var(--ff-h);
    font-size: clamp(22px, 2.5vw, 30px);
    font-weight: 600; line-height: 1.25;
    color: #fff; margin: 0 0 8px;
}
.mvp-cta__body {
    font-family: var(--ff-b);
    font-size: 15px; line-height: 1.65;
    color: rgba(255,255,255,0.7);
    margin: 0;
}
.mvp-cta__actions {
    display: flex; gap: 12px; flex-wrap: wrap; flex-shrink: 0;
}
.mvp-cta__actions .mvp-btn--ghost {
    color: rgba(255,255,255,0.85);
    border-color: rgba(255,255,255,0.3);
}
.mvp-cta__actions .mvp-btn--ghost:hover {
    background: rgba(255,255,255,0.1);
    color: #fff; border-color: rgba(255,255,255,0.5);
}
</style>

@endsection