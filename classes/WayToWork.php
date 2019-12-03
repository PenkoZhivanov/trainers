<?php

/*
 * DON'T name classes like THIS !!!
 */

class WayToWork {

    private $db = null;

    public function __construct() {
        $this->db = new DB();
    }

    public function getWorks() {
        return $this->db->getAll('way_to_work');
    }

    public function saveWork($workName) {
        $sql = "SELECT * FROM way_to_work WHERE name LIKE '" . $workName . "'";
        $result = $this->db->query($sql);
        if (!$result) {
            $sql = "INSERT INTO way_to_work (`name`) VALUES('" . $workName . "');";
            $this->db->query($sql);
            return 1;
        }else{
            return 0;
        }
    }

}
