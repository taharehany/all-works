/*global $, window*/

$(function() {
    
   "use strict";
    
    var winH = $(window).height(),
        navH = $('.navbar').height();
    
    $('.carousel-inner, .carousel-item').height(winH - navH);
    
    $('.menu').on('click', function () {
       
        $('.menu span:nth-child(3)').toggleClass('op');
        $('.menu span:nth-child(1)').toggleClass('trans1');
        $('.menu span:nth-child(2)').toggleClass('trans2');
        
    });
    
});