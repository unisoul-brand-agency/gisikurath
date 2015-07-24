<?php 
$args = array(
	'type' => 'post',
	'posts_per_page' => 1,
	'cat' => 23 ,
	 );

$v_week_r = new WP_query($args);
if ( $v_week_r->have_posts() ) : while ( $v_week_r->have_posts() ) : $v_week_r->the_post(); ?>
   		<div class="sticky-post-content-cont">
				<span class="sticky-post_intro">
					<h1 class="">REZEPT DER WOCHE</h1>
				</span><!-- post_intro -->
				<h2 class="sticky-post_head"><?php the_title();?></h2>
				<span class="read-more-recipes read-more-btn">
				<a class=" read-more-recipes-link read-more" href="<?php the_permalink(); ?>">
					LESEN  
				</a>
			</span>
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