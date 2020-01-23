<?php
include_once "../classes/User.php";
include_once '../functions.php';
include_once '../classes/Country.php';
include_once '../classes/City.php';
include_once '../classes/Specialist.php';
include_once '../classes/Specialisation.php';
include_once '../classes/WayToWork.php';

$user = new User();
$country = new Country();
$city = new City();
$wayToWork = new WayToWork();
$works = $wayToWork->getWorks();


/* DONT DO LIKE BELLOW ! */
//  $users = $user->getAllUsers("WHERE isTrainer=1");
$country = $country->getCountries(); // getCountries();
$city = $city->getCities();
$specialist = new Specialist();
$specialist = $specialist->getSpecialists();
$specialnost = new Specialisation();
$specialnost = $specialnost->getAllSpecs();
$countries = null;
/* Countries */
for ($i = 0; $i < count($country); $i++) {
    $mask = null;
    if ($country[$i]["country_name"] == "България"):
        $mask = "selected";
    endif;
    $countries = $countries . '<option value="' . $country[$i]["countryid"] . '"' . $mask . '>' . $country[$i]["country_name"] . '</option> ';
}

/* Cities */
$mask = null;
$cities=null;
for ($i = 0; $i < count($city); $i++) {
    $cities = $cities . '<option value="' . $city[$i]["cityid"] . '">' . $city[$i]["city_name"] . '</option> ';
}
// Way of work
$wtw = null;
foreach ($works as $value) {
    $wtw = $wtw . "<option value='" . $value['id'] . "'>" . $value['name'] . "</option>\n";
}

