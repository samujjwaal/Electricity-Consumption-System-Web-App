<?php

$servername = "localhost";
$dbname = "update";
$username="root";
$password="";
$conn = new mysqli($servername, $username, $password, $dbname);


$file_name="master.csv";

$file = file($file_name); # read file into array
$count = count($file);
if($count > 0) # file is not empty
{
    $milestone_query = "INSERT into ashish1(userid,deviceid,power,voltage,time,date) values";
    $i = 1;
    foreach($file as $row)
    {
        $milestone = explode(',',$row);
        $milestone_query .= "('$milestone[2]',  '$milestone[6]',  '$milestone[7]',  '$milestone[9]',  '$milestone[10]',  '$milestone[11]')";
        $milestone_query .= $i < $count ? ',':'';
        $i++;
    }
    mysqli_query($conn,$milestone_query) or die(mysql_error());
}
?>