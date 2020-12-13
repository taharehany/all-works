/*global $, window*/

$(function() {
    
   "use strict";
    
   var nav_offset_top = $('.header_area').height()+50; 
    
	//* Navbar Fixed  
    function navbarFixed(){
        if ( $('.header_area').length ){ 
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();   
                if (scroll >= nav_offset_top ) {
                    $(".header_area").addClass("navbar_fixed");
                } else {
                    $(".header_area").removeClass("navbar_fixed");
                }
            });
        };
    };
    navbarFixed();
    
    $('.header_area .navbar .nav .nav-item').hover(function () {
       $(this).addClass('active').siblings().removeClass('active'); 
    });
    
    $('.header_area .navbar .nav .nav-item').mouseleave(function () {
        $(this).removeClass('active'); 
    });
    
    $('.header_area .navbar .nav .nav-item').mouseleave(function () {
        $('.header_area .navbar .nav .nav-item:first-child').addClass('active');
        
    });
    
    $('.header_area .nav-item .nav-link').click(function () {
        $('.header_area .navbar-collapse').removeClass('show');
        
    });
    
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 700,
        speedAsDuration: true,
    });
    
    /* ~~~ Testimonial Slider 2 ~~~ */
	$('.doctors-csrousel').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots:true,
        touchDrag:true,
        lazyLoad:true,
        autoplay:true,
        autoplayTimeout:2500,
        responsive:{
            0:{
                items:1
            },
            767:{
                items:2
            },
            992:{
                items:3
            },
            1200:{
                items:3
            }
        }
    });
    
});