<?php
/*
All the functions are in the PHP pages in the functions/ folder.
*/
function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Primary Menu' ),
      'top-right-menu' => __( 'Top Right Menu' ),
	  'primary-mobile' => __( 'Primary Mobile' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

require_once locate_template('/functions/cleanup.php');
require_once locate_template('/functions/setup.php');
require_once locate_template('/functions/enqueues.php');
require_once locate_template('/functions/navbar.php');
require_once locate_template('/functions/widgets.php');
require_once locate_template('/functions/search.php');
require_once locate_template('/functions/feedback.php');

add_action('after_setup_theme', 'true_load_theme_textdomain');

function true_load_theme_textdomain(){
    load_theme_textdomain( 'bsme', get_template_directory() . '/languages' );
}
