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
        <h2> <i class="fa fa-star"></i> <a href="index.php?page_id=2">Tradeshow</a></h2>
        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/tradeshow-hp-bucket.jpg">
        <strong>Premier Tradeshow</strong>  
        <ul>
          <li>New! Expanded tradeshow in 18,000 square foot large pavillion</li>
          <li>Find the latest advancements in materials and sign technology.  </li>
          <li>Meet with the leading suppliers in the sign industry.</li>
        </ul>
      </div>
  </li>  
  <li class="bullet">
    <div class="bullet-content">
      <h2> <i class="fa fa-grad"></i> <a href="index.php?page_id=40" >Seminars</a></h2>
      <img src="<?php bloginfo('url'); ?>/wp-content/uploads/seminar-hp-bucket.jpg">
      <strong>Premier Educational Seminars</strong>      
      <ul>
        <li>Powerful presentations covering relevant topics</li>
        <li>Learn from industry experts</li>
        <li>Find out how to be successful in today’s challenging business.</li>
      </ul>
    </div>
  </li>
  <li class="bullet">
    <div class="bullet-content">
      <h2><i class="fa fa-users"></i> Networking</h2>
      <img src="<?php bloginfo('url'); ?>/wp-content/uploads/networking-hp-bucket.jpg">
      <strong>Tradeshow, Seminars, Social and Recreational Activities.</strong>
      
      <ul>
        <li>Meet and talk with the suppliers and sign company attendees.</li>
        <li> Learn from others how they pursue new opportunities and use best </li>
      </ul>
    </div>
  </li> 
</ul>

</div><!-- #primary -->


<?php get_footer(); ?>
