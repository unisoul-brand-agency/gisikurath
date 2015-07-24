<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package gisikurath
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div id="scroll-down-single" class="single-entry-content wow slideInUp">
		<section class="build-fc">
		<header class="brick_fc entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
			<div class="brick_fc">
				<?php the_content(); ?>
			</div>
		</section>
	    <?php
	      if( have_rows('flexible_content') ):

 				while ( have_rows('flexible_content') ) : the_row();

	              if ( get_row_layout() == 'fc_full_col_head' ): ?>

	              <section class="build-fc wow slideInUp">
	                <h2 class="brick_fc"><?php the_sub_field('fc_full_col_txt'); ?></h2>
	              </section><!-- headings -->

	            <?php elseif (get_row_layout() == 'fc_full_col_txt' ): ?>

	              <section class="build-fc wow slideInUp">
	                <div class="brick_fc">
	                	<?php the_sub_field('fc_full_col_txt_2'); ?>
	                </div>
	              </section><!-- full col text -->
	             
	              
	            <?php elseif (get_row_layout() == 'fc_2_col_img' ): ?>

	            <section class="build-hc wow slideInUp">
	                <section class="brick_hc">
					<figure>
					<?php if( get_sub_field('fc_img_col_left') ): ?>
					<img src="<?php the_sub_field('fc_img_col_left'); ?>" />
					<?php endif; ?>
                    </figure>
	                </section><!-- post_block -->

	              	<section class="brick_hc">
					<figure>
					<?php if( get_sub_field('fc_img_col_right') ): ?>
					<img src="<?php the_sub_field('fc_img_col_right'); ?>" />
					<?php endif; ?>
                    </figure>
	            </section><!-- post_block -->
	            </section><!-- single-posts-container -->

	            <?php elseif (get_row_layout() == 'fc_2_col_mix_1' ): ?>

	            <section class="build-hc wow slideInUp">
	                <section class="brick_hc">
	                	<div>
	                		<?php the_sub_field('fc_txt_col_left'); ?>
	                	</div>
	                </section><!-- post_block -->
	              	<section class="brick_hc">
					<figure>
					<?php if( get_sub_field('fc_img_col_right') ): ?>
					<img src="<?php the_sub_field('fc_img_col_right'); ?>" />
					<?php endif; ?>
                    </figure>
	                </section><!-- mix-brick -->
	               	
	            </section><!-- two-col-mix -->

	          	<?php elseif (get_row_layout() == 'fc_2_col_mix_2' ): ?>

	            <section class="build-hc wow slideInUp">
	            	<section class="brick_hc">
					<figure>
					<?php if( get_sub_field('fc_img_col_left') ): ?>
					<img src="<?php the_sub_field('fc_img_col_left'); ?>" />
					<?php endif; ?>
                    </figure>
	                </section><!-- mix-brick -->
	                <section class="brick_hc">
	                	<div>
	                		<?php the_sub_field('fc_txt_col_right'); ?>
	                	</div>
	                </section><!-- post_block -->
	            </section><!-- two-col-mix -->

	            <?php elseif (get_row_layout() == 'fc_2_col_txt' ): ?>

	            <section class="build-hc wow slideInUp">
	                <section class="brick_hc">
	                	<div>
	                		<?php the_sub_field('fc_txt_col_left'); ?>
	                	</div>
	                </section><!-- post_block -->
	              	<section class="brick_hc">
						<div>
	                		<?php the_sub_field('fc_txt_col_right'); ?>
	                	</div>
	                </section><!-- post_block -->
	            </section><!-- single-posts-container -->

	        <?php elseif (get_row_layout() == 'fc_col_img' ): ?>

	            <section class="build-hc wow slideInUp">
	                <section class="brick_fc">
	                	<figure>
						<?php if( get_sub_field('fc_img_col') ): ?>
						<img src="<?php the_sub_field('fc_img_col'); ?>" />
						<?php endif; ?>
                    </figure>
	                </section><!-- post_block -->
	            </section>
	            <?php endif; ?>
	          <?php endwhile; ?>
	        <?php endif; ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gisikurath' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'gisikurath' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
