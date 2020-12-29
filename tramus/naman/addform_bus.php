<?php
require("connect.php");
$bus_name =$_POST['bus_name'];

$id_reg_no =$_POST['id_registration'];

$query="INSERT INTO `buses` (`bus_name`,`id_reg_no`) VALUES('$bus_name','$id_reg_no')";

$reselt = mysql_query($query,$connection)
or die ("error found".$query." ".mysql_error());


echo "new record enetred successfully".mysql_insert_id();

echo "<script>";
echo "window.history.back()";
 echo "</script>";
?>