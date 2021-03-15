<?php

// CSS
function theme_add_styles(){
  wp_enqueue_style('css-1', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
  wp_enqueue_style('css-2', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'theme_add_styles');

// JS
function theme_add_scripts(){
  wp_enqueue_script("js-1", get_template_directory_uri() . "/js/jquery.min.js", array(), "1.2.0", true);
  wp_enqueue_script("js-2", get_template_directory_uri() . "/js/bootstrap.min.js", array(), "1.0.0", true);
  wp_enqueue_script("js-3", get_template_directory_uri() . "/js/isotope.pkgd.min.js", array(), "1.0.0", true);
  wp_enqueue_script("js-4", get_template_directory_uri() . "/js/TweenMax.min.js", array(), "1.0.0", true);
  wp_enqueue_script("js-5", get_template_directory_uri() . "/js/ScrollMagic.min.js", array(), "1.0.0", true);
  wp_enqueue_script("js-6", get_template_directory_uri() . "/js/animation.gsap.min.js", array(), "1.0.0", true);
  wp_enqueue_script("js-7", get_template_directory_uri() . "/js/ScrollToPlugin.min.js", array(), "1.0.0", true);
  wp_enqueue_script("js-8", get_template_directory_uri() . "/js/animation.gsap.min.js", array(), "1.0.0", true);
  wp_enqueue_script("js-9", "http://maps.googleapis.com/maps/api/js?key=AIzaSyCMr0R_b0zz43M1N_bwnpq_zGl_m813eS4", array(), "1.0.0", true);
  wp_enqueue_script("js-10", get_template_directory_uri() . "/js/main.js", array(), "1.0.0", true);
}
add_action('wp_enqueue_scripts', 'theme_add_scripts');

// To make options to the theme settingigs
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
	acf_add_options_sub_page('Header');
	acf_add_options_sub_page('Footer');	
}

// Suport menus
add_theme_support('menus');
add_theme_support('post-thumbnails');


function add_custom_taxonomies() {
  register_taxonomy('location', 'post_type=project_details', array(

    'hierarchical' => true,
    
  ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );