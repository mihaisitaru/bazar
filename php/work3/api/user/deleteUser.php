<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/userLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');


returnHeader();


if(empty($_POST['userId'])) {
    return throwJSONError(_ERROR_USER_NOT_SPECIFIED_CODE, _ERROR_USER_NOT_SPECIFIED_MSG);
} 

if(deleteCategory($_POST['userId']) === true) {
    echoJSONOutput();
}
else {
    throwJSONError(_ERROR_USER_NOT_SPECIFIED_CODE, _ERROR_USER_NOT_SPECIFIED_MSG);
}