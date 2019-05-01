<?php
session_start();
$naam=$_SESSION["username"];
$servername = "localhost";
$dbname = "sprdh";
$username="root";
$password="";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM `$naam`";

$result=mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
	echo("Table pehle se haio dude");
	  header("location:insertpower.php");
}
	
else{
$sql = "CREATE TABLE $naam (
appliance TEXT ,
	12hr int NOT NULL DEFAULT '0',
	13hr int NOT NULL DEFAULT '0',
	14hr int NOT NULL DEFAULT '0',
	15hr int NOT NULL DEFAULT '0',
	16hr int NOT NULL DEFAULT '0',
	17hr int NOT NULL DEFAULT '0',
	18hr int NOT NULL DEFAULT '0',
	19hr int NOT NULL DEFAULT '0',
	20hr int NOT NULL DEFAULT '0',
	21hr int NOT NULL DEFAULT '0',
	22hr int NOT NULL DEFAULT '0',
	23hr int NOT NULL DEFAULT '0',
	0hr int NOT NULL DEFAULT '0',
	1hr int NOT NULL DEFAULT '0',
	2hr int NOT NULL DEFAULT '0',
	3hr int NOT NULL DEFAULT '0',
	4hr int NOT NULL DEFAULT '0',
	5hr int NOT NULL DEFAULT '0',
	6hr int NOT NULL DEFAULT '0',
	7hr int NOT NULL DEFAULT '0',
	8hr int NOT NULL DEFAULT '0',
	9hr int NOT NULL DEFAULT '0',
	10hr int NOT NULL DEFAULT '0',
    11hr int NOT NULL DEFAULT '0',
	total int NOT NULL DEFAULT '0')";
	




if ($conn->query($sql) === TRUE) {
   
   echo "Table ".$naam." created successfully";
header("location:applianceadd.php");
   } else {
	    echo "Error creating table: " . $conn->error;
}
}
$conn->close();
?>