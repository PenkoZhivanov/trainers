<?php
include 'head.php';
include 'navigation.php';
?>
<body data-spy="scroll" data-target=".navbar" data-offset="60">
   <fieldset style="margin-top: 50px;"><legend>Новини</legend>
        <div id="news-container" style="max-width: 1024px;padding:20px;">
            <?php
            $dir = './news';
            $files = scandir($dir, 1);
            $mark = true;
            foreach ($files as $value) {
                $tmp = explode(".",$value);
                $extention =end($tmp);
                if ($value == "." || $value == ".."|| $extention!="html") {
                    continue;
                }
               
                $style=($mark=!$mark)?"white":"aliceblue";
                echo '<div style="width:310px; display:block; background-color:'.$style.';">';
                echo $value;
                echo '<button onclick="delete_image($(this));" style="margin:0px 10px;display:none;">Изтрий</button>';
                echo '</div>';
            }
            ?>
        </div>
    </fieldset>
 