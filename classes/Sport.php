<?php

class Sport {

    private $db = null;
    private $id;
    private $name;

    public function __construct($id = null) {

        $this->db = new DB();

        if ($id != null) {
            $result = $this->db->getAll("sport", " where id=" . $id);
           //$data=print_r($result,true);
           // log2file($data);
            $this->id = $result[0]["id"];
            $this->name = $result[0]["sport_name"];
        }
    }

    public function getSports() {

        $result = $this->db->getAll("sport");
        return $result;
    }

    public function saveSport($sport_name) {
        if (trim($sport_name) == "") {
            return 0;
        }

        if (!$this->checkExists($sport_name)) {
            if ($this->id != null) {
                 $sql = "UPDATE sport SET sport_name ='" . $sport_name . "' where id=".$this->id;
            } else {
                $sql = "INSERT INTO sport (sport_name) values('" . $sport_name . "')";
            }
            $this->db->query($sql);
        }else{
            return 1;
        }
    }
    
    public function delete(){
        $sql="DELETE FROM sport WHERE id=".$this->id;
          $this->db->query($sql);
    }

    private function checkExists($sport_name) {
        $output = false;
        $where = " WHERE sport_name ='" . $sport_name . "'";
        $result = $this->db->getAll("sport", $where);
        if (count($result) != 0) {
            $output = true;
        }
        return $output;
    }

}
