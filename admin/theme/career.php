<?php
/*
 Career post type
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

if ( ! function_exists('career') ) {

// Register Custom Post Type
function career() {

	$labels = array(
		'name'                => _x( 'Career', 'Post Type General Name', 'dcastalia' ),
		'singular_name'       => _x( 'Career', 'Post Type Singular Name', 'dcastalia' ),
		'menu_name'           => __( 'Career', 'dcastalia' ),
		'name_admin_bar'      => __( 'Career', 'dcastalia' ),
		'parent_item_colon'   => __( 'Parent Career:', 'dcastalia' ),
		'all_items'           => __( 'All Career Page', 'dcastalia' ),
		'add_new_item'        => __( 'Add New Career Page', 'dcastalia' ),
		'add_new'             => __( 'Add New', 'dcastalia' ),
		'new_item'            => __( 'New Career Page', 'dcastalia' ),
		'edit_item'           => __( 'Edit Career Page', 'dcastalia' ),
		'update_item'         => __( 'Update Career Page', 'dcastalia' ),
		'view_item'           => __( 'View Career Page', 'dcastalia' ),
		'search_items'        => __( 'Search Career', 'dcastalia' ),
		'not_found'           => __( 'Not found', 'dcastalia' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'dcastalia' ),
	);
	$args = array(
		'label'               => __( 'Career', 'dcastalia' ),
		'description'         => __( 'Career Description', 'dcastalia' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', ),
		'taxonomies'          => array( ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 3,
		'menu_icon'           => ' dashicons-layout',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'career', $args );

}
add_action( 'init', 'career', 0 );

}