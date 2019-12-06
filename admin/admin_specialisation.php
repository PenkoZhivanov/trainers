<?php
include 'classes/Specialisation.php';
include_once 'functions.php';

$specialnost = new Specialisation();

/* DONT DO LIKE BELLOW ! */
$specialnost = $specialnost->getAllSpecs();
//pre($specialnost);
//---------------------------------------------
?>   
<link rel="stylesheet" href="./admin/css/admin_users.css">
<div id="content-overlay" class="overlay hidden" style=""></div>

<fieldset id="popup1" class="hidden" style="position:absolute;z-index: 100;background-color: lightblue;left:40%;top:15%; border:1px solid darkblue;padding: 20px;">
    <legend style="border:1px dotted black;  margin:0px;background-color: lightgoldenrodyellow;text-align: center;">Специалност</legend>

    <table>
        <tr style="padding:0px;">
            <td style="padding-top:0px;">
                <div class="error"></div>
                <input type="text" id="spec-name" size="30" placeholder="Въведете вид специалност"></td>
            <td><input type="hidden" value="" id="hidden-id"></td>
        </tr>
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
    <div id="title-container">
        <span>Специалности</span>
        <span id="add-new" class="right" style="cursor:pointer;">
            <img src="images/add-user.png" style="width: 30px;margin-top:-5px;"> Добави нов
        </span>
    </div>
    <table  id="example" class="display compact" >
        <thead>
            <tr>
                <th>Специалност</th>
                <th>Специалист</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $count = 0;
            foreach ($specialnost as $value) {
                $class = $count++ % 2 == 0 ? "white" : "lightblue";
                echo"<tr class='" . $class . "'>";
                echo "<td>" . $value['name'] . "</td>";
                 echo "<td>" . $value['spec_name'] . "</td>";
                echo "<td style='float:right;'><button class='show-profile' onclick='edit(" . json_encode($value) . ")' >Редактирай</button>";
                echo "<button class='delete' title='ИЗТРИЙ'  onclick='del(" . $value['id'] . ")'><img src='images/junk.png' width='20'></button> </td>";
                echo "</tr>";
            }
            ?></tbody>
        <tfoot>
            <tr >
                <th>Специалност</th>
                  <th>Специалист</th>
                <th>Действия</th>
            </tr>	
        </tfoot>
    </table>
</div> <!-- DIV Table -->
<style>
    .overlay{
        z-index: 99;   
        position:absolute;
        left:0;
        background: rgba(255,255,255,.8);
        min-height: 100%; 
        min-width: 100%;
        height: 100%;
        width: 100%
    }
    .error{
        color:red;
        font-weight: bold;
        min-height: 1.5em;
    }
</style>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
        $("button").on("click", function () {
            if ($(this).hasClass("profile-close")) {
                $(".overlay").addClass("hidden");
                $("#popup1").addClass("hidden");
                $("#hidden-id").val("");
                $("#spec-name").val("");
            }
            if ($(this).attr("id") === "btnSave") {
                var result = checkAndSave();
            }
        });

        $("#add-new").on("click", function () {
            $(".overlay").removeClass("hidden");
            $("#popup1").removeClass("hidden");
        });

    });
    function checkAndSave() {
        var data = {
            action: "edit_specialist",
            id: $("#hidden-id").val(),
            name: $("#spec-name").val()
        }

        $.post('admin/admin_ajax.php', data, function (mhm) {
            al();
        });
    }

    function edit(arr) {

        $(".overlay").removeClass("hidden");
        $("#popup1").removeClass("hidden");
        $("#hidden-id").val(arr['id']);
        $("#spec-name").val(arr['name']);

    }

    function al() {
        $.confirm({
            title: 'Внимание',
            content: 'Специалистът беше записан',
            type: 'green',
            typeAnimated: true,
            buttons: {
                ок: {
                    text: 'Готово',
                    btnClass: 'btn-green',
                    action: function () {
                        window.location.href="admin.php";
                    }
                },
                close: function () {
                }
            }
        });
    }

    function del(id) {
        $.confirm({
            title: 'Внимание!',
            content: 'Сигурни ли сте, че искате да изтриете този специалист?',
            type: 'red',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'ИЗТРИЙ',
                    btnClass: 'btn-red',
                    action: function () {
                        var data = {
                            action: "delete_specialist",
                            id: id,
                        }

                        $.post('admin/admin_ajax.php', data, function (mhm) {
                            
                                $.confirm({
                                    title: 'Внимание!',
                                    content: "Записът беше изтрит",
                                    type: 'green',
                                    typeAnimated: true,
                                    buttons: {
                                        close: {
                                            text: 'OK',
                                            btnClass: 'btn-green',
                                            action: function () {
                                               window.location.href="admin.php";
                                            }
                                        }
                                    }
                                });
                            
                        }).fail(function () {
                            alert("Грешка!");
                        });
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