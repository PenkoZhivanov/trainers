<?php
include 'header.php';

  $country = getCountries();
   $city = getCities();
   $show=false;
   $sp = array();
   if(isset($_SESSION['error_email'])&& $_SESSION['error_email']==1){
       
       $sp = $_SESSION["post"];
        $show = true;
   }
 
?>
<style>
    .form_div{
    width:50%;margin:auto; padding:20px 60px ;border:1px solid grey;background-color: white;
             border-radius: 20px; border-radius: 20px;background-image: url(bg.jpg)
}
</style>

        <div class="form_div">  
          
            <h1>Форма за регистрация</h1>
            <hr>
            <form name ="trainer-data" action="saveform.php" method ="POST" enctype="multipart/form-data" autocomplete="off">
                <table>

                    <tr class="fr">
                        <td style="padding-right:30px; width:200px;" class="bold">
                            Име:<sup>*</sup>
                        </td>
                        <td>
                            <input type ="text" id="firstname"  name="firstname" value="<?php 
                            if(isset($sp['firstname'])){echo $sp['firstname'];} 
                            ?>"  required="requred" />
                            <label style="color:red;" id="firstname_error"></label>
                        </td>
                    <tr class="fr">
                        <td class="bold">
                            Фамилия:<sup>*</sup>
                        </td>
                        <td>
                            <input type ="text" id="lastname" name="lastname" required="requred"
                                   value="<?php
                                   if(isset($sp['lastname'])){echo $sp['lastname'];} 
                                   ?>"/>
                            <label style="color:red;" id="lastname_error"></label>
                        </td>
                    </tr>
                     <tr  class="fr">
                        <td class="bold">
                            Парола:
                        </td>
                        <td>
                            <input type="password" id="pass1" name="password">
                             <label style="color:red;" id="pass1_error"></label>
                        </td>
                    </tr>
                     <tr  class="fr">
                        <td class="bold">
                            Парола отново:
                        </td>
                        <td>
                            <input type="password" id="pass2" >
                             <label style="color:red;" name ="pass2" id="pass2_error"></label>
                        </td>
                    </tr>
                     <tr class="fr">
                        <td class="bold">email</td>
                        <td>
                            <input type="email" id="email" required="required" name="email" value="<?php 
                            if(isset($sp['email'])){
                                echo $sp['email'];
                            }?>"/>
                            <label style="color:red;"><?php
                                if(isset($_SESSION['error_email'])&&$_SESSION['error_email']!=0){
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
                                    <option value="<?= $country[$i]["countryid"]; ?>" <?php
                                    if($country[$i]["countryid"]==($sp1=isset($sp['country'])?$sp['country']:""))
                                    {echo "selected";}?>> <?= $country[$i]["country_name"]; ?> </option>  
                                <?php }
                                ?>

                            </select>
                        </td>
                    </tr>
                    <tr class="fr">
                        <td class="bold">Град</td>
                        <td>
                            <select name="city" id="city">
                                <?php foreach ($city as $value) { ?>
                                    <option value="<?= $value['cityid']; ?>"<?php
                                    if($value['cityid']==($sp1=isset($sp['city'])?$sp['city']:"")){echo "selected"; }
                                    ?>><?= $value['city_name']; ?></option>
                                <?php }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr class="fr">
                        <td class="bold">Адрес: </td>
                        <td>
                            <textarea name="address" id="address"><?php
                            if(isset($sp['address'])){
                                echo $sp['address'];
                            }
                            ?></textarea>
                        </td>
                    </tr>
                   
                    
                   
                        <tr class="fr">
                        <td class="bold">
                            Снимка
                        </td>
                        <td>
                            <input type="file" name="fileToUpload" id="fileToUpload"> </td>
                    </tr>

                    <tr class="sr">
                        <td style="width: 250px;"><b>Медицинска история</b><br>
                            <i><small>заболявания и проблеми за които треньорът или кинезитерапевта трябва да знаят</small></i></td>
                        <td>
                            <textarea name="medical_story"><?php
                            if(isset($sp['medical_story'])){
                                echo $sp['medical_story'];
                            } ?></textarea>
                        </td>
                    </tr>

                    <tr class="sr">
                        <td class="bold">Тренировъчен опит </td>
                        <td> <textarea name="training_experience"><?php
                            if(isset($sp['training_experience'])){
                                echo $sp['training_experience'];
                            }?></textarea></td>
                    </tr>
                    <tr class="sr">
                        <td class="bold">Вързраст</td>
                        <td> <input type="number" min="1" name="age" value="<?php if(isset($sp['age'])){ echo $sp['age'];}else {echo 1;}?>"></td>
                    </tr>
                    <tr class="sr">
                        <td class="bold">Килограми</td>
                        <td> <input type="number" min="1" name="weight" value="<?php if(isset($sp['weight'])){ echo $sp['weight'];}else {echo 1;}?>"></td>
                    </tr>
                    <tr class="sr">
                        <td class="bold">Височина</td>
                        <td> <input type="number" min="1" name="height" value="<?php if(isset($sp['height'])){ echo $sp['height'];}else {echo 1;}?>"></td>
                    </tr>
                    <tr class="sr"> 
                        <td class="bold">Цели</td>
                        <td> <textarea name="target"><?php if(isset($sp['target'])){ echo $sp['target'];}?></textarea></td>
                    </tr>
                    <tr class="sr">
                        <td >
                            <b>Възможност за тренировки</b><br>
                            <small><i>кога, къде, колко пъти седмично</i></small>
                        </td>
                        <td><textarea name="training"><?php if(isset($sp['training'])){ echo $sp['training'];}?></textarea></td>
                    </tr>
                    <tr class="sr">
                        <td class="bold">
                            Разкажете повече за вас
                        </td>
                        <td><textarea name="more_info"><?php if(isset($sp['more_info'])){ echo $sp['more_info'];}?></textarea></td>
                    </tr>
                

                </table>
                <hr>
                <input type="submit" class="sr"  value="Запиши" />
                <input type="button" class="fr" id="page2" value="Следваща страница" onclick="hide(2);"/>
                <input type="button" class="sr" id="page1" value="Предишна страница" onclick="hide(1);"/>
                <input type="reset" style="float:right;" value="Изчисти" />
            </form>
        </div>
       <?php if(isset($_SESSION['error_email'])){echo $_SESSION['error_email'];} ?>
        <script>
            function hide(page) {

                if (page == 2) {
               
                    if(!checkFirstPageFields()){ return;}
                    $(".fr").hide();
                    $(".sr").show();
                }else {
                    $(".fr").show();
                    $(".sr").hide();
                }
            }
            function checkFirstPageFields(){
                var check = true;
                if($("#firstname").val().length<3){
                    $("#firstname_error").text("Името е задължително");
                    check= false;
                }else{
                      $("#firstname_error").text("");
                }
                
                 if($("#lastname").val().length<3){
                    $("#lastname_error").text("Фамилията е задължителна");
                   check= false;
                }else{
                      $("#lastname_error").text("");
                }
                if($("#pass1").val().trim().length<1||$("#pass2").val().trim().length<1){
                    $("#pass1_error").text("Паролата е прекалено кратка");
                    check=false;
                }
                
                if($("#pass1").val() !== $("#pass2").val()){
                     $("#pass1_error").text("Паролите не съвпадат");
                     check=false;
                }
                return check;
                
            }
        </script>
    </body>
</html>

