<html lang="en">    
    <head>
        <title>Trainers Administration</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta HTTP-EQUIV="Pragma" content="no-cache">  
        <meta HTTP-EQUIV="Expires" content="-1">
        
        <link rel="stylesheet" href="pages/css/bootstrap.min.css">
        <link rel="stylesheet" href="pages/css/jquery-confirm.min.css">
        <link rel="stylesheet" type="text/css" href="scripts/datatables.min.css"/>
        <link href="admin/css/styles.css" rel="stylesheet" type="text/css"/>  
        
        <script src="pages/js/jquery.min.js"></script>
        <script src="pages/js/bootstrap.min.js"></script>
        <script src="pages/js/jquery-confirm.min.js"></script>
        <script type="text/javascript" src="./scripts/datatables.min.js"></script>
        <script src="admin/js/menu.js" type="text/javascript"></script>

    </head>
    <body>
    <?php
    session_start();
    include_once "config.php";
    include_once 'db.php';
    include_once 'admin/admin_navigation.php';
    include_once 'classes/WayToWork.php';
    if(!isset($_SESSION['page'])){        exit();}
    $page = $_SESSION['page'];
    if (strpos($page, "edit_news") > -1) {
        $page = "edit_news";
    }
    if (strpos($page, "read_news") > -1) {
        $page = "read_news";
    }

     ?>

                    <?php
                    switch ($page) {
                        case "home":
                            include_once $admin_home;
                            break;
                        case "users":
                            include_once $admin_users;
                            break;
                        case "trainers":
                            include_once $admin_trainers;
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
               
   
    </body>
</html>