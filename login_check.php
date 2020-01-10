<?php
session_start();
$post = filter_input_array(INPUT_POST);
if($post){
    $email=$post['email'];
    $password=$post['password'];
}
$uri="index.php";
include_once 'db.php';
$db= new DB();
$pass= md5($password);
$sql="SELECT * FROM user WHERE email='$email' AND password='$pass' AND isActive=1";
$isThere = $db->query($sql);
if($isThere){
    $_SESSION['user']=$isThere[0];
}else{
    unset($_SESSION['user']);
    $uri="login.php";
}

header("location:$uri");
