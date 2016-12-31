<?php

function bsme_widgets_init() {
	
	register_sidebar( array(
		'name'              => __('Home Page Partners'),
		'id'                => 'homepagepanel1',
		'description'       =>'Home Page Partners',
		'before_widget'     => '<div id="%1$s" class="widget %2$s">',
		'after_widget'      => '</div>',
		'before_title'      => '<h4>',
		'after_title'       => '</h4>'
	));
  
	register_sidebar( array(
	'name'              => __('Panel A2 1'),
	'id'                => 'panel-A2-1',
	'description'       =>'Panel A2 1',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );

	register_sidebar( array(
	'name'              => __('Panel A2'),
	'id'                => 'panel-A2',
	'description'       =>'Panel A2',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );
	register_sidebar( array(
	'name'              => __('Services Page-Top Panel'),
	'id'                => 'services-internel-panel-1',
	'description'       =>'Services Page-Top Panel',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );

	register_sidebar( array(
	'name'              => __('Investors Page-Top Panel'),
	'id'                => 'investors-internel-panel-1',
	'description'       =>'Investors page-Top Panel',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );

	register_sidebar( array(
	'name'              => __('About Us Page-Top Panel'),
	'id'                => 'about_internel-panel-1',
	'description'       =>'About Us Page-Top Panel',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );
	register_sidebar( array(
	'name'              => __('Corporate Page-Top Panel'),
	'id'                => 'corporate_internel-panel-1',
	'description'       =>'Corporate Page-Top Panel',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );
	register_sidebar( array(
	'name'              => __('Landlord Page-Top Panel'),
	'id'                => 'landlord-internel-panel-1',
	'description'       =>'Landlord Page-Top Panel',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );

	register_sidebar( array(
	'name'              => __('Contact Us Page-Top Panel'),
	'id'                => 'contactus-internel-panel-1',
	'description'       =>'Contact Us Page-Top Panel',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );
	register_sidebar( array(
	'name'              => __('Maps Panel'),
	'id'                => 'maps-panel',
	'description'       =>'Maps Panel',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );
	register_sidebar( array(
	'name'              => __('Landlord panel 2'),
	'id'                => 'landlord-panel-2',
	'description'       =>'Landlord panel 2',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );

	register_sidebar( array(
	'name'              => __('Service Panel 1'),
	'id'                => 'service-panel-1',
	'description'       =>'Service Panel 1',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );

	register_sidebar( array(
	'name'              => __('Service Panel 2'),
	'id'                => 'service-panel-2',
	'description'       =>'Service Panel 2',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );

	register_sidebar( array(
	'name'              => __('Investor corporate client 1'),
	'id'                => 'investor-corporate-client-1',
	'description'       =>'Investor corporate client 1',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );

	register_sidebar( array(
	'name'              => __('Corporate client 1'),
	'id'                => ' corporate-client-1',
	'description'       =>'Corporate client 1',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );
	register_sidebar( array(
	'name'              => __('Corporate Investor Button'),
	'id'                => 'investor-button',
	'description'       =>'Corporate Investor Button',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );
	register_sidebar( array(
	'name'              => __('Investor corporate client 2'),
	'id'                => 'investor-corporate-client-2',
	'description'       =>'Investor corporate client 2',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );

	register_sidebar( array(
	'name'              => __('Corporate Client 2'),
	'id'                => 'corporate-client-2',
	'description'       =>'Corporate Client 2',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );

	register_sidebar( array(
	'name'              => __('Service Page-Leverage Greater'),
	'id'                => 'leverage-greater',
	'description'       =>'Service Page-Leverage Greater',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );

	register_sidebar( array(
	'name'              => __('Footer Top'),
	'id'                => 'footer-top',
	'description'       => 'Footer Top',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>',
	'before_title'      => '<h4>',
	'after_title'       => '</h4>'
	) );
}
add_action( 'widgets_init', 'bsme_widgets_init' );



