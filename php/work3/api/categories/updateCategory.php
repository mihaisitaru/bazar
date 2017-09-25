<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/categoriesLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');


returnHeader();


if(empty($_POST['categId']) OR empty($_POST['categName']) OR empty($_POST['active'])) {
    return throwJSONError(_ERROR_CATEGORY_ID_NAME_OR_STATUS_NOT_SPECIFIED_CODE, _ERROR_CATEGORY_ID_NAME_OR_STATUS_NOT_SPECIFIED_MSG);
} 

if(updateCategory($_POST['categId'], $_POST['categName'], $_POST['active']) === true) {
    echoJSONOutput();
}
else {
    throwJSONError(_ERROR_CATEGORY_NOT_UPDATED_CODE, _ERROR_CATEGORY_NOT_UPDATED_MSG);
}