<?php
session_start();
$servername = "localhost";
$naam=$_REQUEST["u"];
$pasword=md5($_REQUEST["p"]);
$dbname = "sprdh";
$username="root";
$password="";
$_SESSION["username"]=$naam;
$conn = new mysqli($servername, $username, $password, $dbname);

$sql1 = "SELECT `username`, `password`,`type` FROM `user` WHERE username='".$naam."' && password='".$pasword."'";


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `user` WHERE username='".$naam."' && password='".$pasword."'";

$result=mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$email1=$row["email"];
$_SESSION["emailid"]=$email1;

$z1=$row["firstname"];
$_SESSION["fname"]=$z1;
$_SESSION["sname"]=$row["lastname"];
$_SESSION["mob"]=$row["mob"];
$_SESSION["address"]=$row["address"];
$_SESSION["sn"]=$row["sn"];
$_SESSION["type"]=$row["type"];
if($row["type"]==1)
{


header("location:dashboard.html"); 
}
else{
	header("location:test.php");
	
	
}
    }
   
else {
header("location:errorlogin.html"); 
}
$conn->close();
?>