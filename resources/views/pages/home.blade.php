@extends('layouts.base')
@section('title', 'Rwanda Diabetes Association — Improving Lives Through Care & Education')
@section('content')

<style>
/* =============================================
   DESIGN SYSTEM — Rwanda Diabetes Association
   Aesthetic: Refined Medical · Editorial · Warm Authority
   ============================================= */
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap');

:root {
  --navy:      #0B2740;
  --teal:      #0E6B6B;
  --teal-lt:   #14908E;
  --gold:      #C8973A;
  --gold-lt:   #E8B55A;
  --cream:     #F8F5F0;
  --white:     #FFFFFF;
  --gray-50:   #F4F6F8;
  --gray-100:  #E8ECF0;
  --gray-400:  #9AAAB8;
  --gray-600:  #5A6B7A;
  --gray-800:  #2A3D4F;
  --text:      #1E2E3D;
  --radius-sm: 8px;
  --radius:    16px;
  --radius-lg: 24px;
  --radius-xl: 32px;
  --shadow-sm: 0 2px 8px rgba(11,39,64,.06);
  --shadow:    0 8px 32px rgba(11,39,64,.10);
  --shadow-lg: 0 20px 60px rgba(11,39,64,.15);
  --transition: all .3s cubic-bezier(.4,0,.2,1);
}

*, *::before, *::after { box-sizing: border-box; }

body {
  font-family: 'DM Sans', sans-serif;
  color: var(--text);
  background: var(--white);
  -webkit-font-smoothing: antialiased;
}

/* ── UTILITY ── */
.rda-btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 14px 28px;
  border-radius: 50px;
  font-family: 'DM Sans', sans-serif;
  font-size: 15px;
  font-weight: 600;
  letter-spacing: .02em;
  text-decoration: none;
  transition: var(--transition);
  cursor: pointer;
  border: none;
}
.rda-btn--primary {
  background: var(--teal);
  color: var(--white);
  box-shadow: 0 4px 20px rgba(14,107,107,.3);
}
.rda-btn--primary:hover {
  background: var(--teal-lt);
  transform: translateY(-2px);
  box-shadow: 0 8px 28px rgba(14,107,107,.4);
  color: var(--white);
}
.rda-btn--outline {
  background: transparent;
  color: var(--navy);
  border: 2px solid var(--navy);
}
.rda-btn--outline:hover {
  background: var(--navy);
  color: var(--white);
  transform: translateY(-2px);
}
.rda-btn--ghost-white {
  background: rgba(255,255,255,.15);
  color: var(--white);
  border: 2px solid rgba(255,255,255,.4);
  backdrop-filter: blur(8px);
}
.rda-btn--ghost-white:hover {
  background: var(--white);
  color: var(--navy);
  transform: translateY(-2px);
}

.rda-tag {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 6px 16px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: .08em;
  text-transform: uppercase;
  background: rgba(14,107,107,.1);
  color: var(--teal);
}
.rda-tag--white {
  background: rgba(255,255,255,.2);
  color: var(--white);
}
.rda-tag__dot {
  width: 6px; height: 6px;
  border-radius: 50%;
  background: currentColor;
  flex-shrink: 0;
}

.section-eyebrow {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 16px;
}

h1, h2, h3 {
  font-family: 'Playfair Display', serif;
  line-height: 1.15;
}

/* ── HERO ── */
.rda-hero {
  position: relative;
  height: 100vh;
  min-height: 640px;
  overflow: hidden;
}
.rda-hero .swiper, .rda-hero .swiper-wrapper, .rda-hero .swiper-slide {
  height: 100%;
}
.rda-hero__slide {
  position: relative;
  height: 100%;
}
.rda-hero__slide img {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transform: scale(1.08);
  transition: transform 7s ease;
}
.swiper-slide-active .rda-hero__slide img {
  transform: scale(1);
}
.rda-hero__overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg,
    rgba(11,39,64,.82) 0%,
    rgba(11,39,64,.55) 50%,
    rgba(11,39,64,.25) 100%);
}
.rda-hero__content {
  position: absolute;
  inset: 0;
  display: flex;
  align-items: center;
}
.rda-hero__inner {
  max-width: 700px;
  padding: 0 24px;
  opacity: 0;
  transform: translateY(30px);
  transition: opacity .9s ease .3s, transform .9s ease .3s;
}
.swiper-slide-active .rda-hero__inner {
  opacity: 1;
  transform: translateY(0);
}
.rda-hero__heading {
  font-family: 'Playfair Display', serif;
  font-size: clamp(38px, 5vw, 64px);
  font-weight: 700;
  color: var(--white);
  line-height: 1.1;
  margin: 16px 0 20px;
}
.rda-hero__text {
  font-size: 18px;
  color: rgba(255,255,255,.82);
  line-height: 1.7;
  margin-bottom: 36px;
  max-width: 540px;
}
.rda-hero__actions { display: flex; gap: 16px; flex-wrap: wrap; }

