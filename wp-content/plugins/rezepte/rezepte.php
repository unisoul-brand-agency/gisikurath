<?php
/*
Plugin Name: Rezepte	
Plugin URI: http://unisoul.co.za/
Description: Custom Post Type for Rezepte
Version: 1.0
Author: Code Wolf
Author URI: http://unisoul.co.za/
License: GPLv2
*/
add_action( 'init', 'create_rezepte' );
function create_rezepte() {  
	register_post_type('rezepte' ,
	array ( 
		'labels' => array (
			'name' => 'Rezepte',
			'singular_name' => 'Rezept',
			'add_new' => 'Add New',
			'add_new_item' => 'Add New Rezept',
			'edit' => 'Edit',
			'edit_item' => 'Edit Rezept',
			'new_item' => 'New Rezept',
			'view' => 'View',
			'view_item' => 'View Rezept',
			'search_item' => 'Search Rezepte',
			'not_found' =>'No Rezepte Found',
			'not_found_in_trash' => 'No Rezepte Found In Trash',
			'parent' => 'Parent Rezepte' 
			),
		// if true public can view posts
		'public' => true,
		'menu_position' => 5,
		'supports' => array(
			'title',
			'editor',
			'comments',
			'thumbnail',
			'custom-fields'
			),
		// custom tags and stuff like 'post_tag', 'category'
		'taxonomies' => array ( 'post_tag', 'category'),
		'menu_icon' => plugins_url('/images/recipes-dashboard-icon.png', __FILE__),
		'has_archive' => true 
) 
);
}

add_action( 'init', 'create_my_taxonomies', 0 );
// register taxonomies
function create_my_taxonomies() {
     
    // register a taxonomy called 'Zutaten'
    register_taxonomy( 'zutaten_cat', 'rezepte',
        array(
            'labels' => array(
                'name'              => 'Zutaten',
                'singular_name'     => 'Zutat',
                'search_items'      => 'Search Zutaten',
                'all_items'         => 'All Zutaten',
                'edit_item'         => 'Edit Zutaten',
                'update_item'       => 'Update Zutaten',
                'add_new_item'      => 'Add New Zutat',
                'new_item_name'     => 'New Zutaten',
                'menu_name'         => 'Zutaten',
            ),

            'hierarchical' => true,
            'sort' => true,
            'args' => array( 'orderby' => 'term_order' ),
            'rewrite' => array( 'slug' => 'zutaten' ),
            'show_admin_column' => true,
            'query_var' => true
        )
    );

    // register a taxonomy called 'Inspiration'
    register_taxonomy( 'inspiration_cat', 'rezepte',
        array(
            'labels' => array(
                'name'              => 'Inspiration',
                'singular_name'     => 'Inspiration',
                'search_items'      => 'Search Inspiration',
                'all_items'         => 'All Inspiration',
                'edit_item'         => 'Edit Inspiration',
                'update_item'       => 'Update Inspiration',
                'add_new_item'      => 'Add New Inspiration',
                'new_item_name'     => 'New Inspiration',
                'menu_name'         => 'Inspiration',
            ),

            'hierarchical' => true,
            'sort' => true,
            'args' => array( 'orderby' => 'term_order' ),
            'rewrite' => array( 'slug' => 'inspiration' ),
            'show_admin_column' => true,
            'query_var' => true
        )
    );
     
    // register a taxonomy called 'Art der Speise'
    register_taxonomy( 'art_der_speise_cat', 'rezepte',
        array(
            'labels' => array(
                'name'              => 'Art der Speise',
                'singular_name'     => 'Art der Speise',
                'search_items'      => 'Search Art der Speise',
                'all_items'         => 'All Art der Speise',
                'edit_item'         => 'Edit Art der Speise',
                'update_item'       => 'Update Art der Speise',
                'add_new_item'      => 'Add New Art der Speise',
                'new_item_name'     => 'New Art der Speise Name',
                'menu_name'         => 'ArtderSpeise',
            ),

  			'hierarchical' => true,
            'sort' => true,
            'args' => array( 'orderby' => 'term_order' ),
            'rewrite' => array( 'slug' => 'Art%20der%20Speise' ),
            'show_admin_column' => true,
            'query_var' => true
        )
    );
}

add_filter( 'template_include',
'include_template_function', 1 );


function include_template_function( $template_path ) {
if ( get_post_type() == 'rezepte' ) {
if ( is_single() ) {
// checks if the file exists in the theme first,
// otherwise serve the file from the plugin
if ( $theme_file = locate_template( array
( 'single-rezepte.php' ) ) ) {
$template_path = $theme_file;
} else {
$template_path = plugin_dir_path( __FILE__ ) .
'/single-rezepte.php';
}
}
}
return $template_path;
}

?>