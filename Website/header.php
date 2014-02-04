<!DOCTYPE html>
<html>
<head>
  <title><?php echo get_bloginfo('title'); ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/homepage.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/ae0e63e9-c5cf-4919-a2b1-2fdf7c96485b.css"/>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/functions.js"></script>
</head>
<body>
 <div class="header">
   <div class="container">
    <a href="#"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /></a>
    <div class="nav">
      <?php wp_nav_menu( array('menu' => 'Home Menu' )); ?>
    </div>
  </div>
</div>