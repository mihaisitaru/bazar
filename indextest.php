<?php
 ?>
<html>
<head>
  <title>Home - Bazar Online Shoping</title>
  <!-- This resets any default values added by the browsers -->
  <link rel="stylesheet" type="text/css" href="css/reset.css" />
  <!-- This is the style document used -->
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- This is the logo -->
  <link rel="icon" href="images/favicon.png" type="image/x-icon" />
  <meta charset="UTF-8" />
  <meta name="description" content="Bazar - Online shopping, Indoor furniture, all you need in just one place" />
  <meta name="keywords" content="Bazar, Furniture, Indoor, Soda, Bedroom, Chair, Table" />
  <meta name="author" content="Mihai Sitaru" />
  <meta name="geo.region" content="RO-IS" />
  <meta name="geo.placename" content="Iasi" />
  <meta name="geo.position" content="47.165390;27.563670" />
</head>
<body>
  <div id="container">
    <header>
      <div id="header-1" class="header shadow">
        
        <div class="currency header-1-font">
          <select class="select">
                  <option value="USD" selected>USD&nbsp;&nbsp;&#x25BC;</option>
                  <option value="EUR">EUR&nbsp;&nbsp;</option>
                  <option value="RON">RON&nbsp;&nbsp;</option>
                </select>
        </div>
        <div class="white-bar-1 white-bar"></div>
        <div class="language header-1-font">
          <select class="select"> 
                  <option value="en" selected>English&nbsp;&nbsp;&#x25BC;</option>
                  <option value="fr">Français&nbsp;&nbsp;</option>
                  <option value="ro">Română&nbsp;&nbsp;</option>
                </select>
        </div>
        <div class="white-bar-2 white-bar"></div>
        <div class="help header-1-font">
          <select class="select">
                  <option value="help" selected >Help&nbsp;&nbsp;&#x25BC;</option>
                  <option value="q&a">Q & A&nbsp;&nbsp;</option>
                  <option value="about-us">About us&nbsp;&nbsp;</option>
                </select>
        </div>
        <div class="login header-1-font">
          <a href="" title="Login"><img src="images/login.png" alt="Login" />&nbsp;&nbsp;&nbsp;Login</a>
        </div>
        <div class="register header-1-font">
          <a href="" title="Register"><img src="images/register.png" alt="Register" />&nbsp;&nbsp;&nbsp;Register</a>
        </div>
        <div class="my-account">
          <a href="" title="My Account"><img src="images/myaccount.png" alt="MyAccount"></a>
        </div>
      </div>
      <div id="header-2" class="header shadow">
        <div class="mobile"><img src="images/mobile.png" alt="Mobile">
          <p>2300 - 3560 - 222</p>
        </div>
        <div class="bazar">
          <a href="index.html" title="Bazar Online Shoping"><img src="images/bazar.png" alt="Bazar"></a>
        </div>
        <div class="shopcart shadow-box">
          <a href="#" title="shopcart"><img src="images/whiteshopcart.png" alt="Shopping Cart" class="shopcart-white-img"></a>
        </div>
        <div class="circle-shopcart">
          <a href="#" title="circleshopcart shadow-box"></a>
          <p class="my-cart">0</p>
        </div>
      </div>
      <div>
        <div class="category"></div>

        <div><img src="images/orangedropdown.png" alt="Select a category" class="orange-dropdown" /></div>

        <select id="select-category-id" class="select-category">
                      <option value="Select a category" selected>Select a category&nbsp;&nbsp;&#x25BC;</option>
                      <option value="Wooden furniture">Wooden furniture</option>
                      <option value="Bamboo furniture">Bamboo furniture</option>
                      <option value="Metal furniture">Metal furniture</option>
                  </select>

        <input type="text" class="search" name="search" value="" placeholder="Search products..." size="20" />
        <img src="images/search-ico.png" alt="Search" class="search-ico" />

        <div class="black-bar"></div>
      </div>

      <div class="nav-1">
        <ul>
          <li><a href="index.html" title="Home">Home</a></li>
          <li><a href="furniture.html" title="Furniture">Furniture</a></li>
          <li><a href="chiar.html" title="Chair">Chair</a></li>
          <li><a href="table.html" title="Table">Table</a></li>
          <li><a href="sofa.html" title="Sofa">Sofa</a></li>
          <li><a href="bedroom.html" title="Bedroom">Bedroom</a></li>
          <li><a href="blog.html" title="Blog">Blog</a></li>
        </ul>
      </div>

    </header>

    <div id="hotdeal-slide-container">
      <p class="hotdeal-title shadow-box">hot deals</p>
      <div class="slider-hotdeals">
        <img src="images/hotdeal1.png" alt="hotdeal1" class="hotdeal">
        <div id="deal-circle-1" class="deal-circle deal-1"></div>
        <div id="deal-circle-2" class="deal-circle deal-2"></div>
        <div id="deal-circle-3" class="deal-circle deal-3"></div>
        <img src="images/whiteshopcart.png" alt="whiteshopcart" class="white-shopcart-deal">
        <p id="add-to-cart-deal-id" class="add-to-cart-deal shadow-box">add to cart</p>
        <div id="count-down-1" class="shadow-box">
          <p id="offer-expired-1" class="display-none"></p>
          <p id="offer-expires-days-1"></p>
          <p id="offer-expires-hours-1"></p>
          <p id="offer-expires-minutes-1"></p>
          <p id="offer-expires-seconds-1"></p>
        </div>
        <div id="count-down-2" class="display-none shadow-box">
          <p id="offer-expired-2" class="display-none"></p>
          <p id="offer-expires-days-2"></p>
          <p id="offer-expires-hours-2"></p>
          <p id="offer-expires-minutes-2"></p>
          <p id="offer-expires-seconds-2"></p>
        </div>
        <div id="count-down-3" class="display-none shadow-box">
          <p id="offer-expired-3" class="display-none shadow-box"></p>
          <p id="offer-expires-days-3"></p>
          <p id="offer-expires-hours-3"></p>
          <p id="offer-expires-minutes-3"></p>
          <p id="offer-expires-seconds-3"></p>
        </div>
      </div>
      <div id="bottom-hotdeal" class="shadow-box">
        <p id="hotdeal-product-name-id" class="hotdeal-product-name">blue cloud lamp</p>
        <img src="images/twoblackstars.png" alt="blackstars" class="black-stars-deal">
        <img src="images/threewhitestars.png" alt="whitestars" class="white-stars-deal">
        <div class="black-line-deal shadow-box"></div>
        <div class="orange-line-deal shadow-box"></div>
        <div class="eye-deal shadow-box"></div>
        <div class="white-heart-deal shadow-box"></div>
        <div class="compare-deal shadow-box"></div>
        <div id="price-deal-id" class="price-deal shadow-box">
          <div class="price-text-deal-strike-line shadow-box"></div>
          <p class="price-text-deal-strike">$350.00</p>
          <p class="price-text-deal">$300.00</p>
        </div>
      </div>
    </div>
    <!-- Indoor furniture manual/auto slide -->
    <div id="indoor-furniture">
      <div class="indoor-text-hold">
        <p class="indoor-text-1">indoor</p>
        <p class="indoor-text-2">furniture</p>
        <p class="indoor-text-3">save up to 50% of all furniture</p>
      </div>
      <p class="shop-now shadow-box">shop now</p>
      
      <div id="indoor-slide-container">
          
          <p class="indoor-next shadow-box">&#62;</p>
          <p class="indoor-previous shadow-box">&#60;</p>
          <ul>
            <li><img src="images/indoorfurn1.jpg" alt="indoorfuniture1" class="indoor-photo" /></li>
            <li><img src="images/indoorfurn2.jpg" alt="indoorfuniture2" class="indoor-photo" /></li>
            <li><img src="images/indoorfurn3.jpg" alt="indoorfuniture3" class="indoor-photo" /></li>
            <li><img src="images/indoorfurn4.jpg" alt="indoorfuniture4" class="indoor-photo" /></li>
          	<li><img src="images/indoorfurn5.jpg" alt="indoorfuniture5" class="indoor-photo" /></li>
          	<li><img src="images/indoorfurn6.jpg" alt="indoorfuniture6" class="indoor-photo" /></li>
          </ul>  
      </div>
    </div>
    <div id="customer-help">
       <div class="free-shipping">
            <p class="free-shipping-text color-dark-gray">free shipping</p>
            <p class="all-order-text color-dark-gray">all order</p>
          <div class="img-ship"></div>
            <div class="truck-circle gray-border"></div>
        </div>      
        <div class="customer-support">
              <p class="customer-support-text color-dark-gray">24/7 customer</p>
              <p class="support-text color-dark-gray">support</p>
            <div class="img-support">
            </div>
              <div class="headphones-circle gray-border"></div>
        </div>
        <div class="money-back">
              <p class="money-back-text color-dark-gray">money back</p>        
              <p class="guarantee-text color-dark-gray">guarantee</p>
          <div class="img-guarantee">
          </div>
          <div class="money-back-circle gray-border"></div>
        </div>
        <div class="discount">
            <p class="discount-text color-dark-gray">member discount</p>
            <p class="first-order-text color-dark-gray">first order</p>
          <div class="img-first-order">
          </div>
              <div class="member-discount-circle gray-border"></div>
        </div>
    </div>
    <div class="guest-room-big" onclick="sofaSlides()">
      <img src="images/sofa1.jpg" alt="sofa1" class="sofa-img">
      <div class="guest-room-small">
        <div>
          <p class="guest-room-text">guest room</p>
        </div>
        <div>
          <p class="sofa">sofa</p>
        </div>
        <div>
          <p class="minus-20">&minus;20%</p>
        </div>
      </div>
    </div>
    <div id="office-chair-col">
      <img src="images/chair1.png" alt="chair1" class="chair-img-1" onclick="changeChair1()">
      <img src="images/chair7.png" alt="chair7" class="chair-img-2" onclick="changeChair2()">
      <div>
        <p class="office-chair-1">office&nbsp;</p>
        <p class="office-chair-2">chair</p>
      </div>
      <div>
        <p class="collection">collection</p>
      </div>
      <div>
        <p class="minus-200">$200.00</p>
      </div>
    </div>
    <div class="special-collection">
      <img src="images/spec1.png" alt="spec1" class="special-img" onclick="specialSlider()">
      <div>
        <p class="special">special</p>
        <p class="special-coll">collection</p>
      </div>
      <div>
        <p class="coll-discount">save up 45% of furniture</p>
      </div>
    </div>
    <div class="nav-2">
      <p class="new-furniture">new furniture</p>
        <div class="black-line-furniture"></div>
        <div class="nav-2-circle-1"></div>
        <div class="nav-2-circle-2"></div>
        <div class="nav-2-circle-3"></div>
      <ul class="new-furniture-tabs">
        <li><a href="#new-furniture-bed" title="Bed" class="new-furniture-current-tab">Bed</a></li>
        <li><a href="#new-furniture-chair" title="Chair">Chair</a></li>
        <li><a href="#new-furniture-sofa" title="Sofa">Sofa</a></li>
        <li><a href="#new-furniture-table" title="Table">Table</a></li>
        <li><a href="#new-furniture-dining" title="Dining">Dining</a></li>
      </ul>
      <div class="new-furniture-tab-panels">
        <div class="panel-1" id="new-furniture-bed">
          <!-- PRODUCTS - 1 -->
          <div id="product1" class="product">
            <img src="images/bed1.jpg" alt="bed1" id="bedImg1">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$30.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 2 -->
          <div id="product2" class="product">
            <img src="images/bed2.jpg" alt="bed2" id="bedImg2">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$15.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 3 -->
          <div id="product3" class="product">
            <img src="images/bed3.jpg" alt="bed3" id="bedImg3">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext3"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$25.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 4 -->
          <div id="product4" class="product">
            <img src="images/bed4.jpg" alt="bed4" id="bedImg4">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext4"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$15.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 5 -->
          <div id="product5" class="product">
            <img src="images/bed5.jpg" alt="bed5" id="bedImg5">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$15.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 6 -->
          <div id="product6" class="product">
            <img src="images/bed6.jpg" alt="bed6" id="bedImg6">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$15.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 7 -->
          <div id="product7" class="product">
            <img src="images/bed7.jpg" alt="bed7" id="bedImg7">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext7"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$25.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 8 -->
          <div id="product8" class="product">
            <img src="images/bed8.jpg" alt="bed8" id="bedImg8">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext8"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$15.00</p>
              </div>
            </div>
          </div>
        </div>
      <div class="panel-1 display-none" id="new-furniture-chair">
                       <!-- PRODUCTS - 1B -->
          <div id="product1b" class="product">
            <img src="images/chair1.jpg" alt="chair1" id="chairImg1">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$30.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 2B -->
          <div id="product2b" class="product">
            <img src="images/chair2.jpg" alt="chair2" id="chairImg2">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$15.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 3B -->
          <div id="product3b" class="product">
            <img src="images/chair3.jpg" alt="chair3" id="chairImg3">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext3"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$25.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 4B -->
          <div id="product4b" class="product">
            <img src="images/chair4.jpg" alt="chair4" id="chairImg4">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext4"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$15.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 5B -->
          <div id="product5b" class="product">
            <img src="images/chair5.jpg" alt="chair5" id="chairImg5">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$15.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 6B -->
          <div id="product6b" class="product">
            <img src="images/chair6.jpg" alt="chair6" id="chairImg6">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$15.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 7B -->
          <div id="product7b" class="product">
            <img src="images/chair7.jpg" alt="chair7" id="chairImg7">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext7"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$25.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 8B -->
          <div id="product8b" class="product">
            <img src="images/chair8.jpg" alt="chair8" id="chairImg8">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext8"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$15.00</p>
              </div>
            </div>
          </div>    
      </div>
    <div class="panel-1 display-none" id="new-furniture-sofa">
                <!-- PRODUCTS - 1C -->
          <div id="product1c" class="product">
            <img src="images/sofas1.jpg" alt="sofas1" id="sofasImg1">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$90.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 2C -->
          <div id="product2c" class="product">
            <img src="images/sofas2.jpg" alt="sofas2" id="sofasImg2">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$70.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 3C -->
          <div id="product3c" class="product">
            <img src="images/sofas3.jpg" alt="sofas3" id="sofasImg3">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext3c"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$80.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 4C -->
          <div id="product4c" class="product">
            <img src="images/sofas4.jpg" alt="sofas4" id="sofasImg4">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext4c"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$70.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 5C -->
          <div id="product5c" class="product">
            <img src="images/sofas5.jpg" alt="sofas5" id="sofasImg5">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$70.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 6C -->
          <div id="product6c" class="product">
            <img src="images/sofas6.jpg" alt="sofas6" id="sofasImg6">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$70.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 7C -->
          <div id="product7c" class="product">
            <img src="images/sofas7.jpg" alt="sofas7" id="sofasImg7">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext7c"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$80.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 8C -->
          <div id="product8c" class="product">
            <img src="images/sofas8.jpg" alt="sofas8" id="sofasImg8">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext8c"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$70.00</p>
              </div>
            </div>
          </div>
        </div>
    <div class="panel-1 display-none" id="new-furniture-table">
                <!-- PRODUCTS - 1D -->
          <div id="product1d" class="product">
            <img src="images/table1.jpg" alt="table1" id="tableImg1">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$90.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 2D -->
          <div id="product2d" class="product">
            <img src="images/table2.jpg" alt="table2" id="tableImg2">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$70.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 3D -->
          <div id="product3d" class="product">
            <img src="images/table3.jpg" alt="table3" id="tableImg3">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext3d"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$80.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 4D -->
          <div id="product4d" class="product">
            <img src="images/table4.jpg" alt="table4" id="tableImg4">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext4d"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$70.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 5D -->
          <div id="product5d" class="product">
            <img src="images/table5.jpg" alt="table5" id="tableImg5">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$70.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 6D -->
          <div id="product6d" class="product">
            <img src="images/table6.jpg" alt="table6" id="tableImg6">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$70.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 7D -->
          <div id="product7d" class="product">
            <img src="images/table7.jpg" alt="table7" id="tableImg7">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext7d"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$80.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 8D -->
          <div id="product8d" class="product">
            <img src="images/table8.jpg" alt="table8" id="tableImg8">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext8d"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$70.00</p>
              </div>
            </div>
          </div>
        </div>
    <div class="panel-1 display-none" id="new-furniture-dining">
                <!-- PRODUCTS - 1E -->
          <div id="product1e" class="product">
            <img src="images/dining1.jpg" alt="dining1" id="diningImg1">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$90.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 2E -->
          <div id="product2e" class="product">
            <img src="images/dining2.jpg" alt="dining2" id="diningImg2">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$70.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 3E -->
          <div id="product3e" class="product">
            <img src="images/dining3.jpg" alt="dining3" id="diningImg3">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext3e"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$80.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 4E -->
          <div id="product4e" class="product">
            <img src="images/dining4.jpg" alt="dining4" id="diningImg4">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext4e"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$70.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 5E -->
          <div id="product5e" class="product">
            <img src="images/dining5.jpg" alt="dining5" id="diningImg5">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$70.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 6E -->
          <div id="product6e" class="product">
            <img src="images/dining6.jpg" alt="dining6" id="diningImg6">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$70.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 7E -->
          <div id="product7e" class="product">
            <img src="images/dining7.jpg" alt="dining7" id="diningImg7">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext7e"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$80.00</p>
              </div>
            </div>
          </div>
          <!-- PRODUCTS - 8E -->
          <div id="product8e" class="product">
            <img src="images/dining8.jpg" alt="dining8" id="diningImg8">
            <p class="textquickview display-none">Quick View</p>
            <div class="textaddtocart display-none"><p>add to cart</p></div>
            <div class="productname">
              <p class="textproduct color-dark-gray">Aenean Ru Bristique</p>
              <div class="blackstars"></div>
              <div class="whitestars"></div>
              <div class="blackline shadow-box"></div>
              <div class="grayline shadow-box"></div>
              <div class="orangeline shadow-box"></div>
              <div class="whiteheart shadow-box"></div>
              <div class="compare shadow-box"></div>
              <div class="pricetext8e"></div>
              <div class="price">
                <p class="pricetext shadow-box background-dark-gray">$70.00</p>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>     
  	<div class="nav-3">
		<p class="furniture-gallery">furniture gallery</p>
		<div class="black-line-gallery"></div>   
        <ul class="furniture-gallery-tabs">
          <li><a href="#furniture-gallery-featured" title="Featured" class="furniture-gallery-current-tab gallery-tab">Featured</a></li
          ><li><a href="#furniture-gallery-topseller" title="Top Seller" class="gallery-tab">Top Seller</a></li
          ><li><a href="#furniture-gallery-saleoff" title="Sale Off" class="gallery-tab">Sale Off</a></li
          ><li><a href="#furniture-gallery-toprated" title="Top Rated" class="gallery-tab">Top Rated</a></li>
        </ul>
              <div class="furniture-gallery-squaress">
                    <ul>
                      <li><img src="images/whiteheart.png" alt="whiteheart" class="gallery-white-heart"></li>
                      <li class="gallery-wishlist display-none">add to wishlist</li>
                      <li><img src="images/compare.png" alt="compare" class="gallery-compare"></li>
                      <li class="gallery-compare display-none">compare</li>
                      <li><img src="images/eye.png" alt="view" class="gallery-view"></li>
                      <li class="gallery-view display-none">more details</li>
                      <li><img src="images/blackshopcart.png" alt="shopcart" class="gallery-shopcart"></li>
                      <li class="gallery-addtocart display-none">add to cart</li>
                    </ul>
              </div>
                       
      <div class="furniture-gallery-tab-panels">
        <div class="panel-2" id="furniture-gallery-featured">
		        <img src="images/gallfeat1.jpg" alt="gallfeat1" class="furniture-gallery-photo" id="featured">
          
          <div id="gallery-featured-slider">
         
            <div id="gallery-featured-container">
              <div class="gallery-featured-slide"><img src="images/gallfeat1.jpg" alt="1" class="gallery-featured-photo"/></div>
              <div class="gallery-featured-slide"><img src="images/gallfeat2.jpg" alt="2" class="gallery-featured-photo" /></div>
              <div class="gallery-featured-slide"><img src="images/gallfeat3.jpg" alt="3" class="gallery-featured-photo" /></div>
              <div class="gallery-featured-slide"><img src="images/gallfeat4.jpg" alt="4" class="gallery-featured-photo"/></div>
              <div class="gallery-featured-slide"><img src="images/gallfeat5.jpg" alt="5" class="gallery-featured-photo" /></div>
              <div class="gallery-featured-slide"><img src="images/gallfeat6.jpg" alt="6" class="gallery-featured-photo" /></div>
              <div class="gallery-featured-slide"><img src="images/gallfeat7.jpg" alt="7" class="gallery-featured-photo" /></div>
              <div class="gallery-featured-slide"><img src="images/gallfeat8.jpg" alt="8" class="gallery-featured-photo" /></div>
              <div class="gallery-featured-slide"><img src="images/gallfeat9.jpg" alt="9" class="gallery-featured-photo" /></div>
              <div class="gallery-featured-slide"><img src="images/gallfeat10.jpg" alt="10" class="gallery-featured-photo" /></div>
              <div class="gallery-featured-slide"><img src="images/gallfeat11.jpg" alt="11" class="gallery-featured-photo" /></div>
              <div class="gallery-featured-slide"><img src="images/gallfeat12.jpg" alt="12" class="gallery-featured-photo" /></div>
            </div>
          </div>
                <div class="gallery-featured-controls">
                    <p class="gallery-featured-next">&#62;</p>
                    <p class="gallery-featured-previous">&#60;</p>
                </div>
                        <div id="gallery-featured-white-box">
                              <p class="gallery-featured-product-name">Bed1</p>
                              <img src="images/twoblackstars.png" alt="blackstars" class="gallery-black-stars">
                              <img src="images/threewhitestars.png" alt="whitestars" class="gallery-white-stars">
                              <div class="gallery-triangle-1"></div>
                              <div class="gallery-triangle-2"></div>
                              <p class="gallery-featured-price">$120.00</p>
                              <p class="gallery-featured-price-old">$160.00</p>
                        </div>
        </div>
              <div class="panel-2 display-none" id="furniture-gallery-topseller">
        			    <img src="images/galltops1.jpg" alt="galltops1" class="furniture-gallery-photo" id="topseller">	  
        		<div id="gallery-topseller-slider">
         <ul>
            <div id="gallery-topseller-container">
                <div class="gallery-topseller-slide"><img src="images/galltops1.jpg" alt="1" class="gallery-topseller-photo" /></div>
                <div class="gallery-topseller-slide"><img src="images/galltops2.jpg" alt="2" class="gallery-topseller-photo" /></div>
                <div class="gallery-topseller-slide"><img src="images/galltops3.jpg" alt="3" class="gallery-topseller-photo" /></div>
                <div class="gallery-topseller-slide"><img src="images/galltops4.jpg" alt="4" class="gallery-topseller-photo" /></div>
                <div class="gallery-topseller-slide"><img src="images/galltops5.jpg" alt="5" class="gallery-topseller-photo" /></div>
                <div class="gallery-topseller-slide"><img src="images/galltops6.jpg" alt="6" class="gallery-topseller-photo" /></div>
                <div class="gallery-topseller-slide"><img src="images/galltops7.jpg" alt="7" class="gallery-topseller-photo" /></div>
                <div class="gallery-topseller-slide"><img src="images/galltops8.jpg" alt="8" class="gallery-topseller-photo" /></div>
                <div class="gallery-topseller-slide"><img src="images/galltops9.jpg" alt="9" class="gallery-topseller-photo" /></div>
                <div class="gallery-topseller-slide"><img src="images/galltops10.jpg" alt="10" class="gallery-topseller-photo" /></div>
                <div class="gallery-topseller-slide"><img src="images/galltops11.jpg" alt="11" class="gallery-topseller-photo" /></div>
                <div class="gallery-topseller-slide"><img src="images/galltops12.jpg" alt="12" class="gallery-topseller-photo" /></div>
              </div>
            </div>
          </ul>
                <div class="gallery-topseller-controls">
                    <p class="gallery-topseller-next">&#62;</p>
                    <p class="gallery-topseller-previous">&#60;</p>
                </div>
                <div id="gallery-topseller-white-box" class='display-none'>
                              <p class="gallery-topseller-product-name">Kitchen1</p>
                              <img src="images/twoblackstars.png" alt="blackstars" class="gallery-black-stars">
                              <img src="images/threewhitestars.png" alt="whitestars" class="gallery-white-stars">
                              <div class="gallery-triangle-1"></div>
                              <div class="gallery-triangle-2"></div>
                              <p class="gallery-topseller-price">$1200.00</p>
                              <p class="gallery-topseller-price-old">$1600.00</p>
                </div>
        		  </div>
        			  <div class="panel-2 display-none" id="furniture-gallery-saleoff">
        			    <img src="images/gallfeat2.jpg" alt="gallfeat2" class="furniture-gallery-photo" id="saleoff">
        			    
                </div>

        <div class="panel-2 display-none" id="furniture-gallery-toprated">
		      <img src="images/galltops2.jpg" alt="galltops2" class="furniture-gallery-photo" id="toprated">
		      
        </div>
      </div>	
	</div>


            
          
