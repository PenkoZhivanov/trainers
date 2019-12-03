<?php
include 'classes/Specialist.php';
include_once 'functions.php';

$specialist = new Specialist();

/* DONT DO LIKE BELLOW ! */
$specialist = $specialist->getSpecialists();
?>   
<link rel="stylesheet" href="./admin/css/admin_users.css">
<div id="content-overlay" style="display:block; z-index: 99; opacity: 0.01; ; min-height: 100%; min-width: 100%;height: 100%;width: 100%"></div>;

<fieldset id="popup1" style="position:absolute;z-index: 100;background-color: white;left:40%;">
    <legend><h2 style="display:inline-table;">Профил на треньор</h2><span id="close-user-profile" > 
            <button title="Затвори" class="profile-close" style=""></button></span></legend>
    <form  name ="trainer-data" action="saveform.php" method ="POST" enctype="multipart/form-data" autocomplete="off">


    </form>
    <table>
        <tr>
            <td>
                <button id="btnSave">Запиши</button></div>
            </td>
            <td>
                <button class="profile-close">Затвори</button>
            </td>
        </tr> 
    </table>
</fieldset>

<div id="table-container">
    <div id="title-container"><span>Специалисти</span><span id="add-new" class="right" style="cursor:pointer;">
            <img src="images/add-user.png" style="width: 30px;margin-top:-5px;"> Добави нов</span></div>
    <table  id="example" class="display compact" >
        <thead>
            <tr>
                <th>Специалист</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $count = 0;
            foreach ($specialist as $value) {
                $class = $count++ % 2 == 0 ? "white" : "lightblue";
                echo"<tr class='" . $class . "'>";
                echo "<td>" . $value['name'] . "</td>";
                echo "<td style='float:right;'><button class='show-profile' onclick='edit(" . $value['id'] . ")' >Редактирай</button>";
                echo "<button class='delete' title='ИЗТРИЙ'  onclick='del(" . $value['id'] . ")'><img src='images/junk.png' width='20'></button> </td>";
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

<script>
    $(document).ready(function () {
        $('#example').DataTable();


    });

    function edit(id) {
       $("#popup1").show();
    }

    function del (id) {
        $.confirm({
            title: 'Внимание!',
            content: 'Сигурни ли сте, че искате да изтриете потребителя?',
            type: 'red',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'ИЗТРИЙ',
                    btnClass: 'btn-red',
                    action: function () {
                    }
                },
                close: {
                    text: 'Не!',
                    action: function () {
                    }
                }
            }
        });
    }
</script>