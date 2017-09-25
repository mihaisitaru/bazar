<?php

require_once(__DIR__.'/../config/general.php');

function addCurrency($isoCode, $name, $active) {
	global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $query = "INSERT into `currencies` (isoCode, name, active) VALUES (?, ?, ?)";
                            
    mysqli_stmt_prepare($stmt, $query);
    
    
    mysqli_stmt_bind_param($stmt, "ssi", $isoCode, $name, $active);
    
    
    if(mysqli_stmt_execute($stmt)) {
        return true;
        }
    else return false;
}

function deleteCurrency($isoCode) {
	global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $query = "DELETE FROM `currencies` WHERE isoCode=?";
                            
    mysqli_stmt_prepare($stmt, $query);
    
    
    mysqli_stmt_bind_param($stmt, "s", $isoCode);
    
    
    if(mysqli_stmt_execute($stmt)) {
        return true;
        }
    else return false;
}

function updateCurrency($isoCode, $name, $active) {
	global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $query = "UPDATE `currencies` SET name = ?, active = ? WHERE isoCode=?";
    
    mysqli_stmt_prepare($stmt, $query);
    
    
    mysqli_stmt_bind_param($stmt, "ssi", $isoCode, $name, $active);
    
    
    if(mysqli_stmt_execute($stmt)) {
        return true;
        }
    else return false;
}

function getSellingCurrencies($isoCode, $active) {
	global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $query = "SELECT * FROM `currencies` WHERE isoCode=? AND active=?";
    
    mysqli_stmt_prepare($stmt, $query);
    
    
    mysqli_stmt_bind_param($stmt, "si", $isoCode, $active);
    
    
    if(mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);
        while($row = mysqli_fetch_assoc($result)) {      
            $data[] = $row;
        }    
    return $data;
        }
    else return false;
}

function getContractingCurrencies() {
    global $db;
    
    $data = false;
    
    $stmt = mysqli_stmt_init($db);

    mysqli_stmt_prepare($stmt, "SELECT * FROM `currencies`");

    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    while($row = mysqli_fetch_assoc($result)) {      
        $data[] = $row;
    }    
    return $data;
}

function getConversionValue($fromIsoCode, $toIsoCode) {
    global $db;
    
    $stmt = mysqli_stmt_init($db);
    
    $query = "SELECT `value` FROM `currencyConversions` WHERE fromIsoCode LIKE ? AND toIsoCode LIKE ? ORDER BY conversionDate DESC limit 0,1";
    
    mysqli_stmt_prepare($stmt, $query);
        
    mysqli_stmt_bind_param($stmt, "ss", $fromIsoCode, $toIsoCode);
        
    if(mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)) {
                return $row['value'];
            } 
        }
    return 1;
}