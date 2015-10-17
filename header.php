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
    <?php wp_head(); ?>
</head>
    
<body <?php body_class(); ?>>
    
<div class="container-fluid topHeader">
    <div class="row">


<div class="col-xs-9 col-sm-9 col-md-8 col-lg-8"></div>
        <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 topDiv">
    <span class="career"><a href="<?php echo $titan->getOption( 'career_link' ); ?>">Career</a></span>

    <a href="<?php echo $titan->getOption( 'download_link' ); ?>"><span class="downloads"></span><span class="downloadsText">Downloads</span></a>

    <a href="#"><span class="search"></span></a><a href="#"><span class="searchText">Search</span></a>
</div>
</div>

</div>


                    <!------- Header Menu -------->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
       
        <div class="col-md-3 col-sm-9 col-xs-9 logo">
             <a href="<?php bloginfo( 'url' ); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
        </div>
        
        <div class="col-md-8 topMenu visible-sm visible-md visible-lg">
            <?php wp_nav_menu( array('menu' => 'Site Main Menu' )); ?>
        </div>
        
        
        
         <!--------- Mobile Menu ------------------>

            <div class="mobilemenu_container visible-xs">
                <img src="resource/images/mobile/black_menu.png">

                <div class="menu_section">

                    <div class="menu_logo_cross_container">
                        <div class="cross_search">
                            <div class="menu_cross">
                                <img src="resource/images/mobile/cross.png">
                            </div>

                        </div>

                    </div>

                    <div class="main_menu_footer_menu">
                        <div class="main_menu_footer_menu_left">
                            <ul>
                                <li class="header_menu">
                                    <a class="footer_header" href="#">About us</a>
                                </li>

                                <li><a href="#">Brief History</a></li>
                                <li><a href="#">Mission Statement</a></li>
                                <li><a href="#">Board Members</a></li>
                                <li><a href="#">People &amp; Diversity</a></li>
                                <li><a href="#">operation Team</a></li>


                            </ul>
                            <ul>
                                <li class="header_menu">
                                    <a class="footer_header" href="#">corporate profile</a>
                                </li>
                                <li><a href="#">Business Highlights</a></li>
                                <li><a href="#">Rethinking The Future</a></li>
                                <li><a href="#">Annual Report</a></li>
                                <li><a href="#">Circular Economy</a></li>

                            </ul>
                            <ul class="media_center">
                                <li class="header_menu">
                                    <a class="footer_header" href="#">media center</a>
                                </li>
                                <li><a href="#">Latest News</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Achievements</a></li>
                                <li><a href="#">Publications</a></li>
                                <li><a href="#">Notice Board</a></li>
                                <li><a href="#">Downloads</a></li>
                                <li><a href="#">gallery</a></li>
                                <li><a href="#">Photo Gallery</a></li>
                                <li><a href="#">video Gallery</a></li>


                            </ul>
                            <ul>
                                <li class="header_menu_gallery">
                                    <a class="footer_header" href="#">gallery</a>
                                </li>
                                <li><a href="#">Photo Gallery</a></li>
                                <li><a href="#">video Gallery</a></li>


                            </ul>

                            <ul>
                                <li class="header_menu">
                                    <a class="footer_header" href="#">contact</a>
                                </li>
                                <li><a href="#">Basic Information</a></li>
                                <li><a href="#">Location Map</a></li>
                            </ul>

                        </div>

                        <div class="main_menu_footer_menu_right">
                            <ul>
                                <li class="header_menu">
                                    <a class="footer_header" href="#">products &amp; services</a>
                                </li>
                                <li><a href="#">Investment Banking</a></li>
                                <li><a href="#">Wealth Management</a></li>
                                <li><a href="#">Fixed Income Business</a></li>
                                <li><a href="#">Brokerage Business</a></li>
                                <li><a href="#">Property and Trading Business</a></li>
                                <li><a href="#">FINI Equity &amp; Sales</a></li>
                                <li><a href="#">Pledge &amp; Un-pledge of Shares</a></li>
                                <li><a href="#">IPO Application Processing</a></li>
                                <li><a href="#">BO Account Openning</a></li>
                                <li><a href="#">Buying &amp; Selling</a></li>


                            </ul>
                            <ul>
                                <li class="header_menu">
                                    <a class="footer_header" href="#">Write to Us</a>
                                </li>

                            </ul>


                            <ul>
                                <li class="header_menu">
                                    <a class="footer_header" href="#">Investoer Relations</a>
                                </li>
                            </ul>

                            <ul>
                                <li class="header_menu">
                                    <a class="footer_header" href="#">reseach &amp; investments</a>
                                </li>
                            </ul>
                            <ul>
                                <li class="header_menu">
                                    <a class="footer_header" href="#">partners</a>
                                </li>
                            </ul>


                            <ul>
                                <li class="header_menu">
                                    <a class="footer_header" href="#">CAREER</a>
                                </li>
                                <li><a href="#">job Opennings</a></li>
                                <li><a href="#">Application Form</a></li>
                                <li><a href="#">CV Upload</a></li>
                            </ul>
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

