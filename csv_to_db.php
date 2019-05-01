<?php

$servername = "localhost";
$dbname = "sprdh";
$username="root";
$password="";
$conn = new mysqli($servername, $username, $password, $dbname);


$file_name="master.csv";

$file = file($file_name); # read file into array
$count = count($file);
if($count > 0) # file is not empty
{
	
	
    $milestone_query = "INSERT into ashish1 (srno,username,userid,email,registered,address,iotdevice,power,current,voltage,time,date) values";
    $i = 1;
    foreach($file as $row)
    {
        $milestone = explode(',',$row);
        $milestone_query .= "('$milestone[0]',  '$milestone[1]',  '$milestone[2]',  '$milestone[3]',  '$milestone[4]',  '$milestone[5]',  '$milestone[6]',  '$milestone[7]',  '$milestone[8]',  '$milestone[9]',  '$milestone[10]',  '$milestone[11]')";
        $milestone_query .= $i < $count ? ',':'';
        $i++;
    }
    mysqli_query($conn,$milestone_query) or die(mysql_error());
}
?>