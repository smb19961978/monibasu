<?php /*Template Name: CNN Page Template*/ ?>
<?php get_header(); ?>

<?php
    if(has_post_thumbnail()){ ?>
        <div class="hero-image">
            <?php the_post_thumbnail(); ?>
        </div>
     <?php } ?>

<div class="container templates featured-image-container">

    <h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

  <div class="row cnn">

    <div class="nine columns single-content-cnn">

      <?php dynamic_sidebar('cnn-image'); ?>
      <?php dynamic_sidebar('cnn-text'); ?>

        <?php
          global $post;
          $args = array( 'posts_per_page' => 3 );
          $args = array('category_name'  => 'CNN');
          $lastposts = get_posts( $args );
          foreach ( $lastposts as $post ) :
            setup_postdata( $post ); ?>

          <div class="cnn-post-columns">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?>
            <h3 class="post-title-template"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="post-date-template"><?php echo "Published " . get_the_date(); ?></p>
            <?php the_excerpt(); ?>
          </div>

        <?php endforeach;?>
        <?php wp_reset_postdata(); ?>

    </div>


    <div class="three columns cnn">
      <?php get_sidebar(); ?>
    </div>

  </div>
</div>
<?php get_footer(); ?>
