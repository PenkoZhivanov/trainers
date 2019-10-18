<?php
session_start();
$id = filter_input(INPUT_GET, "item",FILTER_VALIDATE_INT );
$news_id=filter_input(INPUT_GET, "id",FILTER_VALIDATE_INT );
switch ($id){
    case 1:
        $_SESSION["page"]="users";
        break;
    case 2:
        $_SESSION["page"]="news";
        break;
    case 3:
        $_SESSION["page"]="edit_news_".$news_id;
        break;
    case 4:
        $_SESSION["page"]="read_news_".$news_id;
        break;
}


header("location:admin.php");