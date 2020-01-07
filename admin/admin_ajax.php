<?php

include_once "../db.php";
include_once '../functions.php';

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if (!$action) {
    die();
}
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$specId = filter_input(INPUT_POST, 'spec_id', FILTER_SANITIZE_NUMBER_INT);
$user= filter_input(INPUT_POST,'user');

$out['error'] = null;

switch ($action) {
    case "save_user":
        include "../classes/User.php";
        break;
    case "edit_specialist":
        include_once '../classes/Specialist.php';
        $spec = new Specialist();
        return $spec->saveSpecialist($id, $name);

        break;
    case "delete_specialist":
        include_once '../classes/Specialist.php';
        $spec = new Specialist();
        return $spec->delete($id);

        break;
    case "save_specialnost":
        include_once '../classes/Specialisation.php';
        $specialnost = new Specialisation();
        return $specialnost->saveSpecialisation($id, $name, $specId);

        break;
    case "delete_specialnost":
        include_once '../classes/Specialisation.php';
        $specialnost = new Specialisation();
        return $specialnost->delete($id);
        break;
    case "get_specialnost":
        include_once '../classes/Specialisation.php';
        $specialnost = new Specialisation();
        $specialnosti  = $specialnost->getAllSpecs(" WHERE specialist_id=" . $id);
       
        $output = "";
        if(!$specialnosti){
            $output = "<option value='0'>Няма въведени специализации</option>";
        }else{
            $output="";
        }
        
        foreach ($specialnosti as $item) {
            $output .= "<option value='".$item['id']."'>".$item['name']."</option>";
        }
        echo $output;
        
        break;
    case "edit_sport":
        include_once '../classes/Sport.php';
        $sport = new Sport($id);

        break;
    case "save_sport":
        include_once '../classes/Sport.php';
        $data = print_r($id, true);
        if ($id < 1) {
            $sport = new Sport();
        } else {
            $sport = new Sport($id);
        }

        $result = $sport->saveSport($name);

        echo json_encode($result);


        break;
    case "delete_sport":
        include_once '../classes/Sport.php';
        $sport = new Sport($id);
        $sport->delete();
        break;
    default:
        break;
}

function check($db, $id, $name) {
    
}

function saveSpecialist($id, $name) {
    
}
