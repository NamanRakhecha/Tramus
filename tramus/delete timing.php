<?php

require('connect.php');

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="delete from bus_timing where id='".$id."'";
	$res=mysqli_query($conn,$sql);
	
	if($res)
		header('location:bus timing manager.php');
}

?>
