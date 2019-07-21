<?php /*Template Name: Contact Page Template*/ ?>
<?php get_header(); ?>

<?php
    if(has_post_thumbnail()){ ?>
        <div class="hero-image">
            <?php the_post_thumbnail(); ?>
        </div>
     <?php } ?>

<div class="container templates featured-image-container">
  
  <h1 class="page-title contact-heading"><?php the_title(); ?></a></h1>

     <div class="row contact-us-section">

       <div class="nine columns about">
         <?php dynamic_sidebar('about-us'); ?>
       </div>

      <div class="three columns">
       <?php
         if(have_posts()){
           while(have_posts()){
             the_post();?>
             <?php the_content();
           }//end while
         }//ends if
       ?>
     </div>

    </div>

</div>


<?php get_footer(); ?>
