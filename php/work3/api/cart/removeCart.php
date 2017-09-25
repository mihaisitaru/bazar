<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/cartLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

if(removeCart() === true) {
    echoJSONOutput();
}
else {
    throwJSONError(_ERROR_CART_NOT_EMPTIED_OUT_CODE, _ERROR_CART_NOT_EMPTIED_OUT_MSG);
}