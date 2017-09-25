<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/productsLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

if(empty($_POST['categId'])) {
    return throwJSONError(_ERROR_CATEGORY_NOT_SPECIFIED_CODE, _ERROR_CATEGORY_NOT_SPECIFIED_MSG);
} 

if($data = getProductsFromCategory($_POST['categId'])) {
        if($data !== false) echoJSONOutput($data);
        else {
            throwJSONError(_ERROR_NO_PRODUCT_IN_SPECIFIED_CATEGORY_FOUND_CODE, _ERROR_NO_PRODUCT_IN_SPECIFIED_CATEGORY_FOUND_MSG);
        }
}
else {
    throwJSONError(_ERROR_CATEGORY_NOT_FOUND_CODE, _ERROR_CATEGORY_NOT_FOUND_MSG);
}