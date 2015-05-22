<?php
/**
 * The template for displaying all pages.
 *Template Name: new register page template
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
  
  <a href="uploads/2014_AttendeeForm_NEW.pdf" class="register-link" target="_blank" >Download Attendee Registration Form (PDF)</a>


  

   <?php gravity_form( 2, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex ); ?>
    
  
</div>

<?php get_footer(); ?>