/* Hero nav */
.rda-hero__nav {
  position: absolute;
  bottom: 48px;
  left: 50%;
  transform: translateX(-50%);
  z-index: 20;
  display: flex;
  align-items: center;
  gap: 20px;
}
.rda-hero__arrows {
  display: flex;
  gap: 10px;
}
.rda-hero__arrow {
  width: 44px; height: 44px;
  border-radius: 50%;
  background: rgba(255,255,255,.15);
  border: 1px solid rgba(255,255,255,.3);
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: var(--transition);
  backdrop-filter: blur(8px);
}
.rda-hero__arrow:hover { background: var(--teal); border-color: var(--teal); }

.rda-hero-pagination {
  display: flex;
  gap: 8px;
  align-items: center;
}
.rda-hero-pagination .swiper-pagination-bullet {
  width: 8px; height: 8px;
  border-radius: 50%;
  background: rgba(255,255,255,.4);
  opacity: 1;
  transition: var(--transition);
  cursor: pointer;
}
.rda-hero-pagination .swiper-pagination-bullet-active {
  width: 28px;
  border-radius: 4px;
  background: var(--white);
}

/* ── PROGRAMS ── */
.rda-programs {
  padding: 120px 0 80px;
  background: var(--white);
}
.rda-programs__header {
  text-align: center;
  margin-bottom: 64px;
}
.rda-programs__heading {
  font-size: clamp(30px, 3.5vw, 44px);
  color: var(--navy);
  margin: 0 0 20px;
}
.rda-programs__subtext {
  font-size: 17px;
  color: var(--gray-600);
  max-width: 560px;
  margin: 0 auto;
  line-height: 1.7;
}

.rda-program-card {
  background: var(--white);
  border: 1px solid var(--gray-100);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: var(--transition);
  height: 100%;
  display: flex;
  flex-direction: column;
}
.rda-program-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
  border-color: transparent;
}
.rda-program-card__img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  display: block;
  transition: transform .5s ease;
}
.rda-program-card:hover .rda-program-card__img {
  transform: scale(1.04);
}
.rda-program-card__img-wrap {
  overflow: hidden;
  height: 220px;
}
.rda-program-card__body {
  padding: 28px 32px 32px;
  flex: 1;
  display: flex;
  flex-direction: column;
}
.rda-program-card__title {
  font-size: 22px;
  color: var(--navy);
  margin: 0 0 12px;
}
.rda-program-card__text {
  font-size: 15px;
  color: var(--gray-600);
  line-height: 1.7;
  flex: 1;
  margin-bottom: 24px;
}

/* ── ABOUT ── */
.rda-about {
  padding: 100px 0;
  background: var(--cream);
  position: relative;
  overflow: hidden;
}
.rda-about::before {
  content: '';
  position: absolute;
  top: -100px; right: -100px;
  width: 500px; height: 500px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(14,107,107,.06) 0%, transparent 70%);
  pointer-events: none;
}
.rda-about__img {
  border-radius: var(--radius-xl);
  width: 100%;
  height: 520px;
  object-fit: cover;
  box-shadow: var(--shadow-lg);
}
.rda-about__content {
  padding-left: 48px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 100%;
}
.rda-about__heading {
  font-size: clamp(32px, 3.5vw, 48px);
  color: var(--navy);
  margin: 16px 0 24px;
}
.rda-about__text {
  font-size: 17px;
  color: var(--gray-600);
  line-height: 1.8;
  margin-bottom: 40px;
}

.rda-pillars {
  display: grid;
  grid-template-columns: 1fr;
  gap: 16px;
  margin-top: 40px;
}
.rda-pillar {
  display: flex;
  align-items: flex-start;
  gap: 18px;
  padding: 22px 24px;
  background: var(--white);
  border-radius: var(--radius);
  box-shadow: var(--shadow-sm);
  transition: var(--transition);
}
.rda-pillar:hover {
  box-shadow: var(--shadow);
  transform: translateX(4px);
}
.rda-pillar__icon {
  width: 48px; height: 48px;
  border-radius: var(--radius-sm);
  background: linear-gradient(135deg, var(--teal), var(--teal-lt));
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: white;
}
.rda-pillar__title {
  font-family: 'Playfair Display', serif;
  font-size: 17px;
  color: var(--navy);
  margin: 0 0 6px;
}
.rda-pillar__text {
  font-size: 14px;
  color: var(--gray-600);
  line-height: 1.65;
  margin: 0;
}

