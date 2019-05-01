<?php
function find_user($filename, $uid) {
    $f = fopen($filename, "r");
    $result = false;
	$j=0;
    while ($row = fgetcsv($f)) {
        if ($row[2] == $uid) {
            $result[$j] = $row;
            $j=$j+1;
        }
    }
    fclose($f);
    return $result;
}

$pick[]=find_user("sprdh.csv","chetanid");


print_r($pick);
$file = fopen("abc.csv", 'w');

fputcsv($file, array(
    'Sr.no','Username','Userid','email','registered mobile no','Address','SmartIOT Device ID','Power (in watt)','Maximum Current till date (in ampere)','Voltage','Time','Date'
)); 
foreach($pick as $row)
fputcsv($file,$row)


fclose($file);
//foreach($pick as $k=>$v) {
//$row = array ( $k, $v );
  //  fputcsv($file, $row);
    
//}




?>