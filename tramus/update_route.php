<?php
require('connect.php');
$id=$_POST['id'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$via=$_POST['via'];
$sql="update `routes` set source='$source',destination='$destination',via='$via' where id='$id'";

if(mysqli_query($conn,$sql))
	header('location:show.php');
else
	echo mysql_error();
?>