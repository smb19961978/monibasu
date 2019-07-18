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

  <div class="row book-home">
    <div class="one-third column home-page">
      <h3>CHAPLAIN<br>TURNER'S <br>WAR</h3>
      <button class="button">Purchase</button>
    </div>
    <div class="two-thirds column home-page">
      <?php dynamic_sidebar('book-image-home');?>
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
      <?php the_post_thumbnail('thumbnail'); ?>
      <h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    </div>  <!--End one-half-column div -->

    <?php endforeach;?>
    <?php wp_reset_postdata(); ?>


  </div>



</div>
<?php get_footer(); ?>
