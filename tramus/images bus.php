<?php
require('connect.php');

$sql="select * from bus_images";
$res=mysqli_query($conn,$sql)
or die();
while ($row=mysqli_fetch_array($res)) {
	echo "<img src='$row[2]' width='100px' width='100px'>";
}

?>