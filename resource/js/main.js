jQuery(document).ready(function ($) {

    $('#camera_wrap_2').camera({
        height: '500px',
        loader: 'none',
        pagination: false,
        thumbnails: true,
        fx: 'simpleFade'
    });
    $(".textileUpperDiv").zoomScroller();

    $(".constructionUpperDiv").zoomScroller({
        animationTime: 4000,
    });

    $(".marketUpperDiv").zoomScroller();

    $(".powerGenerationUpperDiv").zoomScroller();

    $(".internationalTradeUpperDiv").zoomScroller({
        animationTime: 3000,
    });

    $(".managementServiceUpperDiv").zoomScroller();

    $(".hotelUpperDiv").zoomScroller({
        animationTime: 2000,
        zoom: 1.5,
        initZoom: 1
    });

    $(".holdingsUpperDiv").zoomScroller({
        animationTime: 500
    });
    

    $(document)
    .on('click', '.project-menu a[href*="#"]', function() {
      if ( this.hash && this.pathname === location.pathname ) {
        $.bbq.pushState( '#/' + this.hash.slice(1) );
        return false;
      }
    })
    .ready(function() {
      $(window).bind('hashchange', function(event) {
        var tgt = location.hash.replace(/^#\/?/,'');
        if ( document.getElementById(tgt) ) {
          $.smoothScroll({scrollTarget: '#' + tgt});
            console.log(tgt);
        }
      });

      $(window).trigger('hashchange');
    });

/*========================================
            Light Gallery
========================================*/
    $("#photo-gallery").lightGallery();


    resize_function();


    function resize_function() {
        $(".mobilemenu_container img").click(function () {
            $('.menu_section').css({
                'display': 'block'
            });
            $('body').css({
                'overflow': 'visible'
            })
        });

        $(".menu_cross img").click(function () {
            $('.menu_section').css({
                'display': 'none'
            });

        });


        $(document).ready(function () {
            $(".search_btn_top img").click(function () {
                $("#searchContainer").slideToggle("slow");
            });
        });
    }

});