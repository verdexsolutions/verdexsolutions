<?php
/**
 * Single post: centred header with author and reading time, a sticky
 * contents list beside the article, then an author card and a quote CTA.
 *
 * The featured image shows as a wide cover under the header. Social shares
 * use the Open Graph image set in Rank Math instead.
 *
 * @package Verdex
 */

get_header();

while ( have_posts() ) :
	the_post();
	$verdex_cats     = get_the_category();
	$verdex_cat      = $verdex_cats ? $verdex_cats[0] : null;
	$verdex_headings = verdex_post_headings();
	$verdex_blog_url = get_permalink( get_option( 'page_for_posts' ) );
	$verdex_author   = get_the_author();
	?>
  <article <?php post_class( 'post-single' ); ?>>
    <header class="sec band post-hero">
      <div class="wrap post-hero-in">
        <nav class="post-crumbs" aria-label="<?php esc_attr_e( 'Breadcrumb', 'verdex' ); ?>">
          <a href="<?php echo esc_url( $verdex_blog_url ); ?>"><?php esc_html_e( 'Blog', 'verdex' ); ?></a>
          <?php if ( $verdex_cat ) : ?>
            <span aria-hidden="true">/</span>
            <a href="<?php echo esc_url( get_category_link( $verdex_cat ) ); ?>"><?php echo esc_html( $verdex_cat->name ); ?></a>
          <?php endif; ?>
        </nav>
        <h1 class="post-title"><?php the_title(); ?></h1>
        <?php if ( has_excerpt() ) : ?>
          <p class="post-dek"><?php echo esc_html( get_the_excerpt() ); ?></p>
        <?php endif; ?>
        <div class="post-meta">
          <span class="post-av" aria-hidden="true"><?php echo esc_html( mb_substr( $verdex_author, 0, 1 ) ); ?></span>
          <span class="post-by"><b><?php echo esc_html( $verdex_author ); ?></b></span>
          <span class="post-dot" aria-hidden="true"></span>
          <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
          <span class="post-dot" aria-hidden="true"></span>
          <span>
            <?php
            /* translators: %d: minutes */
            printf( esc_html__( '%d min read', 'verdex' ), (int) verdex_reading_time() );
            ?>
          </span>
        </div>
        <?php if ( has_post_thumbnail() ) : ?>
          <figure class="post-cover">
            <?php
            the_post_thumbnail(
                'full',
                array(
                    'sizes'         => '(max-width: 1100px) 100vw, 1100px',
                    'fetchpriority' => 'high',
                    'loading'       => 'eager',
                )
            );
            ?>
          </figure>
        <?php endif; ?>
      </div>
    </header>

    <section class="sec sec--alt band post-body">
      <div class="wrap post-grid<?php echo $verdex_headings ? '' : ' post-grid--solo'; ?>">
        <?php if ( $verdex_headings ) : ?>
          <aside class="post-toc">
            <details open>
              <summary><?php esc_html_e( 'On this page', 'verdex' ); ?></summary>
              <ol>
                <?php foreach ( $verdex_headings as $verdex_id => $verdex_text ) : ?>
                  <li><a href="#<?php echo esc_attr( $verdex_id ); ?>"><?php echo esc_html( $verdex_text ); ?></a></li>
                <?php endforeach; ?>
              </ol>
            </details>
          </aside>
        <?php endif; ?>

        <div class="post-main">
          <div class="entry">
            <?php
            the_content();
            wp_link_pages(
                array(
                    'before' => '<div class="chips">',
                    'after'  => '</div>',
                )
            );
            ?>
          </div>

          <div class="post-author">
            <span class="post-av post-av--lg" aria-hidden="true"><?php echo esc_html( mb_substr( $verdex_author, 0, 1 ) ); ?></span>
            <div>
              <b><?php echo esc_html( $verdex_author ); ?></b>
              <p>
                <?php
                $verdex_bio = get_the_author_meta( 'description' );
                echo esc_html( $verdex_bio ? $verdex_bio : __( 'The developers behind Verdex Web Solutions. We build, rank and market websites for small businesses, and hand over every login at the end.', 'verdex' ) );
                ?>
              </p>
            </div>
          </div>

          <a class="post-back" href="<?php echo esc_url( $verdex_blog_url ); ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12H5M11 6l-6 6 6 6"/></svg>
            <?php esc_html_e( 'All posts', 'verdex' ); ?>
          </a>
        </div>
      </div>
    </section>

    <section class="sec band">
      <div class="wrap">
        <div class="close rv">
          <span class="kicker"><?php esc_html_e( 'Next step', 'verdex' ); ?></span>
          <h2><?php esc_html_e( 'Want a second pair of eyes on', 'verdex' ); ?> <span class="it"><?php esc_html_e( 'your site', 'verdex' ); ?></span>?</h2>
          <p><?php esc_html_e( 'Send us the address. You get a fixed quote and a short list of what we would fix first, inside 24 hours.', 'verdex' ); ?></p>
          <a href="<?php echo esc_url( verdex_page_url( 'contact' ) ); ?>" class="btn btn--acc"><?php esc_html_e( 'Get my fixed quote', 'verdex' ); ?>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15M13 6l6 6-6 6"/></svg>
          </a>
        </div>
      </div>
    </section>
  </article>
	<?php
endwhile;

get_footer();
