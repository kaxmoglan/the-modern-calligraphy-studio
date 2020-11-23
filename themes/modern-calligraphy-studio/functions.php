<?php

  // ENQUEUES 

  function load_stylesheets() {
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all');
    wp_enqueue_style('custom');
  }

  add_action('wp_enqueue_scripts', 'load_stylesheets');

  function load_javascript() {
    wp_register_script('custom', get_template_directory_uri() . '/app.js', '', 1, true);
    wp_enqueue_script('custom');
  }

  add_action('wp_enqueue_scripts', 'load_javascript');



  // THEME SUPPORT
  add_theme_support( 'custom-header' );
  add_theme_support('menus');
  add_theme_support('widgets');

  // REGISTER MENUS
  register_nav_menus(
    array(
      'main-menu' => 'Main Menu',
    )
  );

  // REGISTER SIDEBARS
  function my_widgets() {
    register_sidebar(
      array(
        'name' => 'Footer',
        'id' => 'footer'
      )
    );
  }

  add_action('widgets_init', 'my_widgets');