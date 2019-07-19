<?php /*Template Name: Home Page Template*/ ?>

<?php get_header(); ?>


<div class="container template">


  <div class="row">
    <div class="six columns">
      <h1>CHAPLAIN<br>TURNER'S <br>WAR </h1>
       <button class="purchase-book-page">Purchase</button>
      <p class="chaplain-caption">This is a caption</p>
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

  <div class="row">
    <div class="tweleve columns book-image">
      <?php dynamic_sidebar('chaplain-book-image'); ?>
    </div>
  </div>

  <div class="row">
    <div class="tweleve columns book-text">
      <?php dynamic_sidebar('chaplain-text-bottom'); ?>
    </div>
  </div> <!-- End row with bottom text  -->


</div> <!-- End Container -->



<?php get_footer(); ?>
