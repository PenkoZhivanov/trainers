<?php
include_once 'News.php';
include_once 'functions.php';
$news = new News();

if (!isset($_SESSION["page"])) {
    $_SESSION["page"] = "news";
    header("location:admin.php");
}
$exploded = explode("_", $_SESSION['page']);
$id = end($exploded);
$allNews = $news->getNews($id)[0];
?>
<fieldset style="margin-top: 55px;"><legend> Обратно</legend>
<div class="outher_content">
    <div class="inner_content">
        <h1><?=$allNews['title'];?></h1>
        <div id="subtitle"><h4><?=$allNews['subtitle'];?></h4></div>
         <div ><?=$allNews['name'];?></div>
        <div id="date_content"><i><?=$allNews['date_created'];?></i></div>
        <div id="content"><?=$allNews['content'];?></div><br>
    </div>

</div>
</fieldset>
<style>
    .outher_content{
        width: 90%;
        padding: 50px;
    }
    .inner_content{
        width: 60%;
        margin:auto;
    }    
</style>