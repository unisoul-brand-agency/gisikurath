<?php
/**
* A Simple Category Template
*/
get_header(); ?>
	<div id="primary" class="content-area content-wrap">
	<main id="main" class="site-main content" role="main">
		<!--FIXED HEADER TOP-->
		<?php get_template_part('site-wide-header'); ?>
		<!--FIXED HEADER TOP-->
		<?php if ( have_posts() ) : ?>
		<section class="masnry-wrapper">
		<section class="main-posts-container">
		<?php
		// The Loop
		while ( have_posts() ) : the_post();
		?>
		<?php get_template_part('isotope-blog');?>
		<?php endwhile; // End Loop
		else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
		</div>
		</section>
		<div id="next-page" class="g_12 clearfix pagination">
		<?php next_posts_link('Load More', 6); ?>
		<?php wp_reset_postdata(); ?>
		</div>
	</section>
</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>

