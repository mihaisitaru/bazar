<?php
require_once('outputHelper.php');

function databaseConnect() {
    global $db;
    $db = mysqli_connect(_DB_HOST, _DB_USER, _DB_PASSWORD, _DB_NAME, _DB_PORT);
    
    if (mysqli_connect_error()) {
        throwJSONError(_ERROR_DB_CONNECTION_CODE, _ERROR_DB_CONNECTION_MSG);
        exit();
    }
    else {
        mysqli_set_charset($db, 'utf8');
    }
}