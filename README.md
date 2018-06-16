# WpDevMeetup

### File Structure

Function.php - Acts as a plugin and adds features and functionality through PHP Code. [read more](https://codex.wordpress.org/Functions_File_Explained)

Header.php - The code that will display the theme header.

### Code Steps

1.  Uncomment Lines 1-10 in functions.php and view the browser dev tools.
2.  Uncomment the lines in the header.php
3.  Uncomment the create nav menu lines and go into the back end of WordPress. Under appearence menues.
4.  Add content to home in the back end.
5.  Uncomment the front-page.php code.
6.  Uncomment add featured image
7.  Create footer menu
8.

# What is this?

### Functions.php

The first step we look at is adding style sheets to our WordPress theme through the functions.php file. The first step is to register the CSS file with wp_register_style().This function holds a view values `wp_register_style(stylesheet_refernce_name,source_of_stylesheet,loading_sequence, version)`

The wp_enqueue_style simply adds the CSS file to the WordPress theme. Take a value of
`wp_enqueue_style(stylesheet_refernce_name)`.

### Header.php

The wp_head() function is essential in theme development. It loads in your stylesheets and scripts. It must **always** be in the <head></head> tags.

Registering nav menues allows us to create the navigation menu in the back end of WordPress. We set the theme_location equal to the the menue we want to select. The container is what tags we want to wrap the nav menu in. The container_class in the class name that will be give to the nav tag. Open the browser tools to check this out.

**Could also look like:**  
`wp_nav_menu( array $args = array(`  
`'theme_location' => 'header-menu',`  
`'container' => 'nav',`  
`'container_class'=> 'mainsite-nav',`  
`))`

### Front-page.php

By naming the page front-page.php it will automaticlly be the template for your home page. However this template also displays how custom page naming works in WordPress. If we look at line two stating the template name. Go into the backend of WordPress and if we select the page home we can now assign it a template of homepage.

The front page is when we are first introduced to the **WordPress loop**. The loops follows the syntax of `<?php while (have_posts()) : the_post();?>` whcih in short is stating while there is post access the post. It is important to make sure to add a `endwhile` after you finish displaying all the data from the post you would like.
