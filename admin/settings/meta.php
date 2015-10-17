<?php
/*
 Meta ox
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

if(class_exists('TitanFramework')){
    
$titan = TitanFramework::getInstance('wp_dg');

$pageMeta = $titan->createMetaBox( array(
    'name' =>  __( 'Additional information', 'dcastalia' ),
    'post_type' => array( 'page', 'post', 'enterprise'),
) );

// Extra
$pageMeta->createOption( array(
    'name' =>  __( 'Title', 'dcastalia' ),
    'id' => 'post_extra_title',
    'type' => 'text'
));
$pageMeta->createOption( array(
    'name' => __( 'Description', 'dcastalia' ),
    'id' => 'post_extra_desc',
    'type' => 'textarea',
    'desc' => __( 'Enter description', 'dcastalia' ),
) );

// Quote
$quoteBox = $titan->createMetaBox( array(
    'name' => __('Quote', 'dcastalia' ),
    'post_type' => array('enterprise'),
) );
$quoteBox->createOption( array(
    'name' => __('Quote Text', 'dcastalia' ),
    'id' => 'post_extra_quote',
    'type' => 'text'
)); 

// Contact
$contactBox = $titan->createMetaBox( array(
    'name' => __('Contact', 'dcastalia' ),
    'post_type' => array('enterprise'),
) );
$contactBox->createOption( array(
    'name' => __('Contact Information', 'dcastalia' ),
    'id' => 'post_extra_contact',
    'type' => 'editor'
));

// Gallery
$galleryBox = $titan->createMetaBox( array(
    'name' => __('Gallery', 'dcastalia' ),
    'post_type' => array('enterprise'),
) );
$galleryBox->createOption( array(
    'name' => 'Enterprise Images',
    'id' => 'post_extra_gallery',
    'type' => 'gallery',
));

}