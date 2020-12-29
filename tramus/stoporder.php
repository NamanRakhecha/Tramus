<?php
 require('webpage header.php');
require("connect.php");
$sql="select * from routes";
$res=mysqli_query($conn,$sql)
or die();
?>

<div  style="margin-top: 20%;">
	<center><h2>Stop orders should be from destination to source</h2></center>
<form>
	<select onchange="change()" id="routeid">
	

<?php 

while($row=mysqli_fetch_array($res)){

echo "<option value=",$row[0],">",$row[2],"  -to-  ",$row[1]," -via- ",$row[3],"</option>";

}
?></select><select onclick="change2()" id="stopname"><?php

$sql="select * from stops";
$res=mysqli_query($conn,$sql)
or die();
while($row=mysqli_fetch_array($res)){
echo "<option value=",$row[0],">",$row[1],"</option>";
}


?></select></form>

<div style="border:2px solid black;">
<table cellspacing="4" cellpadding="10" border="3"><tr><th>route ID</th><th>Stop ID</th><th>Order</th></tr>

<tr>
<form action="stoporder.php" method="get">
	<td><input type="" id="rid" name="bid">&nbsp</td>
	<td><input type="" id="sid" name="sid">&nbsp</td>
	<td><input type="order" name="time">&nbsp</td>
	
	<tr><td align="center" colspan="5"><input type="Submit" name=""></td></tr>
</form>
</tr></table></div></div>

<?php
if (isset($_GET['bid']) and isset($_GET['sid']) and isset($_GET['time']) ) {
$bid=$_GET['bid'];
$sid=$_GET['sid'];
$time=$_GET['time'];

$sql="insert into stops_orders values('','$bid','$sid','$time')";
mysqli_query($conn,$sql)
or die ("Error Found".$sql." ".mysql_error());
}


$sql="select * from stops_orders";
$res=mysqli_query($conn,$sql);
echo "<table border='2px' style='margin-top:5%;' class='table table-hover  table-bordered' >

<tr><th>Route Id</th><th>Stop ID</th><th>Stop Order</th><th>Delete</th></tr>

";

while($row=mysqli_fetch_array($res)){
	echo "
<tr><td>",$row[1],"</td><td>",$row[2],"</td><td>",$row[3],"</td><td><a href='stoporder.php?deleteid=$row[0]'> Delete </a></td></tr>";
}
echo "</table>";

if(isset($_GET['deleteid'])){
	$val=$_GET['deleteid'];
$ssqqll="delete from stops_orders where id=$val";
mysqli_query($conn,$ssqqll);
}

?>

<script type="text/javascript">
	change();
	function change(){
	document.getElementById('rid').value=document.getElementById('routeid').value;
	
}
function change2(){
	document.getElementById('sid').value=document.getElementById('stopname').value;
}

</script>
<?php require('webpage footer.php');  ?>