/* ── IMPACT ── */
.rda-impact {
  padding: 100px 0;
  background: linear-gradient(135deg, var(--navy) 0%, #0D3555 50%, var(--teal) 100%);
  position: relative;
  overflow: hidden;
}
.rda-impact::before {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.rda-impact__content { position: relative; }
.rda-impact__heading {
  font-size: clamp(32px, 4vw, 52px);
  color: var(--white);
  margin: 16px 0 16px;
}
.rda-impact__subtext {
  font-size: 17px;
  color: rgba(255,255,255,.7);
  line-height: 1.7;
  margin-bottom: 48px;
}

.rda-stats {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 20px;
  margin-bottom: 40px;
}
.rda-stat {
  background: rgba(255,255,255,.08);
  border: 1px solid rgba(255,255,255,.12);
  border-radius: var(--radius);
  padding: 28px 24px;
  backdrop-filter: blur(8px);
  transition: var(--transition);
}
.rda-stat:hover {
  background: rgba(255,255,255,.13);
  transform: translateY(-3px);
}
.rda-stat__number {
  font-family: 'Playfair Display', serif;
  font-size: 38px;
  font-weight: 700;
  color: var(--gold-lt);
  line-height: 1;
  margin-bottom: 8px;
}
.rda-stat__label {
  font-size: 14px;
  color: rgba(255,255,255,.65);
  line-height: 1.5;
}

.rda-impact__img-wrap {
  position: relative;
  height: 100%;
  min-height: 480px;
}
.rda-impact__img {
  width: 100%;
  height: 100%;
  min-height: 480px;
  object-fit: cover;
  border-radius: var(--radius-xl);
  box-shadow: 0 30px 80px rgba(0,0,0,.35);
}
.rda-impact__img-badge {
  position: absolute;
  bottom: 24px;
  left: 24px;
  background: var(--white);
  border-radius: var(--radius);
  padding: 16px 20px;
  box-shadow: var(--shadow);
  display: flex;
  align-items: center;
  gap: 12px;
}
.rda-impact__img-badge-icon {
  width: 40px; height: 40px;
  background: linear-gradient(135deg, var(--teal), var(--teal-lt));
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  flex-shrink: 0;
}
.rda-impact__img-badge-text strong {
  display: block;
  font-size: 15px;
  color: var(--navy);
  font-weight: 600;
}
.rda-impact__img-badge-text span {
  font-size: 12px;
  color: var(--gray-600);
}

/* ── PARTNERS ── */
.rda-partners {
  padding: 80px 0;
  background: var(--gray-50);
}
.rda-partners__header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 48px;
  gap: 24px;
  flex-wrap: wrap;
}
.rda-partners__heading {
  font-size: clamp(24px, 3vw, 36px);
  color: var(--navy);
  margin: 0;
}
.rda-partners__subtext {
  font-size: 15px;
  color: var(--gray-600);
  margin: 8px 0 0;
}

.rda-partners__track-wrap {
  overflow: hidden;
  background: var(--white);
  border: 1px solid var(--gray-100);
  border-radius: var(--radius-lg);
  padding: 32px 0;
}
.rda-partners__track {
  display: flex;
  gap: 0;
}
.rda-partners__list {
  display: flex;
  align-items: center;
  gap: 0;
  animation: marquee 28s linear infinite;
}
.rda-partners__list:nth-child(2) { animation-delay: -14s; }
.rda-partners__logo {
  padding: 0 48px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-right: 1px solid var(--gray-100);
}
.rda-partners__logo img {
  height: 36px;
  width: auto;
  filter: grayscale(1) opacity(.5);
  transition: var(--transition);
}
.rda-partners__logo:hover img { filter: grayscale(0) opacity(1); }

@keyframes marquee {
  0%   { transform: translateX(0); }
  100% { transform: translateX(-100%); }
}

/* ── TESTIMONIALS ── */
.rda-testimonials {
  padding: 100px 0;
  background: var(--white);
}
.rda-testimonials__heading {
  font-size: clamp(28px, 3.5vw, 44px);
  color: var(--navy);
  margin: 16px 0 16px;
}
.rda-testimonials__subtext {
  font-size: 16px;
  color: var(--gray-600);
  line-height: 1.7;
}
.rda-testimonials__left {
  padding-right: 48px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.rda-testi-card {
  background: var(--cream);
  border-radius: var(--radius-lg);
  padding: 36px;
  display: flex;
  flex-direction: column;
  gap: 20px;
  height: 100%;
  position: relative;
  border: 1px solid var(--gray-100);
}
.rda-testi-card::before {
  content: '\201C';
  position: absolute;
  top: 24px; right: 28px;
  font-family: 'Playfair Display', serif;
  font-size: 80px;
  color: var(--teal);
  opacity: .15;
  line-height: 1;
}
.rda-testi-card__stars { display: flex; gap: 4px; }
.rda-testi-card__stars svg { color: var(--gold); }
.rda-testi-card__text {
  font-size: 16px;
  line-height: 1.75;
  color: var(--gray-800);
  font-style: italic;
  flex: 1;
}
.rda-testi-card__author {
  display: flex;
  align-items: center;
  gap: 14px;
  padding-top: 20px;
  border-top: 1px solid var(--gray-100);
}
.rda-testi-card__author-avatar {
  width: 44px; height: 44px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--teal), var(--navy));
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 18px;
  font-family: 'Playfair Display', serif;
  font-weight: 700;
  flex-shrink: 0;
}
.rda-testi-card__author-name {
  font-weight: 600;
  color: var(--navy);
  font-size: 15px;
}

/* ── NEWS ── */
.rda-news {
  padding: 100px 0;
  background: var(--gray-50);
}
.rda-news__header {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  margin-bottom: 56px;
  gap: 24px;
  flex-wrap: wrap;
}
.rda-news__heading {
  font-size: clamp(28px, 3.5vw, 42px);
  color: var(--navy);
  margin: 16px 0 12px;
}
.rda-news__subtext {
  font-size: 16px;
  color: var(--gray-600);
  max-width: 440px;
  line-height: 1.7;
}

