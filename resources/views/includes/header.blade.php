<script src="https://checkout.flutterwave.com/v3.js"></script>

@php
$researchCategories = App\Models\ResearchCategory::where('type', 'research')->get();
$downloadCategories = App\Models\ResearchCategory::where('type', 'download')->get();
$learningCategories = App\Models\Category::with('materials')->get();
@endphp

<style>
/* =============================================
   NAVBAR — Rwanda Diabetes Association
   ============================================= */
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&display=swap');

:root {
  --nav-navy:    #0B2740;
  --nav-teal:    #0E6B6B;
  --nav-teal-lt: #14908E;
  --nav-gold:    #C8973A;
  --nav-cream:   #F8F5F0;
  --nav-white:   #FFFFFF;
  --nav-gray:    #9AAAB8;
  --nav-gray-lt: #E8ECF0;
  --nav-shadow:  0 4px 32px rgba(11,39,64,.14);
  --nav-trans:   all .25s cubic-bezier(.4,0,.2,1);
}

/* ── BASE ── */
.rda-header {
  position: fixed;
  top: 0; left: 0; right: 0;
  z-index: 1000;
  transition: var(--nav-trans);
  font-family: 'DM Sans', sans-serif;
}

/* Scrolled state (JS adds .scrolled) */
.rda-header.scrolled {
  background: rgba(11,39,64,.97);
  backdrop-filter: blur(16px);
  box-shadow: var(--nav-shadow);
}
/* Default: transparent/frosted over hero */
.rda-header:not(.scrolled) {
  background: linear-gradient(180deg, rgba(11,39,64,.75) 0%, transparent 100%);
}

.rda-header__inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 72px;
  padding: 0 32px;
  max-width: 1400px;
  margin: 0 auto;
}

/* ── LOGO ── */
.rda-logo {
  display: flex;
  align-items: center;
  gap: 12px;
  text-decoration: none;
  flex-shrink: 0;
}
.rda-logo img {
  width: 44px;
  height: 44px;
  object-fit: contain;
  border-radius: 8px;
}
.rda-logo__text {
  font-size: 15px;
  font-weight: 600;
  color: var(--nav-white);
  line-height: 1.2;
  letter-spacing: -.01em;
}
.rda-logo__sub {
  display: block;
  font-size: 10px;
  font-weight: 400;
  color: rgba(255,255,255,.6);
  letter-spacing: .06em;
  text-transform: uppercase;
}

/* ── NAV ── */
.rda-nav { display: flex; align-items: center; gap: 4px; }

.rda-nav__item { position: relative; }

.rda-nav__link {
  display: flex;
  align-items: center;
  gap: 5px;
  padding: 8px 14px;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: .06em;
  text-transform: uppercase;
  color: rgba(255,255,255,.85);
  text-decoration: none;
  border-radius: 6px;
  transition: var(--nav-trans);
  white-space: nowrap;
}
.rda-nav__link:hover, .rda-nav__item:hover > .rda-nav__link {
  color: var(--nav-white);
  background: rgba(255,255,255,.08);
}
.rda-nav__caret {
  width: 10px;
  opacity: .7;
  transition: transform .2s ease;
}
.rda-nav__item:hover .rda-nav__caret { transform: rotate(180deg); }

/* ── DROPDOWN ── */
.rda-dropdown {
  position: absolute;
  top: calc(100% + 12px);
  left: 50%;
  transform: translateX(-50%);
  min-width: 200px;
  background: var(--nav-white);
  border-radius: 14px;
  box-shadow: 0 20px 60px rgba(11,39,64,.18), 0 0 0 1px rgba(11,39,64,.06);
  padding: 8px;
  opacity: 0;
  visibility: hidden;
  transform: translateX(-50%) translateY(-6px);
  transition: opacity .2s ease, transform .2s ease, visibility .2s;
  pointer-events: none;
}
.rda-nav__item:hover .rda-dropdown {
  opacity: 1;
  visibility: visible;
  transform: translateX(-50%) translateY(0);
  pointer-events: auto;
}

/* Arrow */
.rda-dropdown::before {
  content: '';
  position: absolute;
  top: -6px;
  left: 50%;
  transform: translateX(-50%);
  width: 12px; height: 6px;
  background: var(--nav-white);
  clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
}

