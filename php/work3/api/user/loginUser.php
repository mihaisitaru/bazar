<html>
    <head>
        <title>Logged in</title>
    </head>
    <body>
        <h3>Logged in</h3>
        <a href="/php/work3/api/user/logoutUser.php"><h3>Logout</h3></a>
    </body>
</html>

<?php

require_once(__DIR__.'/../../config/general.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/userLib.php');
require_once(__DIR__.'/../../'._LIB_FOLDER.'/outputHelper.php');


/*returnHeader();*/


if(empty($_POST['email']) AND empty($_POST['password'])) {
    return throwJSONError(_ERROR_EMAIL_OR_PASSWORD_NOT_SPECIFIED_CODE, _ERROR_EMAIL_OR_PASSWORD_NOT_SPECIFIED_MSG);
} 

$userCode = $row['userId'];

if(loginUser($_POST['email'], $_POST['password']) === true) {
    echoJSONOutput($_SESSION['user']);
} 
else {
    throwJSONError(_ERROR_EMAIL_OR_PASSWORD_NOT_CORRECT_CODE, _ERROR_EMAIL_OR_PASSWORD_NOT_CORRECT_MSG);
}