<?php get_header(); ?>
<?php
    if(has_post_thumbnail()){ ?>
        <div class="hero-image">
            <?php the_post_thumbnail(); ?>
        </div>
     <?php } ?>
<div class="container templates featured-image-container">
  <div class="row">
    <div class="eight columns single-content">
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post();?>
          <h2 class="post-title"><?php the_title(); ?></h2>
          <p class="post-date"><?php echo "Published " . get_the_date(); ?></p>
          <p class="post-author"><?php echo "Written by: " . get_the_author(); ?></p>

          <p class="post-content-text">  <?php the_content(); ?> </p>


      <?php  }//end while loop
      } //end if statement

      // comments_template();
      
    ?>

    </div>
    <div class="four columns">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
