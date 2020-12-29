<?php
require("connect.php");

$id_reg_no =$_POST['id_reg_no'];

$query="DELETE from `buses`  where id_reg_no='$id_reg_no'";

$reselt = mysql_query($query,$connection)
or die ("error found".$query." ".mysql_error());


echo "the record has been deleted succefully".mysql_insert_id();


 ?>