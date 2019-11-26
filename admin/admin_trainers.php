<?php
include 'User.php';
include_once 'functions.php';
include_once 'classes/Country.php';
include_once 'classes/City.php';

$user = new User();
$country = new Country();
$city = new City();

/* DONT DO LIKE BELLOW ! */
$users = $user->getAllUsers("WHERE isTrainer=1");
$country = $country->getCountries(); // getCountries();
$city = $city->getCities();
?>   
<link rel="stylesheet" href="./admin/css/admin_users.css">
<script src="./admin/admin_users.js"></script>

<fieldset id="popup" >
    <legend><h2 style="display:inline-table;">Профил на потребител</h2><span id="close-user-profile" > 
            <button title="Затвори" class="profile-close" style=""></button></span></legend>
    <form style="z-index: 999;" name ="trainer-data" action="saveform.php" method ="POST" enctype="multipart/form-data" autocomplete="off">
        <table>
            <tr class="fr">
                <td style="padding-right:30px; width:200px;" class="bold">
                    Име:<sup>*</sup>
                </td>
                <td>
                    <input type ="text" id="firstname"  name="firstname"  required="requred" />
                    <label class="red" id="firstname_error"></label>
                </td>
            <tr class="fr">
                <td class="bold">
                    Фамилия:<sup>*</sup>
                </td>
                <td>
                    <input type ="text" id="lastname" name="lastname" required="requred"/>
                    <label class="red" id="lastname_error"></label>
                </td>
            </tr>

            <tr class="fr">
                <td class="bold">email</td>
                <td>
                    <input type="email" id="email" required="required" name="email" />
                    <label class="red"><?php
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
                <button class="profile-close">Затвори</button>
            </td>
        </tr> 
    </table>
</fieldset>

<div id="table-container">
    <div id="title-container"><span>Треньори</span><span id="add-new" class="right" style="cursor:pointer;">
            <img src="images/add-user.png" style="width: 30px;margin-top:-5px;"> Добави нов</span></div>
    <table  id="example" class="display compact" >
        <thead>
            <tr>
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
                $admin = $value['isAdmin'] == 0 ? "Обикновен" : "Администратор";

                $class = $count++ % 2 == 0 ? "white" : "lightblue";
                echo"<tr class='" . $class . "'>";
                echo "<td>" . $value['firstname'] . " " . $value['lastname'] . "</td>";
                echo "<td>" . $value['city_name'] . "</td>";
                echo "<td>" . $value['email'] . "</td>";
                echo "<td>" . $admin . "</td>";
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
                <th>Тип потребител</th>
                <th>Действия</th>
            </tr>	
        </tfoot>
    </table>
</div> <!-- DIV Table -->

