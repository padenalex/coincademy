<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/combine/npm/purecss@1.0.0/build/base-min.css,npm/purecss@1.0.0/build/grids-min.css,npm/purecss@1.0.0/build/grids-responsive-min.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php echo body_class(); ?>>
		<div class="auth-holder" id="auth-holder-id">
            <div class="background-layer" id="background-layer"></div>
            <div class="auth-form-holder active" id="login-holder">
            	<?php echo do_shortcode('[lifterlms_login layout="columns" redirect="'.'esc_url( $redirect )'.'"]'); ?>
            </div>
            <div class="auth-form-holder" id="registration-holder">
            	<?php get_template_part('auth', 'register'); ?>
            </div>
		</div>
	
        <nav class="top-navigation <?php if (is_course()) { echo "white-nav"; echo " ".strtolower(wp_get_object_terms($post->ID, 'course_cat')[0]->name);} ?>" id="top-nav" role="navigation">
        	<div class="max-width-menu vmid">
            	<div class="pure-u-1 pure-u-lg-1-5 pure-u-md-1-3">
                	<a class="logo" href="<?php echo home_url(); ?>"><span class="logo-img"></span></a>
                	<button class="menu-toggle" onclick="toggleDisplay();" style="margin-left: auto;">---</button>
                </div>
                <div class="pure-u-1 pure-u-lg-3-5 pure-u-md-3-5">
                	<?php cc_header_menu(); ?>
                </div>
                <div class="pure-u-1 pure-u-lg-1-5 pure-u-md-1-3 login-holder">
                <?php
                if (!is_user_logged_in()) {  
                ?>
                
                	<button id="login-button" class="login-btn">Login</button>
                    <button id="signup-button" class="green-btn">SIGN UP</button>
                    
                <?php } else {  ?>
                    
                    <a class="login-btn" href="<?php echo wp_logout_url( esc_url( get_permalink() ) ); ?>" title="Log out of this accounts">Logout</a>    
                    <a class="green-btn" href="<?php echo home_url();?>/my-dashboard">DASHBOARD</a>      
                    <?php 
                }
                ?>
                    
                </div>
			</div>
        </nav>
