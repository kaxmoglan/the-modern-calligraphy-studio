<?php 

  /*
    Template Name: WooCommerce Template
  */

  get_header(); 

?>

<div id="nav-padding"></div>

<div id="woocommerce-page-template">
  <div class="container mt-3">
    <?php
        $args = array(
            'delimiter' => ' > ',
            
        );
      ?>
      <?php woocommerce_breadcrumb( $args ); ?>
    <?php the_content(); ?>
  </div>
  
</div>

<?php get_footer(); ?>