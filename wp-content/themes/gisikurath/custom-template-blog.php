<?php
/*
Template Name: custom-template-blog
*/

get_header(); ?>
	<div id="primary" class="content-area content-wrap">
		<main id="main" class="site-main content" role="main">
		<!--FIXED HEADER TOP-->
		<?php get_template_part('site-wide-header'); ?>
		<!--FIXED HEADER TOP-->
		<span class="sticky-recipes">
		<?php get_template_part("sticky-post-blog" );?>
		</span>

		<section id="main-header-container">
				<?php 				
				// BETTER
				$args = array (
    				'type' => 'post',
					'posts_per_page' => 6,
					'category__in' => array(1, 3, 4, 17),
					'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
					'category__not_in' => array( 23 ), 
    				);
				$blogposts = new WP_Query($args);
				// The Loop...
				?>
		<?php
		// Check if there are any posts to display
		 if ($blogposts->have_posts()) { ?>

		<div class="recipes-search-form">
			<section class="type-recipes-search">
				<h3>Suchen Nach</h3>
			</section>
			<?php get_template_part("sbc");?>


    			<div class="content filters">
          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
          		</a>
          		<a class="brand menu-item-object-category" href="/gisikurath/blog/">ALL</a>
          		<?php
          			$primary_nav = wp_nav_menu(array(
              			'container' => 'div',
              			'container_class' => 'nav-collapse collapse',
              			'theme_location' => 'secondary',
              			'echo' => true,
              			'menu' => 'secondary',
              			'menu_class' => 'nav-blog'
                ));
         	 	?>
        		</div>
				</div>
		<div class="cat-count-cont">
		<?php // Counting the amount of post that is currently in the loop
		$count = $GLOBALS['blogposts']->found_posts;
		echo  '<span class="cat-count">'.'<hr class="count-hr-start">'. '<span class="cat-count-num">' . $count .'</span>'. '' . 'KÖSTLICHE REZEPTE</span>'.'<hr class="count-hr-end">';
		?>
					
		</div>
		</section>

		<section class="masnry-wrapper">
		<section class="main-posts-container">
		<?php
		// The Loop
		while ($blogposts->have_posts()) { $blogposts->the_post(); ?>
		<?php get_template_part('isotope-blog');?>
		<?php } ?>	
		<?php } ?>		
		</div>
		<div class="recipes-footer-box zigzag">
		<section class="footer-recipes">
		<div id="next-page" class="g_12 clearfix pagination">
		<?php next_posts_link('Load More', 6); ?>
		<?php wp_reset_postdata(); ?>
		</div>
		</section>
		</div>
		<?php get_template_part('footer-icon');?>
	</section>
</main><!-- #main -->

<div class="clear"></div>
</div><!-- #primary -->
<?php get_footer(); ?>

