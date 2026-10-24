<?php
/**
 * Structured data. Extends the JSON-LD graph Rank Math prints in the head:
 * a real Organization in place of the default Person publisher, page types
 * that match each page, Service nodes for the service pages, breadcrumbs,
 * and FAQPage nodes built from the questions already on the page.
 *
 * @package Verdex
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Service pages, keyed by page slug.
 *
 * @return array
 */
function verdex_schema_services() {
	return array(
		'web-development'   => array( 'Web Development', 'Website development' ),
		'seo'               => array( 'SEO', 'Search engine optimization' ),
		'digital-marketing' => array( 'Digital Marketing', 'Online advertising' ),
		'graphic-design'    => array( 'Graphic Design', 'Graphic design and branding' ),
	);
}

/**
 * The Organization node that every other node points to as publisher.
 *
 * @return array
 */
function verdex_schema_organization() {
	$home  = home_url( '/' );
	$logo  = has_custom_logo()
		? wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' )
		: 'https://verdexwebsolutions.com/wp-content/uploads/2026/10/Verdex-Web-Solutions-Logo-1-2.png';
	$offer = array();

	foreach ( verdex_schema_services() as $slug => $service ) {
		$offer[] = array(
			'@type'       => 'Offer',
			'itemOffered' => array(
				'@type' => 'Service',
				'name'  => $service[0],
				'url'   => verdex_page_url( $slug ),
			),
		);
	}

	$same_as = array();
	foreach ( array( 'verdex_instagram', 'verdex_linkedin', 'verdex_github' ) as $mod ) {
		$url = get_theme_mod( $mod, '#' );
		if ( $url && '#' !== $url ) {
			$same_as[] = esc_url_raw( $url );
		}
	}

	$org = array(
		'@type'           => 'Organization',
		'@id'             => $home . '#organization',
		'name'            => 'Verdex Web Solutions',
		'url'             => $home,
		'logo'            => array(
			'@type' => 'ImageObject',
			'@id'   => $home . '#logo',
			'url'   => $logo,
		),
		'image'           => array( '@id' => $home . '#logo' ),
		'description'     => 'Web development, SEO, digital marketing and graphic design from one team, with a fixed quote inside 24 hours.',
		'email'           => verdex_email(),
		'telephone'       => verdex_phone_digits(),
		'contactPoint'    => array(
			'@type'             => 'ContactPoint',
			'contactType'       => 'sales',
			'email'             => verdex_email(),
			'telephone'         => verdex_phone_digits(),
			'availableLanguage' => 'English',
		),
		'knowsAbout'      => array( 'WordPress', 'WooCommerce', 'Search engine optimization', 'Google Ads', 'Meta Ads', 'Brand identity design' ),
		'hasOfferCatalog' => array(
			'@type'           => 'OfferCatalog',
			'name'            => 'Verdex Web Solutions services',
			'itemListElement' => $offer,
		),
	);

	if ( $same_as ) {
		$org['sameAs'] = $same_as;
	}

	return $org;
}

/**
 * Question and answer pairs from the template part a page renders. Reads the
 * template source rather than rendering it, so the quote form is not output
 * twice. Handles the accordion on Home/Contact and <details> on service pages.
 *
 * @param string $part Template part suffix, e.g. 'seo'.
 * @return array
 */
