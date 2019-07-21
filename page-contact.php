<?php /*Template Name: Contact Page Template*/ ?>
<?php get_header(); ?>

<?php
    if(has_post_thumbnail()){ ?>
        <div class="hero-image">
            <?php the_post_thumbnail(); ?>
        </div>
     <?php } ?>


<div class="container templates featured-image-container">
    <h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
</div>

<?php get_footer(); ?>
