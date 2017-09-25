/* global $ */
$(document).ready(function () {
    $(function () {
        $('a').each(function () {
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('current');
            }
        });
    });
    $(function () {
        $('span').each(function () {
            if ($(this).prop('.tab') == window.location.href) {
                $(this).addClass('current2');
            }
        });
    });
    $.post('https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getBrandSlider.php', function (data) {
        var templateString = '';
        templateString += '<ul>';
        for (var i = 0; i < data.details.length; i++) {
            templateString += '<li><img alt="brand-logo" class="brand-photo" src="' + data.details[i].brandLogo + '"/></li>';
        }
        templateString += '</ul>';
        $('.brand-container').html(templateString);
        var slideCount = data.details.length;
        var slideWidth = $('.brand-container ul li').width();
        var slideHeight = $('.brand-container ul li').height();
        var sliderUlWidth = slideCount * slideWidth;
        $('.brand-container').css({
          width: slideWidth,
          height: slideHeight
        });
        $('.brand-container ul').css({
          width: sliderUlWidth,
          marginLeft: - slideWidth          
        });
        $('.brand-container ul li:last-child').prependTo('#slider ul');
        function moveLeft() {
            $('.brand-container ul').animate({
                left: + slideWidth
            }, 1000, function () {
                $('.brand-container ul li:last-child').prependTo('.brand-container ul');
                $('.brand-container ul').css('left', '');
            });
        }
        function moveRight() {
            $('.brand-container ul').animate({
                left: - slideWidth
            }, 1000, function () {
            $('.brand-container ul li:first-child').appendTo('.brand-container ul');
            $('.brand-container ul').css('left', '');
            });
        }
        $('.left-brand').click(function() {
            moveLeft();
        });
        $('.right-brand').click(function() {
            moveRight();
        });
       
        var brandTimer = setInterval(moveLeft, 3000);
        $('.brand-slider').hover(stopBrandSlides, reStartBrandSlides);
        function stopBrandSlides() {
            clearInterval(brandTimer);
        }
        function reStartBrandSlides() {
            brandTimer = setInterval(moveLeft, 3000);
        }
        
    });
});