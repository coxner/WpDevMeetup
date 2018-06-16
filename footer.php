</body>
<footer>
  <section>
  <h3><span><?php _e( 'Connect with Me', 'wpdevmeetup' );?></span></h3>
<?php $footer = array(
        'theme_location' => 'footer-menu',
        'container' => 'nav',
        'container_class'=> 'footer-nav',
      );
      
       wp_nav_menu($footer);
      ?>
      </section>
</footer> 