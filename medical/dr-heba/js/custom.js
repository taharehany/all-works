(function ($) {
  "use strict";

  var review = $('.client_review_part');
  if (review.length) {
    review.owlCarousel({
        items: 2,
        loop: true,
        margin:30,
        dots: true,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 5000,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            455: {
                items: 1
            },            
            768: {
                items: 2,
            },
            1024: {
                items: 2,
            }
        }
    });
  }
  // menu fixed js code
  $(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 50) {
      $('.main_menu').addClass('menu_fixed animated fadeInDown');
    } else {
      $('.main_menu').removeClass('menu_fixed animated fadeInDown');
    }
  });
    
    $('.navbar-expand-lg .navbar-nav .nav-item .nav-link').click(function () {
       $('.navbar-collapse').removeClass('show');
        
    });

}(jQuery));