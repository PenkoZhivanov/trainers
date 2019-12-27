<?php
include_once 'classes/Sport.php';
$sport = new Sport();
$sports = $sport->getSports();
?>
<link rel="stylesheet" href="./admin/css/admin_users.css">

<div id="inputForm" class="col-md-4 col-md-offset-4 hidden" style="z-index: 200;">
    <form class="text-center border border-light p-5 border " style="width:350px; padding:10px;border:1px solid lightblue;border-top-left-radius: 5px; border-top-right-radius: 5px;" action="#!">
        <div style="min-width:100%; min-height: 20px; border-top-left-radius: 5px; border-top-right-radius: 5px; " class="btn-info"></div>
        <p class="h4 mb-4">Добавяне на спорт</p>

        <!-- Name -->
        <label style="float:left;" for="spec-name">Спорт</label>
        <input type="text" id="spec-name" class="form-control mb-4" placeholder="Наименование на спорта">

        <!-- Hidden id for edit  -->
        <input type="hidden" id="hidden-id"><br>
        <!-- Sign in button -->
        <button class="btn btn-info" id="btnSave" type="button">Запиши</button>  
        <button class="btn red-btn profile-close" type="button">Откажи</button>
    </form>
</div>

<div id="table-container">
    <div id="title-container">
        <span>Спортове</span>
        <span id="add-new" class="right" style="cursor:pointer;">
            <img src="images/add-user.png" style="width: 30px;margin-top:-5px;"> Добави нов
        </span>
    </div>
    <table  id="example" class="display compact"   >
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
                echo "<button class='action-button edit' title='РЕДАКТИРАЙ' data-id='";
                echo json_encode($value);
                echo "' ><img src='images/edit.png' width='20'> Редактирай</button>";
                echo "<button class='action-button delete' title='ИЗТРИЙ' data-id='" . $value['id'] . "' ><img src='images/junk.png' width='20'> Изтрий</button> </td>";
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
<script src="./admin/js/admin_sports.js1" type="text/javascript"></script>
<style>
    .delete {
        margin: 5px 5px;
        display: inline;
        background-color: white !important;
        margin: 0px 10px;
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
            if ($(this).hasClass("edit")) {
                $(".h4").text("Редактиране на спорт");
                var arr = JSON.parse($(this).attr("data-id"));
                  $("#table-container").addClass("hidden");
                $("#inputForm").removeClass("hidden");
                $("#hidden-id").val(arr['id']);
                $("#spec-name").val(arr['sport_name']);
            }
        });

        $("#add-new").on("click", function () {
            $(".h4").text("Добавяне на спорт");
            $(".overlay").removeClass("hidden");
             $("#table-container").addClass("hidden");
            $("#inputForm").removeClass("hidden");
            $("#table-container").addClass("hidden");
        });

    });
    function checkAndSave() {
        var data = {
            action: "save_sport",
            id: $("#hidden-id").val(),
            name: $("#spec-name").val()
        }

        $.post('admin/admin_ajax.php', data, function (mhm) {
            alert(mhm);
            al();
        });
    }



    function al() {
        $.confirm({
            title: 'Внимание',
            content: 'Спортът беше записан',
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
            content: 'Сигурни ли сте, че искате да изтриете този спорт?',
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