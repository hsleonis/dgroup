<?php
/*
 Media Gallery Content
 License: GPL v3
 Author: MD. Hasan Shahriar
*/
$titan = TitanFramework::getInstance('wp_dg');
?>

<!--PHOTO GALLERY-->
<?php
    $text = get_post_meta( get_the_ID(), '_dg_gallery', true );
    if($text):
?>
<div class="container-fluid">
    <div class="row">
        <ul id="photo-gallery">
            <?php foreach($text as $item): ?>
                <li class="col-md-4 col-xs-6" data-src="<?php echo $item['img']; ?>">
                    <a href="#">
                        <div class="row pg">

                            <div class="hoverdiv">
                                <p>
                                    <?php echo $item['desc']; ?>
                                </p>
                            </div>

                            <img src="<?php echo $item['img']; ?>" class="img-responsive" alt="" />

                        </div>
                    </a>
                </li>
                <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php endif; ?>