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

  <div class="main-width container header">
    <header class="container">
      <div id="logo-container" class="row container-fluid justify-content-center">
        <img alt="" src="<?php header_image(); ?>" class="img-fluid">
      </div>

      <div class="row">
        <nav id="main-nav" class="nav container-fluid align-items-center justify-content-center">
          <?php 
            wp_nav_menu(
              array(
                'theme_location' => "main-menu",
              )
            ) 
          ?>
        </nav>
      </div>
    </header>
  </div>
  

  <div class="main-width fake-content container-fluid">
    <div class="container">
    <p>content</p>
    <p>content</p>
    <p>content</p>
    <p>content</p>
    <p>content</p>
    <p>content</p>
    <p>content</p>
    </div>
    
  </div>