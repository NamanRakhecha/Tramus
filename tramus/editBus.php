<?php require('webpage header.php') ?>

<?php
require('connect.php');
?>


<?php
$sql="select * from buses";
$res=mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);

if($num > 0){
	echo "<body style='background-color:#47AC75;'>";       

	echo "<div class='container g-padding-y-150--xs'>";
		echo "<div class='row-fluid' style='overflow:auto;'>";
		echo "<div class='col-xs-12 col-md-12 col-sm-12 col-lg-12'>";
	
			echo "<table class='table table-bordered table-hover' style='background-color:lightblue;'>";
			echo "<tr style='background-color:#3393FF;'>";
			echo "<th>Bus Registration Number</th>";
			echo "<th>Bus Name</th>";
			echo "<th>Driver's Id</th>";
			echo "<th>Stop's Id</th>";
			echo "<th>Status</th>";	
			echo "<th>Modify Details</th>";
			echo "</tr>";

	while($row=mysqli_fetch_array($res))
	{
	echo "<tr>";
	echo "<td>",$row['id_reg_no'],"</td>";
	echo "<td>",$row['bus_name'],"</td>";
	echo "<td>",$row['drivers_id'],"</td>";
	echo "<td>",$row['stops_id'],"</td>";
	echo "<td>",$row['status'],"</td>";
?>
	<td><a href='editBus2.php?id_reg_no=<?php echo $row['id_reg_no'] ?>' style='color:red;'> Edit </a></td>
	
<?php
	echo "</tr>";
	}
	echo "</table>";
}
else
	echo "Empty Table";

	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</body>";
	
?>

<?php   require('webpage footer.php') ?>