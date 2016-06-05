<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link href='https://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header class="clearfix">
<div class="headerImage">
 <a href="<?php echo home_url(); ?>" class="homeLink">
 <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lindsayLogo.png" alt="">
 </a>
</div>

<div class="headerNav">
  <ul>
    <li><a href="http://www.lindsayguscott.com/work/" id="workLink">DEVELOP</a></li>
    <li>|</li    
    <li><a href="http://www.lindsayguscott.com/work/" id="workLink">STYLE</a></li>
    <li>|</li>
    <li><a href="http://www.lindsayguscott.com/about/" id="aboutLink">ABOUT</a></li>
  </ul>
</div>
</header><!--/.header-->



