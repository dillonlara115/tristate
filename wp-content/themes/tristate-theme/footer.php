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
    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/foot_logo.jpg" />
  </div>
  <div class="footer-links">
    <ul>
      <li><h3>Content</h3></li>
      <li><?php wp_nav_menu( array('menu' => 'footer menu' )); ?>
</li>
    </ul>
    <ul>
      <li><h3>Follow Us</h3></li>
      <li><a href="https://www.facebook.com/tristatesignexpo" target="_blank">Facebook</a></li>
      <li><a href="https://twitter.com/tristatesign" target="_blank">Twitter</a></li>
      <li><a href="https://www.linkedin.com/company/tri-state-sign-association?trk=biz-companies-cym" target="_blank">Linkedin</a></li>
    </ul>
  </div>
  
  <hr>
  
  <p>&#169; <?php echo date('Y'); ?> Tri-State Sign Expo. All Rights Reserved. Website Designed by <a href="http://ventamarketing.com/" rel="designer">Venta Marketing</a></p>
</footer>

</div><!-- #page -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.sidr.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
<?php wp_footer(); ?>

</body>
</html>
