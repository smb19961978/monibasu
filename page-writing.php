<?php /*Template Name: Writing Page Template*/ ?>
<?php get_header(); ?>
<div class="container">

    <h2><a href="<?php echo home_url('/');?>"><?php bloginfo('name'); ?></a></h2>

  <div class="row">

    <div class="nine columns single-content">
        <?php
          global $post;
          $args = array( 'posts_per_page' => 3 );
          $lastposts = get_posts( $args );
          foreach ( $lastposts as $post ) :
            setup_postdata( $post ); ?>

          <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p class="post-date"><?php echo "Published " . get_the_date(); ?></p>
          <?php the_post_thumbnail('medium'); ?>
          <p class="excerpt"><?php the_excerpt(); ?></p>

        <?php endforeach;?>
        <?php wp_reset_postdata(); ?>

    </div>



    <div class="three columns">
      <?php get_sidebar(); ?>
    </div>

  </div>
</div>
<?php get_footer(); ?>
