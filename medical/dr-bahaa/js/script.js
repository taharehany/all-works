/*global $, window*/

$(function() {
    
   "use strict";
    
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 400) {
        $("#sticky-header").removeClass("sticky");
        $('#back-top').fadeIn(500);
        } else {
        $("#sticky-header").addClass("sticky");
        $('#back-top').fadeIn(500);
        }
    });
    
    /*$('.play-btn')*/
    $('.popup-youtube').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
    
    
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
    
    $('.header_area .nav-item .nav-link').click(function () {
        $('.header_area .navbar-collapse').removeClass('show');
        
    });


    $(document).ready(function(){

        // mobile_menu
        var menu = $('ul#navigation');
        if(menu.length){
            menu.slicknav({
                prependTo: ".mobile_menu",
                closedSymbol: '+',
                openedSymbol:'-'
            });
        };
        // blog-menu
          // $('ul#blog-menu').slicknav({
          //   prependTo: ".blog_menu"
          // });

        // review-active
    $('.slider_active').owlCarousel({
            loop:true,
            margin:0,
            items:1,
            autoplay:true,
            navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
            nav:true,
            dots:false,
            autoplayHoverPause: true,
            autoplaySpeed: 800,
            responsive:{
              0:{
                  items:1,
                  nav:false,
              },
              767:{
                  items:1,
                  nav:false,
              },
              992:{
                  items:1,
                  nav:false
              },
              1200:{
                  items:1,
                  nav:false
              },
              1600:{
                  items:1,
                  nav:true
              }
          }
        });
    });
    
    /* ~~~ Testimonial Slider 2 ~~~ */
	$('.shots-csrousel').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        touchDrag:true,
        lazyLoad:true,
        autoplay:true,
        dots:false,
        autoplayTimeout:3500,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            992:{
                items:2
            },
            1200:{
                items:2
            }
        }
    });
    
});