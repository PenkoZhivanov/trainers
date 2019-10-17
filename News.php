<?php

class News {

    public function __construct() {
        ;
    }

    public function getNews() {
        include_once 'db.php';
        $db = new DB();
        $sql = "SELECT news.*,CONCAT(user.firstname,' ', user.lastname) AS name FROM news LEFT JOIN user ON news.author = user.userid";
        $news = $db->query($sql);

        return $news;
    }

}
