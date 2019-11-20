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
<fieldset style="position: relative; top:30px;overflow-style: auto;">
    <legend style="background-color: whitesmoke;">Спортове
        <span title="Добавяне на нов потребител" style="float:right;margin-right: 20px;">
            <img src="images/edit.png" width="35"> <span style="font-size:0.8em;float:" >Добави статия</span>
        </span>
    </legend>
    </fieldset>