<?php

$titan = TitanFramework::getInstance('wp_dg');

/**
 * Home page settings
 */
$adminPanel = $titan->createAdminPanel( array(
    'name' => __( 'Doreen Options', 'default' ),
) );

$homeTab = $adminPanel->createTab( array(
    'name' => __( 'Home', 'default' ),
) );

// Featured (Large)
$homeTab->createOption( array(
    'name' => 'Featured (Large)',
    'type' => 'heading',
));
$homeTab->createOption( array(
    'name' => __( 'Overlay Color', 'default' ),
    'id' => 'feat1_color',
    'type' => 'color',
    'desc' => __( 'Featured item overlay color', 'default' ),
    'default' => '#26292C'
) );
$homeTab->createOption( array(
    'name' => 'Background Image',
    'id' => 'feat1_img',
    'type' => 'upload',
    'desc' => 'Upload image',
    'size' => 'full',
) );
$homeTab->createOption( array(
    'name' => __( 'Header Text', 'default' ),
    'id' => 'feat1_title1_text',
    'type' => 'text',
    'desc' => __( 'Enter heading text', 'default' ),
) );
$homeTab->createOption( array(
    'name' => __( 'Subheader Text', 'default' ),
    'id' => 'feat1_sub_text',
    'type' => 'text',
    'desc' => __( 'Enter subheading text', 'default' ),
) );

// Featured 2~8
for($i=2;$i<=8;$i++){
    
    $homeTab->createOption( array(
        'name' => 'Featured Item '.$i,
        'type' => 'heading',
    ));
    $homeTab->createOption( array(
        'name' => __( 'Overlay Color', 'default' ),
        'id' => 'feat'.$i.'_color',
        'type' => 'color',
        'desc' => __( 'Item overlay color', 'default' ),
        'default' => '#26292C'
    ) );
    $homeTab->createOption( array(
        'name' => 'Background Image',
        'id' => 'feat'.$i.'_img',
        'type' => 'upload',
        'desc' => 'Upload image',
        'size' => 'full',
    ) );
    $homeTab->createOption( array(
        'name' => __( 'Header Text (Bold)', 'default' ),
        'id' => 'feat'.$i.'_title1_text',
        'type' => 'text',
        'desc' => __( 'Enter heading text', 'default' ),
    ) );
    $homeTab->createOption( array(
        'name' => __( 'Header Text (Light)', 'default' ),
        'id' => 'feat'.$i.'_title2_text',
        'type' => 'text',
        'desc' => __( 'Enter heading text', 'default' ),
    ) );
    $homeTab->createOption( array(
        'name' => __( 'Subheader Text', 'default' ),
        'id' => 'feat'.$i.'_sub_text',
        'type' => 'text',
        'desc' => __( 'Enter subheading text', 'default' ),
    ) );
}

$homeTab->createOption( array(
    'type' => 'save',
) );