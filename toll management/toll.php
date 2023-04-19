<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con=mysqli_connect('127.0.0.1:3307','root','','toll'); 

// get the post records
$txtfname = $_POST['Name'];
$txtmname = $_POST['VehicleNumber'];
$txtlname = $_POST['Seater'];
$txtpwd = $_POST['Destination'];

// database insert SQL code
$sql = "INSERT INTO `toll_table` (`id`, `Name`, `VehicleNumber`, `Seater`, `Destination`) VALUES ('0', '$txtfname', '$txtmname', '$txtlname', '$txtpwd')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted <br> <br>";
	
}
$sql = 'SELECT * FROM toll_table';
   
   $retval = mysqli_query($con, $sql);
   
   
   
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
      echo "EMP ID :{$row['id']}  <br> ".
         "EMP First NAME : {$row['Name']} <br> ".
         "EMP middle name : {$row['VehicleNumber']} <br> ".
		 "EMP Last name : {$row['Seater']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
  
?>