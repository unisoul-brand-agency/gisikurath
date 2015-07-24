<?php
/**
 * The template for displaying all single posts.
 *
 * @package gisikurath
 */
get_header(); ?>
  <div id="primary" class="content-area content-wrap">
    <main id="main" class="site-main content" role="main">
    <!--FIXED HEADER TOP-->
    <?php get_template_part('site-wide-header'); ?>
    <progress value="0"></progress>
    <!--FIXED HEADER TOP-->
    <?php while ( have_posts() ) : the_post(); ?>
      <?php if ( has_post_thumbnail() ) { ?>
              <figure class="single_post_img"> <?php the_post_thumbnail('full'); ?></figure>
        <?php } else {
        echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/noimage.jpg" />';
        } 
        ?>
        <section  class="single_post_container">
          <?php get_template_part( 'content', 'single' ); ?>

        </section><!-- #primary -->

        <section class="single_post_navigation_bottom">
          <!--<?php the_post_navigation()?>-->
        </section><!-- #primary -->

        <div id="comment-wrapper">
            <section class="single_post_comment_box">
            <span class="comment-single-title">
              KOMMENTARE
            </span><!-- .comment-single-title -->
            <span class="comment-single-subtitle">Viele Köche müssen nicht immer den Brei verderben …</span>
            <section class="single_post_comments">
            <?php
            // If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || get_comments_number() ) :
            comments_template();
            endif;
            ?>  
          </section><!-- .single_post_comments -->
          </section><!-- .single_post_comment_box -->
        </div><!-- #comment-wrapper -->
        <?php endwhile; // end of the loop. ?>
    </main><!-- #main -->
  <div class="clear"></div>
  </div><!-- #primary -->

<?php get_footer(); ?>
