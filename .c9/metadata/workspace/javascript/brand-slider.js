{"filter":false,"title":"brand-slider.js","tooltip":"/javascript/brand-slider.js","undoManager":{"mark":8,"position":8,"stack":[[{"start":{"row":0,"column":0},"end":{"row":15,"column":7},"action":"insert","lines":["/* global $ */","$(document).ready(function () {","    $(function () {","        $('a').each(function () {","            if ($(this).prop('href') == window.location.href) {","                $(this).addClass('current');","            }","        });","    });","    $(function () {","        $('span').each(function () {","            if ($(this).prop('.tab') == window.location.href) {","                $(this).addClass('current2');","            }","        });","    });"],"id":1}],[{"start":{"row":15,"column":7},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"remove","lines":["    "],"id":3}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"insert","lines":["}"],"id":4}],[{"start":{"row":16,"column":1},"end":{"row":16,"column":2},"action":"insert","lines":[")"],"id":5}],[{"start":{"row":16,"column":2},"end":{"row":16,"column":3},"action":"insert","lines":[";"],"id":6}],[{"start":{"row":16,"column":0},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":7}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "],"id":8}],[{"start":{"row":16,"column":4},"end":{"row":69,"column":7},"action":"insert","lines":["$.post('https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getBrandSlider.php', function (data) {","        var templateString = '';","        templateString += '<ul>';","        for (var i = 0; i < data.details.length; i++) {","            templateString += '<li><img alt=\"brand-logo\" class=\"brand-photo\" src=\"' + data.details[i].brandLogo + '\"/></li>';","        }","        templateString += '</ul>';","        $('.brand-container').html(templateString);","        var slideCount = data.details.length;","        var slideWidth = $('.brand-container ul li').width();","        var slideHeight = $('.brand-container ul li').height();","        var sliderUlWidth = slideCount * slideWidth;","        $('.brand-container').css({","          width: slideWidth,","          height: slideHeight","        });","        $('.brand-container ul').css({","          width: sliderUlWidth,","          marginLeft: - slideWidth          ","        });","        $('.brand-container ul li:last-child').prependTo('#slider ul');","        function moveLeft() {","            $('.brand-container ul').animate({","                left: + slideWidth","            }, 1000, function () {","                $('.brand-container ul li:last-child').prependTo('.brand-container ul');","                $('.brand-container ul').css('left', '');","            });","        }","        function moveRight() {","            $('.brand-container ul').animate({","                left: - slideWidth","            }, 1000, function () {","            $('.brand-container ul li:first-child').appendTo('.brand-container ul');","            $('.brand-container ul').css('left', '');","            });","        }","        $('.left-brand').click(function() {","            moveLeft();","        });","        $('.right-brand').click(function() {","            moveRight();","        });","       ","        var brandTimer = setInterval(moveLeft, 3000);","        $('#brand-slider').hover(stopBrandSlides, reStartBrandSlides);","        function stopBrandSlides() {","            clearInterval(brandTimer);","        }","        function reStartBrandSlides() {","            brandTimer = setInterval(moveLeft, 3000);","        }","        ","    });"],"id":9}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":69,"column":7},"end":{"row":69,"column":7},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1502638770419,"hash":"c5fe4cb31bf61e6bc1946e08207e452ab75427e7"}