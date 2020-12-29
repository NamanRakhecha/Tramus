<?php
$server="localhost";
$user ="root";
$pass="";
$db="bus_tracking_management";
$connection=mysqli_connect($server,$user,$pass)


 or die("Connection Problem".mysql_error());
mysqli_select_db($connection,$db);

?>