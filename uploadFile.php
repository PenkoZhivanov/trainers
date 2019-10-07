<?php
session_start();
$errors = [];
if (isset($_FILES['image'])) {
     
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $fn = $_FILES['image']['name'];
    if (file_exists("images/" . $fn)) {
        $errors[] = "Снимка с това име вече съществува!";
    }
    $tmp = explode('.', $fn);
    $file_ext = strtolower(end($tmp));

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB\n';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "images/" . $file_name);
  //     echo "Success";
    } else {
        //       print_r($errors);
    }
 
}
$_SESSION['errors']= implode(" ! ", $errors); 
header("Location:gallery.php");