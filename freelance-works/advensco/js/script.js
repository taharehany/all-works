$(document).ready(function () {
    $(window).scroll(function () {
        checkElementGroup()
    });
    $(window).resize(function (event) {
        var window_width = $(window).width()
        if (window_width > 840) {
            $('.mobile-menu').css('width', '0px');
            $('.content-body').css('left', '0px');
            mobile_menu_check = !1
        }
    });
    var mobile_menu_check = !1;
    $('.menu-toggle').click(function (event) {
        if (mobile_menu_check == !1) {
            $('.mobile-menu').css('width', '300px');
            $('.content-body').css('left', '-300px');
            mobile_menu_check = !0
        } else {
            $('.mobile-menu').css('width', '0px');
            $('.content-body').css('left', '0px');
            mobile_menu_check = !1
        }
    });
    $('.mobile-menu').click(function (event) {
        $('.mobile-menu').css('width', '0px');
        $('.content-body').css('left', '0px');
        mobile_menu_check = !1
    });

    function checkElement(class_name, animated_class) {
        var element_position = $(class_name).offset().top;
        var window_position = $(window).scrollTop() + 550;
        if (window_position > element_position) {
            $(class_name).addClass(animated_class)
        }
    };

    function checkOtherElement(class_name, class_name2, animated_class) {
        var element_position = $(class_name).offset().top;
        var window_position = $(window).scrollTop() - 600;
        if (window_position > element_position) {
            $(class_name2).removeClass('desktop-menu-notactive animated fadeInUp');
            $(class_name2).addClass(animated_class)
        } else if (window_position < element_position) {
            $(class_name2).removeClass(animated_class);
            $(class_name2).addClass('desktop-menu-notactive animated fadeInUp')
        }
    };
    $('body').click(function (event) {
        console.log('© 2017 THIS WEBSITE POWERED BY http://www.hot-designs.com')
    });

    function checkElementGroup() {
        checkOtherElement('.header', '.desktop-menu', 'desktop-menu-active animated fadeInDown');
        checkElement('.about .items .item:nth-child(1)', 'animated fadeInLeft');
        checkElement('.about .items .item:nth-child(2)', 'animated fadeInDown');
        checkElement('.about .items .item:nth-child(3)', 'animated fadeInRight');
        checkElement('.services .items .item:nth-child(1)', 'animated fadeInLeft');
        checkElement('.services .items .item:nth-child(2)', 'animated fadeInDown');
        checkElement('.services .items .item:nth-child(3)', 'animated fadeInDown');
        checkElement('.services .items .item:nth-child(4)', 'animated fadeInRight');
        checkElement('.services .items .item:nth-child(5)', 'animated fadeInLeft');
        checkElement('.services .items .item:nth-child(6)', 'animated fadeInDown');
        checkElement('.services .items .item:nth-child(7)', 'animated fadeInDown');
        checkElement('.services .items .item:nth-child(8)', 'animated fadeInRight');
        checkElement('.tour .items .item:nth-child(1)', 'animated fadeInLeft');
        checkElement('.tour .items .item:nth-child(2)', 'animated fadeInDown');
        checkElement('.tour .items .item:nth-child(3)', 'animated fadeInRight');
        checkElement('.why-us .items .item:nth-child(1)', 'animated fadeInLeft');
        checkElement('.why-us .items .item:nth-child(2)', 'animated fadeInDown');
        checkElement('.why-us .items .item:nth-child(3)', 'animated fadeInUp');
        checkElement('.why-us .items .item:nth-child(4)', 'animated fadeInRight');
        checkElement('.our-technology .item', 'animated bounceIn');
        checkElement('.our-clients .item', 'animated bounceIn');
        checkElement('.contact .items .item:nth-child(1)', 'animated fadeInLeft');
        checkElement('.contact .items .item:nth-child(2)', 'animated fadeInDown');
        checkElement('.contact .items .item:nth-child(3)', 'animated fadeInRight')
    }
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 'auto',
        paginationClickable: !0,
        spaceBetween: 30
    });
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
    menuAnimationScroll();

    function menuAnimationScroll() {
        var hashTagActive = "";
        $(".scroll").click(function (event) {
            event.preventDefault();
            var dest = 0;
            if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
                dest = $(document).height() - $(window).height()
            } else {
                dest = $(this.hash).offset().top
            }
            $('html,body').animate({
                scrollTop: dest
            }, 800, 'swing');
            hashTagActive = this.hash
        })
    }
    var map_check = !1;
    $('.location').click(function (event) {
        if (map_check == !1) {
            $(".map iframe").css('height', '400px');
            map_check = !0
        } else {
            $(".map iframe").css('height', '0px');
            map_check = !1
        }
    });
    $('#contact-form').submit(function (event) {
        $('#required').css('color', '#4ACA00');
        $('#required').text('The Message Successfuly Sent')
    })
})
