<?php 				
	$blog_qry = array (
    	'type' => 'post',
		'posts_per_page' => 3,
    	);
		$queryObject = new WP_Query($blog_qry);
		// The Loop...
?>

<?php if ($queryObject->have_posts()) { ?>
	
		<section class="masnry-wrapper">
		<section class="main-posts-container">
		<?php
		// The Loop

		while ($queryObject->have_posts()) { $queryObject->the_post(); ?>

		<?php get_template_part('isotope-blog');?>
<?php
	}
	}// The Loop Ends
?>
	</section><!--#main-posts-container-->
	</section><!--.masnry-wrapper-->
	<?php wp_reset_postdata(); ?>