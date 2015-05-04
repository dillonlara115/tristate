<?php
/**
 * The template for displaying all pages.
 *Template Name:: home page template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package tristate
 */

get_header(); ?>

	<div id="primary" class="content-area">
  <ul class="bullets">
    <li class="bullet">
      <div class="bullet-content">
        <h2> <i class="fa fa-star"></i> Tradeshow</h2>
        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/downstream.jpg">
        <strong>Premier Tradeshow</strong>  
        <ul>
          <li>New! Expanded Tradeshow. Two exhibits halls with over 14,000 square feet of display space.</li>
          <li>Find the latest advancements in materials and sign technology.  </li>
          <li>Meet with the leading suppliers in the sign industry.</li>
        </ul>
      </div>
  </li>  
  <li class="bullet">
    <div class="bullet-content">
      <h2><i class="fa fa-graduation-cap"></i> Seminars</h2>
      <img src="<?php bloginfo('url'); ?>/wp-content/uploads/downstream.jpg">
      <strong>Premier Educational Seminars</strong>      
      <ul>
        <li>Powerful presentations covering relevant topics</li>
        <li>Learn from industry experts</li>
        <li>Find out how to be successful in today’s challenging business.</li>
      </ul>
      <a href="index.php?page_id=40" class="see-more-link" >see more</a>
    </div>
  </li>
  <li class="bullet">
    <div class="bullet-content">
      <h2><i class="fa fa-users"></i> Networking</h2>
      <img src="<?php bloginfo('url'); ?>/wp-content/uploads/downstream.jpg">
      <strong>Premier Educational Seminars</strong>
      <p>Tradeshow, Seminars, Social and Recreational Activities.</p>
      <ul>
        <li>Meet and talk with the suppliers and sign company attendees.</li>
        <li> Learn from others how they pursue new opportunities and use best </li>
      </ul>
    </div>
  </li> 
</ul>

</div><!-- #primary -->


<?php get_footer(); ?>
