<?php 
$slider_qry = array (
	'post_type' => 'rezepte',
	'posts_per_page' => 6
	);
$queryObject = new WP_Query($slider_qry);
?>
<div id="slideshow_home">
<ul class="rslides" id="slider4">

<?php if ($queryObject->have_posts()) {
while ($queryObject->have_posts()) {

$queryObject->the_post(); ?>

<?php 
	//$termsArray = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item
	//$termsString = ""; //initialize the string that will contain the terms
	//foreach ( $termsArray as $term ) { // for each term 
	//$termsString .= $term->slug.' '; //create a string that has all the slugs 
	//}

?> 
	<li class="<?php echo $termsString; ?>" >

				<div class="post_container_home ">
				<div class="post_entry_home v-zigzag">
				<h2 class="post_head_hp"><?php the_title();?></h2>
				<span class="futura-reg post-content-home"><?php the_excerpt();?></span>
				
				
				</div><!-- post_entry_home -->
				</div><!--Post Container-->
				<?php if ( has_post_thumbnail() ) { ?>

          		<figure class="post_img lightbox"><?php the_post_thumbnail('full'); ?></figure>
          		</li>
				<?php } else {
				echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/noimage.jpg" />';
				}
				
			}
		}

?>
<?php wp_reset_postdata(); ?>
</ul>
<div class="clear"></div>
</div><!-- #slideshow_home -->
