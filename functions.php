<?php 
	
function kibango_script_enqueue() {
	wp_enqueue_style('bootstrapcss', get_template_directory_uri().'/css/bootstrap.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('fontawesomecss', get_template_directory_uri().'/css/font-awesome.css', array(), '1.0.0', 'all');
	wp_enqueue_style('bxslidercss', get_template_directory_uri().'/css/jquery.bxslider.css', array(), '1.0.0', 'all');
	wp_enqueue_style('fancyboxcss', get_template_directory_uri().'/css/jquery.fancybox.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri().'/css/kibango.css', array(), '1.0.0', 'all');

	wp_enqueue_script('jqueryjs', get_template_directory_uri().'/js/jquery-2.2.3.min.js', array(), '1.0.0', true);
	wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array(), '1.0.0', true);
	wp_enqueue_script('bxsliderjs', get_template_directory_uri().'/js/jquery.bxslider.min.js', array(), '1.0.0', true);
	wp_enqueue_script('fancyboxjs', get_template_directory_uri().'/js/jquery.fancybox.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs', get_template_directory_uri().'/js/main.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'kibango_script_enqueue');

function kibango_theme_setup(){
	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
}
add_action('init', 'kibango_theme_setup');

/*
Sidebar Function
*/
function widget_setup(){
	
	register_sidebar(
		array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'class' => 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h1 class="widget-title">',
			'after_title' => '</h1>',
			)
		);
}

add_action('widgets_init', 'widget_setup');