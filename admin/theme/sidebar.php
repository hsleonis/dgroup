<?php
/*
 Theme Sidebar Support
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

if ( ! function_exists( 'dg_sidebars' ) ) {

// Register Sidebars
function dg_sidebars() {

	$args = array(
		'id'            => 'footer-1',
		'name'          => __( 'Footer 1', 'dcastalia' ),
		'description'   => __( 'Footer Menu 1 (Leftmost)', 'dcastalia' ),
		'before_title'  => '<p class="footerHeading">',
		'after_title'   => '</p>',
		'before_widget' => '<ul>',
		'after_widget'  => '</ul>',
	);
	register_sidebar( $args );
    
    $args = array(
		'id'            => 'footer-2',
		'name'          => __( 'Footer 2', 'dcastalia' ),
		'description'   => __( 'Footer Menu 2', 'dcastalia' ),
		'before_title'  => '<p class="footerHeading">',
		'after_title'   => '</p>',
		'before_widget' => '<ul>',
		'after_widget'  => '</ul>',
	);
	register_sidebar( $args );
    
    $args = array(
		'id'            => 'footer-3',
		'name'          => __( 'Footer 3', 'dcastalia' ),
		'description'   => __( 'Footer Menu 3', 'dcastalia' ),
		'before_title'  => '<p class="footerHeading">',
		'after_title'   => '</p>',
		'before_widget' => '<ul>',
		'after_widget'  => '</ul>',
	);
	register_sidebar( $args );
    
    $args = array(
		'id'            => 'footer-4',
		'name'          => __( 'Footer 4', 'dcastalia' ),
		'description'   => __( 'Footer Menu 4', 'dcastalia' ),
		'before_title'  => '<p class="footerHeading">',
		'after_title'   => '</p>',
		'before_widget' => '<ul>',
		'after_widget'  => '</ul>',
	);
	register_sidebar( $args );
    
    $args = array(
		'id'            => 'footer-5',
		'name'          => __( 'Footer 5', 'dcastalia' ),
		'description'   => __( 'Footer Menu 5', 'dcastalia' ),
		'before_title'  => '<p class="footerHeading">',
		'after_title'   => '</p>',
		'before_widget' => '<ul>',
		'after_widget'  => '</ul>',
	);
	register_sidebar( $args );
    
    $args = array(
		'id'            => 'footer-6',
		'name'          => __( 'Footer 6', 'dcastalia' ),
		'description'   => __( 'Footer Menu 6 (Rightmost)', 'dcastalia' ),
		'before_title'  => '<p class="footerHeading">',
		'after_title'   => '</p>',
		'before_widget' => '<ul>',
		'after_widget'  => '</ul>',
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'dg_sidebars' );

}