<div class="menu-bar-bottom">
			<?php get_template_part('footer-icon');?>
            
			<?php
 			$vnav_home = wp_nav_menu (
    		array (
        	'container' => 'div',
        	'container_class' => 'nav-bottom',
        	'theme_location' => 'bottom',
        	'echo' => true,
        	'menu' => 'bottom',
        	'menu_class' => 'bottom-menu clear'
            ));
         	?> 

			<div class="footer-right">
			<span>SOCIAL MEDIA
            <a class="fa fa-pinterest-p socail-footer-icon"></a>
            <a class="fa fa-facebook socail-footer-icon"></a>
            <a class="fa fa-twitter socail-footer-icon"></a>
            </span>
			</div>	
</div>