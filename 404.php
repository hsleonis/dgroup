<?php
/*
 404 page
 License: GPL v3
 Author: MD. Hasan Shahriar
*/
get_header();
?>
<!--Simple Text bar Area-->
<div class="text-bar">
    <h3>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/resource/images/b2.png" alt=""/>
        <?php echo ucsmart("Sorry, we do not found what you are looking for.."); ?>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/resource/images/b3.png" alt=""/>
    </h3>
</div>
<!--/.text-bar-->
<?php
get_footer();