<?php
/*
 Page content
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

$titan = TitanFramework::getInstance('wp_dg');
?>

<!--VIEW AREA-->
<div class="container-fluid">
<div class="row news-bg-color flexbox">
    <div class="col-md-4 view-wrapper page-overview">
        <h3><?php echo $titan->getOption('post_extra_title'); ?></h3>
        <div class="view-border"></div>
        <div><?php echo $titan->getOption('post_extra_desc'); ?></div>
    </div>
    <div class="col-md-8 flexbox">
    <div class="row">
        <div class="four-sheraton crm-msg">
            <h3><?php the_title(); ?></h3>
            <div class="view-content"><?php the_content(); ?></div>
        </div>
    </div>
    </div>
    
</div>
</div>