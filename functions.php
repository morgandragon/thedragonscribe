<?php

  function thedragonscribe_register_styles() {
    wp_enqueue_style('thedragonscribe_css', get_template_directory_uri() . "/style.css", [], '1.0', 'all');
  }

  add_action('wp_enqueue_scripts', 'thedragonscribe_register_styles');

?>