<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="nine columns single-content">
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post();?>
          <h2 class="post-title"><?php the_title(); ?></h2>
          <p class="post-date"><?php echo "Published: " . get_the_date(); ?></p>
          <div class="post-feature"> <?php the_post_thumbnail(); ?>
          </div>
            <?php the_content(); ?>

          <p><?php echo "This post is written by : " . get_the_author(); ?></p>
      <?php  }//end while loop
      } //end if statement

    ?>
    </div>
    <div class="three columns">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
