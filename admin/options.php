<?php

add_action( 'tf_create_options', 'dg_options');
/**
 * Initialize Titan & options here
 */
function dg_options() {
	$titan = TitanFramework::getInstance('wp_dg');
		
	/**
	 * Create an admin panel & tabs
	 * You should put options here that do not change the look of your theme
	 */
	$adminPanel = $titan->createAdminPanel( array(
	    'name' => __( 'WP Screen Lock', 'default' ),
	) );
	
	$generalTab = $adminPanel->createTab( array(
	    'name' => __( 'Settings', 'default' ),
	) );
	$generalTab->createOption( array(
	    'name' => __( 'Background Color', 'default' ),
	    'id' => 'lock_bg_color',
	    'type' => 'color',
	    'desc' => __( 'This color changes the background of lock screen', 'default' ),
	    'default' => '#26292C',
		'css' => '.main-lock-screen { background-color: value }'
	) );
	
	$generalTab->createOption( array(
	    'name' => 'Background Image',
	    'id' => 'lock_bg_img',
	    'type' => 'upload',
	    'desc' => 'Upload your screen lock background image',
	    'size' => 'full',
	    'css' => '.main-lock-screen { background-image: value }',
	) );
	
	$generalTab->createOption( array(
		'name' => __( 'Header Text', 'default' ),
		'id' => 'lock_text',
		'type' => 'text',
		'desc' => __( 'Enter heading text', 'default' ),
	) );
	
	$generalTab->createOption( array(
	    'name' => __( 'Headings Font', 'default' ),
	    'id' => 'lock_text_font',
	    'type' => 'font',
	    'desc' => __( 'Select the font for heading text', 'default' ),
		'show_color' => TRUE,
		'show_font_size' => TRUE,
	    'show_font_weight' => false,
	    'show_font_style' => false,
	    'show_line_height' => false,
	    'show_letter_spacing' => false,
	    'show_text_transform' => false,
	    'show_font_variant' => false,
	    'show_text_shadow' => false,
	    'default' => array(
	        'font-family' => 'Fauna One',
	    ),
		'css' => '.lock-date { value }',
	) );
	
	$generalTab->createOption( array(
	    'type' => 'save',
	) );
	
}