<?php
session_start();
$naam=$_SESSION["username"];
//include database configuration file
include 'dbConfig.php';

//get records from database
$query = $db->query("SELECT * FROM $naam ");

if($query->num_rows > 0){
    $delimiter = ",";
	$g=$naam.".csv";
    $filename = $g;
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array('appliance','12hr','13hr','14hr','15hr','16hr','17hr','18hr','19hr','20hr','21hr','22hr','23hr','0hr','1hr','2hr','3hr','4hr','5hr','6hr','7hr','8hr','9hr','10hr','11hr');
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        
        $lineData = array($row['appliance'],$row['12hr'],$row['13hr'],$row['14hr'],$row['15hr'],$row['16hr'],$row['17hr'],$row['18hr'],$row['19hr'],$row['20hr'],$row['21hr'],$row['22hr'],$row['23hr'],$row['0hr'],$row['1hr'],$row['2hr'],$row['3hr'],$row['4hr'],$row['5hr'],$row['6hr'],$row['7hr'],$row['8hr'],$row['9hr'],$row['10hr'],$row['11hr']);
        fputcsv($f, $lineData, $delimiter);
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    
    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;

?>