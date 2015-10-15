<?php
if(class_exists('TitanFramework')){
    
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

// Featured
for($i=1;$i<=8;$i++){
    
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
    $homeTab->createOption( array(
        'name' => __( 'Item Link', 'default' ),
        'id' => 'feat'.$i.'_link',
        'type' => 'text',
        'desc' => __( 'Item hyperlink with http://', 'default' ),
    ) );
}

// Quote
$homeTab->createOption( array(
    'name' => 'Quote',
    'type' => 'heading',
));
$homeTab->createOption( array(
    'name' => __( 'Text', 'default' ),
    'id' => 'quote_text',
    'type' => 'text',
    'desc' => __( 'Enter quotation', 'default' ),
) );

// Parallax
$homeTab->createOption( array(
    'name' => 'Parallax Section',
    'type' => 'heading',
));
$homeTab->createOption( array(
    'name' => __( 'Header Text', 'default' ),
    'id' => 'par_title_text',
    'type' => 'text',
    'desc' => __( 'Enter heading text', 'default' ),
) );
$homeTab->createOption( array(
    'name' => __( 'Subheader Text', 'default' ),
    'id' => 'par_sub_text',
    'type' => 'text',
    'desc' => __( 'Enter subheading text', 'default' ),
) );
$homeTab->createOption( array(
    'name' => 'Background Image',
    'id' => 'par_img',
    'type' => 'upload',
    'desc' => 'Upload image',
) );
    
// Posts
$homeTab->createOption( array(
    'name' => 'Posts',
    'type' => 'heading',
));
$homeTab->createOption( array(
    'name' => __( 'Header Text', 'default' ),
    'id' => 'post_title_text',
    'type' => 'text',
    'desc' => __( 'Enter heading text', 'default' ),
) );
$homeTab->createOption( array(
    'name' => __( 'Subheader Text', 'default' ),
    'id' => 'post_sub_text',
    'type' => 'text',
    'desc' => __( 'Enter subheading text', 'default' ),
) );
$homeTab->createOption( array(
    'name' => 'Posts',
    'id' => 'post_count',
    'type' => 'number',
    'desc' => 'Enter number of posts to show',
    'default' => '4',
    'max' => '12',
) );

$homeTab->createOption( array(
    'type' => 'save',
) );

/* General settings */
$generalTab = $adminPanel->createTab( array(
    'name' => __( 'General', 'default' ),
) );
$generalTab->createOption( array(
    'name' => 'Header',
    'type' => 'heading',
));
$generalTab->createOption( array(
    'name' => __( 'Career Link', 'default' ),
    'id' => 'career_link',
    'type' => 'select-pages',
    'desc' => __( 'Enter career button link', 'default' ),
) );
$generalTab->createOption( array(
    'name' => __( 'Download Link', 'default' ),
    'id' => 'download_link',
    'type' => 'select-pages',
    'desc' => __( 'Enter download button link', 'default' ),
) );
$generalTab->createOption( array(
    'name' => 'Footer',
    'type' => 'heading',
));
$generalTab->createOption( array(
    'name' => __( 'Copyright Info', 'default' ),
    'id' => 'copy_info',
    'type' => 'text',
    'desc' => __( 'Enter copyright information', 'default' ),
) );

$generalTab->createOption( array(
    'type' => 'save',
) );
    
}