<?php
session_start();
include 'functions.php';
die;
// ------------------------ Check for existing user----------------

if (checkEmail($_POST['email'])) {

    $_SESSION['error_email'] = 1;
    $_SESSION['post'] = $_POST;
    header("location:register.php");
    die;
}
// ----------------------Upload file -------------------
if ($_FILES["fileToUpload"]["size"] > 0) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
 //   if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
 
    }else {
        $target_file = "uploads/unknown.jpg";
    }
// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

?>
<?php
$names = array("firstname" => "Име",
    "lastname" => "Фамилия",
    "address" => "Адрес", "country" => "Страна", "city" => "Град", "more_info" => "Повече информация",
    "medical_story" => "Медицинска история",
    "training_experience" => "Тренировъчен опит",
    "age" => "Възраст", "weight" => "Тегло", "height" => "Височина", "target" => "Цели", "training" => "Възможност за тренировки");
?>
<style>
    .blueback{
        background-color: aliceblue;
    }
    td:first-child{
        padding-right: 20px;
    }
</style>
<div style="width:50%;margin:auto; padding:20px 60px ;border:1px solid grey;background-color: white;
     border-radius: 20px; border-radius: 20px;background-image: url(bg.jpg)">  
    <table>
        <tr>
            <td>
                <img style="width: 150px;" src="<?= $target_file; ?>"
            </td>
        </tr>
        <?php
        $sql_data = '';
        $count = 0;
        unset($_POST['pass2']);

        foreach ($_POST as $key => $value) {
            $class = ( ++$count) % 2 == 0 ? '' : 'blueback';
            ?>
            <tr class="<?= $class; ?>">
                <td>
                    <?php
                    if ($key == "submit")
                        break;
                    if (isset($names[$key])) {
                        $key = $names[$key];
                    }
                    echo $key;
                    ?>   
                </td>
                <td>
                    <?= $value; ?>
                </td>
            </tr>

            <?php
            if ($key == "Възраст" || $key == "Тегло" || $key == "Височина") {
                $sql_data = $sql_data . $value . ",";
            } else {
                $sql_data = $sql_data . "'" . $value . "',";
            }
        }
        $columns = array_keys($_POST);


        $str = join(",", $columns);
      
         $sql = "INSERT INTO user($str,image ) VALUES($sql_data '$target_file')";
 
//$link = mysqli_connect("localhost", "root", "", "kalin");
        $db = new DB();
        $db->query($sql);
        ?>

    </table> 
</div>
<?php
header("location:users.php");


 