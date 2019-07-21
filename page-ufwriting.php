<?php /*Template Name: UF Page Template*/ ?>
<?php get_header(); ?>

<?php
    if(has_post_thumbnail()){ ?>
        <div class="hero-image">
            <?php the_post_thumbnail(); ?>
        </div>
     <?php } ?>


<div class="container templates featured-image-container">

    <h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <div class="row uf">

      <div class="nine columns single-content-uf">

        <?php dynamic_sidebar('uf-image'); ?>
        <?php dynamic_sidebar('uf-text'); ?>

        <?php
          global $post;
          $args = array( 'posts_per_page' => 3 );
          $lastposts = get_posts( $args );
          foreach ( $lastposts as $post ) :
            setup_postdata( $post ); ?>


          <?php the_post_thumbnail('medium'); ?>
          <h3 class="post-title-template"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p class="post-date-template"><?php echo "Published " . get_the_date(); ?></p>
          <p class="excerpt"><?php the_excerpt(); ?></p>

        <?php endforeach;?>
        <?php wp_reset_postdata(); ?>

    </div>



    <div class="three columns uf">
      <?php get_sidebar(); ?>
    </div>

  </div>
</div>
<?php get_footer(); ?>
