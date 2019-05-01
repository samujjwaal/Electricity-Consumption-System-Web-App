<?php 
$unaam=$_REQUEST["uname"];
$fnaam=$_REQUEST["fname"];
$lnaam=$_REQUEST["lname"];
$phone=$_REQUEST["phn"];
$address=$_REQUEST["address"];
$mailid=$_REQUEST["email"];
$paswd=$_REQUEST["password"];


$cpassword=$_REQUEST["cpassword"];

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
	
if($paswd==$cpassword)
	{
		
		
		
		$result=mysqli_query($conn,$unaam);
		
		//if ($result->num_rows == 0) 
			//{
				$passwordmd5 = md5($paswd);
				$q="INSERT INTO `user`(`username`,`firstname`,`lastname`,`mob`,`address`,`email`,`password`,`type`) VALUES ('".$unaam."','".$fnaam."','".$lnaam."','".$phone."','".$address."','".$mailid."','".$passwordmd5."',0)";
				
				if(mysqli_query($conn,$q))
				{
					header("location:login.html");
				}

			//}	
		/*else 
			{
				header("location:uniqueusername.html");
			}
	*/
	}
	
	
else 
	{
		header("location:nomatch.html");
	}
$conn->close();
?>