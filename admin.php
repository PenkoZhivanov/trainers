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


        <link rel="stylesheet" type="text/css" href="./scripts/datatables.min.css"/>
        <script type="text/javascript" src="./scripts/datatables.min.js"></script>
        <link href="pages/css/styles.css" rel="stylesheet" type="text/css"/>  
        <style> .menu-navigation{
                cursor:pointer;
            }
        </style>

    </head>
    


    <body style="overflow-y: hidden;"
<?php
    session_start();
    include_once "config.php";
    include_once 'db.php';
    include_once 'admin/admin_navigation.php';
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
    ?>
          <table style="position: relative; min-height: 100%;">
            <tr>
                <td valign='top' style="background-color: black;min-width: 100px; height: 100%; min-height: 100%;">ddsdsdsd</td>
                <td valign="top">
                    <?php
                    

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
                        case "sports":
                            include_once $admin_sports;
                    }
                    ?>
                </td>
            </tr>
        </table>