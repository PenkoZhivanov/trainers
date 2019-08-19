<?php
include 'header.php';
?>

<style>

    #login_form{
        width:250px;;margin:auto; 
        padding:15px 30px ;border:1px solid grey;
        background-color: white;
        border-radius: 20px; 
        padding-top: 30px;

    }
</style>

<div id="login_form">  

    <form name ="logincheck" action="login_check.php" method ="POST">
        <table>
            <tr>
                <td style="padding-right:30px; width:auto;" class="bold">
                    Email:<sup>*</sup>
                </td>
                <td>
                    <input type ="email" 
                           id="email" 
                           name="email"  
                           value="" 
                           equired="requred" 
                           placeholder="Въведете email"
                           />

                </td>
            <tr  >
                <td class="bold">
                    Password:<sup>*</sup>
                </td>
                <td>
                    <input type ="password" id="password" name="password"  required="requred"/>
                    <label style="color:red;" id="lastname_error"></label>
                </td>
            </tr>
            <tr>
                <td></td><td style="float:right;">
                    <input type="submit"  name="submit" value="Влез" /></td>

            </tr>
            <tr><td colspan="2"><?php 
            if (isset($_SESSION['error_login']) && $_SESSION['error_login'] == 1) { 
                ?><label style="color:red;" id="error">Грешен потребител/парола</label>
            <?php } 
            ?></td></tr>

        </table>

    </form>
</div>

