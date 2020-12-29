<?php
require('connect.php');
$id=$_POST['id'];
$stop_name=$_POST['stop_name'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$sql="update `stops` set stop_name='$stop_name' where id='$id'";

if(mysqli_query($conn,$sql))
	header('location:show.php');
else
	echo mysql_error();
?>