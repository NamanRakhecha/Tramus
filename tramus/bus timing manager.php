<?php
 require('webpage header.php');
require("connect.php");
$sql="select * from buses";
$res=mysqli_query($conn,$sql)
or die();
?>
<div  style="margin-top: 20%;">
<form>
	<select onchange="change()" id="busname">
	

<?php 

while($row=mysqli_fetch_array($res)){

echo "<option value=",$row[0],">",$row[1],"</option>";

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
<table cellspacing="4" cellpadding="10" border="3"><tr><th>Bus ID</th><th>Stop ID</th><th>Bus Timings</th><th>Trip No.</th><th>Trip Direction</th></tr>

<tr>
<form action="bus timing manager.php" method="get">
	<td><input type="" id="bid" name="bid">&nbsp</td>
	<td><input type="" id="sid" name="sid">&nbsp</td>
	<td><input type="time" name="time">&nbsp</td>
	<td><input type="" name="trip">&nbsp</td>
	<td><input type="" name="direction">&nbsp</td>
	<tr><td align="center" colspan="5"><input type="Submit" name=""></td></tr>
	

</form>
</tr></table></div></div>

<?php
if (isset($_GET['bid']) and isset($_GET['sid']) and isset($_GET['time']) and isset($_GET['trip']) and isset($_GET['direction'])) {
$bid=$_GET['bid'];
$sid=$_GET['sid'];
$time=$_GET['time'];
$trip=$_GET['trip'];
$direction=$_GET['direction'];
$sql="insert into bus_timing values('','$sid','$bid','$time','$trip','$direction')";
mysqli_query($conn,$sql)
or die ("Error Found".$sql." ".mysql_error());
}


$sql="select * from bus_timing";
$res=mysqli_query($conn,$sql);
echo "<table border='2px' style='margin-top:5%;' class='table table-hover  table-bordered' >

<tr><th>Bus ID</th><th>Stop ID</th><th>Timings</th><th>Trip No.</th><th>Direction</th><th>Delete</th></tr>

";

while($row=mysqli_fetch_array($res)){
	echo "
<tr><td>",$row[2],"</td><td>",$row[1],"</td><td>",$row[3],"</td><td>",$row[4],"</td><td>",$row[5],"</td><td><a href='delete timing.php?id=", $row['id'],"' id='delete' onclick='return confirm_del();'> Delete </a></td></tr>";
}

echo "</table>";

?>

<script type="text/javascript">
	function confirm_del(){
var x=confirm("Are you sure want to delete?");

if(x==true)
return true;
else
return false;
}

function confirm_del2(){
var x=confirm("Are you sure want to delete?");

if(x==true)
return true;
else
return false;
}
	function change(){
	document.getElementById('bid').value=document.getElementById('busname').value;
	
}
function change2(){
	document.getElementById('sid').value=document.getElementById('stopname').value;
}

</script>
<?php require('webpage footer.php');  ?>