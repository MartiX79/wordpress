//add cutom login on admin

function login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
            padding-bottom: 30px;
			-webkit-background-size:100%;
			background-size: 100%;
			width: 100%;
        }
		
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'login_logo' );