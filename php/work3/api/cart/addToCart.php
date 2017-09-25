<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/cartLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');


returnHeader();


if(empty($_POST['quantity']) OR empty($_POST['productId'])) {
    return throwJSONError(_ERROR_PRODUCT_OR_QUANTITY_NOT_SPECIFIED_CODE, _ERROR_PRODUCT_OR_QUANTITY_NOT_SPECIFIED_MSG);
} 

if(addToCart($_POST['quantity'], $_POST['productId'], $_POST['isoCode']) === true) {
    echoJSONOutput($_SESSION['cart']);
}
else {
    throwJSONError(_ERROR_PRODUCT_NOT_ADDED_INTO_CART_CODE, _ERROR_PRODUCT_NOT_ADDED_INTO_CART_MSG);
}