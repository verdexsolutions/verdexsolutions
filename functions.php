<?php
/**
 * Verdex theme functions.
 *
 * @package Verdex
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'VERDEX_VERSION', '1.0.2' );

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
 * Site logo link for the header and footer. Uses the logo set in
 * Appearance > Customize > Site Identity when there is one, otherwise the
 * uploaded Verdex logo.
 *
 * @param string $class Extra class for the link.
 */
function verdex_logo( $class = '' ) {
	$src = has_custom_logo()
		? wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' )
		: 'https://verdexwebsolutions.com/wp-content/uploads/2026/10/Verdex-Web-Solutions-Logo-1-2.png';

	printf(
		'<a href="%1$s" class="mark %2$s" aria-label="%3$s"><img src="%4$s" alt="%3$s" width="1600" height="533" class="mark-img"></a>',
		esc_url( home_url( '/' ) ),
		esc_attr( $class ),
		esc_attr( get_bloginfo( 'name' ) ),
		esc_url( $src )
	);
}

/**
 * Contact email from the Customizer.
 *
 * @return string
 */
function verdex_email() {
	return get_theme_mod( 'verdex_email', 'hello@verdexwebsolutions.com' );
}

/**
 * Contact phone from the Customizer, as displayed.
 *
 * @return string
 */
function verdex_phone() {
	return get_theme_mod( 'verdex_phone', '+92 349 510 4793' );
}

/**
 * Phone number reduced to digits with a leading +, for tel: and WhatsApp links.
 *
 * @return string
 */
function verdex_phone_digits() {
	$phone = verdex_phone();
	return ( 0 === strpos( trim( $phone ), '+' ) ? '+' : '' ) . preg_replace( '/\D+/', '', $phone );
}

/**
 * Clickable email link.
 */
function verdex_email_link() {
	printf( '<a href="mailto:%1$s">%2$s</a>', esc_attr( verdex_email() ), esc_html( verdex_email() ) );
}

/**
 * Clickable phone link. Pass 'whatsapp' to open a WhatsApp chat instead of a call.
 *
 * @param string $type 'tel' or 'whatsapp'.
 */
function verdex_phone_link( $type = 'tel' ) {
	$href = 'whatsapp' === $type
		? 'https://wa.me/' . ltrim( verdex_phone_digits(), '+' )
		: 'tel:' . verdex_phone_digits();
	$attrs = 'whatsapp' === $type ? ' target="_blank" rel="noopener"' : '';

	printf( '<a href="%1$s"%2$s>%3$s</a>', esc_url( $href, array( 'tel', 'https' ) ), $attrs, esc_html( verdex_phone() ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- $attrs is a fixed string.
}

/**
 * Three-step quote form, rendered by Contact Form 7.
 *
 * The form lives in CF7 under the title "Verdex quote form"; its template is
 * kept in cf7/quote-form.txt. Auto-paragraphs are switched off while it renders
 * so CF7 does not wrap the step markup in <p> and <br> tags.
 */
function verdex_quote_form() {
	$html = '';
	if ( shortcode_exists( 'contact-form-7' ) ) {
		add_filter( 'wpcf7_autop_or_not', '__return_false' );
		$html = do_shortcode( '[contact-form-7 title="Verdex quote form" html_class="qform-cf7"]' );
		remove_filter( 'wpcf7_autop_or_not', '__return_false' );
	}

	if ( false === strpos( $html, 'wpcf7-form' ) ) {
		echo '<div class="card qform"><div class="stepbox"><h3>' . esc_html__( 'Send us your brief', 'verdex' ) . '</h3><p class="fnote">';
		esc_html_e( 'Email what you need and when you would like it live, and a fixed quote comes back inside 24 hours:', 'verdex' );
		echo ' ';
		verdex_email_link();
		echo '</p></div></div>';
		return;
	}

	echo $html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- rendered by Contact Form 7.
}

/**
 * Turn the site's email and phone into links wherever they appear as plain
 * text in page and post content written in the editor.
 *
 * @param string $content Post content.
 * @return string
 */
function verdex_link_contacts( $content ) {
	$parts = preg_split( '/(<a\b[^>]*>.*?<\/a>|<[^>]+>)/is', $content, -1, PREG_SPLIT_DELIM_CAPTURE );
	$email = verdex_email();
	$phone = verdex_phone();

	foreach ( $parts as $i => $part ) {
		if ( '' === $part || '<' === $part[0] ) {
			continue;
		}
		if ( $email && false !== stripos( $part, $email ) ) {
			$part = str_ireplace( $email, '<a href="mailto:' . esc_attr( $email ) . '">' . esc_html( $email ) . '</a>', $part );
		}
		if ( $phone && false !== strpos( $part, $phone ) ) {
			$part = str_replace( $phone, '<a href="' . esc_url( 'tel:' . verdex_phone_digits(), array( 'tel' ) ) . '">' . esc_html( $phone ) . '</a>', $part );
		}
		$parts[ $i ] = $part;
	}

	return implode( '', $parts );
}
add_filter( 'the_content', 'verdex_link_contacts', 20 );
add_filter( 'widget_text_content', 'verdex_link_contacts', 20 );

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
		'home'      => __( 'Home', 'verdex' ),
		'services'  => __( 'Services', 'verdex' ),
		'portfolio' => __( 'Portfolio', 'verdex' ),
		'about'     => __( 'About', 'verdex' ),
		'blog'      => __( 'Blog', 'verdex' ),
	);

	$service_subs = array(
		'web-development'   => __( 'Web Development', 'verdex' ),
		'seo'               => __( 'SEO', 'verdex' ),
		'digital-marketing' => __( 'Digital Marketing', 'verdex' ),
		'graphic-design'    => __( 'Graphic Design', 'verdex' ),
	);

	printf( '<ul class="%s">', esc_attr( $class ) );
	foreach ( $items as $slug => $label ) {
		if ( 'services' === $slug ) {
			printf(
				'<li class="menu-item menu-item-has-children"><a href="%1$s">%2$s</a><ul class="sub-menu">',
				esc_url( verdex_page_url( $slug ) ),
				esc_html( $label )
			);
			foreach ( $service_subs as $sub_slug => $sub_label ) {
				printf(
					'<li class="menu-item"><a href="%1$s">%2$s</a></li>',
					esc_url( verdex_page_url( $sub_slug ) ),
					esc_html( $sub_label )
				);
			}
			echo '</ul></li>';
		} else {
			printf(
				'<li class="menu-item"><a href="%1$s">%2$s</a></li>',
				esc_url( verdex_page_url( $slug ) ),
				esc_html( $label )
			);
		}
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
		'blog'      => __( 'Blog', 'verdex' ),
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
		'verdex_facebook'  => array( __( 'Facebook URL', 'verdex' ), '#', 'esc_url_raw' ),
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

require_once get_template_directory() . '/inc/schema.php';
