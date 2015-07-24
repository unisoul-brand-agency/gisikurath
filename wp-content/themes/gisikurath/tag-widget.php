<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package gisikurath
 */

if ( ! is_active_sidebar( 'sidebar-4' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
<header id="masthead" class="site-header" role="banner">
<!--
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'gisikurath' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
		#site-navigation -->
</header><!-- #masthead -->
	<?php dynamic_sidebar( 'sidebar-4' ); ?>
</div><!-- #secondary -->