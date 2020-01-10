<?php
include 'head.php';
include_once 'navigation.php';
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>


<!-- Login form -->
<div class="mcontainer">
    <div class="mmain">
        <form class="form" id="form-login" method="post" action="login_check.php" autocomplete="false">
            <h2>Вход</h2>
            <label>Email :</label>
            <input type="email" name="email" id="email" >
            <label>Password :</label>
            <input type="password" name="pass" id="current_password">
            <label id="login_error"></label>
            <input type="submit" name="login" id="login" value="Login">
            
        </form>
    </div>
</div>


<style>
    div.mcontainer{
        width: 320px;
        height: 610px;
        margin:50px auto;
        font-family: 'Droid Serif', serif;
        position:relative;

    }
    div.mmain{
        width: 320px;
        margin-top: 80px;
        float:left;
        padding: 10px 55px 40px;
        background-color: rgba(187, 255, 184, 0.65);
        border: 15px solid white;
        box-shadow: 0 0 10px;
        border-radius: 2px;
        font-size: 13px;
    }
    input[type=text],[type=password], [type=email] {
        width: 97.7%;
        height: 34px;
        padding-left: 5px;
        margin-bottom: 20px;
        margin-top: 8px;
        box-shadow: 0 0 5px #00F5FF;
        border: 2px solid #00F5FF;
        color: #4f4f4f;
        font-size: 16px;
    }
    label{
        color: #464646;
        text-shadow: 0 1px 0 #fff;
        font-size: 14px;
        font-weight: bold;
    }
    #login {
        width: 100%;
        background: linear-gradient(#22abe9 5%, #36caf0 100%);
        border: 1px solid #0F799E;
        font-size: 20px;
        margin-top: 15px;
        padding: 8px;
        font-weight: bold;
        cursor: pointer;
        color: white;
        text-shadow: 0px 1px 0px #13506D;
    }
    #login:hover{
        background: linear-gradient(#36caf0 5%, #22abe9 100%);
    }
    #login_error{
        font-weight: bold;
        color:red;
    }
    h2{
        text-align: center;
        font-size: 24px;
    }
</style>
<script>
    $(document).ready(function(){
        $("form#email").val();
    });
    </script>