<?php
/**
 * Fallback template: blog index and any archive.
 *
 * @package Verdex
 */

get_header();
?>

<section class="sec band hero--photo" style="padding-top:clamp(118px,14vw,166px)">
  <div class="hero-bg" aria-hidden="true">
    <img src="<?php echo esc_url( verdex_image_url( 'blog-hero.webp' ) ); ?>"
      srcset="<?php echo esc_url( verdex_image_url( 'blog-hero-900.webp' ) ); ?> 900w, <?php echo esc_url( verdex_image_url( 'blog-hero.webp' ) ); ?> 1536w"
      sizes="100vw" width="1536" height="1024" alt="" fetchpriority="high" decoding="async">
  </div>
  <div class="wrap">
    <span class="kicker"><?php echo esc_html( is_home() ? __( 'Blog', 'verdex' ) : __( 'Archive', 'verdex' ) ); ?></span>
    <h2 style="margin-top:18px;font-size:clamp(2.2rem,5vw,3.6rem)">
      <?php
      if ( is_home() ) {
          printf( '%1$s <span class="it">%2$s</span>.', esc_html__( 'Notes from', 'verdex' ), esc_html__( 'the build', 'verdex' ) );
      } else {
          the_archive_title();
      }
      ?>
    </h2>
    <?php if ( is_home() ) : ?>
      <p class="lead" style="margin-top:20px;max-width:60ch"><?php esc_html_e( 'Practical write-ups on web development, SEO, digital marketing and design: what we fixed, what worked, and what it cost.', 'verdex' ); ?></p>
    <?php endif; ?>
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
      <p class="lead"><?php esc_html_e( 'The first posts are on their way.', 'verdex' ); ?></p>
      <p class="lead" style="margin-top:12px">
        <?php
        printf(
            /* translators: 1: services link, 2: portfolio link */
            esc_html__( 'In the meantime, see %1$s or %2$s.', 'verdex' ),
            '<a class="ilink" href="' . esc_url( verdex_page_url( 'services' ) ) . '">' . esc_html__( 'what we do', 'verdex' ) . '</a>',
            '<a class="ilink" href="' . esc_url( verdex_page_url( 'portfolio' ) ) . '">' . esc_html__( 'recent projects', 'verdex' ) . '</a>'
        );
        ?>
      </p>
    <?php endif; ?>
  </div>
</section>

<?php
get_footer();
