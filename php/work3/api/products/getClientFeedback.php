<?php
header('Access-Control-Allow-Origin: *');
require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/productsLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

$data = getClientFeedback();

if($data !== false) echoJSONOutput($data);
else throwJSONError(_ERROR_NO_DATA_WAS_FOUND_CODE, _ERROR_NO_DATA_WAS_FOUND_MSG);