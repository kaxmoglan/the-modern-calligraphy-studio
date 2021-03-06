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
        'thumbnail_image_width' => 512,
        'single_image_width'    => 1024,

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

  // WOOCOMMERCE PRODUCT GALLERY THUMBNAIL SIZES
  add_filter( 'woocommerce_get_image_size_gallery_thumbnail', 'cg_woocommerce_image_size_gallery_thumbnail', 99 );
  function cg_woocommerce_image_size_gallery_thumbnail( $size ) {
    return array(
        'width'  => 512,
        'height' => 512,
        'crop'   => 0,
    );
  }

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
              case 'Your cart is currently empty.':
                $translated_text = __('Your basket is currently empty.', 'woocommerce');
                break;
              case 'Add to cart':
                $translated_text = __('Add to basket', 'woocommerce');
                break;
              case 'Cart updated.':
                $translated_text = __('Basket updated.', 'woocommerce');
                break;
              case 'View cart':
                $translated_text = __('View basket', 'woocommerce');
                break;
            }
          }

        return $translated_text;

      }, 
  20, 3);

  // ADD TO CART MESSAGE
  add_filter( 'wc_add_to_cart_message_html', 'custom_add_to_cart_message' ); 
  function custom_add_to_cart_message() {
    $message = 'Item added to basket. <a href="/basket"><i class="fas fa-shopping-basket"></i></a>' ;
    return $message;
  }

  // REPLACE BREADCRUMB HOME LINK TO /SHOP
  add_filter( 'woocommerce_breadcrumb_home_url', 'woo_custom_breadrumb_home_url' );
  function woo_custom_breadrumb_home_url() {
      return '/shop';
  }

  // CHANGE BREADCRUMB HOME TEXT
  add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_home_text' );
  function wcc_change_breadcrumb_home_text( $defaults ) {
    $defaults['home'] = 'shop home';
    return $defaults;
  }

  
  // REMOVE 'DISMISS' FROM STORE NOTICE
add_filter('woocommerce_demo_store', 'removeDismissMessageFromStoreBanner', 2, 99);

function removeDismissMessageFromStoreBanner($notice_with_dismiss_message, $notice_without_dismiss_message) {
	echo '<p class="woocommerce-store-notice demo_store">' . wp_kses_post( $notice_without_dismiss_message ) . '</p>';
}

// STOP REDIRECT ON LOGIN ERROR ON WHOLESALE PAGE
function login_failed() {
  $login_page  = home_url( '/wholesale/' );
  wp_redirect( $login_page . '?login=failed' );
  exit;
}
add_action( 'wp_login_failed', 'login_failed' );
 
function verify_username_password( $user, $username, $password ) {
  $login_page  = home_url( '/wholesale/' );
    if( $username == "" || $password == "" ) {
        wp_redirect( $login_page . "?login=empty" );
        exit;
    }
}
add_filter( 'authenticate', 'verify_username_password', 1, 3);