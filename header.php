<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php the_title(); ?></title>
    <?php
    //adds Style sheets
    wp_head() ?>
  </head>
  <body <?php body_class(); ?>> 
<!-- Prints out the menu -->
<header> 
      <?php $args = array(
        'theme_location' => 'header-menu',
        'container' => 'nav',
        'container_class'=> 'mainsite-nav',
      );

       wp_nav_menu( $args);
      ?>
      <a href="<?php echo site_url('/'); ?>"><i class="fab fa-wordpress-simple"></i></a>
      
</header> 
