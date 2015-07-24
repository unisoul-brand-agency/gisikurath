<?php 
$args = array(
	'type' => 'post',
	'posts_per_page' => 1,
	'cat' => 24,

	);

$v_lastblog = new WP_query($args);
if ( $v_lastblog->have_posts() ) : while ( $v_lastblog->have_posts() ) : $v_lastblog->the_post(); ?>
				<div class="sticky-post-content-cont">
				<span class="sticky-post_intro">
					<h1 class="">VORGESTELLTEN POST</h1>
				</span><!-- post_intro -->
				<h2 class="sticky-post_head"><?php the_title();?></h2>
				<span class=""><?php the_excerpt();?></span>
				</div><!-- sticy-post-content-cont  -->
				
				<div class="sticky-post-img-cont">
				<?php if ( has_post_thumbnail() ) { ?>
          		<figure class="sticky-post-img"><?php the_post_thumbnail('full'); ?></figure>
          		</div>
				<?php } else {
				echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/noimage.jpg" />';
				}
				?>
			<?php endwhile; endif; ?>
			<?php wp_reset_postdata(); ?>
			<?php wp_reset_query(); ?>
		<div class="clear"></div>
