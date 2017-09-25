<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/productsLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

if(empty($_POST['productId'])) {
    return throwJSONError(_ERROR_PRODUCT_NOT_SPECIFIED_CODE, _ERROR_PRODUCT_NOT_SPECIFIED_MSG);
} 

$data = getProduct($_POST['productId']);

if($data !== false) echoJSONOutput($data);
else throwJSONError(_ERROR_PRODUCT_NOT_FOUND_CODE, _ERROR_PRODUCT_NOT_FOUND_MSG);