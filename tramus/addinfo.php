	<?php  
	require 'connect.php';
	if (isset($_GET['registrationno']) or isset($_GET['name']) or isset($_GET['status']) or isset($_GET['driverid'])) {
	$b1=$_GET['registrationno'];
	$b2=$_GET['name'];
	$b3=$_GET['status'];
	$b4=$_GET['driverid'];
	$sql="insert into buses values('$b1','$b2','$b4','22','$b3')";
	mysqli_query($conn,$sql)
	or die ("error found".$sql." ".mysql_error());
	

}
?>