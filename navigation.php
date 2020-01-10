<style> .menu-navigation{
        cursor:pointer;
    }
</style>

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
                    <li style="display:inline;"><a data-id="enter" class="menu-navigation">ВХОД</a></li>
                    <li style="display:inline;"><a data-id="registration" class="menu-navigation">РЕГИСТРАЦИЯ</a></li>
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


