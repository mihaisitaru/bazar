<?php

require_once(__DIR__.'/../config/general.php');

function loginUser($email, $password) { 
    global $db;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, 'SELECT userId FROM `users` WHERE email=? AND password=? AND active=1 limit 0,1');
    
    /* bind parameters for markers */
    mysqli_stmt_bind_param($stmt, "ss", strtolower($email), sha1($password));
    
    /* execute query */
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
        
    if($row = mysqli_fetch_assoc($result)) {
        
        $userDetails = returnUserDetails($row['userId']);
        
        if($userDetails !== false) {
            $_SESSION['user'] = $userDetails;
            return true;             
        }
    } 
    return false;
}
    
function newsletterRegister($email, $x, $y) {
	global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $register = 'INSERT INTO `newsletterEmails` (`email`, `x`, `y`) VALUES (?, ?, ?)';
                            
    mysqli_stmt_prepare($stmt, $register);
    
    mysqli_stmt_bind_param($stmt, "sii", strtolower($email), $x, $y);
    
    if(mysqli_stmt_execute($stmt)) {
        return true;
    }
    else return false;
}

function checkIfUserIsLoggedIn() {
    if(isset($_SESSION['user']) AND !is_null($_SESSION['user'])) {
        return true;
    } 
    else {
        return false;
    }
}


function returnUserDetails($userId) {
    global $db;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, 'SELECT * FROM `users` WHERE userId=? limit 0,1');
    
    /* bind parameters for markers */
    mysqli_stmt_bind_param($stmt, "i", $userId);
    
    /* execute query */
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
        
    if($row = mysqli_fetch_assoc($result)) {
        return $row;
    }    
    return false;
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
    
function addUser($email, $password, $fullName, $address, $active) {
	global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $newUser = "INSERT into `users` (email, password, fullName, address, active) VALUES (?, ?, ?, ?, ?)";
                            
    mysqli_stmt_prepare($stmt, $newUser);
    
    /* bind parameters for markers */
    mysqli_stmt_bind_param($stmt, "ssssi", strtolower($email), sha1($password), ucwords($fullName), $address, $active);
    
    /* execute query */
    if(mysqli_stmt_execute($stmt)) {
        return true;
        }
    else return false;
}

function updateUser($userId, $email, $password, $fullName, $address, $active) {
	global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $updateUser = "UPDATE `users` SET email = ?, password = ?, fullName = ?, address = ?, active = ? WHERE userId=?";
    
    mysqli_stmt_prepare($stmt, $updateUser);
    
    /* bind parameters for markers */
    mysqli_stmt_bind_param($stmt, "ssssii", strtolower($email), sha1($password), ucwords($fullName), $address, $active, $userId);
    
    /* execute query */
    if(mysqli_stmt_execute($stmt)) {
        return true;
        }
    else return false;
}

function deleteUser($userId) {
	global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $query = "DELETE FROM `users` WHERE userId=?";
                            
    mysqli_stmt_prepare($stmt, $query);
    
    /* bind parameters for markers */
    mysqli_stmt_bind_param($stmt, "i", $userId);
    
    /* execute query */
    if(mysqli_stmt_execute($stmt)) {
        return true;
        }
    else return false;
}
    
function checkEmailExist($email, $userId=0) {
    global $db;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, 'SELECT userId FROM `users` WHERE email=? AND userId <> ? limit 0,1');
    
    /* bind parameters for markers */
    mysqli_stmt_bind_param($stmt, "si", strtolower($email), $userId);
    
    /* execute query */
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
        
    if($row = mysqli_fetch_assoc($result)) {

        return true;
    }    
    return false;
}

function checkEmailExistNewsletter($email) {
    global $db;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, 'SELECT `email` FROM `newsletterEmails` WHERE email = ? limit 0,1');
    
    mysqli_stmt_bind_param($stmt, "s", strtolower($email));
    
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
        
    if($row = mysqli_fetch_assoc($result)) {
        return true;
    }    
    return false;
}