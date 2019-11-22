<?php
include_once 'classes/Sport.php';
$sport = new Sport();
$sports = $sport->getSports();

?>
    <div id="table-container">
        <div id="title-container"><span>СПОРТОВЕ</span></div>
    <table  id="example" class="display compact" style="margin-top: 230px;"  >
        <thead>
            <tr >
                <th>Име</th>
                <th id="th-action" style="width:50%;">Действия</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $count = 0;
            foreach ($sports as $value) {
          
                $class = $count++ % 2 == 0 ? "white" : "lightblue";
                echo"<tr class='" . $class . "'>";
                echo "<td>" . $value['sport_name'] . "</td>";
      
                echo "<td style='width50%;float:right;'>";
                echo "<button class='action-button' title='РЕДАКТИРАЙ' id='b";
                echo $value['id'];
                echo "' ><img src='images/edit.png' width='20'></button>";
                echo "<button class='action-button' title='ИЗТРИЙ'><img src='images/junk.png' width='20'></button> </td>";
                echo "</tr>";
            }
            ?></tbody>
        <tfoot>
            <tr >
                <th>Име</th>
                <th>Действия</th>
            </tr>	
        </tfoot>
    </table>
</div> <!-- DIV Table -->
<script src="./admin/js/admin_sports.js" type="text/javascript"></script>
<link href="./admin/css/admin_sports.css" rel="stylesheet" type="text/css"/>