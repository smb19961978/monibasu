<?php /*Template Name: Writing Page Template*/ ?>
<?php get_header(); ?>

<?php
    if(has_post_thumbnail()){ ?>
        <div class="hero-image">
            <?php the_post_thumbnail(); ?>
        </div>
     <?php } ?>


<div class="container templates featured-image-container">

    <h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

  <div class="row">

    <div class="nine columns single-content">
        <?php
          global $post;
          $args = array('category_name'  => 'Writing');
          $lastposts = get_posts( $args );
          foreach ( $lastposts as $post ) :
            setup_postdata( $post ); ?>

          <h3 class="post-title-template"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p class="post-date-template"><?php echo "Published " . get_the_date(); ?></p>

        <div class="post-img-text-template">
          <div class="image-permalink">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?> </a></div>

          <?php the_excerpt(); ?>
        </div>
        <?php endforeach;?>
        <?php wp_reset_postdata(); ?>

    </div>

    <div class="three columns template">
      <?php get_sidebar(); ?>
    </div>

  </div>
</div>
<?php get_footer(); ?>
