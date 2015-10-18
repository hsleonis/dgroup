<?php
/*
 Enterprise page content
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

$titan = TitanFramework::getInstance('wp_dg');
?>
<!--BANNER AREA-->    
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="row banner-wrapper">   
            <div class="banner-img" style="background-image:url('<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true)[0]; ?>');">
                <div class="bluer">
                    <div class="center-btn">
                        <h3><?php
                                $cat = get_the_category();
                                echo $cat[0]->name;
                                $cat_id= $cat[0]->term_id;
                            ?></h3>
                    </div><!--/.center-btn-->
                </div>
            </div><!--/.banner-img-->
        </div> 
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="row banner-wrapper selected-item">
            <ul>
                <?php
                    $args = array('category' => $cat_id,'post_type' => 'enterprise');
                    $catlinks = get_posts( $args );
                    foreach ( $catlinks as $post ) : setup_postdata( $post ); ?>
                        <li>
                            <p>
                                <a href="<?php the_permalink(); ?>"><?php echo ucsmart(get_the_title()); ?></a>
                            </p>
                        </li>
                    <?php endforeach; 
                    wp_reset_postdata();?>
            </ul>
        </div>
        </div> 
    </div>
</div>  
    
<!--PROJECT MENU AREA-->
<div class="container-fluid project-menu">
<div class="row">
    <div class="menu-div">
        <ul class="project-menu-ul">
            <li><a href="#over-view">OVERVIEW</a></li>
            <li><a href="#management">MANAGEMENT</a></li>
            <li><a href="#news-wrapper">RECENT NEWS</a></li>
            <li><a href="#photo-gallery">GALLERY</a></li>
            <li><a href="#contactandform">CONTACT</a></li>
        </ul>
    </div><!--/.menu-div-->
        
</div>
</div> 


    
<!--VIEW AREA-->
<div class="container-fluid">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 view-wrapper">
    <div class="row over-view">
        <div class="over-view-text" id="over-view">
            <h3><?php echo $titan->getOption('post_extra_title'); ?></h3>
            <div class="ov-news-hr"></div>
            <p><?php echo $titan->getOption('post_extra_desc'); ?></p>
        </div><!--/.over-view-text-->
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
    <div class="row view-wrapper">
        <div class="four-sheraton" id="management">
            <h3><?php the_title(); ?></h3>
            <img src="resource/images/d.png" class="img-responsive" alt="#"/>
            <p><?php the_content(); ?></p>
        </div>
    </div>
    </div>
    
</div>
</div>    
    
    
<!--Simple Text bar Area-->
    
<div class="text-bar">
    
    <h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/resource/images/b2.png" alt=""/><?php echo ucsmart($titan->getOption('post_extra_quote')); ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/resource/images/b3.png" alt=""/></h3>
    
</div><!--/.text-bar-->
    
<!-- news -->
<!-- /news -->

<!--Simple Text bar Area-->  
<div class="text-bar b-color">
    <h3>PHOTO GALLERY</h3>
</div><!--/.text-bar-->      
    
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
                    <p><?php echo $item['desc']; ?></p>
                </div>

                    <img src="<?php echo $item['img']; ?>" class="img-responsive" alt=""/>

            </div>
            </a>
        </li>
        <?php endforeach; ?>
      </ul>
</div>
</div>
<?php endif; ?>
    
    
<!--CONTACT US AREA-->    
<div class="container-fluid contact-us-wrapper" id="contactandform">
        <div class="row">
        <div class="col-md-5 contact-address" id="contact-wrapper">
        <div class="address">
            <?php echo $titan->getOption('post_extra_contact'); ?>
        </div>
        </div>
        <div class="col-md-7 from">
        <div class="row">
            <h3>WRITE TO US</h3>
            <div id="contact-from">
                <?php echo do_shortcode('[contact-form-7 id="104" title="Contact"]'); ?>
            </div>
            <!-- contact-from -->
        </div>
        </div>
    </div>
</div>