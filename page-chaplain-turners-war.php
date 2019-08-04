<?php /*Template Name: Home Page Template*/ ?>

<?php get_header(); ?>

<?php
    if(has_post_thumbnail()){ ?>
        <div class="hero-image">
            <?php the_post_thumbnail(); ?>
        </div>
     <?php } ?>

<div class="container templates featured-image-container">


  <div class="row">
    <div class="six columns">
      <h1>CHAPLAIN TURNER'S WAR </h1>
      <a href="https://www.amazon.com/Chaplain-Turners-War-Moni-Basu-ebook/dp/B007XULHX4/ref=sr_1_1?keywords=chaplain+turners+war&qid=1564783407&s=digital-text&sr=1-1" target="_blank" rel="noopener"><button class="purchase">Purchase</button></a>
      <p class="chaplain-caption">E-Book. Published by Agate Books, 2012</p>
    </div>

    <div class="six columns image-area">
      <?php dynamic_sidebar('chaplain-image'); ?>
    </div>
  </div> <!-- End row with header and image -->

  <!-- About Text Section -->
  <div class="row">
    <div class="tweleve columns book-text">
      <?php dynamic_sidebar('chaplain-text-top'); ?>
    </div>
  </div> <!-- End row with top text  -->
</div> <!--- End container --->



  <div class="row book-image">
    <div class="tweleve columns book-image">
      <?php dynamic_sidebar('chaplain-book-image'); ?>
    </div>
  </div>


<div class="container chaplain">
  <div class="row">
    <div class="tweleve columns book-text">
      <?php dynamic_sidebar('chaplain-text-bottom'); ?>
    </div>
  </div> <!-- End row with bottom text  -->


</div> <!-- End Container -->



<?php get_footer(); ?>
