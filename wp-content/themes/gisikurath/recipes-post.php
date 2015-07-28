<!-- REPATER FOR RECIPE BOX -->

<?php if( have_rows('vinstructions') ): ?>
<!-- LAYOUT 01 -->
<?php while ( have_rows('vinstructions') ) : the_row();

if ( get_row_layout() == 'headings' ): ?>		
	<h2 class="zub_heading">
	    <?php the_sub_field('heading'); ?>
	</h2><!-- headings -->

<!-- LAYOUT 01 -->

<!-- LAYOUT 02 -->
	<?php elseif (get_row_layout() == 'gen_module' ): ?>
	<article class="general_content_box">
	    <?php the_sub_field('gen_content'); ?>
	</article><!-- headings -->
<!-- LAYOUT 02 -->

<!-- LAYOUT 02 -->
	<?php elseif (get_row_layout() == 'zub_module' ): ?>
	<article class="zub_content_box">
	    <?php the_sub_field('zubereitung_content'); ?>
	</article><!-- headings -->
<!-- LAYOUT 02 -->

<!-- LAYOUT 03 -->
	<?php elseif (get_row_layout() == 'zut_module' ): ?>

	<div id="zutaten-wrapper">
	<h1 class="zutaten-heading">Zutaten</h1>
	<section class="zutaten_list clear">
	<?php 
	// check for rows (parent loop)
		if( have_rows('zutaten_lists') ): ?>
			<div class="zutaten_list_wrapper">
					<?php 
					// loop through rows (parent repeater)
					while( have_rows('zutaten_lists') ): the_row(); ?>
						<div class="single_zutaten_lists_obj">
							<h2 class="zutaten_list_heading"><?php the_sub_field('zutaten_list_heading'); ?></h2>
							<?php 
							// check for rows (sub repeater)
							if( have_rows('zutaten_list_object') ): ?>
								<ul class="zutaten_lists clear">
								<?php 

								// loop through rows (sub repeater)
								while( have_rows('zutaten_list_object') ): the_row();
									// display each item as a list - with a class of completed ( if completed )
									?>
									<li class="zutaten_list_item"><?php the_sub_field('single_zutaten_list_object');?></li>
								<?php endwhile; ?>
								</ul>
							
						</div>	
						<?php endif; //if( get_sub_field('zutaten_list_object') ): ?>
					<?php endwhile; // while( has_sub_field('zutaten_lists') ): ?>
					</div><!-- .zutaten_list_wrapper -->
				<?php endif; // if( get_field('zutaten_lists') ): ?>

	    <?php the_sub_field('zutaten_content');?>
	</section>
	<a href="javascript:void(0)" class="mail-zutaten">
		Als Einkaufsliste schicken
	</a>
</div><!-- .zutaten-wrapper -->

<!-- LAYOUT 03 -->

<!-- LAYOUT 04 -->
	<?php elseif (get_row_layout() == 'zub__fwi' ): ?>
			<figure class="zub_fwi">
				<?php if( get_sub_field('z_full_width_image') ): ?>
				<img class="zub_fwi_img" src="<?php the_sub_field('z_full_width_image'); ?>" />
				<?php endif; ?>
            </figure>
<!-- LAYOUT 04 -->



<!-- LAYOUT 05 -->
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
<!-- LAYOUT 05 -->

<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

