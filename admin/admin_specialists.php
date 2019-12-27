<?php
include 'classes/Specialist.php';
include_once 'functions.php';

$specialnost = new Specialist();

/* DONT DO LIKE BELLOW ! */
$specialnost = $specialnost->getSpecialists();
//---------------------------------------------
?>   
<link rel="stylesheet" href="./admin/css/admin_users.css">
<div id="content-overlay" class="overlay hidden" style=""></div>

<div id="inputForm" class="col-md-4 col-md-offset-4 hidden" style="z-index: 200;">
    <form class="text-center border border-light p-5 border " style="width:350px; padding:10px;border:1px solid lightblue;border-top-left-radius: 5px; border-top-right-radius: 5px;" action="#!">
        <div style="min-width:100%; min-height: 20px; border-top-left-radius: 5px; border-top-right-radius: 5px; " class="btn-info"></div>
        <p class="h4 mb-4">Добавяне на  специалист</p>


        <!-- Name -->
        <label style="float:left;" for="spec-name">Специалист</label>
        <input type="text" id="spec-name" class="form-control mb-4" placeholder="Наименование на специалиста">

        <!-- Hidden id for edit  -->
        <input type="hidden" id="hidden-id"><br>
        <!-- Sign in button -->
        <button class="btn btn-info" id="btnSave" type="button">Запиши</button>  
        <button class="btn red-btn profile-close" type="button">Откажи</button>
    </form>
</div>



<div id="table-container">
    <div id="title-container">
        <span>Специалисти</span>
        <span id="add-new" class="right" style="cursor:pointer;">
            <img src="images/add-user.png" style="width: 30px;margin-top:-5px;"> Добави нов
        </span>
    </div>
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
            foreach ($specialnost as $value) {
                $class = $count++ % 2 == 0 ? "white" : "lightblue";
                echo"<tr class='" . $class . "'>";
                echo "<td>" . $value['name'] . "</td>";
                echo "<td style='float:right;'><button class='show-profile' onclick='edit(" . json_encode($value) . ")' >Редактирай</button>";
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
                $("#inputForm").addClass("hidden");
                $("#table-container").removeClass("hidden");
                $("#hidden-id").val("");
                $("#spec-name").val("");
            }
            if ($(this).attr("id") === "btnSave") {
                var result = checkAndSave();
            }
        });

        $("#add-new").on("click", function () {
            $(".h4").text("Добавяне на специалист");
            $(".overlay").removeClass("hidden");
            $("#inputForm").removeClass("hidden");
            $("#table-container").addClass("hidden");
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
        $(".h4").text("Редактиране на специалист");
        $(".overlay").removeClass("hidden");
        $("#inputForm").removeClass("hidden");
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
                        window.location.href = "admin.php";
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
                                            window.location.href = "admin.php";
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