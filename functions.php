<?php
function wpbootstrap_scripts_with_jquery()
{
	wp_register_script('custom-script', get_template_directory_uri() . '/js/vendor/jquery-1.11.3.min.js', array());
	wp_enqueue_script('custom-script');
	wp_register_script('modernizr-script', get_template_directory_uri().'/js/vendor/modernizr-2.8.3.min.js');
	wp_enqueue_script('modernizr-script');
}

add_action('wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery');

function wpbootstrap_scripts_with_bootstrap()
{
	wp_register_script('bootstrap-script', get_template_directory_uri().'/js/vendor/bootstrap.min.js');
	wp_enqueue_script('bootstrap-script');
}

add_action('wp_enqueue_scripts', 'wpbootstrap_scripts_with_bootstrap');

function wpbootstrap_scripts_with_owl()
{
	wp_register_script('owl-script', get_template_directory_uri().'/js/vendor/owl-carousel/owl.carousel.min.js');
	wp_enqueue_script('owl-script');
}

add_action('wp_enqueue_scripts', 'wpbootstrap_scripts_with_owl');

function wpbootstrap_scripts_with_plugins()
{
	wp_register_script('plugins-script', get_template_directory_uri().'/js/plugins.js');
	wp_enqueue_script('plugins-script');
}

add_action('wp_enqueue_scripts', 'wpbootstrap_scripts_with_plugins');

function wpbootstrap_scripts_with_main()
{
	wp_register_script('main-script', get_template_directory_uri().'/js/main.js');
	wp_enqueue_script('main-script');
}

add_action('wp_enqueue_scripts', 'wpbootstrap_scripts_with_main');

add_theme_support('post-thumbnails');
?>
