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
          <div class="qrow"><em>Email</em> <?php verdex_email_link(); ?>
            <button class="copy" data-copy="<?php echo esc_attr( verdex_email() ); ?>">Copy</button></div>
          <div class="qrow"><em>WhatsApp</em> <?php verdex_phone_link( 'whatsapp' ); ?>
            <button class="copy" data-copy="<?php echo esc_attr( verdex_phone_digits() ); ?>">Copy</button></div>
        </div>
      </div>

      <form class="card qform" id="brief" novalidate>
        <div class="bar">
          <div class="bar-top"><b id="stepName">Step 1 of 3 &middot; What you need</b><span id="stepTime">about a minute</span></div>
          <div class="bar-track"><div class="bar-fill" id="barFill"></div></div>
        </div>

        <!-- Step 1 -->
        <div class="stepbox" id="s1">
          <h3>What do you need help with?</h3>
          <div class="picks" role="group" aria-label="Services needed">
            <label class="pick" for="p1"><input type="checkbox" id="p1" value="Website"><span>New website</span></label>
            <label class="pick" for="p2"><input type="checkbox" id="p2" value="E-commerce"><span>Online store</span></label>
            <label class="pick" for="p3"><input type="checkbox" id="p3" value="SEO"><span>SEO</span></label>
            <label class="pick" for="p4"><input type="checkbox" id="p4" value="Ads"><span>Ads</span></label>
            <label class="pick" for="p5"><input type="checkbox" id="p5" value="Design"><span>Logo and brand</span></label>
            <label class="pick" for="p6"><input type="checkbox" id="p6" value="Care plan"><span>Care plan</span></label>
          </div>
          <div class="field">
            <label for="f-when">When would you like it live?</label>
            <select id="f-when">
              <option>As soon as possible</option>
              <option selected>In the next month or two</option>
              <option>Later this year</option>
              <option>Still deciding</option>
            </select>
          </div>
          <p class="err" id="e1" hidden>Pick at least one so we know what to quote.</p>
          <div class="nav-btns">
            <button type="button" class="btn btn--acc" data-next="2">Continue
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>
            </button>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="stepbox" id="s2" hidden>
          <h3>Tell us about the project</h3>
          <div class="field">
            <label for="f-co">Company</label>
            <input id="f-co" type="text" placeholder="Hart Joinery" autocomplete="organization">
          </div>
          <div class="field">
            <label for="f-site">Current website, if you have one</label>
            <input id="f-site" type="text" placeholder="hartjoinery.co.uk">
          </div>
          <div class="field">
            <label for="f-msg">What is the site not doing for you?</label>
            <textarea id="f-msg" placeholder="Enquiries dried up after the last rebuild, and the shop pages take about ten seconds on mobile."></textarea>
          </div>
          <div class="nav-btns">
            <button type="button" class="btn btn--ghost" data-back="1">Back</button>
            <button type="button" class="btn btn--acc" data-next="3">Continue
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>
            </button>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="stepbox" id="s3" hidden>
          <h3>Where do we send the quote?</h3>
          <div class="row2">
            <div class="field">
              <label for="f-name">Your name</label>
              <input id="f-name" type="text" placeholder="Jane Hart" autocomplete="name">
            </div>
            <div class="field">
              <label for="f-email">Email</label>
              <input id="f-email" type="email" placeholder="jane@company.com" autocomplete="email">
            </div>
          </div>
          <div class="field">
            <label for="f-phone">WhatsApp or phone, if you prefer that</label>
            <input id="f-phone" type="text" placeholder="+44 7700 900123" autocomplete="tel">
          </div>
          <p class="err" id="e3" hidden></p>
          <div class="nav-btns">
            <button type="button" class="btn btn--ghost" data-back="2">Back</button>
            <button type="submit" class="btn btn--acc" id="send">Send my brief
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>
            </button>
          </div>
          <p class="fnote">No newsletter, no reselling your details. Just a reply about your project.</p>
        </div>

        <!-- Done -->
        <div class="done" id="done" hidden>
          <span class="done-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="m4 12.5 5 5L20 6.5"/></svg></span>
          <h3 id="doneTitle">Brief ready</h3>
          <p id="doneText"></p>
          <div class="recap" id="recap"></div>
        </div>
      </form>

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
          <div class="a"><div class="a-in"><p>Yes. Speed fixes, a single landing page, a logo on its own, or taking over a site another developer walked away from.</p></div></div>
        </div>
      </div>
    </div>
  </section>
