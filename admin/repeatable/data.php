<?php
/*
 Repeatable metabox
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

if ( file_exists( dirname( __FILE__ ) . '/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . 'init.php' ) ) {
	require_once dirname( __FILE__ ) . 'init.php';
}

add_action( 'cmb2_admin_init', 'dg_news' );
function dg_news() {
	$prefix = '_dgn_';

	/**
	 * Repeatable Field Groups
	 */
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'News', 'dcastalia' ),
		'object_types' => array( 'enterprise', ),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'news',
		'type'        => 'group',
		'description' => __( 'Enterprise news section', 'dcastalia' ),
		'options'     => array(
			'group_title'   => __( 'News {#}', 'dcastalia' ), 
			'add_button'    => __( 'Add Another News', 'dcastalia' ),
			'remove_button' => __( 'Remove News', 'dcastalia' ),
			'sortable'      => true,
		),
	) );
	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'News Title', 'dcastalia' ),
		'id'         => 'title',
		'type'       => 'text',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'        => __( 'Description', 'dcastalia' ),
		'description' => __( 'Write a short description for this news', 'dcastalia' ),
		'id'          => 'content',
		'type'        => 'textarea_small',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Date', 'dcastalia' ),
		'id'   => 'textdate',
		'type' => 'text_date',
	) );

}

add_action( 'cmb2_admin_init', 'dg_gallery' );
function dg_gallery() {
	$prefix = '_dg_';
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Image Gallery', 'dcastalia' ),
		'object_types' => array( 'enterprise', ),
	) );

	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'gallery',
		'type'        => 'group',
		'description' => __( 'Enterprise image gallery', 'dcastalia' ),
		'options'     => array(
			'group_title'   => __( 'Image {#}', 'dcastalia' ),
			'add_button'    => __( 'Add Another Image', 'dcastalia' ),
			'remove_button' => __( 'Remove Image', 'dcastalia' ),
			'sortable'      => true,
		),
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Image Title', 'dcastalia' ),
		'id'         => 'title',
		'type'       => 'text',
		// 'repeatable' => true,
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'        => __( 'Description', 'dcastalia' ),
		'description' => __( 'Write a short description for this image', 'dcastalia' ),
		'id'          => 'desc',
		'type'        => 'textarea_small',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Select Image', 'dcastalia' ),
		'id'   => 'img',
		'type' => 'file',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Image Caption', 'dcastalia' ),
		'id'   => 'img_cap',
		'type' => 'text',
	) );

}