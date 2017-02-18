<?php

function blonay2017_enqueues() {
	
	/* Styles */

	/* CSS Global Compulsory */
	wp_register_style('font-family', '//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin');
	wp_enqueue_style('font-family');

	wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/plugins/bootstrap/css/bootstrap.min.css', false, '3.3.6', null);
	wp_enqueue_style('bootstrap-css');

  	wp_register_style('style-css', get_template_directory_uri() . '/assets/css/style.css', false, null);
  	wp_enqueue_style('style-css');

  	/* CSS Header and Footer */

  	wp_register_style('header-default-css', get_template_directory_uri() . '/assets/css/headers/header-default.css', false, null);
  	wp_enqueue_style('header-default-css');

  	wp_register_style('footer-css', get_template_directory_uri() . '/assets/css/footers/footer-v1.css', false, null);
  	wp_enqueue_style('footer-css');

  	/* CSS Implementing plugins */

  	wp_register_style('animate-css', get_template_directory_uri() . '/assets/plugins/animate.css', false, null);
  	wp_enqueue_style('animate-css');

	wp_register_style('line-icons-css', get_template_directory_uri() . '/assets/plugins/line-icons/line-icons.css', false, null);
  	wp_enqueue_style('line-icons-css');

  	wp_register_style('font-awesome.css', get_template_directory_uri() . '/assets/plugins/font-awesome/css/font-awesome.min.css', false, null);
  	wp_enqueue_style('font-awesome.css');

  	wp_register_style('parallax-slider-css', get_template_directory_uri() . '/assets/plugins/parallax-slider/css/parallax-slider.css', false, null);
  	wp_enqueue_style('parallax-slider-css');

  	wp_register_style('owl.carousel-css', get_template_directory_uri() . '/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css', false, null);
  	wp_enqueue_style('owl.carousel-css');

  	/* Theme CSS */

  	wp_register_style('default-css', get_template_directory_uri() . '/assets/css/theme-colors/default.css', false, null);
  	wp_enqueue_style('default-css');

  	wp_register_style('dark-css', get_template_directory_uri() . '/assets/css/theme-skins/dark.css', false, null);
  	wp_enqueue_style('dark-css');

  	/* Custom CSS */
  	wp_register_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css', false, null);
  	wp_enqueue_style('custom-css');

	/* Scripts */
	wp_register_script('jquery-js', get_template_directory_uri() . '/assets/plugins/jquery/jquery.min.js', false, null, true);
	wp_enqueue_script('jquery-js');

  	wp_register_script('jquery-migrate-js', get_template_directory_uri() . '/assets/plugins/jquery/jquery-migrate.min.js', false, null, true);
	wp_enqueue_script('jquery-migrate-js');

	wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');
	
	wp_register_script('back-to-top-js', get_template_directory_uri() . '/assets/plugins/back-to-top.js', false, null, true);
	wp_enqueue_script('back-to-top-js');

	wp_register_script('smoothScroll-js', get_template_directory_uri() . '/assets/plugins/smoothScroll.js', false, null, true);
	wp_enqueue_script('smoothScroll-js');

	wp_register_script('modernizr-js', get_template_directory_uri() . '/assets/plugins/parallax-slider/js/modernizr.js', false, null, true);
	wp_enqueue_script('modernizr-js');

	wp_register_script('cslider-js', get_template_directory_uri() . '/assets/plugins/parallax-slider/js/jquery.cslider.js', false, null, true);
	wp_enqueue_script('cslider-js');

	wp_register_script('owl.carousel-js', get_template_directory_uri() . '/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js', false, null, true);
	wp_enqueue_script('owl.carousel-js');

	wp_register_script('Chart-js', get_template_directory_uri() . '/assets/js/Chart.js', false, null, true);
	wp_enqueue_script('Chart-js');

	wp_register_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', false, null, true);
	wp_enqueue_script('custom-js');

	wp_register_script('app-js', get_template_directory_uri() . '/assets/js/app.js', false, null, true);
	wp_enqueue_script('app-js');

	wp_register_script('owl-carousel-js', get_template_directory_uri() . '/assets/js/plugins/owl-carousel.js', false, null, true);
	wp_enqueue_script('owl-carousel-js');

	wp_register_script('style-switcher-js', get_template_directory_uri() . '/assets/js/plugins/style-switcher.js', false, null, true);
	wp_enqueue_script('style-switcher-js');

	wp_register_script('parallax-slider-js', get_template_directory_uri() . '/assets/js/plugins/parallax-slider.js', false, null, true);
	wp_enqueue_script('parallax-slider-js');

	wp_register_script('bottom-js', get_template_directory_uri() . '/assets/js/bottom.js', false, null, true);
	wp_enqueue_script('bottom-js');

}
add_action('wp_enqueue_scripts', 'blonay2017_enqueues', 100);
