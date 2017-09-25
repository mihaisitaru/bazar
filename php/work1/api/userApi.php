<?php

require_once(__DIR__.'/../config/constants.php');
require(__DIR__.'/../'._LIB_FOLDER.'/userLib.php');
echo '<pre>';

switch ($_GET['apiMethod']) { 
    case 'loginUser': 
        $userCode = loginUser($_GET['userName'], $_GET['password']);  
        returnUserDetails($userCode);
    break; 
    default: 
        echo (print_r(array('successfull' => 'false', 'errorMessage' => 'API Command not found!'), true));
}

?>