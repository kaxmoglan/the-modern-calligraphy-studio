<footer>
  <?php
    if(is_active_sidebar( 'footer' )) {
      dynamic_sidebar( 'footer' );
    };
  ?>

  <div class="end-credits container-fluid">
    <div class="container-fluid">
      <div class="d-flex justify-content-md-between justify-content-center flex-column flex-md-row align-items-center">
        <div class="copyright d-flex align-items-center">
          <i class="far fa-copyright"></i> 
          <p>TheModernCalligraphyStudio<?php echo date("Y") ?></p>
        </div>
        <div class="site-design">
          <a href="#">One in a Million.</a>
        </div>
      </div>
    </div>
  </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>