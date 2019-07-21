<?php /*Template Name: Contact Page Template*/ ?>
<?php get_header(); ?>

<?php
    if(has_post_thumbnail()){ ?>
        <div class="hero-image">
            <?php the_post_thumbnail(); ?>
        </div>
     <?php } ?>

<div class="container templates featured-image-container">

  <h1 class="page-title contact-heading">CONTACT<br>MONI</h1>

     <div class="row contact-moni-section">

       <div class="seven columns">
         <?php dynamic_sidebar('contact-moni'); ?>
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
