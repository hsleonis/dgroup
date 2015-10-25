jQuery(document).ready(function ($) {
    
    new WOW().init();
    
    $(".preloader").fadeOut(2000);
    
    $(document).on("click","a[href*='http']",function(){
        $(".preloader").fadeIn(50);
    });
    
    $(".project-menu-ul a").smoothScroll();
    
    $("#photo-gallery").imagesLoaded(function(){
        $("img").animate({
            'opacity': 1
        },500);
        $("#photo-gallery").lightGallery();
    });
    
    $(".mission").imagesLoaded(function(){
        $("img").animate({
            'opacity': 1
        },500);
    });
    
    $(".banner").imagesLoaded(function(){
        $("img").animate({
            'opacity': 1
        },500);
    });
    
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

        $(".search_btn_top img").click(function () {
            $("#searchContainer").slideToggle("slow");
        });
    }

});