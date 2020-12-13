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
    
    /* ~~~ Testimonial Slider 2 ~~~ */
	$('.clients-csrousel').owlCarousel({
        loop:true,
        margin:0,
        nav:false,
        touchDrag:true,
        lazyLoad:true,
        autoplay:true,
        dots:true,
        autoplayTimeout:3500,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            992:{
                items:1
            },
            1200:{
                items:1
            }
        }
    });
    
    /* ~~~ Testimonial Slider 2 ~~~ */
	$('.shots-csrousel').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        touchDrag:true,
        lazyLoad:true,
        autoplay:true,
        dots:true,
        autoplayTimeout:3500,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            992:{
                items:2
            },
            1200:{
                items:2
            }
        }
    });
    
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 700,
        speedAsDuration: true,
    });
    
});