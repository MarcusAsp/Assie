var $top = $('.fashionists');

var $pic1 = $('.top-fashionist-1');
var $pic2 = $('.top-fashionist-2');
var $pic3 = $('.top-fashionist-3');
var $pic4 = $('.top-fashionist-4');
var $pic5 = $('.top-fashionist-5');

 $top.waypoint(function (direction) {
     if (direction == 'down'){
    $pic1.addClass('visible');
    $pic2.addClass('visible');
    $pic3.addClass('visible');
    $pic4.addClass('visible');
    $pic5.addClass('visible');
   }else {
    $pic1.removeClass('visible');
    $pic2.removeClass('visible');
    $pic3.removeClass('visible');
    $pic4.removeClass('visible');
    $pic5.removeClass('visible');
   }
   }, { offset: '80%' });