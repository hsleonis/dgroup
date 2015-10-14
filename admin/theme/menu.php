<?php
/*
 Theme Menu Support
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

if ( ! function_exists( 'dg_navigation_menus' ) ) {

// Register Navigation Menus
function dg_navigation_menus() {

	$locations = array(
		'main-menu' => __( 'Main menu', 'dcastalia' ),
		'top-menu' => __( 'Top Menu', 'dcastalia' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'dg_navigation_menus' );

}