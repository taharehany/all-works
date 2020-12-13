(function ($) {
  "use strict";

  $(document).ready(function () {
    $('select').niceSelect();
  });
  // menu fixed js code
  $(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 50) {
      $('.main_menu').addClass('menu_fixed animated fadeInDown');
    } else {
      $('.main_menu').removeClass('menu_fixed animated fadeInDown');
    }
  });
  $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true
  });

  var client_logo = $('.client_logo_slider')
  if (client_logo.length) {
    client_logo.owlCarousel({
      items: 2,
      loop: true,
      responsive: {
        0: {
          items: 1,
          margin: 15,
        },
        600: {
          items: 2,
          margin: 15,
        },
        991: {
          items: 2,
          margin: 15,
        },
        1200: {
          items: 2,
          margin: 15,
        }
      }
    });
  }


  $(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: '.gal-item a',
		type: 'image',
		tLoading: 'تحميل #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">صورة #%curr%</a> فشل التحميل.',
			
		}
	});
  });

  var review = $('.live_stareams_slide');
  if (review.length) {
    review.owlCarousel({
      items: 2,
      loop: true,
      dots: false,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 5000,
      nav: true,
      navText: [
        '<i class="fas fa-caret-left"></i>',
        '<i class="fas fa-caret-right"></i>'
      ],
      margin: 15,
      responsive: {
        0: {
          items: 1,
          margin: 15,
        },
        600: {
          items: 1,
          margin: 15,
        },
        991: {
          items: 1,
          margin: 15,
        },
        1200: {
          items: 2,
          margin: 15,
        }
      }
    });
  }
    
    lightGallery(document.getElementById('lightgallery')); 
    
    $('.count-number').counterUp({
        delay: 10,
        time: 1000
    });
    
    
   /* $(document).ready(function () {
        var $container = $('.portfolioContainer');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        $('.portfolioFilter a').click(function(){
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
             });
             return false;
        }); 
    });*/
    
}(jQuery));


