jQuery(document).ready(function ($) {
    
    new WOW().init();
    
    $(".preloader").fadeOut(2000);
    
    $(document).on("click","a[href*='http']",function(){
        $(".preloader").fadeIn(50);
    });
    
    $(".project-menu-ul a").smoothScroll();
    
    $("#photo-gallery").imagesLoaded(function(){
        $("#photo-gallery img").animate({
            'opacity': 1
        },500);
        $("#photo-gallery").lightGallery({
            thumbnail:true,
            animateThumb: false,
            showThumbByDefault: false
        });
    });
    
    $("#products").imagesLoaded(function(){
        $("#products img").animate({
            'opacity': 1
        },500);
        $("#products").lightGallery({
            thumbnail:true,
            animateThumb: false,
            showThumbByDefault: false,
            galleryId: 2,
            addClass: 'dg-products',
        });
    });
    
    $(".mission").imagesLoaded(function(){
        $(".mission img").animate({
            'opacity': 1
        },500);
    });
    
    $(".banner").imagesLoaded(function(){
        $(".banner img").animate({
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


    $(".mobilemenu_container>img").click(function () {
        slideRight('.menu_section');
        $('.menu_cross').css({
            'display': 'block'
        });
        $('body').css({
            'overflow': 'visible'
        });
    });

    $(".menu_cross img").click(function () {
        slideLeft('.menu_section');
        $('.menu_cross').css({
            'display': 'none'
        });

    });

    $(".search_btn_top img").click(function () {
        $("#searchContainer").slideToggle("slow");
    });

    
    $( ".menu li" ).click(function() {
        $('.menu li .sub-menu').css({
                'display': 'none'
        });
        
        var menu = $( this);
        menu.find('.sub-menu').css({
                'display': 'block'
        });
    });
    
    // Slide to Left
    function slideLeft(item) {
        $(item).animate({
            left: -100 + '%'
        }, 500);
    }

    // Slide to Bottom
    function slideRight(item) {
        $(item).animate({
            left: 0
        }, 500);
    }

});


