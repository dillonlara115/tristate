<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package tristate
 */
?>

	</div><!-- #content -->
<footer class="footer" role="contentinfo">
  <div class="footer-logo">
    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/logo2.png" />
  </div>
  <div class="footer-links">
      <?php wp_nav_menu( array('menu' => 'footer menu' )); ?>
      <ul>
        <li><a href="https://www.facebook.com/tristatesignexpo" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/facebook.png"></a></li>
        <li><a href="https://twitter.com/tristatesign" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/twitter.png"></a></li>
        <li><a href="https://www.linkedin.com/company/tri-state-sign-association?trk=biz-companies-cym" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/linkedin.png"></a></li>
      </ul>
  </div>
  
  <p>&#169; <?php echo date('Y'); ?> Tri-State Sign Expo. All Rights Reserved. Website Designed by <a href="http://ventamarketing.com/" rel="designer">Venta Marketing</a></p>
</footer>

</div><!-- #page -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.sidr.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/min/new-custom.js"></script>
<?php wp_footer(); ?>

</body>
</html>