.rda-news-card {
  background: var(--white);
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  height: 100%;
  border: 1px solid var(--gray-100);
  transition: var(--transition);
}
.rda-news-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
  border-color: transparent;
}
.rda-news-card__img-wrap {
  height: 220px;
  overflow: hidden;
  position: relative;
}
.rda-news-card__img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform .5s ease;
}
.rda-news-card:hover .rda-news-card__img { transform: scale(1.05); }
.rda-news-card__cat {
  position: absolute;
  top: 16px; left: 16px;
  padding: 5px 14px;
  background: var(--teal);
  color: white;
  border-radius: 50px;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: .05em;
  text-transform: uppercase;
}
.rda-news-card__body {
  padding: 28px;
  flex: 1;
  display: flex;
  flex-direction: column;
}
.rda-news-card__meta {
  display: flex;
  align-items: center;
  gap: 16px;
  font-size: 13px;
  color: var(--gray-400);
  margin-bottom: 14px;
}
.rda-news-card__meta-item { display: flex; align-items: center; gap: 6px; }
.rda-news-card__title {
  font-size: 18px;
  color: var(--navy);
  margin: 0 0 16px;
  line-height: 1.4;
  text-decoration: none;
  flex: 1;
  display: block;
}
.rda-news-card__title:hover { color: var(--teal); }
.rda-news-card__link {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 14px;
  font-weight: 600;
  color: var(--teal);
  text-decoration: none;
  margin-top: auto;
  transition: gap .2s ease;
}
.rda-news-card__link:hover { gap: 12px; }

/* ── PUBLICATIONS ── */
.rda-publications {
  padding: 100px 0;
  background: var(--white);
}
.rda-publications__heading {
  font-size: clamp(28px, 3.5vw, 44px);
  color: var(--navy);
  text-align: center;
  margin: 16px 0 16px;
}
.rda-publications__subtext {
  text-align: center;
  font-size: 16px;
  color: var(--gray-600);
  margin-bottom: 64px;
}

.rda-pub-highlight {
  background: linear-gradient(135deg, var(--navy) 0%, #103C5C 100%);
  border-radius: var(--radius-xl);
  padding: 56px 48px;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  position: relative;
  overflow: hidden;
}
.rda-pub-highlight::before {
  content: '';
  position: absolute;
  top: -80px; right: -80px;
  width: 300px; height: 300px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(14,107,107,.25) 0%, transparent 70%);
}
.rda-pub-highlight__heading {
  font-size: clamp(26px, 3vw, 38px);
  color: var(--white);
  margin: 16px 0 20px;
}
.rda-pub-highlight__text {
  font-size: 16px;
  color: rgba(255,255,255,.7);
  line-height: 1.7;
  margin-bottom: 36px;
}

.rda-pub-list { display: flex; flex-direction: column; gap: 0; }
.rda-pub-item {
  padding: 24px 0;
  border-bottom: 1px solid var(--gray-100);
  display: flex;
  flex-direction: column;
  gap: 8px;
  transition: var(--transition);
}
.rda-pub-item:first-child { padding-top: 0; }
.rda-pub-item:last-child { border-bottom: none; padding-bottom: 0; }
.rda-pub-item:hover { padding-left: 8px; }
.rda-pub-item__meta {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 12px;
  color: var(--gray-400);
  text-transform: uppercase;
  letter-spacing: .06em;
  font-weight: 600;
}
.rda-pub-item__cat {
  padding: 3px 10px;
  background: rgba(14,107,107,.1);
  color: var(--teal);
  border-radius: 50px;
}
.rda-pub-item__title {
  font-family: 'Playfair Display', serif;
  font-size: 18px;
  color: var(--navy);
  text-decoration: none;
  line-height: 1.4;
  display: block;
  transition: color .2s;
}
.rda-pub-item__title:hover { color: var(--teal); }
.rda-pub-item__link {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 13px;
  font-weight: 600;
  color: var(--teal);
  text-decoration: none;
}

/* ── RESPONSIVE ── */
@media (max-width: 991px) {
  .rda-about__content { padding-left: 0; margin-top: 40px; }
  .rda-testimonials__left { padding-right: 0; margin-bottom: 40px; }
  .rda-news__header { align-items: flex-start; }
  .rda-impact__img-wrap { min-height: 340px; margin-top: 48px; }
}
@media (max-width: 767px) {
  .rda-hero { height: 90vh; }
  .rda-stats { grid-template-columns: 1fr 1fr; }
  .rda-pub-highlight { padding: 40px 28px; }
}
</style>

<!-- ══════════════════════════════════════════════
     HERO SLIDER
