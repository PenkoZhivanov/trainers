<?php
include_once '../db.php';
abstract class AdminEntity {

    protected $table ;
    protected $id = null;
    protected $name_field = null;

    public function __construct($id = null) {

        $this->db = new DB();

        if ($id != null) {
            $result = $this->db->getAll($this->table, " where id=" . $id);
            $this->id = $result[0]["id"];
            $this->name = $result[0][$name_field];
        }
    }

    public function getAll() {
        $result = $this->db->getAll($this->table);
        
        return $result;
    }
    
    public function save($params) {
        /* Валидация на полетата на формата за запис*/
        if (!validate($params)) {
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
    
     private function checkExists($param) {
        $output = false;
        $where = " WHERE ".$this->name_field."='" . $sport_name . "'";
        $result = $this->db->getAll("sport", $where);
        if (count($result) != 0) {
            $output = true;
        }
        return $output;
    }
    private function validate($param) {
        //override
    }

}
