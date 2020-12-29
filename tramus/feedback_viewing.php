<?php require('webpage header.php');?>
<?php
require("connection.php");



$name =$_POST['bus_name'];

$star =$_POST['rating'];

$feedback =$_POST['feedback'];


$sql="select id_reg_no from buses where bus_name='$name'";
$re=mysqli_query($connection,$sql)
or die();
$r=mysqli_fetch_array($re);

$query="INSERT INTO `feedback` VALUES('','$r[0]','$star','$feedback')";

$reselt = mysqli_query($connection,$query)
or die ("Error Found".$query." ".mysql_error());



require("feed.php");
?>
