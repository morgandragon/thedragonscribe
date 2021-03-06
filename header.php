<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
    wp_head();
  ?>

</head>
<body>

  <!-- open wrapper -->
  <div class="shoesie-woosie">

    <header>
      <div class="banner-header">
        <?php
          if(function_exists('the_custom_logo')) {
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, $size='full');
          }
        ?>

        <a href="<?php echo get_home_url() ?>">
          <img src="<?php echo $logo[0] ?>" alt="The Dragon Scribe logo" class="banner-image">
        </a>

        <div class="banner-text">
          <h1><?php echo get_bloginfo('name'); ?></h1>
          <h2><?php echo get_bloginfo('description'); ?></h2>
        </div>
      </div>
      
      <nav class="navbar" aria-label="Main Menu">
        <label for="hamburger" class="ham-label">&#9776;</label>
        <input type="checkbox" id="hamburger"/>

        <?php

          wp_nav_menu(
            array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary',
              'items_wrap' => '<ul class="nav-items">%3$s</ul>'
            )
          );

        ?>

        <div class="nav-widget-holder">
          <?php
            dynamic_sidebar('navbar-1');
          ?>
        </div>

      </nav>

      <nav class="sidebar" aria-label="Sidebar Menu">

        <div class="widget-holder">
          <?php
            dynamic_sidebar('sidebar-1')
          ?>
        </div>
      </nav>

    </header>
