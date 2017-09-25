/* global $ */
$(document).ready(function () {
    var serverData = $.post('https://bazar-shop-online-mihaisitaru.c9users.io/php/work3/api/products/getAllProducts.php', function(data) {
        //var sortedProducts = function(products) {
            var htmlData = '';
            for (var i = 0; i < data.details.length; i++) {
                htmlData += '<div class="product-sorted">';
                htmlData += '<img class="product-img-sorted" src="' + data.details[i].productImage + '" />';
                htmlData += '<div class="text-add-to-cart-sorted shadow-box"><p>add to cart</p></div>';
                htmlData += '<div class="product-name-sorted background-white">';
                htmlData += '<p class="text-product-sorted color-dark-gray">' + data.details[i].productName + '</p>';
                htmlData += '<div class="black-stars-sorted"></div>';
                htmlData += '<div class="white-stars-sorted"></div>';
                htmlData += '<div class="gray-line-sorted shadow-box"></div>';
                htmlData += '<div class="white-heart-sorted shadow-box"><div class="wishlist"><p>add to wishlist</p><div class="triangles"></div></div></div>';
                htmlData += '<div class="compare-sorted shadow-box"><div class="match"><p>add to compare</p><div class="triangles"></div></div></div>';
                htmlData += '<div class="view-product-sorted shadow-box"><div class="details"><p>quick view</p><div class="triangles"></div></div></div>';
                htmlData += '<div class="price-sorted">';
                htmlData += '<p class="price-text-sorted color-dark-gray">' + data.details[i].currencySymbol + data.details[i].price + '</p>';
                htmlData += '<p class="short-description-sorted color-dark-gray">' + data.details[i].shortDescription + '</p>';
                htmlData += '</div>';
                htmlData += '</div>';
                htmlData += '<div class="gray-line-furniture-page shadow-box"></div>';
                htmlData += '</div>';
            }
            $('.products-sorted').html(htmlData);
        /*};
        var sortByPrice = function(price, arrayToSort) {
            var sortedArray = arrayToSort.filter(function(item) {
                if (item.price === '30.00') {
                    console.log(item);
                    return item;
                }
            });
            sortedProducts(sortedArray);
        };*/
        /*var displayByDefault = $('.new-furniture-current-tab').attr('display-by-default');
        sortByPrice(displayByDefault, serverData.responseJSON.details);
        $('.category-button').on('click', function () {
            var category = $(this).attr('data-categ');
            sortByPrice(category, serverData.responseJSON.details);
        });*/
    });
});