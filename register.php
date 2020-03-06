s<?php
//include_once 'head.php';
//include_once 'navigation.php';
//include 'classes/User.php';
include_once 'functions.php';
include_once 'db.php';
//include_once 'classes/Country.php';
//include_once 'classes/City.php';
//
//$country = getCountries();
//$city = getCities();
$show = false;
$sp = array();
if (isset($_SESSION['error_email']) && $_SESSION['error_email'] == 1) {

    //  $sp = $_SESSION["post"];
    $show = true;
}
?>
<link  rel="stylesheet" type="text/css" href="css/register.css">
 <script src="pages/js/jquery.min.js"></script>
     <script src="pages/js/jquery-confirm.min.js"></script>
       <link rel="stylesheet" href="pages/css/jquery-confirm.min.css">

<div class="container1">
    <div class="main">
        <form class="form" method="post" action="#">
            <h2>Регистрация</h2>
            <label>Email :</label>
            <input type="email" name="demail" id="email" required="required" placeholder="Email"  autocomplete="off">
            <label>Парола :</label>
            <input type="password" name="password" id="password"value="" placeholder="Password"  autocomplete="off">
            <label>Потвърди парола :</label>
            <input type="password" name="cpassword" id="cpassword"  autocomplete="off">
            <input type="button" name="register" id="register" value="Регистрирай се">
        </form>
      <button id="button-back" >Обратно</button>
       <button id="button-clear" >Изчисти</button> 
    </div>


   <script src="js/register.js"></script>
</body>
</html>

