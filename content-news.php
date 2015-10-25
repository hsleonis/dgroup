<?php
/*
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

$titan = TitanFramework::getInstance('wp_dg');
$title = get_the_title();

 $args = array(
	'type'                     => 'news',
	'child_of'                 => 0,
	'parent'                   => '',
	'orderby'                  => 'name',
	'order'                    => 'ASC',
	'hide_empty'               => 1,
	'hierarchical'             => 1,
	'exclude'                  => '',
	'include'                  => '',
	'number'                   => '',
	'taxonomy'                 => 'newscat',
	'pad_counts'               => false 
    ); 
    $list = get_categories( $args );
?>
<?php //print_r($list); ?>

<!-- news -->
<div class="container-fluid news-wrapper" id="news-wrapper">
    <div class="col-md-6">
    <?php foreach($list as $cat): ?>
        <div class="news-header">
            <h3><?php echo $cat->cat_name; ?></h3>
        </div>
        <!--/.news-header-->

        <div class="news-box">
            <ul class="">
                <?php
                    $args = array('newscat' => $cat->cat_name, 'post_type' => 'news','posts_per_page' => -1);
                    $catlinks = get_posts( $args );
                    foreach ( $catlinks as $post ) : setup_postdata( $post );
                ?>
                    <li <?php if($title===get_the_title()) echo "class='active'";?>>
                        <a href="<?php echo get_the_permalink(); ?>">
                            <div class="number-box">
                                <h3><?php echo get_the_date('d/m'); ?></h3></div>
                            <div class="news-text">
                                <h3><?php echo substr(get_the_title(),0,25); if(strlen(get_the_title())>25) echo ".."; ?></h3>
                            </div>
                        </a>
                    </li>
                    <?php
                            endforeach;
                            wp_reset_postdata();
                    ?>
            </ul>
        </div>
        <!--/.news-box-->
<?php endforeach; ?>
    </div>
    <div class="col-md-6 news-display tab-content">
        <div role="tabpanel" class="tab-pane active news-view" id="nav-item">
            <div class="news-header">
                <h3><?php the_title(); ?></h3>
            </div>
            <!--/.news-header-->
            <div class="news-hr"></div>
            <p><?php the_content(); ?></p>
            <div class="n-text-wrp">
                <?php ?>
            </div>
            <!--/.n-text-wrp-->
        </div>
        <!--/.news-view-->
    </div>
</div>
<!--/#news-wrapper-->
<!-- /news -->