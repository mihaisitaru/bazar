<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/currenciesLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

$data = getContractingCurrencies();

if($data !== false) echoJSONOutput($data);
else throwJSONError(_ERROR_NO_CURRENCY_WAS_FOUND_CODE, _ERROR_NO_CURRENCY_WAS_FOUND_MSG);   