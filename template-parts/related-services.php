<?php
/**
 * Related services: cards for the other three services, shown near the
 * end of each service page so every service links to the rest.
 *
 * Usage: get_template_part( 'template-parts/related', 'services', array( 'current' => 'seo' ) );
 *
 * @package Verdex
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$verdex_current  = isset( $args['current'] ) ? $args['current'] : '';
$verdex_services = array(
	'web-development'   => array(
		'01',
		'Web Development',
		'Custom WordPress themes, WooCommerce stores and Astro builds that are fast, editable and built to last.',
		'<polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>',
	),
	'seo'               => array(
		'02',
		'SEO',
		'Technical audits, on-page fixes and content that earns rankings, measured monthly with a report you can read.',
		'<circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/>',
	),
	'digital-marketing' => array(
		'03',
		'Digital Marketing',
		'Google and Meta campaigns with landing pages included. Ad spend stays in your account, results tracked daily.',
		'<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>',
	),
	'graphic-design'    => array(
		'04',
		'Graphic Design',
		'Logos, brand systems and every file format your printer and social manager will ever ask for, with source files included.',
		'<circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3"/><line x1="12" y1="2" x2="12" y2="9"/><line x1="12" y1="15" x2="12" y2="22"/><line x1="2" y1="12" x2="9" y2="12"/><line x1="15" y1="12" x2="22" y2="12"/>',
	),
);
unset( $verdex_services[ $verdex_current ] );
?>
  <section class="sec band">
    <div class="wrap">
      <div class="svcp-head rv">
        <span class="kicker">Related services</span>
        <h2 style="margin-top:14px">One team for the <span class="it">rest of it</span>.</h2>
        <p class="lead" style="margin-top:14px">The same people handle every service, so nothing gets lost between vendors. See <a class="ilink" href="<?php echo esc_url( verdex_page_url( 'portfolio' ) ); ?>">recent projects</a> or browse <a class="ilink" href="<?php echo esc_url( verdex_page_url( 'services' ) ); ?>">all services</a>.</p>
      </div>
      <div class="svcs-grid" style="margin-top:34px">
<?php foreach ( $verdex_services as $verdex_slug => $verdex_service ) : ?>
        <a href="<?php echo esc_url( verdex_page_url( $verdex_slug ) ); ?>" class="svc-card">
          <span class="svc-card__num"><?php echo esc_html( $verdex_service[0] ); ?></span>
          <span class="svc-card__ico">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?php echo $verdex_service[3]; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- fixed SVG markup. ?></svg>
          </span>
          <h3><?php echo esc_html( $verdex_service[1] ); ?></h3>
          <p><?php echo esc_html( $verdex_service[2] ); ?></p>
          <span class="svc-card__link"><?php echo esc_html( $verdex_service[1] ); ?> services <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg></span>
        </a>
<?php endforeach; ?>
      </div>
    </div>
  </section>
