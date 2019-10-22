<?php
//include 'head.php';
include 'User.php';
include_once 'functions.php';

$user = new User();
$users = $user->getAllUsers();
$country = getCountries();
$city = getCities();
?>   
<style>
    .lightblue{
        background-color: azure;
    }
    .white {
        background-color: aliceblue;
    }
    td{
        padding:5px;
    }
    button {
        cursor:pointer;
    }

    #popup{
        position:relative;
        width:700px;
        height: auto;
        margin:auto;
        min-height: 600px;
        min-width: 600px;
        background-color: white;


    }
    #huinq{
        position:relative;
        width:20px;
        height: auto;
        margin:auto;
        background-color: white;
    }
    .bold{
        font-weight: bold;
    }
    .green{
        color:lime;
    }
    .red{
        color:#ff0080;
    }
    thead >tr, tfoot > tr {
        background-color:darkblue;
        color:yellow;
    }
</style>
<fieldset id="popup" style="display:none; 
          height: 600px;
          width: 25%;
          overflow-y: scroll;
          border-bottom: 1px solid black;
          border-top: 1px solid black;
          margin-bottom: 15px;
          margin-top: 55px;">
    <legend><h2>Профил на потребител</h2></legend>
    <form style="z-index: 999;" name ="trainer-data" action="saveform.php" method ="POST" enctype="multipart/form-data" autocomplete="off">
        <table>
            <tr class="fr">
                <td style="padding-right:30px; width:200px;" class="bold">
                    Име:<sup>*</sup>
                </td>
                <td>
                    <input type ="text" id="firstname"  name="firstname"  required="requred" />
                    <label style="color:red;" id="firstname_error"></label>
                </td>
            <tr class="fr">
                <td class="bold">
                    Фамилия:<sup>*</sup>
                </td>
                <td>
                    <input type ="text" id="lastname" name="lastname" required="requred"/>
                    <label style="color:red;" id="lastname_error"></label>
                </td>
            </tr>

            <tr class="fr">
                <td class="bold">email</td>
                <td>
                    <input type="email" id="email" required="required" name="email" />
                    <label style="color:red;"><?php
                        if (isset($_SESSION['error_email']) && $_SESSION['error_email'] != 0) {
                            echo "Има потребител с този емайл";
                        }
                        ?>
                    </label>
                </td>
            </tr>
            <tr class="fr"><td class="bold"> Страна:</td>
                <td>
                    <select name="country" >
                        <?php for ($i = 0; $i < count($country); $i++) { ?>
                            <option value="<?= $country[$i]["countryid"]; ?>"><?= $country[$i]["country_name"]; ?></option>  
                        <?php } ?>

                    </select>
                </td>
            </tr>
            <tr class="fr">
                <td class="bold">Град</td>
                <td>
                    <select name="city" id="city">
                        <?php foreach ($city as $value) { ?>
                            <option value="<?= $value['cityid']; ?>"><?= $value['city_name']; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr class="fr">
                <td class="bold">Адрес: </td>
                <td>
                    <textarea name="address" id="address"></textarea>
                </td>
            </tr>


            <tr class="fr">
                <td class="bold">
                    Снимка
                </td>
                <td>
                    <img id="photo" width="80" src=""/>
                    <input type="file" name="fileToUpload" id="fileToUpload"> </td>
            </tr>

            <tr class="sr">
                <td style="width: 250px;"><b>Медицинска история</b><br>
                    <i><small>заболявания и проблеми за които треньорът или кинезитерапевта трябва да знаят</small></i></td>
                <td>
                    <textarea name="medical_story" id="medical_story"></textarea>
                </td>
            </tr>

            <tr class="sr">
                <td class="bold">Тренировъчен опит </td>
                <td> <textarea name="training_experience" id="training_experience"></textarea></td>
            </tr>
            <tr class="sr">
                <td class="bold">Вързраст</td>
                <td> <input type="number" min="1" name="age" id="age" value=""></td>
            </tr>
            <tr class="sr">
                <td class="bold">Килограми</td>
                <td> <input type="number" min="1" id="weight" name="weight" value=""></td>
            </tr>
            <tr class="sr">
                <td class="bold">Височина</td>
                <td> <input type="number" min="1" id="height" name="height" value=""></td>
            </tr>
            <tr class="sr"> 
                <td class="bold">Цели</td>
                <td> <textarea name="target" id="target"></textarea></td>
            </tr>
            <tr class="sr">
                <td >
                    <b>Възможност за тренировки</b><br>
                    <small><i>кога, къде, колко пъти седмично</i></small>
                </td>
                <td><textarea name="training" id="training"></textarea></td>
            </tr>
            <tr class="sr">
                <td class="bold">
                    Разкажете повече за вас
                </td>
                <td><textarea name="more_info" id="more_info"></textarea></td>
            </tr>

        </table>
    </form>
<table>
        <tr>
            <td>
                <button id="btnSave">Запиши</button></div>
            </td>
            <td>
                <button id="profile-close">Затвори</button>
            </td>
        </tr> 
    </table>
</fieldset>


<fieldset id="table-container" style="align-content: center; margin-top: 55px; ">
    <legend style="background-color: whitesmoke; position:fixed;">Потребители
        <span style="float:right;margin-right:20px;cursor:pointer;" title="Добавяне на нов потребител" >
            <img src="images/add-user.png" width="35"> <span style="font-size:0.8em;" >Добави потребител</span>
        </span>
    </legend>
</fieldset>
<div style="position:relative;top:70px;height: 90%; overflow-y: scroll;">
    <table  id="example" class="display compact" style="margin-top: 230px;"  >
        <thead>
            <tr >
                <th>Име</th>
                <th>Град</th>
                <th>Емайл</th>
                <th>Тип потребител</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $count = 0;
            foreach ($users as $value) {
                $admin= $value['isAdmin']==0?"Обикновен":"Администратор";
                
                $class = $count++ % 2 == 0 ? "white" : "lightblue";
                echo"<tr class='" . $class . "'>";
                echo "<td>" . $value['firstname'] . " " . $value['lastname'] . "</td>";
                echo "<td>" . $value['city_name'] . "</td>";
                echo "<td>" . $value['email'] . "</td>";
                echo "<td>" . $admin. "</td>";
                echo "<td style='float:right;'><button class='show-profile' id='b" . $value['userid'] . "' >Профил</button></td>";
                echo "</tr>";
            }
            ?></tbody>
        <tfoot>
            <tr >
                <th>Име</th>
                <th>Град</th>
                <th>Емайл</th>
                <th>Тип потребител</th>
                <th>Действия</th>
            </tr>	
        </tfoot>
    </table>
</div> <!-- DIV Table -->


<script>
    $(document).ready(function () {
        $('#example').DataTable();
        $("button").on("click", function () {

            if (this.id === "profile-close") {
                $("#table-container").show('slow');
                $("#popup").hide('fast');
              
                return;
            }
            if (this.id == "menu-button") {
                return;
            }

            if (this.className == "show-profile") {
                getProfile(this.id);
                $("#table-container").hide('fast');
                $("#popup").show('slow');
                //$("#profile-close").show("slow");
            }
        });
    });

    function getProfile(id) {
        id = id.slice(1, id.lenght);
        $.post("ajax.php", {action: "profile", id: id}, function (result) {
            var encoded_result = JSON.parse(result)[0];
            $("#firstname").val(encoded_result["firstname"]);
            $("#lastname").val(encoded_result["lastname"]);
            $("#email").val(encoded_result["email"]);
            $('#country option[value="' + encoded_result["country"] + '"]').attr('selected', true);
            $('#city option[value="' + encoded_result["city"] + '"]').attr('selected', true);
            $("#address").val(encoded_result["address"]);
            $("#medical_story").val(encoded_result["medical_story"]);
            $("#training_experience").val(encoded_result["training_experience"]);
            $("#age").val(encoded_result["age"]);
            $("#weight").val(encoded_result["weight"]);
            $("#height").val(encoded_result["height"]);
            $("#target").val(encoded_result["target"]);
            $("#training").val(encoded_result["training"]);
            $("#more_info").val(encoded_result["more_info"]);
            $("#photo").attr('src', encoded_result["image"]);

        });

    }


</script>

