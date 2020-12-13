(function ($) {
    "use strict"
    /* 1. Proloder */
    $(window).on('load', function () {
        $('#preloader-active').delay(450).fadeOut('slow');
        $('body').delay(450).css({
            'overflow': 'visible'
        });
    });
    
    $(window).on('load', function () {
        $('.counter').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 2000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });

    });


    $(window).on("scroll", function () {
        $('#home, #about, #services, #why, #clients, #contact').each(function () {
            if ($(window).scrollTop() >= $(this).offset().top - 50) {
                var blockId = $(this).attr('id');
                $('.header-area .main-header .main-menu nav ul li a').removeClass('active');
                $('.header-area .main-header .main-menu nav ul li a[data-scroll="' + blockId + '"]').addClass('active');
            }
        });
    });

    $(window).on("scroll", function () {
        $(".mobile_menu .slicknav_menu .slicknav_nav a").click(function () {
            $(".mobile_menu .slicknav_menu .slicknav_nav").addClass('slicknav_none');
        });
        $(".slicknav_btn").click(function () {
            $(".mobile_menu .slicknav_menu .slicknav_nav").removeClass('slicknav_none');
        });
    });

    /* 2. sticky And Scroll UP */
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 400) {
            $(".header-sticky").removeClass("sticky-bar");
            $('#back-top').fadeOut(500);
        } else {
            $(".header-sticky").addClass("sticky-bar");
            $('#back-top').fadeIn(500);
        }
    });

    // Scroll Up
    $('#back-top a').on("click", function () {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    // wow js
    new WOW().init();

    /* 3. slick Nav */
    // mobile_menu
    var menu = $('ul#navigation');
    if (menu.length) {
        menu.slicknav({
            prependTo: ".mobile_menu",
            closedSymbol: '+',
            openedSymbol: '-'
        });
    };

    /* 4. MainSlider-1 */
    // h1-hero-active
    $('.slider-full-active').owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        navText: ['<i class="icofont icofont-long-arrow-left"></i>', '<i class="icofont icofont-long-arrow-right"></i>'],
        nav: false,
        autoplay: true,
        lazyLoad: true,
        smartSpeed: 1000,
        fluidSpeed: 2000,
        autoplaySpeed: 1000,
        autoplayTimeout: 9000,
        dots: true,
        responsive: {
            0: {
                items: 1,
                dots: false
            },
            767: {
                items: 1
            },
            992: {
                items: 1
            }
        }
    })

    var dot = $('.slider-active .owl-dot , .slider-full-active .owl-dot');
    dot.each(function () {
        var index = $(this).index() + 1;
        if (index < 10) {
            $(this).html('0').append(index);
        } else {
            $(this).html(index);
        }
    });


    /* ~~~ Testimonial Slider 2 ~~~ */
    $('.clients-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        touchDrag: true,
        lazyLoad: true,
        smartSpeed: 1000,
        fluidSpeed: 1000,
        autoplay: true,
        rtl: true,
        autoplayTimeout: 1500,
        autoplaySpeed: 500,
        animateIn: true,
        rtlClass: 'owl-ltr',
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 5
            }
        }
    });

    /* 6. Nice Selectorp  */
    var nice_Select = $('select');
    if (nice_Select.length) {
        nice_Select.niceSelect();
    }

    /* 7. data-background */
    $("[data-background]").each(function () {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
    });


    /* 10. WOW active */
    new WOW().init();


    // 12 Pop Up Img
    var popUp = $('.single_gallery_part, .img-pop-up');
    if (popUp.length) {
        popUp.magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    }

   // 12 Pop Up Video
    $('.popup-video').magnificPopup({
        type: 'iframe',
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com',
                    src: 'https://www.youtube.com/embed/pUc4D8zjDHU?start=1'
                }
            }
        }
    });
    
    // 12 Pop Up Video
    $('.popup-video2').magnificPopup({
        type: 'iframe',
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com',
                    src: 'https://www.youtube.com/embed/b5UWxAbaLAk'
                }
            }
        }
    });
    
    var scroll = new SmoothScroll('.main-menu ul li a[href*="#"]', {
        speed: 700,
        speedAsDuration: true,
    });
    
    //17. hamburger Menu
    /*$('.hamburger').on('click', function() {
      $(this).toggleClass('is-active');
      $(this).next().toggleClass('nav-menu-show')
    });*/

})(jQuery);
