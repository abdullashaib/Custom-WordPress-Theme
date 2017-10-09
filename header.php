<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 *
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body>

<?php $postid = get_the_ID(); //echo $postid?>

<!-- Navigation -->
<div class="container">

<?php if($postid == '4') {?>
<section class="top-header">
  <div class="row">
    <div class="col-xs-2">
      <a href="http://mcgltdtz.com/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/millenium-consulting-logo-small.jpg" /> </a> 
    </div>
    <div class="col-xs-10 margin-left">
       <?php get_search_form();?>
    </div>
  </div>
</section>

<section class="home-banner">
  <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/top-banner.png" />  
</section>

<?php } else { ?>

<section class="top-header-mobile">
  <div class="row">
    <div class="col-xs-2">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/mecc-consultancy-big.jpg" />  
    </div>
    <div class="col-xs-10 margin-left">
       <?php get_search_form();?>
    </div>
  </div>
</section>

<?php }  ?>
<section class="menu-wrap">
  <nav class="navbar navbar-default" role="navigation">    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
      
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'navbarCollapse', 'menu_class' => 'nav navbar-nav' ) ); ?>
        <!-- 
        <li><a class="menu" href="<?php echo get_page_link(4); ?>">Home</a></li>
        <li><a class="menu" href="<?php echo get_page_link(6); ?>">About MCG</a></li>
        <li><a class="menu" href="<?php echo get_page_link(8); ?>">Services</a></li>
        <li><a class="menu" href="<?php echo get_page_link(10); ?>">Projects</a></li>
        <li><a class="menu" href="<?php echo get_page_link(12); ?>">Our Team</a></li>
        <li><a class="menu" href="<?php echo get_page_link(14); ?>">Contact Us</a></li>
        <ul class="nav navbar-nav">   </ul>
        -->
      
    
  </nav>
</section> <!-- menu-wrap -->







