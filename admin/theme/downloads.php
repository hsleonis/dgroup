<?php
/*
 Download post type
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

if ( ! function_exists('download') ) {

// Register Custom Post Type
function download() {

	$labels = array(
		'name'                => _x( 'Download', 'Post Type General Name', 'dcastalia' ),
		'singular_name'       => _x( 'Download', 'Post Type Singular Name', 'dcastalia' ),
		'menu_name'           => __( 'Download', 'dcastalia' ),
		'name_admin_bar'      => __( 'Download', 'dcastalia' ),
		'parent_item_colon'   => __( 'Parent Download:', 'dcastalia' ),
		'all_items'           => __( 'All Download Page', 'dcastalia' ),
		'add_new_item'        => __( 'Add New Download Page', 'dcastalia' ),
		'add_new'             => __( 'Add New', 'dcastalia' ),
		'new_item'            => __( 'New Download Page', 'dcastalia' ),
		'edit_item'           => __( 'Edit Download Page', 'dcastalia' ),
		'update_item'         => __( 'Update Download Page', 'dcastalia' ),
		'view_item'           => __( 'View Download Page', 'dcastalia' ),
		'search_items'        => __( 'Search Download', 'dcastalia' ),
		'not_found'           => __( 'Not found', 'dcastalia' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'dcastalia' ),
	);
	$args = array(
		'label'               => __( 'Download', 'dcastalia' ),
		'description'         => __( 'Download Description', 'dcastalia' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', ),
		'taxonomies'          => array( ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 3,
		'menu_icon'           => 'dashicons-download',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'download', $args );

}
add_action( 'init', 'download', 0 );

}