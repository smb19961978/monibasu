<?php /*Template Name: 404 Page */

get_header(); ?>

<div class="container">

    <div class="row">
        <div class="nine columns">
            <h1>404</h1>
            <h2>Page not found</h2>
            <h3>This usually never happens</h3>
            <p>It looks like nothing was found at this location. Would you like to go back <a href="<?php echo home_url('/'); ?>">home</a></p>
        </div>
        
        <div class="three columns">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>