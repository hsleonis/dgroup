<?php
/*
 Theme Script & Styles Enqueue
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

// Register Script
function dg_scripts() {
    
    
    
    // Style sheets
	wp_register_style( 'bootstrap', get_stylesheet_directory_uri().'/resource/css/bootstrap.min.css', false, '3.3.5');
	wp_enqueue_style( 'bootstrap' );

	wp_register_style( 'camera', get_stylesheet_directory_uri().'/resource/css/camera.css', false, '1.0');
	wp_enqueue_style( 'camera' );

	wp_register_style( 'cssparallax', get_stylesheet_directory_uri().'/resource/css/cssparallax.css', false, '1.0');
	wp_enqueue_style( 'cssparallax' );

	wp_register_style( 'dgmain-css', get_stylesheet_directory_uri().'/resource/css/main.css', array( 'bootstrap' ), '1.1');
	wp_enqueue_style( 'dgmain-css' );
    
    wp_register_style( 'raleway-font', 'https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700', array( 'bootstrap' ));
	wp_enqueue_style( 'raleway-font' );
    
    wp_register_style( 'lightgallery-css', get_stylesheet_directory_uri().'/resource/dist/css/lightgallery.css', array( 'bootstrap' ), '1.1');
	wp_enqueue_style( 'lightgallery-css' );

	wp_register_style( 'style', get_stylesheet_uri(), array( 'bootstrap', ' dgmain' ), '1.1');
	wp_enqueue_style( 'style' );
    
    
    
    // Scripts
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'bootstrap-js',get_stylesheet_directory_uri().'/resource/js/bootstrap.min.js', array( 'jquery' ),'3.3.5', true );
	wp_enqueue_script( 'bootstrap-js' );
    
    wp_register_script( 'jquery-easing',get_stylesheet_directory_uri().'/resource/js/jquery.easing.js', array( 'jquery' ),'1.3', true );
	wp_enqueue_script( 'jquery-easing' );

	wp_register_script( 'camera', get_stylesheet_directory_uri().'/resource/js/camera.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'camera' );
    
    wp_register_script( 'ba-bbq', get_stylesheet_directory_uri().'/resource/js/jquery.ba-bbq.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'ba-bbq' );
    
    wp_register_script( 'smooth-scroll', get_stylesheet_directory_uri().'/resource/js/jquery.smooth-scroll.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'smooth-scroll' );

	wp_register_script( 'mobile-customized', get_stylesheet_directory_uri().'/resource/js/jquery.mobile.customized.min.js', array( 'jquery' ), '1.3', true );
	wp_enqueue_script( 'mobile-customized' );
    
    wp_register_script( 'zoom-scroller', get_stylesheet_directory_uri().'/resource/js/jquery.zoom-scroller.js', array( 'jquery' ), '1.3', true );
	wp_enqueue_script( 'zoom-scroller' );
    
    wp_register_script( 'zoom-scroller', get_stylesheet_directory_uri().'/resource/js/jquery.zoom-scroller.js', array( 'jquery' ), '1.3', true );
	wp_enqueue_script( 'zoom-scroller' );
    
    wp_register_script( 'zoom-scroller', get_stylesheet_directory_uri().'/resource/js/jquery.zoom-scroller.js', array( 'jquery' ), '1.3', true );
	wp_enqueue_script( 'zoom-scroller' );
    
    wp_register_script( 'lightgallery', get_stylesheet_directory_uri().'/resource/dist/js/lightgallery-all.js', array( 'jquery' ), '1.3', true );
	wp_enqueue_script( 'lightgallery' );
    
    wp_register_script( 'picturefill', get_stylesheet_directory_uri().'/resource/js/picturefill.min.js', array( 'jquery','lightgallery' ), '2.3.1', true );
	wp_enqueue_script( 'picturefill' );
    
    wp_register_script( 'dgmain-js', get_stylesheet_directory_uri().'/resource/js/main.js', array( 'jquery','bootstrap-js' ), '1.3', true );
	wp_enqueue_script( 'dgmain-js' );
}
add_action( 'wp_enqueue_scripts', 'dg_scripts' );