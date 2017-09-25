<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/cartLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

if (!isset($_SESSION['user']) OR !isset($_SESSION['user']['userId'])) {
    throwJSONError(_ERROR_USER_NOT_LOGGED_IN_CODE, _ERROR_USER_NOT_LOGGED_IN_MSG);
}

$data = getOrdersHistory();

if($data !== false) echoJSONOutput($data);
else throwJSONError(_ERROR_NO_ORDER_FOR_CURRENT_USER_CODE, _ERROR_NO_ORDER_FOR_CURRENT_USER_MSG); //add constant
