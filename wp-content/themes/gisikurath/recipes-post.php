<!-- REPATER FOR RECIPE BOX -->
<h1 class="zub-heading">Zubereitung</h1>
<?php if( have_rows('vinstructions') ): ?>
<!-- LAYOUT 01 -->
<?php while ( have_rows('vinstructions') ) : the_row();
	if ( get_row_layout() == 'zub_module' ): ?>
				
	<article class="">
	    <?php the_sub_field('zubereitung_content'); ?>
	</article><!-- headings -->
<!-- LAYOUT 01 -->

<!-- LAYOUT 02 -->
	<?php elseif (get_row_layout() == 'zub__fwi' ): ?>
			<figure class="zub_fwi">
				<?php if( get_sub_field('z_full_width_image') ): ?>
				<img class="zub_fwi_img" src="<?php the_sub_field('z_full_width_image'); ?>" />
				<?php endif; ?>
            </figure>
<!-- LAYOUT 02 -->

<!-- LAYOUT 03 -->
	<?php elseif (get_row_layout() == 'zub_ig' ): ?>
	    <div class="masnry-wrapper">
		<div class="main-posts-container">
		<?php // check if the repeater field has rows of data
			if( have_rows('z_ig') ):?>
    			<?php while ( have_rows('z_ig') ) : the_row();?>
				<div class="post_brick">
				<figure class="post_img">
					<?php if( get_sub_field('single_gi') ): ?> 
					<img src="<?php the_sub_field('single_gi'); ?>" />
					<?php endif; ?>
                </figure>
                </div><!--post_brick-->
    	<?php endwhile; else : endif; ?>
    	</div>
		</div>
<!-- LAYOUT 03 -->

<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

