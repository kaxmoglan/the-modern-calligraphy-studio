<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="The Modern Calligraphy Studio in Winchester, Hampshire, UK. Greetings cards, digitisiation, spot calligraphy, calligraphy workshops, personalised gifts, hampshire calligrapher.">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> 
  
  <title>The Modern Calligraphy Studio</title>

  <?php wp_head(); ?>
    <style>
      body {
        overflow: hidden;
      }
      #loading-screen {
      height: 100vh;
      width: 100vw;
      background-color: white;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 2000;
      opacity: 1;
      transition: all 500ms ease;
      display: flex;
      align-items: center;
      justify-content: center;
      }

      #loading-screen video {
        z-index: 2001;
        width: 450px;
        height: 450px;
        max-width: 100%;
        animation: loader-animation 3s;
      }

      #loading-screen p {
        font-size: 2rem;
      }

      #loading-screen.transition {
        opacity: 0;
      }

      #loading-screen.finished-loading {
        display: none !important;
      }

      @keyframes loader-animation {
        0% {opacity: 0; transform: scale(0.9);}
        50% {opacity: 1;}
        100% {transform: scale(1)}
      }
  </style>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-BFWHLKZXXF"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-BFWHLKZXXF');
  </script>
</head>

<body <?php body_class(); ?>>

  <div id="loading-screen">
    <video autoplay muted height="512" width='512'>
      <source src="<?php bloginfo('stylesheet_directory');?>/images/loader.mp4" />
      <img src="<?php bloginfo('stylesheet_directory');?>/images/logo.jpg" />
    </video>
  </div>

  <div id="header-container" class="main-width container-fluid">
    <div id="top-bar" class="container-fluid d-flex align-items-center justify-content-between">

      <!-- SOCIAL ICONS -->
      <div class="contact__social d-flex justify-content-center">
        <a href="https://www.etsy.com/uk/shop/ModernCalligraphyUK" target="_blank">
          <i class="fab fa-etsy"></i>
        </a>
        <a href="https://www.instagram.com/themoderncalligraphystudio/" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.facebook.com/TheModernCalligraphyStudio" target="_blank">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.tiktok.com/@moderncalligraphystudio" target="_blank">
          <i class="fab fa-tiktok"></i>
        </a>
        <a href="https://www.youtube.com/channel/UCsd52TO2ulxO6ILzW8RrcPw" target="_blank">
          <i class="fab fa-youtube"></i>
        </a>
        <a href="https://www.pinterest.co.uk/themoderncalligraphystudio/" target="_blank">
          <i class="fab fa-pinterest-p"></i>
        </a>		
      </div>

      <!-- RIGHT SIDE ICONS -->
      <ul class="shop-icons d-flex">
        <li id="search-btn">
          <i class="fas fa-search"></i>
        </li>
        <li>
          <a href="/basket">
            <i class="fas fa-shopping-basket"></i>
          </a>
       </li>
        <li>
          <a href="/my-account">
            <i class="far fa-user"></i>
          </a>  
        
        </li>
        
      </ul>

      <!-- SEARCH BOX POP UP -->
      <div class="search-pop-up">
      <form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
          <label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'woocommerce' ); ?></label>
          <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>" />
          <button type="submit"><i class="fas fa-search"></i></button>
          <input type="hidden" name="post_type" value="product" />
          <input type="hidden" name="type_aws" value="true">
        </form>
         
       
      </div>
    </div>

    <header id="header" class="container-md">
      <div id="logo-container" class="row container-fluid justify-content-center">
        <a href="/" class="text-center col-sm-5">
          <img alt="" src="<?php header_image(); ?>" class="img-fluid">
        </a>
      </div>

      <div class="row">
        <nav id="desktop-nav" class="main-nav container-fluid align-items-center justify-content-center">
          <?php 
            wp_nav_menu(
              array(
                'theme_location' => "main-menu",
              )
            ) 
          ?>
        </nav>

        <nav id="mobile-nav" class="main-nav container-fluid align-items-center justify-content-center">
          <div id="mobile-menu-btn">
            <div class="hamburger-container">
              <div id="hamburger" class="hamburger"></div>
            </div>
            <p id="mobile-menu-btn__text">MENU</p>
          </div>
          <div id="mobile-menu-container">
            <?php 
              wp_nav_menu(
                array(
                  'theme_location' => "main-menu",
                )
              ) 
            ?>
          </div>
        </nav>
      </div>
    </header>
  </div>