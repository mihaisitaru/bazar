<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/cartLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

if(empty($_POST['productId'])) {
    return throwJSONError(_ERROR_PRODUCT_NOT_SPECIFIED_CODE, _ERROR_PRODUCT_NOT_SPECIFIED_MSG);
} 

if(removeFromCart($_POST['productId']) === true) {
    echoJSONOutput($_SESSION['cart']);
}
else {
    throwJSONError(_ERROR_PRODUCT_NOT_DELETED_CODE, _ERROR_PRODUCT_NOT_DELETED_MSG);
}