<?php

$con=mysqli_connect('localhost','root','','pharmacy_db');          // pharmacy_db database name
                    // ith check krsil ektr localhost asnar or asa tak 127.0.0.1:3306                                             
$name=$_POST['name'];
$expiry=$_POST['expiry'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];

$sql= "INSERT INTO `pharmacy_db`(`id`,`name`,`expiry`,`price`,`quantity`) VALUES ('0','$name','$expiry','$price','$quantity')";  // pharmacy_db table name  // no of columns-5
                                                                   // Name- (id,name,expiry,price,quantity)
$rs=mysqli_query($con,$sql);                                         // Make type of varchar except id
                                                                    // Make length 15   // tick A.I of id 
if($rs){
    echo "Entry added<br>";
}

$sql="SELECT * FROM `pharmacy_db`";

$retval=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($retval)){
    echo "Name of medicine:{$row['name']} <br>".
    "Quantity:{$row['quantity']}<br>".
    "--------------------------------<br>";

}


?>


