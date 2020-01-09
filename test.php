<?php

include_once 'classes/Form.php';
$frm=new Form();
$data=["type"=>"label","id"=>"test","value"=>null,"min"=>null,"max"=>null,"name"=>null,"text"=>"Huinq nqmawad", "required"=>null];
//$data[]=["type"=>"input","id"=>"test2","value"=>null,"min"=>null,"max"=>null,"name"=>"inputnekav","text"=>null, "required"=>"required"];
// $data[]=["type"=>"select","id"=>"test2","value"=>null,"min"=>null,"max"=>null,"name"=>"inputnekav","text"=>null, "required"=>"required", "action"=>null];
$frm->addElement($data);
$data=["type"=>"input","id"=>"test2","value"=>null,"min"=>null,"max"=>null,"name"=>"inputnekav","text"=>null, "required"=>"required"];
$frm->addElement($data);
$frm->print();