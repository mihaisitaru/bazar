<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/productsLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');


returnHeader();

if(empty($_FILES) or empty($_POST['productId']) or empty($_POST['mainImage'])) {
    return throwJSONError(_ERROR_IMAGE_NOT_SPECIFIED_CODE, _ERROR_IMAGE_NOT_SPECIFIED_MSG);
} 

if(addImage($_FILES, $_POST['productId'], $_POST['mainImage']) === true) {
    echoJSONOutput();
}
else {
    throwJSONError(_ERROR_IMAGE_NOT_UPLOADED_CODE, _ERROR_IMAGE_NOT_UPLOADED_MSG);
}