<!--
          <div id="topseller">
            <img src="images/galltops1.jpg" alt="galltops1" class="furngallbg" style="display: block;" id="topseller1">
            
            <div id="priceround2">
              <p>$180.00</p>
            </div>
            <div id=boxfurngall2>
              <p id="textboxfurngall2">Aenean Ru BBB</p>
              <img src="images/twoblackstars.png" alt="blackstars" class="blackstarsbox">
              <img src="images/threewhitestars.png" alt="whitestars" class="whitestarsbox">
              <div class="trianglebox1"></div>
              <div class="trianglebox2"></div>
            </div>
          </div>
         <div id="saleoff">
            <img src="images/saleoff1.jpg" alt="galltops1" class="furngallbg" style="display: block;">
            
            <div id="priceround3">
              <p>$190.00</p>
            </div>
            <div id=boxfurngall3>
              <p id="textboxfurngall3">Aenean Ru CCC</p>
              <img src="images/twoblackstars.png" alt="blackstars" class="blackstarsbox">
              <img src="images/threewhitestars.png" alt="whitestars" class="whitestarsbox">
              <div class="trianglebox1"></div>
              <div class="trianglebox2"></div>
            </div>
          </div>
          <div id="toprated">
            <img src="images/toprated1.jpg" alt="toprated1" class="furngallbg" style="display: block;">
           
            <div id="priceround4">
              <p>$200.00</p>
            </div>
            <div id=boxfurngall4>
              <p id="textboxfurngall4">Aenean Ru DDD</p>
              <img src="images/twoblackstars.png" alt="blackstars" class="blackstarsbox">
              <img src="images/threewhitestars.png" alt="whitestars" class="whitestarsbox">
              <div class="trianglebox1"></div>
              <div class="trianglebox2"></div>
            </div>
          
          </div>
