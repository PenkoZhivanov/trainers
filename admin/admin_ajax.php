<?php
include_once "../db.php";
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if(!$action){
    die();
}
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

switch ($action) {
    case "edit_specialist":
        include_once '../classes/Specialist.php';
        $spec = new Specialist();
        return $spec->saveSpecialist($id,$name);
        
        break;
       case "delete_specialist":
        include_once '../classes/Specialist.php';
        $spec = new Specialist();
        return $spec->delete($id);
        
        break;
    
    default:
        break;
}

function check($db,$id,$name){
    
}

function saveSpecialist($id,$name){
    
}