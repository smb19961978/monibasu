<?php /*Template Name: Home Page Template */ ?>

<?php get_header(); ?>

<?php
    if(has_post_thumbnail()){ ?>
        <div class="hero-image-home">
            <?php the_post_thumbnail(); ?>
        </div>
     <?php } ?>

<div class="container featured-image-container">
<h1 class="page-title-home"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <!-- About Text Section -->
  <div class="row about-us-block">

    <div class="nine columns about">
      <?php dynamic_sidebar('about-us'); ?>
    </div>
    <div class="three columns about">
      <?php dynamic_sidebar('about-us-image'); ?>
    </div>
  </div>
</div>
  <div class="row book-home">

      <h1>CHAPLAIN<br>TURNER'S <br>WAR<br><a href="https://www.amazon.com/Chaplain-Turners-War-Moni-Basu-ebook/dp/B007XULHX4/ref=sr_1_1?keywords=chaplain+turners+war&qid=1564783407&s=digital-text&sr=1-1" target="_blank" rel="noopener"><button class="purchase">Purchase</button></a>
</h1>
      

      <?php dynamic_sidebar('book-image-home');?>

  </div>
<div class="container">
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
