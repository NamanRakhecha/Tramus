<?php
$server="localhost";
$user ="root";
$pass="";
$db="bus_tracking_management";
$connection=@mysql_connect($server,$user,$pass)


 or die("there was a problem connecting to the server ".mysql_error());
mysql_select_db($db,$connection);

?>