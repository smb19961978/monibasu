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
          $args = array('category_name'  => 'Writing');
          $lastposts = get_posts( $args );
          foreach ( $lastposts as $post ) :
            setup_postdata( $post ); ?>

    </div>



    <div class="three columns uf">
      <?php get_sidebar(); ?>
    </div>

  </div>
</div>
<?php get_footer(); ?>
