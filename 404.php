<?php
/**
 * 404.
 *
 * @package Verdex
 */

get_header();
?>

<section class="sec band" style="padding-top:clamp(118px,14vw,166px)">
  <div class="wrap">
    <span class="kicker">404</span>
    <h2 style="margin-top:18px;font-size:clamp(2.4rem,5.4vw,4.1rem)"><?php esc_html_e( 'That page has moved on.', 'verdex' ); ?></h2>
    <p class="lead" style="margin-top:20px"><?php esc_html_e( 'The link is dead or the page was renamed. Here is the way back.', 'verdex' ); ?></p>
    <div class="hero-cta" style="margin-top:28px">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--acc"><?php esc_html_e( 'Back to home', 'verdex' ); ?></a>
      <a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--ghost"><?php esc_html_e( 'Get a quote', 'verdex' ); ?></a>
    </div>
  </div>
</section>

<?php
get_footer();
