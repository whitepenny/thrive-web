<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,700italic,700,500,500italic%7CLato:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js" type="text/javascript"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'thrive' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo-img" src="/wp-content/themes/thrive/img/logo.png" alt="Thrive TRM"></a></h1>
			<?php else : ?>
				<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo-img" src="/wp-content/themes/thrive/img/thrive_logo.svg" alt="Thrive TRM"></a></div>
			<?php endif; ?>

			
		
			
		    <nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" id="mobile-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="menu-icon"><i class="fa fa-bars"></i></span><!--<span class="menu-text">Menu</span>--></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		    </nav><!-- #site-navigation -->
                </div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
