<?php
/*
 News post type
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

if ( ! function_exists('news') ) {

// Register Custom Post Type
function news() {

	$labels = array(
		'name'                => _x( 'News', 'Post Type General Name', 'dcastalia' ),
		'singular_name'       => _x( 'News', 'Post Type Singular Name', 'dcastalia' ),
		'menu_name'           => __( 'News', 'dcastalia' ),
		'name_admin_bar'      => __( 'News', 'dcastalia' ),
		'parent_item_colon'   => __( 'Parent News:', 'dcastalia' ),
		'all_items'           => __( 'All News Page', 'dcastalia' ),
		'add_new_item'        => __( 'Add New News Page', 'dcastalia' ),
		'add_new'             => __( 'Add New', 'dcastalia' ),
		'new_item'            => __( 'New News Page', 'dcastalia' ),
		'edit_item'           => __( 'Edit News Page', 'dcastalia' ),
		'update_item'         => __( 'Update News Page', 'dcastalia' ),
		'view_item'           => __( 'View News Page', 'dcastalia' ),
		'search_items'        => __( 'Search News', 'dcastalia' ),
		'not_found'           => __( 'Not found', 'dcastalia' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'dcastalia' ),
	);
	$args = array(
		'label'               => __( 'News', 'dcastalia' ),
		'description'         => __( 'News Description', 'dcastalia' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'          => array( ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 3,
		'menu_icon'           => 'dashicons-feedback',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'news', $args );

}
add_action( 'init', 'news', 0 );

}

if ( ! function_exists( 'newscat' ) ) {

// Register Custom Taxonomy
function newscat() {

	$labels = array(
		'name'                       => _x( 'News sections', 'Taxonomy General Name', 'dcastalia' ),
		'singular_name'              => _x( 'News section', 'Taxonomy Singular Name', 'dcastalia' ),
		'menu_name'                  => __( 'News section', 'dcastalia' ),
		'all_items'                  => __( 'All Sections', 'dcastalia' ),
		'parent_item'                => __( 'Parent Section', 'dcastalia' ),
		'parent_item_colon'          => __( 'Parent Section:', 'dcastalia' ),
		'new_item_name'              => __( 'New Section Name', 'dcastalia' ),
		'add_new_item'               => __( 'Add New Section', 'dcastalia' ),
		'edit_item'                  => __( 'Edit Section', 'dcastalia' ),
		'update_item'                => __( 'Update Section', 'dcastalia' ),
		'view_item'                  => __( 'View Section', 'dcastalia' ),
		'separate_items_with_commas' => __( 'Separate section with commas', 'dcastalia' ),
		'add_or_remove_items'        => __( 'Add or remove section', 'dcastalia' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'dcastalia' ),
		'popular_items'              => __( 'Popular Sections', 'dcastalia' ),
		'search_items'               => __( 'Search Sections', 'dcastalia' ),
		'not_found'                  => __( 'Section Not Found', 'dcastalia' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'newscat', array( 'news' ), $args );

}
add_action( 'init', 'newscat', 0 );

}