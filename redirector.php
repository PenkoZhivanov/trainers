<?php
session_start();
$id = filter_input(INPUT_GET, "item");
$news_id=filter_input(INPUT_GET, "id",FILTER_VALIDATE_INT );

switch ($id){
    case "users":
        $_SESSION["page"]="users";
        break;
    case "news":
        $_SESSION["page"]="news";
        break;
    case 3:/* редакция на новина */
        $_SESSION["page"]="edit_news_".$news_id;
        break;
    case 4:/* нова новина */
        $_SESSION["page"]="read_news_".$news_id;
        break;
    case "sports":
        $_SESSION["page"]="sports";
        break;
    case "trainers":
        $_SESSION["page"]="trainers";
        break;
     case "specialists":
        $_SESSION["page"]="specialists";
        break;
     case "specialnosti":
        $_SESSION["page"]="specialnosti";
        break;
    case "backtosite":
        $_SESSION["page"]="index";
        header("location:index.php");
        break;
}


header("location:admin.php");