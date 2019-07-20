<?php /*Template Name: Home Page Template*/ ?>

<?php get_header(); ?>
if (has_post_thumbnail()){?>
    <div class="hero-image">
        <?php the_post_thumbanil('full'); ?>
    </div>
    <?php}
}

<?php
    

<div class="container">
<h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <!-- About Text Section -->
  <div class="row about-us-block">

    <div class="nine columns">
      <?php dynamic_sidebar('about-us'); ?>
    </div>
    <div class="three columns">
      <?php dynamic_sidebar('about-us-image'); ?>
    </div>
  </div>

  <div class="row book-home">

      <h1>CHAPLAIN<br>TURNER'S <br>WAR  <button class="purchase">Purchase</button></h1>


      <?php dynamic_sidebar('book-image-home');?>

  </div>

  <div class="row posts-home">
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
