<?php
/*
 Career page
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

get_header();
while(have_posts()):the_post();
    $title = get_the_title();
?>

<div class="container-fluid news-wrapper" id="news-wrapper">
    <div class="col-md-4">
        <div class="news-header">
            <h3>CAREER</h3>
        </div>
        <!--/.news-header-->

        <div class="news-box">
            <ul class="">
                <?php
                    $args = array('post_type' => 'career','posts_per_page' => -1);
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
    </div>
    <div class="col-md-8 news-display tab-content">
        <div role="tabpanel" class="tab-pane active news-view" id="nav-item">
            <div class="news-header">
                <h3><?php the_title(); ?></h3>
            </div>
            <!--/.news-header-->
            <div class="news-hr"></div>
            <div class="career-content">
                <?php echo get_the_content(); ?>
            </div>
            <div id="contact-from">
                <div class="news-header">
                    <h3>APPLY ONLINE</h3>
                </div>
                <div class="news-hr"></div>
                <?php echo do_shortcode('[contact-form-7 id="587" title="Career"]'); ?>
            </div>
            <div class="n-text-wrp">
                <?php ?>
            </div>
            <!--/.n-text-wrp-->
        </div>
        <!--/.news-view-->
    </div>
</div>

<?php
endwhile;

get_footer();