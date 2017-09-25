<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/userLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

if(logoutUser() === true) {
    echoJSONOutput();
} 
else {
    throwJSONError(_ERROR_USER_MUST_LOGIN_FIRST_CODE, _ERROR_USER_MUST_LOGIN_FIRST_MSG); 
}