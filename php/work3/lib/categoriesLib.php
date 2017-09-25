<?php

require_once(__DIR__.'/../config/general.php');

function addCategory($categName, $active) {
	global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $query = "INSERT into `categories` (categName, active) VALUES (?, ?)";
                            
    mysqli_stmt_prepare($stmt, $query);
    
    
    mysqli_stmt_bind_param($stmt, "si", $categName, $active);
    
    
    if(mysqli_stmt_execute($stmt)) {
        return true;
        }
    else return false;
}

function deleteCategory($categId) {
	global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $query = "DELETE FROM `categories` WHERE categId=?";
                            
    mysqli_stmt_prepare($stmt, $query);
    
    
    mysqli_stmt_bind_param($stmt, "i", $categId);
    
    
    if(mysqli_stmt_execute($stmt)) {
        return true;
        }
    else return false;
}

function updateCategory($categId, $categName, $active) {
	global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $query = "UPDATE `categories` SET categName = ?, active = ? WHERE categId=?";
    
    mysqli_stmt_prepare($stmt, $query);
  
    
    mysqli_stmt_bind_param($stmt, "isi", $categId, $categName, $active);
    
    
    if(mysqli_stmt_execute($stmt)) {
        return true;
        }
    else return false;
}

function getCategory($categId) {
	global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $query = "SELECT * FROM `categories` WHERE categId=?";
    
    mysqli_stmt_prepare($stmt, $query);
    
    mysqli_stmt_bind_param($stmt, "i", $categId);
    
    if(mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)) {
                /*return $row['categId'];*/
                return $row;
            }
        }
    else return false;
}

function getAllCategories() {
    global $db;
    
    $data = false;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM categories WHERE active=1");

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    while($row = mysqli_fetch_assoc($result)) {      
        $data[] = $row;
    }    
    return $data;
}