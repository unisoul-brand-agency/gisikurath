<?php
/**
 * @package gisikurath
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	
		<div class="single-entry-header">
			<div class="entry-meta single-rezept-entry-meta">
				<?php $comment_count = get_comments_number( $post_id ); ?>
				<p><?php echo $comment_count;?> Comments / Written by <?php the_author(); ?></p>			
			</div><!-- .entry-meta -->
		<?php the_title( '<h1 class="single-entry-title">', '</h1>' ); ?>	
		</div><!-- .entry-header -->

		<div class="single-entry-content">
			<?php the_content(); ?>
			<?php 
			// get the curent post type of the page
			get_post_type (
				array (
					'rezepte', 'post'));
				// according the post type it is show the differnt content that is specified 
				if ( 'rezepte' == get_post_type() ) {
					get_template_part('recipes-post');
				} elseif ( 'post' == get_post_type() ) {
					get_template_part('');
				} 
			?>
	        <?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gisikurath' ),
				'after'  => '</div>',
			) );
		?>
		
		<footer class="entry-footer rezepte-entry-footer clear">
			<?php echo getPostLikeLink(get_the_ID());?>
			<div class="social-foter-single">
			<p>Dieses Rezept mit Freunden teilen.</p>
			<a class="circle">
			<i class="fa fa-pinterest-p"></i> 
			</a>
			<a class="circle">
			<i class="fa fa-facebook"></i>	
			</a>
			<a class="circle">
			<i class="fa fa-twitter"></i>	
			</a>
			</div>
			<?php gisikurath_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
	</div><!-- .single-entry-content -->
