<?php 
	
function kibango_script_enqueue() {
	wp_enqueue_style('bootstrapcss', get_template_directory_uri().'/css/bootstrap.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri().'/css/kibango.css', array(), '1.0.0', 'all');

	wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs', get_template_directory_uri().'/js/main.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'kibango_script_enqueue');

function kibango_theme_setup(){
	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
}
add_action('init', 'kibango_theme_setup');