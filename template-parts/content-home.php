<?php
/**
 * Content: home page.
 *
 * @package Verdex
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
  <!-- ============ HERO ============ -->
  <section class="sec hero">
    <div class="aura" aria-hidden="true"><span class="orb orb--a"></span><span class="orb orb--b"></span></div>
    <div class="wrap">
      <div class="hero-grid">

        <div class="hero-copy">
          <span class="pill up"><i></i> Digital agency &middot; Design. Build. Rank.</span>

          <h1 class="up">Your website should be your <span class="it">hardest-working</span> salesperson.</h1>

          <p class="lead up up2">
            We build fast WordPress sites, get them ranking, and run the ads that fill
            them. One team for all of it, a fixed quote inside 24 hours, and every
            login handed over at the end.
          </p>

          <div class="hero-cta up up2">
            <a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--acc">Get my fixed quote
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>
            </a>
            <a href="<?php echo esc_url( verdex_page_url( 'services' ) ); ?>" class="btn btn--ghost">What we do</a>
          </div>

          <div class="proof up up3">
            <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="m4 12.5 5 5L20 6.5"/></svg> Fixed price, agreed up front</span>
            <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="m4 12.5 5 5L20 6.5"/></svg> No lock-in contracts</span>
            <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="m4 12.5 5 5L20 6.5"/></svg> Fixed quote inside 24 hours</span>
          </div>
        </div>

        <!-- Hero orbit: the four services circling the mark. Decorative only. -->
        <div class="orbit up up2" aria-hidden="true">
          <span class="ring ring--out"></span>
          <span class="ring ring--mid"></span>

          <span class="core">
            <span class="core-g">V</span>
            <b>VERDEX</b>
            <em>Web Solutions</em>
          </span>

          <span class="sat sat--1"><i title="Website development">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M8 6 2.5 12 8 18"/><path d="m16 6 5.5 6L16 18"/><path d="M13.5 4.5 10.5 19.5"/></svg>
          </i></span>
          <span class="sat sat--2"><i title="SEO">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="10.5" cy="10.5" r="6.5"/><path d="m15.5 15.5 5 5"/><path d="M7.5 11.5 10 9l2 1.8 3-3.8"/></svg>
          </i></span>
          <span class="sat sat--3"><i title="Digital marketing">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M3.5 9.5v5a1 1 0 0 0 1 1h3l6 4.5V4L7.5 8.5h-3a1 1 0 0 0-1 1Z"/><path d="M17.5 8.5a5 5 0 0 1 0 7"/><path d="M20 6a8.5 8.5 0 0 1 0 12"/></svg>
          </i></span>
          <span class="sat sat--4"><i title="Graphic design">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3.5a8.5 8.5 0 1 0 0 17h1.8a2.2 2.2 0 0 0 1.6-3.7 2.2 2.2 0 0 1 1.6-3.7h1.4A3.6 3.6 0 0 0 22 9.4C21.3 6 17.1 3.5 12 3.5Z"/><circle cx="8" cy="10" r="1.1"/><circle cx="12" cy="7.5" r="1.1"/><circle cx="16" cy="10" r="1.1"/></svg>
          </i></span>
        </div>

      </div>
    </div>
  </section>

  <!-- ============ TRUST STRIP ============ -->
  <div class="strip">
    <div><b>24 hours</b><span>Quote back, with a timeline</span></div>
    <div><b>2&ndash;6 weeks</b><span>Typical build, start to live</span></div>
    <div><b>Everything</b><span>Code, logins and files handed over</span></div>
    <div><b>30 days</b><span>Post-launch fixes included</span></div>
  </div>

  <!-- ============ PAIN / FIX ============ -->
  <section class="sec band">
    <div class="wrap">
      <div class="head rv">
        <div>
          <span class="kicker">Why people call us</span>
          <h2>Why a site stops <span class="it">paying for itself</span>.</h2>
        </div>
        <p class="lead">
          Nearly every enquiry starts with one of these. If you recognise yours,
          the fix is usually cheaper than you are expecting.
        </p>
      </div>

      <div class="pf">
        <div class="pf-row rv">
          <span class="pf-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8.5"/><path d="M12 7v5.2l3.2 2"/></svg></span>
          <div>
            <h3>It takes forever to load</h3>
            <p>Five seconds on mobile and half your visitors are gone before the logo appears. <b>We rebuild the theme properly and strip the plugin stack.</b></p>
          </div>
        </div>
        <div class="pf-row rv">
          <span class="pf-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="10.5" cy="10.5" r="6.5"/><path d="m15.5 15.5 5 5"/></svg></span>
          <div>
            <h3>Nobody can find you</h3>
            <p>You rank for your own name and nothing else anyone actually searches. <b>We audit, fix the crawling, then build pages around real terms.</b></p>
          </div>
        </div>
        <div class="pf-row rv">
          <span class="pf-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M16 20v-1.6a3.4 3.4 0 0 0-3.4-3.4H6.4A3.4 3.4 0 0 0 3 18.4V20"/><circle cx="9.5" cy="7.5" r="3.5"/><path d="M17 8.5h5M19.5 6v5"/></svg></span>
          <div>
            <h3>Your developer disappeared</h3>
            <p>No logins, no files, and a theme nobody else can open. <b>We take it over, document it, and hand you every key at the end.</b></p>
          </div>
        </div>
        <div class="pf-row rv">
          <span class="pf-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M4 18 9.5 11l4 3.6L20 7"/><path d="M20 11.5V7h-4.5"/></svg></span>
          <div>
            <h3>Ads burn money</h3>
            <p>Clicks arrive, enquiries do not, and nothing is tracked properly. <b>We rebuild the landing page and the tracking before touching budget.</b></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ SERVICES ============ -->
  <section class="sec sec--alt band" id="services">
    <div class="wrap">
      <div class="head rv">
        <div>
          <span class="kicker">What we do</span>
          <h2>One team. Every part of <span class="it">the job</span>.</h2>
        </div>
        <p class="lead">
          Most agencies hand over a site and disappear. We build it, get it found, put
          traffic in front of it, and keep the brand consistent across all of it.
        </p>
      </div>

      <div class="svcs">
        <article class="svc rv">
          <div class="svc-top">
            <span class="svc-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M8 6 2.5 12 8 18"/><path d="m16 6 5.5 6L16 18"/><path d="M13.5 4.5 10.5 19.5"/></svg></span>
            <h3>Website development</h3>
          </div>
          <p>Custom WordPress themes, WooCommerce stores and static builds in Astro. No page builders stacked on each other, no plugin for every small thing — just clean code and an editor your team can actually use.</p>
          <ul>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Staging link from week one</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Editable sections, not locked layouts</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Loads fast on a weak mobile signal</li>
          </ul>
        </article>

        <article class="svc rv">
          <div class="svc-top">
            <span class="svc-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="10.5" cy="10.5" r="6.5"/><path d="m15.5 15.5 5 5"/><path d="M7.5 11.5 10 9l2 1.8 3-3.8"/></svg></span>
            <h3>SEO</h3>
          </div>
          <p>A technical audit comes first, because broken crawling and slow pages cap everything after it. Then on-page work, internal links, local listings and content built around what people actually type.</p>
          <ul>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Audit delivered in five working days</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Rankings tracked from day one</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> One report you can read in five minutes</li>
          </ul>
        </article>

        <article class="svc rv">
          <div class="svc-top">
            <span class="svc-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3.5 9.5v5a1 1 0 0 0 1 1h3l6 4.5V4L7.5 8.5h-3a1 1 0 0 0-1 1Z"/><path d="M17.5 8.5a5 5 0 0 1 0 7"/><path d="M20 6a8.5 8.5 0 0 1 0 12"/></svg></span>
            <h3>Digital marketing</h3>
          </div>
          <p>Google and Meta campaigns built around one offer at a time, with landing pages we write and build ourselves so the ad and the page say the same thing. We start small and cut what loses money.</p>
          <ul>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Conversion tracking set up properly</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Ad spend stays in your own account</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Landing pages included, not extra</li>
          </ul>
        </article>

        <article class="svc rv">
          <div class="svc-top">
            <span class="svc-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3.5a8.5 8.5 0 1 0 0 17h1.8a2.2 2.2 0 0 0 1.6-3.7 2.2 2.2 0 0 1 1.6-3.7h1.4A3.6 3.6 0 0 0 22 9.4C21.3 6 17.1 3.5 12 3.5Z"/><circle cx="8" cy="10" r="1.1"/><circle cx="12" cy="7.5" r="1.1"/><circle cx="16" cy="10" r="1.1"/></svg></span>
            <h3>Graphic design</h3>
          </div>
          <p>Logos, colour and type systems, and the files your printer and your social manager both need. Everything arrives as editable vectors plus export-ready formats, with a short brand sheet.</p>
          <ul>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Source files handed over, always</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Revisions until it matches the brief</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Social and print templates included</li>
          </ul>
        </article>
      </div>

    </div>
  </section>

  <!-- ============ WHY CHOOSE ============ -->
  <section class="sec band" id="why">
    <div class="wrap why">
      <div class="rv">
        <span class="kicker">Why choose Verdex</span>
        <h2 style="margin-top:16px">Careful build, <span class="it">clean handover</span>.</h2>
        <p class="lead" style="margin-top:18px">
          The work is only half of it. The other half is knowing what you are paying,
          seeing it happen, and owning everything at the end.
        </p>

        <div class="why-points">
          <div class="wp">
            <span class="wp-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2.5 4.5 13.5H11l-.8 8 8.5-11H12Z"/></svg></span>
            <div>
              <h3>One team, start to finish</h3>
              <p>Design, build, SEO and ads sit with the same people. Nothing gets lost in a handoff between three vendors who blame each other.</p>
            </div>
          </div>
          <div class="wp">
            <span class="wp-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 7.5h15M4.5 12h9M4.5 16.5h6"/><path d="M16 17.5 18 19.5l3.5-4"/></svg></span>
            <div>
              <h3>Fixed price, agreed up front</h3>
              <p>The number in the proposal is the number on the invoice. Anything new gets quoted before work starts on it, never after.</p>
            </div>
          </div>
          <div class="wp">
            <span class="wp-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 11V8a3.5 3.5 0 0 1 7 0v3"/><rect x="4.5" y="11" width="15" height="9.5" rx="2.5"/><path d="M12 15v2"/></svg></span>
            <div>
              <h3>You keep every key</h3>
              <p>Domain, hosting, analytics and source files in your name from day one, with a walkthrough video at handover. No lock-in, no handover fee.</p>
            </div>
          </div>
        </div>
      </div>

      <figure class="shotframe rv">
        <img src="https://verdexwebsolutions.com/wp-content/uploads/2026/10/Neon-Developer-Workspace-Dashboard.png" alt="Why Choose Verdex — Neon Developer Workspace" loading="lazy">
      </figure>
    </div>
  </section>

  <!-- ============ PROCESS ============ -->
  <section class="sec sec--alt band" id="process">
    <div class="wrap">
      <div class="proc-head rv">
        <span class="pill"><i></i> Our process</span>
        <h2>How a project <span class="it">actually runs</span>.</h2>
        <p class="lead" style="text-align:center">
          You watch the site take shape on a staging link from week one, so nothing
          arrives as a surprise at the end.
        </p>
      </div>

      <div class="proc">
        <div class="prow rv">
          <span class="n">01</span>
          <div class="prow-main">
            <div class="prow-top"><h3>Call and checklist</h3><span class="prow-when">Day 1</span></div>
            <p>Forty-five minutes on what the site has to do and who it is up against. You leave with a content checklist, which is what decides whether a build takes three weeks or ten.</p>
          </div>
        </div>
        <div class="prow rv">
          <span class="n">02</span>
          <div class="prow-main">
            <div class="prow-top"><h3>Structure and direction</h3><span class="prow-when">Week 1</span></div>
            <p>Sitemap, page outlines, and a design direction for the home page and one inner page. Type, colour and layout get agreed here rather than argued over later.</p>
          </div>
        </div>
        <div class="prow rv">
          <span class="n">03</span>
          <div class="prow-main">
            <div class="prow-top"><h3>Build on staging</h3><span class="prow-when">Weeks 2&ndash;4</span></div>
            <p>Templates and content go in on a live link you can open any time. Feedback goes on the page itself instead of turning into a numbered list in an email.</p>
          </div>
        </div>
        <div class="prow rv">
          <span class="n">04</span>
          <div class="prow-main">
            <div class="prow-top"><h3>Checks, go live, handover</h3><span class="prow-when">Launch</span></div>
            <p>Speed and mobile passes, forms tested end to end, redirects mapped, analytics connected. Then every login, a walkthrough video, and 30 days of fixes.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ REVIEWS ============ -->
  <!-- PLACEHOLDER COPY. Replace each quote, name and company with a real review
       before this page goes live. Do not publish invented reviews. -->
  <section class="sec band">
    <div class="wrap">
      <div class="head rv">
        <div>
          <span class="kicker">What clients say</span>
          <h2>In their words, not <span class="it">ours</span>.</h2>
        </div>
        <p class="lead">
          Ask any of them whether the site did what it was supposed to do. That is the
          only review worth reading.
        </p>
      </div>

      <div class="revs" id="revs">
        <article class="rev rv">
          <div class="rev-head"><div class="stars" aria-label="Five stars">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="m12 3.5 2.6 5.5 6 .8-4.4 4.2 1.1 6-5.3-2.9-5.3 2.9 1.1-6L3.4 9.8l6-.8Z"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="m12 3.5 2.6 5.5 6 .8-4.4 4.2 1.1 6-5.3-2.9-5.3 2.9 1.1-6L3.4 9.8l6-.8Z"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="m12 3.5 2.6 5.5 6 .8-4.4 4.2 1.1 6-5.3-2.9-5.3 2.9 1.1-6L3.4 9.8l6-.8Z"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="m12 3.5 2.6 5.5 6 .8-4.4 4.2 1.1 6-5.3-2.9-5.3 2.9 1.1-6L3.4 9.8l6-.8Z"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="m12 3.5 2.6 5.5 6 .8-4.4 4.2 1.1 6-5.3-2.9-5.3 2.9 1.1-6L3.4 9.8l6-.8Z"/></svg>
            </div><span class="rev-tag">Sample</span></div>
          <p>Paste a real client review here. The ones that convert say what was broken before, what changed after launch, and roughly how long it took.</p>
          <div class="rev-by"><span class="av">A</span><div><b>[Client name]</b><span>[Company], [city]</span></div></div>
        </article>
        <article class="rev rv">
          <div class="rev-head"><div class="stars" aria-label="Five stars">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="m12 3.5 2.6 5.5 6 .8-4.4 4.2 1.1 6-5.3-2.9-5.3 2.9 1.1-6L3.4 9.8l6-.8Z"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="m12 3.5 2.6 5.5 6 .8-4.4 4.2 1.1 6-5.3-2.9-5.3 2.9 1.1-6L3.4 9.8l6-.8Z"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="m12 3.5 2.6 5.5 6 .8-4.4 4.2 1.1 6-5.3-2.9-5.3 2.9 1.1-6L3.4 9.8l6-.8Z"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="m12 3.5 2.6 5.5 6 .8-4.4 4.2 1.1 6-5.3-2.9-5.3 2.9 1.1-6L3.4 9.8l6-.8Z"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="m12 3.5 2.6 5.5 6 .8-4.4 4.2 1.1 6-5.3-2.9-5.3 2.9 1.1-6L3.4 9.8l6-.8Z"/></svg>
            </div><span class="rev-tag">Sample</span></div>
          <p>Second review goes here. Two or three sentences is plenty. A specific number beats a compliment every time.</p>
          <div class="rev-by"><span class="av">B</span><div><b>[Client name]</b><span>[Company], [city]</span></div></div>
        </article>
        <article class="rev rv">
          <div class="rev-head"><div class="stars" aria-label="Five stars">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="m12 3.5 2.6 5.5 6 .8-4.4 4.2 1.1 6-5.3-2.9-5.3 2.9 1.1-6L3.4 9.8l6-.8Z"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="m12 3.5 2.6 5.5 6 .8-4.4 4.2 1.1 6-5.3-2.9-5.3 2.9 1.1-6L3.4 9.8l6-.8Z"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="m12 3.5 2.6 5.5 6 .8-4.4 4.2 1.1 6-5.3-2.9-5.3 2.9 1.1-6L3.4 9.8l6-.8Z"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="m12 3.5 2.6 5.5 6 .8-4.4 4.2 1.1 6-5.3-2.9-5.3 2.9 1.1-6L3.4 9.8l6-.8Z"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="m12 3.5 2.6 5.5 6 .8-4.4 4.2 1.1 6-5.3-2.9-5.3 2.9 1.1-6L3.4 9.8l6-.8Z"/></svg>
            </div><span class="rev-tag">Sample</span></div>
          <p>Third review goes here. If a client mentioned working across timezones or getting quick replies, that is the one to use.</p>
          <div class="rev-by"><span class="av">C</span><div><b>[Client name]</b><span>[Company], [city]</span></div></div>
        </article>
      </div>

      <div class="revs-ctrl">
        <button class="arw" id="rPrev" aria-label="Previous review">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12H5M11 6l-6 6 6 6"/></svg>
        </button>
        <div class="dots" id="rDots"></div>
        <button class="arw" id="rNext" aria-label="Next review">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>
        </button>
      </div>
    </div>
  </section>

  <!-- ============ FAQ ============ -->
  <section class="sec sec--alt band" id="faq">
    <div class="wrap faq-wrap">
      <div class="rv">
        <span class="kicker">Questions</span>
        <h2 style="margin-top:16px">Answers before you <span class="it">email</span>.</h2>
        <p class="lead" style="margin-top:20px">
          Something else on your mind? Put it in the brief and you will get an answer
          the same working day.
        </p>
      </div>

      <div id="faqList">
        <div class="qa">
          <button class="q" aria-expanded="false">What does a site actually cost?</button>
          <div class="a"><div class="a-in"><p>It depends on page count and whether you are selling online, so the quote is written after the first call rather than picked off a price list. What you can count on is a fixed number before any work starts, split half to book the slot and half on launch day, with no hourly surprises in between.</p></div></div>
        </div>
        <div class="qa">
          <button class="q" aria-expanded="false">How long does a website take?</button>
          <div class="a"><div class="a-in"><p>A five page site runs two to three weeks. A larger business site or a WooCommerce store takes four to six. The clock starts once we have your content and logos, which is usually what slows projects down, so a checklist goes out on day one.</p></div></div>
        </div>
        <div class="qa">
          <button class="q" aria-expanded="false">Do I have to write the content?</button>
          <div class="a"><div class="a-in"><p>You can, and we will edit it. If writing is the thing standing between you and a launch, we draft the pages from the call and your existing material, then you approve or change what we send.</p></div></div>
        </div>
        <div class="qa">
          <button class="q" aria-expanded="false">Will it work on my current hosting?</button>
          <div class="a"><div class="a-in"><p>Yes. We build on staging and migrate to whatever host you use. If your host is the reason the site is slow, we will show you the load times rather than quietly moving you somewhere we earn a commission.</p></div></div>
        </div>
        <div class="qa">
          <button class="q" aria-expanded="false">Can you guarantee a number one ranking?</button>
          <div class="a"><div class="a-in"><p>No, and anyone promising it is guessing. Google decides positions. What we control is a site that crawls cleanly, pages built around terms people search, and listings and links that make you the obvious local choice. Most sites start moving within three months.</p></div></div>
        </div>
        <div class="qa">
          <button class="q" aria-expanded="false">What happens after launch?</button>
          <div class="a"><div class="a-in"><p>You get every login, a short walkthrough video for editing, and 30 days of fixes included. After that you either run it yourself or put the site on a care plan for updates, backups and small changes.</p></div></div>
        </div>
        <div class="qa">
          <button class="q" aria-expanded="false">Do you work with clients overseas?</button>
          <div class="a"><div class="a-in"><p>Yes. Calls run in your timezone, invoices come in your currency, and the project happens over email, WhatsApp and a shared staging link. Distance has never been the thing that makes a build go wrong.</p></div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ QUOTE FORM ============ -->
  <section class="sec band" id="quote">
    <div class="wrap quote-grid">

      <div class="qside rv">
        <div>
          <span class="kicker">Get a quote</span>
          <h2 style="margin-top:16px">A real number, <span class="it">inside 24 hours</span>.</h2>
        </div>
        <p class="lead">
          Three short steps. We reply with a fixed price, a timeline, and exactly what
          we would need from you to hit it.
        </p>
        <ul>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="m4 12.5 5 5L20 6.5"/></svg> A written quote, not a "starting from" range</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="m4 12.5 5 5L20 6.5"/></svg> A week-by-week timeline you can hold us to</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="m4 12.5 5 5L20 6.5"/></svg> Notes on what we would fix first, free either way</li>
        </ul>
        <div class="qcontact">
          <div class="qrow"><em>Email</em> <?php verdex_email_link(); ?></div>
          <div class="qrow"><em>Phone</em> <?php verdex_phone_link(); ?></div>
        </div>
      </div>

      <?php verdex_quote_form(); ?>

    </div>
  </section>

  <!-- ============ CLOSE ============ -->
  <section class="sec sec--alt band">
    <div class="wrap">
      <div class="close rv">
        <span class="kicker">Next step</span>
        <h2>Your competitors are <span class="it">one search away</span>.</h2>
        <p>Get a site that shows up first and gives people a reason to call you.</p>
        <a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--acc">Get my fixed quote
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </div>
  </section>
