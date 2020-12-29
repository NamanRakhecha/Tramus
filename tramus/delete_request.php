<?php

require('connect.php');

if(isset($_GET['registration_id'])){
	$id=$_GET['registration_id'];
	$sql="delete from unregistered_request where registration_id='".$id."'";
	$res=mysqli_query($conn,$sql);
	
	if($res)
		header('location:pending_requests.php');
}

?>
