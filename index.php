<?php
/**
 * Fallback template: blog index and any archive.
 *
 * @package Verdex
 */

get_header();
?>

<section class="sec band" style="padding-top:clamp(118px,14vw,166px)">
  <div class="wrap">
    <span class="kicker"><?php echo esc_html( is_home() ? __( 'Journal', 'verdex' ) : __( 'Archive', 'verdex' ) ); ?></span>
    <h2 style="margin-top:18px;font-size:clamp(2.2rem,5vw,3.6rem)">
      <?php
      if ( is_home() ) {
          esc_html_e( 'Notes from the build', 'verdex' );
      } else {
          the_archive_title();
      }
      ?>
    </h2>
  </div>
</section>

<section class="sec sec--alt band">
  <div class="wrap">
    <?php if ( have_posts() ) : ?>
      <div class="work">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
          <article <?php post_class( 'proj' ); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" class="shot" style="padding:0">
                <?php the_post_thumbnail( 'large', array( 'style' => 'width:100%;height:100%;object-fit:cover' ) ); ?>
              </a>
            <?php else : ?>
              <div class="shot"><b><?php echo esc_html( substr( get_the_title(), 0, 2 ) ); ?></b><em><?php echo esc_html( get_the_date() ); ?></em></div>
            <?php endif; ?>
            <div class="proj-txt">
              <h3><a href="<?php the_permalink(); ?>" style="text-decoration:none;color:inherit"><?php the_title(); ?></a></h3>
              <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 26 ) ); ?></p>
              <div class="proj-res"><?php echo esc_html( get_the_date() ); ?></div>
            </div>
          </article>
            <?php
        endwhile;
        ?>
      </div>

      <div class="revs-ctrl">
        <?php
        the_posts_pagination(
            array(
                'mid_size'  => 1,
                'prev_text' => __( 'Previous', 'verdex' ),
                'next_text' => __( 'Next', 'verdex' ),
            )
        );
        ?>
      </div>
    <?php else : ?>
      <p class="lead"><?php esc_html_e( 'Nothing published here yet.', 'verdex' ); ?></p>
    <?php endif; ?>
  </div>
</section>

<?php
get_footer();
