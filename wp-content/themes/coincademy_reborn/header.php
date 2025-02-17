<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111472825-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-111472825-1');
        </script>
        
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

        <nav class="top-navigation <?php if (is_course()) { echo "white-nav"; echo " ".strtolower(wp_get_object_terms($post->ID, 'course_cat')[0]->name);} ?>" id="top-nav" role="navigation">
        	<div class="max-width-menu vmid">
            	<div class="pure-u-1 pure-u-lg-1-5 pure-u-md-1-5">
                	<a class="logo" href="<?php echo home_url(); ?>"><span class="logo-img"></span></a>
                    <button class="menu-toggle" onclick="toggleDisplay();" style="margin-left: auto;">MENU<svg fill="#029cf2" height="15px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg></button>
                	<button class="menu-toggle" onclick="toggleDisplay();" style="margin-left: auto;"></button>
                </div>
                <div class="pure-u-1 pure-u-lg-3-5 pure-u-md-3-5">
                	<?php cc_header_menu(); ?>
                </div>
                <div class="pure-u-1 pure-u-lg-1-5 pure-u-md-1-5 login-holder">
                <?php
                if (!is_user_logged_in()) {  
                ?>
                
                    <a id="signup-button" class="green-btn" href="<?php echo home_url();?>/dashboard/">SIGN UP</a>
                    <a id="login-button" class="login-btn" href="<?php echo home_url();?>/dashboard/">Login</a>
                    
                <?php } else {  ?>
                    
                    
                    <a class="green-btn" href="<?php echo home_url();?>/dashboard/">DASHBOARD</a>      
                    <a class="login-btn" href="<?php echo wp_logout_url( esc_url( get_permalink() ) ); ?>" title="Log out of this accounts">Logout</a>    
                    <?php 
                }
                ?>
                    
                </div>
			</div>
        </nav>
