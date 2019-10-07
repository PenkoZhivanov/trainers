<?php

class User {

    private $db;
    private $table = "user";
    private $fields = [
        userid=>null,
        firstname=>null,
        lastname=>null,
        country=>null,
        city=>null,
        address=>null,
        email=>null,
        password=>null,
        medical_story=>null,
        training_experience=>null,
        age=>null,
        weight=>null,
        height=>null,
        target=>null,
        training=>null,
        more_info=>null,
        image=>null,
        isActive=>null,
        isAdmin=>null];

    function __construct() {
        include_once 'db.php';
        $this->db = new DB();
    }

    function getAllUsers( $where = null) {
        if ($where == null) {
            $sql = "SELECT * FROM user LEFT JOIN country ON countryid=country LEFT JOIN city ON cityid=city";
        } else {
            $sql = "SELECT * FROM user LEFT JOIN country ON countryid=country LEFT JOIN city ON cityid=city " . $where;
        }

        $result = $this->db->query($sql);
        return $result;
    }

    function getSpecifficUser($user_id = null, $user_email = null, $password = null) {
        $where = " WHERE 1 ";
        $orderBy = "";
        if ($user_id != null) {
            $where = $where . "AND userid = $user_id ";
        }
        if ($user_email != null) {
            $where = $where . " AND email = '$user_email' ";
        }
        if ($password != null) {
            $where = $where . " AND password ='$password' ";
        }

        $result = $this->db->getAll($this->table, $where, $orderBy);
        return $result;
    }

   
    function insert() {
        
    }
    
    function update(){
        
    }

}
