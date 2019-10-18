<?php

class News {

    public function __construct() {
        ;
    }

    public function getNews($id=null) {
        include_once 'db.php';
        $db = new DB();
        $where="";
        if($id){
            $where = "WHERE id=".$id;
        }
        $sql = "SELECT news.*,CONCAT(user.firstname,' ', user.lastname) AS name FROM news LEFT JOIN user ON news.author = user.userid ".$where;
        $news = $db->query($sql);

        return $news;
    }

}
