<?php get_header(); ?>

<div class="container templates">
  <div class="row">
    <div class="eight columns single-content">
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post();?>
          <h2 class="post-title"><?php the_title(); ?></h2>
          <p class="post-date"><?php echo "Published " . get_the_date(); ?></p>
          <p class="post-author"><?php echo "Written by: " . get_the_author(); ?></p>
          <div class="post-feature"> <?php the_post_thumbnail('large'); ?>
          </div>
          <p class="post-content-text">  <?php the_content(); ?> </p>


      <?php  }//end while loop
      } //end if statement

    ?>
    </div>
    <div class="four columns">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
