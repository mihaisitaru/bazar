<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/categoriesLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

$data = getAllCategories();

if($data !== false) echoJSONOutput($data);
else throwJSONError(_ERROR_NO_CATEGORY_WAS_FOUND_CODE, _ERROR_NO_CATEGORY_WAS_FOUND_MSG);