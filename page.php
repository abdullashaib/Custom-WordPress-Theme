<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 */

get_header(); ?>

<!-- Page Content -->
<section class="content">

      <?php
    		// Start the loop.
    		while ( have_posts() ) : the_post(); ?>
         
    			<h2><?php single_post_title(); ?></h2>
          
    			<?php 
          the_post_thumbnail();
          the_content(); 
    
    			// End of the loop.
    		endwhile;
    		?>

</section>  

<?php get_footer(); ?>
		