══════════════════════════════════════════════ -->
<section class="rda-hero">
  <div class="swiper rda-hero-swiper">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <div class="rda-hero__slide">
          <img src="assets/img/banner.jpeg" alt="Rwanda Diabetes Association" loading="eager">
          <div class="rda-hero__overlay"></div>
          <div class="rda-hero__content">
            <div class="container">
              <div class="rda-hero__inner">
                <span class="rda-tag rda-tag--white">
                  <span class="rda-tag__dot"></span>
                  Rwanda Diabetes Association
                </span>
                <h1 class="rda-hero__heading">
                  Improving Diabetes<br>Care Across Rwanda
                </h1>
                <p class="rda-hero__text">
                  Our programs focus on early detection, patient care, advocacy, and community outreach to improve lives across every district.
                </p>
                <div class="rda-hero__actions">
                  <a href="{{ route('about') }}" class="rda-btn rda-btn--primary">
                    Learn More
                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"/></svg>
                  </a>
                  <a href="{{ route('contact') }}" class="rda-btn rda-btn--ghost-white">
                    Free Consultation
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="rda-hero__slide">
          <img src="assets/img/2.jpg" alt="Community Outreach" loading="lazy">
          <div class="rda-hero__overlay"></div>
          <div class="rda-hero__content">
            <div class="container">
              <div class="rda-hero__inner">
                <span class="rda-tag rda-tag--white">
                  <span class="rda-tag__dot"></span>
                  Community Programs
                </span>
                <h1 class="rda-hero__heading">
                  Building Healthier<br>Communities Together
                </h1>
                <p class="rda-hero__text">
                  Through mobile clinics and outreach events, we help communities access early screening — critical for reducing complications and saving lives.
                </p>
                <div class="rda-hero__actions">
                  <a href="{{ route('contact') }}" class="rda-btn rda-btn--primary">
                    Free Consultation
                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"/></svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- Nav -->
    <div class="rda-hero__nav">
      <div class="rda-hero__arrows">
        <button class="rda-hero__arrow rda-prev" aria-label="Previous slide">
          <svg width="18" height="18" viewBox="0 0 32 32" fill="none"><path d="M14.6663 25.3359L5.33301 16.0026M5.33301 16.0026L14.6663 6.66927M5.33301 16.0026H26.6663" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <button class="rda-hero__arrow rda-next" aria-label="Next slide">
          <svg width="18" height="18" viewBox="0 0 32 32" fill="none"><path d="M17.3337 25.3359L26.667 16.0026M26.667 16.0026L17.3337 6.66927M26.667 16.0026H5.33366" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
      </div>
      <div class="rda-hero-pagination"></div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════
     PROGRAMS
══════════════════════════════════════════════ -->
<section class="rda-programs">
  <div class="container">
    <div class="rda-programs__header">
      <div class="section-eyebrow" style="justify-content:center;">
        <span class="rda-tag">
          <span class="rda-tag__dot"></span>
          Our Programs
        </span>
      </div>
      <h2 class="rda-programs__heading">
        Diabetes Awareness &amp; Support Programs
      </h2>
      <p class="rda-programs__subtext">
        Through mobile clinics, outreach events, and health facility partnerships, we help communities access early screening critical for reducing complications and saving lives.
      </p>
    </div>

    <div class="row g-4">
      @foreach($programs as $program)
      <div class="col-xl-4 col-md-6 col-12">
        <div class="rda-program-card">
          <div class="rda-program-card__img-wrap">
            <img class="rda-program-card__img"
                 src="{{ asset('image/program') }}/{{ $program->image }}"
                 alt="{{ $program->title }}"
                 loading="lazy">
          </div>
          <div class="rda-program-card__body">
            <h3 class="rda-program-card__title">{{ $program->title }}</h3>
            <p class="rda-program-card__text">
              {{ \Illuminate\Support\Str::limit($program->short_description, 120) }}
            </p>
            <a href="{{ route('programs.show', $program->slug) }}" class="rda-btn rda-btn--outline" style="align-self:flex-start;padding:10px 22px;font-size:14px;">
              Learn More
              <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"/></svg>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════
     ABOUT / WHO WE ARE
══════════════════════════════════════════════ -->
<section class="rda-about">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <img class="rda-about__img"
             src="assets/img/1I7A8070.jpeg"
             alt="Rwanda Diabetes Association team"
             loading="lazy">
      </div>
      <div class="col-lg-6">
        <div class="rda-about__content">
          <div class="section-eyebrow">
            <span class="rda-tag">
              <span class="rda-tag__dot"></span>
              About Us
            </span>
          </div>
          <h2 class="rda-about__heading">Who We Are</h2>
          <p class="rda-about__text">
            Rwanda Diabetes Association is committed to improving the lives of people living with diabetes through education, prevention, screening, and access to quality care across all communities in Rwanda.
          </p>

          <div class="rda-pillars">
            <div class="rda-pillar">
              <div class="rda-pillar__icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M12 2L13.09 8.26L19 6L15.45 11.12L21 13.27L15.09 14.4L17 20L12 16.9L7 20L8.91 14.4L3 13.27L8.55 11.12L5 6L10.91 8.26L12 2Z" stroke="white" stroke-width="2" stroke-linejoin="round"/></svg>
              </div>
              <div>
                <p class="rda-pillar__title">Our Mission</p>
                <p class="rda-pillar__text">To improve the well-being of people living with diabetes in Rwanda through prevention, treatment, and education.</p>
              </div>
            </div>
            <div class="rda-pillar">
              <div class="rda-pillar__icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="white" stroke-width="2"/><path d="M12 7v5l3 3" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>
              </div>
              <div>
                <p class="rda-pillar__title">Our Vision</p>
                <p class="rda-pillar__text">A Rwanda where no one dies from diabetes and every person has access to timely care, education, and support.</p>
              </div>
            </div>
            <div class="rda-pillar">
              <div class="rda-pillar__icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M9 12l2 2 4-4M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </div>
              <div>
                <p class="rda-pillar__title">Our Objectives</p>
                <p class="rda-pillar__text">Prevent and manage diabetes, reducing its complications through accessible care and early intervention.</p>
              </div>
            </div>
          </div>

          <div style="margin-top:36px;">
            <a href="{{ route('about') }}" class="rda-btn rda-btn--primary">
              Learn About Us
              <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════
     IMPACT
