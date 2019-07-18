<?php
//Adds featured image to posts
  add_theme_support('post-thumbnails');


//Add Custom menus

function custom_menus(){
    register_nav_menus( array(
        'header-menu' => ('Header Menu'),
        'footer-menu' => ('Footer Menu')
    ));
}
add_action ('init', 'custom_menus');

//Adds widget areas
function blank_widgets_init(){

  //Header Logo
  register_sidebar( array(
    'name'          =>  ('Header Logo'),
    'id'            =>  'header-logo',
    'description'   =>  'Logo Image on Header',
    'before_widget' =>  '<div class="hero-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));


  //Hero Image Widget
  register_sidebar( array(
    'name'          =>  ('Hero Image'),
    'id'            =>  'hero-image',
    'description'   =>  'Hero Image on Home Page',
    'before_widget' =>  '<div class="hero-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //About Us Text Block Widget
  register_sidebar( array(
    'name'          =>  ('About Us Text Block'),
    'id'            =>  'about-us',
    'description'   =>  'Widget area for About Us section',
    'before_widget' =>  '<div class="about-us">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //About Us Image Block Widget
  register_sidebar( array(
    'name'          =>  ('About Us Image Block'),
    'id'            =>  'about-us-image',
    'description'   =>  'Widget area for About Us image section',
    'before_widget' =>  '<div class="about-us-image">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
));

//Book Image Home Page
register_sidebar( array(
  'name'          =>  ('Book Image Home'),
  'id'            =>  'book-image-home',
  'description'   =>  'Widget area for book image section on Home Page',
  'before_widget' =>  '<div class="book-image-home">',
  'after_widget'  =>  '</div>',
  'before_title'  =>  '<h3 class="widget-title">',
  'after_title'   =>  '</h3>'
));

  //Sidebar Widget
  register_sidebar( array(
    'name'          =>  ('Sidebar'),
    'id'            =>  'sidebar',
    'description'   =>  'Sidebar widget area',
    'before_widget' =>  '<div class="widget-sidebar">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

}
  add_action('widgets_init','blank_widgets_init');


function example_theme_scripts(){
  wp_enqueue_style('skeleton', get_template_directory_uri() . '/css/skeleton.css');
  wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');

  //main CSS get_included_files
  wp_enqueue_style('main-styles', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts','example_theme_scripts');

?>
