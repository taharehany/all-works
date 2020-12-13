	/* ===================================================================

	Author       	: Incognito Themes
	Template Name	: Torneo - Multi-Purpose HTML5 Theme
	Version      	: 1.0

	* ================================================================= */



	/* ===== LOADER OVERLAY ===== */

	 jQuery(function ($) {
	'use strict';

	jQuery(document).ready(function ($) {

		/* ===== jQuery Varibles ===== */

			mainSlider();
			contentSlider();
			testimonialSlider();
			testimonialSliderTwo();
			testimonialSliderThree();
			clientSlider();
			teamSlider();
			teamSingleSlider();
			blogSlider();
			productItemSlider();
			blogGridSlider();
			appGallerySlider();
			serviceSlider();
			serviceSliderTwo();
			simpleSlider();
			portfolioSlider();
			projectSlider() ;
			projectSliderTwo();
			portfolioLayoutSlider();
			productNavSlider();
			productSlider();
			parallaxEffect();
			parallaxBackground();

		/* ===== PRELOADER  ===== */

		      $("#loader-overlay").delay(500).fadeOut();
	        $(".loader").delay(1000).fadeOut("slow");

	        $(window).trigger("scroll");
	        $(window).trigger("resize");

	        if (window.location.hash){

	            var hash_offset = $(window.location.hash).offset().top;
	            $("html, body").animate({
	                scrollTop: hash_offset
	            });
	  }



	/* ===== SIDE MENU ===== */

	$(".menu-btn a").on('click', function () {
        $(".menu-overlay").fadeToggle(200);
        $(this).toggleClass('btn-open').toggleClass('btn-close');
    });


  /* ===== SLICK SLIDERS ===== */

	/* ~~~ Hero Half Slider ~~~ */
	function mainSlider(){
	$(".default-slider").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        autoplay: true,
        autoplaySpeed: 7000,
        slidesToShow: 1,
        slidesToScroll: 1,
				centerPadding: '0',
				responsive: [
		    	{
				  breakpoint: 480,
				  settings: {
					arrows: false,
				  }
				}
  		]
      });
	}

	/* ~~~ Text Content Slider ~~~ */
	function contentSlider(){
	$(".text-content-slider").slick({
        dots: true,
        infinite: true,
        centerMode: true,
				autoplay: true,
        autoplaySpeed: 7000,
        slidesToShow: 1,
        slidesToScroll: 1,
				centerPadding: '0',
				responsive: [
		    	{
				  breakpoint: 480,
				  settings: {
					arrows: true,
				  }
				}
  		]
      });
	}

	/* ~~~ Testimonials Slider ~~~ */
	function testimonialSlider(){
	$(".testimonial").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3,
		centerPadding: '0',
		prevArrow: false,
    	nextArrow: false,
		responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
	});
	}


	/* ~~~ Product Slider ~~~ */
	function productItemSlider() {
	$('.single-product-item').not('#product-slider').slick({
      autoplay: true,
      arrows: true,
      dots: false,
      swipeToSlide: true,
      prevArrow: '<button type="button" class="slick-prev"><i class="ion-android-arrow-back"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="ion-android-arrow-forward"></i></button>',
    });
	}

	function productNavSlider() {
    $('#product-slide').slick({
      arrows: false,
      dots: false,
      infinite: true,
      touchMove: false,
      asNavFor: '#product-slider',
      vertical: true,
      verticalSwiping: true,
      slidesToShow: 3,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            vertical: false,
            slidesToShow: 3,
          }
        },
      ],
    });
	}

	function productSlider() {
    $('#product-slider').slick({
      arrows: true,
      dots: false,
      swipeToSlide: true,
      asNavFor: '#product-slide',
      prevArrow: '<button type="button" class="slick-prev"><i class="ion-android-arrow-back"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="ion-android-arrow-forward"></i></button>',
    });
	}

	/* ===== ONE PAGE SCROLLER ===== */

	$('a.page-scroll').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 50
        }, 1000, 'easeInOutExpo');
        event.preventDefault();
  });

	/* ===== TYPE IT ===== */

	$('.type-it').typeIt({
		speed: 100,
		cursor:true,
		breakLines:false,
		lifeLike:true,
		startDelete:false,
		loop:true,
    strings: ['thinking', 'color', 'photography', 'art', 'typography']
  });

	$('.type-it-2').typeIt({
		speed: 100,
		cursor:true,
		breakLines:false,
		lifeLike:true,
		startDelete:false,
		loop:true,
    strings: ['design', 'development', 'apps', 'animation', 'marketing']
  });

  /* ===== FIT VIDEOS ===== */
	$(".fit-videos").fitVids();

  /* ===== PARALLAX EFFECTS===== */
	function parallaxEffect() {
    	$('.parallax-effect').parallax();
	}

	function parallaxBackground() {
		$('.parallax-bg').parallaxBackground();
	}

	/* ===== ANIMATE TEXT ===== */

    if ($('.rotate').length > 0) {
        $(".rotate").textrotator({
            animation: "dissolve", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
            separator: "|", //  You can define a new separator (|, &, * etc.) by yourself using this field.
            speed: 2000 // How many milliseconds until the next word show.
        });
    }

	/* ===== REVOLUTION SLIDER LANDING ===== */

	/* ===== REVOLUTION SLIDER CORPORATE ===== */


    /* ===== CBP PORTFOLIO ===== */

	 $(window).on('load', function(){

		 var wow = new WOW({
				offset: 100,
				mobile: false
			  }
			);
			wow.init();

		 /* ~~~ Blog Masonry ~~~ */
		if ($('#blogMasonry').length > 0) {

			$('#blogMasonry').masonry({
			   //options
			  itemSelector: '.blog-masonry-item',
			});
		}


		$('#portfolio-gallery').cubeportfolio({
			filters: '#portfolio-gallery-filter',
			layoutMode: 'grid',
			defaultFilter: '*',
			animationType: 'frontRow',
			gapHorizontal: 0,
			gapVertical: 0,
			gridAdjustment: '',
			mediaQueries: [{
				width: 1500,
				cols: 5
			}, {
				width: 1100,
				cols: 4
			}, {
				width: 800,
				cols: 3
			}, {
				width: 480,
				cols: 2
			}, {
				width: 320,
				cols: 1
			}],
			caption: 'overlayBottomAlong',
			displayType: 'bottomToTop',
			displayTypeSpeed: 300,

			// lightbox
			lightboxDelegate: '.cbp-lightbox',
			lightboxGallery: true,
			lightboxTitleSrc: 'data-title',
			lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>'
		});

		$('#js-grid-masonry-projects').cubeportfolio({
			filters: '#js-filters-masonry-projects',
			layoutMode: 'grid',
			defaultFilter: '*',
			animationType: 'foldLeft',
			gapHorizontal: 0,
			gapVertical: 0,
			gridAdjustment: '',
			mediaQueries: [{
				width: 1500,
				cols: 5
			}, {
				width: 1100,
				cols: 4
			}, {
				width: 800,
				cols: 3
			}, {
				width: 480,
				cols: 2
			}, {
				width: 320,
				cols: 1
			}],
			caption: 'zoom',
			displayType: 'fadeIn',
			displayTypeSpeed: 100,

			// lightbox
			lightboxDelegate: '.cbp-lightbox',
			lightboxGallery: true,
			lightboxTitleSrc: 'data-title',
			lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>'
		});

	});


	/* === MAGNIFIC POPUP === */

	$('.tr-modal-popup').magnificPopup({
			delegate: 'a',
			removalDelay: 500, //delay removal by X to allow out-animation
			callbacks: {
				beforeOpen: function() {
					 this.st.mainClass = this.st.el.attr('data-effect');
				}
			},
			midClick: true
		});

		$(document).on('click', '.popup-modal-close', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });

		$('.magnific-lightbox').magnificPopup({
			type: 'image',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			fixedContentPos: false
			// other options
		});

		$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});

	});

	/* ===== BACK TO TOP  ===== */

	$(window).on ('scroll', function(e) {
		if ($(this).scrollTop() >= 50) {
			$('#return-to-top').fadeIn(200);
		} else {
			$('#return-to-top').fadeOut(200);
		}
	});

	$('#return-to-top').on ('click', function(e) {
		$('body,html').animate({
			scrollTop : 0
		}, 500);
	});

	/* ===== RENGE SLIDER ===== */

	$('.range-slider').jRange({
  	from: 0,
    to: 100,
    step: 1,
    scale: [0,25,50,75,100],
    format: '%s',
    width: 262,
    showLabels: true,
    isRange : true
  });

	/* ===== FIXED FOOTER ===== */

	var $window = $(window);

	$('<div class="footer-height"></div>').insertAfter('#footer-fixed');

	$window.on('resize', function() {
        $('.footer-height').css('height', $('#footer-fixed').height());
      })
      .trigger('resize');

	  if ($('#footer-fixed').length) {

    }


	});

/*End Jquery*/
