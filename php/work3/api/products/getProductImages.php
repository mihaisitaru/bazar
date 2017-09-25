<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/productsLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

if(empty($_POST['productId'])) {
    return throwJSONError(_ERROR_PRODUCT_NOT_SPECIFIED_CODE, _ERROR_PRODUCT_NOT_SPECIFIED_MSG);
} 

if($data = getProductImages($_POST['productId'])) {
    if($data !== false) echoJSONOutput($data);
    else {
        throwJSONError(_ERROR_PRODUCT_IMAGE_NOT_FOUND_CODE, _ERROR_PRODUCT_IMAGE_NOT_FOUND_MSG);
    }
}
else {
    throwJSONError(_ERROR_NO_IMAGE_FOUND_CODE, _ERROR_NO_IMAGE_FOUND_MSG);
}