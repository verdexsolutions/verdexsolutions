<?php
/**
 * Content: portfolio page.
 *
 * @package Verdex
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
  <section class="sec band hero--photo" style="padding-top:clamp(118px,14vw,166px)">
    <div class="hero-bg" aria-hidden="true">
      <img src="<?php echo esc_url( verdex_image_url( 'portfolio-hero.webp' ) ); ?>"
        srcset="<?php echo esc_url( verdex_image_url( 'portfolio-hero-900.webp' ) ); ?> 900w, <?php echo esc_url( verdex_image_url( 'portfolio-hero.webp' ) ); ?> 1536w"
        sizes="100vw" width="1536" height="1024" alt="" fetchpriority="high" decoding="async">
    </div>
    <div class="wrap">
      <span class="kicker">Portfolio</span>
      <h2 style="margin-top:18px;font-size:clamp(2.4rem,5.4vw,4.1rem)">Built, shipped, <span class="it">still running</span>.</h2>
      <p class="lead" style="margin-top:20px">Real estate, coffee, IT and a private club, across four countries. Every one handed over with full access and no lock-in.</p>
    </div>
  </section>
  <section class="sec sec--alt band">
    <div class="wrap">
      <div class="work">
        <article class="proj">
          <a class="shot shot--img" href="https://www.urbnlivn.com/" target="_blank" rel="noopener" aria-label="Urban Living live site">
            <img src="<?php echo esc_url( verdex_image_url( 'pf-urban-living.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'pf-urban-living-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'pf-urban-living.webp' ) ); ?> 1200w" sizes="(max-width: 560px) 100vw, (max-width: 900px) 50vw, 33vw" width="1200" height="800" alt="Urban Living real estate website shown on a desktop, tablet and phone" loading="eager" decoding="async">
          </a>
          <div class="proj-txt">
            <em class="proj-tag">Real estate · Seattle</em>
            <h3>Urban Living</h3>
            <p>A boutique brokerage for Seattle and the Eastside. The homepage opens on one address search, with listings, market notes and agent profiles a scroll below.</p>
            <a class="proj-res proj-link" href="https://www.urbnlivn.com/" target="_blank" rel="noopener">View live site <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M8 7h9v9"/></svg></a>
          </div>
        </article>
        <article class="proj">
          <a class="shot shot--img" href="https://www.jhornig.com/" target="_blank" rel="noopener" aria-label="J. Hornig live site">
            <img src="<?php echo esc_url( verdex_image_url( 'pf-hornig.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'pf-hornig-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'pf-hornig.webp' ) ); ?> 1200w" sizes="(max-width: 560px) 100vw, (max-width: 900px) 50vw, 33vw" width="1200" height="800" alt="J. Hornig coffee online shop shown on a desktop, tablet and phone" loading="eager" decoding="async">
          </a>
          <div class="proj-txt">
            <em class="proj-tag">Coffee shop · Austria</em>
            <h3>J. Hornig</h3>
            <p>A Shopify store for an Austrian coffee roaster. Beans, capsules, a coffee subscription and barista courses, with free shipping from €20 shown on every page.</p>
            <a class="proj-res proj-link" href="https://www.jhornig.com/" target="_blank" rel="noopener">View live site <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M8 7h9v9"/></svg></a>
          </div>
        </article>
        <article class="proj">
          <a class="shot shot--img" href="https://www.digitalnext.com.au/" target="_blank" rel="noopener" aria-label="Digital Next live site">
            <img src="<?php echo esc_url( verdex_image_url( 'pf-digital-next.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'pf-digital-next-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'pf-digital-next.webp' ) ); ?> 1200w" sizes="(max-width: 560px) 100vw, (max-width: 900px) 50vw, 33vw" width="1200" height="800" alt="Digital Next marketing agency website shown on a desktop, tablet and phone" loading="eager" decoding="async">
          </a>
          <div class="proj-txt">
            <em class="proj-tag">Marketing agency · Melbourne</em>
            <h3>Digital Next</h3>
            <p>A WordPress site for a Melbourne digital marketing agency. The hero asks for one thing, your website address, and turns it into a free strategy request.</p>
            <a class="proj-res proj-link" href="https://www.digitalnext.com.au/" target="_blank" rel="noopener">View live site <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M8 7h9v9"/></svg></a>
          </div>
        </article>
        <article class="proj">
          <a class="shot shot--img" href="https://www.kensingtonmorocco.com/" target="_blank" rel="noopener" aria-label="Kensington Luxury Properties live site">
            <img src="<?php echo esc_url( verdex_image_url( 'pf-kensington.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'pf-kensington-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'pf-kensington.webp' ) ); ?> 1200w" sizes="(max-width: 560px) 100vw, (max-width: 900px) 50vw, 33vw" width="1200" height="800" alt="Kensington Luxury Properties Morocco website shown on a desktop, tablet and phone" loading="lazy" decoding="async">
          </a>
          <div class="proj-txt">
            <em class="proj-tag">Luxury property · Morocco</em>
            <h3>Kensington Luxury Properties</h3>
            <p>Luxury villas for sale and rent across Morocco, in French. A four-field search for type, location, property and budget sits right on the hero photo.</p>
            <a class="proj-res proj-link" href="https://www.kensingtonmorocco.com/" target="_blank" rel="noopener">View live site <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M8 7h9v9"/></svg></a>
          </div>
        </article>
        <article class="proj">
          <a class="shot shot--img" href="https://aekotech.com/" target="_blank" rel="noopener" aria-label="Aeko Technologies live site">
            <img src="<?php echo esc_url( verdex_image_url( 'pf-aeko.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'pf-aeko-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'pf-aeko.webp' ) ); ?> 1200w" sizes="(max-width: 560px) 100vw, (max-width: 900px) 50vw, 33vw" width="1200" height="800" alt="Aeko Technologies IT support website shown on a desktop, tablet and phone" loading="lazy" decoding="async">
          </a>
          <div class="proj-txt">
            <em class="proj-tag">IT support · Dallas–Fort Worth</em>
            <h3>Aeko Technologies</h3>
            <p>Managed IT and cyber security for businesses in Dallas, Fort Worth and Oklahoma City. Every section ends on the same button: book a quick consultation.</p>
            <a class="proj-res proj-link" href="https://aekotech.com/" target="_blank" rel="noopener">View live site <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M8 7h9v9"/></svg></a>
          </div>
        </article>
        <article class="proj">
          <a class="shot shot--img" href="https://siloridge.com/" target="_blank" rel="noopener" aria-label="Silo Ridge Field Club live site">
            <img src="<?php echo esc_url( verdex_image_url( 'pf-silo-ridge.webp' ) ); ?>" srcset="<?php echo esc_url( verdex_image_url( 'pf-silo-ridge-720.webp' ) ); ?> 720w, <?php echo esc_url( verdex_image_url( 'pf-silo-ridge.webp' ) ); ?> 1200w" sizes="(max-width: 560px) 100vw, (max-width: 900px) 50vw, 33vw" width="1200" height="800" alt="Silo Ridge Field Club website shown on a desktop, tablet and phone" loading="lazy" decoding="async">
          </a>
          <div class="proj-txt">
            <em class="proj-tag">Private club · Hudson Valley</em>
            <h3>Silo Ridge Field Club</h3>
            <p>An 850-acre private community in New York's Hudson Valley. Full-screen landscape photos carry the site, with golf, riding and lakeside living one menu away.</p>
            <a class="proj-res proj-link" href="https://siloridge.com/" target="_blank" rel="noopener">View live site <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M8 7h9v9"/></svg></a>
          </div>
        </article>
      </div>
    </div>
  </section>
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
