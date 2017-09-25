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
    $.post('https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getHotdeals.php', function (data) {
        var hotDealStart = 0;
        function deals() {
            if (hotDealStart == 0) {
                $('.hotdeal')[0].src = data.details[hotDealStart].hotdealsImagePath;
                $('.hotdeal')[0].classList.add('add-animation-1');
                $('.hotdeal')[0].classList.remove('add-animation-3');
                $('.count-down-3')[0].classList.remove('display-block');
                $('.count-down-3')[0].classList.add('display-none');
                $('.count-down-1')[0].classList.remove('display-none');
                $('.count-down-1')[0].classList.add('display-block');
                $('.deal-circle-1')[0].classList.add('background-orange');
                $('.deal-circle-1')[0].classList.remove('background-white');
                $('.deal-circle-3')[0].classList.remove('background-orange');
                $('.deal-circle-3')[0].classList.add('background-white');
                $('.hotdeal-product-names')[0].innerHTML = data.details[hotDealStart].productName;
                $('.price-text-deal')[0].innerHTML = data.details[hotDealStart].currencySymbol + data.details[hotDealStart].hotdealsPrice;
                $('.hotdeals-price-old')[0].innerHTML = data.details[hotDealStart].currencySymbol + data.details[hotDealStart].hotdealsPriceOld;
                hotDealStart = 1;
            } 
            else if (hotDealStart == 1) {
                $('.hotdeal')[0].src = data.details[hotDealStart].hotdealsImagePath;
                $('.hotdeal')[0].classList.remove('add-animation-1');
                $('.hotdeal')[0].classList.add('add-animation-2');
                $('.count-down-1')[0].classList.remove('display-block');
                $('.count-down-1')[0].classList.add('display-none');
                $('.count-down-2')[0].classList.remove('display-none');
                $('.count-down-2')[0].classList.add('display-block');
                $('.deal-circle-1')[0].classList.remove('background-orange');
                $('.deal-circle-1')[0].classList.add('background-white');
                $('.deal-circle-2')[0].classList.add('background-orange');
                $('.deal-circle-2')[0].classList.remove('background-white');
                $('.deal-circle-3')[0].classList.remove('background-orange');
                $('.deal-circle-3')[0].classList.add('background-white');
                $('.hotdeal-product-names')[0].innerHTML = data.details[hotDealStart].productName;
                $('.price-text-deal')[0].innerHTML = data.details[hotDealStart].currencySymbol + data.details[hotDealStart].hotdealsPrice;
                $('.hotdeals-price-old')[0].innerHTML = data.details[hotDealStart].currencySymbol + data.details[hotDealStart].hotdealsPriceOld;
                hotDealStart = 2;
            } 
            else if (hotDealStart == 2) {
                $('.hotdeal')[0].src = data.details[hotDealStart].hotdealsImagePath;
                $('.hotdeal')[0].classList.remove('add-animation-2');
                $('.hotdeal')[0].classList.add('add-animation-3');
                $('.count-down-2')[0].classList.remove('display-block');
                $('.count-down-2')[0].classList.add('display-none');
                $('.count-down-3')[0].classList.remove('display-none');
                $('.count-down-3')[0].classList.add('display-block');
                $('.deal-circle-2')[0].classList.toggle('background-orange');
                $('.deal-circle-2')[0].classList.toggle('background-white');
                $('.deal-circle-3')[0].classList.add('background-orange');
                $('.deal-circle-3')[0].classList.toggle('background-white');
                $('.hotdeal-product-names')[0].innerHTML = data.details[hotDealStart].productName;
                $('.price-text-deal')[0].innerHTML = data.details[hotDealStart].currencySymbol + data.details[hotDealStart].hotdealsPrice;
                $('.hotdeals-price-old')[0].innerHTML = data.details[hotDealStart].currencySymbol + data.details[hotDealStart].hotdealsPriceOld;
                hotDealStart = 0;
            }
        }
        var hotdealTimer = setInterval(deals, 2500);
        $('.deal-circle-1')[0].addEventListener('click', deals);
        $('.deal-circle-2')[0].addEventListener('click', deals);
        $('.deal-circle-3')[0].addEventListener('click', deals);
        $('.hotdeal-slide-container').hover(stopHotdealSlides, reStartHotdealSlides);
        function stopHotdealSlides() {
            clearInterval(hotdealTimer);
        }
        function reStartHotdealSlides() {
            hotdealTimer = setInterval(deals, 2500);
        }
        // Set the dates we're counting down to
        var countDownDate1 = data.details[0].hotdealsAsSeconds;
        var countDownDate2 = data.details[1].hotdealsAsSeconds;
        var countDownDate3 = data.details[2].hotdealsAsSeconds;
        // Update the count down every 1 second
        var offerTime = setInterval(function () {
            // Get todays date and time
            var now = Math.floor(new Date().getTime() / 1000);
            // Find the distance between now an the count down date
            var distance1 = countDownDate1 - now;
            var distance2 = countDownDate2 - now;
            var distance3 = countDownDate3 - now;
            // Time calculations for days, hours, minutes and seconds
            var days1 = Math.floor(distance1 / (60 * 60 * 24));
            var hours1 = Math.floor((distance1 % (60 * 60 * 24)) / (60 * 60));
            var minutes1 = Math.floor((distance1 % (60 * 60)) / (60));
            var seconds1 = Math.floor((distance1 % (60)));
            var days2 = Math.floor(distance2 / (60 * 60 * 24));
            var hours2 = Math.floor((distance2 % (60 * 60 * 24)) / (60 * 60));
            var minutes2 = Math.floor((distance2 % (60 * 60)) / 60);
            var seconds2 = Math.floor(distance2 % (60));
            var days3 = Math.floor(distance3 / (60 * 60 * 24));
            var hours3 = Math.floor((distance3 % (60 * 60 * 24)) / (60 * 60));
            var minutes3 = Math.floor((distance3 % (60 * 60)) / 60);
            var seconds3 = Math.floor(distance3 % (60));
            $('.offer-expires-days-1')[0].innerHTML = days1 + '<br>' + 'DAYS';
            $('.offer-expires-hours-1')[0].innerHTML = hours1 + '<br>' + 'HRS';
            $('.offer-expires-minutes-1')[0].innerHTML = minutes1 + '<br>' + 'MINS';
            $('.offer-expires-seconds-1')[0].innerHTML = seconds1 + '<br>' + 'SECS';
            $('.offer-expires-days-2')[0].innerHTML = days2 + '<br>' + 'DAYS';
            $('.offer-expires-hours-2')[0].innerHTML = hours2 + '<br>' + 'HRS';
            $('.offer-expires-minutes-2')[0].innerHTML = minutes2 + '<br>' + 'MINS';
            $('.offer-expires-seconds-2')[0].innerHTML = seconds2 + '<br>' + 'SECS';
            $('.offer-expires-days-3')[0].innerHTML = days3 + '<br>' + 'DAYS';
            $('.offer-expires-hours-3')[0].innerHTML = hours3 + '<br>' + 'HRS';
            $('.offer-expires-minutes-3')[0].innerHTML = minutes3 + '<br>' + 'MINS';
            $('.offer-expires-seconds-3')[0].innerHTML = seconds3 + '<br>' + 'SECS';
            
            if (distance1 < 0) {
                clearInterval(offerTime);
                $('.offer-expired-1')[0].classList.add('display-block');
                $('.offer-expired-1')[0].classList.remove('display-none');
                $('.offer-expired-1')[0].innerHTML = 'offer expired!';
                $('.offer-expires-days-1')[0].classList.add('display-none');
                $('.offer-expires-hours-1')[0].classList.add('display-none');
                $('.offer-expires-minutes-1')[0].classList.add('display-none');
                $('.offer-expires-seconds-1')[0].classList.add('display-none');
            }
            if (distance2 < 0) {
                clearInterval(offerTime);
                $('.offer-expired-2')[0].classList.add('display-block');
                $('.offer-expired-2')[0].classList.remove('display-none');
                $('.offer-expired-2')[0].innerHTML = 'offer expired!';
                $('.offer-expires-days-2')[0].classList.add('display-none');
                $('.offer-expires-hours-2')[0].classList.add('display-none');
                $('.offer-expires-minutes-2')[0].classList.add('display-none');
                $('.offer-expires-seconds-2')[0].classList.add('display-none');
            }
            if (distance3 < 0) {
                clearInterval(offerTime);
                $('.offer-expired-3')[0].classList.add('display-block');
                $('.offer-expired-3')[0].classList.remove('display-none');
                $('.offer-expired-3')[0].innerHTML = 'offer expired!';
                $('.offer-expires-days-3')[0].classList.add('display-none');
                $('.offer-expires-hours-3')[0].classList.add('display-none');
                $('.offer-expires-minutes-3')[0].classList.add('display-none');
                $('.offer-expires-seconds-3')[0].classList.add('display-none');
            }
        }, 1000);
        //$('.count-down-1').draggable();
    });
    $.post('https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getFirstSlider.php', function(data) {
        var htmlData = '';
        htmlData += '<ul>';
        for (var i = 0; i < data.details.length; i++) {
            htmlData += '<li><img class="indoor-photo" src="' + data.details[i].firstSliderImagePath + '"></li>';
        }
        htmlData += '</ul>';
        $('#indoor-slide-container').html(htmlData);
        var slideCount = data.details.length;
        var slideWidth = $('#indoor-slide-container ul li').width();
        var slideHeight = $('#indoor-slide-container ul li').height();
        var sliderUlWidth = slideCount * slideWidth;
        $('#indoor-slide-container').css({
          width: slideWidth,
          height: slideHeight
        });
        $('#indoor-slide-container ul').css({
          width: sliderUlWidth,
          marginLeft: - slideWidth
        });
        $('#indoor-slide-container ul li:last-child').prependTo('#slider ul');
        var photoNumber = (/.*(\d)/.exec($('.indoor-photo')[0].currentSrc)[1])-1;
        $('.indoor-text-1')[0].innerHTML = data.details[photoNumber].firstSliderTitle;
        $('.indoor-text-2')[0].innerHTML = data.details[photoNumber].firstSliderDetails;
        function moveLeft() {
            $('#indoor-slide-container ul').animate({
                left: + slideWidth
            }, 3000, function () {
                $('#indoor-slide-container ul li:last-child').prependTo('#indoor-slide-container ul');
                $('#indoor-slide-container ul').css('left', '');
                var photoNumber = (/.*(\d)/.exec($('.indoor-photo')[0].currentSrc)[1])-1;
                $('.indoor-text-1')[0].innerHTML = data.details[photoNumber].firstSliderTitle;
                $('.indoor-text-2')[0].innerHTML = data.details[photoNumber].firstSliderDetails;
            });
        }
        function moveRight() {
            $('#indoor-slide-container ul').animate({
                left: - slideWidth
            }, 3000, function () {
            $('#indoor-slide-container ul li:first-child').appendTo('#indoor-slide-container ul');
            $('#indoor-slide-container ul').css('left', '');
            var photoNumber = (/.*(\d)/.exec($('.indoor-photo')[0].currentSrc)[1])-1;
            $('.indoor-text-1')[0].innerHTML = data.details[photoNumber].firstSliderTitle;
            $('.indoor-text-2')[0].innerHTML = data.details[photoNumber].firstSliderDetails;
            });
        }
        $('.indoor-previous').click(function() {
            moveLeft();
        });
        $('.indoor-next').click(function() {
            moveRight();
        });
        var indoorTimer = setInterval(moveRight, 9000);
        $('#indoor-furniture').hover(stopIndoorSlides, reStartIndoorSlides);
        function stopIndoorSlides() {
            clearInterval(indoorTimer);
        }
        function reStartIndoorSlides() {
            indoorTimer = setInterval(moveRight, 9000);
        }
    });
   /* function customerHelp() {
        var htmlData1 = '';
        var htmlData2 = '';
        var htmlData3 = '';
        var htmlData4 = '';
        htmlData1 += '<p class="free-shipping-text">free shipping</p>';
        htmlData1 += '<p class="all-order-text">all order</p>';
        htmlData1 += '<div class="img-ship"></div>';
        htmlData1 += '<div class="truck-circle"></div>';
        htmlData2 += '<p class="customer-support-text">24/7 customer</p>';
        htmlData2 += '<p class="support-text">support</p>';
        htmlData2 += '<div class="img-support"></div>';
        htmlData2 += '<div class="headphones-circle"></div>';
        htmlData3 += '<p class="money-back-text">money back</p>';
        htmlData3 += '<p class="guarantee-text">guarantee</p>';
        htmlData3 += '<div class="img-guarantee"></div>';
        htmlData3 += '<div class="money-back-circle"></div>';
        htmlData4 += '<p class="discount-text">member discount</p>';
        htmlData4 += '<p class="first-order-text">first order</p>';
        htmlData4 += '<div class="img-first-order"></div>';
        htmlData4 += '<div class="member-discount-circle"></div>';
        $('.free-shipping').html(htmlData1);
        $('.customer-support').html(htmlData2);
        $('.money-back').html(htmlData3);
        $('.discount').html(htmlData4);
    }
    customerHelp();*/
    var serverData = $.post('https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getAllProducts.php', function(data) {
        var $tabsFurniture = $('.new-furniture-tabs');
        var $panels1 = $('.panel-1');
        $tabsFurniture.on('mouseover', 'a', function(e) {
            e.preventDefault();
            var link1 = $(this).attr('href');
            $panels1.filter(':not(.new-furniture-current-tab)').addClass('display-none');
            $(link1).removeClass('display-none');
            $tabsFurniture.find('.new-furniture-current-tab').removeClass('new-furniture-current-tab');
            $(this).addClass('new-furniture-current-tab');
        });
        var populateProducts = function (products) {
            var htmlData = '';
            for (var i = 0; i < products.length; i++) {
                htmlData += '<div class="product">';
                htmlData += '<img class="product-img" src="' + products[i].productImage + '"/>';
                htmlData += '<p class="text-quick-view background-dark-gray shadow-box display-none">Quick View</p>';
                htmlData += '<div class="text-add-to-cart shadow-box display-none"><p>add to cart</p></div>';
                htmlData += '<div class="product-name background-white">';
                htmlData += '<p class="text-product color-dark-gray">' + products[i].productName + '</p>';
                htmlData += '<div class="black-stars"></div>';
                htmlData += '<div class="white-stars"></div>';
                htmlData += '<div class="black-line shadow-box"></div>';
                htmlData += '<div class="gray-line shadow-box"></div>';
                htmlData += '<div class="orange-line shadow-box"></div>';
                htmlData += '<div class="white-heart shadow-box"><div class="wishlist"><p>add to wishlist</p><div class="triangles"></div></div></div>';
                htmlData += '<div class="compare shadow-box"><div class="match"><p>add to compare</p><div class="triangles"></div></div></div>';
                htmlData += '<div class="price">';
                htmlData += '<p class="price-text shadow-box background-dark-gray">' + products[i].currencySymbol + products[i].price + '</p>';
                htmlData += '</div>';
                htmlData += '</div>';
                htmlData += '</div>';
            }
            $('.products').html(htmlData);
        };
        var sortByCategory = function(category, arrayToSort) {
            var sortedArray = arrayToSort.filter(function(item) {
                if (item.categName === category) {
                    return item;
                }
            });
            populateProducts(sortedArray);
        };
        var displayByDefault = $('.new-furniture-current-tab').attr('display-by-default');
        sortByCategory(displayByDefault, serverData.responseJSON.details);
        $('.category-button').on('mouseover', function () {
            var category = $(this).attr('data-categ');
            sortByCategory(category, serverData.responseJSON.details);
        });
    });
    $.post('https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getSofasSlider.php', function(data) {
            var htmlData = '';
            htmlData += '<img class="sofa-img" src="' + data.details[0].sofasImage + '"/>';
            htmlData += '<div class="guest-room-small">';
            htmlData += '<p class="guest-room-text">' + data.details[0].sofasTitle + '</p>';
            htmlData += '<p class="sofa">' + data.details[0].sofasType + '</p>';
            htmlData += '<p class="sofas-discount">' + data.details[0].sofasDiscount + '</p>';
            htmlData += '</div>';
            $('.guest-room-big').html(htmlData);
            var sofaImage = 0;
            function sofasSlides() {
                sofaImage++;
                if (sofaImage >= data.details.length) {
                    sofaImage = 0;
                }
                $('.sofa-img')[0].src = data.details[sofaImage].sofasImage;
                $('.guest-room-text')[0].innerHTML = data.details[sofaImage].sofasTitle;
                $('.sofa')[0].innerHTML = data.details[sofaImage].sofasType;
                $('.sofas-discount')[0].innerHTML = data.details[sofaImage].sofasDiscount;
            }
            var sofaTimer = setInterval(sofasSlides, 3000);
            $('.guest-room-big').hover(stopSofasSlides, reStartSofasSlides);
            $('.guest-room-big').on('click', sofasSlides);
            function stopSofasSlides() {
                clearInterval(sofaTimer);
            }
            function reStartSofasSlides() {
                sofaTimer = setInterval(sofasSlides, 3000);
            }
    });
    $.post('https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getOfficeChairCollection.php', function (data) {
            var htmlData = '';
            htmlData += '<img class="chair-img-1" src="' + data.details[0].officeChairImage + '" />';
            htmlData += '<img class="chair-img-2" src="' + data.details[6].officeChairImage + '" />';
            htmlData += '<div class="office-title"><p>' + data.details[0].officeChairTitle + '</p></div>';
            htmlData += '<div class="collection"><p>' + data.details[0].officeChairType + '</p></div>';
            htmlData += '<p class="office-price color-orange">' + data.details[0].currencySymbol + data.details[0].officeChairPrices + '</p>';
            $('.office-chair-collection').html(htmlData);
            var chairImage = 0;
            var chairImage2 = data.details.length-1;
            function chairSlides() {
                chairImage++;
                chairImage2--;
                if(chairImage >= data.details.length) chairImage = 0;
                if(chairImage2 < 0) chairImage2 = data.details.length-1;   
                    $('.chair-img-1')[0].src = data.details[chairImage].officeChairImage;
                    $('.chair-img-2')[0].src = data.details[chairImage2].officeChairImage;
                    $('.office-title')[0].innerHTML = data.details[chairImage].officeChairTitle;
                    $('.collection')[0].innerHTML = data.details[chairImage].officeChairType;
                    $('.office-price')[0].innerHTML = data.details[chairImage].currencySymbol + data.details[chairImage].officeChairPrices;    
            }
            var chairTimer = setInterval(chairSlides, 3000);
            $('.office-chair-collection').hover(stopChairSlides, reStartChairSlides);
            $('.office-chair-collection').on('click', chairSlides);
            function stopChairSlides() {
                clearInterval(chairTimer);
            }
            function reStartChairSlides() {
                chairTimer = setInterval(chairSlides, 3000);
            }
    });
    $.post('https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getSpecialCollection.php', function (data) {
        var htmlData = '';
        htmlData += '<img class="special-img" src="' + data.details[0].specialImage + '" />';
        htmlData += '<p class="special-title color-orange">' + data.details[0].specialTitle + '</p>';
        htmlData += '<p class="special-discount">' + data.details[0].specialDetails + '</p>';
        $('.special-collection').html(htmlData);
        var specialImage = 0;
        function specialSlides() {
            specialImage++;
            if(specialImage >= data.details.length) specialImage = 0;
                $('.special-img')[0].src = data.details[specialImage].specialImage;
                $('.special-title')[0].innerHTML = data.details[specialImage].specialTitle;
                $('.special-discount')[0].innerHTML = data.details[specialImage].specialDetails;
        }
        var specialTimer = setInterval(specialSlides, 3000);
        $('.special-collection').hover(stopSpecialSlides, reStartSpecialSlides);
        $('.special-collection').on('click', specialSlides);
        function stopSpecialSlides() {
            clearInterval(specialTimer);
        }
        function reStartSpecialSlides() {
            specialTimer = setInterval(specialSlides, 3000);
        }
    });
    var serverString = $.post('https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getFurnitureGallery.php', function (data) {
        var $tabsGallery = $('.furniture-gallery-tabs');
        $tabsGallery.on('click', 'a', function(e) {
            e.preventDefault();
            $tabsGallery.find('.furniture-gallery-current-tab').removeClass('furniture-gallery-current-tab');
            $(this).addClass('furniture-gallery-current-tab');
        });
        var populateGallery = function(gallery) {
            var htmlData = '<img class="furniture-gallery-photo add-animation-1" src="' + gallery[1].image + '"/>';
            var htmlData1 = '';
            var htmlData2 = '<p class="gallery-featured-product-name"  style="top: 0">' + gallery[1].productName + '</p>';
            var htmlData3 = '<p class="gallery-featured-price">' + gallery[1].currencySymbol + gallery[1].price + '</p>';
            htmlData3 += '<p class="gallery-featured-price-old">' + gallery[1].currencySymbol + gallery[1].priceOld + '</p>';
            var htmlData4 = '';
            htmlData1 += '<ul>';
            for(var i = 0; i < gallery.length; i++) {
                htmlData1 += '<li><img class="gallery-featured-photo" src="' + gallery[i].image + '"></li>';
                htmlData4 += '<p class="gallery-featured-next">&#62;</p>';
                htmlData4 += '<p class="gallery-featured-previous">&#60;</p>';
            }
            htmlData1 += '</ul>';
            $('.furniture-gallery-tab-panels').html(htmlData);
            $('.gallery-featured-container').html(htmlData1);
            $('.gallery-featured-product-name').html(htmlData2);
            $('.price-slider').html(htmlData3);
            $('.gallery-featured-controls').html(htmlData4);
            function photoDetails() {
                var photoNumber = (/.*(\d)/.exec($('.gallery-featured-photo')[0].currentSrc)[1]);
                if(photoNumber < gallery.length) {
                    var newPhotoNumber = (parseInt(photoNumber, 10)+1);
                    $('.furniture-gallery-photo').attr('src', gallery[newPhotoNumber-1].image);
                    $('.gallery-featured-product-name')[0].innerHTML = gallery[newPhotoNumber-1].productName;
                    $('.gallery-featured-price')[0].innerHTML = gallery[newPhotoNumber-1].currencySymbol + gallery[newPhotoNumber-1].price;
                    $('.gallery-featured-price-old')[0].innerHTML = gallery[newPhotoNumber-1].currencySymbol + gallery[newPhotoNumber-1].priceOld;
                } else if(photoNumber == gallery.length) {
                    newPhotoNumber = (parseInt(photoNumber, 10)-gallery.length);
                    $('.furniture-gallery-photo').attr('src', gallery[0].image);
                    $('.gallery-featured-product-name')[0].innerHTML = gallery[newPhotoNumber].productName;
                    $('.gallery-featured-price')[0].innerHTML = gallery[newPhotoNumber].currencySymbol + gallery[newPhotoNumber].price;
                    $('.gallery-featured-price-old')[0].innerHTML = gallery[newPhotoNumber].currencySymbol + gallery[newPhotoNumber].priceOld;
                }
            }
            var slideCount = gallery.length;
            var slideWidth = $('.gallery-featured-container ul li').width();
            var slideHeight = $('.gallery-featured-container ul li').height();
            var sliderUlWidth = slideCount * slideWidth;
            $('.gallery-featured-container').css({
              width: slideWidth,
              height: slideHeight
            });
            $('.gallery-featured-container ul').css({
              width: sliderUlWidth,
              marginLeft: - slideWidth          
            });
            $('.gallery-featured-container ul li:last-child').prependTo('#slider ul');
            function moveLeft() {
                $('.gallery-featured-container ul').animate({
                    left: + slideWidth
                }, 1000, function () {
                    $('.gallery-featured-container ul li:last-child').prependTo('.gallery-featured-container ul');
                    $('.gallery-featured-container ul').css('left', '');
                    photoDetails();
                });
            }
            function moveRight() {
                $('.gallery-featured-container ul').animate({
                    left: - slideWidth
                }, 1000, function () {
                $('.gallery-featured-container ul li:first-child').appendTo('.gallery-featured-container ul');
                $('.gallery-featured-container ul').css('left', '');
                photoDetails();
                });
            }
            $('.gallery-featured-previous').click(function() {
                moveLeft();
                //$(this).effect('explode', 1000);
                //$(this).effect('bounce', {times:3}, 500);
                //$(this).effect('slide');
                //$('.gallery-featured-previous').draggable();
            });
            $('.gallery-featured-next').click(function() {
                moveRight();
            });
            /*var galleryTimer = setInterval(moveRight(), 9000);
            $('#furniture-gallery-featured').hover(stopIndoorSlides, reStartIndoorSlides);
            function stopIndoorSlides() {
                clearInterval(galleryTimer);
            }
            function reStartIndoorSlides() {
                galleryTimer = setInterval(moveRight, 9000);
            }*/
            $('.gallery-featured-photo').on({
                'mouseover': function() {
                    var photoNumber = ((/.*(\d)/.exec($(this)[0].src)[1])-1);
                    $('.furniture-gallery-photo').attr('src', gallery[photoNumber].image);
                    $('.gallery-featured-product-name').html(gallery[photoNumber].productName);
                    $('.gallery-featured-price').html(gallery[photoNumber].currencySymbol + gallery[photoNumber].price);
                    $('.gallery-featured-price-old').html(gallery[photoNumber].currencySymbol + gallery[photoNumber].priceOld);
                }
            });
        };
        var sortByType = function(type, arrayToSort) {
            var sortedArray = arrayToSort.filter(function(item) {
                if (item.type === type) {
                    return item;
                }    
            });
            populateGallery(sortedArray);
        };
        var displayByDefault = $('.furniture-gallery-current-tab').attr('display-by-default');
            sortByType(displayByDefault, serverString.responseJSON.details);
        $('.type-button').on('click', function () {
            var type = $(this).attr('data-type');
            sortByType(type, serverString.responseJSON.details);
        });
    });
    $.post('https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getBedroomBed.php', function (data) {
        var htmlData = '';
        htmlData += '<img class="bedroom-bed-img" src="' + data.details[0].bedroomBedImage + '" />';
        htmlData += '<p class="bedroom-bed-price shadow-text">' + data.details[0].bedroomBedCurrencySymbol + data.details[0].bedroomBedPrice + '</p>';
        htmlData += '<p class="bedroom-bed-title shadow-text color-orange">' + data.details[0].bedroomBedTitle + '</p>';
        
        $('.bedroom-bed').html(htmlData);
        var bedroomImage = 0;
        function bedroomBedSlides() {
            bedroomImage++;
            if(bedroomImage >= data.details.length) bedroomImage = 0;
                $('.bedroom-bed-img')[0].src = data.details[bedroomImage].bedroomBedImage;
                $('.bedroom-bed-price')[0].innerHTML = data.details[bedroomImage].bedroomBedCurrencySymbol + data.details[bedroomImage].bedroomBedPrice;
                $('.bedroom-bed-title')[0].innerHTML = data.details[bedroomImage].bedroomBedTitle;
        }
        var bedroomImageTimer = setInterval(bedroomBedSlides, 3000);
        $('.bedroom-bed').hover(stopBedroomBedSlides, reStartBedroomBedSlides);
        $('.bedroom-bed').on('click', bedroomBedSlides);
        function stopBedroomBedSlides() {
            clearInterval(bedroomImageTimer);
        }
        function reStartBedroomBedSlides() {
            bedroomImageTimer = setInterval(bedroomBedSlides, 3000);
        }
    });
    $.post('https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getBlog.php', function (data) {
        function latestBlog(blog) {
            var htmlData = '';
            for (var i = 0; i < blog.length; i++) {
                htmlData += '<div class="blog-slides">';
                htmlData += '<img class="blog-image shadow-box" src="' + blog[i].image +  '"/>';
                htmlData += '<div class="calendar-box background-white"><img alt="calendar" class="blog-calendar" src="images/calendar.png" />';
                htmlData += '<p class="blog-date">' + blog[i].date + '</p><img alt="comments" class="blog-comments" src="images/comments.png" />';
                htmlData += '<p class="blog-comment-no">' + blog[i].noOfComments + ' comments</p>';
                htmlData += '<p class="blog-title color-dark-gray">' + blog[i].title + '</p>';
                htmlData += '<p class="blog-description">' + blog[i].shortDescription + '</p>';
                htmlData += '<div class="blog-read-more shadow-box background-dark-gray">';
                htmlData += '<p>read more</p>';
                htmlData += '</div>';
                htmlData += '</div>';
                htmlData += '</div>';
            }
            $('.blogs').html(htmlData);
        }
        latestBlog(data.details);
    });
    $.post('https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getBrandSlider.php', function (data) {
        var htmlData = '';
        htmlData += '<ul>';
        for (var i = 0; i < data.details.length; i++) {
            htmlData += '<li><img alt="brand-logo" class="brand-photo" src="' + data.details[i].brandLogo + '"/></li>';
        }
        htmlData += '</ul>';
        $('.brand-container').html(htmlData);
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
        $('#brand-slider').hover(stopBrandSlides, reStartBrandSlides);
        function stopBrandSlides() {
            clearInterval(brandTimer);
        }
        function reStartBrandSlides() {
            brandTimer = setInterval(moveLeft, 3000);
        }
        
    });
    $.post('https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getClientFeedback.php', function (data) {
       
        function customerFeedback(comments) {    
            var htmlData = '';
            
            htmlData += '<ul>';
            for(var i = 0;i < comments.length ;i++) {
                htmlData += '<li class="feedback-slide">';
                htmlData += '<div class="comment-container">';
                htmlData += '<p class="feedback-comment">' + data.details[i].comment + '</p>';
                htmlData += '</div>';
                htmlData += '<div class="client-container">';
                htmlData += '<p class="client-name">' + data.details[i].clientName + '</p>';
                htmlData += '<p class="feedback-client-type">' + data.details[i].clientType + '</p>';
                htmlData += '<img class="feedback-profile-img shadow-box" src="' + data.details[i].clientPhoto + '"/>';
                htmlData += '</div>';
                htmlData += '</li>';
            }       
            htmlData += '</ul>';
            $('.feedback-all-slides').html(htmlData);
        }
        customerFeedback(data.details);
        
        var speed = 5000;
    
        var run = setInterval(rotate, speed);
        var feedbackSlides = $('.feedback-slide');
        var container = $('.feedback-all-slides ul');
        var elm = container.find(':first-child').prop("tagName");
        var item_width = container.width();
        var first = 'nav-5-circle-1'; 
        var second = 'nav-5-circle-2';
        var third = 'nav-5-circle-3';
        feedbackSlides.width(item_width); 
        container.parent().width(item_width);
        container.width(feedbackSlides.length * item_width);
        container.find(elm + ':first').before(container.find(elm + ':last'));
        
        resetSlides();
    
        $('.feedback-circles a').click(function (e) {
            if (container.is(':animated')) {
                return false;
            }
            if (e.target.id == first) {
                container.stop().animate({
                    'left': 0
                }, 1500, function () {
                    container.find(elm + ':first').before(container.find(elm + ':last'));
                    resetSlides();
                });
            }
            if (e.target.id == second) {
                container.stop().animate({
                    'left': item_width * -2
                }, 1500, function () {
                    container.find(elm + ':first').after(container.find(elm + ':first'));
                    resetSlides();
                });
            }
            if (e.target.id == third) {
                container.stop().animate({
                    'left': item_width * -2
                }, 1500, function () {
                    container.find(elm + ':last').after(container.find(elm + ':first'));
                    resetSlides();
                });
            }
            return false;
        });
        container.parent().mouseenter(function () {
            clearInterval(run);
        }).mouseleave(function () {
            run = setInterval(rotate, speed);
        });
        function resetSlides() {
            container.css({
                'left': -1 * item_width
            });
        }
        function rotate() {
            $('#nav-5-circle-3').click();
        }
    });
});