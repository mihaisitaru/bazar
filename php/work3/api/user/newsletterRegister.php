<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/userLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');

returnHeader();

if(empty($_POST['email'])) {
    return throwJSONError(_ERROR_EMAIL_NOT_SPECIFIED_CODE, _ERROR_EMAIL_NOT_SPECIFIED_MSG);
} 

$userCode = $row['id'];

if(checkEmailExistNewsletter($_POST['email'])) {
    throwJSONError(_ERROR_EMAIL_ALREADY_EXISTS_CODE, _ERROR_EMAIL_ALREADY_EXISTS_MSG);
} 
else {
    if(newsletterRegister($_POST['email'], $_POST['x'], $_POST['y'] === true)) {
        echoJSONOutput();
    }
    else {
    throwJSONError(_ERROR_EMAIL_NOT_CORRECT_CODE, _ERROR_EMAIL_NOT_CORRECT_MSG);
    }
}



?>
<html>
    <head>
        <title>Registered</title>
    </head>
    <body>
    </body>
</html>