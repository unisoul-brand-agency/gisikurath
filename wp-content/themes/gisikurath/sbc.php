<div class="search-form">
<?php if(function_exists('sbc')){ 
             sbc(); 
      } else { ?> 
       <?php get_template_part('search-widget');?> 
      <?php } ?>
</div>
