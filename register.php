<?php
include_once 'head.php';
include_once 'navigation.php';
include 'User.php';
include_once 'functions.php';
include_once 'classes/Country.php';
include_once 'classes/City.php';

$country = getCountries();
$city = getCities();
$show = false;
$sp = array();
if (isset($_SESSION['error_email']) && $_SESSION['error_email'] == 1) {

    //  $sp = $_SESSION["post"];
    $show = true;
}
?>
<style>


    td {
        padding:5px 0px;
    }

    h2{
        text-align: center;
        font-size: 24px;
    }
    hr{
        margin-bottom: 30px;
    }
    div.container1{
        width: 320px;
        height: 610px;
        margin:50px auto;
        font-family: 'Droid Serif', serif;
        position:relative;
    }
    div.main{
        width: 320px;
        float:left;
        margin-top: 80px;
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
    #register {
        font-size: 20px;
        margin-top: 15px;
        background: linear-gradient(#22abe9 5%, #36caf0 100%);
        border: 1px solid #0F799E;
        padding: 7px 35px;
        color: white;
        text-shadow: 0px 1px 0px #13506D;
        font-weight: bold;
        border-radius: 2px;
        cursor: pointer;
        width: 100%;
    }
    #register:hover{
        background: linear-gradient(#36caf0 5%, #22abe9 100%);
    }
</style>


<div class="container1">
    <div class="main">
        <form class="form" method="post" action="#">
            <h2>Регистрация</h2>
            <label>Email :</label>
            <input type="email" name="demail" id="email" required="required">
            <label>Password :</label>
            <input type="password" name="password" id="password"value="" placeholder="Password">
            <label>Confirm Password :</label>
            <input type="password" name="cpassword" id="cpassword">
            <input type="button" name="register" id="register" value="Register">
        </form>
    </div>


    <script>
        $(document).ready(function () {
            $("#register").click(function () {

                var email = $("#email").val();
                var password = $("#password").val();
                var cpassword = $("#cpassword").val();
            console.log( $("#password"));
                if (email == '' || password == '' || cpassword == '') {
                    alert("Please fill all fields...!!!!!!");
                } else if ((password.length) < 8) {
                    
                    alert("Password should atleast 8 character in length...!!!!!!");
                } else if (!(password).match(cpassword)) {
                    alert("Your passwords don't match. Try again?");
                } else {
                    $.post("ajax.php", {
                        action:"register",
                        email1: email,
                        password1: password
                    }, function (data) {
                        if (data == 'You have Successfully Registered.....') {
                            $("form")[0].reset();
                        }
                        alert(data);
                    });
                }
            });
        });
    </script>
</body>
</html>

