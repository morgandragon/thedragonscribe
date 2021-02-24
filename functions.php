<?php

  function thedragonscribe_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('thedragonscribe_css', get_template_directory_uri() . "/style.css", array(), $version, 'all');
  }

  add_action('wp_enqueue_scripts', 'thedragonscribe_register_styles');

?>