<?php /* Template Name: Search Page */
get_header();
?>

<div class="container search">
  <div class="row">
    <div class="twelve columns">
      <?php if(have_posts()){?>
        <h1><?php printf(__('Search Results for : %s'), '<span>' . get_search_query() . '</span>');?></h1>
        <?php while(have_posts()){
          the_post(); ?>
          <h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <a href="<?php the_permalink() ?>">Read More ...</a><?php
        }//ends while loop
      }else{?>
        <h2 class="post-title">Nothing was Found</h1>
        <p>Sorry, but nothing matched your search criteria. Please try again with a different search term. </p><?php get_search_form();
      }
      ?>



    </div>
  </div>
</div>


<?php get_footer(); ?>
