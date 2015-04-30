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
<!-- 		<div class="side-image">
  <div class="images-wrapper"></div>
    <div class="side-image-content">
      <h4>Topic Name</h4>
      <h1>Message with a gradient image</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam assumenda nihil suscipit obcaecati sit, cum quod corporis adipisci ipsam, fugiat, quae error. Eaque commodi, dicta quidem explicabo mollitia inventore quibusdam.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam assumenda nihil suscipit obcaecati sit, cum quod corporis adipisci ipsam, fugiat, quae error. Eaque commodi, dicta quidem explicabo mollitia inventore quibusdam.</p>
      <button>Read more</button>
    </div>
  </div> -->



  <ul class="bullets">
  <li class="bullet">
    <div class="bullet-icon bullet-icon-1">
      <i class="fa fa-2x fa-star"></i>    
    </div>
    <div class="bullet-content">
      <h2>Tradeshow</h2>
      <strong>Premier Tradeshow</strong>  
      <ul>
        <li>New! Expanded Tradeshow. Two exhibits halls with over 14,000 square feet of display space.</li>
        <li>Find the latest advancements in materials and sign technology.  </li>
        <li>Meet with the leading suppliers in the sign industry.</li>
      </ul>
      </div>
  </li>  
  <li class="bullet">
    <div class="bullet-icon bullet-icon-2">
      <i class="fa fa-2x fa-graduation-cap"></i>
    </div>
    <div class="bullet-content">
      <h2>Educational Seminars</h2>
      <strong>Premier Educational Seminars</strong>      
      <ul>
        <li>Powerful presentations covering relevant topics</li>
        <li>Learn from industry experts</li>
        <li>Find out how to be successful in today’s challenging business.</li>
      </ul>
      <a href="index.php?page_id=40" class="link" data-hover="Learn more">learn more</a>
    </div>
  </li>
  <li class="bullet">
    <div class="bullet-icon bullet-icon-3">
      <i class="fa fa-2x fa-users"></i>
    </div>
    <div class="bullet-content">
      <h2>Networking</h2>
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
