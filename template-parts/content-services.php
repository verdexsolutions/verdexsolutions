<?php
/**
 * Content: services page.
 *
 * @package Verdex
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

  <!-- ============ HERO ============ -->
  <section class="sec band" style="padding-top:clamp(118px,14vw,166px);padding-bottom:clamp(40px,6vw,64px)">
    <div class="wrap">
      <span class="kicker">Services</span>
      <h1 style="margin-top:18px;font-size:clamp(2.8rem,6vw,4.8rem);max-width:16ch">Everything your business needs, <span class="it">one team</span>.</h1>
      <p class="lead" style="margin-top:20px;max-width:52ch">Web development, SEO, digital marketing and graphic design — handled by the same people from brief to handover.</p>
      <nav class="svcs-nav">
        <a href="<?php echo esc_url( verdex_page_url( 'web-development' ) ); ?>">Web Development</a>
        <a href="<?php echo esc_url( verdex_page_url( 'seo' ) ); ?>">SEO</a>
        <a href="<?php echo esc_url( verdex_page_url( 'digital-marketing' ) ); ?>">Digital Marketing</a>
        <a href="<?php echo esc_url( verdex_page_url( 'graphic-design' ) ); ?>">Graphic Design</a>
      </nav>
    </div>
  </section>

  <!-- ============ OVERVIEW CARDS ============ -->
  <section class="sec sec--alt band">
    <div class="wrap">
      <div class="svcs-grid">

        <a href="<?php echo esc_url( verdex_page_url( 'web-development' ) ); ?>" class="svc-card">
          <span class="svc-card__num">01</span>
          <span class="svc-card__ico">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </span>
          <h3>Web Development</h3>
          <p>Custom WordPress themes, WooCommerce stores and Astro builds — fast, editable, and built to last.</p>
          <span class="svc-card__link">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg></span>
        </a>

        <a href="<?php echo esc_url( verdex_page_url( 'seo' ) ); ?>" class="svc-card">
          <span class="svc-card__num">02</span>
          <span class="svc-card__ico">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
          </span>
          <h3>SEO</h3>
          <p>Technical audits, on-page fixes and content that earns rankings — measured monthly with a report you can read.</p>
          <span class="svc-card__link">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg></span>
        </a>

        <a href="<?php echo esc_url( verdex_page_url( 'digital-marketing' ) ); ?>" class="svc-card">
          <span class="svc-card__num">03</span>
          <span class="svc-card__ico">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </span>
          <h3>Digital Marketing</h3>
          <p>Google and Meta campaigns with landing pages included — ad spend stays in your account, results tracked daily.</p>
          <span class="svc-card__link">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg></span>
        </a>

        <a href="<?php echo esc_url( verdex_page_url( 'graphic-design' ) ); ?>" class="svc-card">
          <span class="svc-card__num">04</span>
          <span class="svc-card__ico">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3"/><line x1="12" y1="2" x2="12" y2="9"/><line x1="12" y1="15" x2="12" y2="22"/><line x1="2" y1="12" x2="9" y2="12"/><line x1="15" y1="12" x2="22" y2="12"/></svg>
          </span>
          <h3>Graphic Design</h3>
          <p>Logos, brand systems and every file format your printer and social manager will ever ask for — source files included.</p>
          <span class="svc-card__link">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg></span>
        </a>

      </div>
    </div>
  </section>

  <!-- ============ WEB DEVELOPMENT ============ -->
  <section class="sec band svc-detail-sec" id="web-development">
    <div class="wrap svc-detail">
      <figure class="svc-img-frame rv">
        <img src="https://verdexwebsolutions.com/wp-content/uploads/2026/10/Modern-Web-Development-Workspace.png" alt="Web development" loading="lazy">
        <div class="svc-img-ph" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          <span>Web Development</span>
        </div>
      </figure>
      <div class="svc-detail__body rv">
        <span class="svc-detail__num">01</span>
        <span class="kicker" style="margin-top:14px">Website development</span>
        <h2 style="margin-top:14px">Sites that load fast and <span class="it">stay editable</span>.</h2>
        <p class="lead" style="margin-top:16px">Custom WordPress themes, WooCommerce stores and static builds in Astro. No page builders stacked on each other, no plugin for every small thing.</p>
        <ul class="svc-features">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Custom theme, built from your design or ours</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> WooCommerce with variants, pricing rules and delivery zones</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Advanced Custom Fields for easy client editing</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Core Web Vitals and caching handled in the build</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Migration from old host with redirects mapped</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Staging link from week one</li>
        </ul>
        <a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--acc" style="margin-top:28px">Get a quote
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- ============ SEO ============ -->
  <section class="sec sec--alt band svc-detail-sec" id="seo">
    <div class="wrap svc-detail svc-detail--rev">
      <div class="svc-detail__body rv">
        <span class="svc-detail__num">02</span>
        <span class="kicker" style="margin-top:14px">Search Engine Optimisation</span>
        <h2 style="margin-top:14px">Get found for what people <span class="it">actually type</span>.</h2>
        <p class="lead" style="margin-top:16px">A technical audit comes first, because broken crawling and slow pages cap everything after it. Then on-page and off-page work, measured monthly.</p>
        <ul class="svc-features">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Full technical audit inside five working days</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Titles, headings, internal links and schema</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Local SEO and Google Business Profile</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Content built around real search terms</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Rankings tracked from day one</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Monthly report you can read in five minutes</li>
        </ul>
        <a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--acc" style="margin-top:28px">Get a quote
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>
        </a>
      </div>
      <figure class="svc-img-frame rv">
        <img src="https://verdexwebsolutions.com/wp-content/uploads/2026/10/Modern-SEO-Analytics-Workspace.png" alt="SEO" loading="lazy">
        <div class="svc-img-ph" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
          <span>SEO</span>
        </div>
      </figure>
    </div>
  </section>

  <!-- ============ DIGITAL MARKETING ============ -->
  <section class="sec band svc-detail-sec" id="digital-marketing">
    <div class="wrap svc-detail">
      <figure class="svc-img-frame rv">
        <img src="https://verdexwebsolutions.com/wp-content/uploads/2026/10/Neon-Green-Marketing-Analytics-Dashboard-1.png" alt="Digital marketing" loading="lazy">
        <div class="svc-img-ph" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          <span>Digital Marketing</span>
        </div>
      </figure>
      <div class="svc-detail__body rv">
        <span class="svc-detail__num">03</span>
        <span class="kicker" style="margin-top:14px">Digital marketing</span>
        <h2 style="margin-top:14px">Ads that pay for <span class="it">themselves</span>.</h2>
        <p class="lead" style="margin-top:16px">Google and Meta campaigns built around one offer at a time, with landing pages we write and build so the ad and the page say the same thing.</p>
        <ul class="svc-features">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Google Ads and Meta campaign build and management</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Landing pages included, not quoted separately</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Conversion tracking and GA4 set up properly</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Email flows for people who left without buying</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Ad spend stays in your own account</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Monthly review of what to cut and what to scale</li>
        </ul>
        <a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--acc" style="margin-top:28px">Get a quote
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- ============ GRAPHIC DESIGN ============ -->
  <section class="sec sec--alt band svc-detail-sec" id="graphic-design">
    <div class="wrap svc-detail svc-detail--rev">
      <div class="svc-detail__body rv">
        <span class="svc-detail__num">04</span>
        <span class="kicker" style="margin-top:14px">Graphic design</span>
        <h2 style="margin-top:14px">A brand your printer and <span class="it">social manager</span> can both use.</h2>
        <p class="lead" style="margin-top:16px">Logos, colour and type systems, and every file format you will be asked for. Source files handed over, always.</p>
        <ul class="svc-features">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Logo design with revisions until it matches the brief</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Colour and type system with a brand sheet</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Social templates sized per platform</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Print-ready artwork with bleed and CMYK</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> UI and UX design for web and app screens</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m4 12.5 5 5L20 6.5"/></svg> Editable vectors plus export-ready formats</li>
        </ul>
        <a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--acc" style="margin-top:28px">Get a quote
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>
        </a>
      </div>
      <figure class="svc-img-frame rv">
        <img src="https://verdexwebsolutions.com/wp-content/uploads/2026/10/Modern-Graphic-Design-Workspace.png" alt="Graphic design" loading="lazy">
        <div class="svc-img-ph" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3"/></svg>
          <span>Graphic Design</span>
        </div>
      </figure>
    </div>
  </section>

  <!-- ============ CTA ============ -->
  <section class="sec band">
    <div class="wrap">
      <div class="close">
        <span class="kicker">Next step</span>
        <h2>Tell us what you are <span class="it">building</span>.</h2>
        <p>Three short questions, and a fixed quote comes back inside 24 hours.</p>
        <a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--acc">Get my fixed quote
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </div>
  </section>
