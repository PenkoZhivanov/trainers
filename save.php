<?php

$data = $_POST['data'];

$search='<img src="data';
$start=0;
while(strpos($data, $search,$start)>-1){
$position =strpos($data, $search,$start);
$code_start = strpos($data,',',$position);
$code_end = strpos($data,'"',$code_start);
 $code= substr($data, $code_start,$code_end-$code_start-1);
$data_filename = "data-filename=";
$iname_start_pos = strpos($data,$data_filename,$code_end); //data-filename
$iname_end_pos = strpos($data,"style",$iname_start_pos); // style=
 $substring_name = substr($data, $iname_start_pos, $iname_end_pos -$iname_start_pos);
 $name_arr= explode('"',$substring_name);
 $end_img = strpos($data,">",$iname_end_pos); 
  $replacement = substr($data,$position,$iname_end_pos-$position-1);
 $rep = "<img src='".$name_arr[1]."'";
 $data = str_replace($replacement, $rep, $data);
// $fp = fopen('data'.$name_arr[1].'.txt', 'w');
//
//
//  fwrite($fp, $code);
// fclose($fp);
  file_put_contents("images/".$name_arr[1], base64_decode($code));
}
//$fp = fopen('data1.txt', 'w');
// fwrite($fp, $data);
// fclose($fp);
 
// $fp = fopen('data2.txt', 'w');
//  fwrite($fp, $name_arr[1]);
// fclose($fp);

 //$uri =  substr($data,strpos($data,",")+1);

include 'db.php';
$db =new DB();
$sql = "INSERT INTO news (";
$db->query($sql);
function base64_to_jpeg($base64_string, $output_file) {
    // open the output file for writing
    $ifp = fopen( $output_file, 'wb' ); 

    // split the string on commas
    // $data[ 0 ] == "data:image/png;base64"
    // $data[ 1 ] == <actual base64 string>
    $data = explode( ',', $base64_string );

    // we could add validation here with ensuring count( $data ) > 1
    fwrite( $ifp, base64_decode( $data[ 1 ] ) );

    // clean up the file resource
    fclose( $ifp ); 

    return $output_file; 
}