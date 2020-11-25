<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> 
  
  <title>The Modern Calligraphy Studio</title>

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

  <div id="header-container" class="main-width container-fluid">
    <header id="header" class="container-md">
      <div id="logo-container" class="row container-fluid justify-content-center">
        <a href="/" class="text-center">
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