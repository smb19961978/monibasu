<?php 
    add_theme_support('post-thumbnails');

    function blank_widgets_init(){
        
        
        register_sidebar()
    }




//Add Custom menus

function custom_menus(){
    register_nav_menus( array(
        'header-menu' => ('Header Menu'),
        'footer-menu' => ('Footer Menu')    
    ));
    
}


add_action ('init', 'custom_menus');

?>
