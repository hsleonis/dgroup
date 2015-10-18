<?php
if(class_exists('TitanFramework')){
    
$titan = TitanFramework::getInstance('wp_dg');

/**
 * Home page settings
 */
$adminPanel = $titan->createAdminPanel( array(
    'name' => __( 'Doreen Options', 'dcastalia' ),
    'id' => 'doreen-options',
) );

$homeTab = $adminPanel->createTab( array(
    'name' => __( 'Home', 'dcastalia' ),
) );

// Featured
for($i=1;$i<=8;$i++){
    
    $homeTab->createOption( array(
        'name' =>  __( 'Featured Item '.$i, 'dcastalia' ),
        'type' => 'heading',
    ));
    $homeTab->createOption( array(
        'name' => __( 'Overlay Color', 'dcastalia' ),
        'id' => 'feat'.$i.'_color',
        'type' => 'color',
        'desc' => __( 'Item overlay color', 'dcastalia' ),
        'default' => '#26292C'
    ) );
    $homeTab->createOption( array(
        'name' =>  __( 'Background Image', 'dcastalia' ),
        'id' => 'feat'.$i.'_img',
        'type' => 'upload',
        'desc' =>  __( 'Upload image', 'dcastalia' ),
        'size' => 'full',
    ) );
    $homeTab->createOption( array(
        'name' => __( 'Header Text (Bold)', 'dcastalia' ),
        'id' => 'feat'.$i.'_title1_text',
        'type' => 'text',
        'desc' => __( 'Enter heading text', 'dcastalia' ),
    ) );
    $homeTab->createOption( array(
        'name' => __( 'Header Text (Light)', 'dcastalia' ),
        'id' => 'feat'.$i.'_title2_text',
        'type' => 'text',
        'desc' => __( 'Enter heading text', 'dcastalia' ),
    ) );
    $homeTab->createOption( array(
        'name' => __( 'Subheader Text', 'dcastalia' ),
        'id' => 'feat'.$i.'_sub_text',
        'type' => 'text',
        'desc' => __( 'Enter subheading text', 'dcastalia' ),
    ) );
    $homeTab->createOption( array(
        'name' => __( 'Item Link', 'dcastalia' ),
        'id' => 'feat'.$i.'_link',
        'type' => 'text',
        'desc' => __( 'Item hyperlink with http://', 'dcastalia' ),
    ) );
}

// Quote
$homeTab->createOption( array(
    'name' =>  __( 'Quote', 'dcastalia' ),
    'type' => 'heading',
));
$homeTab->createOption( array(
    'name' => __( 'Text', 'dcastalia' ),
    'id' => 'quote_text',
    'type' => 'text',
    'desc' => __( 'Enter quotation', 'dcastalia' ),
) );

// Parallax
$homeTab->createOption( array(
    'name' => __( 'Parallax Section', 'dcastalia' ),
    'type' => 'heading',
));
$homeTab->createOption( array(
    'name' => __( 'Header Text', 'dcastalia' ),
    'id' => 'par_title_text',
    'type' => 'text',
    'desc' => __( 'Enter heading text', 'dcastalia' ),
) );
$homeTab->createOption( array(
    'name' => __( 'Subheader Text', 'dcastalia' ),
    'id' => 'par_sub_text',
    'type' => 'text',
    'desc' => __( 'Enter subheading text', 'dcastalia' ),
) );
$homeTab->createOption( array(
    'name' =>  __( 'Background Image', 'dcastalia' ),
    'id' => 'par_img',
    'type' => 'upload',
    'desc' =>  __( 'Upload image','dcastalia' ),
) );
    
// Posts
$homeTab->createOption( array(
    'name' =>  __( 'Posts', 'dcastalia' ),
    'type' => 'heading',
));
$homeTab->createOption( array(
    'name' => __( 'Header Text', 'dcastalia' ),
    'id' => 'post_title_text',
    'type' => 'text',
    'desc' => __( 'Enter heading text', 'dcastalia' ),
) );
$homeTab->createOption( array(
    'name' => __( 'Subheader Text', 'dcastalia' ),
    'id' => 'post_sub_text',
    'type' => 'text',
    'desc' => __( 'Enter subheading text', 'dcastalia' ),
) );
$homeTab->createOption( array(
    'name' =>  __( 'Posts', 'dcastalia' ),
    'id' => 'post_count',
    'type' => 'number',
    'desc' =>  __( 'Enter number of posts to show', 'dcastalia' ),
    'default' => '4',
    'max' => '12',
) );

$homeTab->createOption( array(
    'type' => 'save',
) );

/* General settings */
$generalTab = $adminPanel->createTab( array(
    'name' => __( 'General', 'dcastalia' ),
) );
$generalTab->createOption( array(
    'name' => __( 'Header', 'dcastalia' ),
    'type' => 'heading',
));
$generalTab->createOption( array(
    'name' => __( 'Career Link', 'dcastalia' ),
    'id' => 'career_link',
    'type' => 'text',
    'desc' => __( 'Enter career button link with http://', 'dcastalia' ),
) );
$generalTab->createOption( array(
    'name' => __( 'Download Link', 'dcastalia' ),
    'id' => 'download_link',
    'type' => 'text',
    'desc' => __( 'Enter download button link with http://', 'dcastalia' ),
) );
$generalTab->createOption( array(
    'name' => __( 'Footer', 'dcastalia' ),
    'type' => 'heading',
));
$generalTab->createOption( array(
    'name' => __( 'Copyright Info', 'dcastalia' ),
    'id' => 'copy_info',
    'type' => 'editor',
    'desc' => __( 'Enter copyright information', 'dcastalia' ),
) );

$generalTab->createOption( array(
    'type' => 'save',
) );
    
}