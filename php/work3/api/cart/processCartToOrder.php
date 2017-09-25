<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/cartLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/userLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

if(!checkIfUserIsLoggedIn()) {
    return throwJSONError(_ERROR_USER_NOT_LOGGED_IN_CODE, _ERROR_USER_NOT_LOGGED_IN_MSG);
} 

if(empty($_SESSION['cart']) OR count($_SESSION['cart']) <= 0) {
    return throwJSONError(_ERROR_CART_IS_EMPTY_CODE, _ERROR_CART_IS_EMPTY_MSG);
}

if(processCartToOrder() === true) {
    echoJSONOutput();
}
else {
    throwJSONError(_ERROR_ORDER_NOT_PROCESSED_CODE, _ERROR_ORDER_NOT_PROCESSED_MSG);
}