══════════════════════════════════════════════ -->
<section class="rda-impact">
  <div class="container rda-impact__content">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="section-eyebrow">
          <span class="rda-tag rda-tag--white">
            <span class="rda-tag__dot"></span>
            Our Impact
          </span>
        </div>
        <h2 class="rda-impact__heading">Our Initiative Impact</h2>
        <p class="rda-impact__subtext">
          Building healthier communities through awareness campaigns, support networks, and direct patient care across Rwanda.
        </p>

        <div class="rda-stats">
          <div class="rda-stat">
            <div class="rda-stat__number">40,000+</div>
            <div class="rda-stat__label">People reached through awareness campaigns</div>
          </div>
          <div class="rda-stat">
            <div class="rda-stat__number">All 30</div>
            <div class="rda-stat__label">Districts served across Rwanda</div>
          </div>
          <div class="rda-stat">
            <div class="rda-stat__number">12+</div>
            <div class="rda-stat__label">Years of dedicated service</div>
          </div>
          <div class="rda-stat">
            <div class="rda-stat__number">Growing</div>
            <div class="rda-stat__label">Community reach and partner network</div>
          </div>
        </div>

        <a href="{{ route('impact') }}" class="rda-btn rda-btn--ghost-white">
          Explore Our Impact
          <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"/></svg>
        </a>
      </div>

      <div class="col-lg-6">
        <div class="rda-impact__img-wrap">
          <img class="rda-impact__img"
               src="assets/img/1I7A8445.jpeg"
               alt="Community Impact"
               loading="lazy">
          <div class="rda-impact__img-badge">
            <div class="rda-impact__img-badge-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="white"/></svg>
            </div>
            <div class="rda-impact__img-badge-text">
              <strong>Community First</strong>
              <span>Nationwide health initiative</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════
     PARTNERS
══════════════════════════════════════════════ -->
@if($partners && $partners->count())
<section class="rda-partners">
  <div class="container">
    <div class="rda-partners__header">
      <div>
        <div class="section-eyebrow">
          <span class="rda-tag">
            <span class="rda-tag__dot"></span>
            Collaborators
          </span>
        </div>
        <h2 class="rda-partners__heading">Partners &amp; Collaborators</h2>
        <p class="rda-partners__subtext">Organizations we work with to extend our reach and impact.</p>
      </div>
      <a href="{{ route('partner_with_us') }}" class="rda-btn rda-btn--primary">
        Partner with Us
        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"/></svg>
      </a>
    </div>
    <div class="rda-partners__track-wrap">
      <div class="rda-partners__track">
        <div class="rda-partners__list">
          @foreach($partners as $partner)
          <a href="{{ $partner->website }}" class="rda-partners__logo" target="_blank" rel="noopener">
            <img src="{{ asset('image/partners') }}/{{ $partner->logo }}" alt="{{ $partner->name }}" loading="lazy">
          </a>
          @endforeach
        </div>
        <div class="rda-partners__list">
          @foreach($partners as $partner)
          <a href="{{ $partner->website }}" class="rda-partners__logo" target="_blank" rel="noopener">
            <img src="{{ asset('image/partners') }}/{{ $partner->logo }}" alt="{{ $partner->name }}" loading="lazy">
          </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
@endif

<!-- ══════════════════════════════════════════════
     TESTIMONIALS
══════════════════════════════════════════════ -->
<section class="rda-testimonials">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="rda-testimonials__left">
          <div class="section-eyebrow">
            <span class="rda-tag">
              <span class="rda-tag__dot"></span>
              Testimonials
            </span>
          </div>
          <h2 class="rda-testimonials__heading">
            Success Stories from Our Community
          </h2>
          <p class="rda-testimonials__subtext">
            Real stories from individuals whose lives have been transformed through early detection, education, and ongoing support.
          </p>
          <div style="margin-top:32px;display:flex;gap:12px;align-items:center;">
            <button class="rda-hero__arrow rda-testi-prev" aria-label="Previous" style="background:var(--cream);border-color:var(--gray-100);color:var(--navy);">
              <svg width="18" height="18" viewBox="0 0 32 32" fill="none"><path d="M14.6663 25.3359L5.33301 16.0026M5.33301 16.0026L14.6663 6.66927M5.33301 16.0026H26.6663" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
            <button class="rda-hero__arrow rda-testi-next" aria-label="Next" style="background:var(--teal);border-color:var(--teal);color:white;">
              <svg width="18" height="18" viewBox="0 0 32 32" fill="none"><path d="M17.3337 25.3359L26.667 16.0026M26.667 16.0026L17.3337 6.66927M26.667 16.0026H5.33366" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="swiper rda-testi-swiper" style="padding:4px;">
          <div class="swiper-wrapper">
            @foreach($stories as $story)
            <div class="swiper-slide" style="height:auto;">
              <div class="rda-testi-card">
                <div class="rda-testi-card__stars">
                  @for($i=0;$i<5;$i++)
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z"/></svg>
                  @endfor
                </div>
                <p class="rda-testi-card__text">"{{ $story->excerpt }}"</p>
                <div class="rda-testi-card__author">
                  <div class="rda-testi-card__author-avatar">
                    {{ strtoupper(substr($story->title, 0, 1)) }}
                  </div>
                  <div>
                    <div class="rda-testi-card__author-name">{{ $story->title }}</div>
                    <div style="font-size:13px;color:var(--gray-400);">Community Member</div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════
     NEWS
