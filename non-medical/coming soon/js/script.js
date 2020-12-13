/*global $, window*/

$(function() {
    
   "use strict";
    
    var winH = $(window).height();
    
    $('section.hero').height(winH);
    
});

calcValues();
var int = setInterval(calcValues, 1000);
function calcValues() {
    $('.counter .to')
        .addClass('hide')
        .removeClass('to')
        .addClass('from')
        .removeClass('hide')
        .addClass('n')
        .find('span:not(.shadow)').each(function (i, el) {
        $(el).text(getSec(true));
    });
    $('.counter .from:not(.n)')
        .addClass('hide')
        .addClass('to')
        .removeClass('from')
        .removeClass('hide')
    .find('span:not(.shadow)').each(function (i, el) {
        $(el).text(getSec(false));
    });
    $('.counter .n').removeClass('n');
}
function getSec(next) {
    var d = new Date();
    var sec = 100-d.getSeconds();
    if (next) {
        sec--;
        if (sec < 0) {
            sec = 99;
        }
    } else if(sec == 100) {
        sec = 0;
    }
    return (sec < 10 ? '0' + sec : sec);
}