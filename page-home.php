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

  <div class="row">
    <div class="twelve columns">
      <h3>CHAPLAIN TURNER'S WAR</h3>
      <button class="button">Purchase</button>
    </div>
  </div>

  <div class="row">
    <?php
      global $post;
      $args = array( 'posts_per_page' => 3 );
      $lastposts = get_posts( $args );
      foreach ( $lastposts as $post ) :
        setup_postdata( $post ); ?>
    <div class="one-third column posts">
      <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
      <?php the_post_thumbnail('thumbnail'); ?>
    </div>  <!--End one-half-column div -->

    <?php endforeach;?>
    <?php wp_reset_postdata(); ?>


</div>



</div>
<?php get_footer(); ?>