══════════════════════════════════════════════ -->
<section class="rda-news">
  <div class="container">
    <div class="rda-news__header">
      <div>
        <div class="section-eyebrow">
          <span class="rda-tag">
            <span class="rda-tag__dot"></span>
            News &amp; Updates
          </span>
        </div>
        <h2 class="rda-news__heading">Latest News &amp; Updates</h2>
        <p class="rda-news__subtext">
          Stay updated with the latest activities, health alerts, events, and diabetes education from our organization.
        </p>
      </div>
      <a href="{{ route('news.index') }}" class="rda-btn rda-btn--primary" style="align-self:flex-start;">
        Discover More
        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"/></svg>
      </a>
    </div>

    <div class="row g-4">
      @foreach($news as $new)
      <div class="col-lg-4 col-md-6 col-12">
        <div class="rda-news-card">
          <div class="rda-news-card__img-wrap">
            <img class="rda-news-card__img"
                 src="{{ asset('image/posts') }}/{{ $new->featured_image }}"
                 alt="{{ $new->title }}"
                 loading="lazy">
            <span class="rda-news-card__cat">{{ $new->category->name }}</span>
          </div>
          <div class="rda-news-card__body">
            <div class="rda-news-card__meta">
              <span class="rda-news-card__meta-item">
                <svg width="13" height="13" viewBox="0 0 16 18" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.0007 0.046875C6.95088 0.046875 5.94406 0.463912 5.20173 1.20624C4.4594 1.94858 4.04236 2.95539 4.04236 4.00521C4.04236 5.05502 4.4594 6.06184 5.20173 6.80417C5.94406 7.5465 6.95088 7.96354 8.0007 7.96354C9.05051 7.96354 10.0573 7.5465 10.7997 6.80417C11.542 6.06184 11.959 5.05502 11.959 4.00521C11.959 2.95539 11.542 1.94858 10.7997 1.20624C10.0573 0.463912 9.05051 0.046875 8.0007 0.046875ZM5.29236 4.00521C5.29236 3.28691 5.57771 2.59804 6.08562 2.09013C6.59353 1.58222 7.2824 1.29688 8.0007 1.29688C8.71899 1.29688 9.40787 1.58222 9.91578 2.09013C10.4237 2.59804 10.709 3.28691 10.709 4.00521C10.709 4.7235 10.4237 5.41238 9.91578 5.92029C9.40787 6.4282 8.71899 6.71354 8.0007 6.71354C7.2824 6.71354 6.59353 6.4282 6.08562 5.92029C5.57771 5.41238 5.29236 4.7235 5.29236 4.00521ZM8.0007 9.21354C6.0732 9.21354 4.29653 9.65187 2.9807 10.3919C1.68403 11.1219 0.709031 12.2269 0.709031 13.5885C0.709031 14.6785 0.742364 15.2919 1.31236 15.756C1.62070 16.0069 2.13736 16.2527 3.02070 16.431C3.90070 16.6094 5.10570 16.7135 6.75070 16.7135H9.25070C10.8957 16.7135 12.1007 16.6094 12.9807 16.431C13.8640 16.2527 14.3807 16.0069 14.6890 15.756C15.2590 15.2919 15.2924 14.6785 15.2924 13.5885C15.2924 12.2269 14.3174 11.1219 13.0215 10.3919C11.7049 9.65187 9.92903 9.21354 8.0007 9.21354Z" fill="currentColor"/></svg>
                {{ $new->author->name }}
              </span>
              <span class="rda-news-card__meta-item">
                <svg width="13" height="13" viewBox="0 0 18 18" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.83268 0.453125C4.99844 0.453125 5.15741 0.518973 5.27462 0.636183C5.39183 0.753394 5.45768 0.912365 5.45768 1.07812V1.71396C6.00935 1.70312 6.61685 1.70312 7.28518 1.70312H10.7127C11.3818 1.70312 11.9893 1.70312 12.541 1.71396V1.07812C12.541 0.912365 12.6069 0.753394 12.7241 0.636183C12.8413 0.518973 13.0003 0.453125 13.166 0.453125C13.3318 0.453125 13.4907 0.518973 13.608 0.636183C13.7252 0.753394 13.791 0.912365 13.791 1.07812V1.76729C14.0077 1.78396 14.2127 1.80479 14.4068 1.83063C15.3835 1.96229 16.1743 2.23896 16.7985 2.86229C17.4218 3.48646 17.6985 4.27729 17.8302 5.25396C17.9577 6.20396 17.9577 7.41646 17.9577 8.94812V10.7081C17.9577 12.2398 17.9577 13.4531 17.8302 14.4023C17.6985 15.379 17.4218 16.1698 16.7985 16.794C16.1743 17.4173 15.3835 17.694 14.4068 17.8256C13.4568 17.9531 12.2443 17.9531 10.7127 17.9531H7.28602C5.75435 17.9531 4.54102 17.9531 3.59185 17.8256C2.61518 17.694 1.82435 17.4173 1.20018 16.794C0.576849 16.1698 0.300182 15.379 0.168516 14.4023C0.0410156 13.4523 0.0410156 12.2398 0.0410156 10.7081V8.94812C0.0410156 7.41646 0.0410156 6.20312 0.168516 5.25396C0.300182 4.27729 0.576849 3.48646 1.20018 2.86229C1.82435 2.23896 2.61518 1.96229 3.59185 1.83063C3.78602 1.80479 3.99185 1.78396 4.20768 1.76729V1.07812C4.20768 0.912365 4.27353 0.753394 4.39074 0.636183C4.50795 0.518973 4.66692 0.453125 4.83268 0.453125ZM1.29102 8.99479V10.6615C1.29102 12.2506 1.29268 13.3798 1.40768 14.2356C1.52018 15.074 1.73185 15.5573 2.08435 15.9098C2.43685 16.2623 2.92018 16.474 3.75768 16.5865C4.61518 16.7015 5.74352 16.7031 7.33268 16.7031H10.666C12.2552 16.7031 13.3843 16.7015 14.2402 16.5865C15.0785 16.474 15.5618 16.2623 15.9143 15.9098C16.2668 15.5573 16.4785 15.074 16.591 14.2365C16.706 13.3798 16.7077 12.2506 16.7077 10.6615V8.99479C16.7077 8.28312 16.7077 7.66396 16.6968 7.11979H1.30185C1.29102 7.66396 1.29102 8.28312 1.29102 8.99479Z" fill="currentColor"/></svg>
                {{ $new->created_at->format('M d, Y') }}
              </span>
            </div>
            <a href="{{ route('news.detail', $new->id) }}" class="rda-news-card__title">
              {{ $new->title }}
            </a>
            <a href="{{ route('news.detail', $new->id) }}" class="rda-news-card__link">
              Read Article
              <svg width="13" height="13" viewBox="0 0 20 20" fill="none"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"/></svg>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════
     PUBLICATIONS
