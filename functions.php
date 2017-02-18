<?php
/*
All the functions are in the PHP pages in the functions/ folder.
*/
function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Primary Menu' ),
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
    load_theme_textdomain( 'blonay2017', get_template_directory() . '/languages' );
}

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Scores', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Score', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Profiler Scores', 'text_domain' ),
		'name_admin_bar'        => __( 'Profiler Score', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Score', 'text_domain' ),
		'description'           => __( 'Scores For Blonay Character Profiler', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array(  'title', 'editor', 'custom-fields', 'revisions', 'author' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'score', $args );

}
add_action( 'init', 'custom_post_type', 0 );

add_action( 'wp_ajax_nopriv_add_score', 'prefix_ajax_add_score' );
add_action( 'wp_ajax_add_score', 'prefix_ajax_add_score' );

function prefix_ajax_add_score() {

	$fields = urldecode($_REQUEST['json']);
	$fieldsData = json_decode($fields);


    $scoresData = array(
    	'ID' => 0,
    	'post_status' => 'publish',
    	'post_type' => 'score',
    	'post_content' => $fields,
    	'post_title' => 'Profile Score for'. ' ' .$fieldsData->{'customFields'}->{'name'},
    	'post_author' => is_user_logged_in() ? get_current_user_id() : 0
    );

    $the_post_id = wp_insert_post( $scoresData );
    add_post_meta(  $the_post_id, 'boldCreative', $fieldsData->{'score'}[0] );
    add_post_meta(  $the_post_id, 'selfDisciplined', $fieldsData->{'score'}[1] );
    add_post_meta(  $the_post_id, 'Empathic', $fieldsData->{'score'}[2] );
    add_post_meta(  $the_post_id, 'FullNames', $fieldsData->{'customFields'}->{'name'} );

    wp_die();
}


