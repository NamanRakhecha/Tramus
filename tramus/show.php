<?php require('webpage header.php') ?>

<?php
require('connect.php');
?>

<?php
if (isset($_GET['stopname'])) {
	$sn=$_GET['stopname'];
	$ltd=$_GET['ltd'];
	$lng=$_GET['lng'];
	require('connect.php');
	$sql="insert into `stops` values('','$sn','$ltd','$lng')";

	mysqli_query($conn,$sql)
	or die();

}

?>
<?php
if (isset($_GET['src'])) {
	$src=$_GET['src'];
	$dst=$_GET['dst'];
	$via=$_GET['via'];
	require('connect.php');
	$sql="insert into `routes` values('','$src','$dst','$via')";

	mysqli_query($conn,$sql)
	or die();

}

?>

<style type="text/css">
th {
font-family:"Californian FB"; font-size:12pt; color:red;
}

h1 {
text-align:center; 
color:maroon;
}

a:hover {
color:red; font-size:16pt;

}
</style>

<script type="text/javascript" language="javascript">
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

</script>

</head>
<body bgcolor="lightblue">



<?php
$sql="select * from stops order by id";
$res=mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);

if($num > 0){
	echo " <div class='container g-padding-y-130--xs'>";
	echo "<caption><h1>bus stops</h1></caption>";
	echo "<table class='table table-hover' border='5' bordercolor='green' cellpadding='19' align='center' bgcolor='PaleGreen'>";
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>Stop Name</th>";
	echo "<th>Latitude</th>";
	echo "<th>Longitude</th>";
	echo "<th colspan='2'>Edit/Delete Details</th>";
	echo "</tr>";

	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>",$row['id'],"</td>";
	echo "<td>",$row['stop_name'],"</td>";
	echo "<td>",$row['latitude'],"</td>";
	echo "<td>",$row['longitude'],"</td>";
?>

	<td><a href='edit_busstop.php?id=<?php echo $row['id'] ?>'> Edit </a></td>
	<td><a href='delete_busstop.php?id=<?php echo $row['id'] ?>' id="delete" onclick="return confirm_del();"> Delete </a></td>
	

<?php
	echo "</tr>";
	}echo "<form action=show.php methos=get>
	<tr><td>></td><td>		<input   placeholder='Enter Stop Name' name='stopname' required></td><td><input   placeholder='enter latitude '  name='ltd'required></td><td><input   placeholder='enter longitude' name='lng' required></td><td colspan=1><input type=submit></td><td></td></tr>";
	echo "</table>
	

		
		
	</form>";
	echo "</div>";
}
else
	echo "Empty Table";
?>

<br>



<?php
$sql="select * from routes order by id";
$res=mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);

if($num > 0){
	echo " <div class='container g-padding-y-50--xs'>";
	echo "<caption><h1>Routes</h1></caption>";
	echo "<table class='table table-hover' border='5' bordercolor='green' cellpadding='19' align='center' bgcolor='PaleGreen'>";
	echo "<tr>";
	echo "<th>Id</th>";
	echo "<th>Source</th>";
	echo "<th>Destination</th>";
	echo "<th>Via</th>";
	echo "<th colspan='2'>Edit/Delete Details</th>";
	echo "</tr>";

	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>",$row['id'],"</td>";
	echo "<td>",$row['source'],"</td>";
	echo "<td>",$row['destination'],"</td>";
	echo "<td>",$row['via'],"</td>";
?>

	<td><a href='edit_route.php?id=<?php echo $row['id'] ?>'> Edit </a></td>
	<td><a href='delete.php?id=<?php echo $row['id'] ?>' id="delete" onclick="return confirm_del2();"> Delete </a></td>

<?php
	echo "</tr>";
	}
	echo "<form method='get' action='show.php'>
	<tr><td>&nbsp</td><td><input name='src' placeholder='Enter Source' required></td><td><input name='dst' placeholder='Enter Destination' required></td><td><input name='via' placeholder='Enter Via' required></td><td><input type=Submit></td><td></td></tr></form>";
	echo "</table>";
	echo "</div>";
}
else
	echo "Empty Table";
?>

<?php   require('webpage footer.php') ?>