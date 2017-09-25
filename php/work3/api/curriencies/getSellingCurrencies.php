<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/currenciesLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

if(empty($_POST['isoCode']) OR empty($_POST['active'])) {
    return throwJSONError(_ERROR_CURRENCY_CODE_OR_STATUS_NOT_SPECIFIED_CODE, _ERROR_CURRENCY_CODE_OR_STATUS_NOT_SPECIFIED_MSG);
} 

if($data = getSellingCurrencies($_POST['isoCode'], $_POST['active'])) {
        if($data !== false) echoJSONOutput($data);
        else {
            throwJSONError(_ERROR_CURRENCY_NOT_FOUND_CODE, _ERROR_CURRENCY_NOT_FOUND_MSG);
        }
}
else {
    throwJSONError(_ERROR_CURRENCY_NOT_FOUND_CODE, _ERROR_CURRENCY_NOT_FOUND_MSG);
}