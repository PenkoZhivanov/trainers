
<fieldset id="popup" >
    <legend><h2 >Профил на треньор</h2><span id="close-user-profile" > 
            <button title="Затвори" class="profile-close" ></button></span></legend>
    <form id="trainer-data" name ="trainer-data" action="" method ="POST" enctype="multipart/form-data" autocomplete="off">
        <table>
            <tr><th id="first_header"></th><th id="second_header"></th></tr>
            <tr >
                <td style="padding-right:30px; width:200px;" class="bold">
                    Име:<sup>*</sup>
                </td>
                <td>
                    <input type ="text" id="firstname"  name="firstname"  required="requred" />
                    <label class="red" id="firstname_error"></label>
                </td>
            <tr >
                <td class="bold">
                    Фамилия:<sup>*</sup>
                </td>
                <td>
                    <input type ="text" id="lastname" name="lastname" required="requred"/>
                    <label class="red" id="lastname_error"></label>
                </td>
            </tr>

            <tr >
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
            <tr ><td class="bold"> Страна:</td>
                <td>
                    <select name="country" >
                        <?php for ($i = 0; $i < count($country); $i++) { ?>
                            <option value="<?= $country[$i]["countryid"]; ?>"><?= $country[$i]["country_name"]; ?></option>  
                        <?php } ?>

                    </select>
                </td>
            </tr>
            <tr >
                <td class="bold">Град</td>
                <td>
                    <select name="city" id="city">
                        <?php foreach ($city as $value) { ?>
                            <option value="<?= $value['cityid']; ?>"><?= $value['city_name']; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr >
                <td class="bold">Адрес: </td>
                <td>
                    <textarea name="address" id="address"></textarea>
                </td>
            </tr>


            <tr >
                <td class="bold">
                    Снимка
                </td>
                <td>
                    <img id="photo" width="80" src=""/>
                    <input type="file" name="fileToUpload" id="fileToUpload"> </td>
            </tr>

            <tr >
                <td style="width: 250px;"><b>Кратка биография</b></td>
                <td>
                    <textarea name="trainer_bio" id="trainer_bio"></textarea>
                </td>
            </tr>

            <tr >
                <td class="bold">Oпит </td>
                <td> <textarea name="trainer_experience" id="trainer_experience"></textarea></td>

            </tr>
            <tr >
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
            <tr >
                <td class="bold">Месторабота</td>
                <td> <textarea name="work_address"></textarea></td>
            </tr>
            <tr > 
                <td class="bold">Работно време</td>
                <td> <textarea name="work_time"></textarea></td>
            </tr>
            <tr > 
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
            <tr >
                <td >
                    <b>Специализация</b><br>
                </td>
                <td>
                    <select id="specialisation" name="specialisation" style="min-width:20em !important;">

                    </select>
                </td>
            </tr>
            <tr>
                <td class="bold">Предимно работя с:</td>
                <td>
                    <input type="checkbox" name="wotkwithgorups" id="wotkwithgorups"> <span class="chkboxes" onclick="wotkwithgorups.checked=!wotkwithgorups.checked;">Групи</span> <br>
                    <input type="checkbox" name="wotkwithperson" id="wotkwithperson"> <span class="chkboxes" onclick="wotkwithperson.checked=!wotkwithperson.checked;">Индивидуално</span></td>
            </tr>
            <tr>
                <td class="bold">Работя с:</td>
                <td>
                    <input type="checkbox" name="wotkwithchildren" id="wotkwithchildren"> <span class="chkboxes" onclick="wotkwithchildren.checked=!wotkwithchildren.checked;">Деца </span><br>
                    <input type="checkbox" name="wotkwithadultsamateurs" id="wotkwithadultsamateurs"> <span class="chkboxes" onclick="wotkwithadultsamateurs.checked=!wotkwithadultsamateurs.checked;">Възрастни - аматьори</span><br>
                    <input type="checkbox" name="wotkwithproffesionalist" id="wotkwithproffesionalist"> <span class="chkboxes" onclick="wotkwithproffesionalist.checked=!wotkwithproffesionalist.checked;">Професионални състезатели</span></td>
            </tr>
            <tr>
                <td class="bold">Контакти:</td>
                <td>
                    <textarea name="contacts"></textarea></td>
            </tr>

            <tr>
                <td class="bold">Цена:</td>
                <td>
                    <input type="radio" name="price" id="price1" value="1" /> <span class="chkboxes" onclick="price1.checked=true;">$</span><br>
                    <input type="radio" name="price" id="price2" value="2" /> <span  class="chkboxes" onclick="price2.checked=true;"> $$</span><br>
                    <input type="radio" name="price" id="price3" value="3" /><span class="chkboxes" onclick="price3.checked=true;"> $$$</span><br>
                    <input type="radio" name="price" id="price4" value="4" /> <span class="chkboxes" onclick="price4.checked=true;">$$$$</span><br>
                  
                </td>

            </tr>

            <tr style="background-color: lightseagreen;"><td colspan="2"></td></tr>

            <tr>
                <td>
                    <button type="submit" form="trainer-data" id="btnSave" >Запиши</button></div>
                </td>
                <td>
                    <button class="profile-close">Затвори</button>
                </td>
            </tr> 
        </table>  <br>
        <br>
    </form>

</fieldset>