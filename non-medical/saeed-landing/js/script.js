(function ($) {
    "use strict";
    jQuery(document).on('ready', function () {
        // clients-active
        $('.clients_carousel').owlCarousel({
            loop: true,
            margin: 25,
            items: 1,
            autoplay: true,
            navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
            nav: true,
            dots: true,
            autoplayHoverPause: true,
            autoplaySpeed: 800,
            responsive: {
                0: {
                    items: 2,
                    nav: false,
                },
                767: {
                    items: 3,
                    nav: false,
                },
                992: {
                    items: 3,
                    nav: false
                },
                1200: {
                    items: 5,
                    nav: false
                },
                1600: {
                    items: 5,
                    nav: true
                }
            }
        });

        /* Pop Up Video */
        $('.popup-video').magnificPopup({
            type: 'iframe',
            iframe: {
                patterns: {
                    youtube: {
                        index: 'youtube.com',
                        src: 'https://www.youtube.com/embed/yzIkF1ARfu0?autoplay=1'
                    }
                }
            }
        });
    });
}(jQuery));