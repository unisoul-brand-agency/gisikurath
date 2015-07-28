<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package gisikurath
 */

get_header(); ?>

	<div id="primary" class="content-area content-wrap">
		<main id="main" class="site-main content" role="main">
		<!--FIXED HEADER TOP-->
		<?php get_template_part('site-wide-header'); ?>
		<!--FIXED HEADER TOP-->
			<section id="main-posts-container">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) { ?>
          		<figure class="page-post"> <?php the_post_thumbnail('full'); ?></figure>
				<?php } else { ?>

				<figure class="page-post-no-img"></figure>

				<?php } 
				?>
				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>
			</section>
		</main><!-- #main -->

		<? get_template_part('site-options');?>
		
		<div class="clear"></div>
	</div><!-- #primary -->

<?php get_footer(); ?>
