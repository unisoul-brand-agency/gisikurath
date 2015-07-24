<?php
/*
Template Name: hp_t
*/
?>
<?php get_header(); ?>

<div id="primary" class="content-area-home">
	<main id="main" class="site-main home-main" role="main">
	
		<!--FIXED HEADER TOP-->
			
		

		<div id="home_wrapper">
		<div class="home_content">

		<!--slider-->
		<?php get_template_part('home-slider-qry'); ?>
		<div class="home-header">
			<?php get_template_part('site-wide-header'); ?>
		</div>
		<?php get_template_part('home-blog-qry'); ?>
		
			<div class="home-line-top"></div><!--.home-line-top -->
			<div class="home-intro-wrapper">
			<div class="home-intro">

				<div class="home-intro-left">
				<figure>
				<img src="<?php bloginfo('template_url'); ?>/images/sample.png"/>
				</figure>
				</div><!--.home-intro-left -->

				<div class="home-intro-right">
					<h2 class="home-intro-head">HALO,<br>ICH BIN <br> GISI KURATH.</h2>
					<p class="home-intro-body">In allen Filialen gisi kurath sind unsere Kunden Könige. Aber in einer ganz besonderen kann es schon einmal…In allen Filialen gisi kurath sind unsere Kunden Könige. Aber in einer ganz besonderen kunsere Kunden Könige. in einer ganz besonderen kann es schon einmal…
					<span class="read-more-recipes read-more-btn">
						<a class=" read-more-recipes-link read-more" href="<?php the_permalink(); ?>">
							zweiterlesen 
						</a>
					</span>
					</p>
				</div><!--.home-intro-right -->

				<i class="clear"></i>
			</div><!--.home-intro -->
			</div><!--.home-intro-wrapper -->
			<div class="home-line-bottom"></div><!--.home-line-bottom -->
		
	

			<?php get_template_part('home-rezept-qry'); ?>

		</div><!--.home_wrapper -->
		</div><!--.home_content -->


	</main><!-- #main -->
</div><!-- #primary --> 
<?php get_footer(); ?>
