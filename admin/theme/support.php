<?php
/*
 Theme Support File
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

if ( ! function_exists('dg_theme_features') ) {

function dg_theme_features()  {

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-thumbnails' );

	$header_args = array(
		'default-image'          => '',
		'width'                  => 0,
		'height'                 => 0,
		'flex-width'             => false,
		'flex-height'            => false,
		'uploads'                => true,
		'random-default'         => false,
		'header-text'            => false,
		'default-text-color'     => '',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', $header_args );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'title-tag' );

}
add_action( 'after_setup_theme', 'dg_theme_features' );

}