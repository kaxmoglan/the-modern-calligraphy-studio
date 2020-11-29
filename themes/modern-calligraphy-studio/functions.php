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

  // FOR DEVELOPMENT PURPOSES ONLY
  // add_filter( 'wpcf7_validate_configuration', '__return_false' );

// DECLARE WOOCOMMERCE SUPPORT
function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce', array(
      'thumbnail_image_width' => 150,
      'single_image_width'    => 300,

      'product_grid'          => array(
          'default_rows'    => 3,
          'min_rows'        => 2,
          'max_rows'        => 8,
          'default_columns' => 4,
          'min_columns'     => 2,
          'max_columns'     => 5,
      ),
  ) );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

// LET'S BRITISH THIS STORE UP YEH?
add_filter('gettext', 
		   
		   function ($translated_text, $text, $domain) {

			if ($domain == 'woocommerce') {
				switch ($translated_text) {
					case 'Cart totals':
						$translated_text = __('Order summary', 'woocommerce');
						break;
					case 'Update cart':
						$translated_text = __('Update basket', 'woocommerce');
						break;
					case 'Add to cart':
						$translated_text = __('Add to basket', 'woocommerce');
						break;
					case 'View cart':
						$translated_text = __('View basket', 'woocommerce');
						break;
				}
			}

			return $translated_text;

		}, 
20, 3);

/**
 * Replace the home link URL
 */
add_filter( 'woocommerce_breadcrumb_home_url', 'woo_custom_breadrumb_home_url' );
function woo_custom_breadrumb_home_url() {
    return '/shop';
}