<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/cartLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

if (!isset($_SESSION['user']) OR !isset($_SESSION['user']['userId'])) {
    throwJSONError(_ERROR_USER_NOT_LOGGED_IN_CODE, _ERROR_USER_NOT_LOGGED_IN_MSG);
}

if(empty($_POST['orderId'])) {
    return throwJSONError(_ERROR_ORDER_NOT_SPECIFIED_CODE, _ERROR_ORDER_NOT_SPECIFIED_MSG);
} 

$orderData = getOrdersHistory($_POST['orderId']);

if($orderData !== false and $data = getOrderDetail($_POST['orderId'])) {
    if($data !== false) {
        $orderData['details'] = $data;
        echoJSONOutput($orderData);
    }
    else {
        throwJSONError(_ERROR_ORDER_NOT_FOUND_CODE, _ERROR_ORDER_NOT_FOUND_MSG);
    }
}
else {
    throwJSONError(_ERROR_ORDE_NOT_FOUND_CODE, _ERROR_USER_NOT_LOGGED_IN_MSG);
}