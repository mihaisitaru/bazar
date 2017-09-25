<?php require_once(__DIR__."/php/work3/config/general.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Table - Bazar Online Shopping</title>
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
  <!--Brands slider-->
 <!-- <div id="brand-slider">
    <div class="brand-container"></div>  
    <div class="brand-controls">
      <p class="left-brand background-dark-gray font-semi-bold">&#60;</p>
      <p class="right-brand background-dark-gray font-semi-bold">&#62;</p>
    </div>
  </div>-->
  <!--Register to receive newsletters-->
  <div class="furniture-newsletter">
    <form action="<?php echo htmlspecialchars('/php/work3/api/user/newsletterRegister.php') ?>" method="POST">
      <p class="newsletter-label">newsletter:</p>
      <div class="newsletter-input-container"><input class="newsletter-input" type="text" name="email" placeholder="Enter your email address" /></div>
      <input class="newsletter-button" type="image" src="/images/newsletter-submit-orange.png" alt="Submit" />
    </form>
  </div>
  <!-- Add magic with javascript and query -->
    <script type="text/javascript" src="https://preview.c9users.io/mihaisitaru/bazar_shop_online/javascript/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="https://preview.c9users.io/mihaisitaru/bazar_shop_online/javascript/brands-slider2.js"></script>
    <script type="text/javascript" src="https://preview.c9users.io/mihaisitaru/bazar_shop_online/javascript/js2.js"></script>
    <script type="text/javascript" src="https://preview.c9users.io/mihaisitaru/bazar_shop_online/javascript/go-to-top.js"></script>
    <!-- Include the footer -->
    <?php include_once(__DIR__."/php/work3/config/footer.php"); ?>