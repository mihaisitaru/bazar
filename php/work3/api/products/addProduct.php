<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/productsLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');


returnHeader();

if(empty($_POST['productName']) OR empty($_POST['description']) OR empty($_POST['shortDescription']) OR empty($_POST['dateAdded']) OR empty($_POST['price']) OR empty($_POST['currencyIsoCode']) OR empty($_POST['rating']) OR empty($_POST['promo']) OR empty($_POST['discount']) OR empty($_POST['active']) OR empty($_POST['topSell']) OR empty($_POST['categId'])) {
    
    return throwJSONError(_ERROR_PRODUCT_DETAILS_NOT_SPECIFIED_CODE, _ERROR_PRODUCT_DETAILS_NOT_SPECIFIED_MSG);
}

if(addProduct($_POST['productName'], $_POST['description'], $_POST['shortDescription'], $_POST['dateAdded'], $_POST['price'], $_POST['currencyIsoCode'], $_POST['rating'], $_POST['promo'], $_POST['discount'], $_POST['active'], $_POST['topSell'], $_POST['categId']) === true) {
    echoJSONOutput();
}
else {
    throwJSONError(_ERROR_PRODUCT_NOT_CREATED_CODE, _ERROR_PRODUCT_NOT_CREATED_MSG);
}