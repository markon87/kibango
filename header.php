<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Kibango kennel</title>
		<?php wp_head(); ?>
	</head>

	<body>
	<header>
		<?php //include('bxslider-page.php'); ?>
		<?php include( get_template_directory() . '/bxslider-page.php'); ?>
		<?php wp_nav_menu(array('theme_location'=> 'primary')); ?>
	</header>