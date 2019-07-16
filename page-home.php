<?php /*Template Name: Home Page Template*/ ?>

<?php get_header(); ?>


<div class="container">
  <!-- Hero Image Section -->
  <div class="row">
    <div class="twelve columns">
      <?php dynamic_sidebar('hero-image'); ?>
    </div>
  </div>

  <!-- About Text Section -->
  <div class="row">
    <div class="nine columns">
      <?php dynamic_sidebar('about-us'); ?>
    </div>
    <div class="three columns">
      <?php dynamic_sidebar('about-us-image'); ?>
    </div>
  </div>

  <!-- Interior Pages Section -->
  <div class="row">
    <div class="one-third column">
      <?php dynamic_sidebar('bottom-left-home'); ?>
    </div>

    <div class="one-third column">
      <?php dynamic_sidebar('bottom-middle-home'); ?>
    </div>

    <div class="one-third column">
      <?php dynamic_sidebar('bottom-right-home'); ?>
    </div>
  </div>

</div>
<?php get_footer(); ?>
