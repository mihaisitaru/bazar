/* global $ */
$(function() {
    $('a').each(function() {
        if ($(this).prop('href') == window.location.href) {
            $(this).addClass('current');
        }
    });
});
$(function() {
    $('span').each(function() {
        if ($(this).prop('.tab') == window.location.href) {
            $(this).addClass('current2');
        }
    });
});

var offerExpiresDays1 = document.getElementById("offer-expires-days-1");
var offerExpiresHours1 = document.getElementById("offer-expires-hours-1");
var offerExpiresMinutes1 = document.getElementById("offer-expires-minutes-1");
var offerExpiresSeconds1 = document.getElementById("offer-expires-seconds-1");

var offerExpiresDays2 = document.getElementById("offer-expires-days-2");
var offerExpiresHours2 = document.getElementById("offer-expires-hours-2");
var offerExpiresMinutes2 = document.getElementById("offer-expires-minutes-2");
var offerExpiresSeconds2 = document.getElementById("offer-expires-seconds-2");

var offerExpiresDays3 = document.getElementById("offer-expires-days-3");
var offerExpiresHours3 = document.getElementById("offer-expires-hours-3");
var offerExpiresMinutes3 = document.getElementById("offer-expires-minutes-3");
var offerExpiresSeconds3 = document.getElementById("offer-expires-seconds-3");

var offerExpired1 = document.getElementById("offer-expired-1");
var offerExpired2 = document.getElementById("offer-expired-2");
var offerExpired3 = document.getElementById("offer-expired-3");

