<?php 
//include 'dbConfig.php';
session_start();
$naam=$_SESSION["username"];

$servername="localhost";
$username="root";
$password="";
$dbname="sprdh";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error)
	{
		echo 'conn';
		die("connection failed : " . $conn->connect_error);
	}
//	$query = "INSERT INTO `$naam`('12hr') VALUES (SELECT `power` FROM ashish1 where username='".$naam."')"; 
	//mysqli_query($conn,$query);

				$q="INSERT INTO `$naam`(`appliance`) VALUES ('001HALBUL000N')"; mysqli_query($conn,$q);
				$q="INSERT INTO `$naam`(`appliance`) VALUES ('002HALTUB001E')"; mysqli_query($conn,$q);
				$q="INSERT INTO `$naam`(`appliance`) VALUES ('001HALFAN002C')"; mysqli_query($conn,$q);
				$q="INSERT INTO `$naam`(`appliance`) VALUES ('003KITFAN003C')"; mysqli_query($conn,$q);
				$q="INSERT INTO `$naam`(`appliance`) VALUES ('004GPKTUB004C')"; mysqli_query($conn,$q);
				$q="INSERT INTO `$naam`(`appliance`) VALUES ('002HALTUB005E')"; mysqli_query($conn,$q);
				$q="INSERT INTO `$naam`(`appliance`) VALUES ('001HALFAN006C')"; mysqli_query($conn,$q);
				$q="INSERT INTO `$naam`(`appliance`) VALUES ('004GPKFAN007C')"; mysqli_query($conn,$q);
				$q="INSERT INTO `$naam`(`appliance`) VALUES ('002HALTUB008E')"; mysqli_query($conn,$q);
				$q="INSERT INTO `$naam`(`appliance`) VALUES ('totalhr')"; mysqli_query($conn,$q);
				
				$totalhr=0;
				$sql="SELECT SUM(12hr) as sum1 from $naam WHERE appliance is not 'totalhr'";
				$result=mysqli_query($conn,$sql);
				//$row=$result->fetch_assoc(); 
				$row= mysqli_fetch_array($result);
$ans=$row["sum1"];
				
				$sql="UPDATE `$naam` SET 12hr=$ans WHERE appliance is 'totalhr'";
				mysqli_query($conn,$sql);
				
header("location:insertpower.php");

if ($conn->query($sql) === TRUE) {
   
   echo "Inserted";

   } else {
	    echo "Not inserted" . $conn->error;
}






	
$conn->close();
?>