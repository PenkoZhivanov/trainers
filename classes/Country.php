<?php

class Country {

    private $db = null;

    public function __construct() {
         
        $this->db = new DB();
    }

    public function getCountries() {

        $result = $this->db->getAll("country");
        return $result;
    }

}
