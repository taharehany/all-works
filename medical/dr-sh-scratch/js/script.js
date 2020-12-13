/*global $, window*/

$(function() {
    
   "use strict";
    
    var winH = $(window).height(),
        navH = $('.navbar').height();
    
    $('.hero').height(winH + navH);
    
    
    /*** smooth scroll ***/
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 700,
        speedAsDuration: true,
    });
    
    /**** scroll ***/
    $(window).on("scroll", function () {
		$('#home,#about,#services,#offers,#contact').each(function() {
            if($(window).scrollTop() >= $(this).offset().top) {
                var blockId = $(this).attr('id');
                $('.nav li a').removeClass('active');
                $('.nav li a[data-scroll="' + blockId + '"]').addClass('active');
            }
        });
	});
    
    $('.navbar-nav .nav-link').click(function () {
        $('.navbar-collapse').removeClass('show');
    });
    
});