<?php

class Specialist {
   private $db = null;

    public function __construct() {
        $this->db = new DB();
    }

    public function getSpecialists() {
        return $this->db->getAll('specialist');
    }
}
