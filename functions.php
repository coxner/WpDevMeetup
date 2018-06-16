<?php
/*
function wpDev_styles() {
  wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0' );
  wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.0.10/css/all.css');
  wp_register_style('fontAwesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '1.0');
  wp_enqueue_style('style');
  wp_enqueue_style('fontAwesome');
  }

 add_action( 'wp_enqueue_scripts', 'wpDev_styles' );

*/
/*
// add menu in apperance
function wpDev_menus() {
    register_nav_menus(array(
      'header-menu' => __('Header Menu', 'psi'),
      'footer-menu' => __('Footer Menu', 'psi')
    )  );
  }

  add_action('init', 'wpDev_menus');

  function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');
*/
/* 
add_theme_support( 'post-thumbnails' );
add_image_size('specialties', 1500, 1000, true);
add_image_size('blog', 718, 515, true);
*/