<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <!--link to css file-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" >

    <!--link to Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Anton|Fira+Sans:200,400&display=swap" rel="stylesheet">


    <?php wp_head(); ?>
</head>

<body>
  <header >
    <div class= "container">



      <div class="row">
        <?php dynamic_sidebar('header-image'); ?>
        <!--Logo (May need Widget Area)-->
        <div class="three columns">
            <?php dynamic_sidebar('header-logo'); ?>
        </div>

        <!--Header Menu-->
        <div class="nine columns">
          <?php wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container-class' => 'menu-header'
          ));
        ?>
        </div>
      </div>

    </div>
  </header>
