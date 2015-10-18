<?php
/*
Template name: Home template
*/

get_header();

$titan = TitanFramework::getInstance('wp_dg');
$imageSrcfeat = array();
for($i=1;$i<=8;$i++){
    $imageID = $titan->getOption( 'feat'.$i.'_img' );
    $imageSrcfeat[$i] = $imageID;
    if ( is_numeric( $imageID ) ) {
        $imageAttachment = wp_get_attachment_image_src( $imageID, 'full' );
        $imageSrcfeat[$i] = $imageAttachment[0];
    }
}
$imageID = $titan->getOption( 'par_img' );
$imageSrcPar = $imageID;
if ( is_numeric( $imageID ) ) {
    $imageAttachment = wp_get_attachment_image_src( $imageID, 'full' );
    $imageSrcPar = $imageAttachment[0];
}
$imageSrcSlide = array();
for($i=1;$i<=5;$i++){
    $imageID = $titan->getOption( 'slide'.$i.'_img' );
    $imageSrcSlide[$i] = $imageID;
    if ( is_numeric( $imageID ) ) {
        $imageAttachment = wp_get_attachment_image_src( $imageID, 'full' );
        $imageSrcSlide[$i] = $imageAttachment[0];
    }
}

?>

<!-----  Slider ------>
<div class="fluid_container">
    <div class="camera_wrap camera_magenta_skin" id="camera_wrap_2">
        
        <?php for($i=1;$i<=5;$i++) : ?>
        <div data-thumb="<?php echo esc_url( $imageSrcSlide[$i] ); ?>" data-src="<?php echo esc_url( $imageSrcSlide[$i] ); ?>">
            <div class="camera_caption fadeIn">

                <div class="captionHeaderDiv"><?php echo $titan->getOption( 'slide'.$i.'_caption' ); ?></div>
                <div class="captionBody">
                    <div class="captionHeading"><p><b><?php echo $titan->getOption( 'slide'.$i.'_title' ); ?></b></p>
                        <p class="captionDescription"><?php echo $titan->getOption( 'slide'.$i.'_desc' ); ?></p>
                        <p class="captionFooter"> <a href="<?php echo $titan->getOption( 'slide'.$i.'_footer_link' ); ?>"><?php echo $titan->getOption( 'slide'.$i.'_footer' ); ?></a></p>
                    </div>
                </div>
            </div>

        </div>
        <?php endfor; ?>
    </div>

</div>
<!-- /slider -->

<div class="container-fluid">
   <div class="row">
      <a href="<?php echo $titan->getOption( 'feat1_link' ); ?>">
          <div class="col-md-8 col-xs-12 textile">
          <div class="shadowDivTextile" style="<?php echo 'background-color: '.$titan->getOption( 'feat1_color' ).';' ?>"></div>
          <div class="textileUpperDiv">
              <img src="<?php echo esc_url( $imageSrcfeat[1] ); ?>">
              <div class="hoverDivTextile">
                  <p><?php echo $titan->getOption( 'feat1_title1_text' ); ?></p>
              </div>
              <p class="hoverBottomDiv"><?php echo $titan->getOption( 'feat1_sub_text' ); ?></p>
          </div>
      </div>
      </a>
       <a href="<?php echo $titan->getOption( 'feat2_link' ); ?>">
           <div class="col-md-4 col-xs-12 holdings">
           <div class="shadowDivHoldings" style="<?php echo 'background-color: '.$titan->getOption( 'feat2_color' ).';' ?>"></div>
           <div class="holdingsUpperDiv">
               <img src="<?php echo esc_url( $imageSrcfeat[2] ); ?>">
               <div class="hoverDivHoldings">
                   <p><?php echo $titan->getOption( 'feat2_title2_text' ); ?></p>
                   <p><b><?php echo $titan->getOption( 'feat2_title1_text' ); ?></b></p>
               </div>
               <p class="hoverBottomDiv"><?php echo $titan->getOption( 'feat2_sub_text' ); ?></p>
           </div>
       </div>
       </a>
   </div>
