/*global $, $window, clearTimeout, setTimeout*/

$('document').ready(function() {

    $('.tp-banner').show().revolution(
        {
            dottedOverlay:"none",
            delay:1000,
            hideThumbs:200,

            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,

            navigationType:"bullet",
            navigationArrows:"solo",
            navigationStyle:"preview1",

            touchenabled:"on",
            onHoverStop:"on",

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,

            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

            keyboardNavigation:"off",

            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,

            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,

            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,

            shadow:0,
            fullWidth:"on",
            autoHeight:"on",
            fullScreen:"on",

            spinner:"spinner4",

            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,

            shuffle:"off",
            forceFullWidth:"off",

            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,

            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0,
            videoJsPath:"slider-revolution/videojs/",
            fullScreenOffsetContainer: ""
        });
    
  
            $(".nav-link").on("click", function (e) {
                $("body, html").animate({
                    scrollTop: $('#' + $(this).data('scroll')).offset().top - 50
                        
            }, 500);
                
            $('.navbar .nav-link').addClass('active').siblings().removeClass('active');
        });    
        
    
        /** Full screen banner init **/
    
        $window.bind("resizeEnd", function () {
            $("#fullscreen-banner").height($window.height());
        });

        $window.resize(function () {
            if (this.resizeTO) clearTimeout(this.resizeTO);
            this.resizeTO = setTimeout(function () {
                $(this).trigger("resizeEnd");
            }, 300);
        }).trigger("resize");
    

}); 

    window.onload = function() {

        // Variables
        var nav = document.querySelector('.navbar');
        var navTop = nav.offsetTop;

         // Functions
        function navFixed(e) {
            if(window.scrollY > navTop) {
                nav.classList.add('is-fixed');
            } else {
                nav.classList.remove('is-fixed');
            }
        }

        window.addEventListener('scroll', navFixed);
    }
    
    window.onload = function() {

        // Variables
        var nav = document.querySelector('body.page .navbar');
        var navTop = nav.offsetTop;

         // Functions
        function navFixed2(e) {
            if(window.scrollY > navTop) {
                nav.classList.add('is_fixed_page');
            } else {
                nav.classList.remove('is_fixed_page');
            }
        }

        window.addEventListener('scroll', navFixed2);
    }




