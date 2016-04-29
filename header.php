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
		<div class="container">
			<div class="header-logo col-sm-4"><a href="/home"><img src="<?php echo get_template_directory_uri() . '/images/kibango-logo.png'?>"></a></div>
			<?php wp_nav_menu(array('theme_location'=> 'primary', 'container_class' => 'menu-main-navigation-container col-sm-8')); ?>
		</div>
	</header>