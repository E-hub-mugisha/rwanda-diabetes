<!-- Footer -->
<footer class="site-footer">
    <div class="footer-inner">

        {{-- Top Section --}}
        <div class="container">
            <div class="footer-top-section">
                <div class="footer-brand-col">
                    <a href="{{ route('home') }}" class="footer-brand" aria-label="Rwanda Diabetes Association">
                        <img src="{{ asset('assets/img/logo-1.png') }}" width="44" height="44" alt="RDA Logo" loading="lazy">
                        <div class="footer-brand-text">
                            <span class="brand-name">Rwanda Diabetes</span>
                            <span class="brand-sub">Association</span>
                        </div>
                    </a>
                    <p class="footer-tagline">
                        Committed to preventing diabetes complications and improving the health and wellbeing of communities across Rwanda.
                    </p>
                    <div class="footer-social">
                        <a href="https://web.facebook.com/" class="social-btn" aria-label="Facebook" target="_blank" rel="noopener">
                            <svg width="14" height="14" viewBox="0 0 10 18" fill="none"><path d="M6.666 10.255H8.75l.833-3.333H6.666V5.255c0-.858 0-1.667 1.667-1.667H9.583V.789C9.312.753 8.286.672 7.202.672 4.94.672 3.333 2.053 3.333 4.588V6.922H.833v3.333h2.5v7.083h3.333v-7.083Z" fill="currentColor"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/" class="social-btn" aria-label="LinkedIn" target="_blank" rel="noopener">
                            <svg width="14" height="14" viewBox="0 0 17 16" fill="none"><path d="M3.784 2.167a1.667 1.667 0 1 1-3.334 0 1.667 1.667 0 0 1 3.334 0ZM3.834 5.067H.5V15.5h3.334V5.067ZM9.1 5.067H5.784V15.5h3.283v-5.475c0-3.05 3.975-3.333 3.975 0V15.5h3.291V8.892C16.334 3.75 10.45 3.942 9.067 6.467L9.1 5.067Z" fill="currentColor"/></svg>
                        </a>
                        <a href="https://x.com/" class="social-btn" aria-label="X / Twitter" target="_blank" rel="noopener">
                            <svg width="14" height="14" viewBox="0 0 18 14" fill="none"><path d="M17.51 1.713A7.626 7.626 0 0 1 15.509 2.26a3.804 3.804 0 0 0 1.532-2.927 7.706 7.706 0 0 1-2.442.933A3.847 3.847 0 0 0 2.066 3.564 10.913 10.913 0 0 1 1.235.716a3.844 3.844 0 0 0 1.583 5.183 3.83 3.83 0 0 1-1.739-.48v.048a3.848 3.848 0 0 0 3.084 3.77 3.857 3.857 0 0 1-1.737.066 3.848 3.848 0 0 0 3.591 2.67 7.715 7.715 0 0 1-4.777 1.645A7.8 7.8 0 0 1 .523 13.317a10.886 10.886 0 0 0 5.343 1.566c6.41 0 9.916-5.31 9.916-9.916 0-.15-.003-.3-.01-.448a7.087 7.087 0 0 0 1.738-1.806Z" fill="currentColor"/></svg>
                        </a>
                        <a href="https://www.instagram.com/" class="social-btn" aria-label="Instagram" target="_blank" rel="noopener">
                            <svg width="14" height="14" viewBox="0 0 18 18" fill="none"><path d="M9 0C6.562 0 6.25.01 5.29.054 4.33.097 3.678.25 3.105.473a4.9 4.9 0 0 0-1.77 1.152A4.9 4.9 0 0 0 .183 3.395C-.04 3.968-.193 4.62-.237 5.58-.28 6.54-.29 6.852-.29 9.29s.01 2.75.054 3.71c.044.96.196 1.612.419 2.185a4.9 4.9 0 0 0 1.152 1.77 4.9 4.9 0 0 0 1.77 1.152c.573.222 1.225.375 2.185.419C6.25 18.57 6.562 18.58 9 18.58s2.75-.01 3.71-.054c.96-.044 1.612-.197 2.185-.42a4.9 4.9 0 0 0 1.77-1.151 4.9 4.9 0 0 0 1.152-1.77c.222-.573.375-1.225.419-2.185.044-.96.054-1.272.054-3.71s-.01-2.75-.054-3.71c-.044-.96-.197-1.612-.42-2.185A4.9 4.9 0 0 0 16.665 1.625 4.9 4.9 0 0 0 14.895.473C14.322.25 13.67.097 12.71.054 11.75.01 11.438 0 9 0Zm0 1.622c2.403 0 2.688.009 3.637.052.877.04 1.354.187 1.67.31.42.163.72.358 1.035.673.315.315.51.615.673 1.035.123.316.27.793.31 1.67.043.949.052 1.234.052 3.637s-.009 2.688-.052 3.637c-.04.877-.187 1.354-.31 1.67a2.784 2.784 0 0 1-.673 1.035 2.784 2.784 0 0 1-1.035.673c-.316.123-.793.27-1.67.31-.949.043-1.234.052-3.637.052s-2.688-.009-3.637-.052c-.877-.04-1.354-.187-1.67-.31a2.784 2.784 0 0 1-1.035-.673 2.784 2.784 0 0 1-.673-1.035c-.123-.316-.27-.793-.31-1.67C1.631 11.688 1.622 11.403 1.622 9s.009-2.688.052-3.637c.04-.877.187-1.354.31-1.67.163-.42.358-.72.673-1.035.315-.315.615-.51 1.035-.673.316-.123.793-.27 1.67-.31C6.312 1.631 6.597 1.622 9 1.622ZM9 4.378a4.622 4.622 0 1 0 0 9.244A4.622 4.622 0 0 0 9 4.378ZM9 12a3 3 0 1 1 0-6 3 3 0 0 1 0 6Zm5.884-7.804a1.08 1.08 0 1 1-2.16 0 1.08 1.08 0 0 1 2.16 0Z" fill="currentColor"/></svg>
                        </a>
                    </div>
                </div>

                <div class="footer-links-grid">
                    <div class="footer-col">
                        <h4 class="footer-col-heading">Organisation</h4>
                        <ul class="footer-link-list">
                            <li><a href="{{ route('about') }}">Who We Are</a></li>
                            <li><a href="{{ route('values') }}">Mission &amp; Vision</a></li>
                            <li><a href="{{ route('partner_with_us') }}">Our Partners</a></li>
                            <li><a href="{{ route('impact') }}">Our Impact</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="footer-col">
                        <h4 class="footer-col-heading">Programs &amp; Services</h4>
                        <ul class="footer-link-list">
                            @foreach(\App\Models\Category::with('programs')->take(5)->get() as $category)
                            <li>
                                <a href="{{ route('programs.category', $category->slug) }}">{{ $category->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="footer-col">
                        <h4 class="footer-col-heading">Resources</h4>
                        <ul class="footer-link-list">
                            @foreach(\App\Models\ResearchCategory::latest()->take(5)->get() as $cat)
                            <li>
                                <a href="{{ route('research.category', $cat->slug) }}">{{ $cat->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Divider --}}
        <div class="footer-divider"></div>

        {{-- Bottom Bar --}}
        <div class="container">
            <div class="footer-bottom-bar">
                <p class="footer-copy">
                    &copy; <span class="current-year"></span> {{ config('app.name') }}. All rights reserved.
                </p>
                <nav class="footer-bottom-nav" aria-label="Footer policies">
                    <a role="button" data-bs-toggle="modal" data-bs-target="#donationModal" class="footer-bottom-link donate-link">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                        Donate
                    </a>
                    <a href="#" class="footer-bottom-link">FAQs</a>
                    <a href="{{ route('contact') }}" class="footer-bottom-link">Contact</a>
                </nav>
            </div>
        </div>

    </div>
</footer>

<style>
/* ── Footer Variables ───────────────────────────── */
:root {
    --footer-bg:        #0b1a2c;
    --footer-surface:   #112237;
    --footer-border:    rgba(255,255,255,0.08);
    --footer-text:      #a8bdd4;
    --footer-heading:   #ffffff;
    --footer-link:      #8fb3ce;
    --footer-link-hover:#ffffff;
    --footer-accent:    #3b9edd;
    --footer-donate:    #2ecc8a;
    --footer-radius:    8px;
}

/* ── Base ───────────────────────────────────────── */
.site-footer {
    background: var(--footer-bg);
    font-family: 'DM Sans', sans-serif;
    color: var(--footer-text);
    border-top: 1px solid var(--footer-border);
}

.footer-inner {
    padding: 64px 0 0;
}

/* ── Top Layout ─────────────────────────────────── */
.footer-top-section {
    display: grid;
    grid-template-columns: 340px 1fr;
    gap: 60px;
    padding-bottom: 56px;
}

@media (max-width: 960px) {
    .footer-top-section {
        grid-template-columns: 1fr;
        gap: 40px;
    }
}

/* ── Brand Column ───────────────────────────────── */
.footer-brand {
    display: flex;
    align-items: center;
    gap: 12px;
    text-decoration: none;
    margin-bottom: 20px;
}

.footer-brand img {
    width: 44px;
    height: 44px;
    border-radius: 10px;
    object-fit: contain;
}

.footer-brand-text {
    display: flex;
    flex-direction: column;
}

.brand-name {
    font-size: 15px;
    font-weight: 600;
    color: var(--footer-heading);
    letter-spacing: -0.01em;
    line-height: 1.2;
}

.brand-sub {
    font-size: 12px;
    color: var(--footer-accent);
    letter-spacing: 0.06em;
    text-transform: uppercase;
    font-weight: 500;
}

.footer-tagline {
    font-size: 14px;
    line-height: 1.75;
    color: var(--footer-text);
    max-width: 300px;
    margin: 0 0 28px;
}

/* ── Social Icons ───────────────────────────────── */
.footer-social {
    display: flex;
    gap: 8px;
}

.social-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 8px;
    background: var(--footer-surface);
    border: 1px solid var(--footer-border);
    color: var(--footer-link);
    transition: background 0.2s, color 0.2s, border-color 0.2s;
    text-decoration: none;
}

.social-btn:hover {
    background: var(--footer-accent);
    border-color: var(--footer-accent);
    color: #fff;
}

/* ── Links Grid ─────────────────────────────────── */
.footer-links-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
}

