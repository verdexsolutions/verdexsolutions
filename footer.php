<?php
/**
 * Footer: closing main tag, site footer and the mobile dock.
 *
 * @package Verdex
 */

?>
</main>

<footer>
  <div class="wrap">
    <div class="foot-grid">
      <div class="foot-col foot-brand">
        <?php verdex_logo( 'mark--foot' ); ?>
        <p><?php echo esc_html( get_bloginfo( 'description' ) ? get_bloginfo( 'description' ) : __( 'Web development, SEO, digital marketing and design for businesses that need the phone to ring.', 'verdex' ) ); ?></p>
        <?php
        // Only profiles with a real URL (Appearance > Customize > Verdex contact details) are shown.
        $verdex_socials = array(
            'verdex_instagram' => array( 'Instagram', '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.2c3.2 0 3.6 0 4.9.07 3.25.15 4.77 1.69 4.92 4.92.06 1.28.07 1.67.07 4.88s0 3.6-.07 4.88c-.15 3.22-1.66 4.77-4.92 4.92-1.28.06-1.67.07-4.9.07s-3.6 0-4.88-.07c-3.26-.15-4.77-1.7-4.92-4.92C2.14 15.67 2.13 15.28 2.13 12s0-3.6.07-4.88c.15-3.23 1.66-4.77 4.92-4.92C8.4 2.14 8.8 2.2 12 2.2Zm0 3.64a6.16 6.16 0 1 0 0 12.32 6.16 6.16 0 0 0 0-12.32Zm0 10.16a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm6.4-11.85a1.44 1.44 0 1 0 0 2.88 1.44 1.44 0 0 0 0-2.88Z"/></svg>' ),
            'verdex_facebook' => array( 'Facebook', '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M13.5 21v-7.5h2.5l.4-3h-2.9V8.6c0-.9.3-1.5 1.5-1.5h1.6V4.4c-.3 0-1.2-.1-2.3-.1-2.3 0-3.9 1.4-3.9 4v2.2H8v3h2.4V21h3.1Z"/></svg>' ),
            'verdex_linkedin' => array( 'LinkedIn', '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.45 20.45h-3.56v-5.57c0-1.33-.02-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.35V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46ZM5.34 7.43a2.07 2.07 0 1 1 0-4.13 2.07 2.07 0 0 1 0 4.13Zm1.78 13.02H3.56V9h3.56ZM22.22 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.73V1.73C24 .77 23.2 0 22.22 0Z"/></svg>' ),
            'verdex_github' => array( 'GitHub', '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 .5a12 12 0 0 0-3.8 23.4c.6.1.8-.3.8-.6v-2c-3.3.7-4-1.6-4-1.6-.6-1.4-1.4-1.8-1.4-1.8-1.1-.8 0-.8 0-.8 1.2.1 1.9 1.3 1.9 1.3 1.1 1.8 2.9 1.3 3.6 1 .1-.8.4-1.3.8-1.6-2.7-.3-5.5-1.3-5.5-5.9 0-1.3.5-2.4 1.2-3.2-.1-.3-.5-1.5.1-3.2 0 0 1-.3 3.3 1.2a11.5 11.5 0 0 1 6 0C17.3 4.7 18.3 5 18.3 5c.6 1.7.2 2.9.1 3.2a4.6 4.6 0 0 1 1.2 3.2c0 4.6-2.8 5.6-5.5 5.9.4.4.8 1.1.8 2.2v3.3c0 .3.2.7.8.6A12 12 0 0 0 12 .5Z"/></svg>' ),
        );
        $verdex_social_links = '';
        foreach ( $verdex_socials as $verdex_mod => $verdex_social ) {
            $verdex_url = get_theme_mod( $verdex_mod, '' );
            if ( $verdex_url && '#' !== $verdex_url ) {
                $verdex_social_links .= sprintf( '<a href="%1$s" aria-label="%2$s" target="_blank" rel="noopener">%3$s</a>', esc_url( $verdex_url ), esc_attr( $verdex_social[0] ), $verdex_social[1] );
            }
        }
        if ( $verdex_social_links ) {
            echo '<div class="socials">' . $verdex_social_links . '</div>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped above; SVGs are fixed markup.
        }
        ?>
      </div>

      <div class="foot-col">
        <h4><?php esc_html_e( 'Services', 'verdex' ); ?></h4>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'footer_services',
                'container'      => false,
                'menu_class'     => 'foot-menu',
                'depth'          => 1,
                'fallback_cb'    => 'verdex_footer_services_fallback',
            )
        );
        ?>
      </div>

      <div class="foot-col">
        <h4><?php esc_html_e( 'Company', 'verdex' ); ?></h4>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'footer_company',
                'container'      => false,
                'menu_class'     => 'foot-menu',
                'depth'          => 1,
                'fallback_cb'    => 'verdex_footer_company_fallback',
            )
        );
        ?>
      </div>

      <div class="foot-col">
        <h4><?php esc_html_e( 'Get in touch', 'verdex' ); ?></h4>
        <ul>
          <li><?php verdex_email_link(); ?></li>
          <li><?php verdex_phone_link(); ?></li>
        </ul>
      </div>
    </div>

    <div class="foot-bottom">
      <span>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>
      <span><?php echo esc_html( wp_parse_url( home_url(), PHP_URL_HOST ) ); ?></span>
    </div>
  </div>
</footer>

<?php
$verdex_wa_text = rawurlencode( __( "Hi Verdex, I'd like a quote for my website.", 'verdex' ) );
?>
<a id="wa" class="wa-float" href="<?php echo esc_url( 'https://wa.me/' . ltrim( verdex_phone_digits(), '+' ) . '?text=' . $verdex_wa_text ); ?>" target="_blank" rel="noopener" aria-label="<?php esc_attr_e( 'Chat with us on WhatsApp', 'verdex' ); ?>">
  <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.47 14.38c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.16-.17.2-.35.22-.64.08-.3-.15-1.26-.46-2.39-1.48-.88-.79-1.48-1.76-1.65-2.06-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.03-.52-.07-.15-.67-1.61-.92-2.21-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.48s1.07 2.88 1.21 3.07c.15.2 2.1 3.2 5.08 4.49.71.31 1.26.49 1.69.63.71.23 1.36.2 1.87.12.57-.09 1.76-.72 2.01-1.41.25-.69.25-1.29.17-1.41-.07-.12-.27-.2-.57-.35m-5.42 7.4h-.01a9.87 9.87 0 0 1-5.03-1.38l-.36-.21-3.74.98 1-3.65-.24-.37a9.86 9.86 0 0 1-1.51-5.26c0-5.45 4.44-9.88 9.89-9.88 2.64 0 5.12 1.03 6.99 2.9a9.83 9.83 0 0 1 2.89 6.99c0 5.45-4.44 9.88-9.89 9.88m8.41-18.3A11.82 11.82 0 0 0 12.05 0C5.5 0 .16 5.34.16 11.89c0 2.1.55 4.14 1.59 5.95L.06 24l6.3-1.65a11.88 11.88 0 0 0 5.68 1.45h.01c6.55 0 11.89-5.34 11.89-11.89a11.82 11.82 0 0 0-3.48-8.41Z"/></svg>
</a>
<div id="dock"><a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--acc"><?php esc_html_e( 'Get my fixed quote', 'verdex' ); ?></a></div>

<?php wp_footer(); ?>
</body>
</html>
