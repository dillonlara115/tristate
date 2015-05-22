<?php
/**
 * The template for displaying all pages.
 *Template Name: Payment Page
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
<?php  $itemAmt = str_replace(array('$', '%'), '', $_GET['total']); ?>

	<form action="http://tristatesignexpo.com/wp-content/themes/tristate-theme/payment.php" method="post">
	<p>Payment Amount Due: <?php echo $itemAmt ?></p>
	<input name="x_amount" value="<?php echo $itemAmt ?>" type="hidden">
	<input type="submit" value="Pay Now">

</form>
	</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
