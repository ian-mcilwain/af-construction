<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />


  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header class="clearfix">
  <div class="container">
  <div class="logo">
    <a href="<?php $url = home_url(); echo esc_url( $url ); ?>" class="homeLink">
      <img src="<?php the_field('company_logo'); ?>" alt="">
    </a> 
  </div>
  <div class="nav">
    <ul>
        <li><a href="<?php $url = home_url(); echo esc_url( $url ); ?>">Home</a></li>
        <li><a href="<?php $url = home_url(); echo esc_url( $url ); ?>#services">services</a></li>
        <li><a href="<?php $url = home_url(); echo esc_url( $url ); ?>#ourWork">Our Work</a></li>
        <li><a href="<?php $url = home_url(); echo esc_url( $url ); ?>#clients">Clients</a></li>
        <li><a href="<?php $url = home_url(); echo esc_url( $url ); ?>#about">About</a></li>
        <li><a href="<?php $url = home_url(); echo esc_url( $url ); ?>#contactUs">Contact</a></li>
    </ul>
  </div>
  <div class="phoneNumber">
    <a href="tel:9057291077"><i class="fa fa-phone"></i> (905) 729-1077</a>
  </div>
  </div>
</header><!--/.header-->



