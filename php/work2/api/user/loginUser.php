<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/userLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

if(empty($_POST['userName']) AND empty($_POST['password'])) {
    return throwJSONError(_ERROR_USERNAME_NOT_SPECIFIED_CODE, _ERROR_USERNAME_NOT_SPECIFIED_MSG);
} 
$userCode = loginUser($_POST['userName'], $_POST['password']); 

if($userCode === true) {
    echoJSONOutput($_SESSION['user']);
} 
else {
    throwJSONError(_ERROR_USERNAME_NOT_CORRECT_CODE, _ERROR_USERNAME_NOT_CORRECT_MSG);
}
