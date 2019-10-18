<style> .menu-navigation{
        cursor:pointer;
    }
</style>
<script>
  
    </script>
<nav class="navbar navbar-default navbar-fixed-top" style="border-bottom:1px solid white;">
    <div class="container" >
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="#myPage">Logo</a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar" >
            <ul class="nav navbar-nav ">
                <li><a class="menu-navigation navbar-right" data-id="about">ЗА НАС</a></li>
                <li><a class="menu-navigation navbar-right" data-id="services" >УСЛУГИ</a></li>
                <li><a class="menu-navigation" data-id="portfolio">ПОЛЕЗНО</a></li>
                <li><a class="menu-navigation" data-id="contacts">КОНТАКТИ</a></li></ul>
            <span class="nav navbar-nav" style="float:right;"><?php if (isset($_SESSION['user'])) { ?>
                <li style="float:right;"><a class="menu-navigation" data-id="exit">ИЗХОД</a> </li>
                <?php } else {
                    ?>
                    <li style="display:inline;"><a data-id="enter" class="menu-navigation">ВХОД</a></li><li style="display:inline;"><a class="menu-navigation">РЕГИСТРАЦИЯ</a> </li>
                <?php } ?>
              
            </span>

        </div>
    </div>
</nav>



<!--<div class="jumbotron text-center">
    <h1>Welcome</h1> 
    <p> </p> 
<!-- <form class="form-inline">
     <div class="input-group">
         <input type="email" id="email" class="form-control" size="50" placeholder="Email Address" required>
         <div class="input-group-btn">
             <button type="button" class="btn btn-danger" id="login-btn">Login</button>
         </div>
     </div>
 </form>
</div> -->
<style>
    .bike {
        width: 100px;

        position: relative;
        -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
        -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
        -webkit-animation-iteration-count: 3; /* Safari 4.0 - 8.0 */
        animation-name: example;
        animation-duration: 14s;
        animation-iteration-count: 6;
    }
    /* Standard syntax */
    @keyframes example {
        0%   { left:0px; top:0px;}
        49% { left:90%; top:0%; transform: scaleX(1); }
        50%  { left:90%; top:0%; transform: scaleX(-1); }
        100% {left:0px; top:0px;   transform: scaleX(-1);     }
    }
</style>

<!-- Login form -->
<div class="mcontainer">
    <div class="mmain">
        <form class="form" method="post" action="login_check.php">
            <!--<h2>Вход в системата</h2> -->
            <label>Email :</label>
            <input type="text" name="email" id="email" >
            <label>Password :</label>
            <input type="password" name="password" id="password">
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
display:none;
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
input[type=text],[type=password] {
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
</style>

