<?php

class Specialist {

    private $db = null;

    public function __construct() {
        $this->db = new DB();
    }

    public function getSpecialists() {
        return $this->db->getAll('specialist');
    }

    public function saveSpecialist($id, $name) {
        /* check if is new */
     
        $sql = "SELECT * FROM specialist WHERE name LIKE '" . $name . "'";
        $result = $this->db->query($sql);
      
        
        if (count($result)==0&&(1*(int)$id==0)) {
            $sql = "INSERT INTO specialist (`name`) VALUES('" . $name . "');";
        } elseif((count($result)>0)&&1*(int)$id==0){
            return "Името съществува";
        }elseif(1*(int)$id>0){
            $sql = "UPDATE specialist SET name='" . $name . "' WHERE id=" . $id;
        }
        
       // $this->db = new DB();
        $this->db->query($sql);
        return 1;
    }

}
