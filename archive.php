<?php get_header(); ?>

<div class="container">
    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();?>
                <div class="twelve columns">
                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink();?>"></a>
                </div>
        <?php    }//ends the while loop
        }//ends if statement
    
?>    
</div>

<?php get_footer(); ?>