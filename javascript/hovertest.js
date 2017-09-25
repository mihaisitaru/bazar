/* global $ */

$('.free-shipping').mouseenter(function(){
    $('.free-shipping-text').addClass('color-pink');
    $('.free-shipping-text').removeClass('color-dark-gray');
    $('.all-order-text').addClass('color-pink');
    $('.all-order-text').removeClass('color-dark-gray');
    $('.img-ship').addClass('img-ship-hover');
    $('.free-shipping').addClass('shadow-box');
    $('.truck-circle').addClass('orange-border');
    $('.truck-circle').removeClass('gray-border');
});

$('.free-shipping').mouseleave(function(){
    $('.free-shipping-text').removeClass('color-pink');
    $('.free-shipping-text').addClass('color-dark-gray');
    $('.all-order-text').removeClass('color-pink');
    $('.all-order-text').addClass('color-dark-gray');
    $('.img-ship').removeClass('img-ship-hover');
    $('.free-shipping').removeClass('shadow-box');
    $('.truck-circle').removeClass('orange-border');
    $('.truck-circle').addClass('gray-border');
});

$('.customer-support').mouseenter(function(){
    $('.customer-support-text').addClass('color-pink');
    $('.customer-support-text').removeClass('color-dark-gray');
    $('.support-text').addClass('color-pink');
    $('.support-text').removeClass('color-dark-gray');
    $('.img-support').addClass('img-support-hover');
    $('.customer-support').addClass('shadow-box');
    $('.headphones-circle').addClass('orange-border');
    $('.headphones-circle').removeClass('gray-border');
});

$('.customer-support').mouseleave(function(){
    $('.fcustomer-support-text').removeClass('color-pink');
    $('.customer-support-text').addClass('color-dark-gray');
    $('.support-text').removeClass('color-pink');
    $('.support-text').addClass('color-dark-gray');
    $('.img-support').removeClass('img-support-hover');
    $('.customer-support').removeClass('shadow-box');
    $('.headphones-circle').removeClass('orange-border');
    $('.headphones-circle').addClass('gray-border');
});

$('.money-back').mouseenter(function(){
    $('.money-back-text').addClass('color-pink');
    $('.money-back-text').removeClass('color-dark-gray');
    $('.guarantee-text').addClass('color-pink');
    $('.guarantee-text').removeClass('color-dark-gray');
    $('.img-guarantee').addClass('img-guarantee-hover');
    $('.money-back').addClass('shadow-box');
    $('.money-back-circle').addClass('orange-border');
    $('.money-back-circle').removeClass('gray-border');
});

$('.money-back').mouseleave(function(){
    $('.money-back-text').removeClass('color-pink');
    $('.money-back-text').addClass('color-dark-gray');
    $('.guarantee-text').removeClass('color-pink');
    $('.guarantee-text').addClass('color-dark-gray');
    $('.img-guarantee').removeClass('img-guarantee-hover');
    $('.money-back').removeClass('shadow-box');
    $('.money-back-circle').removeClass('orange-border');
    $('.money-back-circle').addClass('gray-border');
});

$('.discount').mouseenter(function(){
    $('.discount-text').addClass('color-pink');
    $('.discount-text').removeClass('color-dark-gray');
    $('.first-order-text').addClass('color-pink');
    $('.first-order-text').removeClass('color-dark-gray');
    $('.img-first-order').addClass('img-first-order-hover');
    $('.discount').addClass('shadow-box');
    $('.member-discount-circle').addClass('orange-border');
    $('.member-discount-circle').removeClass('gray-border');
});

$('.discount').mouseleave(function(){
    $('.discount-text').removeClass('color-pink');
    $('.discount-text').addClass('color-dark-gray');
    $('.first-order-text').removeClass('color-pink');
    $('.first-order-text').addClass('color-dark-gray');
    $('.img-first-order').removeClass('img-first-order-hover');
    $('.discount').removeClass('shadow-box');
    $('.member-discount-circle').removeClass('orange-border');
    $('.member-discount-circle').addClass('gray-border');
});

$('.product').hover(				
   function () {
      $(this).find('.display-none').removeClass('display-none');
      $(this).addClass('display-block');
      $(this).find('.color-dark-gray').removeClass('color-dark-gray');
      $('.textproduct').addClass('color-orange');
      $(this).find('.background-dark-gray').removeClass('background-dark-gray');
      $('.pricetext').addClass('background-orange');
      console.log($(this));
   }, 
	
   function () {
      $(this).removeClass('display-block');
        $('.textquickview').addClass('display-none');
        $('.whiteshopcart').addClass('display-none');
        $('.textaddtocart').addClass('display-none');
        $('.textproduct').removeClass('color-orange');
        $('.textproduct').addClass('color-dark-gray');
        $('.pricetext').removeClass('background-orange');
        $('.pricetext').addClass('background-dark-gray');
        console.log($(this));
   }
);