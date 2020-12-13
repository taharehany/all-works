/*global $, window*/

$(function() {
    
   "use strict";
    
    var winH = $(window).height();
    
    $('.carousel-item').height(winH);
    $('.carousel-inner').css({
        maxHeight:winH
    });
 
    var nav = document.querySelector('.navbar');
    var navTop = nav.offsetTop;

    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 700,
        speedAsDuration: true,
    });
    
    
    // Functions
    function navFixed(e) {
        if(window.scrollY > navTop) {
            nav.classList.add('is-fixed');
        } else {
            nav.classList.remove('is-fixed');
        }
    }

    window.addEventListener('scroll', navFixed);
    
    
    jQuery(window).on('load', function() {
        
        jQuery(".preloader").fadeOut('slow');
        
    });
    
    $('.gallery').mauGallery({
        columns: {
            xs: 1,
            sm: 2,
            md: 2,
            lg: 4,
            xl: 4
        },
        lightBox: true,
        lightboxId: 'myAwesomeLightbox',
        showTags: false,
        tagsPosition: 'middle'
    });
    
});