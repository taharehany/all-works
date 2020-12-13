/*global $, window*/

$(function() {
    
   "use strict";
    
    var winH = $(window).height(),
        navH = $('.navbar').height();
    
    $('.hero').height(winH);
    
    $('.menu').on('click', function () {
       
        $('.menu span:nth-child(3)').toggleClass('op');
        $('.menu span:nth-child(1)').toggleClass('trans1');
        $('.menu span:nth-child(2)').toggleClass('trans2');
        
    });
    
    $('section.portfolio .list li').on('click', function () {
       
        $(this).addClass('active').siblings().removeClass('active');
        
        if($(this).data('class') === 'all') {
            $('section.portfolio .image').css('opacity', 1);
        }
        else {
            $('section.portfolio .image').css('opacity', .05);
            $($(this).data('class')).css('opacity',1);
        }
    });
    
});