══════════════════════════════════════════════ -->
<section class="rda-publications">
  <div class="container">
    <div class="section-eyebrow" style="justify-content:center;">
      <span class="rda-tag">
        <span class="rda-tag__dot"></span>
        Publications
      </span>
    </div>
    <h2 class="rda-publications__heading">Latest Publications From Us</h2>
    <p class="rda-publications__subtext">
      Access our research, guides, and educational resources on diabetes prevention and management.
    </p>

    <div class="row g-4 align-items-stretch">
      <div class="col-xl-5">
        <div class="rda-pub-highlight">
          <div class="section-eyebrow">
            <span class="rda-tag rda-tag--white">
              <span class="rda-tag__dot"></span>
              Learning Resources
            </span>
          </div>
          <h3 class="rda-pub-highlight__heading">Resources &amp; Education Hub</h3>
          <p class="rda-pub-highlight__text">
            Explore easy-to-understand guides, prevention tips, nutrition advice, and tools to help you manage diabetes at home.
          </p>
          <a href="{{ route('research.index') }}" class="rda-btn rda-btn--ghost-white" style="align-self:flex-start;">
            View All Resources
            <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"/></svg>
          </a>
        </div>
      </div>

      <div class="col-xl-7">
        <div class="rda-pub-list">
          @foreach($latestItems as $item)
          <div class="rda-pub-item">
            <div class="rda-pub-item__meta">
              <span class="rda-pub-item__cat">{{ $item->category->name }}</span>
              <span>{{ $item->created_at->format('M d, Y') }}</span>
            </div>
            <a href="{{ $item->external_link }}" class="rda-pub-item__title">{{ $item->title }}</a>
            <a href="{{ $item->external_link }}" class="rda-pub-item__link">
              Read More
              <svg width="13" height="13" viewBox="0 0 20 20" fill="none"><path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="currentColor"/></svg>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════
     SCRIPTS
══════════════════════════════════════════════ -->
<script>
document.addEventListener('DOMContentLoaded', function () {

  // Hero Slider
  new Swiper('.rda-hero-swiper', {
    loop: true,
    speed: 900,
    autoplay: { delay: 5500, disableOnInteraction: false },
    pagination: { el: '.rda-hero-pagination', clickable: true },
    navigation: { nextEl: '.rda-next', prevEl: '.rda-prev' },
  });

  // Testimonials Slider
  new Swiper('.rda-testi-swiper', {
    slidesPerView: 1,
    spaceBetween: 24,
    speed: 600,
    navigation: { nextEl: '.rda-testi-next', prevEl: '.rda-testi-prev' },
    breakpoints: {
      768: { slidesPerView: 1.2 },
    },
  });

});
</script>

@endsection