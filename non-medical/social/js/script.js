/*global $ window,document*/

var PATH = {};
$(window).ready(function ($) {
    "use strict"
    $(function () {
        $('.carousel .carousel-inner .item').css({
            height: $('.carousel .carousel-inner .item img').height()
        });

    });


    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 700,
        speedAsDuration: true,
    });


    /** ADD CLASS HEADER **/
    PATH.HeaderSticky = function () {
        $(".navbar-toggler").on("click", function (a) {
            a.preventDefault(),
                $(".navbar").addClass("fixed-header")
        });
    }

    /** NAV COLLAPSE **/
    PATH.MenuClose = function () {
        $('.navbar-nav .nav-link').on('click', function () {
            var toggle = $('.navbar-toggler').is('visible');
            if (toggle) {
                $('.navbar-collapse').collapse('hide');
            }
        });
    }

    /** FIXED HEADER **/
    PATH.HeaderFixed = function () {
        var varHeaderFix = $(window).scrollTop() >= 60,
            $navbar = $('.navbar');
        if (varHeaderFix) {
            $navbar.addClass('fixed-header');
        } else {
            $navbar.removeClass('fixed-header');
        }
    }

    /* Window on scroll function */
    $(window).on("scroll", function () {
        PATH.HeaderFixed();

    });

    $(window).on("scroll", function () {
        $('#home,.about,.marketing,.clients,.services,.contact').each(function () {
            if ($(window).scrollTop() >= $(this).offset().top) {
                var blockId = $(this).attr('id');
                $('.navbar-collapse .navbar-nav li a').removeClass('active');
                $('.navbar-collapse .navbar-nav li a[data-scroll="' + blockId + '"]').addClass('active');
            }
        });
    });

    /* clients */
    $(document).ready(function () {
        $('.slider').slick({
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 5,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            infinite: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
        },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
        }
    ]
        });
    });

});
