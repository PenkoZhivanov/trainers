<?php
include_once 'classes/User.php';
include_once 'functions.php';
include_once 'classes/Country.php';
include_once 'classes/City.php';
include_once 'classes/Specialist.php';
include_once 'classes/Specialisation.php';

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


<fieldset id="popup" >
    <legend><h2 style="display:inline-table;">Профил на треньор</h2><span id="close-user-profile" > 
            <button title="Затвори" class="profile-close" ></button></span></legend>
    <form style="position:relative; top:0px; width: 600px; height: 450px;" name ="trainer-data" action="saveform.php" method ="POST" enctype="multipart/form-data" autocomplete="off">
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
                <td style="width: 250px;"><b>Кратка биография</b></td>
                <td>
                    <textarea name="trainer_bio" id="trainer_bio"></textarea>
                </td>
            </tr>

            <tr class="sr">
                <td class="bold">Oпит </td>
                <td> <textarea name="trainer_experience" id="trainer_experience"></textarea></td>

            </tr>
            <tr class="sr">
                <td class="bold">Начин на работа</td>
                <td> 
                    <select name="way_of_work">
                        <?php
                        foreach ($works as $value) {
                            echo "<option value='" . $value['id'] . "'>" . $value['name'] . "</option>\n";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr class="sr">
                <td class="bold">Месторабота</td>
                <td> <textarea name="work_address"></textarea></td>
            </tr>
            <tr class="sr"> 
                <td class="bold">Работно време</td>
                <td> <textarea name="work_time"></textarea></td>
            </tr>
            <tr class="sr"> 
                <td class="bold">Специалист</td>
                <td>
                    <select name="specialist" id="specialist">
                        <?php
                        foreach ($specialist as $value) {
                            echo "<option value='" . $value['id'] . "'>" . $value['name'] . "</option>\n";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr class="sr">
                <td >
                    <b>Специализация</b><br>
                </td>
                <td>
                    <select id="specialisation" name="specialisation" style="min-width:20em !important;">

                    </select>
                </td>
            </tr
            <tr>
                <td class="bold">Предимно работя с:</td>
                <td>
                    <input type="checkbox" name="wotkwithgorups"> Групи <br>
                    <input type="checkbox" name="wotkwithperson"> Индивидуално</td>
            </tr>
            <tr>
                <td class="bold">Работя с:</td>
                <td>
                    <input type="checkbox" name="wotkwithchildren"> Деца <br>
                    <input type="checkbox" name="wotkwithadultsamateurs"> Възрастни - аматьори<br>
                    <input type="checkbox" name="wotkwithproffesionalist"> Професионални състезатели</td>
            </tr>
            <tr>
                <td class="bold">Контакти:</td>
                <td>
                    <textarea name="contacts"></textarea></td>
            </tr>

            <tr>
                <td class="bold">Цена:</td>
                <td>
                    <input type="radio" name="price" value="1" /> $<br>
                    <input type="radio" name="price" value="2" /> $$<br>
                    <input type="radio" name="price" value="3" /> $$$<br>
                    <input type="radio" name="price" value="4" /> $$$$<br>
                    <br><b>
                        Или <input type="text" id="price-range-value">
                    <br>  <br>
                    <label for="price-range">1</label> <input type="range" id="price-range" name="price-range" min="1" max="444" style="width:300px;display:inline;"> 1000
                    </b>                
                </td>
                    
            </tr>


            <tr style="background-color: lightseagreen;"><td colspan="2"></td></tr>
            <tr>
                <td>
                    <button id="btnSave">Запиши</button></div>
                </td>
                <td>
                    <button class="profile-close">Затвори</button>
                </td>
            </tr> 

        </table>
    </form>
    <table>

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
        
        $("#price-range").on("input",function(){
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
ipt>