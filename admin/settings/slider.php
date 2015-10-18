<?php
/*
 Meta box
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

if(class_exists('TitanFramework')){
    
$titan = TitanFramework::getInstance('wp_dg');

/**
 * Slider settings
 */
$adminPanel = $titan->createAdminPanel( array(
    'name' => __( 'Slider Options', 'dcastalia' ),
    'parent' => 'doreen-options',
) );

$slider = $adminPanel->createTab( array(
    'name' => __( 'Slide', 'dcastalia' ),
) );

$slider->createOption( array(
    'type' => 'save',
) );

// Slider
for($i=1;$i<=5;$i++){
    $slider->createOption( array(
        'name' =>  __( 'Slide '.$i, 'dcastalia' ),
        'type' => 'heading',
    ));
    $slider->createOption( array(
        'name' =>  __( 'Caption', 'dcastalia' ),
        'id' => 'slide'.$i.'_caption',
        'type' => 'text'
    ));
    $slider->createOption( array(
        'name' =>  __( 'Title', 'dcastalia' ),
        'id' => 'slide'.$i.'_title',
        'type' => 'text'
    ));
    $slider->createOption( array(
        'name' => __( 'Description', 'dcastalia' ),
        'id' => 'slide'.$i.'_desc',
        'type' => 'textarea',
        'desc' => __( 'Enter description', 'dcastalia' ),
    ) );
    $slider->createOption( array(
        'name' =>  __( 'Footer Text', 'dcastalia' ),
        'id' => 'slide'.$i.'_footer',
        'type' => 'text'
    ));
    $slider->createOption( array(
        'name' =>  __( 'Footer Link', 'dcastalia' ),
        'id' => 'slide'.$i.'_footer_link',
        'type' => 'text',
        'desc' => __( 'Enter link with http://', 'dcastalia' ),
    ));
    $slider->createOption( array(
        'name' =>  __( 'Slide Image', 'dcastalia' ),
        'id' => 'slide'.$i.'_img',
        'type' => 'upload',
        'desc' =>  __( 'Upload image', 'dcastalia' ),
        'size' => 'full',
    ) );
}
    $slider->createOption( array(
        'type' => 'save',
    ) );
    
}