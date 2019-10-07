<?php

include_once 'db.php';

function getCountries() {
    include "config.php";
    $link = mysqli_connect($host, $user, $password, $dbase);
    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    $sql1 = "SET names utf8";
    $sql = "SELECT * FROM country";
    mysqli_query($link, $sql1);
    $result = mysqli_query($link, $sql);
    $country = [];
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $country[] = $row;
    }
    return $country;
}

function getCities() {
    $db = new DB();
    $sql = "SELECT * FROM `city` WHERE 1";
    $result = $db->query($sql);
    
    return $result;
}

function checkEmail($email){
    $db=new DB();
    $sql = "SELECT * FROM user WHERE email LIKE '%".$email."'";
    
    $result = $db->query($sql);
    if($result){
        return true;
        
    }else {
        return false;
    }
}
function pre($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
