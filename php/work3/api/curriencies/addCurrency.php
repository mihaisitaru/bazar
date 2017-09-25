<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/currenciesLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');


returnHeader();


if(empty($_POST['isoCode']) OR empty($_POST['name']) OR empty($_POST['active'])) {
    return throwJSONError(_ERROR_CURRENCY_NAME_CODE_OR_STATUS_NOT_SPECIFIED_CODE, _ERROR_CURRENCY_NAME_CODE_OR_STATUS_NOT_SPECIFIED_MSG);
} 

if(addCurrency($_POST['isoCode'], $_POST['name'] , $_POST['active']) === true) {
    echoJSONOutput();
}
else {
    throwJSONError(_ERROR_CURRENCY_NOT_CREATED_CODE, _ERROR_CURRENCY_NOT_CREATED_MSG);
}