<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/categoriesLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

if(empty($_POST['categId'])) {
    return throwJSONError(_ERROR_CATEGORY_NOT_SPECIFIED_CODE, _ERROR_CATEGORY_NOT_SPECIFIED_MSG);
} 

if($data = getCategory($_POST['categId'])) {
        if($data !== false) echoJSONOutput($data);
        else {
            throwJSONError(_ERROR_CATEGORY_NOT_FOUND_CODE, _ERROR_CATEGORY_NOT_FOUND_MSG);
        }
}
else {
    throwJSONError(_ERROR_CATEGORY_NOT_FOUND_CODE, _ERROR_CATEGORY_NOT_FOUND_MSG);
}