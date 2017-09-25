<?php

require_once(__DIR__.'/../config/general.php');
require_once(__DIR__.'/productsLib.php');
require_once(__DIR__.'/currenciesLib.php');
require_once(__DIR__.'/userLib.php');

function addToCart($quantity, $productId, $isoCode) {
    $data = getProductCartData($quantity, $productId, $isoCode);
    if($data !== false) $_SESSION['cart'][$productId] = getProductCartData($quantity, $productId, $isoCode);
    return true;
}

function getProductCartData($quantity, $productId, $isoCode) {
    $productDetails = getProduct($productId); //get product details
    if($productDetails === false) return false;
    $conversionValue = getConversionValue($productDetails['curencyIsoCode'], $isoCode); //calculate conversion value

    return array(
        'quantity' => $quantity,
        'price' => round($productDetails['price'] * $conversionValue, 4),
        'totalPrice' => round($productDetails['price'] * $conversionValue * $quantity, 4),
        'currency' => $isoCode
        );
}

function removeFromCart($productId) {
    
    if(isset($_SESSION['cart']) AND $_SESSION['cart'][$productId]) {
        
        unset($_SESSION['cart'][$productId]);
        return true;
    }
    return false;
}

function removeCart() {
    
    if (isset($_SESSION['cart'])) {
        
        unset($_SESSION['cart']);
        return true;
    }
    return false;
}

function processCartToOrder() {
    global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $query = "INSERT into `orders` (orderDate, userId) VALUES (?, ?)";
                        
    mysqli_stmt_prepare($stmt, $query);
    
    $orderDate = date('Y-m-d H:i:s');    
    
    mysqli_stmt_bind_param($stmt, "siis", $orderDate, $_SESSION['user']['userId']);    
    
    if(mysqli_stmt_execute($stmt)) {
      $orderId = mysqli_stmt_insert_id($stmt);
      $totalValue = 0;
      $currency = '';
      
      foreach($_SESSION['cart'] as $productId => $prodData) {
        processOneProductToOrder($productId, $prodData, $orderId);
        $totalValue += $prodData['totalPrice'];
        $currency = $prodData['currency'];
      }
      
      recordOrderTotalValue($orderId, $totalValue, $currency);
      return true;
      
    }
    else return false;
}

function processOneProductToOrder($productId, $prodData, $orderId) {
    global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $query = "INSERT into `orderDetails` (orderId, productId, quantity, price, totalValue, currency) VALUES (?, ?, ?, ?, ?, ?)";
                        
    mysqli_stmt_prepare($stmt, $query);
    
    mysqli_stmt_bind_param($stmt, "iiidds", $orderId, $productId, $prodData['quantity'], $prodData['price'], $prodData['totalPrice'], $prodData['currency']);    
    
    if(mysqli_stmt_execute($stmt)) {
    
      return true;
    }
    else return false;
}

function recordOrderTotalValue($orderId, $totalValue, $currency) {
    global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $query = "UPDATE `orders` SET totalValue = ?, currency = ? WHERE orderId=?";
    
    mysqli_stmt_prepare($stmt, $query);
    
    
    mysqli_stmt_bind_param($stmt, "dsi", $totalValue, $currency, $orderId);
    
    
    if(mysqli_stmt_execute($stmt)) {
        return true;
    }
    else return false;
}  

function getOrdersHistory($orderId = NULL) {
    global $db;
    
    $userId = $_SESSION['user']['userId'];
    
    $data = false;
    
    $stmt = mysqli_stmt_init($db);
    if (isset($orderId)) {
        mysqli_stmt_prepare($stmt, "SELECT * FROM `orders` WHERE userId=? and orderId = ? limit 0,1");
        mysqli_stmt_bind_param($stmt, "ii", $userId, $orderId);
    }
    else {
        mysqli_stmt_prepare($stmt, "SELECT * FROM `orders` WHERE userId=? ORDER BY orderDate DESC");
        mysqli_stmt_bind_param($stmt, "i", $userId);
    }

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    while($row = mysqli_fetch_assoc($result)) {      
        if(isset($orderId)) {
            return $row;
        }
        else {
            $data[] = $row;
        }
    }    
    return $data;
}    

function getOrderDetail($orderId) {
    global $db;
    
    $data = false;
    
    $stmt = mysqli_stmt_init($db);
    
    $query = "SELECT orderId, productId, quantity, price, totalValue, currency FROM `orderDetails` WHERE orderId=?";
    
    mysqli_stmt_prepare($stmt, $query);  
    
    mysqli_stmt_bind_param($stmt, "i", $orderId);
        
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    while($row = mysqli_fetch_assoc($result)) {      
        $data[] = $row;
    }    
    return $data;
}   
/*
function getOrderData($orderId) {
    global $db;
    
    $userId = $_SESSION['user']['userId'];
    
    $stmt = mysqli_stmt_init($db);
 
    mysqli_stmt_prepare($stmt, "SELECT * FROM `orders` WHERE userId=? and orderId = ? limit 0,1");
    mysqli_stmt_bind_param($stmt, "ii", $userId, $orderId);

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    if($row = mysqli_fetch_assoc($result)) {      
        return $row;
    }    
    return false;
}
*/

function changeCartCurrency($newCurrency) {
    
    if(isset($_SESSION['cart']) AND count($_SESSION['cart']) > 0) {
        foreach($_SESSION['cart'] as $productId => $val){
            addToCart($val['quantity'], $productId, $newCurrency);    
        }    
    }
    return true;
}