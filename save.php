<?php
$data = $_REQUEST['data'];
$fp = fopen('data.txt', 'w');
fwrite($fp, $data);
 
fclose($fp);

die;
 $uri =  substr($data,strpos($data,",")+1);
file_put_contents('wow.png', base64_decode($uri));