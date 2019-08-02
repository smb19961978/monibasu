<?php /* Template Name: Search Page */ ?>
<?php get_header(); ?>
<?php
    if(has_post_thumbnail()){ ?>
        <div class="hero-image">
            <?php the_post_thumbnail(); ?>
        </div>
     <?php } ?>

<div class="container templates featured-image-container">
  <div class="row">
    <div class="nine columns">
      <?php if(have_posts()){?>
        <h2><?php printf(__('Search Results for : %s'), '<span>' . get_search_query() . '</span>');?></h2>
        <?php while(have_posts()){
          the_post(); ?>
          <h3 class="post-title-template"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


          <?php the_post_thumbnail('medium'); ?>

          <?php the_excerpt(); ?>

          <a class="read-more" href="<?php the_permalink() ?>">Read More ...</a><?php
        }//ends while loop
      }else{?>
        <div class="hero-image">
            <?php dynamic_sidebar(); ?>
        </div>
        <h2 class="post-title">Nothing was Found</h1>
        <p>Sorry, but nothing matched your search criteria. Please try again with a different search term. </p><?php get_search_form();
      }
      ?>



    </div>

    <div class="three columns">
        <?php get_sidebar(); ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>
