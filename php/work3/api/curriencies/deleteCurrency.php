<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/currenciesLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');


returnHeader();


if(empty($_POST['isoCode'])) {
    return throwJSONError(_ERROR_CURRENCY_NOT_SPECIFIED_CODE, _ERROR_CURRENCY_NOT_SPECIFIED_MSG);
} 

if(deleteCurrency($_POST['isoCode']) === true) {
    echoJSONOutput();
}
else {
    throwJSONError(_ERROR_CURRENCY_NOT_DELETED_CODE, _ERROR_CURRENCY_NOT_DELETED_MSG);
}