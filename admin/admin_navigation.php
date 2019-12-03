<?php
    $style = array("users"=>"","trainers"=>"","news"=>"","sports"=>"");
    $style[$_SESSION['page']]="menu-active";
?>
<nav class="navbar navbar-default navbar-fixed-top"  > 
    <a class="navbar-brand" href="" style="float:left;font-weight: bold;">Администрация</a>
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
                <li><a class="menu-navigation <?=$style['users'];?>" data-id="users">ПОТРЕБИТЕЛИ</a></li>
                <li><a class="menu-navigation <?=$style['trainers'];?>" data-id="trainers">ТРЕНЬОРИ</a></li>
                <li><a class="menu-navigation <?=$style['news'];?>" data-id="news">СТАТИИ</a></li>
                <li><a class="menu-navigation <?=$style['sports'];?>" data-id="sports">СПОРТОВЕ</a></li>
                <li><a class="menu-navigation <?=$style['specialists'];?>" data-id="specialists">СПЕЦИАЛИСТИ</a></li>
                <li><a class="menu-navigation <?=$style['specialnosti'];?>" data-id="specialnosti">СПЕЦИАЛНОСТИ</a></li>
                <li><a class="menu-navigation" data-id="contacts">КОНТАКТИ</a></li>
                <li><div id="logged"></div></li>
                <li class="off">
                    <span class="glyphicon glyphicon-off" style="font-size:1.3em;color:white;"></span>
                </li>
            </ul>

        </div>
    </div>
</nav>
<div style="min-height: 60px; width: 100%"></div>