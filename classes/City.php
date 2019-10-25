<?php

class City {
       private $db = null;

    public function __construct() {
         
        $this->db = new DB();
    }

    public function getCities() {

        $result = $this->db->getAll("city");
        return $result;
    }

}
