<?php
funciton wpbootstrap_scripts_with_jquery()
{
	wp_register_script('custom-script', get_template_directory_uri().'/js/vendor/jquery-1.11.3.min.js', array('jquery'));
	wp_enqueue_script('custom-script');
}

add_action('wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery');

funciton wpbootstrap_scripts_with_modernizr()
{
	wp_register_script('modernizr-script', get_template_directory_uri().'js/vendor/modernizr-2.8.3.min.js');
	wp_enqueue_script('modernizr-script');
}

add_action('wp_enqueue_scripts', 'wpbootstrap_scripts_with_modernizr');
?>
