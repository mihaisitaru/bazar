<?php ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home - Bazar Online Shopping</title>
    <!-- This resets any default values added by the browsers -->
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <!-- This is the css style document used -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- This is the bootstrap style document used -->
   <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
    <!-- This is the logo -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- A bunch of metas -->
    <meta charset="UTF-8" />
    <meta name="description" content="Bazar - Online shopping, Indoor furniture, all you need in just one place" />
    <meta name="keywords" content="Bazar, Furniture, Indoor, Soda, Bedroom, Chair, Table" />
    <meta name="author" content="Mihai Sitaru" />
    <meta name="geo.region" content="RO-IS" />
    <meta name="geo.placename" content="Iasi" />
    <meta name="geo.position" content="47.165390;27.563670" />
  </head>
  <body>
    <?php include_once(__DIR__."/php/work3/config/header.php"); ?>
    <!-- Check out the hotdeals first  -->
    <div class="hotdeal-slide-container">
      <p class="hotdeal-title shadow-box background-dark-gray">hot deals</p>
      <ul class="hotdeals"><img src="" class="hotdeal" alt="hotdeal"/></ul>
      <div class="deal-circle-1 background-orange"></div>
      <div class="deal-circle-2 background-white"></div>
      <div class="deal-circle-3 background-white"></div>
      <p class="add-to-cart-deal background-dark-gray shadow-box">add to cart</p>
      <div class="count-down-1 display-block shadow-box">
        <p class="offer-expired-1 display-none shadow-box"></p>
        <p class="offer-expires-days-1"></p>
        <p class="offer-expires-hours-1"></p>
        <p class="offer-expires-minutes-1"></p>
        <p class="offer-expires-seconds-1"></p>
      </div>
      <div class="count-down-2 display-none shadow-box">
        <p class="offer-expired-2 display-none shadow-box"></p>
        <p class="offer-expires-days-2"></p>
        <p class="offer-expires-hours-2"></p>
        <p class="offer-expires-minutes-2"></p>
        <p class="offer-expires-seconds-2"></p>
      </div>
      <div class="count-down-3 display-none shadow-box">
        <p class="offer-expired-3 display-none shadow-box"></p>
        <p class="offer-expires-days-3"></p>
        <p class="offer-expires-hours-3"></p>
        <p class="offer-expires-minutes-3"></p>
        <p class="offer-expires-seconds-3"></p>
      </div>
      <div class="bottom-hotdeal shadow-box background-white">
        <div class="hotdeal-product-name color-dark-gray"><p class="hotdeal-product-names"></p></div>
        <img src="images/twoblackstars.png" alt="blackstars" class="black-stars-deal" />
        <img src="images/threewhitestars.png" alt="whitestars" class="white-stars-deal" />
        <div class="black-line-deal shadow-box"></div>
        <div class="orange-line-deal shadow-box"></div>
        <div class="eye-deal shadow-box"><div class="details"><p>quick view</p><div class="triangles"></div></div></div>
        <div class="white-heart-deal shadow-box"><div class="wishlist"><p>add to wishlist</p><div class="triangles"></div></div></div>
        <div class="compare-deal shadow-box"><div class="match"><p>add to compare</p><div class="triangles"></div></div></div>
        <div class="hotdeals-price-old-line background-dark-gray shadow-box"></div>
        <p class="hotdeals-price-old"></p>
        <p class="price-text-deal background-dark-gray shadow-box"></p>
      </div>
    </div>
    <!-- Indoor furniture manual/auto slide -->
    <div id="indoor-furniture">
      <div class="indoor-text-hold">
        <p class="indoor-text-1"></p>
        <p class="indoor-text-2"></p>
      </div>
      <p class="shop-now color-dark-gray shadow-box background-white">shop now</p>
      <div id="indoor-slide-container"></div>
      <div class="indoor-next"><img src="/images/next.png" alt="next" /></div>
      <div class="indoor-previous"><img src="/images/back.png" alt="back" /></div> 
    </div>
    <!-- One will need support -->
    <div class="customer-help">
      <div class="free-shipping">
        <p class="free-shipping-text color-dark-gray">free shipping</p>
        <p class="all-order-text color-dark-gray">all order</p>
        <div class="img-ship"></div>
        <div class="truck-circle background-white"></div>
      </div>
      <div class="customer-support">
        <p class="customer-support-text color-dark-gray">24/7 customer</p>
        <p class="support-text color-dark-gray">support</p>
        <div class="img-support"></div>
        <div class="headphones-circle"></div>
      </div>
      <div class="money-back">
        <div class="headphones-circle background-white"></div>
        <p class="money-back-text color-dark-gray">money back</p>
        <p class="guarantee-text color-dark-gray">guarantee</p>
        <div class="img-guarantee"></div>
        <div class="money-back-circle background-white"></div>
      </div>
      <div class="discount">
        <p class="discount-text color-dark-gray">member discount</p>
        <p class="first-order-text color-dark-gray">first order</p>
        <div class="img-first-order"></div>
        <div class="member-discount-circle background-white"></div>
      </div>
    </div>
    <!-- Show the products sorted by category, man -->
    <div class="nav-2">
      <p class="new-furniture">new furniture</p>
      <div class="black-line-furniture"></div>
      <div class="nav-2-circle-1"></div>
      <div class="nav-2-circle-2"></div>
      <div class="nav-2-circle-3"></div>
      <ul class="new-furniture-tabs">
        <li><a href="#new-furniture-bed" title="Bed" class="category-button new-furniture-current-tab" display-by-default="bed" data-categ="bed">Bed</a></li>
        <li><a href="#new-furniture-chair" title="Chair" class="category-button" data-categ="chair">Chair</a></li>
        <li><a href="#new-furniture-sofa" title="Sofa" class="category-button" data-categ="sofa">Sofa</a></li>
        <li><a href="#new-furniture-table" title="Table" class="category-button" data-categ="table">Table</a></li>
        <li><a href="#new-furniture-dining" title="Dining" class="category-button" data-categ="dining">Dining</a></li>
      </ul>
      <div class="new-furniture-tab-panels"></div>
      <div class="panel-1" id="new-furniture-bed"></div>
    </div>
    <!-- Bring the products, bring them all, sorted in JS -->
    <div class="products"></div>
    <!--Sofas slides discount-->
    <div class="guest-room-big"></div>
    <!-- Office chairs collection -->
    <div class="office-chair-collection"></div>
    <!--Special collection-->
    <div class="special-collection"></div>
    <!-- Furniture gallery slider -->
    <div class="nav-3">
      <p class="furniture-gallery color-orange">furniture gallery</p>
    	<div class="black-line-gallery"></div>   
      <ul class="furniture-gallery-tabs">
        <li><a href="#furniture-gallery-featured" title="Featured" class="type-button furniture-gallery-current-tab gallery-tab background-white" display-by-default="featured" data-type="featured">Featured</a></li
        ><li><a href="#furniture-gallery-topseller" title="Top Seller" class="type-button gallery-tab background-white" data-type="topSeller">Top Seller</a></li
        ><li><a href="#furniture-gallery-saleoff" title="Sale Off" class="type-button gallery-tab background-white" data-type="saleOff">Sale Off</a></li
        ><li><a href="#furniture-gallery-toprated" title="Top Rated" class="type-button gallery-tab background-white" data-type="topRated">Top Rated</a></li>
      </ul>
      <div class="furniture-gallery-squaress">
        <div class="gallery-white-heart shadow-box"><div class="gallery-wishlist"><p>add to wishlist</p><div class="triangle"></div></div></div>
        <div class="gallery-compare shadow-box"><div class="gallery-match"><p>add to compare</p><div class="triangle"></div></div></div>
        <div class="gallery-view shadow-box"><div class="gallery-details"><p>quick view</p><div class="triangle"></div></div></div>
        <div class="gallery-shopcart shadow-box"><div class="gallery-to-cart"><p>add to cart</p><div class="triangle"></div></div></div>
      </div>
      <div class="furniture-gallery-tab-panels" id="furniture-gallery-featured"></div>
      <div class="gallery-featured-white-box background-white">
        <p class="gallery-featured-product-name color-dark-gray"></p>
        <img src="images/twoblackstars.png" alt="blackstars" class="gallery-black-stars" />
        <img src="images/threewhitestars.png" alt="whitestars" class="gallery-white-stars" />
        <div class="gallery-triangle-1"></div>
        <div class="gallery-triangle-2"></div>
        <div class="price-slider"></div>
      </div>
      <div class="gallery-featured-controls"></div>
    </div>
    <div id="gallery-featured-slider">
      <div class="gallery-featured-container"></div>
    </div>
    <!-- Bedroom bed collection -->
    <div class="bedroom-bed-shop">
  	  <p class="bedroom-bed-text-1 color-dark-gray">from</p>
  	  <p class="shop-now-bedroom-bed shadow-box">shop now</p>
      <div class="bedroom-bed"></div>
    </div>
    <!-- Latest blog slider -->
    <div class="nav-4">
      <p class="latestblog">latest blog</p>
      <div class="black-line-blog"></div>
      <div class="blog-circles">
        <a class="nav-4-circle-1" href="#"></a>
        <a class="nav-4-circle-2" href="#"></a>
        <a class="nav-4-circle-3" href="#"></a>
      </div>
    </div>  
    <!-- Get blog data -->
    <div class="blogs"></div>    
    <!-- Brands slider -->
    <div class="brand-one">
      <div class="brand-slider">
        <div class="brand-container"></div>  
        <div class="brand-controls">
            <p class="left-brand background-dark-gray font-semi-bold">&#60;</p>
            <p class="right-brand background-dark-gray font-semi-bold">&#62;</p>
        </div>
      </div>
    </div>
    <!-- Client feedback -->
    <div class="nav-5">
      <div class="client-feedback font-semi-bold"><p>client feedback</p></div>
      <div class="black-line-feedback"></div>
      <div class="feedback-circles">
        <a id="nav-5-circle-1" href="#"></a>
        <a id="nav-5-circle-2" href="#"></a>
        <a id="nav-5-circle-3" href="#"></a>
      </div>
      <img src="images/comma.png" alt="comma" class="comma" />
      <div class="feedback-all-slides"></div>
    </div>
    <!-- Add magic with javascript and query -->
    <script type="text/javascript" src="javascript/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="javascript/brands-slider.js"></script>
    <script type="text/javascript" src="javascript/js.js"></script>
    <script type="text/javascript" src="javascript/go-to-top.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <!-- Include the footer -->
    <?php include_once(__DIR__."/php/work3/config/footer.php"); ?>