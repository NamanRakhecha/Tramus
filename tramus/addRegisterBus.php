<?php
require('connect.php');

$Designation=$_POST['Designation'];
$First_Name=$_POST['First_Name'];
$Last_Name=$_POST['Last_Name'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$House_no=$_POST['House_no'];
$Building=$_POST['Building'];
$City=$_POST['City'];
$State=$_POST['State'];
$Pincode=$_POST['Pincode'];
$Bus_name=$_POST['Bus_name'];
$Registration_number=$_POST['Registration_number'];
$Trips=$_POST['Trips'];
$Start_point=$_POST['Start_point'];
$End_point=$_POST['End_point'];
$Via=$_POST['Via'];



$sql="insert into `unregistered_request`(`Designation`,`First_Name`,`Last_Name`,`Email`,`Phone`,`House_no`,`Building`,`City`,`State`,`Pincode`,`Bus_name`,`Registration_number`,`Trips`,`Start_point`,`End_point`,`Via`) VALUES('$Designation','$First_Name','$Last_Name','$Email','$Phone','$House_no','$Building','$City','$State','$Pincode','$Bus_name','$Registration_number','$Trips','$Start_point','$End_point','$Via')";

if(mysqli_query($conn,$sql))
{
	header('location:registerbus.php');
}
//else
	//echo mysqli_error();
	
?>