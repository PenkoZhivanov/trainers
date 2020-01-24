<?php

class User {

    private $db;
    private $table = "user";

    function __construct() {

        $this->db = new DB();
    }

    function getAllUsers($where = null) {
        if ($where == null) {
        $sql = "SELECT * FROM user "
                    . "LEFT JOIN country ON country.countryid=user.countryid "
                    . "LEFT JOIN city ON city.cityid=user.cityid "
                    . "LEFT JOIN client ON client.client_userid = user.userid "
                    . "LEFT JOIN trainer t ON t.userid = user.userid WHERE isTrainer = 0";
            
        } else {
            $sql = "SELECT * FROM user "
                    . "LEFT JOIN country ON country.countryid=user.countryid "
                    . "LEFT JOIN city ON city.cityid=user.cityid "
                    . "LEFT JOIN client ON client.client_userid = user.userid "
                    . "LEFT JOIN trainer t ON t.userid = user.userid WHERE isTrainer=1";
       
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
        $where = $where." LIMIT 1";
        $result = $this->db->getAll($this->table, $where, $orderBy);
        return $result;
    }

    function save() {
        
    }

    function update() {
        
    }

}