function verdex_schema_faqs( $part ) {
	$file = locate_template( 'template-parts/content-' . $part . '.php' );
	if ( ! $file ) {
		return array();
	}

	$src = file_get_contents( $file ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents -- local theme file.
	$src = preg_replace( '/<\?php.*?\?>/s', '', $src ); // Drop PHP such as link URLs; the link text stays.
	$out = array();

	preg_match_all( '#<button class="q"[^>]*>(.*?)</button>\s*<div class="a"><div class="a-in">(.*?)</div></div>#s', $src, $accordion, PREG_SET_ORDER );
	preg_match_all( '#<details>\s*<summary>(.*?)</summary>(.*?)</details>#s', $src, $details, PREG_SET_ORDER );

	foreach ( array_merge( $accordion, $details ) as $m ) {
		$q = trim( html_entity_decode( wp_strip_all_tags( $m[1] ), ENT_QUOTES, 'UTF-8' ) );
		$a = trim( preg_replace( '/\s+/', ' ', html_entity_decode( wp_strip_all_tags( $m[2] ), ENT_QUOTES, 'UTF-8' ) ) );
		if ( '' === $q || '' === $a ) {
			continue;
		}
		$out[] = array(
			'@type'          => 'Question',
			'name'           => $q,
			'acceptedAnswer' => array(
				'@type' => 'Answer',
				'text'  => $a,
			),
		);
	}

	return $out;
}

/**
 * Rewrite Rank Math's graph for the site's pages.
 *
 * @param array $data JSON-LD nodes keyed by Rank Math.
 * @return array
 */
function verdex_schema_graph( $data ) {
	if ( ! is_page() && ! is_front_page() ) {
		return $data;
	}

	$home   = home_url( '/' );
	$org    = verdex_schema_organization();
	$org_id = array( '@id' => $org['@id'] );
	$post   = get_queried_object();
	$slug   = is_front_page() ? 'home' : ( $post ? $post->post_name : '' );
	$url    = is_front_page() ? $home : get_permalink( $post );
	$desc   = $post ? get_post_meta( $post->ID, 'rank_math_description', true ) : '';
	$types  = array(
		'about'     => 'AboutPage',
		'contact'   => 'ContactPage',
		'portfolio' => 'CollectionPage',
	);

	$has_breadcrumb = false;

	foreach ( $data as $key => $node ) {
		$type = isset( $node['@type'] ) ? (array) $node['@type'] : array();

		// Pages are not blog posts: drop the Article snippet and its author.
		if ( array_intersect( $type, array( 'Article', 'BlogPosting', 'NewsArticle' ) ) || array( 'Person' ) === $type ) {
			unset( $data[ $key ] );
			continue;
		}
		if ( 'publisher' === $key || in_array( 'Organization', $type, true ) ) {
			unset( $data[ $key ] );
			continue;
		}
		if ( in_array( 'BreadcrumbList', $type, true ) ) {
			$has_breadcrumb = true;
		}
		if ( in_array( 'WebSite', $type, true ) ) {
			$data[ $key ]['name']      = 'Verdex Web Solutions';
			$data[ $key ]['publisher'] = $org_id;
		}
		if ( in_array( 'WebPage', $type, true ) ) {
			if ( isset( $types[ $slug ] ) ) {
				$data[ $key ]['@type'] = $types[ $slug ];
			}
			if ( $desc ) {
				$data[ $key ]['description'] = $desc;
			}
			$data[ $key ]['about']     = $org_id;
			$data[ $key ]['publisher'] = $org_id;
			if ( ! is_front_page() ) {
				$data[ $key ]['breadcrumb'] = array( '@id' => $url . '#breadcrumb' );
			}
			unset( $data[ $key ]['author'] );
		}
	}

	$data['publisher'] = $org;

	$services = verdex_schema_services();
	if ( isset( $services[ $slug ] ) ) {
		$data['verdexService'] = array(
			'@type'            => 'Service',
			'@id'              => $url . '#service',
			'name'             => $services[ $slug ][0],
			'serviceType'      => $services[ $slug ][1],
			'description'      => $desc,
			'url'              => $url,
			'provider'         => $org_id,
			'mainEntityOfPage' => array( '@id' => $url . '#webpage' ),
		);
	}

	if ( ! is_front_page() && ! $has_breadcrumb ) {
		$crumbs = array( array( 'Home', $home ) );
		if ( isset( $services[ $slug ] ) ) {
			$crumbs[] = array( 'Services', verdex_page_url( 'services' ) );
		}
		$crumbs[] = array( get_the_title( $post ), $url );

		$items = array();
		foreach ( $crumbs as $i => $crumb ) {
			$items[] = array(
				'@type'    => 'ListItem',
				'position' => $i + 1,
				'name'     => $crumb[0],
				'item'     => $crumb[1],
			);
		}
		$data['verdexBreadcrumb'] = array(
			'@type'           => 'BreadcrumbList',
			'@id'             => $url . '#breadcrumb',
			'itemListElement' => $items,
		);
	}

	// FAQs go on the WebPage node itself: a separate FAQPage node (a WebPage
	// subtype) makes Rank Math drop its own WebPage node.
	$faqs = verdex_schema_faqs( $slug );
	if ( $faqs ) {
		foreach ( $data as $key => $node ) {
			$type = isset( $node['@type'] ) ? (array) $node['@type'] : array();
			if ( array_intersect( $type, array( 'WebPage', 'AboutPage', 'ContactPage', 'CollectionPage' ) ) ) {
				$data[ $key ]['@type']      = array_values( array_unique( array_merge( $type, array( 'FAQPage' ) ) ) );
				$data[ $key ]['mainEntity'] = $faqs;
				break;
			}
		}
	}

	return $data;
}
add_filter( 'rank_math/json_ld', 'verdex_schema_graph', 99 );
