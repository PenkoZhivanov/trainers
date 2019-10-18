<html lang="en">    
    <head>
        <title>Bootstrap Theme Company Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta HTTP-EQUIV="Pragma" content="no-cache">  
        <meta HTTP-EQUIV="Expires" content="-1">
        <link rel="stylesheet" href="pages/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="pages/js/jquery.min.js"></script>
        <script src="pages/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="pages/css/jquery-confirm.min.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
        <script src="pages/js/jquery-confirm.min.js"></script>
 

        <link href="pages/css/styles.css" rel="stylesheet" type="text/css"/>  
    </head>


    <?php
    session_start();
    include "config.php";
    if (!isset($_SESSION['page'])) {
        $_SESSION['page'] = 'users';
    } else {
        
    }
    $page = $_SESSION['page'];
    if (strpos($page, "edit_news") > -1) {
        $page = "edit_news";
    }
    if (strpos($page, "read_news") > -1) {
        $page = "read_news";
    }

    switch ($page) {
        case "home":
            include_once $admin_home;
            break;
        case "users":
            include_once $admin_users;
            break;
        case "trainers":
            include_once "admin_trainers.php";
            break;
        case "news":
            include_once $admin_news;
            break;
        case "edit_news":
            include_once $admin_news_edit;
            break;
        case "read_news":
            include_once $admin_news_read;
            break;
    }
    ?>

    <link rel="stylesheet" type="text/css" href="./scripts/datatables.min.css"/>
    <script type="text/javascript" src="./scripts/datatables.min.js"></script>
    <?php
    ?>
    <style> .menu-navigation{
            cursor:pointer;
        }
    </style>
    <nav class="navbar navbar-default navbar-fixed-top" style="border-bottom:1px solid white; position: fixed;">
        <a class="navbar-brand"  >АДМИНИСТРАЦИЯ</a>
        <div class="container" >
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>

            </div>

         <link href="pages/css/styles.css" rel="stylesheet" type="text/css"/>  
    </head>
   

<?php
//session_start();
include "config.php";
if (!isset($_SESSION['page'])) {
    $_SESSION['page'] = 'users';
} else {
    
}
$page = $_SESSION['page'];
if(strpos($page,"edit_news")>-1){
    $page="edit_news";
}

switch ($page) {
    case "home":
        include_once $admin_home;
        break;
    case "users":
        include_once $admin_users;
        break;
    case "trainers":
        include_once "admin_trainers.php";
        break;
    case "news":
        include_once $admin_news;
        break;
    case "edit_news":
        include_once $admin_news_edit;
        break;
}
?>

<link rel="stylesheet" type="text/css" href="./scripts/datatables.min.css"/>
<script type="text/javascript" src="./scripts/datatables.min.js"></script>
    <?php
    ?>
    <style> .menu-navigation{
            cursor:pointer;
        }
    </style>
    <nav class="navbar navbar-default navbar-fixed-top" style="border-bottom:1px solid white;">
        <div class="container" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" >АДМИНИСТРАЦИЯ</a>
            </div>


            <div class="collapse navbar-collapse" id="myNavbar" >
                <ul class="nav navbar-nav ">
                    <li><a href="redirector.php?item=1" class="menu-navigation navbar-right">Потребители</a></li>
                    <li><a href="redirector.php?item=2" class="menu-navigation" >Статии</a></li>
                    <li><a class="menu-navigation" data-id="contacts"></a></li></ul>
                <span class="nav navbar-nav" style="float:right;"><?php if (isset($_SESSION['user'])) { ?>
                        <li style="float:right;"><a class="menu-navigation" data-id="exit">ИЗХОД</a> </li>
                    <?php } else {
                        ?>
                        <li style="display:inline;"><a data-id="enter" class="menu-navigation">ВХОД</a></li><li style="display:inline;"><a class="menu-navigation">РЕГИСТРАЦИЯ</a> </li>
                    <?php } ?>

                </span>

            </div>
        </div>
    </nav>
    <div id="dt"></div>
<?php 
