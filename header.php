<?php
/*
 Header file
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

$titan = TitanFramework::getInstance('wp_dg');
?>

<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
    
<body <?php body_class(); ?>>

<div class="preloader">
    <div class="loaderinner">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/resource/images/grey.gif" />
    </div>
</div>
    
<div class="container-fluid topHeader">
    <div class="row">
        <div class="container">

<div class="col-xs-9 col-sm-9 col-md-9"></div>
        <div class="col-xs-10 col-sm-10 col-md-3 topDiv">
    <span class="career"><a href="<?php echo $titan->getOption( 'career_link' ); ?>">Career</a></span>

    <a href="<?php echo $titan->getOption( 'download_link' ); ?>"><span class="downloads"></span><span class="downloadsText">Downloads</span></a>

    <a href="#" data-toggle="modal" data-target="#myModal"><span class="search"></span></a><a href="#" data-toggle="modal" data-target="#myModal"><span class="searchText">Search</span></a>
    </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade full-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div id="search-wrapper" class="modal-dialog search-form" role="document">
    <div class="modal-content search-form">
        <form id="form-area" action="<?php ?>" method="get">
            <input type="text" name="search" placeholder="Search Here"/>
            <input type="submit" value="SUBMIT"/>
        </form>
    </div>
  </div>
</div>

                    <!------- Header Menu -------->

<div class="container-fluid h-menu-style">
    <div class="row">
        <div class="container">
            <div class="col-sm-4 logo">
                 <a href="<?php bloginfo( 'url' ); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
</div>

            <div class="col-sm-8 topMenu visible-sm visible-md visible-lg">
                <?php wp_nav_menu( array('theme_location' => 'main-menu' )); ?>
</div>
        </div>
        
        
         <!--------- Mobile Menu ------------------>

            <div class="mobilemenu_container visible-xs p-fixed">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/resource/images/mobile/black_menu.png">
                
                <div class="menu_cross">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/resource/images/mobile/cross.png" />
                </div>

                <div class="menu_section">

                    <div class="menu_logo_cross_container">
                        <div class="cross_search">
                            

                        </div>

                    </div>

                    <div class="main_menu_footer_menu">
                        <div class="main_menu_footer_menu_left">
                            <?php wp_nav_menu( array('theme_location' => 'main-menu' )); ?>
                        </div>
                    </div>
                    <div class="mobile_social_icon_content">
                        <div class="mobile_social_icons">
                            <a href="#" class="facebook_icon common_icon_mobile"> <i class="fa fa-facebook-square"></i></a>
                            <a href="#" class="google_icon common_icon_mobile"><i class="fa fa-google-plus-square"></i></a>
                            <a href="#" class="twitter_icon common_icon_mobile"><i class="fa fa-twitter-square"></i></a>
                            <a href="#" class="flicker_icon common_icon_mobile"><i class="fa fa-flickr"></i></a>
                        </div>
                    </div>


                </div>
            <!--</div>-->
        <!--</div>-->
                    </div>
    </div>
</div>

