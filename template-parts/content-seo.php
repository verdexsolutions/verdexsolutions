<?php
/**
 * Content: SEO service page.
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
        <span class="kicker">SEO</span>
        <h1 style="margin-top:16px;font-size:clamp(2.4rem,5vw,4rem)">Rankings built on fixing what is <span class="it">actually broken</span>.</h1>
        <p class="lead" style="margin-top:18px">We run a full technical audit before touching anything else. If your site cannot be crawled, content will not rank. We fix the foundation, then work on everything above it.</p>
        <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:28px">
          <a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--acc">Get a fixed quote
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>
          </a>
          <a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--ghost">Request a free audit</a>
        </div>
      </div>
      <figure class="svc-img-frame rv">
        <img src="<?php echo esc_url( verdex_image_url( 'seo-hero.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'seo-hero-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'seo-hero.webp' ) ); ?> 1200w" sizes="(max-width: 900px) 100vw, 50vw" width="1200" height="900" alt="Laptop showing search results with the top result highlighted beside a tablet with rising search traffic" fetchpriority="high" decoding="async">
      </figure>
    </div>
  </section>

  <!-- STATS -->
  <section class="sec sec--alt band" style="padding-top:clamp(32px,4vw,48px);padding-bottom:clamp(32px,4vw,48px)">
    <div class="wrap">
      <div class="svcp-stats">
        <div class="svcp-stat rv">
          <strong>5 days</strong>
          <span>Full technical audit delivered</span>
        </div>
        <div class="svcp-stat rv">
          <strong>4–8 wks</strong>
          <span>Typical time to see technical fix results</span>
        </div>
        <div class="svcp-stat rv">
          <strong>Monthly</strong>
          <span>Plain-English rankings report</span>
        </div>
        <div class="svcp-stat rv">
          <strong>Day one</strong>
          <span>Rankings tracked from the start</span>
        </div>
      </div>
    </div>
  </section>

  <!-- WHAT'S INCLUDED -->
  <section class="sec band">
    <div class="wrap">
      <div class="svcp-head rv">
        <span class="kicker">What's included</span>
        <h2 style="margin-top:14px">Technical first, then the rest of <span class="it">the work</span>.</h2>
      </div>
      <div class="svcp-cards">
        <div class="svcp-card rv">
          <figure class="svcp-card-img"><img src="<?php echo esc_url( verdex_image_url( 'seo-audit.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'seo-audit-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'seo-audit.webp' ) ); ?> 1200w" sizes="(max-width: 900px) 100vw, 33vw" width="1200" height="900" alt="Laptop showing a website audit report beside a printed audit checklist and a magnifying glass" loading="lazy" decoding="async"></figure>
          <span class="svcp-card-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg></span>
          <h3>Technical audit</h3>
          <p>Crawl errors, broken redirects, duplicate content, slow pages, and missing schema. Found, logged, and fixed inside 5 working days.</p>
        </div>
        <div class="svcp-card rv">
          <figure class="svcp-card-img"><img src="<?php echo esc_url( verdex_image_url( 'seo-onpage.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'seo-onpage-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'seo-onpage.webp' ) ); ?> 1200w" sizes="(max-width: 900px) 100vw, 33vw" width="1200" height="900" alt="Printed web page marked up with green pen notes in front of the live page on a laptop" loading="lazy" decoding="async"></figure>
          <span class="svcp-card-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg></span>
          <h3>On-page optimisation</h3>
          <p>Titles, headings, internal links, and schema. All checked against what people in your market actually search for, not what a tool suggests.</p>
        </div>
        <div class="svcp-card rv">
          <figure class="svcp-card-img"><img src="<?php echo esc_url( verdex_image_url( 'seo-local.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'seo-local-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'seo-local.webp' ) ); ?> 1200w" sizes="(max-width: 900px) 100vw, 33vw" width="1200" height="900" alt="Phone showing a map with a business pin and listing, resting on a paper city map" loading="lazy" decoding="async"></figure>
          <span class="svcp-card-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span>
          <h3>Local SEO</h3>
          <p>Google Business Profile set up and optimised. Citations cleaned up. Location pages built properly. Useful if most of your customers come from one city.</p>
        </div>
        <div class="svcp-card rv">
          <figure class="svcp-card-img"><img src="<?php echo esc_url( verdex_image_url( 'seo-content.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'seo-content-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'seo-content.webp' ) ); ?> 1200w" sizes="(max-width: 900px) 100vw, 33vw" width="1200" height="900" alt="Notebook of keyword research and content ideas beside an article draft on a laptop" loading="lazy" decoding="async"></figure>
          <span class="svcp-card-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></span>
          <h3>Content built on real data</h3>
          <p>We write content around search terms people actually type, not keyword-stuffed articles that satisfy a tool and nobody reads.</p>
        </div>
        <div class="svcp-card rv">
          <figure class="svcp-card-img"><img src="<?php echo esc_url( verdex_image_url( 'seo-rankings.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'seo-rankings-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'seo-rankings.webp' ) ); ?> 1200w" sizes="(max-width: 900px) 100vw, 33vw" width="1200" height="900" alt="Monitor showing a search rankings table and a climbing traffic chart beside a desk calendar" loading="lazy" decoding="async"></figure>
          <span class="svcp-card-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></span>
          <h3>Rankings tracked from day one</h3>
          <p>We set up tracking before the first change goes live, so you can see what moved, when it moved, and why.</p>
        </div>
        <div class="svcp-card rv">
          <figure class="svcp-card-img"><img src="<?php echo esc_url( verdex_image_url( 'dm-review.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'dm-review-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'dm-review.webp' ) ); ?> 1200w" sizes="(max-width: 900px) 100vw, 33vw" width="1200" height="900" alt="Printed monthly report with charts and a highlighted section beside a desk calendar" loading="lazy" decoding="async"></figure>
          <span class="svcp-card-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></span>
          <h3>Monthly report</h3>
          <p>One report, every month. Rankings, traffic, and what changed. Written to be readable in five minutes, not fifty.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="sec sec--alt band">
    <div class="wrap">
      <div class="svcp-head rv">
        <span class="kicker">How it works</span>
        <h2 style="margin-top:14px">Technical fixes first, then the <span class="it">ongoing work</span>.</h2>
      </div>
      <div class="svcp-steps">
        <div class="svcp-step rv">
          <span class="svcp-step-num">01</span>
          <h3>Audit</h3>
          <p>Full technical crawl of your site. Delivered in 5 working days with a prioritised fix list, not a 60-page PDF nobody reads.</p>
        </div>
        <div class="svcp-step rv">
          <span class="svcp-step-num">02</span>
          <h3>Fix</h3>
          <p>We fix the issues, not just flag them. Redirect mapping, canonical tags, page speed, structured data.</p>
        </div>
        <div class="svcp-step rv">
          <span class="svcp-step-num">03</span>
          <h3>Optimise</h3>
          <p>On-page work: titles, headings, internal links, content gaps filled with pages built around real search terms.</p>
        </div>
        <div class="svcp-step rv">
          <span class="svcp-step-num">04</span>
          <h3>Build</h3>
          <p>Off-page work where relevant: backlinks and local citations targeted at your actual market.</p>
        </div>
        <div class="svcp-step rv">
          <span class="svcp-step-num">05</span>
          <h3>Report</h3>
          <p>Monthly rankings update. Plain English. What went up, what needs more work, and what we are doing next.</p>
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
          <summary>How long before we see results?</summary>
          <p>Technical fixes can move rankings in 4 to 8 weeks. Competitive keywords in a crowded market take 3 to 6 months. Anyone promising faster results is guessing. We will tell you what is realistic for your specific terms before you commit.</p>
        </details>
        <details>
          <summary>Do you write the content?</summary>
          <p>Yes. Content is included in the SEO service. We research the terms, write the pages, and publish them. You review everything before it goes live.</p>
        </details>
        <details>
          <summary>We hired an SEO agency before and saw nothing. Why would this be different?</summary>
          <p>Send us the previous audit or reports. We will tell you what was done, what was missed, and whether the strategy was wrong or just unfinished. No obligation.</p>
        </details>
        <details>
          <summary>Do you guarantee rankings?</summary>
          <p>No. Anyone who guarantees a specific ranking position is either lying or misrepresenting how search works. We guarantee the work: audits delivered on time, fixes implemented correctly, reports every month.</p>
        </details>
        <details>
          <summary>What access do you need?</summary>
          <p>Google Search Console, Google Analytics, and editor access to the WordPress backend. We work in your accounts, not ours, so you keep full visibility.</p>
        </details>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/related', 'services', array( 'current' => 'seo' ) ); ?>

  <!-- CTA -->
  <section class="sec sec--alt band">
    <div class="wrap">
      <div class="close rv">
        <span class="kicker">Get started</span>
        <h2>Find out what is holding your <span class="it">site back</span>.</h2>
        <p>Request a free audit. We will look at your site and tell you exactly what needs fixing before we ask for anything.</p>
        <a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--acc">Request a free audit
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </div>
  </section>
