<?php
/**
 * The template for displaying the footer
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 *
 */
  $year = date('Y');
?>

<!-- Footer -->
<section class="footer"></section>
<section class="footer-content">
  <div class="container footer-wrapper">
    <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
    <p>&nbsp;</p>
    <p> &copy;  Copyright <?php echo $year ?>  mcgltdtz.com. All Rights Reserved. </p>
  </div>
</section>    
</div> <!-- container -->

</body>
</html>