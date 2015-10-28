<?php
/*
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

?>
<!--NEWS AREA-->
<?php
    $text = get_post_meta( get_the_ID(), '_dgn_news', true );
    if($text):
    $loopcount = 1;
?>
<div class="container-fluid news-wrapper" id="news-wrapper">
    <div class="col-md-6">
        <div class="news-header">
            <h3>RECENT NEWS</h3>
        </div>
        <!--/.news-header-->

        <div class="news-box">
            <ul class="" role="tablist">
                <?php foreach($text as $item): ?>
                    <li role="presentation" <?php if($loopcount==1) echo "class='active'";?> >
                        <a href="<?php echo get_the_permalink()."#nav-item-".$loopcount; ?>" aria-controls="nav-item-<?php echo $loopcount; ?>" role="tab" data-toggle="tab">
                            <div class="number-box">
                                <h3><?php echo substr($item['textdate'],0,5); ?></h3></div>
                            <div class="news-text">
                                <h3><?php echo substr($item['title'],0,25); if(strlen($item['title'])>25) echo ".."; ?></h3>
                            </div>
                        </a>
                    </li>
                    <?php $loopcount++; endforeach; ?>
            </ul>
        </div>
        <!--/.news-box-->

    </div>
    <div class="col-md-6 news-display tab-content">
        <?php $loopcount=1;foreach($text as $item): ?>
            <div role="tabpanel" class="tab-pane <?php if($loopcount==1) echo " active ";?> news-view" id="nav-item-<?php echo $loopcount; ?>">
                <div class="news-header">
                    <h3><?php echo $item['title']; ?></h3>
                </div>
                <!--/.news-header-->
                <div class="news-hr"></div>
                <p><?php echo $item['content']; ?></p>
                <div class="n-text-wrp">
                    <?php ?>
                </div>
                <!--/.n-text-wrp-->
            </div>
            <!--/.news-view-->
            <?php $loopcount++; endforeach; ?>
    </div>

</div>
<!--/#news-wrapper-->
<?php endif; ?>
    <!-- /news -->