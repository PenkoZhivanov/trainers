<?php
include 'header.php';
include 'User.php';
$user = new User();
$users = $user->getAllUsers();
?>   
<style>
    .lightblue{
        background-color: azure;
    }
    .white {
        background-color: aliceblue;
    }
    td{
        padding:5px;
    }
    button {
        cursor:pointer;
    }

    #popup{
        position:relative;
        width:700px;
        height: auto;
        margin:auto;
        min-height: 600px;
        min-width: 600px;
        background-color: white;
        z-index: -1;

    }
    #huinq{
         position:relative;
        width:20px;
        height: auto;
        margin:auto;
  
        background-color: white;
      
    }
</style>
<div id="popup" style="display:none;">
    <div id="pop-con"></div>
    
</div>
<div id="huinq" >
    <button id="profile-close" style="display:none;background-color: lightcoral;">Затвори</button>
</div>
<div id="table-container" style="align-content: center;">
    <table style="margin:auto;width: 50%; ">

        <tr style="background-color: darkblue; color:yellow;">
            <th>Име</th>
            <th>Град</th>
            <th>Емайл</th>
            <th>Действия</th>
        </tr>
        <?php
        $count = 0;
        foreach ($users as $value) {
            $class = $count++ % 2 == 0 ? "white" : "lightblue";
            echo"<tr class='" . $class . "'>";
            echo "<td>" . $value['firstname'] . " " . $value['lastname'] . "</td>";
            echo "<td>" . $value['city_name'] . "</td>";
            echo "<td>" . $value['email'] . "</td>";
            echo "<td style='float:right;'><button id='b" . $value['userid'] . "' >Профил</button></td>";
            echo "</tr>";
        }
        ?>
    </table>

</div>
<script>
//    $(document).ready(function () {
//        $("button").on("click", function () {
//      
//            if (this.id == "profile-close") {
//                $("#table-container").show('slow');
//                $("#popup").hide('fast');
//                $("#profile-close").hide();
//            } else {
//                getProfile(this.id);
//                $("#table-container").hide('fast');
//                $("#popup").show('slow');
//                $("#profile-close").show("slow");
//            }
//        });
//    });
//    
//    function getProfile(id){
//        id=id.slice(1,id.lenght);
//        $.post("ajax.php", {action: "profile",id:id}, function(result){
//            $("#pop-con").html(result);
//        
//        });
//    
//    }
//    
// 
</script>