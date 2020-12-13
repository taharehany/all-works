/*global $, window, WOW*/

$(function() {
    
   "use strict";
    
    var winH = $(window).height(),
        navH = $('.navbar').height();
    
    $('section.hero').height(winH);
    
    $(".nav-link").on("click", function (e) {
        e.preventDefault();
            $("body, html").animate({
                scrollTop: $('#' + $(this).data('scroll')).offset().top - 50
                        
        }, 500);
                
    }); 

    // Variables
    var nav = document.querySelector('.navbar');
    var navTop = nav.offsetTop;

    // Functions
    function navFixed(e) {
        if(window.scrollY > navTop) {
            nav.classList.add('is-fixed');
        } else {
            nav.classList.remove('is-fixed');
        }
    }

    window.addEventListener('scroll', navFixed);
    
    
    
    // Variables
    var hello = document.querySelector('.hello');
    var helloTop = nav.offsetTop + 300;
    
    // Functions
    function header(e) {
        if(window.scrollY > helloTop) {
            hello.classList.add('resizing');
        } else {
            hello.classList.remove('resizing');
        }
    }

    window.addEventListener('scroll', header);
    
    new WOW().init();
    
});
