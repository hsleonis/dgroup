!function(e){var a={zoom:1,initZoom:1.15,animationTime:2e3,easing:"ease",onZoom:null,beforeZoom:null,afterZoom:null,offsetTop:0,offsetBottom:200};e.fn.zoomScroller=function(t){return this.each(function(){var i=e.extend({},a,t),r=e(this),o=0,s=r.find("> img");r.addClass("zs-wrapper").css("overflow","hidden").prepend("<div class='zs-img'></div>"),s.remove();var n=r.find("> .zs-img");n.css({background:"url("+s.attr("src")+") center center no-repeat","background-size":"cover",overflow:"hidden",width:"100%",height:"100%","-webkit-transform":"scale("+i.initZoom+")","-moz-transform":"scale("+i.initZoom+")","-o-transform":"scale("+i.initZoom+")",transform:"scale("+i.initZoom+")","-webkit-transition":"-webkit-transform "+i.animationTime+"ms "+i.easing,"-moz-transition":"-moz-transform "+i.animationTime+"ms "+i.easing,"-ms-transition":"-o-transform "+i.animationTime+"ms "+i.easing,transition:"transform "+i.animationTime+"ms "+i.easing});var c,l=!1;e("body").on("touchstart",function(){1==event.touches.length&&(c=event.touches[0].pageY,l=!0)}),e("body").on("touchend",function(){l=!1,c=null}),e(document).on("touchmove mousewheel DOMMouseScroll",function(){o=e(document).scrollTop(),r.is_on_screen(e(document).scrollTop())?("function"==typeof i.beforeZoom&&i.beforeZoom(n.parent(),"in"),n.css({"-webkit-transform":"scale("+i.zoom+")","-moz-transform":"scale("+i.zoom+")","-o-transform":"scale("+i.zoom+")",transform:"scale("+i.zoom+")"}).one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",function(){"function"==typeof i.afterZoom&&i.afterZoom(n.parent(),"in")}),"function"==typeof i.onZoom&&i.onZoom(n.parent(),"in")):("function"==typeof i.beforeZoom&&i.beforeZoom(n.parent(),"out"),n.css({"-webkit-transform":"scale("+i.initZoom+")","-moz-transform":"scale("+i.initZoom+")","-o-transform":"scale("+i.initZoom+")",transform:"scale("+i.initZoom+")"}).one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",function(){"function"==typeof i.afterZoom&&i.afterZoom(n.parent(),"in")}),"function"==typeof i.onZoom&&i.onZoom(n.parent(),"out"))}),e.fn.is_on_screen=function(a){var o={top:a};o.bottom=o.top+e(window).height();var s=this.offset();return s.top=this.offset().top,s.bottom=this.offset().top+this.height(),!(o.bottom-i.offsetBottom<s.top||o.top-i.offsetTop>s.bottom)}})}}(window.jQuery);