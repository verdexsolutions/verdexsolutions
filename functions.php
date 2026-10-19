<?php
/**
 * Verdex theme functions.
 *
 * @package Verdex
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'VERDEX_VERSION', '1.0.1' );

/**
 * Theme supports and menu locations.
 */
function verdex_setup() {
	load_theme_textdomain( 'verdex', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' )
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 64,
			'width'       => 64,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary'         => __( 'Primary menu', 'verdex' ),
			'footer_services' => __( 'Footer: services', 'verdex' ),
			'footer_company'  => __( 'Footer: company', 'verdex' ),
		)
	);
}
add_action( 'after_setup_theme', 'verdex_setup' );

/**
 * Styles, fonts and scripts.
 */
function verdex_assets() {
	wp_enqueue_style(
		'verdex-fonts',
		'https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,500;0,9..144,700;1,9..144,500&family=Hanken+Grotesk:wght@400;500;600;700;800&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'verdex-style',
		get_stylesheet_uri(),
		array( 'verdex-fonts' ),
		file_exists( get_stylesheet_directory() . '/style.css' ) ? filemtime( get_stylesheet_directory() . '/style.css' ) : VERDEX_VERSION
	);

	wp_enqueue_script(
		'verdex-script',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		file_exists( get_template_directory() . '/assets/js/theme.js' ) ? filemtime( get_template_directory() . '/assets/js/theme.js' ) : VERDEX_VERSION,
		true
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'verdex_assets' );

/**
 * Preconnect to the font hosts.
 *
 * @param array  $urls          URLs to print.
 * @param string $relation_type Relation type.
 * @return array
 */
function verdex_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array( 'href' => 'https://fonts.googleapis.com' );
		$urls[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => '',
		);
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'verdex_resource_hints', 10, 2 );

/**
 * Permalink for a page slug, with a safe fallback before pages exist.
 *
 * @param string $slug Page slug, or 'home'.
 * @return string
 */
function verdex_page_url( $slug ) {
	if ( 'home' === $slug ) {
		return home_url( '/' );
	}

	$page = get_page_by_path( $slug );

	if ( $page instanceof WP_Post ) {
		return get_permalink( $page );
	}

	return home_url( '/' . trim( $slug, '/' ) . '/' );
}

/**
 * Image from the theme's own asset folder, with a filter so a child theme
 * or a custom field can swap it for an uploaded image later.
 *
 * @param string $file File name inside assets/images.
 * @return string
 */
function verdex_image_url( $file ) {
	return apply_filters( 'verdex_image_url', get_template_directory_uri() . '/assets/images/' . ltrim( $file, '/' ), $file );
}

/**
 * Fallback primary menu, used until a menu is assigned in Appearance > Menus.
 * Matches the markup wp_nav_menu() produces for the header, so the CSS and the
 * mobile rules apply either way.
 */
function verdex_primary_fallback() {
	echo '<div class="nav-links">';
	verdex_menu_items( 'nav-menu' );
	echo '</div>';
}

/**
 * Fallback menu for the mobile drawer: the list on its own, no container.
 */
function verdex_drawer_fallback() {
	verdex_menu_items( 'drawer-menu' );
}

/**
 * Shared list of fallback links.
 *
 * @param string $class List class.
 */
function verdex_menu_items( $class ) {
	$items = array(
		'services'  => __( 'Services', 'verdex' ),
		'portfolio' => __( 'Portfolio', 'verdex' ),
		'about'     => __( 'About', 'verdex' ),
	);

	printf( '<ul class="%s">', esc_attr( $class ) );
	foreach ( $items as $slug => $label ) {
		printf(
			'<li class="menu-item"><a href="%1$s">%2$s</a></li>',
			esc_url( verdex_page_url( $slug ) ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}

/**
 * Body classes.
 *
 * @param array $classes Body classes.
 * @return array
 */
function verdex_body_classes( $classes ) {
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	return $classes;
}
add_filter( 'body_class', 'verdex_body_classes' );

/**
 * Excerpt tail.
 *
 * @return string
 */
function verdex_excerpt_more() {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'verdex_excerpt_more' );

/**
 * Fallback footer menus, used until menus are assigned.
 */
function verdex_footer_services_fallback() {
	$items = array(
		'web-development'   => __( 'Website development', 'verdex' ),
		'seo'               => __( 'SEO', 'verdex' ),
		'digital-marketing' => __( 'Digital marketing', 'verdex' ),
		'graphic-design'    => __( 'Graphic design', 'verdex' ),
	);

	echo '<ul class="foot-menu">';
	foreach ( $items as $anchor => $label ) {
		printf(
			'<li><a href="%1$s">%2$s</a></li>',
			esc_url( verdex_page_url( 'services' ) . '#' . $anchor ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}

/**
 * Fallback company menu.
 */
function verdex_footer_company_fallback() {
	$items = array(
		'portfolio' => __( 'Portfolio', 'verdex' ),
		'about'     => __( 'About', 'verdex' ),
		'contact'   => __( 'Contact', 'verdex' ),
	);

	echo '<ul class="foot-menu">';
	foreach ( $items as $slug => $label ) {
		printf(
			'<li><a href="%1$s">%2$s</a></li>',
			esc_url( verdex_page_url( $slug ) ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}

/**
 * Customizer fields for the details that appear in the footer and contact page.
 *
 * @param WP_Customize_Manager $wp_customize Customizer instance.
 */
function verdex_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'verdex_contact',
		array(
			'title'    => __( 'Verdex contact details', 'verdex' ),
			'priority' => 40,
		)
	);

	$fields = array(
		'verdex_email'     => array( __( 'Email address', 'verdex' ), 'hello@verdexwebsolutions.com', 'sanitize_email' ),
		'verdex_phone'     => array( __( 'Phone / WhatsApp', 'verdex' ), '+92 349 510 4793', 'sanitize_text_field' ),
		'verdex_instagram' => array( __( 'Instagram URL', 'verdex' ), '#', 'esc_url_raw' ),
		'verdex_linkedin'  => array( __( 'LinkedIn URL', 'verdex' ), '#', 'esc_url_raw' ),
		'verdex_github'    => array( __( 'GitHub URL', 'verdex' ), '#', 'esc_url_raw' ),
	);

	foreach ( $fields as $id => $field ) {
		$wp_customize->add_setting(
			$id,
			array(
				'default'           => $field[1],
				'sanitize_callback' => $field[2],
				'transport'         => 'refresh',
			)
		);
		$wp_customize->add_control(
			$id,
			array(
				'label'   => $field[0],
				'section' => 'verdex_contact',
				'type'    => 'text',
			)
		);
	}
}
add_action( 'customize_register', 'verdex_customize_register' );
