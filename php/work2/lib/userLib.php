<?php

require_once(__DIR__.'/../config/general.php');

$users = array(
    '0' => array("userName" => "u10001", "name" => "Ana", "password" => "P@ssword1", "birthday" => "1987-01-23"),
    '1' => array("userName" => "u10002", "name" => "Alexandra", "password" => "W3lcom301", "birthday" => "2017-10-03"),
    '2' => array("userName" => "u10003", "name" => "Gabriela", "password" => "D3faulT4a", "birthday" => "1978-01-25"),
    '3' => array("userName" => "u10004", "name" => "Silvia", "password" => "ImDB390r", "birthday" => "1979-09-25"),
    '4' => array("userName" => "u10005", "name" => "Mihai", "password" => "InD33d78v", "birthday" => "1986-09-17"),
    '5' => array("userName" => "u", "name" => "M", "password" => "2", "birthday" => "1986-09-17")
);

/*echo '<pre>';
print_r($users); */     
        

function loginUser($userName, $password) { 
    global $users;
    foreach($users as $key => $user) {
        if(strtoupper($userName) == strtoupper($user['userName']) AND $password == $user['password']){
            
            $userDetails = returnUserDetails($key);
            if ($userDetails !== false) {
                $_SESSION['user'] = $userDetails;
                return true;
            }
        }
    }  

    logoutUser();
    return false;
}

function checkIfUserIsLoggedIn() {
    if(isset($_SESSION['user']) && !is_null($_SESSION['user'])) {
        return true;
    } 
    else {
        return false;
    }
}

function returnUserDetails($userCode) {
    global $users;
    if(!empty($users[$userCode])){
        
        $newUsers = $users[$userCode];
        $newUsers["userCode"] = $userCode;
        return $newUsers;
        
        } 
        else {
            return false;
            
        }
}

function logoutUser() {
    if(checkIfUserIsLoggedIn() === true) {
        unset($_SESSION['user']);
        return true;
    } 
    else {
        return false;
    }
}
