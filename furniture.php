<?php require_once(__DIR__."/php/work3/config/general.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Furniture - Bazar Online Shopping</title>
    <!-- This resets any default values added by the browsers -->
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <!-- This is the style document used -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
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
    <div class="container">
      <!-- Furniture title header -->
      <div class="furniture-title shadow-box">
        <ul>
          <li><p class="furniture-title-1-a">bedroom</p><p class="furniture-title-1-b"> furniture</p></li>
          <li><p class="furniture-title-2-a">always</p><p class="furniture-title-2-b color-orange"> 25%</p><p class="furniture-title-2-a"> off or more</p></li>
        </ul>  
        <div class="gray-links shadow-box"><a href="home">home</a><p>&#62;</p><a href="furniture" class="current"><p>furniture</p></a></div>
      </div>
      <!-- Sort products -->
      <div class="nav-6">
        <a class="furniture-title-page color-dark-gray" href="furniture" title="Furniture">furniture</a>
        <div class="black-line-furniture-page background-dark-gray"></div>   
        <form action="" method="POST">
          <p class="sort-by">sort by</p>        
          <select class="input-to-sort">
            <option value="price: lowest first" selected>Price: Lowest first</option>
            <option value="price: highest first">Price: Highest first</option>
            <option value="category: chair">Category: Chair</option>
            <option value="category: table">Category: Table</option>
            <option value="category: sofa">Category: Sofa</option>
            <option value="category: bedroom">Category: Bedroom</option>
          </select>
          <p class="show-filter">show</p>
          <select class="show-filter-values">
            <option value="12" selected>12</option>
            <option value="24">24</option>
            <option value="48">48</option>
          </select>
          <div class="filter-type-container">
            <input class="filter-grid" type="image" src="#" alt="...." />
            <input class="filter-list" type="image" src="#" alt="...." />
          </div>
        </form>
      </div>
      <!-- Sort the products -->
      <div class="products-sorted"></div>
      <!-- Brands slider -->
      <div class="brand-two">
        <div class="brand-slider">
          <div class="brand-container"></div>  
          <div class="brand-controls">
            <p class="left-brand background-dark-gray font-semi-bold">&#60;</p>
            <p class="right-brand background-dark-gray font-semi-bold">&#62;</p>
          </div>
        </div>
      </div>
      <!-- Register to receive newsletters -->
      <div class="furniture-newsletter shadow-box">
        <form action="<?php echo htmlspecialchars('/php/work3/api/user/newsletterRegister.php') ?>" method="POST">
          <p class="newsletter-label">newsletter:</p>
          <div class="newsletter-input-container"><input class="newsletter-input" type="text" name="email" placeholder="Enter your email address" /></div>
          <input class="newsletter-button" type="image" src="/images/newsletter-submit-orange.png" alt="Submit" />
        </form>
      </div>
    </div>
    <!-- Add magic with javascript and query -->
    <script type="text/javascript" src="https://preview.c9users.io/mihaisitaru/bazar_shop_online/javascript/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="https://preview.c9users.io/mihaisitaru/bazar_shop_online/javascript/brands-slider2.js"></script>
    <script type="text/javascript" src="https://preview.c9users.io/mihaisitaru/bazar_shop_online/javascript/js2.js"></script>
    <script type="text/javascript" src="https://preview.c9users.io/mihaisitaru/bazar_shop_online/javascript/go-to-top.js"></script>
    <!-- Include the footer -->
    <?php include_once(__DIR__."/php/work3/config/footer.php"); ?>