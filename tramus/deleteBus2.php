<?php

require('connect.php');

if(isset($_GET['id_reg_no'])){
	$id_reg_no=$_GET['id_reg_no'];
	$sql="delete from buses where id_reg_no='".$id_reg_no."'";
	$res=mysqli_query($conn,$sql);
	
	if($res)
		header('location:deleteBus.php');
}

?>
