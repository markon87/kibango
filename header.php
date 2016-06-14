<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Kibango kennel</title>
		<link rel="icon" href="../../wp-content/themes/kibango/images/favicon.ico">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<header id="top">
		<?php //include('bxslider-page.php'); ?>
		<?php include( get_template_directory() . '/bxslider-page.php'); ?>
		<div class="container navigation-container">
			<div class="header-logo col-xs-2"><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri() . '/images/kibango-logo.png'?>"></a></div>
			<i class="fa fa-bars" aria-hidden="true"></i>
			<div class="overlay"></div>
			<?php wp_nav_menu(array('theme_location'=> 'primary', 'container_class' => 'menu-main-navigation-container col-md-10')); ?>


			<?php get_sidebar(); ?>
		</div>
	</header>