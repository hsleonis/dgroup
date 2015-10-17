<?php
/*
 Enterprise post type
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

if ( ! function_exists('enterprise') ) {

// Register Custom Post Type
function enterprise() {

	$labels = array(
		'name'                => _x( 'Enterprises', 'Post Type General Name', 'dcastalia' ),
		'singular_name'       => _x( 'Enterprise', 'Post Type Singular Name', 'dcastalia' ),
		'menu_name'           => __( 'Enterprise', 'dcastalia' ),
		'name_admin_bar'      => __( 'Enterprise', 'dcastalia' ),
		'parent_item_colon'   => __( 'Parent Enterprise:', 'dcastalia' ),
		'all_items'           => __( 'All Enterprises', 'dcastalia' ),
		'add_new_item'        => __( 'Add New Enterprise', 'dcastalia' ),
		'add_new'             => __( 'Add New', 'dcastalia' ),
		'new_item'            => __( 'New Enterprise', 'dcastalia' ),
		'edit_item'           => __( 'Edit Enterprise', 'dcastalia' ),
		'update_item'         => __( 'Update Enterprise', 'dcastalia' ),
		'view_item'           => __( 'View Enterprise', 'dcastalia' ),
		'search_items'        => __( 'Search Enterprise', 'dcastalia' ),
		'not_found'           => __( 'Not found', 'dcastalia' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'dcastalia' ),
	);
	$args = array(
		'label'               => __( 'Enterprise', 'dcastalia' ),
		'description'         => __( 'Enterprise Description', 'dcastalia' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'          => array( 'category', 'tag' ),
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
	register_post_type( 'enterprise', $args );

}
add_action( 'init', 'enterprise', 0 );

}