.rda-dropdown__item {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  padding: 10px 12px;
  border-radius: 8px;
  text-decoration: none;
  color: var(--nav-navy);
  font-size: 14px;
  font-weight: 500;
  transition: var(--nav-trans);
  line-height: 1.3;
}
.rda-dropdown__item:hover {
  background: var(--nav-cream);
  color: var(--nav-teal);
}
.rda-dropdown__item-icon {
  width: 30px; height: 30px;
  border-radius: 7px;
  background: rgba(14,107,107,.1);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: var(--nav-teal);
}
.rda-dropdown__item-text { font-size: 12px; color: var(--nav-gray); font-weight: 400; }
.rda-dropdown__divider {
  height: 1px;
  background: var(--nav-gray-lt);
  margin: 6px 8px;
}
.rda-dropdown__group-label {
  padding: 8px 12px 4px;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: .1em;
  text-transform: uppercase;
  color: var(--nav-gray);
}

/* ── MEGAMENU ── */
.rda-mega {
  position: absolute;
  top: calc(100% + 12px);
  left: 50%;
  transform: translateX(-50%);
  background: var(--nav-white);
  border-radius: 16px;
  box-shadow: 0 20px 60px rgba(11,39,64,.18), 0 0 0 1px rgba(11,39,64,.06);
  padding: 24px;
  opacity: 0;
  visibility: hidden;
  transform: translateX(-50%) translateY(-8px);
  transition: opacity .2s ease, transform .2s ease, visibility .2s;
  pointer-events: none;
  width: 680px;
}
.rda-nav__item:hover .rda-mega {
  opacity: 1;
  visibility: visible;
  transform: translateX(-50%) translateY(0);
  pointer-events: auto;
}
.rda-mega::before {
  content: '';
  position: absolute;
  top: -6px;
  left: 50%;
  transform: translateX(-50%);
  width: 12px; height: 6px;
  background: var(--nav-white);
  clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
}
.rda-mega__cols { display: grid; gap: 8px; }
.rda-mega__cols--2 { grid-template-columns: 1fr 1fr; }
.rda-mega__cols--3 { grid-template-columns: 1fr 1fr 1fr; }
.rda-mega__col-label {
  font-size: 10px;
  font-weight: 700;
  letter-spacing: .1em;
  text-transform: uppercase;
  color: var(--nav-gray);
  padding: 0 4px 8px;
  margin-bottom: 4px;
  border-bottom: 1px solid var(--nav-gray-lt);
}

/* Featured card inside mega */
.rda-mega__feature {
  background: linear-gradient(135deg, var(--nav-navy) 0%, #103C5C 100%);
  border-radius: 12px;
  padding: 20px;
  color: white;
  display: flex;
  flex-direction: column;
  gap: 10px;
}
.rda-mega__feature-title { font-size: 15px; font-weight: 600; }
.rda-mega__feature-text { font-size: 12px; color: rgba(255,255,255,.7); line-height: 1.5; }
.rda-mega__feature-cta {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 12px;
  font-weight: 600;
  color: var(--nav-white);
  background: var(--nav-teal);
  padding: 7px 14px;
  border-radius: 20px;
  text-decoration: none;
  align-self: flex-start;
  margin-top: 4px;
  transition: var(--nav-trans);
}
.rda-mega__feature-cta:hover { background: var(--nav-teal-lt); }

/* ── ACTIONS ── */
.rda-header__actions { display: flex; align-items: center; gap: 12px; }

.rda-donate-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 10px 22px;
  background: var(--nav-teal);
  color: var(--nav-white);
  border-radius: 50px;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: .04em;
  text-transform: uppercase;
  text-decoration: none;
  border: none;
  cursor: pointer;
  transition: var(--nav-trans);
  box-shadow: 0 4px 16px rgba(14,107,107,.35);
}
.rda-donate-btn:hover {
  background: var(--nav-teal-lt);
  transform: translateY(-1px);
  box-shadow: 0 6px 20px rgba(14,107,107,.45);
  color: white;
}

.rda-menu-btn {
  width: 42px; height: 42px;
  border-radius: 50%;
  background: rgba(255,255,255,.1);
  border: 1px solid rgba(255,255,255,.2);
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: var(--nav-trans);
  flex-shrink: 0;
}
.rda-menu-btn:hover { background: rgba(255,255,255,.2); }

