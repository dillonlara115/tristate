<?php
/**
 * The template for displaying all pages.
 *Template Name: Event page template
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
<header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->
  <?php the_content(); ?>
  <div class="grid-items">
  <?php 
$args = array( 'post_type' => 'event', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="grid-item event-grid-item">
      <?php 

      $image = get_field('image');

      if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

      <?php endif; ?>

        <h2><?php the_title(); ?></h2>
        <div class="entry-content">
          <?php the_field('seminar_description'); ?><br>
          <strong>Time: </strong><?php the_field('time_of_seminar'); ?>
        </div>
  </div>
  <?php endwhile; ?>
</div>


	</div><!-- #primary -->


<?php get_footer(); ?>