-->


  <div id="bbed">
    <img src="images/bbed1.jpg" alt="bedroom bed" id="bbedImg" onclick="bedBed()">
    <p id="bbedtext1">from</p>
    <p id="bbedtext2">$50.80</p>
    <p id="bbedtext3">bedroom bed</p>
    <div id="shopnowbbed">
      <p>shop now</p>
    </div>
  </div>
  <div class="nav-4">
    <p id="latestblog">latest blog</p>
    <div id="blacklineblog"></div>
    <div id="nav-4-circle-1"></div>
    <div id="nav-4-circle-2"></div>
    <div id="nav-4-circle-3"></div>
    <div class="bbox1">
      <div id="cbox1"><img src="images/calendar.png" alt="calendar" id="calendarblog1">
        <p id="bdate1">15 jan 2016</p><img src="images/comments.png" alt="comments" id="commentsblog1">
        <p id="bcomment1">4 comments</p>
        <p id="btitle1">Products that fight static</p>
        <p id="btext1">Aliquam dictum pellentesque nibh sit amet dapibus. Vivamus eget luctus nisi. Nullam euismod leo vehicula, rutrum magna in, ornare enim vehicula, rutrum magna in, ornare enim.</p>
        <div id="breadmore1">
          <p>read more</p>
        </div>
      </div>
    </div>
    <div class="bbox2">
      <div id="cbox2"><img src="images/calendar.png" alt="calendar" id="calendarblog2">
        <p id="bdate2">15 jan 2016</p><img src="images/comments.png" alt="comments" id="commentsblog2">
        <p id="bcomment2">4 comments</p>
        <p id="btitle2">Products that fight static</p>
        <p id="btext2">Aliquam dictum pellentesque nibh sit amet dapibus. Vivamus eget luctus nisi. Nullam euismod leo vehicula, rutrum magna in, ornare enim vehicula, rutrum magna in, ornare enim.</p>
        <div id="breadmore2">
          <p>read more</p>
        </div>
      </div>
    </div>
    <div class="bbox3">
      <div id="cbox3"><img src="images/calendar.png" alt="calendar" id="calendarblog3">
        <p id="bdate3">15 jan 2016</p><img src="images/comments.png" alt="comments" id="commentsblog3">
        <p id="bcomment3">4 comments</p>
        <p id="btitle3">Products that fight static</p>
        <p id="btext3">Aliquam dictum pellentesque nibh sit amet dapibus. Vivamus eget luctus nisi. Nullam euismod leo vehicula, rutrum magna in, ornare enim vehicula, rutrum magna in, ornare enim.</p>
        <div id="breadmore3">
          <p>read more</p>
        </div>
      </div>
    </div>
  </div>
  <div id="brandbox">
    <div id="leftpageshopbrand">
      <p>&#60;</p>
    </div>
    <img src="images/brand1.png" alt="brand1" id="brand1">
    <img src="images/brand2.png" alt="brand2" id="brand2">
    <img src="images/brand3.png" alt="brand3" id="brand3">
    <img src="images/brand4.png" alt="brand4" id="brand4">
    <img src="images/brand5.png" alt="brand5" id="brand5">
    <img src="images/brand6.png" alt="brand6" id="brand6">
    <div id="rightpageshopbrand">
      <p>&#62;</p>
    </div>
  </div>
  <div class="nav-5">
    <div id="clientfeedback">
      <p>client feedback</p>
    </div>
    <div id="blacklinefeed"></div>
    <div id="nav-5-circle-1"></div>
    <div id="nav-5-circle-2"></div>
    <div id="nav-5-circle-3"></div>
    <img src="images/comma.png" alt="comma" id="comma1">
    <p id='feedback1'>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
    <div id='squarefeed1'></div>
    <p id='namefeed1'>John Smith</p>
    <p id='descrnamefeed1'>Furniture client</p>
  </div>
  <div id="beforegrayel">
    <div id="titlelists">
      <p>information&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </p>
      <p>my account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </p>
      <p>information&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </p>
      <p>orders&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </p>
      <div class="lastlists">
        <div id="infolist1">
          <ul>
            <li>About us</li>
            <li>Privacy</li>
            <li>Conditions</li>
            <li>Online support</li>
          </ul>
        </div>
        <div id="myaccountlist">
          <ul>
            <li>login</li>
            <li>my cart</li>
            <li>wishlist</li>
            <li>checkout</li>
          </ul>
        </div>
        <div id="infolist2">
          <ul>
            <li>specials</li>
            <li>new products</li>
            <li>best sellers</li>
            <li>our stores</li>
          </ul>
        </div>
        <div id="orderslist">
          <ul>
            <li>Payment options</li>
            <li>Shipping and delivery</li>
            <li>Returns</li>
            <li>Shipping</li>
          </ul>
        </div>
        <div><img src="images/pay.png" alt="cards" id="cards"></div>
      </div>
    </div>
  </div>
  <div>
    <div id="grayelement">
      <p>&copy;copyright 2016 &#45; bazar &#124; all rights reserved</p>
      <ul id="sitesgray">
        <li><a href="https://twitter.com/" title="tweeter"><img src="images/tweeter.png" alt="tweeter" id="tweeter"></a></li>
        <li><a href="https://www.facebook.com/" title="facebook"><img src="images/facebook.png" alt="facebook" id="facebook"></a></li>
        <li><a href="https://www.youtube.com/" title="youtube"><img src="images/youtube.png" alt="youtube" id="youtube"></a></li>
        <li><a href="https://plus.google.com/" title="googleplus"><img src="images/googleplus.png" alt="googleplus" id="googleplus"></a></li>
        <li><a href="https://www.linkedin.com/" title="linkedin"><img src="images/linkedin.png" alt="linkedin" id="linkedin"></a></li>
        <li><a href="https://www.pinterest.com/" title="pinterest"><img src="images/pinterest.png" alt="pinterest" id="pinterest"></a></li>
      </ul>
    </div>
    <button onclick="topFunction()" id="go-to-top" title="Go to top" class="shadow">Go to top&nbsp;&#8593;</button>
  </div>
    <script type="text/javascript" src="javascript/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="javascript/javascript.js"></script>
    <script type="text/javascript" src="javascript/hover.js"></script>
    <script type="text/javascript" src="javascript/go-to-top.js"></script>
  </div>
</body>
</html>
