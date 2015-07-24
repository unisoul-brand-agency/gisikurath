<?php
/*
Template Name: custom-template-recipes
*/
get_header(); ?>
		<div id="primary" class="content-area content-wrap">
		<main id="main" class="site-main content" role="main">
		<!--FIXED HEADER TOP-->
		<?php get_template_part('site-wide-header'); ?>
		<!--FIXED HEADER TOP-->
		<!--RECIPES OF THE WEEK-->
		<span class="sticky-recipes">
		<?php get_template_part("sticky-post-recipes" );?>
		</span>
		<!--RECIPES OF THE WEEK-->
		<section id="main-header-container">
		<div class="recipes-search-form">
		<?php get_template_part("rezepte-search-opt" );?>	
		</section>
		<div class="cat-count-cont">
		</div>
		<?php 
		// main post qeury 
		$rezepte_posts = array (
		'post_type' => 'rezepte',
		'posts_per_page' => 6,
		'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),
		);
		$queryObject = new WP_Query($rezepte_posts);
		// Check if there are any posts to display
		if ($queryObject->have_posts()) { ?>
		<section class="masnry-wrapper">
		<section class="main-posts-container">
		<?php
		// The Loop
		while ($queryObject->have_posts()) { $queryObject->the_post(); ?>
		<!-- Isotope Contianer -->
		<?php get_template_part('isotope-rezepte')?>
		<?php } ?>	
		<?php } ?>
		<?php wp_reset_postdata(); ?>
		</div>
		</section>
		<div id="next-page" class="g_12 clearfix pagination">
		<?php next_posts_link('Load More', 6); ?>
		<?php wp_reset_postdata(); ?>
		</div>
		</section>
</main><!-- #main -->
<div class="clear"></div>
</div><!-- #primary -->

<?php get_footer(); ?>
</div><!--ANIMATE-->