</div>
<div class="container-fluid">
    <div class="row">
        <a href="<?php echo $titan->getOption( 'feat3_link' ); ?>">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hotel">
            <div class="shadowDivHotel" style="<?php echo 'background-color: '.$titan->getOption( 'feat3_color' ).';' ?>"></div>
            <div class="hotelUpperDiv">
                <img src="<?php echo esc_url( $imageSrcfeat[3] ); ?>">
                <div class="hoverDivHotel">
                    <p class="hotelsBorder"><b><?php echo $titan->getOption( 'feat3_title1_text' ); ?></b></p><p><?php echo $titan->getOption( 'feat3_title2_text' ); ?></p>
                </div>
                <div class="hoverBottomDiv"><?php echo $titan->getOption( 'feat3_sub_text' ); ?></div>
            </div>
        </div>
        </a>
        <a href="<?php echo $titan->getOption( 'feat4_link' ); ?>">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 construction">
            <div class="shadowDivConstruction" style="<?php echo 'background-color: '.$titan->getOption( 'feat4_color' ).';' ?>"></div>
            <div class="constructionUpperDiv">

                <img src="<?php echo esc_url( $imageSrcfeat[4] ); ?>">


                <div class="hoverDivConstruction">
                    <p><b><?php echo $titan->getOption( 'feat4_title1_text' ); ?></b></p>
                </div>
                <p class="hoverBottomDiv"><?php echo $titan->getOption( 'feat4_title2_text' ); ?></p>
                <p class="hoverBottomDivConstruction"><?php echo $titan->getOption( 'feat4_sub_text' ); ?></p>
            </div>
        </div>
        </a>
        <a href="<?php echo $titan->getOption( 'feat5_link' ); ?>">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 market">
                    <div class="shadowDivMarket" style="<?php echo 'background-color: '.$titan->getOption( 'feat5_color' ).';' ?>"></div>
            <div class="marketUpperDiv">
                <img src="<?php echo esc_url( $imageSrcfeat[5] ); ?>">
                <div class="hoverDivMarket">
                    <p><b><?php echo $titan->getOption( 'feat5_title1_text' ); ?></b></p><p class="textMarket"><?php echo $titan->getOption( 'feat5_title2_text' ); ?></p>
                </div>
                <p class="hoverBottomDiv"><?php echo $titan->getOption( 'feat5_sub_text' ); ?></p>
            </div>
        </div>
        </a>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <a href="<?php echo $titan->getOption( 'feat6_link' ); ?>">
            <div class="col-md-4 col-xs-12 powerGeneration">
                <div class="shadowDivPower" style="<?php echo 'background-color: '.$titan->getOption( 'feat6_color' ).';' ?>"></div>
                <div class="powerGenerationUpperDiv">
                    <img src="<?php echo esc_url( $imageSrcfeat[6] ); ?>">
                    <div class="hoverDivpowerGeneration">
                        <p><b><?php echo $titan->getOption( 'feat6_title1_text' ); ?></b></p>
                    </div>
                    <p class="hoverBottomDiv"><?php echo $titan->getOption( 'feat6_sub_text' ); ?></p>
                </div>
            </div>
        </a>
        <a href="<?php echo $titan->getOption( 'feat7_link' ); ?>">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 internationalTrade">
                <div class="shadowDivTrade" style="<?php echo 'background-color: '.$titan->getOption( 'feat7_color' ).';' ?>"></div>
                <div class="internationalTradeUpperDiv">
                    <img src="<?php echo esc_url( $imageSrcfeat[7] ); ?>">
                    <div class="hoverDivinternationalTrade">
                        <p><b><?php echo $titan->getOption( 'feat7_title1_text' ); ?></b></p> <p><?php echo $titan->getOption( 'feat7_title2_text' ); ?></p>
                    </div>
                    <!--<p class="hoverBottomDiv">Investment & capital market</p>-->
                </div>
            </div>
        </a>
        <a href="<?php echo $titan->getOption( 'feat8_link' ); ?>">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 managementService">
                <div class="shadowDivManagement" style="<?php echo 'background-color: '.$titan->getOption( 'feat8_color' ).';' ?>"></div>
                <div class="managementServiceUpperDiv">
                    <img src="<?php echo esc_url( $imageSrcfeat[8] ); ?>">
                    <div class="hoverDivmanagementService">
                      <p><?php echo $titan->getOption( 'feat8_title1_text' ); ?></p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<!-- Quote -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="text-bar">
                <h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/resource/images/b2.png" alt=""/>
                    <?php echo ucsmart($titan->getOption('quote_text')); ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/resource/images/b3.png" alt=""/></h3>
            </div>
        </div>
    </div>
</div>

<!-- Parallax -->
<div class="container-fluid">
    <div class="row">
        <div class="plax ccparallax ccparallax-one" style="background-image: url('<?php echo esc_url( $imageSrcPar ); ?>');">
            <div class="parallexContent">
                <p class="parallexHeading"><?php echo $titan->getOption( 'par_title_text' ); ?></p>
                <p class="parallexDescription">
                    <?php echo $titan->getOption( 'par_sub_text' ); ?>
                </p>
            </div>
        </div>
    </div>
</div>


<!-- Posts -->
<div class="container">
    <div class="row">
        <p class="missionHeading"><?php echo $titan->getOption( 'post_title_text' ); ?></p>
        <p class="missionDescription"><?php echo $titan->getOption( 'post_sub_text' ); ?></p>
    </div>
</div>

<div class="container">
    <div class="row">
    <?php
        $args = array( 'posts_per_page' => $titan->getOption( 'post_count' ));

        $allposts = get_posts( $args );
        foreach ( $allposts as $post ) : setup_postdata( $post ); ?>

        <div class="col-xs-6 col-md-3 mission">
            <div class="test">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(array(550,350)); ?>
                    <div class="missionThumbnailBottom">
                        <div class="text"><?php the_title(); ?></div>
                        <div class="icon">
                            <div class="iconImage"></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <?php
            endforeach; 
            wp_reset_postdata();
        ?>
    </div>
</div>

<?php
    get_footer();