<?php

require('connect.php');

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="delete from stops where id='".$id."'";
	$res=mysqli_query($conn,$sql);
	
	if($res)
		header('location:show.php');
}

?>
