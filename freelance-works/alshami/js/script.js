/*global $, window*/

$(function() {
    
   "use strict";
    
    var nav_offset_top = $('.header_area').height()+50; 
    /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/

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
	
	var dropToggle = $('.menu_right > li').has('ul').children('a');
    dropToggle.on('click', function() {
        dropToggle.not(this).closest('li').find('ul').slideUp(200);
        $(this).closest('li').children('ul').slideToggle(200);
        return false;
    });
	
	
	/*----------------------------------------------------*/
    /*  Home Slider js
    /*----------------------------------------------------*/
	var swiper = new Swiper('.swiper-container', {
		autoplay: {
			delay: 3000,
		},
		speed: 500,
		loop: true,
    });
    
    
    $('.testimonial2').owlCarousel({
        items: 3,
        loop: true,
        margin: 30,
        autoplayHoverPause: true,
        smartSpeed:500,
        dots: false,
        nav:true,
        navText:['<i class="fas fa-long-arrow-alt-left"></i>','<i class="fas fa-long-arrow-alt-right"></i>'],
        responsive: {
            1220: {
                items: 3
            },
            768: {
                items: 2
            },
            0: {
                items: 1
            }
        }
    });
    
    $('.clients-car').owlCarousel({
        items: 4,
        loop: true,
        margin: 20,
        autoplayHoverPause: true,
        smartSpeed:500,
        dots: false,
        responsive: {
            1220: {
                items: 4
            },
            768: {
                items: 3
            },
            400:{
                items: 2
            },
            0: {
                items: 1
            }
        }
    });
    
});