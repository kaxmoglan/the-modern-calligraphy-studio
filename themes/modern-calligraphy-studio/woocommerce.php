<?php get_header(); ?>

<div id="nav-padding"></div>

<div id="woocommerce-page-template">
  <div class="container mt-3">
    
    <?php
      $args = array(
          'delimiter' => ' > ',
          
      );
    ?>
    <?php woocommerce_breadcrumb( $args ); ?>

    <?php woocommerce_content(); ?>
  </div>

</div>

<div id="suggestion-container" class="d-flex align-items-center justify-content-center mb-3 fs-6">
    <a href="#" data-toggle="modal" data-target="#suggestionsBox">Can't find what you're looking for?</a>
</div>

<?php get_footer(); ?>