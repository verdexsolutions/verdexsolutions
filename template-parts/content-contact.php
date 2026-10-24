<?php
/**
 * Content: contact page.
 *
 * @package Verdex
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
  <section class="sec band" style="padding-top:clamp(118px,14vw,166px)">
    <div class="wrap">
      <span class="kicker">Contact</span>
      <h2 style="margin-top:18px;font-size:clamp(2.4rem,5.4vw,4.1rem)">A real number, <span class="it">inside 24 hours</span>.</h2>
      <p class="lead" style="margin-top:20px">Three short steps. You get a fixed price, a timeline, and exactly what we would need from you to hit it.</p>
    </div>
  </section>
  <!-- ============ QUOTE FORM ============ -->
  <section class="sec sec--alt band" id="quote">
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

  <section class="sec band">
    <div class="wrap faq-wrap">
      <div>
        <span class="kicker">Before you send it</span>
        <h2 style="margin-top:16px">Common <span class="it">questions</span>.</h2>
      </div>
      <div>
        <div class="qa">
          <button class="q" aria-expanded="false">How fast will I hear back?</button>
          <div class="a"><div class="a-in"><p>Within one working day, with either a fixed quote or the three questions we need answered before we can write one.</p></div></div>
        </div>
        <div class="qa">
          <button class="q" aria-expanded="false">Is the quote really fixed?</button>
          <div class="a"><div class="a-in"><p>Yes. The number in the proposal is the number on the invoice. Anything added mid-build gets quoted separately, before work starts on it.</p></div></div>
        </div>
        <div class="qa">
          <button class="q" aria-expanded="false">What do you need from me to start?</button>
          <div class="a"><div class="a-in"><p>Logo files, your content or notes towards it, and access to the current site and host if there is one. A checklist goes out on day one so nothing stalls halfway.</p></div></div>
        </div>
        <div class="qa">
          <button class="q" aria-expanded="false">Do you take small jobs?</button>
          <div class="a"><div class="a-in"><p>Yes. <a class="ilink" href="<?php echo esc_url( verdex_page_url( 'web-development' ) ); ?>">Speed fixes</a>, a <a class="ilink" href="<?php echo esc_url( verdex_page_url( 'digital-marketing' ) ); ?>">single landing page</a>, <a class="ilink" href="<?php echo esc_url( verdex_page_url( 'graphic-design' ) ); ?>">a logo on its own</a>, or taking over a site another developer walked away from. See <a class="ilink" href="<?php echo esc_url( verdex_page_url( 'portfolio' ) ); ?>">recent projects</a> for the range.</p></div></div>
        </div>
      </div>
    </div>
  </section>
