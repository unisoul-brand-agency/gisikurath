<?php// get_template_part("search-widget" );?>
<div class="content filters">

<div class="test-div clear">
    <b class = "trigger t-1" ><span class="filter-btn-name">Zutaten</span></b>
    <div class = "toggle modal">
    <b class="close-modal fa fa-times"></b>

<a class="btn btn-navbar toggle opt-fil-1" data-toggle="collapse" data-target=".nav-collapse"></a>
<a class="brand menu-item-type-filter-all " href="/wp/recipes/">Alles auf einmal</a> 
        <?php
          $vsearch_nav = wp_nav_menu (
            array (
              'container' => 'a',
              'container_class' => 'nav-collapse collapse',
              'theme_location' => 'tertiary',
              'echo' => true,
              'menu' => 'tertiary',
              'menu_class' => 'inner clear'
          ));
          ?> 
 
    </div>
    <b class ="trigger t-2" ><span class="filter-btn-name">Inspiration</span></b>
   <div class = "toggle modal">
   <b class="close-modal fa fa-times"></b> 
        <a class="btn btn-navbar toggle opt-fil-2" data-toggle="collapse" data-target=".nav-collapse"> </a>
        <a class="brand menu-item-type-filter-all " href="/wp/recipes/">Alles auf einmal</a>
        <?php
          $vsearch_nav = wp_nav_menu (
            array (
              'container' => 'a',
              'container_class' => 'nav-collapse collapse',
              'theme_location' => 'quaternary',
              'echo' => true,
              'menu' => 'quaternary',
              'menu_class' => 'inner clear'
            ));
          ?> 
    </div>
    
    <b class = "trigger t-3" ><span class="filter-btn-name">Art Der Speise</span></b>
   <div class = "toggle modal">
   <b class="close-modal fa fa-times"></b> 
      <a class="btn btn-navbar toggle opt-fil-3" data-toggle="collapse" data-target=".nav-collapse"></a>
      <a class="brand menu-item-type-filter-all " href="/wp/recipes/">Alles auf einmal</a>
        <?php
          $vsearch_nav = wp_nav_menu (
            array (
              'container' => 'a',
              'container_class' => 'nav-collapse collapse',
              'theme_location' => 'quinary',
              'echo' => true,
              'menu' => 'quinary',
              'menu_class' => 'inner clear'
            ));
          ?>
    </div>
</div> <!-- .test-div -->

</div><!-- .rezepte-search-wrap -->