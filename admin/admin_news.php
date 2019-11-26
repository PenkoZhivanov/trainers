<?php
include_once 'News.php';

$news = new News();
$allNews = $news->getNews();
?>
<!--<fieldset style="margin-top:50px; overflow-style: auto;">
    <legend style="position:fixed;background-color: whitesmoke;">Статии
        <span title="Добавяне на нов потребител" style="float:right;margin-right: 20px;">
            <img src="images/edit.png" width="35"> <span style="font-size:0.8em;float:" >Добави статия</span>
        </span>
    </legend>-->
<!--    <div style="margin-top:50px;">-->
<div id="table-container">
    <div id="title-container">
        <span>Статии</span>
        <span id="add-new" class="right" style="cursor:pointer;">
            <img src="images/add-user.png" style="width: 30px;margin-top:-5px;"> Добави новa
        </span>
    </div>
    <table  id="example" class="display compact" >
        <thead><tr></tr></thead>
        <tbody>

            <?php for ($i = 0; $i < count($allNews); $i++) { ?>
                <tr>
            <div class ="news-container" >

                <div class="title-news"><h2><?= $allNews[$i]["title"]; ?></h2></div>
                <div><small>от <i><b><?= $allNews[$i]["name"]; ?></b></i></small></div>
                <div class="news-created"><small><?= $allNews[$i]["date_created"]; ?></small></div>
                <div ><?= substr($allNews[$i]['content'], 0, 250) . "..."; ?></div>
                <div class="read-more" >
                    <a href="redirector.php?item=4&id=<?php echo $allNews[$i]['id']; ?>">Прочети цялата</a></div>
                <div class="read-more">
                    <a href="redirector.php?item=3&id=<?php echo $allNews[$i]['id']; ?>">Редактирай</a></div>
            </div>
            </tr>
        <?php } ?>


        </tbody>



        </fieldset>
        <style>
            .read-more{
                width: max-content;
                padding:0 5;
                background-color: whitesmoke; 
                box-shadow: lightgrey 6px  6px 2px;
                cursor:pointer;
                margin-top:10px;
                border-radius: 6px;
                display:inline-table;
                margin-right: 15px;
            }
            .read-more:hover{
                width: max-content;
                padding:0 5;
                box-shadow: lightgrey 6px  5px 2px;
                cursor:pointer;
                border: 1px solid lightgrey;
            }

            .news-container{
                border:1px solid white;
                margin:auto; 
                width:50%; 
                padding-bottom: 20px;
                border-bottom: 1px solid lightblue;
            }
            .title-news{
                margin-top: 10px;
            }
            .news-created > small{
                font-size:0.8em;
                font-weight:bold;

            }
            .news-created{
                margin-bottom: 20px;
            }
#table-container{
    position:relative;
    height: 90%; 
    overflow-y: scroll;

}
#table-container > div{
    width: 100%;
    min-height: 2em; 
    background-color: whitesmoke;
    margin-bottom: 10px;

}
#title-container{
    padding:5px;
    border-bottom: 1px solid black;
    background-color: lightblue !important; 
}
#table-container > div>span{
    font-weight: bold;
}
        </style>