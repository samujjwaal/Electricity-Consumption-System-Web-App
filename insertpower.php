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


$sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.12hr = t2.power
where
  t2.time>=12 && t2.time<13";
mysqli_query($conn,$sql);
  $sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.13hr = t2.power
where
  t2.time>=13 && t2.time<14";
mysqli_query($conn,$sql);

  $sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.14hr = t2.power
where
  t2.time>=14 && t2.time<15";
mysqli_query($conn,$sql);

  $sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.15hr = t2.power
where
  t2.time>=15 && t2.time<16";
mysqli_query($conn,$sql);

  $sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.16hr = t2.power
where
  t2.time>=16 && t2.time<17";
mysqli_query($conn,$sql);

  $sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.17hr = t2.power
where
  t2.time>=17 && t2.time<18";
mysqli_query($conn,$sql);

  $sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.18hr = t2.power
where
  t2.time>=18 && t2.time<19";
mysqli_query($conn,$sql);

  $sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.19hr = t2.power
where
  t2.time>=19 && t2.time<20";
mysqli_query($conn,$sql);

  $sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.20hr = t2.power
where
  t2.time>=21 && t2.time<22";
mysqli_query($conn,$sql);

  $sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.21hr = t2.power
where
  t2.time>=21 && t2.time<22";
mysqli_query($conn,$sql);

  $sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.22hr = t2.power
where
  t2.time>=22 && t2.time<23";
mysqli_query($conn,$sql);

  $sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.23hr = t2.power
where
  t2.time>=23 && t2.time<24";
mysqli_query($conn,$sql);

$sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.0hr = t2.power
where
  t2.time>=0 && t2.time<1";
mysqli_query($conn,$sql);

$sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.1hr = t2.power
where
  t2.time>=1 && t2.time<2";
mysqli_query($conn,$sql);

$sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.2hr = t2.power
where
  t2.time>=2 && t2.time<3";
mysqli_query($conn,$sql);

$sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.3hr = t2.power
where
  t2.time>=3 && t2.time<4";
mysqli_query($conn,$sql);

$sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.4hr = t2.power
where
  t2.time>=4 && t2.time<5";
mysqli_query($conn,$sql);

$sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.5hr = t2.power
where
  t2.time>=5 && t2.time<6";
mysqli_query($conn,$sql);

$sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.6hr = t2.power
where
  t2.time>=6 && t2.time<7";
mysqli_query($conn,$sql);

$sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.7hr = t2.power
where
  t2.time>7 && t2.time<8";
mysqli_query($conn,$sql);

$sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.8hr = t2.power
where
  t2.time>=8 && t2.time<9";
mysqli_query($conn,$sql);

$sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.9hr = t2.power
where
  t2.time>=9 && t2.time<10";
mysqli_query($conn,$sql);

$sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.10hr = t2.power
where
  t2.time>=10 && t2.time<11";
mysqli_query($conn,$sql);

$sql="update
  `$naam` t1
  join `ashish1` t2 on t2.iotdevice = t1.appliance
set
  t1.11hr = t2.power
where
  t2.time>=11 && t2.time<12";
  mysqli_query($conn,$sql);
/*
if ($conn->query($sql) === TRUE) {
   
   echo "Inserted";

   } else {
	    echo "Not inserted" . $conn->error;
}
*/

$sql="UPDATE `$naam` SET total=12hr + 13hr + 14hr + 15hr + 16hr + 17hr + 18hr + 19hr + 20hr + 21hr + 22hr + 23hr + 0hr + 1hr + 2hr + 3hr + 4hr + 5hr + 6hr + 7hr + 8hr + 9hr + 10hr + 11hr";
mysqli_query($conn,$sql);
/*
$totalhr=0;
				$sql="SELECT SUM(12hr) as sum1 from $naam WHERE appliance is not 'totalhr'";
				$result=mysqli_query($conn,$sql);
				//$row=$result->fetch_assoc(); 
				$row= mysql_fetch_array($result);
$ans=$row["sum1"];
				
				$sql="UPDATE `$naam` SET 12hr=$ans WHERE appliance is 'totalhr'";
				mysqli_query($conn,$sql);
*/

$sql = "SELECT SUM(12hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 12hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(13hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 13hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(14hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 14hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(15hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 15hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(16hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 16hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(17hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 17hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(18hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 18hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(19hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 19hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(20hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 20hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(21hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 21hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(22hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 22hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(23hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 23hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(0hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 0hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(1hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 1hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(2hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 2hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(3hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 3hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);




$sql = "SELECT SUM(4hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 4hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(5hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 5hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(6hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 6hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(7hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 7hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(8hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 8hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(9hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 9hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

$sql = "SELECT SUM(10hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}

$sql="UPDATE `$naam` SET 11hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);
$sql = "SELECT SUM(2hr) as soma FROM `$naam` WHERE appliance!='totalhr'";
$result=mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
$row=$result->fetch_assoc();
$ans=$row["soma"];
}
$sql="UPDATE `$naam` SET 11hr=$ans WHERE appliance='totalhr'";
mysqli_query($conn,$sql);

header("location:dashboard.html");

$conn->close();
?>