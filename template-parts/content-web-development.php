<?php
/**
 * Content: Web Development service page.
 *
 * @package Verdex
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

  <!-- HERO -->
  <section class="sec band" style="padding-top:clamp(118px,14vw,166px)">
    <div class="wrap why">
      <div class="rv">
        <span class="kicker">Web Development</span>
        <h1 style="margin-top:16px;font-size:clamp(2.4rem,5vw,4rem)">Custom sites your team edits without <span class="it">calling us</span>.</h1>
        <p class="lead" style="margin-top:18px">We build in WordPress, WooCommerce, and Astro. No page builders, no plugin for every small thing. Every site ships with source files, a staging link from week one, and a video walkthrough so your team can make edits independently.</p>
        <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:28px">
          <a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--acc">Get a fixed quote
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>
          </a>
          <a href="<?php echo esc_url( verdex_page_url( 'portfolio' ) ); ?>" class="btn btn--ghost">See our work</a>
        </div>
      </div>
      <figure class="svc-img-frame rv">
        <img src="https://verdexwebsolutions.com/wp-content/uploads/2026/10/Modern-Web-Development-Workspace.png" alt="Web development workspace" loading="eager">
      </figure>
    </div>
  </section>

  <!-- STATS -->
  <section class="sec sec--alt band" style="padding-top:clamp(32px,4vw,48px);padding-bottom:clamp(32px,4vw,48px)">
    <div class="wrap">
      <div class="svcp-stats">
        <div class="svcp-stat rv">
          <strong>90+</strong>
          <span>Core Web Vitals score on every build</span>
        </div>
        <div class="svcp-stat rv">
          <strong>3–4 wks</strong>
          <span>Typical time from brief to launch</span>
        </div>
        <div class="svcp-stat rv">
          <strong>100%</strong>
          <span>Source files handed over at close</span>
        </div>
        <div class="svcp-stat rv">
          <strong>24 hrs</strong>
          <span>Fixed quote turnaround</span>
        </div>
      </div>
    </div>
  </section>

  <!-- WHAT'S INCLUDED -->
  <section class="sec band">
    <div class="wrap">
      <div class="svcp-head rv">
        <span class="kicker">What's included</span>
        <h2 style="margin-top:14px">Everything in the build, <span class="it">nothing bolted on after</span>.</h2>
      </div>
      <div class="svcp-cards">
        <div class="svcp-card rv">
          <span class="svcp-card-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></span>
          <h3>Custom WordPress theme</h3>
          <p>Built from your brand files or ours. No Elementor, no Divi. The output is clean PHP and CSS that loads fast and breaks less.</p>
        </div>
        <div class="svcp-card rv">
          <span class="svcp-card-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"/><path d="m16 8 5 3-5 3V8z"/></svg></span>
          <h3>WooCommerce stores</h3>
          <p>Variants, pricing rules, delivery zones, and tax logic. Tested against real checkout flows before we hand it over.</p>
        </div>
        <div class="svcp-card rv">
          <span class="svcp-card-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2.5 4.5 13.5H11l-.8 8 8.5-11H12Z"/></svg></span>
          <h3>Performance built in</h3>
          <p>Images sized, fonts loaded correctly, caching configured. Every site scores 90+ on Core Web Vitals before it goes live.</p>
        </div>
        <div class="svcp-card rv">
          <span class="svcp-card-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></span>
          <h3>Editable by your team</h3>
          <p>Advanced Custom Fields built into every template your client touches. Changing a heading or swapping an image takes 30 seconds.</p>
        </div>
        <div class="svcp-card rv">
          <span class="svcp-card-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14"/><path d="M16.5 9.4 7.55 4.24"/><polyline points="3.29 7 12 12 20.71 7"/><line x1="12" y1="22" x2="12" y2="12"/><circle cx="18.5" cy="15.5" r="2.5"/><path d="M20.27 17.27 22 19"/></svg></span>
          <h3>Migration and redirects</h3>
          <p>We move your content from the old host, map every redirect, and verify the domain switch. No ranking drop from a broken 301.</p>
        </div>
        <div class="svcp-card rv">
          <span class="svcp-card-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 11V8a3.5 3.5 0 0 1 7 0v3"/><rect x="4.5" y="11" width="15" height="9.5" rx="2.5"/></svg></span>
          <h3>You keep every key</h3>
          <p>Hosting, domain, and Google Analytics in your name from day one. No monthly fee to access your own site. No lock-in.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="sec sec--alt band">
    <div class="wrap">
      <div class="svcp-head rv">
        <span class="kicker">How it works</span>
        <h2 style="margin-top:14px">From signed brief to live site in <span class="it">3 to 4 weeks</span>.</h2>
      </div>
      <div class="svcp-steps">
        <div class="svcp-step rv">
          <span class="svcp-step-num">01</span>
          <h3>Brief</h3>
          <p>We agree on scope, tech stack, and a fixed price. You get the number before work starts, not after.</p>
        </div>
        <div class="svcp-step rv">
          <span class="svcp-step-num">02</span>
          <h3>Design</h3>
          <p>Wireframes, then a full visual design you review on a private staging link. No surprises at handover.</p>
        </div>
        <div class="svcp-step rv">
          <span class="svcp-step-num">03</span>
          <h3>Build</h3>
          <p>Theme development, content entry, and third-party integrations. You can watch it take shape from week one.</p>
        </div>
        <div class="svcp-step rv">
          <span class="svcp-step-num">04</span>
          <h3>QA</h3>
          <p>Cross-browser testing, mobile, forms, checkout flows, and page speed. Three days minimum before launch.</p>
        </div>
        <div class="svcp-step rv">
          <span class="svcp-step-num">05</span>
          <h3>Launch</h3>
          <p>DNS cutover, redirects verified, walkthrough video recorded. You own everything and know how to use it.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="sec band">
    <div class="wrap svcp-faq-wrap">
      <div class="svcp-head rv">
        <span class="kicker">Common questions</span>
        <h2 style="margin-top:14px">Answered <span class="it">straight</span>.</h2>
      </div>
      <div class="svcp-faq rv">
        <details>
          <summary>Do you use page builders like Elementor or Divi?</summary>
          <p>No. Page builders add significant weight and tend to break under WordPress updates. We build custom themes from scratch in PHP and CSS. The result loads faster and is easier to maintain.</p>
        </details>
        <details>
          <summary>How long does a typical project take?</summary>
          <p>A 5-page WordPress site takes 3 to 4 weeks from signed brief to launch. A WooCommerce store with complex product logic takes 6 to 8 weeks. We agree on a timeline before work starts.</p>
        </details>
        <details>
          <summary>I already have a site. Can you improve it instead of rebuilding?</summary>
          <p>Yes. We can audit it, rebuild specific page templates, improve page speed, or migrate it to a faster host. Book a call and we will tell you what is worth doing and what is not.</p>
        </details>
        <details>
          <summary>Who handles hosting?</summary>
          <p>You do. We help you set up an account on Hostinger, SiteGround, or Cloudways, configure the server, and hand it over to you. Your account, your invoice, your site.</p>
        </details>
        <details>
          <summary>What happens if something breaks after launch?</summary>
          <p>We fix it. All projects include 30 days of post-launch support. After that, we offer a monthly retainer if you want ongoing cover.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="sec sec--alt band">
    <div class="wrap">
      <div class="close rv">
        <span class="kicker">Get started</span>
        <h2>Tell us what you are <span class="it">building</span>.</h2>
        <p>Three short questions, and a fixed quote comes back inside 24 hours.</p>
        <a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--acc">Get my fixed quote
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </div>
  </section>
