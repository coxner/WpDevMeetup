
<?php get_header(); ?>
 
<div class="wrapper">   
<section class="single-info">
      <?php while (have_posts()) : the_post();?>
          <article>
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('blog'); ?>
            </a>
                <h2><?php the_title(); ?></h2>
                <p class="author">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <?php the_author(); ?>
                </p>
              <?php the_content(); ?>
          </article>
        <?php endwhile; ?>
</section>
</div>



<?php get_footer(); ?>
