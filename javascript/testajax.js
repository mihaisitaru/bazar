/* global $ */

/*var root = 'https://jsonplaceholder.typicode.com';*/

/*var serverData = {
    "successful": true,
    "details": [
        {
            "productId": 1,
            "productName": "BBBBBBB",
            "description": "dfgdgdfgf fd gdf gdgd fgdfgdfgdf",
            "shortDescription": "dfgdgdfgf",
            "dateAdded": "2017-07-12",
            "price": "360.00",
            "curencyIsoCode": "EUR",
            "rating": 2,
            "promo": 0,
            "discount": "0.00",
            "active": 1,
            "topSell": 0,
            "categId": 1
        },
        {
            "productId": 2,
            "productName": "bed2",
            "description": "sffffffffffffffffdsdfdf",
            "shortDescription": "dfdfd",
            "dateAdded": "2017-07-14",
            "price": "200.61",
            "curencyIsoCode": "EUR",
            "rating": 3,
            "promo": 0,
            "discount": "0.00",
            "active": 1,
            "topSell": 0,
            "categId": 1
        },
        {
            "productId": 5,
            "productName": "sofa",
            "description": "little sofa bla bla bla",
            "shortDescription": "sofa little",
            "dateAdded": "2017-07-16",
            "price": "3.00",
            "curencyIsoCode": "EUR",
            "rating": 2,
            "promo": 1,
            "discount": "1.00",
            "active": 1,
            "topSell": 3,
            "categId": 4
        },
        {
            "productId": 6,
            "productName": "sofa",
            "description": "little sofa bla bla bla",
            "shortDescription": "sofa little",
            "dateAdded": "2017-07-16",
            "price": "3.00",
            "curencyIsoCode": "EUR",
            "rating": 2,
            "promo": 1,
            "discount": "1.00",
            "active": 1,
            "topSell": 3,
            "categId": 4
        }
    ]
};
*/


/*});*/

/*var serverData = $.get("https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getAllProducts.php?curencyIsoCode=EUR");*/
//function(data) {
 //   console.log(data.details);
 // $('.products').html(data.details);
 // console.log("Load was performed.");
//  var d = data.details;
//});

/*$(document).ready(
    function(data) {
        $.post("https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getAllProducts.php",
        {
          curencyIsoCode: "EUR"
        },
        function(data, status){
            console.log(data);
            //document.write("Data: " + data + "\nStatus: " + status);
        });
    });*/
/*console.log(serverData);*/
/*var populateProducts = function(data) {
    var templateString = '';
    for(var i=0; i < data.length;i++) {
        templateString += '<div class="product">';
        templateString += '<div onclick="asasa" class="title">' + data[i].productName + '</div>';
        templateString += '<div class="description">' + data[i].description + '</div>';
        templateString += '<div class="price">' + data[i].price + '</div>';
        templateString += '</div>';
        console.log(templateString);
    }   
    $('.products').html(templateString);
};

//$('.title').on('click', populateProducts);
populateProducts(serverData.details);
*/
/*$.ajax({
  url: root + '/posts',
  method: 'GET'
}).done(function(data) {
  console.log(data);
   for(var i=0; i < data.length; i++){
   $('#text').append(data[i].id, '<br>', data[i].title, '<br>', data[i].body, '<br>');
//    $('body').append(data[i].id, '<br>', data[i].title, '<br>', data[i].body, '<br>');
   }
});*/

/*var root = ;*/

/*$.ajax({
  url: root + '/posts',
  method: 'GET'
}).done(function(data) {
  console.log(data);
   for(var i=0; i < data.length; i++){
   $('#text').append(data[i].id, '<br>', data[i].title, '<br>', data[i].body, '<br>');
//    $('body').append(data[i].id, '<br>', data[i].title, '<br>', data[i].body, '<br>');
   }
});*/

/*$(document).ready(function(){
    $.get("https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getAllProducts.php?curencyIsoCode=EUR", function(data, status){
        console.log(data + status);
    });
});
*/
/*$(document).ready(function () {*/
/*var serverData = $.ajax({ 
        type: 'POST', 
        url: 'https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getAllProducts.php', 
        data: { curencyIsoCode: 'EUR' }, 
        success: function (data) { 
            //var names = data;
            //$('.products').html(data);
        }
    });
    
    var populateProducts = function(data) {
    var templateString = '';
    for(var i=0; i < data.length;i++) {
        templateString += '<div class="product">';
        templateString += '<div onclick="asasa" class="title">' + data[i].productName + '</div>';
        templateString += '<div class="description">' + data[i].description + '</div>';
        templateString += '<div class="price">' + data[i].price + '</div>';
        templateString += '</div>';
        console.log(templateString);
    }   
    $('.products').html(templateString);
};

console.log(serverData);
populateProducts(serverData);*/

$(document).ready(function(){
   
        $.post("https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getAllProducts.php",
        {
         curencyIsoCode: 'USD'
        },
        function(data){
            //console.log(data.details[0]);
            var templateString = '';
                for(var i=0; i < data.details.length;i++) {
                    templateString += '<div class="product">';
                    templateString += '<div onclick="asasa" class="title">' + data.details[i].productName + '</div>';
                    templateString += '<div class="description">' + data.details[i].description + '</div>';
                    templateString += '<div class="price">' + data.details[i].price + '</div>';
                    templateString += '</div>';
                    /*if(i>3) {
                        break;    
                    }
                    if(i>=3){
                        for(i=0; i < data.details.length;i++) {
                            templateString += '<div class="product">';
                            templateString += '<div onclick="asasa" class="title">' + data.details[i].productName + '</div>';
                            templateString += '<div class="description">' + data.details[i].description + '</div>';
                            templateString += '<div class="price">' + data.details[i].price + '</div>';
                            templateString += '</div>';
                        }
                    }*/    
                    //console.log(templateString);
                }   
            $('.products').html(templateString);
        });
    });