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
        $imageAttachment = wp_get_attachment_image_src( $imageID );
        $imageSrcfeat[$i] = $imageAttachment[0];
    }
}
//echo do_shortcode('[masterslider id="4"]');

?>

<div class="container-fluid">
   <div class="row">
      <a href="#"><div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 textile">
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
       <a href="#"><div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 holdings">
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
        <a href="inner.html">
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
        <a href="inner.html">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 construction">
            <div class="shadowDivConstruction"></div>
            <div class="constructionUpperDiv">

                <img src="resource/images/common/construction.png">


                <div class="hoverDivConstruction">
                    <p><b>CONSTRUCTION</b></p>
                </div>
                <p class="hoverBottomDiv">Engineering and construction</p>
                <p class="hoverBottomDivConstruction">Building Materials</p>
            </div>
        </div>
        </a>
        <a href="inner.html">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 market">
                    <div class="shadowDivMarket"></div>
            <div class="marketUpperDiv">
                <img src="resource/images/common/market.png">
                <div class="hoverDivMarket">
                    <p><b>CAPITAL</b></p><p class="textMarket">MARKET</p>
                </div>
                <p class="hoverBottomDiv">Investment & capital market</p>
                <p class="hoverBottomDivMarket">international trade & commerce</p>
            </div>
        </div>
        </a>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <a href="inner.html">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 powerGeneration">
                <div class="shadowDivPower"></div>
                <div class="powerGenerationUpperDiv">
                    <img src="resource/images/common/power.png">
                    <div class="hoverDivpowerGeneration">
                        <p><b>POWER GENERATION</b></p>
                    </div>
                    <p class="hoverBottomDiv">Doreen Power House Ltd.</p>
                </div>
            </div>
        </a>
        <a href="inner.html">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 internationalTrade">
                <div class="shadowDivTrade"></div>
                <div class="internationalTradeUpperDiv">
                    <img src="resource/images/common/int_trade_commerce-th.png">
                    <div class="hoverDivinternationalTrade">
                        <p><b>INTERNATIONAL</b></p> <p>TRADE & COMMERCE</p>
                    </div>
                    <!--<p class="hoverBottomDiv">Investment & capital market</p>-->
                </div>
            </div>
        </a>
        <a href="inner.html">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 managementService">
                <div class="shadowDivManagement"></div>
                <div class="managementServiceUpperDiv">
                    <img src="resource/images/common/management.png">
                    <div class="hoverDivmanagementService">
                      <p>MANAGEMENT</p><p>SERVICES</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <a href="inner.html">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 powerGeneration">
                <div class="shadowDivPower"></div>
                <div class="powerGenerationUpperDiv">
                    <img src="resource/images/common/power.png">

                    <div class="hoverDivpowerGeneration">
                        <p><b>POWER GENERATION</b></p>
                    </div>
                    <p class="hoverBottomDiv">Doreen Power House Ltd.</p>
                </div>
            </div>
        </a>
        <a href="inner.html">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 internationalTrade">
                <div class="shadowDivTrade"></div>
                <div class="internationalTradeUpperDiv">
                    <img src="resource/images/common/int_trade_commerce-th.png">
                    <div class="hoverDivinternationalTrade">
                        <p><b>INTERNATIONAL</b></p> <p>TRADE & COMMERCE</p>
                    </div>
                    <!--<p class="hoverBottomDiv">Investment & capital market</p>-->
                </div>
            </div>
        </a>
        <a href="inner.html">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 managementService">
                <div class="shadowDivManagement"></div>
                <div class="managementServiceUpperDiv">
                    <img src="resource/images/common/management.png">
                    <div class="hoverDivmanagementService">
                      <p>MANAGEMENT</p><p>SERVICES</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!--<a href="#"><p class="allConcerns">View All Concerns</p></a>-->
            <div class="text-bar">
                <h3><img src="resource/images/b2.png" alt=""/><b>A</b> <b>G</b>REAT <b>P</b>LACE <b>T</b>O <b>P</b>LAY &amp; <b>S</b>TAY<img src="resource/images/b3.png" alt=""/></h3>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="plax ccparallax ccparallax-one">
            <div class="parallexContent">
                <p class="parallexHeading">The Vision</p>
                <p class="parallexDescription">
                    Only dream shows the road and road creates the map for goal
                </p>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <p class="missionHeading">The Mission</p>
        <p class="missionDescription">To lead the private industrial sector of national economy through innovation,
            diversification and specification.</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 missionThumbnail1">
            <div class="test">
            <a href="inner.html">
                <img src="resource/images/common/feat1.png" width="100%">
                <div class="missionThumbnailBottom">
                        <div class="text">Our <br> Heritage</div>
                        <div class="icon">
                            <div class="iconImage"></div>
                        </div>
                </div>
            </a>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 missionThumbnail1">
            <div class="test">
            <a href="inner.html">
                <img src="resource/images/common/feat2.png" width="100%">
                <div class="missionThumbnailBottom">
                    <div class="text">Corporate <br> Management</div>
                    <div class="icon">
                        <div class="iconImage"></div>
                    </div>
                </div>
            </a>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 missionThumbnail1">
            <div class="test">
            <a href="inner.html">
                <img src="resource/images/common/feat3.png" width="100%">
                <div class="missionThumbnailBottom">
                    <div class="text">Honourable <br> Chairman's Profile</div>
                    <div class="icon">
                        <div class="iconImage"></div>
                    </div>
                </div>
            </a>
                </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 missionThumbnail1">
            <div class="test">
            <a href="inner.html">
                <img src="resource/images/common/feat4.png" width="100%">
                <div class="missionThumbnailBottom">
                    <div class="text">Board Of <br> Director's Profile</div>
                    <div class="icon">
                        <div class="iconImage"></div>
                    </div>
                </div>
            </a>
                </div>
        </div>
    </div>
</div>

<?php
    get_footer();