<div class="post_brick animated slideInUp">
		<div id="post_cont">
		<?php
		// Must be inside a loop.
		if ( has_post_thumbnail() ) { ?>
		<a href="<?php the_permalink() ?>">
			<figure class="post_img">
				<?php the_post_thumbnail(); ?>
			</figure>
		</a>
		<?php } else {
		echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/noimage.jpg" />';
		}
		?>
		<div id="post_contents">
		<h2 class="post_head"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"> <?php the_title();?></a></h2>
		<small class="post_details">
			<ul>
				<li><i class="fa fa-heart-o"><?php echo getPostLikeLink(get_the_ID());?></i></li>
			</ul>
		</small>
		<div class="entry post_entry">
			<span class="read-more-recipes read-more-btn">
				<a class=" read-more-recipes-link read-more" href="<?php the_permalink(); ?>">
					zum Rezept 
				</a>
			</span>
		</div><!--ENTRY-->
		</div>
		</div><!--POST_CONT-->
</div><!--post_brick-->