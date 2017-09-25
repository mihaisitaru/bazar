<?php 
 /*error_reporting(E_ALL); 
 ini_set('display_errors','On');*/

function returnHeader() {
    header('Content-Type: application/json'); 
}

function throwJSONError($errorCode, $errorMessage) {
    $result = array( 
        "successful" => false,
        "errorCode" => $errorCode,
        "errorMessage" => $errorMessage
    );
    $encodedJSON = json_encode($result);
    echo $encodedJSON;
    exit();
}

function echoJSONOutput($out = null) {
    $NewOut = array("successful" => true);
    
    if(is_array($out) && count($out) > 0) {
        $NewOut[$userDetails] = $out;
    } 
    echo json_encode($NewOut);
    exit();
}
