<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/userLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

if(empty($_POST['email']) OR empty($_POST['password']) OR empty($_POST['fullName']) OR empty($_POST['address'])) {
    return throwJSONError(_ERROR_DETAILS_NOT_SPECIFIED_CODE, _ERROR_DETAILS_NOT_SPECIFIED_MSG);
} 

if($_POST['password']!= $_POST['passwordConfirm']) {
        return throwJSONError(_ERROR_PASSWORDS_DO_NOT_MATCH_CODE, _ERROR_PASSWORDS_DO_NOT_MATCH_MSG);
}

if(checkEmailExist($_POST['email'], $_POST['userId'])) {
    throwJSONError(_ERROR_EMAIL_ALREADY_EXISTS_CODE, _ERROR_EMAIL_ALREADY_EXISTS_MSG);
} 
else {
    if(addUser($_POST['email'], $_POST['password'], $_POST['fullName'], $_POST['address'], 1) === true) {
        echoJSONOutput();
    }
    else {
        throwJSONError(_ERROR_ACCOUNT_NOT_CREATED_CODE, _ERROR_ACCOUNT_NOT_CREATED_MSG);
    }
}