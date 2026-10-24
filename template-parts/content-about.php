<?php
/**
 * Content: about page.
 *
 * @package Verdex
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
  <section class="sec band" style="padding-top:clamp(118px,14vw,166px)">
    <div class="wrap">
      <span class="kicker">About</span>
      <h2 style="margin-top:18px;font-size:clamp(2.4rem,5.4vw,4.1rem)">A small studio that <span class="it">finishes things</span>.</h2>
      <p class="lead" style="margin-top:20px">Verdex is run by developers rather than account managers. You talk to the person writing the code, you watch the build on staging, and you leave with every key at the end.</p>
    </div>
  </section>
  <!-- ============ WHY CHOOSE ============ -->
  <section class="sec sec--alt band" id="why">
    <div class="wrap why">
      <div class="rv">
        <span class="kicker">Why choose Verdex</span>
        <h2 style="margin-top:16px">Careful build, <span class="it">clean handover</span>.</h2>
        <p class="lead" style="margin-top:18px">
          The work is only half of it. The other half is knowing what you are paying,
          seeing it happen, and owning everything at the end. <a class="ilink" href="<?php echo esc_url( verdex_page_url( 'portfolio' ) ); ?>">Our portfolio</a> shows where that has led.
        </p>

        <div class="why-points">
          <div class="wp">
            <span class="wp-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2.5 4.5 13.5H11l-.8 8 8.5-11H12Z"/></svg></span>
            <div>
              <h3>One team, start to finish</h3>
              <p><a class="ilink" href="<?php echo esc_url( verdex_page_url( 'graphic-design' ) ); ?>">Design</a>, <a class="ilink" href="<?php echo esc_url( verdex_page_url( 'web-development' ) ); ?>">build</a>, <a class="ilink" href="<?php echo esc_url( verdex_page_url( 'seo' ) ); ?>">SEO</a> and <a class="ilink" href="<?php echo esc_url( verdex_page_url( 'digital-marketing' ) ); ?>">ads</a> sit with the same people. Nothing gets lost in a handoff between three vendors who blame each other.</p>
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
        <img src="https://verdexwebsolutions.com/wp-content/uploads/2026/10/Neon-Developer-Workspace-Dashboard.png" alt="Why choose Verdex: developer workspace with glowing code panels" loading="lazy">
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

  <section class="sec sec--alt band">
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
