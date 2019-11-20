<?php

class Sport {
    private $db = null;
 
    public function __construct() {
         
        $this->db = new DB();
    }

    public function getSports() {

        $result = $this->db->getAll("sport");
        return $result;
    }
    
    public function saveSport($sport_name) {
        if(trim($sport_name)==""){
            return 0;
        }
        if($this->checkExists($sport_name)){
            return 1;
        }
        
        
    }
    private function checkExists($sport_name){
        $where = " WHERE sport_name ='".$sport_name."'";
        $result = $this->db->getAll("sport", $where) ;
        return $result;
    }
}
