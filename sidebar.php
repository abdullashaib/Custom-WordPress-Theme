<?php
/**
 * The template for the sidebar containing the main widget area
 */
?>
<div class="rightside">
  <div class="rightside_header">
    <p><span class="arrow-right"></span><span id="rightside-title">Recent Projects</span> </p>
  </div>
  <div class="right_content">
  
    <?php $the_query = new WP_Query( array( 'showposts'=>30,'cat' => 2 )); ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    
    <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>    
    <?php //the_excerpt(__('(more�)')); ?>
                         
    <?php endwhile;?>
    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
      
    			
    <?php endwhile; ?>
  
  </div>

</div>
