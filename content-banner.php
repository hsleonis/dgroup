<?php
/*
 Thumbnail content
 License: GPL v3
 Author: MD. Hasan Shahriar
*/
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