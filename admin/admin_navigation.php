<style> .menu-navigation{
        cursor:pointer;
    }
    a{
        font-weight: bold;
    }
</style>
<nav class="navbar navbar-default navbar-fixed-top"  > 
    <a class="navbar-brand" href="#myPage" style="float:left;">Администрация</a>
    <div class="container"  >
        <div class="navbar-header" >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar" >
            <ul class="nav navbar-nav navbar-right">
                <li><a  class="menu-navigation" data-id="about">ПОТРЕБИТЕЛИ</a></li>
                <li><a class="menu-navigation" data-id="services">ТРЕНЬОРИ</a></li>
                <li><a class="menu-navigation" data-id="portfolio">ПОЛЕЗНО</a></li>
                <li><a class="menu-navigation" data-id="contacts">КОНТАКТИ</a></li>
                <li><div id="logged"></div></li>
                <li class="off">
                    <span class="glyphicon glyphicon-off" style="font-size:1.3em;color:white;"></span>
                </li>
            </ul>

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