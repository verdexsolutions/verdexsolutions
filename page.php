<?php
/**
 * Default page template, used by any page without its own template.
 *
 * @package Verdex
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
  <section class="sec band" style="padding-top:clamp(118px,14vw,166px)">
    <div class="wrap">
      <span class="kicker"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>
      <h2 style="margin-top:18px;font-size:clamp(2.4rem,5.4vw,4.1rem)"><?php the_title(); ?></h2>
    </div>
  </section>

  <section class="sec sec--alt band">
    <div class="wrap">
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
	<?php
endwhile;

get_footer();
