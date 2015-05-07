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
				<span class="blip"></span>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'navigation-menu show desktop-nav' ) ); ?>
			<a id="simple-menu" href="#sidr">&#8801;</a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'navigation-menu show', 'container_id' => 'sidr'  ) ); ?>
	
			</nav><!-- #site-navigation -->
			

		</div>
	</header><!-- #masthead -->
	<?php if( is_front_page()){ ?>
	
	<div class="cover-image">
		<div class="container">
		    <div class="cta-item">
		    	<span>Join Us For The</span>
				<h3>2015 Tri-State Sign Expo</h3>
				<span class="lines">August 6-8, 2015 in Joplin, MO</span>
				<span><img src="<?php bloginfo('url'); ?>/wp-content/uploads/downstream-logo-white.png" /></span>
		    </div>
		    <a href="" class="home-register">Register</a>
		</div>
	</div>
    <?php } else { ?>
        <?php if (has_post_thumbnail() ) { ?>
            <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <div class="cover-image cover-image-sub" style="background: url(<?php echo $feat_image ?>) no-repeat center center;background-size: cover;background-position-y: center;">
        <?php } else { ?>
            <div class="cover-image cover-image-sub">
        <?php } ?>
            <div class="cta-container text-center">
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    <?php } ?>

	<div id="content" class="site-content  container">
