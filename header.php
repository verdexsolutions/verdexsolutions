<?php
/**
 * Header: document head, nav and the opening main tag.
 *
 * @package Verdex
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="color-scheme" content="dark">
<meta name="theme-color" content="#080A09">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="grain" aria-hidden="true"></div>

<a class="screen-reader-text" href="#top"><?php esc_html_e( 'Skip to content', 'verdex' ); ?></a>

<nav id="nav">
  <div class="wrap">
    <div class="nav-in">
      <?php verdex_logo(); ?>

      <?php
      wp_nav_menu(
          array(
              'theme_location' => 'primary',
              'container'      => 'div',
              'container_class'=> 'nav-links',
              'menu_class'     => 'nav-menu',
              'depth'          => 2,
              'fallback_cb'    => 'verdex_primary_fallback',
          )
      );
      ?>

      <div class="nav-right">
        <a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--acc nav-cta"><?php esc_html_e( 'Get a quote', 'verdex' ); ?></a>
        <button class="icobtn burger" id="burger" aria-label="<?php esc_attr_e( 'Open menu', 'verdex' ); ?>" aria-expanded="false" aria-controls="drawer">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
        </button>
      </div>
    </div>
  </div>
  <div id="prog"></div>
  <div id="drawer">
    <div class="wrap drawer-in">
      <?php
      wp_nav_menu(
          array(
              'theme_location' => 'primary',
              'container'      => false,
              'menu_class'     => 'drawer-menu',
              'depth'          => 1,
              'fallback_cb'    => 'verdex_drawer_fallback',
          )
      );
      ?>
      <a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--acc btn--block"><?php esc_html_e( 'Get a quote', 'verdex' ); ?></a>
    </div>
  </div>
</nav>

<main id="top">
