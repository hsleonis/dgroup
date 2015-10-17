<?php
/*
 Footer file
 License: GPL v3
 Author: MD. Hasan Shahriar
*/

$titan = TitanFramework::getInstance('wp_dg');

?>
  <!-------- Footer Menu ---------->


<?php if(1) : ?>
<div class="container footerMenu">
    <div class="row">

        <div class="footerWrapper">
            <div class="col-md-2 socialIcons">
            <?php if ( is_active_sidebar( 'footer-1' ) ) : 
                dynamic_sidebar( 'footer-1' ); 
            endif; ?>
            </div>
            <div class="col-md-2 aboutUs">
                <?php if ( is_active_sidebar( 'footer-2' ) ) : 
                    dynamic_sidebar( 'footer-2' ); 
                endif; ?>
            </div>
            <div class="col-md-2 management">
                <?php if ( is_active_sidebar( 'footer-3' ) ) : 
                    dynamic_sidebar( 'footer-3' ); 
                endif; ?>
            </div>
            <div class="col-md-2 services">
                <?php if ( is_active_sidebar( 'footer-4' ) ) : 
                    dynamic_sidebar( 'footer-4' ); 
                endif; ?>
            </div>
            <div class="col-md-2 newsEvents">
                <?php if ( is_active_sidebar( 'footer-5' ) ) :
                    dynamic_sidebar( 'footer-5' );
                endif; ?>
            </div>
            <div class="col-md-2 others">
                <?php if ( is_active_sidebar( 'footer-6' ) ) : 
                    dynamic_sidebar( 'footer-6' ); 
                endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

</div>

<!------- Copy Right ------->
<div class="container-fluid copyRightContainer">
   <div class="row">
       <div class="copyRight">
            <?php echo $titan->getOption( 'copy_info' ); ?>
       </div>
   </div>
</div>


<?php wp_footer(); ?>
</body>
</html>