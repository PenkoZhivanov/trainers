<?php
include_once "db.php";
 
 
$dbExists = false;
$link = new mysqli("127.0.0.1", "root", "", null);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    exit;
}
$sql = "SHOW DATABASES";
$result = $link->query($sql);


while ($row = $result->fetch_object()) {

    if ($row->Database == $db) {
        $dbExists = true;
    }
}

$result->close();
mysqli_close($link);
if (!$dbExists) {
//    echo "Няма създадена база с данни.<br>";
//    echo "Може да я създадето от тук: <a href='createDatabase.php'>Създай базата данни</a>";
}


?>

