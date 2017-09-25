<?php 

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
    http_response_code(400);
    echo $encodedJSON;
    exit();
}

function echoJSONOutput($out = array()) {
    $newOut = array("successful" => true);
    
    if (is_array($out) AND count($out) > 0) {
        $newOut['details'] = $out;
    }
    http_response_code(200);
    echo json_encode($newOut);
    exit();
}