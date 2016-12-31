<?php

function bsme2016_enqueues() {
	/* Styles */
	wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', false, '3.1.1', null);
	wp_enqueue_style('bootstrap-css');

  	wp_register_style('bsme-css', get_template_directory_uri() . '/css/custom.css', false, null);
  	wp_enqueue_style('bsme-css');

  	wp_register_style('font-awesome.css', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.css', false, null);
  	wp_enqueue_style('font-awesome.css');

  	wp_register_style('style-css', get_template_directory_uri() . '/style.css', false, null);
  	wp_enqueue_style('style-css');


	/* Scripts */
	wp_register_script('jquery-js', get_template_directory_uri() . '/js/jquery.js', false, null, true);
	wp_enqueue_script('jquery-js');

  	wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('jquery.easing.min-js', get_template_directory_uri() . '/js/jquery.easing.min.js', false, null, true);
	wp_enqueue_script('jquery.easing.min-js');
	
	wp_register_script('grayscale-js', get_template_directory_uri() . '/js/grayscale.js', false, null, true);
	wp_enqueue_script('grayscale-js');

	wp_register_script('custom-js', get_template_directory_uri() . '/js/custom.js', false, null, true);
	wp_enqueue_script('custom-js');

}
add_action('wp_enqueue_scripts', 'bsme2016_enqueues', 100);
