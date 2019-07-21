<?php get_header(); ?>

<?php
    if(has_post_thumbnail()){ ?>
        <div class="hero-image">
            <?php the_post_thumbnail(); ?>
        </div>
     <?php } ?>

<div class="container templates archive">
    <div class="row">
        <div class="nine columns">
    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();?>
                <div class="nine columns">
                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink();?>"></a>
                </div>
        <?php    }//ends the while loop
        }//ends if statement
    
?>    </div>
        
        <div class="three columns uf">
        <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>