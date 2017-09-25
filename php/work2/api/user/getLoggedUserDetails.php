<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/userLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

if(checkIfUserIsLoggedIn() === true) {
    echoJSONOutput($_SESSION['user']);  
} 
else {
    throwJSONError(_ERROR_USER_NOT_LOGGED_IN_CODE, _ERROR_USER_NOT_LOGGED_IN_MSG);
}