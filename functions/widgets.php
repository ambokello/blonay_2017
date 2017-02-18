<?php

function blonay2017_widgets_init() {
	
	register_sidebar( array(
		'name'              => __('Home Page Slider'),
		'id'                => 'homepageslider',
		'description'       =>'Home Page Slider',
		'before_widget'     => '<div id="%1$s" class="widget %2$s">',
		'after_widget'      => '</div>',
		'before_title'      => '<h4>',
		'after_title'       => '</h4>'
	));
  
	register_sidebar( array(
	'name'              => __('Blonay Profiler Container'),
	'id'                => 'blonay-profiler-container',
	'description'       =>'Blonay Profiler Container',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );

	register_sidebar( array(
	'name'              => __('Risky Strategy Book Container'),
	'id'                => 'risky-strategy-book-container',
	'description'       =>'Risky Strategy Book Container',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );

	register_sidebar( array(
		'name'              => __('Profiler Page Banner'),
		'id'                => 'profiler_header',
		'description'       =>'Profiler Page Banner',
		'before_widget'     => '<div id="%1$s" class="widget %2$s">',
		'after_widget'      => '</div>',
		'before_title'      => '<h4>',
		'after_title'       => '</h4>'
	));
	
}
add_action( 'widgets_init', 'blonay2017_widgets_init' );



