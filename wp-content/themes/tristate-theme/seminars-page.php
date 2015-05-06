<?php
/**
 * The template for displaying all pages.
 *Template Name: Seminars page template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package tristate
 */

get_header(); ?>

	<div id="primary" class="content-area entry-content">

  <?php the_content(); ?>

<div class="cards">
    <?php 
$args = array( 'post_type' => 'event', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <div class="card">

    <div class="card-header">
      <?php the_field('seminar_title'); ?>
    </div>
    <div class="card-copy">
      <p><strong>Speaker:</strong> <?php the_field('seminar_speaker'); ?></p>
          <?php the_field('seminar_description'); ?><br>
          <strong>Time: </strong><?php the_field('time_of_seminar'); ?>
    </div>
  </div>
  <?php endwhile; ?>

</div>


	</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
