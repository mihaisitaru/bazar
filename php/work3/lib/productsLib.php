<?php

require_once(__DIR__.'/../config/general.php');

function addProduct($productName, $description, $shortDescription, $dateAdded, $price, $currencyIsoCode, $rating, $promo, $discount, $active, $topSell, $categId) {
	global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $query = "INSERT into `products` (productName, description, shortDescription, dateAdded, price, currencyIsoCode, rating, promo, discount, active, topSell, categId) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                            
    mysqli_stmt_prepare($stmt, $query);
    
   
    mysqli_stmt_bind_param($stmt, "ssssdsssdiii", $productName, $description, $shortDescription, $dateAdded, $price, $currencyIsoCode, $rating, $promo, $discount, $active, $topSell, $categId);
    
    
    if(mysqli_stmt_execute($stmt)) {
        return true;
        }
    else return false;
}

function deleteProduct($productId) {
	global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $query = "DELETE FROM `products` WHERE productId=?";
                            
    mysqli_stmt_prepare($stmt, $query);
    
   
    mysqli_stmt_bind_param($stmt, "i", $productId);
    
    
    if(mysqli_stmt_execute($stmt)) {
        return true;
    }
    else return false;
}

function updateProduct($productId, $productName, $description, $shortDescription, $dateAdded, $price, $currencyIsoCode, $rating, $promo, $discount, $active, $topSell, $categId) {
	global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $query = "UPDATE `products` SET productName = ?, description = ?, shortDescription = ?, dateAdded = ?, price = ?, currencyIsoCode = ?, rating = ?, promo = ?, discount = ?, active = ?, topSell = ? WHERE productId=?";
    
    mysqli_stmt_prepare($stmt, $query);
    
   
    mysqli_stmt_bind_param($stmt, "ssssdsiidiii", $productName, $description, $shortDescription, $dateAdded, $price, $currencyIsoCode, $rating, $promo, $discount, $active, $topSell, $categId);
    
    
    if(mysqli_stmt_execute($stmt)) {
        return true;
    }
    else return false;
}


function getProduct($productId) {
    global $db;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM `products` WHERE productId=? AND active=1 limit 0,1");
       
    mysqli_stmt_bind_param($stmt, "i", $productId);
   
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    if($row = mysqli_fetch_assoc($result)) {      
        return $row;
    }    
    return false;
}

//function getAllProducts($currencyIsoCode) {
function getAllProducts() {
    global $db;
    
    $data = false;
    
    $stmt = mysqli_stmt_init($db);

    //mysqli_stmt_prepare($stmt, "SELECT * FROM products WHERE active='1' and currencyIsoCode=?");
    mysqli_stmt_prepare($stmt, "SELECT * FROM products WHERE active='1'");
    
    //mysqli_stmt_bind_param($stmt, "s", $currencyIsoCode);

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $data[] = $row;
    }    
    return $data;
}

function addImage($file, $productId, $mainImage) {
	global $db;
	    
    $uploaddir = __DIR__."/../api/products/images/";
    $uploadfile = $uploaddir . basename($_FILES['file']['tmp_name']);
    
    if($uploadfile != "" ) {
      $stmt = mysqli_stmt_init($db);

      $query = "INSERT into `images` (productId, mainImage) VALUES (?, ?)";
     
      mysqli_stmt_prepare($stmt, $query);
    
      mysqli_stmt_bind_param($stmt, "ii", $productId, $mainImage);
    
      if(mysqli_stmt_execute($stmt)) {
          $fileId = mysqli_stmt_insert_id($stmt);
          if(copy($_FILES['file']['tmp_name'], $uploadfile.$fileId.".jpg")) {
            $path = $uploadfile.$fileId.'.jpg'; 
            $sql = "INSERT into `images` (path) VALUES ('$path')";
            global $db;
            mysqli_query($db, $sql);
            return true;
          }
            else return false;
	   }
    }
}
/*function addImage($file, $productId, $mainImage) {
 global $db;
 
if( $file['file']['name'] != "" ) {
    $stmt = mysqli_stmt_init($db);
    
    $query = "INSERT into `images` (productID, mainImage) VALUES (?, ?)";
    
    mysqli_stmt_prepare($stmt, $query);
    
   
    mysqli_stmt_bind_param($stmt, "ii", $productId, $mainImage);
    
    if(mysqli_stmt_execute($stmt)) {
        $fileId = mysqli_stmt_insert_id($stmt);
        copy($file['file']['name'], __DIR__."/../../api/products/images/".$fileId.".jpg");
        $path = "";
        echo $path;
        return true;
    }
    else return false;
    }
}*/


