<?php
/*
 Theme Script & Styles Enqueue
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

// Register Script
function dg_scripts() {
    
    
    
    // Style sheets
	wp_register_style( 'bootstrap', get_stylesheet_directory_uri().'/resource/css/bootstrap.min.css');
	wp_enqueue_style( 'bootstrap' );

	wp_register_style( 'camera', get_stylesheet_directory_uri().'/resource/css/camera.css');
	wp_enqueue_style( 'camera' );

	wp_register_style( 'cssparallax', get_stylesheet_directory_uri().'/resource/css/cssparallax.css');
	wp_enqueue_style( 'cssparallax' );

	wp_register_style( 'dgmain-css', get_stylesheet_directory_uri().'/resource/css/main.css');
	wp_enqueue_style( 'dgmain-css' );
    
    wp_register_style( 'raleway-font', 'https://fonts.googleapis.com/css?family=Raleway:300,400,700');
	wp_enqueue_style( 'raleway-font' );
    
    wp_register_style( 'lightgallery-css', get_stylesheet_directory_uri().'/resource/dist/css/lightgallery.css');
	wp_enqueue_style( 'lightgallery-css' );

	wp_register_style( 'style', get_stylesheet_uri());
	wp_enqueue_style( 'style' );
    
    
    
    // Scripts
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'bootstrap-js',get_stylesheet_directory_uri().'/resource/js/bootstrap.min.js', array( 'jquery' ),'', true );
	wp_enqueue_script( 'bootstrap-js' );
    
    wp_register_script( 'jquery-easing',get_stylesheet_directory_uri().'/resource/js/jquery.easing.js', array( 'jquery' ),'', true );
	wp_enqueue_script( 'jquery-easing' );

	wp_register_script( 'camera', get_stylesheet_directory_uri().'/resource/js/camera.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'camera' );
    
    wp_register_script( 'ba-bbq', get_stylesheet_directory_uri().'/resource/js/jquery.ba-bbq.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'ba-bbq' );
    
    wp_register_script( 'smooth-scroll', get_stylesheet_directory_uri().'/resource/js/jquery.smooth-scroll.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'smooth-scroll' );

	wp_register_script( 'mobile-customized', get_stylesheet_directory_uri().'/resource/js/jquery.mobile.customized.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'mobile-customized' );
    
    wp_register_script( 'zoom-scroller', get_stylesheet_directory_uri().'/resource/js/jquery.zoom-scroller.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'zoom-scroller' );
    
    wp_register_script( 'zoom-scroller', get_stylesheet_directory_uri().'/resource/js/jquery.zoom-scroller.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'zoom-scroller' );
    
    wp_register_script( 'zoom-scroller', get_stylesheet_directory_uri().'/resource/js/jquery.zoom-scroller.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'zoom-scroller' );
    
    wp_register_script( 'lightgallery', get_stylesheet_directory_uri().'/resource/dist/js/lightgallery-all.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'lightgallery' );
    
    wp_register_script( 'picturefill', get_stylesheet_directory_uri().'/resource/js/picturefill.min.js', array( 'jquery','lightgallery' ), '', true );
	wp_enqueue_script( 'picturefill' );
    
    wp_register_script( 'dgmain-js', get_stylesheet_directory_uri().'/resource/js/main.js', array( 'jquery','bootstrap-js' ), '', true );
	wp_enqueue_script( 'dgmain-js' );
}
add_action( 'wp_enqueue_scripts', 'dg_scripts' );