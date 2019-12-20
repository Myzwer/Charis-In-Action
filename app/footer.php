<?php
/**
 * The template for displaying the footer
 *
 */

?>
<script>
	jQuery(document).foundation();
</script>
		

<!-- FOOTER START -->
<div class="footer">
  <div class="contain">
  <div class="col">
    <h1>Orginization</h1>
    <ul>
      <li>Home</li>
      <li>About</li>
      <li>Gallery</li>
      <li>Blog</li>
    </ul>
  </div>
  <div class="col">
    <h1>Partners</h1>
    <ul>
      <li>Haiti</li>
      <li>Other Place</li>
    </ul>
  </div>
  <div class="col">
    <h1>Get In Touch</h1>
    <ul>
      <li>Contact us</li>
      <li>Donate</li>
    </ul>
  </div>
  <div class="col social">
    <h1>Social</h1>
    <ul>
      <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
    </ul>
  </div>
<div class="clearfix"></div>
</div>
</div>
<!-- END OF FOOTER -->





<?php wp_footer(); ?>

</body>
</html>
