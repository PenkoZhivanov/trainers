<?php
include_once 'classes/User.php';
include_once 'functions.php';
include_once 'classes/Country.php';
include_once 'classes/City.php';
include_once 'classes/Specialist.php';
include_once 'classes/Specialisation.php';
pre($_POST);
$user = new User();
$country = new Country();
$city = new City();
$wayToWork = new WayToWork();
$works = $wayToWork->getWorks();


/* DONT DO LIKE BELLOW ! */
$users = $user->getAllUsers("WHERE isTrainer=1");
$country = $country->getCountries(); // getCountries();
$city = $city->getCities();

//--------
$specialist = new Specialist();
$specialist = $specialist->getSpecialists();
$specialnost = new Specialisation();
$specialnost = $specialnost->getAllSpecs();
?>   
<link rel="stylesheet" href="./admin/css/admin_users.css">
<script src="./admin/admin_users.js"></script>
<script src="./admin/js/w3.js"></script>
<style>
    td{
        border-bottom: 1px solid lightgrey;
        padding-bottom: 10px;
        padding-top: 10px;
    }
    input[type=checkbox],input[type=radio]{
        transform: scale(1.5);    
        margin:5px;
    }

    h2 {display:inline-table;}
    form{position:relative; top:0px; width: 600px; height: 450px;  }
    legend{border-top:2px solid grey;}
    #first_header{
        width:30%;
    }
    table, fieldset, legend, form{
        background-color: #fffffa;
    }
    .chkboxes{
        cursor:pointer;
    }
    .chkboxes:hover{
        color:gray;
    }
</style>

<div id="table-container">
    <div id="title-container"><span>Треньори</span><span id="add-new" class="right" style="cursor:pointer;">
            <img src="images/add-user.png" style="width: 30px;margin-top:-5px;"> Добави нов</span></div>
    <table  id="example" class="display compact" >
        <thead>
            <tr>
                <th>Име</th>
                <th>Град</th>
                <th>Емайл</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $count = 0;
            foreach ($users as $value) {
                $admin = $value['isAdmin'] == 0 ? "Обикновен" : "Администратор";

                $class = $count++ % 2 == 0 ? "white" : "lightblue";
                echo"<tr class='" . $class . "'>";
                echo "<td>" . $value['firstname'] . " " . $value['lastname'] . "</td>";
                echo "<td>" . $value['city_name'] . "</td>";
                echo "<td>" . $value['email'] . "</td>";
                echo "<td style='float:right;'><button class='show-profile' id='b" . $value['userid'] . "' >Профил</button>";
                echo "<button class='delete' title='ИЗТРИЙ' ><img src='images/junk.png' width='20'></button> </td>";
                echo "</tr>";
            }
            ?></tbody>
        <tfoot>
            <tr >
                <th>Име</th>
                <th>Град</th>
                <th>Емайл</th>
                <th>Действия</th>
            </tr>	
        </tfoot>
    </table>
</div> <!-- DIV Table -->

<script>
    $(document).ready(function () {
        fillSpecialnost();

        $("select#specialist").on("change", function () {
            fillSpecialnost();
        });

        $("#price-range").on("input", function () {
            $("#price-range-value").val($("#price-range").val());
        });
    });

    function fillSpecialnost() {
        var data = {
            action: "get_specialnost",
            id: $("#specialist").val()
        };

        $.post('admin/admin_ajax.php', data, function (mhm) {

            $("#specialisation").html(mhm);

        });


    }
</script>
