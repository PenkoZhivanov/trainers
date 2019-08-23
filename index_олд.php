<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
include_once 'config.php';
if (!isset($_SESSION['page'])) {
    $_SESSION['page'] = "home";
}

switch ($_SESSION['page']) {
    case "home":
        include_once $home;
        break;
    case "login":
        include_once $login;
        break;
}


