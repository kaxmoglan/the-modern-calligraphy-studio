<?php get_header(); ?>

<div id="wholesale-page" class="container mb-5">
    <div class="row mt-5">
        <h1 class="text-center">WHOLESALE</h1>
    </div>
    <div class="row mt-5 justify-content-center">

        <div class="col-xl-5 col-md-6 order-md-2 position-relative d-flex align-items-center justify-content-center log-in">
            
            <div class="log-in__content text-center">
                <?php
                    if ( !is_user_logged_in() ) { // Display WordPress login form:
                        $args = array(
                            'redirect' => '/about', 
                            'form_id' => 'loginform-custom',
                            'label_username' => __( 'Username' ),
                            'label_password' => __( 'Password' ),
                            'label_remember' => __( 'Remember Me' ),
                            'label_log_in' => __( 'Log In' ),
                            'remember' => true
                        );
                ?>
                    <h2 class="fs-5 mb-4">SIGN IN</h2>
                <?php
                    wp_login_form( $args );
                        

                    } else { // If logged in:
                ?>
                        <p class="fs-5 mb-0">You are currently logged in as</p>
                        <p class="fs-3 mb-5"><?php echo $current_user->display_name;?></p>
                <?php
                        wp_loginout( home_url() ); // Display "Log Out" link.
                        
                    }
                ?>
            </div>

            <div class="login__border-top"></div>
            <div class="login__border-right"></div>
            <div class="login__border-bottom"></div>
            <div class="login__border-left"></div>

        </div>

        <div class="col-xl-5 col-md-6 order-md-1 position-relative bg-light-grey sign-up f-flex align-items-center">
            <div class="sign-up__content text-center my-4 p-5">
                <h2 class="fs-5 px-0">WANT TO BECOME A STOCKIST?</h2>
                <p class="my-5 px-3">If you would like to apply to become a stockist, please click the button below and fill out our form, or <a id="drop-email" href="mailto:themoderncalligraphystudio@gmail.com">drop us an email</a> to tell us about your business!</p>
                <a href="/contact" id="apply-now" class="btn btn-dark">APPLY NOW</a>
            </div>

            <div class="sign-up__border-top"></div>
            <div class="sign-up__border-right"></div>
            <div class="sign-up__border-bottom"></div>
            <div class="sign-up__border-left"></div>

            <figure class="flourish wp-block-image size-large"><img src="http://themoderncalligraphystudio.local/wp-content/uploads/2020/11/Asset-4.svg" alt="" class="img-fluid wp-image-114"></figure>
            <figure class="flourish wp-block-image size-large"><img src="http://themoderncalligraphystudio.local/wp-content/uploads/2020/11/Asset-4.svg" alt="" class="img-fluid wp-image-114"></figure>
            
        </div>

    </div>
</div>

<?php get_footer(); ?>