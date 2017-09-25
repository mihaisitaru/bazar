<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/productsLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');


returnHeader();


if(empty($_POST['imageId'])) {
    return throwJSONError(_ERROR_IMAGE_NOT_SPECIFIED_CODE, _ERROR_IMAGE_NOT_SPECIFIED_MSG);
} 

if(deleteProduct($_POST['imageId']) === true) {
    echoJSONOutput();
}
else {
    throwJSONError(_ERROR_IMAGE_NOT_DELETED_CODE, _ERROR_IMAGE_NOT_DELETED_MSG);
}