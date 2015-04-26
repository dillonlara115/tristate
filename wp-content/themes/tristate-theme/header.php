<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package tristate
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Coustard' rel='stylesheet' type='text/css'>
<link href="<?php bloginfo('template_url'); ?>/sass/jquery.sidr.dark.css" rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'tristate-theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="navigation-wrapper">
			<div class="logo">
				<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/5th_annual_logo.png" /></a>
			</div><!-- .site-branding -->
			<nav id="site-navigation" role="navigation">
				
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'navigation-menu show desktop-nav' ) ); ?>
			<a id="simple-menu" href="#sidr">&#8801;</a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'navigation-menu show', 'container_id' => 'sidr'  ) ); ?>
	
			</nav><!-- #site-navigation -->
			

		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content  container">
