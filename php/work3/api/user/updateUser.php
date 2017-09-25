<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/userLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');


returnHeader();

if(empty($_POST['email']) OR empty($_POST['password']) OR empty($_POST['userId'])) {
    return throwJSONError(_ERROR_DETAILS_NOT_SPECIFIED_CODE, _ERROR_DETAILS_NOT_SPECIFIED_MSG);
} 

if(updateUser($_POST['userId'], $_POST['email'], $_POST['password'], $_POST['fullName'], $_POST['address'], $_POST['active']) === true) {
    echoJSONOutput();
}
else {
    throwJSONError(_ERROR_DETAILS_NOT_UPDATED_CODE, _ERROR_DETAILS_NOT_UPDATED_MSG);
}
