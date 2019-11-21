<?php
include_once 'classes/Sport.php';
$sport = new Sport();
$sports = $sport->getSports();

?>
    <div id="table-container">
        <div style="width: 100%;border:1px; solid black; min-height: 1.3em; background-color: whitesmoke;margin-bottom: 10px;"></div>
    <table  id="example" class="display compact" style="margin-top: 230px;"  >
        <thead>
            <tr >
                <th>Име</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $count = 0;
            foreach ($sports as $value) {
          
                $class = $count++ % 2 == 0 ? "white" : "lightblue";
                echo"<tr class='" . $class . "'>";
                echo "<td>" . $value['sport_name'] . "</td>";
      
                echo "<td style='float:right;'>";
                echo "<button class='' id='b";
                echo $value['id'];
                echo "' >Редактирай</button>";
                echo "<button>Изтрий</button> </td>";
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