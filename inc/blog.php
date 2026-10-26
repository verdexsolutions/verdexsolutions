<?php
/**
 * Blog helpers: reading time, heading anchors for the contents list, and
 * comments switched off site-wide.
 *
 * @package Verdex
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Minutes to read the current post, at about 220 words a minute.
 *
 * @return int
 */
function verdex_reading_time() {
	$words = str_word_count( wp_strip_all_tags( get_post_field( 'post_content', get_the_ID() ) ) );
	return max( 1, (int) round( $words / 220 ) );
}

/**
 * H2 headings in the current post, as id => text. The ids match the ones
 * verdex_heading_anchors() adds to the rendered content.
 *
 * @return array
 */
function verdex_post_headings() {
	$out  = array();
	$html = get_post_field( 'post_content', get_the_ID() );

	if ( preg_match_all( '#<h2[^>]*>(.*?)</h2>#is', $html, $m ) ) {
		foreach ( $m[1] as $text ) {
			$text                              = trim( wp_strip_all_tags( $text ) );
			$out[ verdex_heading_id( $text ) ] = html_entity_decode( $text, ENT_QUOTES, 'UTF-8' );
		}
	}

	return $out;
}

/**
 * Anchor id for a heading.
 *
 * @param string $text Heading text.
 * @return string
 */
function verdex_heading_id( $text ) {
	return 'h-' . sanitize_title( html_entity_decode( $text, ENT_QUOTES, 'UTF-8' ) );
}

/**
 * Give every H2 in a single post an id so the contents list can link to it.
 *
 * @param string $content Post content.
 * @return string
 */
function verdex_heading_anchors( $content ) {
	if ( ! is_singular( 'post' ) || ! in_the_loop() ) {
		return $content;
	}

	return preg_replace_callback(
		'#<h2([^>]*)>(.*?)</h2>#is',
		function ( $m ) {
			if ( false !== stripos( $m[1], ' id=' ) ) {
				return $m[0];
			}
			$id = verdex_heading_id( trim( wp_strip_all_tags( $m[2] ) ) );
			return '<h2' . $m[1] . ' id="' . esc_attr( $id ) . '">' . $m[2] . '</h2>';
		},
		$content
	);
}
add_filter( 'the_content', 'verdex_heading_anchors', 12 );

/*
 * Comments off everywhere: closed on every post type, hidden from the admin
 * menu and toolbar, and existing comments kept out of the front end.
 */
add_filter( 'comments_open', '__return_false', 20 );
add_filter( 'pings_open', '__return_false', 20 );
add_filter( 'comments_array', '__return_empty_array', 10 );

/**
 * Remove comment support from every post type.
 */
function verdex_disable_comment_support() {
	foreach ( get_post_types() as $type ) {
		if ( post_type_supports( $type, 'comments' ) ) {
			remove_post_type_support( $type, 'comments' );
			remove_post_type_support( $type, 'trackbacks' );
		}
	}
}
add_action( 'init', 'verdex_disable_comment_support', 100 );

/**
 * Hide the Comments screen and the toolbar bubble.
 */
function verdex_hide_comments_admin() {
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'verdex_hide_comments_admin' );

/**
 * Remove the comments node from the admin toolbar.
 *
 * @param WP_Admin_Bar $bar Toolbar.
 */
function verdex_hide_comments_toolbar( $bar ) {
	$bar->remove_node( 'comments' );
}
add_action( 'admin_bar_menu', 'verdex_hide_comments_toolbar', 999 );

/**
 * On single posts only the cover image sits near the top of the page, so
 * every image inside the article can lazy-load.
 *
 * @param int $threshold Images to leave eager.
 * @return int
 */
function verdex_lazy_threshold( $threshold ) {
	return is_singular( 'post' ) ? 1 : $threshold;
}
add_filter( 'wp_omit_loading_attr_threshold', 'verdex_lazy_threshold' );
