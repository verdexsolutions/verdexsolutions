<?php
/**
 * Content: Graphic Design service page.
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
        <span class="kicker">Graphic Design</span>
        <h1 style="margin-top:16px;font-size:clamp(2.4rem,5vw,4rem)">A brand identity every format can <span class="it">actually use</span>.</h1>
        <p class="lead" style="margin-top:18px">Logos, colour systems, and type. Every file your printer, web developer, and social manager will ask for, handed over when the project closes. Source files always included.</p>
        <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:28px">
          <a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--acc">Get a fixed quote
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>
          </a>
          <a href="<?php echo esc_url( verdex_page_url( 'portfolio' ) ); ?>" class="btn btn--ghost">See brand work</a>
        </div>
      </div>
      <figure class="svc-img-frame rv">
        <img src="<?php echo esc_url( verdex_image_url( 'svc-design.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'svc-design-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'svc-design.webp' ) ); ?> 1200w" sizes="(max-width: 900px) 100vw, 50vw" width="1200" height="900" alt="Brand kit on a desk: colour swatches, logo sketches, business cards and a brand sheet" fetchpriority="high" decoding="async">
      </figure>
    </div>
  </section>

  <!-- STATS -->
  <section class="sec sec--alt band" style="padding-top:clamp(32px,4vw,48px);padding-bottom:clamp(32px,4vw,48px)">
    <div class="wrap">
      <div class="svcp-stats">
        <div class="svcp-stat rv">
          <strong>3 concepts</strong>
          <span>Logo directions from the brief</span>
        </div>
        <div class="svcp-stat rv">
          <strong>All formats</strong>
          <span>SVG, PDF, PNG, EPS delivered</span>
        </div>
        <div class="svcp-stat rv">
          <strong>Included</strong>
          <span>Revisions until the brief is met</span>
        </div>
        <div class="svcp-stat rv">
          <strong>100%</strong>
          <span>Source files yours at close</span>
        </div>
      </div>
    </div>
  </section>

  <!-- WHAT'S INCLUDED -->
  <section class="sec band">
    <div class="wrap">
      <div class="svcp-head rv">
        <span class="kicker">What's included</span>
        <h2 style="margin-top:14px">Design that works across every surface <span class="it">you actually use</span>.</h2>
      </div>
      <div class="svcp-cards">
        <div class="svcp-card rv">
          <figure class="svcp-card-img"><img src="<?php echo esc_url( verdex_image_url( 'gd-logo.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'gd-logo-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'gd-logo.webp' ) ); ?> 1200w" sizes="(max-width: 900px) 100vw, 33vw" width="1200" height="900" alt="Notebook of pencil logo sketches beside a tablet showing the finished mark" loading="lazy" decoding="async"></figure>
          <span class="svcp-card-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8.56 2.75c4.37 6.03 6.02 9.42 8.03 17.72m2.54-15.38c-3.72 4.35-8.94 5.66-16.88 5.85m19.5 1.9c-3.5-.93-6.63-.82-8.94 0-2.58.92-5.01 2.86-7.44 6.32"/></svg></span>
          <h3>Logo design</h3>
          <p>Primary mark, secondary version, and icon. Delivered in SVG, PDF, PNG (transparent background), and EPS. Three initial concepts, revisions on the chosen one until the brief is met.</p>
        </div>
        <div class="svcp-card rv">
          <figure class="svcp-card-img"><img src="https://verdexwebsolutions.com/wp-content/uploads/2026/10/Modern-Web-Development-Workspace.png" alt="Brand system" loading="lazy"></figure>
          <span class="svcp-card-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="13.5" cy="6.5" r="2.5"/><circle cx="19" cy="17" r="2.5"/><circle cx="6.5" cy="17" r="2.5"/></svg></span>
          <h3>Brand system</h3>
          <p>Colour palette with hex, RGB, and CMYK values. Typeface choices with sizing rules. A one-page brand sheet your team can follow without calling us.</p>
        </div>
        <div class="svcp-card rv">
          <figure class="svcp-card-img"><img src="<?php echo esc_url( verdex_image_url( 'gd-social.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'gd-social-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'gd-social.webp' ) ); ?> 1200w" sizes="(max-width: 900px) 100vw, 33vw" width="1200" height="900" alt="Three phones showing a post, a story and a banner in the same brand style" loading="lazy" decoding="async"></figure>
          <span class="svcp-card-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></span>
          <h3>Social templates</h3>
          <p>Story, post, and cover templates sized for Instagram, Facebook, and LinkedIn. Built in Canva or Figma so your team can edit them without design software.</p>
        </div>
        <div class="svcp-card rv">
          <figure class="svcp-card-img"><img src="<?php echo esc_url( verdex_image_url( 'gd-print.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'gd-print-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'gd-print.webp' ) ); ?> 1200w" sizes="(max-width: 900px) 100vw, 33vw" width="1200" height="900" alt="Branded letterhead, business cards and brochure with a printer colour bar and loupe" loading="lazy" decoding="async"></figure>
          <span class="svcp-card-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></span>
          <h3>Print artwork</h3>
          <p>Business cards, letterheads, brochures, and signage. CMYK values correct, bleed included, and sent to your printer in the format they actually ask for.</p>
        </div>
        <div class="svcp-card rv">
          <figure class="svcp-card-img"><img src="<?php echo esc_url( verdex_image_url( 'gd-uiux.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'gd-uiux-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'gd-uiux.webp' ) ); ?> 1200w" sizes="(max-width: 900px) 100vw, 33vw" width="1200" height="900" alt="Paper wireframe sketches next to a laptop showing the finished website design" loading="lazy" decoding="async"></figure>
          <span class="svcp-card-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg></span>
          <h3>UI and UX design</h3>
          <p>Screen designs for web and app projects. Wireframes first, then high-fidelity mockups your developer can build from without guessing at measurements.</p>
        </div>
        <div class="svcp-card rv">
          <figure class="svcp-card-img"><img src="<?php echo esc_url( verdex_image_url( 'gd-handover.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'gd-handover-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'gd-handover.webp' ) ); ?> 1200w" sizes="(max-width: 900px) 100vw, 33vw" width="1200" height="900" alt="USB drive, handover checklist and logo proof sheets in every colour version" loading="lazy" decoding="async"></figure>
          <span class="svcp-card-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><polyline points="8 17 12 21 16 17"/><line x1="12" y1="12" x2="12" y2="21"/><path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"/></svg></span>
          <h3>Full file handover</h3>
          <p>Editable source files in AI, PSD, or Figma. Every format. No charge for the files and no request to stay on a retainer to access your own brand assets.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="sec sec--alt band">
    <div class="wrap">
      <div class="svcp-head rv">
        <span class="kicker">How it works</span>
        <h2 style="margin-top:14px">Brief, concepts, refine, <span class="it">done</span>.</h2>
      </div>
      <div class="svcp-steps svcp-steps--4">
        <div class="svcp-step rv">
          <span class="svcp-step-num">01</span>
          <h3>Brief</h3>
          <p>We agree on direction, references, and what done looks like. The brief is a written document, signed off by both sides, before design starts.</p>
        </div>
        <div class="svcp-step rv">
          <span class="svcp-step-num">02</span>
          <h3>Concepts</h3>
          <p>Three logo directions based on the brief. Presented with reasoning, not just visuals, so you can give useful feedback.</p>
        </div>
        <div class="svcp-step rv">
          <span class="svcp-step-num">03</span>
          <h3>Refine</h3>
          <p>One revision round on the chosen direction is included. We keep going until the brief is met, not until we run out of rounds.</p>
        </div>
        <div class="svcp-step rv">
          <span class="svcp-step-num">04</span>
          <h3>Deliver</h3>
          <p>Full file package, brand sheet, and a walkthrough call. You leave knowing what you have and how to use it.</p>
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
          <summary>How many logo concepts do we get?</summary>
          <p>Three initial directions. One revision round on the chosen concept is included in the project price. Further revision rounds are quoted at our hourly rate before we start them.</p>
        </details>
        <details>
          <summary>Can you redesign our existing logo?</summary>
          <p>Yes. Rebrand and refresh projects follow the same process: brief, concepts, refine, deliver. We look at what you have, decide together what to keep, and go from there.</p>
        </details>
        <details>
          <summary>Do you handle social media posting?</summary>
          <p>No. We design the templates and brand assets. Content strategy and posting are outside our scope. If you need that, we can refer you to someone who does it properly.</p>
        </details>
        <details>
          <summary>What software do you use?</summary>
          <p>Adobe Illustrator for logo and print work. Figma for UI and screen design. Canva for social templates intended for non-designers to edit. You get the source files in whichever format the work was built in.</p>
        </details>
        <details>
          <summary>What if I am not happy with any of the three concepts?</summary>
          <p>We go back to the brief together and work out what information was missing. Then we produce a second round. This has happened once. It is usually a brief problem, not a design problem, and a better brief fixes it.</p>
        </details>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/related', 'services', array( 'current' => 'graphic-design' ) ); ?>

  <!-- CTA -->
  <section class="sec sec--alt band">
    <div class="wrap">
      <div class="close rv">
        <span class="kicker">Get started</span>
        <h2>Tell us what you are <span class="it">building</span>.</h2>
        <p>Send us a brief or a reference and we will quote the project before work starts.</p>
        <a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--acc">Get a fixed quote
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </div>
  </section>
