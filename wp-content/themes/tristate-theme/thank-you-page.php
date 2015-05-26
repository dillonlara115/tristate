<?php
/**
 * The template for displaying all pages.
 *Template Name: Thank You Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress consdivuct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package divistate
 */

get_header(); ?>

<div id="primary" class="content-area register-page">
  
	<?php echo $post->post_content ?>
	<h2>Thank You!</h2>
	<p>Thank you for registering for the 2015 Tri-State Sign Expo Tradeshow.  Please check your email for a confirmation message.</p>
  
</div>

<?php get_footer(); ?>