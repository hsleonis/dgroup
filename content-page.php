<?php
/*
 Page content
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

$titan = TitanFramework::getInstance('wp_dg');
?>

    
<!--BANNER AREA-->    
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <div class="row">
            <div class="banner">
                <?php the_post_thumbnail('full',array('class'=>'img-responsive')); ?>
            </div>
        </div>    
        </div>
    </div>
</div>  
    

<!--VIEW AREA-->
<div class="container-fluid">
<div class="row news-bg-color">
    <div class="col-md-4 view-wrapper">
        <h3><?php echo $titan->getOption('post_extra_title'); ?></h3>
        <div class="view-border"></div>
        <div><?php echo $titan->getOption('post_extra_desc'); ?></div>
    </div>
    <div class="col-md-8">
    <div class="row">
        <div class="four-sheraton crm-msg">
            <h3><?php the_title(); ?></h3>
            <div><?php echo get_the_content(); ?></div>
        </div>
    </div>
    </div>
    
</div>
</div>