<div class="menu-bar-top">
			<?php get_template_part('svg-logo-home');?>
			<?php
 			$vnav_home = wp_nav_menu (
    		array (
        	'container' => 'nav',
        	'container_class' => 'nav-top',
        	'theme_location' => 'top',
        	'echo' => true,
        	'menu' => 'top',
        	'menu_class' => 'top-menu clear'
            ));
         	?> 
			<div class="icon-wrapper">
			<a herf="">ANMELDEN  <i class="fa fa-heart-o"></i></a>
			</div>	
</div>
