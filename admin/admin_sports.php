<?php
include_once 'classes/Sport.php';
$sport = new Sport();
$sports = $sport->getSports();
?>

    
        <?php for ($i = 0; $i < count($sports); $i++) { ?>

            <p><b><?= $sports[$i]["sport_name"]; ?></b></p>

        <?php }
        ?>
  

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

</style>

