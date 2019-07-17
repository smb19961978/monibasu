<?php /*Template Name: Writing Page Template*/ ?>
<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="nine columns single-content">
      <?php
      if(have_posts()){
        while(have_posts()){
          the_post();?>
            <h2 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
            <p class="post-date"><?php echo "Published: " . get_the_date();?></p>
            <p class="post-author"><?php echo "Written by: " . get_the_author();?></p>
            <?php the_post_thumbnail('medium'); ?>
            <?php the_excerpt(); ?>

      <?php  }//ends while loop
      }//end if statement
    ?>
    </div>

    <div class="three columns">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
