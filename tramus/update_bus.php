<?php
require('connect.php');
$id_reg_no=$_POST['id_reg_no'];
$bus_name=$_POST['bus_name'];
$drivers_id=$_POST['drivers_id'];
$stops_id=$_POST['stops_id'];
$status=$_POST['status'];

$sql="update `buses` set bus_name='$bus_name',status='$status' where id_reg_no='$id_reg_no'";

if(mysqli_query($conn,$sql))
	header('location:editBus.php');
else
    echo "<script type='text/javascript'>
       alert('Sorry! Cannot add this bus... Please try again !');
    </script>";

?>