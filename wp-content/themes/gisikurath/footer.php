<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package gisikurath
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
      <?php get_template_part('footer-menu'); ?>
		  <!--<div class="site-info">
		<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'gisikurath' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'gisikurath' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'gisikurath' ), 'gisikurath', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div>--><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/responsiveslides.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/responsiveslides.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/modernizr.custom.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/wow.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/modernizr.custom1.js"></script>
<script>

  </script>
<script>
jQuery( document ).ready( function( $ ) {
// or with jQuery

var $container_fc = $('.build-fc');
// initialize Masonry after all images have loaded  
$container_fc.imagesLoaded( function() {
  $container_fc.masonry({ percentPosition: true, singleMode: true });
});

var $container_hc = $('.build-hc');
// initialize Masonry after all images have loaded  
$container_hc.imagesLoaded( function() {
  $container_hc.masonry({ percentPosition: true, singleMode: true });
});
});


$(document).on('ready', function() {  
  var winHeight = $(window).height(), 
      docHeight = $(document).height(),
      progressBar = $('progress'),
      max, value;

  /* Set the max scrollable area */
  max = docHeight - winHeight;
  progressBar.attr('max', max);

  $(document).on('scroll', function(){
     value = $(window).scrollTop();
     progressBar.attr('value', value);
  });
});

 new WOW().init();

    // You can also use "$(window).load(function() {"
    $(function () {


      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        prevText: "Prev",
        nextText: "Next",
    navContainer: ".post_entry_home",
        speed: 1900,
      });
    });

</script>
<?php wp_footer(); ?>
</body>
</html>
