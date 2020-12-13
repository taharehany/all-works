(function ($) {
  "use strict";

    $('.main_menu .main-menu-item .nav-item a').on('click', function () {
        $('.main_menu .main-menu-item').removeClass('show');
    });

  //menu fixed js code
  $(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 50) {
      $('.main_menu').addClass('menu_fixed animated fadeInDown');
    } else {
      $('.main_menu').removeClass('menu_fixed animated fadeInDown');
    }
  });

    // Gallery Carousel
        if ($('.gallery-carousel').length) {
            $('.gallery-carousel').owlCarousel({
                loop:true,
                dots:false,
                margin:50,
                nav:false,
                autoHeight: true,
                smartSpeed: 500,
                autoplay: 5000,
                navText: [ '<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>' ],
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    800:{
                        items:2
                    },
                    1024:{
                        items:2
                    },
                    1200:{
                        items:2
                    }
                }
            });    		
        }
    
        // Gallery Carousel
        if ($('.clients_carousel').length) {
            $('.clients_carousel').owlCarousel({
                loop:true,
                dots:false,
                margin:50,
                nav:false,
                autoHeight: true,
                smartSpeed: 500,
                autoplay: 5000,
                navText: [ '<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>' ],
                responsive:{
                    0:{
                        items:1
                    },
                    400:{
                        items:2
                    },
                    600:{
                        items:3
                    },
                    800:{
                        items:3
                    },
                    1024:{
                        items:4
                    },
                    1200:{
                        items:4
                    }
                }
            });    		
        }

    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 700,
        speedAsDuration: true,
    });
    
    
}(jQuery));