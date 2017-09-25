<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/productsLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');


returnHeader();

if(empty($_POST['productId']) OR empty($_POST['productName']) OR empty($_POST['active']) OR empty($_POST['categID'])) {
    
    return throwJSONError(_ERROR_PRODUCT_DETAILS_NOT_SPECIFIED_CODE, _ERROR_PRODUCT_DETAILS_NOT_SPECIFIED_MSG);
} 

if(updateProduct($_POST['productName'] ,$_POST['description'] ,$_POST['shortDescription'] ,$_POST['dateAdded'] ,$_POST['price'] ,$_POST['curencyIsoCode'] ,$_POST['rating'] ,$_POST['promo'] ,$_POST['discount'] ,$_POST['active'] ,$_POST['topSell'] ,$_POST['categID']) === true) {
    
    echoJSONOutput();
}
else {
    throwJSONError(_ERROR_PRODUCT_NOT_UPDATED_CODE, _ERROR_PRODUCT_NOT_UPDATED_MSG);
}