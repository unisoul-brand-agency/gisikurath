<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package gisikurath
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/responsiveslides.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/themes/themes.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/animate.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'gisikurath' ); ?></a>
<div id="content" class="site-content">
