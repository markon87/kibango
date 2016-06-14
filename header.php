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

		<!-- <div class="container navigation-container">
			<div class="header-logo col-xs-2"><a href="http://localhost/wordpress/en/home-page"><img src="http://localhost/wordpress/wp-content/themes/kibango/images/kibango-logo.png"></a></div>
			<i class="fa fa-bars" aria-hidden="true"></i>
			<div class="overlay"></div>
			<div class="menu-main-navigation-container col-md-10"><ul id="menu-main-navigation" class="menu"><li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a href="http://localhost/wordpress/en/news/">News</a></li>
<li id="menu-item-145" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-145"><a href="en/about-us.html">About us</a></li>
<li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62"><a href="http://localhost/wordpress/en/about-breed/">About breed</a></li>
<li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-61"><a href="http://localhost/wordpress/en/our-dogs/">Our dogs</a></li>
<li id="menu-item-60" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-60"><a href="http://localhost/wordpress/en/gallery/">Gallery</a></li>
<li id="menu-item-59" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-59"><a href="http://localhost/wordpress/en/shows/">Shows</a></li>
<li id="menu-item-159" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-52 current_page_item menu-item-159"><a href="http://localhost/wordpress/en/contact/">Contact</a></li>
<li id="menu-item-57" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-57"><a href="http://localhost/wordpress/en/our-friendsassociates/">Our friends/associates</a></li>
</ul></div>
	</div> -->


	</header>