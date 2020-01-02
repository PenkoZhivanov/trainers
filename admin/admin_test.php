<?php

include_once 'AdminEntity.php';
class Test extends AdminEntity{
    protected $id = null;
    protected $table = "city";

    public function validate($param) {
        echo $this->name_field;
    }
}

$v =  new Test();
var_dump($v->getAll());