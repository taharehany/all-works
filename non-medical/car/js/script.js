/*global $*/

$('document').ready(function () { "use strict";
                                 
                                 
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});
                                 
    // Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});
                                  

                                 
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000,
        speedAsDuration: true,
    });
    
        // BACK TO TOP BUTTON.

    
    
$('.owl-carousel-2').owlCarousel({
    loop:true,
    margin:40,
 
    dots:true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4        }
    }
});
    
    
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    animate: 'slideOutDown',    
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
    
 if ($('#backTop').length === 1) {

        $('#backTop').backTop({
            'theme': 'none'
        });
        
    }
    
    
});