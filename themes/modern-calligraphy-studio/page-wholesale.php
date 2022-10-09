<?php get_header(); ?>

<?php 
    // CHECK IF $LOGIN CONTAINS VALUE. IF NOT, $LOGIN = 0
    $login  = (isset($_GET['login']) ) ? $_GET['login'] : 0; 
?>

<div id="nav-padding"></div>

<div id="wholesale-page" class="container mb-5">
    <div class="row mt-5">
        <h1 class="text-center">WHOLESALE</h1>
    </div>
    <?php if ( $login !== 0 ) { ?>
        <div class="login-msg__container row py-2 mt-3">
            <p class="login-msg text-center"><strong class="error">ERROR: </strong>
                <?php
                    // SHOW ERRORS BASED ON VALUE OF ERROR
                    if ( $login === "failed" ) {
                        echo 'INVALID USERNAME OR PASSWORD.';
                    } elseif ( $login === "empty" ) {
                        echo 'USERNAME OR PASSWORD EMPTY.';
                    } elseif ( $login === "false" ) {
                        echo 'YOU ARE NOT CURRENTLY LOGGED IN.';
                    }
                ?>
            </p>
        </div>
    <?php } ?>
    
    <div class="row mt-5 justify-content-center">
				<div class="col-xl-5 col-md-6 order-2 position-relative">
					<iframe src="https://www.faire.com/embed/bw_6bckzzvxm4" width="500" height="700" scrolling="no" style="margin:0 auto;border:none;display:block;max-width:100%;width:500px;height:700px;"></iframe>
				</div>
        <div class="col-xl-5 col-md-6 order-1 position-relative bg-light-grey sign-up f-flex align-items-center">
					<div class="d-flex h-100 align-items-center justify-content-center">
            <div class="sign-up__content text-center my-4 p-5">
							                <?php
                    if ( !is_user_logged_in() ) { // Display WordPress login form:
                        $args = array(
                            'redirect' => '/shop', 
                            'form_id' => 'loginform-custom',
                            'label_username' => __( 'Username' ),
                            'label_password' => __( 'Password' ),
                            'label_remember' => __( 'Remember Me' ),
                            'label_log_in' => __( 'Log In' ),
                            'remember' => true
                        );
                ?>
                    <h2 class="fs-5 mb-0">SIGN IN</h2>
                <?php
                    wp_login_form( $args );
                        

                    } else { // If logged in:
                ?>
                        <p class="fs-5 mb-0">You are currently logged in as</p>
                        <p class="username fs-3">@<?php echo $current_user->display_name;?></p>
                        <hr>

                        <?php // If logged in as retail
                            $user = wp_get_current_user();
                            $wholesale_customer = array( 'wholesale_customer');
                            if ( !array_intersect( $wholesale_customer, $user->roles ) ) {
                        ?> 
                                <div class="d-flex align-items-center flex-column justify-content-center logged-in-links">
                                    <p class="mb-3 px-5">You are not currently logged in as a Wholesale Customer.</p>
                                    <div class="d-flex">
                                        <a href="/shop">Shop</a> 
                                        <p class="px-2"> | </p>
                                        <?php wp_loginout( home_url() ); // Display "Log Out" link. ?>
                                    </div>
                                </div>
                        <?php
                            } else { // If logged in as wholesale
                        ?>
                            <div class="d-flex align-items-center justify-content-center logged-in-links">
                                <a href="/shop">Trade Shop</a> 
                                <p class="px-2 my-0"> | </p>
                                <?php wp_loginout( home_url() ); // Display "Log Out" link. ?>
                            </div>
                        <?php
                            }
                        ?>
                      
                <?php } ?>


							<?php // If logged in as retail or is not logged in
								$user = wp_get_current_user();
                $wholesale_customer = array( 'wholesale_customer');
                if ( (!array_intersect( $wholesale_customer, $user->roles )) or !is_user_logged_in() ) {
              ?> 	
                	<h2 class="fs-5 px-0 mt-5">WANT TO BECOME A STOCKIST?</h2>
                	<p class="my-0 mb-3 px-3">If you would like to apply to become a stockist, please click the button below and fill out our form, or <a id="drop-email" href="mailto:themoderncalligraphystudio@gmail.com">drop us an email</a> to tell us about your business!</p>
                	<a href="/contact" id="apply-now" class="btn btn-dark">APPLY NOW</a>
								<?php } ?>
            	</div>
						</div>

            <div class="sign-up__border-top"></div>
            <div class="sign-up__border-right"></div>
            <div class="sign-up__border-bottom"></div>
            <div class="sign-up__border-left"></div>

            <figure class="flourish wp-block-image size-large"><img src="<?php bloginfo('stylesheet_directory');?>/images/flourish.svg" class="img-fluid"/></figure>
            <figure class="flourish wp-block-image size-large"><img src="<?php bloginfo('stylesheet_directory');?>/images/flourish.svg" class="img-fluid"/></figure>

            
            
            
        </div>

    </div>
</div>

<?php get_footer(); ?>
