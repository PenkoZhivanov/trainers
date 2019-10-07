<?php
session_start();
$action = filter_input(INPUT_POST, 'action');

switch ($action) {
    case "login":
        login();

        break;

    default:
        break;
}

function login(){
    $email = filter_input(INPUT_POST, 'email');
    $pass = filter_input(INPUT_POST, 'password');
    include_once './db.php';
    $db= new DB();
    $sql = "SELECT * FROM users WHERE email='".$email."' AND password = '".$pass."'"; 
    $result = $db->query($sql);
    
    if(count($result)<1){
        $result[0]['error']="Грешен потребител/парола";
    }else{
         $result[0]['error']="";
         $_SESSION['user']=$result[0];

    }
    
    $output= json_encode($result[0]);
    echo $output;
}