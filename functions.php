<?php

  function thedragonscribe_theme_support() {
    // adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
  }

  add_action('after_setup_theme', 'thedragonscribe_theme_support');

  function thedragonscribe_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('thedragonscribe_css', get_template_directory_uri() . "/style.css", array(), $version, 'all');
  }

  add_action('wp_enqueue_scripts', 'thedragonscribe_register_styles');

  function thedragonscribe_menus() {

    $locations = array(
      'primary' => "Main Navbar"
    );

    register_nav_menus($locations);

  }

  add_action('init', 'thedragonscribe_menus');

  function thedragonscribe_widget_areas() {
    register_sidebar(
      array(
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'name' => 'Sidebar Area',
        'id' => 'sidebar-1',
        'description' => 'sidebar widget area'
      )
    );

    register_sidebar(
      array(
        'before_title' => '',
        'after_title' => '',
        'before_widget' => '',
        'after_widget' => '',
        'name' => 'Footer Area',
        'id' => 'footer-1',
        'description' => 'footer widget area'
      )
    );

    register_sidebar(
      array(
        'before_title' => '',
        'after_title' => '',
        'before_widget' => '',
        'after_widget' => '',
        'name' => 'Navbar Area',
        'id' => 'navbar-1',
        'description' => 'navbar widget area'
      )
    );
  }

  add_action('widgets_init', 'thedragonscribe_widget_areas');

?>