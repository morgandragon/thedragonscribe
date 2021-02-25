<?php

  function thedragonscribe_theme_support() {
    // adds dynamic title tag support
    add_theme_support('title-tag');
  }

  add_action('after_setup_theme', 'thedragonscribe_theme_support');

  function thedragonscribe_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('thedragonscribe_css', get_template_directory_uri() . "/style.css", array(), $version, 'all');
  }

  add_action('wp_enqueue_scripts', 'thedragonscribe_register_styles');

  function thedragonscribe_menus() {

    $locations = array(
      'primary' => "Main Navbar",
      'sidebar' => "Sidebar menu items"
    );

    register_nav_menus($locations);

  }

  add_action('init', 'thedragonscribe_menus');

?>