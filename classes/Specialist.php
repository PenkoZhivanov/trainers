<?php

class Specialist {
   private $db = null;

    public function __construct() {
        $this->db = new DB();
    }

    public function getSpecialists() {
        return $this->db->getAll('specialist');
    }
    public function saveSpecialist($name) {
      $sql = "SELECT * FROM specialist WHERE name LIKE '" . $name . "'";
        $result = $this->db->query($sql);
        if (!$result) {
            $sql = "INSERT INTO specialist (`name`) VALUES('" . $name . "');";
            $this->db->query($sql);
            return 1;
        }else{
            return 0;
        }
    }
}