// Specialist
$spec = null;
foreach ($specialist as $value) {
    $spec .= "<option value='" . $value['id'] . "'>" . $value['name'] . "</option>\n";
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
        <title>Registration form</title>
        <link rel="stylesheet" type="text/css" href="view.css" media="all"></link>
        <script type="text/javascript" src="view.js"></script>
         <script src="../pages/js/jquery.min.js"></script>
        <script src="../pages/js/bootstrap.min.js"></script>
        <script src="../pages/js/jquery-confirm.min.js"></script>
    </head>
    <body id="main_body" >
        <img id="top" src="top.png" alt="">
        <div id="form_container">
            <h1>Регистрация на треньор</h1>
            <form id="form_96448" class="appnitro"  method="post" action="../reg.php">
                <div class="form_description">
                    <h2>Регистрация на треньор</h2>
                </div>						
                <ul >
                    <li id="li_1" >
                        <label class="description" for="element_1">Имена </label>
                        <span>
                            <input id="element_1_1" name= "firstname" class="element text" maxlength="255" size="8" value=""/>
                            <label>Име</label>
                        </span>
                        <span>
                            <input id="element_1_2" name= "lastname" class="element text" maxlength="255" size="14" value=""/>
                            <label>Фамилия</label>
                        </span> 
                    </li>		<li id="li_5" >
                        <label class="description" for="email">Email </label>
                        <div>
                            <input id="email" name="email" class="element text medium" type="text" maxlength="255" value=""/> 
                        </div> 
                    </li>		<li id="li_13" >
                        <label class="description" for="phone">Телефон </label>
                        <div>
                            <input id="phone" name="phone" class="element text medium" type="text" maxlength="255" value=""/> 
                        </div> 
                    </li>		<li id="li_7" >
                        <label class="description" for="element_7">Държава </label>
                        <div>
                            <select class="element select medium" id="country" name="country"> 
                                <?= $countries; ?>
                            </select>
                        </div> 
                    </li>		<li id="li_8" >
                        <label class="description" for="element_8">Град </label>
                        <div>
                            <select class="element select medium" id="city" name="city"> 
                                <?= $cities; ?>

                            </select>
                        </div> 
                    </li>		
                    <li id="li_9" >
                        <label class="description" for="address">Адрес </label>
                        <div>
                            <textarea id="address" name="address" class="element textarea medium"></textarea> 
                        </div> 
                    </li>		
                    <li id="li_10" >
                        <label class="description" for="experience">Опит </label>
                        <div>
                            <input id="element_10" name="experience" class="element text medium" type="text" maxlength="255" value=""/> 
                        </div> 
                    </li>		<li id="li_16" >
                        <label class="description" for="element_16">Начин на работа </label>
                        <select name="way_of_work">
                            <?= $wtw; ?>
                        </select>
                    </li>
                    <li id="li_11" >
                        <label class="description" for="element_11">Месторабота </label>
                        <div>
                            <textarea id="element_11" name="workaddress" class="element textarea medium"></textarea> 
                        </div><p class="guidelines" id="workaddress"><small>Място където се провеждат тренировките</small></p> 
                    </li>		
                    <li id="li_12" >
                        <label class="description" for="element_12">Работно време </label>
                        <div>
                            <textarea id="element_12" name="element_12" class="element textarea medium"></textarea> 
                        </div> 
                    </li>		
                    <li id="li_17" >
                        <label class="description" for="specialist">Специалист </label>
                        <select name="specialist" id="specialist">
                            <?= $spec; ?>
                        </select> 
                    </li>		
                    <li id="li_18" >
                          <label class="description" for="specialisation">Специалност </label>
                        <select id="specialisation" name="specialisation" style="min-width:20em !important;">

                        </select>
                    </li>		
                    <li id="li_19" >
                        <label class="description" for="element_19">Предимно работя </label>
                        <span>
                            <input id="wotkwithperson" name="wotkwithperson" class="element checkbox" type="checkbox" value="1" />
                            <label class="choice" for="wotkwithperson">Персонално</label>
                            <input id="wotkwithgorups" name="wotkwithgorups" class="element checkbox" type="checkbox" value="1" />
                            <label class="choice" for="wotkwithgorups">С групи</label>

                        </span> 
                    </li>		
                    <li id="li_20" >
                        <label class="description" for="element_20">Работя с </label>
                        <span>
                            <input id="wotkwithchildren" name="wotkwithchildren" class="element checkbox" type="checkbox" value="1" />
                            <label class="choice" for="wotkwithchildren">Деца</label>
                            <input id="wotkwithadultsamateurs" name="wotkwithadultsamateurs" class="element checkbox" type="checkbox" value="1" />
                            <label class="choice" for="wotkwithadultsamateurs">Възрастни - аматьори</label>
                            <input id="wotkwithproffesionalist" name="wotkwithproffesionalist" class="element checkbox" type="checkbox" value="1" />
                            <label class="choice" for="wotkwithproffesionalist">Професионални състезатели</label>

                        </span> 
                    </li>		<li id="li_14" >
                        <label class="description" for="element_14">Цена
                        </label>
                        <span class="symbol">&#8364;</span>
                        <span>
                            <input id="element_14_1" name="element_14_1" class="element text currency" size="10" value="" type="text" /> .		
                            <label for="element_14_1">Euros</label>
                        </span>
                        <span>
                            <input id="element_14_2" name="element_14_2" class="element text" size="2" maxlength="2" value="" type="text" />
                            <label for="element_14_2">Cents</label>
                        </span>

                    </li>		<li id="li_21" >
                        <label class="description" for="element_21">Цена </label>
                        <span>
                            <input id="element_21_1" name="price" class="element radio" type="radio" value="1" />
                            <label class="choice" for="element_21_1">$</label>
                            <input id="element_21_2" name="price" class="element radio" type="radio" value="2" />
                            <label class="choice" for="element_21_2">$$</label>
                            <input id="element_21_3" name="price" class="element radio" type="radio" value="3" />
                            <label class="choice" for="element_21_3">$$$</label>
                             <input id="element_21_4" name="price" class="element radio" type="radio" value="4" />
                            <label class="choice" for="element_21_4">$$$$</label>

                        </span> 
                    </li>		<li id="li_15" >
                        <label class="description" for="element_15">Сертификати </label>
                        <div>
                            <textarea id="element_15" name="element_15" class="element textarea medium"></textarea> 
                        </div> 
                    </li>

                    <li class="buttons">
                        <input type="hidden" name="form_id" value="96448" />

                        <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
                    </li>
                </ul>
            </form>	
            <div id="footer">
                Generated by <a href="http://www.phpform.org">pForm</a>
            </div>
        </div>
        <img id="bottom" src="bottom.png" alt="">
    </body>
</html>
<script>
    $(document).ready(function () {
        fillSpecialnost();

        $("select#specialist").on("change", function () {
            fillSpecialnost();
        });

       
    });

    function fillSpecialnost() {
        var data = {
            action: "get_specialnost",
            id: $("#specialist").val()
        };

        $.post('../admin/admin_ajax.php', data, function (mhm) {

            $("#specialisation").html(mhm);

        });


    }
</script>