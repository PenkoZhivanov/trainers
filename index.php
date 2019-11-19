<?php
session_start();
include "config.php";
if (!isset($_SESSION['page'])) {
    $_SESSION['page'] = "home";
}

switch ($_SESSION['page']) {
    case "home":
        include_once 'home.php';
        break;
    case "login":
        include_once 'login.php';
        break;
    default:
        include_once 'home.php';
        break;
}


