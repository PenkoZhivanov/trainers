<?php
$data = $_POST['data'];
$replacer_link_start = '<a href="#">';
$replacer_link=null;
$replacer_link_end ='</a>';
$old=null;
$indexStart=null;
while(strpos($data,"]")>-1){
    $indexStart = strpos( $data,"[")+3;
    $indexEnd =  strpos( $data,"]")+3;
    $old = substr($data, $indexStart-3, $indexEnd-$indexStart+1);
    $episode = substr($old, 1, strlen($old)-2);
    $link = $replacer_link_start.$episode.$replacer_link_end;
   $data =str_replace($old,$link,$data);     
}

echo $data;