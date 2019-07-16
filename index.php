<?php get_header(); ?>

<div class="container">
  <div class="row">
  <?php
    if(have_posts()){
      while(have_posts()){
        the_post();?>
        <div class="one-half column posts">
          <h2><a href="<?php the_permalink();?>"> <?php the_title();?></a></h2>
          <?php the_post_thumbnail('medium'); ?>
          <?php the_excerpt(); ?>
          <p class="orange"><?php echo "Published: " . get_the_date();?></p>
          <p class="orange"><?php echo "Article written by: " . get_the_author();?></p>
        </div>
    <?php  }//ends while loop
    }//end if statement
  ?>
</div>
</div>
<?php get_footer(); ?>
