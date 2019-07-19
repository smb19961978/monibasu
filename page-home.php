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
  <div class="row about-us">
    <div class="nine columns">
      <?php dynamic_sidebar('about-us'); ?>
    </div>
    <div class="three columns">
      <?php dynamic_sidebar('about-us-image'); ?>
    </div>
  </div>

  <div class="row book-home">

      <h3>CHAPLAIN<br>TURNER'S <br>WAR  <button class="purchase">Purchase</button></h3>


      <?php dynamic_sidebar('book-image-home');?>

  </div>

  <div class="row">
    <?php
      global $post;
      $args = array( 'posts_per_page' => 3 );
      $lastposts = get_posts( $args );
      foreach ( $lastposts as $post ) :
        setup_postdata( $post ); ?>
    <div class="one-third column posts">
      <?php the_post_thumbnail('medium'); ?>
      <h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    </div>  <!--End one-half-column div -->

    <?php endforeach;?>
    <?php wp_reset_postdata(); ?>


  </div>



</div>
<?php get_footer(); ?>
