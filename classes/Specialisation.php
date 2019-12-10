<?php

class Specialisation {

    private $db = null;

    public function __construct() {
        $this->db = new DB();
    }

    public function getAllSpecs() {
        return $this->db->query("SELECT sa.*, sb.id as spec_id, sb.name as spec_name FROM specialnost sa LEFT JOIN specialist sb on sb.id=sa.specialist_id");
    }

    public function saveSpecialisation($id, $name, $specId) {
        /* check if is new */
        if ($specId < 1) {
            return 0;
        }
        
        $sql = "SELECT * FROM specialnost WHERE name LIKE '" . $name . "' AND specialist_id=".$specId;
  
        
        $result = $this->db->query($sql);

        if (count($result) == 0 && (1 * (int) $id == 0)) {
            $sql = "INSERT INTO specialnost (`name`, `specialist_id`) VALUES('" . $name . "'," . $specId . ");";
        } elseif ((count($result) > 0) && 1 * (int) $id == 0) {
            return "Името съществува";
        } elseif (1 * (int) $id > 0) {
            $sql = "UPDATE specialnost SET name='" . $name . "' , specialist_id =".$specId." WHERE id=" . $id;
        }


        $this->db->query($sql);
        return 1;
    }

    public function delete($id) {
        $sql = "DELETE FROM specialnost WHERE id=" . $id;
        try {
            $this->db->query($sql);
            return 0;
        } catch (\mysql_xdevapi\Exception $e) {
            return 1;
        }
    }

}
