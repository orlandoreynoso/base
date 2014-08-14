<!DOCTYPE html>
<!-- html lang="es" -->
<html <?php language_attributes( ); ?>>
<head>
	<meta charset = "<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, minimum-scale = 1, maximum-scale=1" />

	<title><?php bloginfo('name' ); ?>| <?php wp_title(); ?></title>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_uri' );  ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



	<link rel="shortcut icon"          href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" />
	<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/estilo.css" />
	<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" />
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.40951.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/prefixfree.min.js"></script>


<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/scripts/nivo-slider.css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/scripts/themes/default/default.css" type="text/css" media="screen" />

	 <?php wp_head(); ?>

	
		<script type='text/javascript'>
		$(document).ready(function() {
		 $("#menu ul").css({display: "none"});
		 $("#menu li").hover(function(){
		 $(this).find('ul:first').css({visibility: "visible",display: "none"}).show(300);
		 },function(){
		 $(this).find('ul:first').css({visibility: "hidden"});
		 });
		});
		</script>

</head>
<body>


<div id="content-wrapper">

<header id="header" class="">

<div id="logo">
	<a href="<?php bloginfo('site_url');  ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" /></a>

</div><!-- end of logo -->

<?php wp_nav_menu(
 array(
 'container' => false,
 'items_wrap' => '<ul id="menu-top">%3$s</ul>',
 'theme_location' => 'menu-top'
 )); ?>

 <?php wp_nav_menu(
 array(
 'container' => false,
 'items_wrap' => '<ul id="menu">%3$s</ul>',
 'theme_location'=> 'menu',
 )); ?>	


</header><!-- /header -->

<div class="content-wrapper">
<section>
	