/*function addImage($file, $productId, $mainImage) {
 global $db;
 
 $uploaddir = __DIR__."/../api/products/images/";
 $uploadfile = $uploaddir . $file['file']['name'];
 
if($uploadfile != "" ) {
    $stmt = mysqli_stmt_init($db);
    
    $query = "INSERT into `images` (productID, mainImage) VALUES (?, ?)";
    
    mysqli_stmt_prepare($stmt, $query);
    
   
    mysqli_stmt_bind_param($stmt, "ii", $productId, $mainImage);
    
    if(mysqli_stmt_execute($stmt)) {
        $fileId = mysqli_stmt_insert_id($stmt);
        copy($file['file']['name'], $uploadfile.$fileId.".jpg");
        echo $uploadfile.$fileId;
        copy(basename($file['file']['tmp_name']), $uploaddir.$fileId.".jpg");
        return true;
        }
    else return false;
    }
}*/

function getProductImages($productId) {
    global $db;
    
    $data = false;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM `images` WHERE productId=?");
    
    mysqli_stmt_bind_param($stmt, "i", $productId);
    
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    while($row = mysqli_fetch_assoc($result)) {      
        $row['url'] = "https://".$_SERVER['SERVER_NAME']."/php/work3/api/products/images/".$row['imageId'].".jpg";
        $data[] = $row;
    }    
    return $data;
}

function getProductsFromCategory($categId) {
    global $db;
    
    $data = false;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM `products` WHERE active=1 and categId=?");
    
    mysqli_stmt_bind_param($stmt, "i", $categId);

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $data[] = $row;
    }    
    return $data;
}

function deleteImage($imageId) {
	global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $query = "DELETE FROM `images` WHERE imageId=?";
                            
    mysqli_stmt_prepare($stmt, $query);
    
   
    mysqli_stmt_bind_param($stmt, "i", $imageId);
    
    
    if(mysqli_stmt_execute($stmt)) {
        return true;
    }
    else return false;
}

function getHotdeals() {
    global $db;
    
    $data = false;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT *, UNIX_TIMESTAMP(hotdealsDate) AS hotdealsAsSeconds, TIME_FORMAT(hotdealsDate,'%H') AS hotdealsHour, TIME_FORMAT(hotdealsDate,'%i') AS hotdealsMinutes, TIME_FORMAT(hotdealsDate,'%s') AS hotdealsSeconds FROM `hotdeals` WHERE active='1'");

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $data[] = $row;
    }    
    return $data;
}

function getFirstSlider() {
    global $db;
    
    $data = false;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM `firstSlider` WHERE active='1'");

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $data[] = $row;
    }    
    return $data;
}   

function getCustomerSupport() {
    global $db;
    
    $data = false;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM `customerSupport` WHERE active='1'");

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $data[] = $row;
    }    
    return $data;
}   

function getSofasSlider() {
    global $db;
    
    $data = false;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM `sofasSlider` WHERE active='1'");

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $data[] = $row;
    }    
    return $data;
}

function getOfficeChairCollection() {
    global $db;
    
    $data = false;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM `officeChairCollection` WHERE active='1'");

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $data[] = $row;
    }    
    return $data;
}

function getSpecialCollection() {
    global $db;
    
    $data = false;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM `specialCollection` WHERE active='1'");

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $data[] = $row;
    }    
    return $data;
}

function getBedroomBed() {
    global $db;
    
    $data = false;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM `bedroomBed` WHERE active='1'");

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $data[] = $row;
    }    
    return $data;
}

function getClientFeedback() {
    global $db;
    
    $data = false;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM `clientFeedback` WHERE active='1'");

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $data[] = $row;
    }    
    return $data;
}

function getFurnitureGallery() {
    global $db;
    
    $data = false;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM `furnituteGallery` WHERE active='1'");

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $data[] = $row;
    }    
    return $data;
}

function getBrandSlider() {
    global $db;
    
    $data = false;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM `brandSlider` WHERE active='1'");

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $data[] = $row;
    }    
    return $data;
}

function getBlog() {
    global $db;
    
    $data = false;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM `blog` WHERE active='1'");

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $data[] = $row;
    }    
    return $data;
}