@media (max-width: 600px) {
    .footer-links-grid {
        grid-template-columns: 1fr 1fr;
    }
}

.footer-col-heading {
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--footer-heading);
    margin: 0 0 20px;
}

.footer-link-list {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 11px;
}

.footer-link-list a {
    font-size: 14px;
    color: var(--footer-link);
    text-decoration: none;
    transition: color 0.15s;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.footer-link-list a:hover {
    color: var(--footer-link-hover);
}

/* ── Divider ────────────────────────────────────── */
.footer-divider {
    height: 1px;
    background: var(--footer-border);
    margin: 0;
}

/* ── Bottom Bar ─────────────────────────────────── */
.footer-bottom-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 0;
    gap: 16px;
    flex-wrap: wrap;
}

.footer-copy {
    font-size: 13px;
    color: var(--footer-text);
    margin: 0;
    opacity: 0.7;
}

.footer-bottom-nav {
    display: flex;
    align-items: center;
    gap: 4px;
}

.footer-bottom-link {
    font-size: 13px;
    color: var(--footer-link);
    text-decoration: none;
    padding: 6px 12px;
    border-radius: var(--footer-radius);
    transition: background 0.15s, color 0.15s;
    cursor: pointer;
    background: none;
    border: none;
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.footer-bottom-link:hover {
    background: var(--footer-surface);
    color: var(--footer-link-hover);
}

.donate-link {
    color: var(--footer-donate);
    border: 1px solid rgba(46, 204, 138, 0.3);
}

.donate-link:hover {
    background: rgba(46, 204, 138, 0.1);
    color: var(--footer-donate);
}
</style>

<script>
document.querySelectorAll('.current-year').forEach(el => el.textContent = new Date().getFullYear());
</script>