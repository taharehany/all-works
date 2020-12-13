(function ($) {
	"use strict";

	jQuery(document).ready(function ($) {
        
        var typed = new Typed('.element', {
            strings: ["محطات تحلية مياه ( آبار – بحار )."
                    ,"أجهزة تنقية  مياه منزلية وصناعية."
                    ,"أجهزة  تقطير مياه."
                    ,"صيانة وقطع غيار."],
            
            typeSpeed: 3,
            startDelay: 0,
            // backspacing speed
            backSpeed: 0,
            // shuffle the strings
            shuffle: true,
            // time before backspacing
            backDelay: 2000,
            // loop
            loop: true,
            // false = infinite
            loopCount: true,
            // show cursor
            showCursor: false,
            // character for cursor
            cursorChar: "|",
            // attribute to type (null == text)
            attr: null,
            // either html or text
            contentType: 'html',
        });


		/* 
		=================================================================
		01 - Ripple Setup
		=================================================================	
		*/

		/*$('#home').ripples({
			resolution: 800,
			dropRadius: 10,
			perturbance: 0.001
		});*/

		/* 
		=================================================================
		02 - Animated Headline Setup
		=================================================================	
		*/


		$(function () {
			$('.caption-inner').animatedHeadline({
				animationType: 'clip'
			});
		});


		/* 
		=================================================================
		03 - Portfolio Image
		=================================================================	
		*/

		$('.zoom-img').magnificPopup({
			delegate: 'a',
			type: 'image',
			gallery: {
				enabled: true
			}
		});

		/* 
		=================================================================
		04 - Testimonial Slider
		=================================================================	
		*/

		$(".fabon-testimonial-area .owl-carousel").owlCarousel({
			autoplay: true,
			loop: true,
			margin: 30,
			touchDrag: true,
			mouseDrag: true,
			items: 1,
			nav: false,
			dots: true,
			autoplayTimeout: 6000,
			autoplaySpeed: 1200,
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 2
				},
				600: {
					items: 3
				},
				1000: {
					items: 4
				},
				1200: {
					items: 4
				}
			}
		});
        
        /* 
		=================================================================
		04 - Testimonial Slider
		=================================================================	
		*/

		$(".fabon-brands-area .owl-carousel").owlCarousel({
			autoplay: true,
			loop: true,
			margin: 30,
			touchDrag: true,
			mouseDrag: true,
			items: 1,
			nav: false,
			dots: false,
			autoplayTimeout: 6000,
			autoplaySpeed: 1200,
			responsive: {
				0: {
					items: 2
				},
				480: {
					items: 3
				},
				600: {
					items: 4
				},
				1000: {
					items: 5
				},
				1200: {
					items: 5
				}
			}
		});

        $("img.lazy").lazyload();

	});

}(jQuery));

