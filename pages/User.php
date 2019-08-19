<?php

class User {
    
    private $db;
    private $table = "user";
    
    function __construct() {
         include_once 'db.php';
         $this->db = new DB();
        ;
    }
    
    function getAllUsers($user_id=null, $where=null){
        if($where==null){
            $sql = "SELECT * FROM user LEFT JOIN country ON countryid=country LEFT JOIN city ON cityid=city";
        }else {
            $sql = "SELECT * FROM user LEFT JOIN country ON countryid=country LEFT JOIN city ON cityid=city ".$where;
        }
        
        $result = $this->db->query($sql);
        return $result;
    }
    
    function getSpecifficUser($user_id=null,$user_email=null, $password =null){
        $where=" WHERE 1 ";
        $orderBy="";
        if($user_id!=null){
            $where=$where."AND userid = $user_id ";
        }
        if($user_email!=null){
            $where=$where." AND email = '$user_email' ";
        }
        if ($password!=null){
            $where=$where." AND password ='$password' ";
        }
        
        $result = $this->db->getAll($this->table, $where, $orderBy);
        return $result;
    }
    
    static function createTable(){
       
        $db = new DB();
        $sql = " CREATE TABLE IF NOT EXISTS `user` (`user_id` int(11) NOT NULL,
        `firstname` varchar(30) NOT NULL,
        `lastname` varchar(30) NOT NULL,
        `country` tinyint(4) NOT NULL,
        `address` varchar(255) NOT NULL,
        `email` varchar(100) NOT NULL,
        `medical_history` text NOT NULL,
        `training_experience` text NOT NULL,
        `age` tinyint(5) NOT NULL,
        `weight` tinyint(4) NOT NULL,
        `height` tinyint(4) NOT NULL,
        `targets` text NOT NULL,
        `training_option` text NOT NULL,
        `tell_more` text NOT NULL,
        `city` tinyint(4) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
         
        $db->query($sql);
        
    }
}