// Set the dates we're counting down to
var countDownDate1 = new Date("Oct 13, 2017 00:00:00").getTime();
var countDownDate2 = new Date("Dec 25, 2017 20:51:00").getTime();
var countDownDate3 = new Date("Jan 23, 2018 04:40:00").getTime();
// Update the count down every 1 second
var offerTime = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance1 = countDownDate1 - now;
    var distance2 = countDownDate2 - now;
    var distance3 = countDownDate3 - now;
    // Time calculations for days, hours, minutes and seconds
    var days1 = Math.floor(distance1 / (1000 * 60 * 60 * 24));
    var hours1 = Math.floor((distance1 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes1 = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
    var seconds1 = Math.floor((distance1 % (1000 * 60)) / 1000);

    var days2 = Math.floor(distance2 / (1000 * 60 * 60 * 24));
    var hours2 = Math.floor((distance2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes2 = Math.floor((distance2 % (1000 * 60 * 60)) / (1000 * 60));
    var seconds2 = Math.floor((distance2 % (1000 * 60)) / 1000);

    var days3 = Math.floor(distance3 / (1000 * 60 * 60 * 24));
    var hours3 = Math.floor((distance3 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes3 = Math.floor((distance3 % (1000 * 60 * 60)) / (1000 * 60));
    var seconds3 = Math.floor((distance3 % (1000 * 60)) / 1000);

    offerExpiresDays1.innerHTML = days1 + "<br>" + "DAYS";
    offerExpiresHours1.innerHTML = hours1 + "<br>" + "HRS";
    offerExpiresMinutes1.innerHTML = minutes1 + "<br>" + "MINS";
    offerExpiresSeconds1.innerHTML = seconds1 + "<br>" + "SECS";

    offerExpiresDays2.innerHTML = days2 + "<br>" + "DAYS";
    offerExpiresHours2.innerHTML = hours2 + "<br>" + "HRS";
    offerExpiresMinutes2.innerHTML = minutes2 + "<br>" + "MINS";
    offerExpiresSeconds2.innerHTML = seconds2 + "<br>" + "SECS";

    offerExpiresDays3.innerHTML = days3 + "<br>" + "DAYS";
    offerExpiresHours3.innerHTML = hours3 + "<br>" + "HRS";
    offerExpiresMinutes3.innerHTML = minutes3 + "<br>" + "MINS";
    offerExpiresSeconds3.innerHTML = seconds3 + "<br>" + "SECS";


    if (distance1 < 0) {
        clearInterval(offerTime);
        offerExpired1.classList.add("display-block");
        offerExpired1.classList.remove("display-none");
        offerExpired1.innerHTML = "offer expired!";
        offerExpiresDays1.classList.add("display-none");
        offerExpiresHours1.classList.add("display-none");
        offerExpiresMinutes1.classList.add("display-none");
        offerExpiresSeconds1.classList.add("display-none");
    }

    if (distance2 < 0) {
        clearInterval(offerTime);
        offerExpired2.classList.add("display-block");
        offerExpired2.classList.remove("display-none");
        offerExpired2.innerHTML = "offer expired!";
        offerExpiresDays2.classList.add("display-none");
        offerExpiresHours2.classList.add("display-none");
        offerExpiresMinutes2.classList.add("display-none");
        offerExpiresSeconds2.classList.add("display-none");
    }

    if (distance3 < 0) {
        clearInterval(offerTime);
        offerExpired3.classList.add("display-block");
        offerExpired3.classList.remove("display-none");
        offerExpired3.innerHTML = "offer expired!";
        offerExpiresDays3.classList.add("display-none");
        offerExpiresHours3.classList.add("display-none");
        offerExpiresMinutes3.classList.add("display-none");
        offerExpiresSeconds3.classList.add("display-none");
    }

}, 1000);

var countDownImg = [
    "images/hotdeal1.png",
    "images/hotdeal2.jpg",
    "images/hotdeal3.jpg"
];

var hotdealProduct = {
    name: [
        "blue cloud lamp",
        "the box chair",
        "vintage wardrobe"
    ],
    price: [
        "$300.00",
        "$100.00",
        "$650.00"
    ],
    priceOld: [
        "$350.00",
        "$180.00",
        "$800.00"
    ],
};

var hotdeal = document.querySelectorAll(".hotdeal");
var dealCircle1 = document.getElementById("deal-circle-1");
var dealCircle2 = document.getElementById("deal-circle-2");
var dealCircle3 = document.getElementById("deal-circle-3");
var countDown1 = document.getElementById('count-down-1');
var countDown2 = document.getElementById('count-down-2');
var countDown3 = document.getElementById('count-down-3');
var priceTextDeal = document.getElementsByClassName('price-text-deal');
var priceTextDealStrike = document.getElementsByClassName('price-text-deal-strike');
var hotdealProductNameId = document.getElementById('hotdeal-product-name-id');
var pricedealId = document.getElementById('price-deal-id');
var addtocartdealID = document.getElementById('add-to-cart-deal-id');
var hotdealStartContainer = document.getElementById('hotdeal-slide-container');

var hotDealStart = 0;

function deals() {

    if (hotDealStart == 0) {
        hotdeal[0].src = countDownImg[0];
        hotdeal[0].classList.add("add-animation-1");
        hotdeal[0].classList.remove("add-animation-3");
        countDown3.classList.remove("display-block");
        countDown3.classList.add("display-none");
        countDown1.classList.remove("display-none");
        countDown1.classList.add("display-block");
        dealCircle1.classList.toggle("deal-circle-orange");
        dealCircle1.classList.toggle("deal-circle");
        dealCircle3.classList.remove("deal-circle-orange");
        dealCircle3.classList.add("deal-circle");
        hotdealProductNameId.innerHTML = hotdealProduct.name[hotDealStart];
        priceTextDeal[0].innerHTML = hotdealProduct.price[hotDealStart];    
        priceTextDealStrike[0].innerHTML = hotdealProduct.priceOld[hotDealStart];
        hotDealStart = 1;
    }
    else if (hotDealStart == 1) {
        hotdeal[0].src = countDownImg[1];
        hotdeal[0].classList.remove("add-animation-1");
        hotdeal[0].classList.add("add-animation-2");
        countDown1.classList.remove("display-block");
        countDown1.classList.add("display-none");
        countDown2.classList.remove("display-none");
        countDown2.classList.add("display-block");
        dealCircle1.classList.remove("deal-circle-orange");
        dealCircle1.classList.add("deal-circle");
        dealCircle2.classList.add("deal-circle-orange");
        dealCircle2.classList.remove("deal-circle");
        dealCircle3.classList.remove("deal-circle-orange");
        dealCircle3.classList.add("deal-circle");
        hotdealProductNameId.innerHTML = hotdealProduct.name[hotDealStart];
        priceTextDeal[0].innerHTML = hotdealProduct.price[hotDealStart];
        priceTextDealStrike[0].innerHTML = hotdealProduct.priceOld[hotDealStart];
        hotDealStart = 2;
    }
    else if (hotDealStart == 2) {
        hotdeal[0].src = countDownImg[2];
        hotdeal[0].classList.remove("add-animation-2");
        hotdeal[0].classList.add("add-animation-3");
        countDown2.classList.remove("display-block");
        countDown2.classList.add("display-none");
        countDown3.classList.remove("display-none");
        countDown3.classList.add("display-block");
        dealCircle2.classList.toggle("deal-circle-orange");
        dealCircle2.classList.toggle("deal-circle");
        dealCircle3.classList.add("deal-circle-orange");
        dealCircle3.classList.toggle("deal-circle");
        hotdealProductNameId.innerHTML = hotdealProduct.name[hotDealStart];
        priceTextDeal[0].innerHTML = hotdealProduct.price[hotDealStart];
        priceTextDealStrike[0].innerHTML = hotdealProduct.priceOld[hotDealStart];
        hotDealStart = 0;
    }
}

setInterval(deals, 2500);

var deals_mouse_over = true;

function dealsMouseOver() {

    if (deals_mouse_over == true) {

        hotdealProductNameId.classList.remove('hotdeal-product-name');
        hotdealProductNameId.classList.add('color-orange');
        pricedealId.classList.remove('price-deal');
        pricedealId.classList.add('background-orange');
        addtocartdealID.classList.remove('add-to-cart-deal');
        addtocartdealID.classList.add('background-orange');
        deals_mouse_over = false;
    }
}

function dealsMouseOut() {

    if (deals_mouse_over == false) {
        hotdealProductNameId.classList.remove('color-orange');
        hotdealProductNameId.classList.add('hotdeal-product-name');
        pricedealId.classList.remove('background-orange');
        pricedealId.classList.add('price-deal');
        addtocartdealID.classList.remove('background-orange');
        addtocartdealID.classList.add('add-to-cart-deal');
        deals_mouse_over = true;
    }
}
dealCircle1.addEventListener("click", deals);
dealCircle2.addEventListener("click", deals);
dealCircle3.addEventListener("click", deals);

hotdealStartContainer.addEventListener("mouseover", dealsMouseOver);
hotdealStartContainer.addEventListener("mouseout", dealsMouseOut);

$(document).ready(function($) {

    var slideCount = $('#indoor-slide-container ul li').length;
    var slideWidth = $('#indoor-slide-container ul li').width();
    var slideHeight = $('#indoor-slide-container ul li').height();
    var sliderUlWidth = slideCount * slideWidth;

    $('#indoor-slide-container').css({
        width: slideWidth,
        height: slideHeight
    });

    $('#indoor-slide-container ul').css({
        width: sliderUlWidth,
        marginLeft: -slideWidth
    });

    $('#indoor-slide-container ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#indoor-slide-container ul').animate({
            left: +slideWidth
        }, 3000, function() {
            $('#indoor-slide-container ul li:last-child').prependTo('#indoor-slide-container ul');
            $('#indoor-slide-container ul').css('left', '');
        });
    }

    function moveRight() {
        $('#indoor-slide-container ul').animate({
            left: -slideWidth
        }, 3000, function() {
            $('#indoor-slide-container ul li:first-child').appendTo('#indoor-slide-container ul');
            $('#indoor-slide-container ul').css('left', '');
        });
    }

    $('.indoor-previous').click(function() {
        moveLeft();
    });

    $('.indoor-next').click(function() {
        moveRight();
    });

    setInterval(moveRight, 9000);

});

var sofaImgSlide = [
    "images/sofa1.jpg",
    "images/sofa2.jpg",
    "images/sofa3.jpg",
    "images/sofa4.jpg",
    "images/sofa5.jpg",
    "images/sofa6.jpg",
    "images/sofa7.jpg"
];

var sofaImage = 0;
var sofaImg = document.getElementsByClassName("sofa-img");

function sofasSlides() {
    sofaImage++;
    if (sofaImage >= sofaImgSlide.length) {
        sofaImage = 0;
    }
    sofaImg[0].src = sofaImgSlide[sofaImage];
}

var sofaTimer = setInterval(sofasSlides, 3000);

$('.sofa-img').hover(stopSofasSlides, reStartSofasSlides);

function stopSofasSlides() {
    //mouse in, clearinterval to pause
    clearInterval(sofaTimer);
} 

function reStartSofasSlides() {
    //mouse out, setinterval to continue
    sofaTimer = setInterval(sofasSlides, 3000);
}

var chairImgSlide1 = [
    "images/chair1.png",
    "images/chair2.png",
    "images/chair3.png",
    "images/chair4.png",
    "images/chair5.png",
    "images/chair6.png",
    "images/chair7.png"
];

var chairSlide = 0;
var chairImg1 = document.getElementsByClassName("chair-img-1");

function changeChair1() {
    chairSlide++;
    if (chairSlide >= chairImgSlide1.length) {
        chairSlide = 0;
    }
    chairImg1[0].src = chairImgSlide1[chairSlide];
}

var chairTimer1 = setInterval(changeChair1, 3000);

$('.chair-img-1').hover(stopChairSlides1, reStartChairSlides1);

function stopChairSlides1() {
    //mouse in, clearinterval to pause
    clearInterval(chairTimer1);
} 

function reStartChairSlides1() {
    //mouse out, setinterval to continue
    chairTimer1 = setInterval(changeChair1, 3000);
}

var chairSlide2 = 1;
var chairImg2 = document.getElementsByClassName("chair-img-2");

function changeChair2() {
    chairSlide2--;
    if (chairSlide2 < 0) {
        chairSlide2 = 6;
    }
    chairImg2[0].src = chairImgSlide1[chairSlide2];
}

var chairTimer2 = setInterval(changeChair2, 3000);

$('.chair-img-2').hover(stopChairSlides2, reStartChairSlides2);

function stopChairSlides2() {
    //mouse in, clearinterval to pause
    clearInterval(chairTimer2);
} 

function reStartChairSlides2() {
    //mouse out, setinterval to continue
    chairTimer2 = setInterval(changeChair2, 3000);
}

var specialImgSlide = [
    "images/spec1.png",
    "images/spec2.png",
    "images/spec3.png",
    "images/spec4.png",
    "images/spec5.png",
    "images/spec6.png",
    "images/spec7.png"
];

var specialSlide = 0;
var specialImg = document.getElementsByClassName("special-img");

function specialSlider() {
    specialSlide++;
    if (specialSlide >= specialImgSlide.length) {
        specialSlide = 0;
    }
    specialImg[0].src = specialImgSlide[specialSlide];
}

var specialTimer = setInterval(specialSlider, 4000);

$('.special-img').hover(stopSpecialSlides, reStartSpecialSlides);

function stopSpecialSlides() {
    //mouse in, clearinterval to pause
    clearInterval(specialTimer);
} 

function reStartSpecialSlides() {
    //mouse out, setinterval to continue
    specialTimer = setInterval(specialSlider, 4000);
}

var bedImages = [
    "images/bbed1.jpg",
    "images/bbed2.jpg",
    "images/bbed3.jpg",
    "images/bbed4.jpg",
    "images/bbed5.jpg",
    "images/bbed6.jpg",
    "images/bbed7.jpg",
    "images/bbed8.jpg",
    "images/bbed9.jpg",
    "images/bbed10.jpg",
    "images/bbed11.jpg"
];

var bbedI = 0;
var bbedImg = document.getElementById('bbedImg');

function bedBed() {
    bbedI++;
    if (bbedI >= bedImages.length) {
        bbedI = 0;
    }
    bbedImg.src = bedImages[bbedI];
}

setInterval(bedBed, 3000);

var $tabsFurniture = $('.new-furniture-tabs');
var $panels1 = $('.panel-1');

$tabsFurniture.on('click', 'a', function(e) {
    e.preventDefault();
    var link1 = $(this).attr('href');

    $panels1.filter(':not(.new-furniture-current-tab)').addClass('display-none');
    $(link1).removeClass('display-none');

    $tabsFurniture.find('.new-furniture-current-tab').removeClass('new-furniture-current-tab');
    $(this).addClass('new-furniture-current-tab');
});

var $tabsGallery = $('.furniture-gallery-tabs');
var $panels2 = $('.panel-2');

$tabsGallery.on('click', 'a', function(e) {
    e.preventDefault();
    var link2 = $(this).attr('href');

    $panels2.filter(':not(.furniture-gallery-current-tab)').addClass('display-none');
    $(link2).removeClass('display-none');

    $tabsGallery.find('.furniture-gallery-current-tab').removeClass('furniture-gallery-current-tab');
    $(this).addClass('furniture-gallery-current-tab');
});

var featuredPhoto = document.getElementById('featured');
var topSellerPhoto = document.getElementById('topseller');
var saleOffPhoto = document.getElementById('saloff');
var topRatedPhoto = document.getElementById('toprated');
var galleryFeaturedWhiteBox = document.getElementById('gallery-featured-white-box');
var galleryTopSellerWhiteBox = document.getElementById('gallery-topseller-white-box');
var gallerySaleOffWhiteBox = document.getElementById('gallery-saleoff-white-box');
var galleryTopRatedWhiteBox = document.getElementById('gallery-toprated-white-box');
var galleryFeaturedProductName = document.getElementsByClassName('gallery-featured-product-name');
var galleryTopSellerProductName = document.getElementsByClassName('gallery-topseller-product-name');
var gallerySaleOffProductName = document.getElementsByClassName('gallery-saleoff-product-name');
var galleryTopRatedProductName = document.getElementsByClassName('gallery-toprated-product-name');
var galleryFeaturedPrice = document.getElementsByClassName('gallery-featured-price');
var galleryFeaturedPriceOld = document.getElementsByClassName('gallery-featured-price-old');
var galleryTopSellerPrice = document.getElementsByClassName('gallery-featured-price');
var galleryTopSellerPriceOld = document.getElementsByClassName('gallery-featured-price-old');
var gallerySaleOffPrice = document.getElementsByClassName('gallery-featured-price');
var gallerySaleOffPriceOld = document.getElementsByClassName('gallery-featured-price-old');
var galleryTopRatedPrice = document.getElementsByClassName('gallery-featured-price');
var galleryTopRatedPriceOld = document.getElementsByClassName('gallery-featured-price-old');
var galleryFeaturedPhoto = document.getElementsByClassName('gallery-featured-photo');
var galleryTopSellerPhoto = document.getElementsByClassName('gallery-featured-photo');
var gallerySaleOffPhoto = document.getElementsByClassName('gallery-featured-photo');
var galleryTopRatedPhoto = document.getElementsByClassName('gallery-featured-photo');

var galleryFeatured = {
    
    images : ["images/gallfeat1.jpg",
    "images/gallfeat2.jpg",
    "images/gallfeat3.jpg",
    "images/gallfeat4.jpg",
    "images/gallfeat5.jpg",
    "images/gallfeat6.jpg",
    "images/gallfeat7.jpg",
    "images/gallfeat8.jpg",
    "images/gallfeat9.jpg",
    "images/gallfeat10.jpg",
    "images/gallfeat11.jpg",
    "images/gallfeat12.jpg",
    "images/gallfeat13.jpg"
],
    name: ['Bed1',
    'Bed2',
    'Bed3',
    'Bed4',
    'Bed5',
    'Bed6',
    'Bed7',
    'Bed8',
    'Bed9',
    'Bed10',
    'Bed11',
    'Bed12',
    'Bed13'
],
    price: ['$120.00',
    '$130.00',
    '$140.00',
    '$150.00',
    '$160.00',
    '$170.00',
    '$180.00',
    '$190.00',
    '$200.00',
    '$210.00',
    '$220.00',
    '$230.00',
    '$240.00'
],
    priceOld: ['$160.00',
    '$170.00',
    '$180.00',
    '$190.00',
    '$200.00',
    '$210.00',
    '$220.00',
    '$230.00',
    '$240.00',
    '$250.00',
    '$260.00',
    '$270.00',
    '$280.00'
    ],
};

//set how many photos to show, taking in consideration their total size and space between them
var galleryShow = 6.8;
//calculate each slides width depending on how many you want to show
var galleryWidth = $('#gallery-featured-slider').width() / galleryShow;
var galleryLength = $('.gallery-featured-slide').length;

//set each slide width
$('.gallery-featured-slide').width(galleryWidth);

//set the container width to fix the animation sliding issue
$('#gallery-featured-container').width(galleryWidth * galleryLength);

function galleryFeaturedSliderNext() {
    
    $('.gallery-featured-slide').first().animate({
        marginLeft: -galleryWidth
    }, 'slow', function() {
        
        $(this).appendTo($(this).parent()).css({
            marginLeft: 0
        });
        
        featuredPhoto.src = galleryFeaturedPhoto[0].currentSrc;
        galleryFeaturedProductName[0].innerHTML = galleryFeatured.name[galleryFeaturedPhoto[0].alt-1];
        galleryFeaturedPrice[0].innerHTML = galleryFeatured.price[galleryFeaturedPhoto[0].alt-1];
        galleryFeaturedPriceOld[0].innerHTML = galleryFeatured.priceOld[galleryFeaturedPhoto[0].alt-1];
 
    });
}

function galleryFeaturedSliderPrev() {

    $('.gallery-featured-slide').last().animate({
        marginLeft: +galleryWidth
    }, 'slow', function() {
        $(this).prependTo($(this).parent()).css({
            marginLeft: 0
        });
        featuredPhoto.src = galleryFeaturedPhoto[0].currentSrc;
        galleryFeaturedProductName[0].innerHTML = galleryFeatured.name[galleryFeaturedPhoto[0].alt-1];
        galleryFeaturedPrice[0].innerHTML = galleryFeatured.price[galleryFeaturedPhoto[0].alt-1];
        galleryFeaturedPriceOld[0].innerHTML = galleryFeatured.priceOld[galleryFeaturedPhoto[0].alt-1];
    });
}

$('.gallery-featured-photo').on({
    'mouseover': function() {
        $('#featured').attr('src', this.src);
        $('.gallery-featured-product-name').html(galleryFeatured.name[this.alt-1]);
        $('.gallery-featured-price').html(galleryFeatured.price[this.alt-1]);
        $('.gallery-featured-price-old').html(galleryFeatured.priceOld[this.alt-1]);
    }
});

//de facut pop la poza ce dispare in stanga si push la sfarsit in dreapta

//setInterval on DOM ready
var timerFeatured = setInterval(galleryFeaturedSliderPrev, 3000);

$('#gallery-featured-slider').hover(function() {
    //mouse in, clearinterval to pause
    clearInterval(timerFeatured);
}, function() {
    //mouse out, setinterval to continue
    timerFeatured = setInterval(galleryFeaturedSliderNext, 3000);
});
/*
$('#gallery-featured-slider').hover(stopSlider, reStartSlider);
$('.gallery-featured-previous').hover(stopSlider, reStartSlider);
$('.gallery-featured-next').hover(stopSlider, reStartSlider);

function stopSlider() {
    //mouse in, clearinterval to pause
    clearInterval(timerFeatured);
} 

function reStartSlider() {
    //mouse out, setinterval to continue
    timerFeatured = setInterval(galleryFeaturedSliderPrev, 3000);
}*/


$('.gallery-featured-previous').on('click', galleryFeaturedSliderPrev);
$('.gallery-featured-next').on('click', galleryFeaturedSliderNext);
/*
var galleryTopSeller = {
    
    images : ["images/galltops1.jpg",
    "images/galltops2.jpg",
    "images/galltops3.jpg",
    "images/galltops4.jpg",
    "images/galltops5.jpg",
    "images/galltops6.jpg",
    "images/galltops7.jpg",
    "images/galltops8.jpg",
    "images/galltops9.jpg",
    "images/galltops10.jpg",
    "images/galltops11.jpg",
    "images/galltops12.jpg",
    "images/galltops13.jpg"
],
    name: ['kitchen1',
    'kitchen2',
    'kitchen3',
    'kitchen4',
    'kitchen5',
    'kitchen6',
    'kitchen7',
    'kitchen8',
    'kitchen9',
    'kitchen10',
    'kitchen11',
    'kitchen12',
    'kitchen13'
],
    price: ['$1200.00',
    '$1300.00',
    '$1400.00',
    '$1500.00',
    '$1600.00',
    '$1700.00',
    '$1800.00',
    '$1900.00',
    '$2000.00',
    '$2100.00',
    '$2200.00',
    '$2300.00',
    '$2400.00'
],
    priceOld: ['$1600.00',
    '$1700.00',
    '$1800.00',
    '$1900.00',
    '$2000.00',
    '$2100.00',
    '$2200.00',
    '$2300.00',
    '$2400.00',
    '$2500.00',
    '$2600.00',
    '$2700.00',
    '$2800.00'
    ],
};


//set each slide width
$('.gallery-topseller-slide').width(galleryWidth);

//set the container width to fix the animation sliding issue
$('#gallery-topseller-container').width(galleryWidth * gallertLength);

function galleryTopSellerSliderNext() {
    clearInterval(timerFeatured);
    //animate only the first slide on the left, all the slides after will just follow
    $('.gallery-topseller-slide').first().animate({
        marginLeft: -galleryWidth
    }, 'slow', function() {
        //once completely hidden, move this slide next to the first slide
        //and reset the margin-left to 0
        $(this).appendTo($(this).parent()).css({
            marginLeft: 0
        });
        /*galleryTopSellerWhiteBox.classList.remove('display-none');
        topSellerPhoto.src = galleryTopSellerPhoto[0].currentSrc;
        galleryTopSellerProductName[0].innerHTML = galleryTopSeller.name[galleryTopSellerPhoto[0].alt-1];
        galleryTopSellerPrice[0].innerHTML = galleryTopSeller.price[galleryTopSellerPhoto[0].alt-1];
        galleryTopSellerPriceOld[0].innerHTML = galleryTopSeller.priceOld[galleryTopSellerPhoto[0].alt-1];
    });
}

function galleryTopSellerSliderPrev() {
    //animate only the last slide on the right, all the slides after will just move to the right

    $('.gallery-topseller-slide').last().animate({
        marginRight: -galleryWidth
    }, 'slow', function() {
       
        $(this).prependTo($(this).parent()).css({
            marginRight: 0
        });
          
        topSellerPhoto.src = galleryTopSellerPhoto[0].currentSrc;
        galleryTopSellerProductName[0].innerHTML = galleryTopSeller.name[galleryTopSellerPhoto[0].alt-1];
        galleryTopSellerPrice[0].innerHTML = galleryTopSeller.price[galleryTopSellerPhoto[0].alt-1];
        galleryTopSellerPriceOld[0].innerHTML = galleryTopSeller.priceOld[galleryTopSellerPhoto[0].alt-1];
	
    });
}

$('.gallery-topseller-photo').on({
    'mouseover': function() {
        $('#topseller').attr('src', this.src);
        $('.gallery-topseller-product-name').html(galleryTopSeller.name[this.alt-1]);
        $('.gallery-topseller-price').html(galleryTopSeller.price[this.alt-1]);
        $('.gallery-topseller-price-old').html(galleryTopSeller.priceOld[this.alt-1]);
    }
});


//setInterval on DOM ready
var timerTopSeller = setInterval(galleryTopSellerSliderNext, 3000);

$('#gallery-topseller-slider').hover(function() {
    //mouse in, clearinterval to pause
    clearInterval(timerTopSeller);
}, function() {
    //mouse out, setinterval to continue
    timerTopSeller = setInterval(galleryTopSellerSliderNext, 3000);
});

$('.gallery-topseller-previous').on('mouseover', galleryTopSellerSliderPrev);
$('.gallery-topseller-previous').on('click', galleryTopSellerSliderPrev);
$('.gallery-topseller-next').on('mouseover', galleryTopSellerSliderNext);
$('.gallery-topseller-next').on('click', galleryTopSellerSliderNext);
*/