/* ── MOBILE DRAWER ── */
.rda-drawer {
  position: fixed;
  top: 0; right: -100%;
  width: 340px;
  height: 100vh;
  background: var(--nav-white);
  z-index: 2000;
  transition: right .35s cubic-bezier(.4,0,.2,1);
  overflow-y: auto;
  box-shadow: -20px 0 60px rgba(11,39,64,.2);
}
.rda-drawer.open { right: 0; }

.rda-drawer__overlay {
  position: fixed;
  inset: 0;
  background: rgba(11,39,64,.5);
  z-index: 1999;
  opacity: 0;
  visibility: hidden;
  transition: var(--nav-trans);
  backdrop-filter: blur(4px);
}
.rda-drawer__overlay.open { opacity: 1; visibility: visible; }

.rda-drawer__head {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 24px;
  border-bottom: 1px solid var(--nav-gray-lt);
  background: var(--nav-navy);
}
.rda-drawer__close {
  width: 36px; height: 36px;
  border-radius: 50%;
  background: rgba(255,255,255,.1);
  border: none;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: var(--nav-trans);
}
.rda-drawer__close:hover { background: rgba(255,255,255,.2); }

.rda-drawer__body { padding: 24px; }

.rda-drawer__section { margin-bottom: 28px; }
.rda-drawer__section-label {
  font-size: 10px;
  font-weight: 700;
  letter-spacing: .12em;
  text-transform: uppercase;
  color: var(--nav-gray);
  margin-bottom: 10px;
}
.rda-drawer__link {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 10px 12px;
  border-radius: 8px;
  text-decoration: none;
  color: var(--nav-navy);
  font-size: 14px;
  font-weight: 500;
  transition: var(--nav-trans);
  margin-bottom: 2px;
}
.rda-drawer__link:hover { background: var(--nav-cream); color: var(--nav-teal); }
.rda-drawer__link svg { opacity: .5; flex-shrink: 0; }

.rda-drawer__contact-card {
  background: var(--nav-cream);
  border-radius: 12px;
  padding: 16px;
}
.rda-drawer__contact-item {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 13px;
  color: var(--nav-navy);
  margin-bottom: 10px;
  text-decoration: none;
}
.rda-drawer__contact-item:last-child { margin-bottom: 0; }
.rda-drawer__contact-item svg { color: var(--nav-teal); flex-shrink: 0; }

/* ── DONATION MODAL ── */
.rda-modal-overlay {
  position: fixed;
  inset: 0;
  background: rgba(11,39,64,.6);
  z-index: 3000;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  opacity: 0;
  visibility: hidden;
  transition: var(--nav-trans);
  backdrop-filter: blur(6px);
}
.rda-modal-overlay.open { opacity: 1; visibility: visible; }

.rda-modal {
  background: var(--nav-white);
  border-radius: 20px;
  width: 100%;
  max-width: 480px;
  box-shadow: 0 30px 80px rgba(11,39,64,.3);
  overflow: hidden;
  transform: scale(.96) translateY(8px);
  transition: transform .3s cubic-bezier(.34,1.56,.64,1);
}
.rda-modal-overlay.open .rda-modal { transform: scale(1) translateY(0); }

