<?php

/*
 * action Users
 */
$action = filter_input(INPUT_POST, 'action');
$id = filter_input(INPUT_POST, 'id');
$email = filter_input(INPUT_POST, 'email');
$result = [
    'error' => null
];

include_once 'classes/User.php';
switch ($action) {
    case 'profile':
        $user = new User();
        echo json_encode($user->getSpecifficUser($id));
        break;
    case 'getnews':
        include_once 'News.php';
        getNews($id);
        break;
    case "login":
        login();
        break;
    case "register":
        $result = checkExistinUser($email);
        if (count($result) < 1) {
            echo 0;
        } else {
            echo json_encode($result);
        }

        break;
    default:
        break;
}

function checkExistinUser($email) {
    $user = new User();
    return $user->getSpecifficUser(null, $email);
}

function login() {
    $email = filter_input(INPUT_POST, 'email');
    $pass = filter_input(INPUT_POST, 'password');
    include_once './db.php';
    $db = new DB();
    $sql = "SELECT * FROM users WHERE email='" . $email . "' AND password = '" . $pass . "'";
    $result = $db->query($sql);

    if (count($result) < 1) {
        $result[0]['error'] = "Грешен потребител/парола";
    } else {
        $result[0]['error'] = "";
        $_SESSION['user'] = $result[0];
    }

    $output = json_encode($result[0]);
    echo $output;
}

function getNews($id) {
    include_once './db.php';
    $db = new DB();
    $sql = "SELECT * FROM news WHERE id=" . $id;
    $result = $db->query($sql);
    $output = json_encode($result[0]);
    echo $output;
}
