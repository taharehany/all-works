/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Menu
4. Init Home Slider
5. Init Date Picker
6. Init Select
7. Init Milestones


******************************/

$(document).ready(function()
{
	"use strict";

    $('.clinic .owl-carousel').owlCarousel({
        loop:true,
        margin:25,
        nav:false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                dots:false
            },
            600:{
                items:2,
                dots:false
            },
            1000:{
                items:3,
                dots:true
            }
        }
    });
    
    
    function initComparisons() {
      var x, i;
      /* Find all elements with an "overlay" class: */
      x = document.getElementsByClassName("img-comp-overlay");
      for (i = 0; i < x.length; i++) {
        /* Once for each "overlay" element:
        pass the "overlay" element as a parameter when executing the compareImages function: */
        compareImages(x[i]);
      }
      function compareImages(img) {
        var slider, img, clicked = 0, w, h;
        /* Get the width and height of the img element */
        w = img.offsetWidth;
        h = img.offsetHeight;
        /* Set the width of the img element to 50%: */
        img.style.width = (w / 2) + "px";
        /* Create slider: */
        slider = document.createElement("DIV");
        slider.setAttribute("class", "img-comp-slider");
        /* Insert slider */
        img.parentElement.insertBefore(slider, img);
        /* Position the slider in the middle: */
        slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
        slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
        /* Execute a function when the mouse button is pressed: */
        slider.addEventListener("mousedown", slideReady);
        /* And another function when the mouse button is released: */
        window.addEventListener("mouseup", slideFinish);
        /* Or touched (for touch screens: */
        slider.addEventListener("touchstart", slideReady);
         /* And released (for touch screens: */
        window.addEventListener("touchstop", slideFinish);
        function slideReady(e) {
          /* Prevent any other actions that may occur when moving over the image: */
          e.preventDefault();
          /* The slider is now clicked and ready to move: */
          clicked = 1;
          /* Execute a function when the slider is moved: */
          window.addEventListener("mousemove", slideMove);
          window.addEventListener("touchmove", slideMove);
        }
        function slideFinish() {
          /* The slider is no longer clicked: */
          clicked = 0;
        }
        function slideMove(e) {
          var pos;
          /* If the slider is no longer clicked, exit this function: */
          if (clicked == 0) return false;
          /* Get the cursor's x position: */
          pos = getCursorPos(e)
          /* Prevent the slider from being positioned outside the image: */
          if (pos < 0) pos = 0;
          if (pos > w) pos = w;
          /* Execute a function that will resize the overlay image according to the cursor: */
          slide(pos);
        }
        function getCursorPos(e) {
          var a, x = 0;
          e = e || window.event;
          /* Get the x positions of the image: */
          a = img.getBoundingClientRect();
          /* Calculate the cursor's x coordinate, relative to the image: */
          x = e.pageX - a.left;
          /* Consider any page scrolling: */
          x = x - window.pageXOffset;
          return x;
        }
        function slide(x) {
          /* Resize the image: */
          img.style.width = x + "px";
          /* Position the slider: */
          slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
        }
      }
    }
    initComparisons();
    
    
	/* 

	1. Vars and Inits

	*/

	var header = $('.header');
	var ctrl = new ScrollMagic.Controller();

	setHeader();

	$(window).on('resize', function()
	{
		setHeader();

		setTimeout(function()
		{
			$(window).trigger('resize.px.parallax');
		}, 375);
	});

	$(document).on('scroll', function()
	{
		setHeader();
	});

	initMenu();
	initHomeSlider();
	initDatePicker();
	initSelect();
	initMilestones();

	/* 

	2. Set Header

	*/

	function setHeader()
	{
		if($(window).scrollTop() > 91)
		{
			header.addClass('scrolled');
		}
		else
		{
			header.removeClass('scrolled');
		}
	}

	/* 

	3. Init Menu

	*/

	function initMenu()
	{
		var hamb = $('.hamburger');
		var menu = $('.menu');
		var menuOverlay = $('.menu_overlay');
		var menuClose = $('.menu_close_container');

		hamb.on('click', function()
		{
			menu.toggleClass('active');
			menuOverlay.toggleClass('active');
		});

		menuOverlay.on('click', function()
		{
			menuOverlay.toggleClass('active');
			menu.toggleClass('active');
		});

		menuClose.on('click', function()
		{
			menuOverlay.toggleClass('active');
			menu.toggleClass('active');
		});
	}

	/* 

	4. Init Home Slider

	*/

	function initHomeSlider()
	{
		if($('.home_slider').length)
		{
			var homeSlider = $('.home_slider');
			homeSlider.owlCarousel(
			{
				items:1,
				autoplay:true,
				loop:true,
				nav:false,
				smartSpeed:1200,
				mouseDrag:false,
				dotsContainer:'home_slider_custom_dots'
			});

			/* Custom dots events */
			if($('.home_slider_custom_dot').length)
			{
				$('.home_slider_custom_dot').on('click', function()
				{
					$('.home_slider_custom_dot').removeClass('active');
					$(this).addClass('active');
					homeSlider.trigger('to.owl.carousel', [$(this).index(), 300]);
				});
			}

			/* Change active class for dots when slide changes by nav or touch */
			homeSlider.on('changed.owl.carousel', function(event)
			{
				$('.home_slider_custom_dot').removeClass('active');
				$('.home_slider_custom_dots li').eq(event.page.index).addClass('active');
			});
		}
	}
    
   


});