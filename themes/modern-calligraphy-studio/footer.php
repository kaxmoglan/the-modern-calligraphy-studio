<footer>
  <?php
    if(is_active_sidebar( 'footer' )) {
      dynamic_sidebar( 'footer' );
    };
  ?>

  <div class="container">
    <div class="row">
      
      <div class="col-md-4 links">
        <h4>
          LINKS
        </h4>
        <div class="links__content d-flex flex-column">
          <a href="#" data-toggle="modal" data-target="#suggestionsBox">SUGGESTIONS BOX</a>
          <a href="#">PRIVACY POLICY</a>
          <a href="#">TERMS & CONDITIONS</a>
          <a href="#">RETURNS POLICY</a>
          <a href="#">SHIPPING</a>		
        </div>
      </div>
      
      <div class="col-md-4 contact">
        <h4>
          CONTACT
        </h4>
        <div class="contact__social d-flex justify-content-center">
          <a href="#">
            <i class="fab fa-etsy"></i>
          </a>
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#">
            <i class="fab fa-tiktok"></i>
          </a>
          <a href="#">
            <i class="fab fa-youtube"></i>
          </a>
          <a href="#">
            <i class="fab fa-pinterest-p"></i>
          </a>		
        </div>
        <hr/>
        <div class="contact__email">
          <a href="#" class="d-flex justify-content-center align-items-center">
            <i class="far fa-envelope"></i>
            <p>
              EMAIL US
            </p>
          </a>
        </div>
      </div>
      
      <div class="col-md-4 subscribe">
        <h4>
          SUBSCRIBE
        </h4>
        <form class="d-flex flex-column align-items-center">
          <input type="text" placeholder="NAME" id="name">
          <input type="email" placeholder="EMAIL" id="email">
          <button type="submit" class="btn btn-dark">
            SIGN UP
          </button>
        </form>
      </div>
    </div>
  </div>

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

<!-- Modal -->
<div class="modal fade" id="suggestionsBox" tabindex="-1" role="dialog" aria-labelledby="suggestionsBoxLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="suggestionsBoxLabel">SUGGESTIONS BOX</h5>
        <button type="button" id="suggestionsBox__close" class="close btn" data-dismiss="modal" aria-label="Close">
          <span id="suggestionsBox__close-x" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="dflex align-items-center justify-content-center">
          <i class="fas fa-box-open d-flex align-items-center justify-content-center"></i>
          <p class="looking-for">Didn't find what you were looking for?  We're always happy to receive suggestions for new design ideas!</p>
          <?php echo do_shortcode('[contact-form-7 id="239" title="Suggestions Box"]'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>