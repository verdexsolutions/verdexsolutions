<?php
/**
 * Single post.
 *
 * @package Verdex
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
  <article <?php post_class(); ?>>
    <section class="sec band" style="padding-top:clamp(118px,14vw,166px)">
      <div class="wrap">
        <span class="kicker"><?php echo esc_html( get_the_date() ); ?></span>
        <h2 style="margin-top:18px;font-size:clamp(2.2rem,5vw,3.6rem)"><?php the_title(); ?></h2>
      </div>
    </section>

    <section class="sec sec--alt band">
      <div class="wrap">
        <?php if ( has_post_thumbnail() ) : ?>
          <figure class="shotframe" style="aspect-ratio:16/9;margin-bottom:34px">
            <?php the_post_thumbnail( 'large' ); ?>
          </figure>
        <?php endif; ?>
        <div class="lead" style="max-width:72ch">
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
      </div>
    </section>
  </article>
	<?php
	if ( comments_open() || get_comments_number() ) {
		?>
    <section class="sec band">
      <div class="wrap" style="max-width:820px">
			<?php comments_template(); ?>
      </div>
    </section>
		<?php
	}
endwhile;

get_footer();