.rda-modal__head {
  background: linear-gradient(135deg, var(--nav-navy) 0%, #103C5C 100%);
  padding: 32px 32px 28px;
  text-align: center;
  position: relative;
}
.rda-modal__head-icon {
  width: 56px; height: 56px;
  background: rgba(255,255,255,.1);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 16px;
  font-size: 26px;
}
.rda-modal__title {
  font-family: 'Playfair Display', serif;
  font-size: 22px;
  color: var(--nav-white);
  margin: 0 0 8px;
}
.rda-modal__subtitle {
  font-size: 14px;
  color: rgba(255,255,255,.65);
  line-height: 1.5;
  margin: 0;
}
.rda-modal__close {
  position: absolute;
  top: 16px; right: 16px;
  width: 32px; height: 32px;
  border-radius: 50%;
  background: rgba(255,255,255,.1);
  border: none;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: var(--nav-trans);
}
.rda-modal__close:hover { background: rgba(255,255,255,.2); }

.rda-modal__body { padding: 28px 32px 32px; }

/* Quick amounts */
.rda-amounts {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 8px;
  margin-bottom: 24px;
}
.rda-amount-btn {
  padding: 10px 6px;
  border: 1.5px solid var(--nav-gray-lt);
  border-radius: 10px;
  background: transparent;
  font-size: 12px;
  font-weight: 600;
  color: var(--nav-navy);
  cursor: pointer;
  transition: var(--nav-trans);
  text-align: center;
  line-height: 1.2;
}
.rda-amount-btn:hover, .rda-amount-btn.active {
  border-color: var(--nav-teal);
  background: rgba(14,107,107,.08);
  color: var(--nav-teal);
}
.rda-amount-btn small { display: block; font-size: 10px; font-weight: 400; color: var(--nav-gray); }

/* Input fields */
.rda-field {
  position: relative;
  margin-bottom: 14px;
}
.rda-field__icon {
  position: absolute;
  left: 14px;
  top: 50%;
  transform: translateY(-50%);
  color: var(--nav-gray);
  pointer-events: none;
}
.rda-field input {
  width: 100%;
  padding: 12px 14px 12px 42px;
  border: 1.5px solid var(--nav-gray-lt);
  border-radius: 10px;
  font-family: 'DM Sans', sans-serif;
  font-size: 14px;
  color: var(--nav-navy);
  background: var(--nav-white);
  transition: var(--nav-trans);
  outline: none;
}
.rda-field input:focus {
  border-color: var(--nav-teal);
  box-shadow: 0 0 0 3px rgba(14,107,107,.1);
}
.rda-field input::placeholder { color: var(--nav-gray); }

/* Trust row */
.rda-trust {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  font-size: 12px;
  color: #22a06b;
  font-weight: 500;
  margin: 14px 0;
}

/* Submit btn */
.rda-donate-submit {
  width: 100%;
  padding: 14px;
  background: var(--nav-teal);
  color: white;
  border: none;
  border-radius: 50px;
  font-family: 'DM Sans', sans-serif;
  font-size: 15px;
  font-weight: 700;
  letter-spacing: .02em;
  cursor: pointer;
  transition: var(--nav-trans);
  box-shadow: 0 4px 20px rgba(14,107,107,.3);
}
.rda-donate-submit:hover {
  background: var(--nav-teal-lt);
  transform: translateY(-1px);
  box-shadow: 0 8px 28px rgba(14,107,107,.4);
}

.rda-payment-methods {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  margin-top: 16px;
}
.rda-payment-badge {
  padding: 4px 10px;
  border: 1px solid var(--nav-gray-lt);
  border-radius: 6px;
  font-size: 11px;
  font-weight: 600;
  color: var(--nav-gray);
}

@media (max-width: 991px) {
  .rda-nav { display: none; }
  .rda-drawer { width: 300px; }
}
@media (min-width: 992px) {
  .rda-mobile-only { display: none !important; }
}
</style>

<!-- ══════════════════════════════════
     HEADER
══════════════════════════════════ -->
<header class="rda-header" id="rdaHeader">
  <div class="rda-header__inner">

    <!-- Logo -->
    <a class="rda-logo" href="{{ route('home') }}" aria-label="Rwanda Diabetes Association">
      <img src="{{ asset('assets/img/logo-1.png') }}" alt="RDA Logo">
      <span class="rda-logo__text">
        Rwanda Diabetes
        <span class="rda-logo__sub">Association</span>
      </span>
    </a>

    <!-- Desktop Nav -->
    <nav class="rda-nav" role="navigation">

      <!-- ABOUT US -->
      <div class="rda-nav__item">
        <a class="rda-nav__link" href="#">
          About Us
          <svg class="rda-nav__caret" viewBox="0 0 10 5" fill="none"><path d="M5 5L0 0H10L5 5Z" fill="currentColor"/></svg>
        </a>
        <div class="rda-mega" style="width:560px;">
          <div class="rda-mega__cols rda-mega__cols--2" style="gap:16px;">
            <div>
              <div class="rda-mega__col-label">Organization</div>
              <a class="rda-dropdown__item" href="{{ route('about') }}">
                <div class="rda-dropdown__item-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="1.8"/></svg>
                </div>
                <div>
                  Who We Are
                  <div class="rda-dropdown__item-text">Our story, values, and commitment</div>
                </div>
              </a>
              <a class="rda-dropdown__item" href="{{ route('values') }}">
                <div class="rda-dropdown__item-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
                </div>
                <div>
                  Mission, Vision & Objectives
                  <div class="rda-dropdown__item-text">Our guiding principles</div>
                </div>
              </a>
              <a class="rda-dropdown__item" href="{{ route('our-team') }}">
                <div class="rda-dropdown__item-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="1.8"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                </div>
                <div>
                  Our Team
                  <div class="rda-dropdown__item-text">Meet the people behind RDA</div>
                </div>
              </a>
            </div>
            <div>
              <div class="rda-mega__col-label">Impact</div>
              <a class="rda-dropdown__item" href="{{ route('partner_with_us') }}">
                <div class="rda-dropdown__item-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M17 8h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2h-2v4l-4-4H9a1.994 1.994 0 0 1-1.414-.586" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 2h11a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z" stroke="currentColor" stroke-width="1.8"/></svg>
                </div>
                <div>
                  Our Partners
                  <div class="rda-dropdown__item-text">Organizations we work with</div>
                </div>
              </a>
              <a class="rda-dropdown__item" href="{{ route('impact') }}">
                <div class="rda-dropdown__item-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M22 12h-4l-3 9L9 3l-3 9H2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <div>
                  Our Impact
                  <div class="rda-dropdown__item-text">Measurable community change</div>
                </div>
              </a>
              <a class="rda-dropdown__item" href="{{ route('stories.index') }}">
                <div class="rda-dropdown__item-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
                </div>
                <div>
                  Success Stories
                  <div class="rda-dropdown__item-text">Real lives, real change</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- PROGRAMS -->
      <div class="rda-nav__item">
        <a class="rda-nav__link" href="#">
          Programs
          <svg class="rda-nav__caret" viewBox="0 0 10 5" fill="none"><path d="M5 5L0 0H10L5 5Z" fill="currentColor"/></svg>
        </a>
        <div class="rda-mega" style="width:520px;">
          <div class="rda-mega__cols" style="grid-template-columns: 1fr 1fr; gap:16px;">
            @foreach(\App\Models\Category::whereHas('programs')->with('programs')->get() as $category)
            <div>
              <div class="rda-mega__col-label">{{ $category->name }}</div>
              @foreach($category->programs->take(4) as $program)
              <a class="rda-dropdown__item" href="{{ route('programs.show', $program->slug) }}"
                 style="padding:8px 10px;">
                <div style="width:6px;height:6px;border-radius:50%;background:var(--nav-teal);flex-shrink:0;margin-top:4px;"></div>
                <span style="font-size:13px;">{{ $program->title }}</span>
              </a>
              @endforeach
              @if($category->programs->count() > 4)
              <a class="rda-dropdown__item" href="{{ route('programs.category', $category->slug) }}"
                 style="padding:6px 10px;color:var(--nav-teal);font-size:12px;">
                View all →
              </a>
              @endif
            </div>
            @endforeach
          </div>
        </div>
      </div>

      <!-- RESOURCES -->
      <div class="rda-nav__item">
        <a class="rda-nav__link" href="#">
          Resources
          <svg class="rda-nav__caret" viewBox="0 0 10 5" fill="none"><path d="M5 5L0 0H10L5 5Z" fill="currentColor"/></svg>
        </a>
        <div class="rda-mega" style="width:620px;">
          <div class="rda-mega__cols rda-mega__cols--3" style="gap:20px;">
            <div>
              <div class="rda-mega__col-label">Research</div>
              @foreach($researchCategories as $cat)
              <a class="rda-dropdown__item" href="{{ route('research.category', $cat->slug) }}" style="padding:8px 10px;">
                <div style="width:6px;height:6px;border-radius:50%;background:var(--nav-teal);flex-shrink:0;margin-top:4px;"></div>
                <span style="font-size:13px;">{{ $cat->name }}</span>
              </a>
              @endforeach
            </div>
            <div>
              <div class="rda-mega__col-label">Downloads</div>
              @foreach($downloadCategories as $cat)
              <a class="rda-dropdown__item" href="{{ route('downloads.category', $cat->slug) }}" style="padding:8px 10px;">
                <div style="width:6px;height:6px;border-radius:50%;background:var(--nav-navy);flex-shrink:0;margin-top:4px;opacity:.4;"></div>
                <span style="font-size:13px;">{{ $cat->name }}</span>
              </a>
              @endforeach
            </div>
            <div>
              <div class="rda-mega__col-label">Learning Tips</div>
              @foreach($learningCategories as $cat)
              <a class="rda-dropdown__item" href="{{ route('materials.category', $cat->slug) }}" style="padding:8px 10px;">
                <div style="width:6px;height:6px;border-radius:50%;background:var(--nav-gold);flex-shrink:0;margin-top:4px;"></div>
                <span style="font-size:13px;">{{ $cat->name }}</span>
              </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>

      <!-- NEWS -->
      <div class="rda-nav__item">
        <a class="rda-nav__link" href="#">
          News
          <svg class="rda-nav__caret" viewBox="0 0 10 5" fill="none"><path d="M5 5L0 0H10L5 5Z" fill="currentColor"/></svg>
        </a>
        <div class="rda-dropdown" style="min-width:220px;">
          <a class="rda-dropdown__item" href="{{ route('news.index') }}">
            <div class="rda-dropdown__item-icon">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            Latest News
          </a>
          <a class="rda-dropdown__item" href="{{ route('articles.index') }}">
            <div class="rda-dropdown__item-icon">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><polyline points="14 2 14 8 20 8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            Articles
          </a>
          <a class="rda-dropdown__item" href="{{ route('stories.index') }}">
            <div class="rda-dropdown__item-icon">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
            </div>
            Stories & Testimonials
          </a>
          <a class="rda-dropdown__item" href="{{ route('media.index') }}">
            <div class="rda-dropdown__item-icon">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="1.8"/><circle cx="8.5" cy="8.5" r="1.5" stroke="currentColor" stroke-width="1.8"/><polyline points="21 15 16 10 5 21" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            Media Gallery
          </a>
        </div>
      </div>

      <!-- GET INVOLVED -->
      <div class="rda-nav__item">
        <a class="rda-nav__link" href="#">
          Get Involved
          <svg class="rda-nav__caret" viewBox="0 0 10 5" fill="none"><path d="M5 5L0 0H10L5 5Z" fill="currentColor"/></svg>
        </a>
        <div class="rda-mega" style="width:480px;">
          <div class="rda-mega__cols" style="grid-template-columns:1fr 1fr;gap:16px;">
            <div>
              <div class="rda-mega__col-label">Take Action</div>
              <a class="rda-dropdown__item" href="{{ route('partner_with_us') }}">
                <div class="rda-dropdown__item-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M17 8h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2h-2v4l-4-4H9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 2h11a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z" stroke="currentColor" stroke-width="1.8"/></svg>
                </div>
                <div>
                  Partner with Us
                  <div class="rda-dropdown__item-text">Join our mission network</div>
                </div>
              </a>
              <a class="rda-dropdown__item" href="{{ route('contact') }}">
                <div class="rda-dropdown__item-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
                </div>
                <div>
                  Contact Us
                  <div class="rda-dropdown__item-text">Get in touch today</div>
                </div>
              </a>
              <button class="rda-dropdown__item" onclick="openDonationModal()" style="border:none;background:none;width:100%;text-align:left;cursor:pointer;">
                <div class="rda-dropdown__item-icon" style="background:rgba(200,151,58,.12);color:var(--nav-gold);">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
                </div>
                <div>
                  Make a Donation
                  <div class="rda-dropdown__item-text">Support our community programs</div>
                </div>
              </button>
            </div>
            <div>
              <div class="rda-mega__feature">
                <div style="font-size:22px;">🌍</div>
                <div class="rda-mega__feature-title">Together We Fight Diabetes</div>
                <div class="rda-mega__feature-text">40,000+ people reached. Join us in building healthier communities across Rwanda.</div>
                <a href="{{ route('impact') }}" class="rda-mega__feature-cta">
                  See Our Impact →
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </nav>

    <!-- Actions -->
    <div class="rda-header__actions">
      <button class="rda-donate-btn" onclick="openDonationModal()">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" fill="currentColor"/></svg>
        Donate
      </button>
      <!-- Mobile menu toggle -->
      <button class="rda-menu-btn rda-mobile-only" id="rdaMenuBtn" aria-label="Open menu">
        <svg width="18" height="14" viewBox="0 0 18 14" fill="none"><path d="M1 1h16M1 7h12M1 13h9" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
    </div>

  </div>
</header>

<!-- ══════════════════════════════════
     MOBILE DRAWER
══════════════════════════════════ -->
<div class="rda-drawer__overlay" id="rdaOverlay" onclick="closeDrawer()"></div>
<div class="rda-drawer" id="rdaDrawer">
  <div class="rda-drawer__head">
    <a href="{{ route('home') }}" class="rda-logo">
      <img src="{{ asset('assets/img/logo-1.png') }}" alt="RDA">
      <span class="rda-logo__text" style="color:white;">
        Rwanda Diabetes
        <span class="rda-logo__sub">Association</span>
      </span>
    </a>
    <button class="rda-drawer__close" onclick="closeDrawer()">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
    </button>
  </div>

  <div class="rda-drawer__body">
    <div class="rda-drawer__section">
      <div class="rda-drawer__section-label">About</div>
      <a class="rda-drawer__link" href="{{ route('about') }}">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="1.8"/></svg>
        Who We Are
      </a>
      <a class="rda-drawer__link" href="{{ route('values') }}">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
        Mission & Vision
      </a>
      <a class="rda-drawer__link" href="{{ route('our-team') }}">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="1.8"/></svg>
        Our Team
      </a>
      <a class="rda-drawer__link" href="{{ route('impact') }}">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M22 12h-4l-3 9L9 3l-3 9H2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        Our Impact
      </a>
    </div>

    <div class="rda-drawer__section">
      <div class="rda-drawer__section-label">Programs</div>
      @foreach(\App\Models\Category::whereHas('programs')->with('programs')->get() as $cat)
      <a class="rda-drawer__link" href="{{ route('programs.category', $cat->slug) }}">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.8"/><path d="M12 8v8M8 12h8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        {{ $cat->name }}
      </a>
      @endforeach
    </div>

    <div class="rda-drawer__section">
      <div class="rda-drawer__section-label">News</div>
      <a class="rda-drawer__link" href="{{ route('news.index') }}">Latest News</a>
      <a class="rda-drawer__link" href="{{ route('articles.index') }}">Articles</a>
      <a class="rda-drawer__link" href="{{ route('stories.index') }}">Stories & Testimonials</a>
      <a class="rda-drawer__link" href="{{ route('media.index') }}">Media Gallery</a>
    </div>

    <div class="rda-drawer__section">
      <button class="rda-donate-btn" onclick="openDonationModal();closeDrawer();" style="width:100%;justify-content:center;">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" fill="currentColor"/></svg>
        Make a Donation
      </button>
    </div>

    <div class="rda-drawer__section">
      <div class="rda-drawer__section-label">Quick Contact</div>
      <div class="rda-drawer__contact-card">
        <div class="rda-drawer__contact-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="1.8"/></svg>
          64KN 8 Avenue, Kigali
        </div>
        <a class="rda-drawer__contact-item" href="tel:+0788224628">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 3.09 4.18 2 2 0 0 1 5.09 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L9.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
          +0788 224 628
        </a>
        <a class="rda-drawer__contact-item" href="mailto:info@rwandadiabetes.rw">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
          info@rwandadiabetes.rw
        </a>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════
     DONATION MODAL
══════════════════════════════════ -->
<div class="rda-modal-overlay" id="rdaDonationModal">
  <div class="rda-modal">

    <div class="rda-modal__head">
      <button class="rda-modal__close" onclick="closeDonationModal()">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
      <div class="rda-modal__head-icon">❤️</div>
      <h4 class="rda-modal__title">Support Our Mission</h4>
      <p class="rda-modal__subtitle">Your contribution helps us deliver care and education across Rwanda.</p>
    </div>

    <div class="rda-modal__body">
      <form id="donationForm">
        @csrf

        <!-- Quick amounts -->
        <div class="rda-amounts">
          @foreach([5000, 10000, 20000, 50000] as $amount)
          <button type="button" class="rda-amount-btn" data-amount="{{ $amount }}">
            {{ number_format($amount) }}
            <small>RWF</small>
          </button>
          @endforeach
        </div>

        <!-- Name -->
        <div class="rda-field">
          <div class="rda-field__icon">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="1.8"/></svg>
          </div>
          <input type="text" name="name" placeholder="Full Name" required>
        </div>

        <!-- Email -->
        <div class="rda-field">
          <div class="rda-field__icon">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="1.8"/><polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
          </div>
          <input type="email" name="email" placeholder="Email Address (optional)">
        </div>

        <!-- Phone -->
        <div class="rda-field">
          <div class="rda-field__icon">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 3.09 4.18 2 2 0 0 1 5.09 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L9.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <input type="tel" name="phone" placeholder="Phone Number (MTN / Airtel)">
        </div>

        <!-- Amount -->
        <div class="rda-field">
          <div class="rda-field__icon">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><line x1="12" y1="1" x2="12" y2="23" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <input type="number" name="amount" id="donationAmount" placeholder="Amount in RWF" min="100" required>
        </div>

        <!-- Trust -->
        <div class="rda-trust">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="2" fill="currentColor" fill-opacity=".1"/></svg>
          Secure & Encrypted Payment via Flutterwave
        </div>

        <button type="submit" class="rda-donate-submit">
          Donate Now
        </button>

        <div class="rda-payment-methods">
          <span class="rda-payment-badge">💳 Card</span>
          <span class="rda-payment-badge">📱 MTN MoMo</span>
          <span class="rda-payment-badge">📱 Airtel Money</span>
        </div>

      </form>
    </div>
  </div>
</div>

<script>
// ── HEADER SCROLL EFFECT ──
const rdaHeader = document.getElementById('rdaHeader');
window.addEventListener('scroll', () => {
  rdaHeader.classList.toggle('scrolled', window.scrollY > 30);
});

// ── MOBILE DRAWER ──
const rdaDrawer  = document.getElementById('rdaDrawer');
const rdaOverlay = document.getElementById('rdaOverlay');
const rdaMenuBtn = document.getElementById('rdaMenuBtn');

rdaMenuBtn?.addEventListener('click', () => {
  rdaDrawer.classList.add('open');
  rdaOverlay.classList.add('open');
  document.body.style.overflow = 'hidden';
});

function closeDrawer() {
  rdaDrawer.classList.remove('open');
  rdaOverlay.classList.remove('open');
  document.body.style.overflow = '';
}

// ── DONATION MODAL ──
const donationModal = document.getElementById('rdaDonationModal');

function openDonationModal() {
  donationModal.classList.add('open');
  document.body.style.overflow = 'hidden';
}

function closeDonationModal() {
  donationModal.classList.remove('open');
  document.body.style.overflow = '';
}

donationModal?.addEventListener('click', (e) => {
  if (e.target === donationModal) closeDonationModal();
});

// ── QUICK AMOUNT BUTTONS ──
document.querySelectorAll('.rda-amount-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.rda-amount-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    document.getElementById('donationAmount').value = btn.getAttribute('data-amount');
  });
});

// ── DONATION FORM SUBMIT ──
document.getElementById('donationForm')?.addEventListener('submit', function(e) {
  e.preventDefault();

  const name   = this.querySelector('[name="name"]').value.trim();
  const email  = this.querySelector('[name="email"]').value.trim() || 'donor@example.com';
  const phone  = this.querySelector('[name="phone"]').value.trim() || '';
  const amount = parseFloat(this.querySelector('[name="amount"]').value);

  if (!name) { alert('Please enter your name.'); return; }
  if (amount < 100) { alert('Minimum donation is 100 RWF.'); return; }

  FlutterwaveCheckout({
    public_key: "{{ env('FLW_PUBLIC_KEY') }}",
    tx_ref: 'DON_' + Date.now(),
    amount,
    currency: 'RWF',
    payment_options: 'card, mobilemoneyrwanda',
    customer: { email, phone_number: phone, name },
    customizations: {
      title: 'Rwanda Diabetes Association',
      description: 'Support Our Mission',
      logo: "{{ asset('logo.png') }}"
    },
    callback: function(response) {
      window.location.href = '/donation/verify?transaction_id=' + response.transaction_id;
    },
    onclose: function() {
      console.log('Payment closed');
    }
  });
});
</script>