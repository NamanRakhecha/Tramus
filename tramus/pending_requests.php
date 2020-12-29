<?php require('webpage header.php') ?>

<?php
require('connect.php');
?>

<script type="text/javascript" language="javascript">
function confirm_del(){
var x=confirm("Are you sure want to delete the request?");

if(x==true)
return true;
else
return false;
}
</script>

<?php
$sql="select * from unregistered_request";
$res=mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);

if($num > 0){
	echo "<body style='background-color:#D5D5D1;'>";
	echo "<div class='container-fluid g-padding-y-150--xs'>";
	echo "<div class='row-fluid'>";		
		
	while($row=mysqli_fetch_array($res))
	{
		echo "<div style='overflow:auto;'>";

		echo "<table class='table table-bordered table-hover' style='background-color:lightblue;'>";
		echo "<tr style='background-color:#3393FF;'>";
		echo "<th>Registration Id</th>";
		echo "<th>Designation</th>";
		echo "<th>First Name</th>";
		echo "<th>Last Name</th>";
		echo "<th>Email</th>";
		echo "<th>Phone</th>";
		echo "<th>House No.</th>";
		echo "<th>Building</th>";
		echo "</tr>";	

		echo "<tr>";
		echo "<td>",$row['registration_id'],"</td>";
		echo "<td>",$row['Designation'],"</td>";
		echo "<td>",$row['First_Name'],"</td>";
		echo "<td>",$row['Last_Name'],"</td>";
		echo "<td>",$row['Email'],"</td>";
		echo "<td>",$row['Phone'],"</td>";
		echo "<td>",$row['House_no'],"</td>";
		echo "<td>",$row['Building'],"</td>";
		echo "</table>";

		echo "<table class='table table-bordered table-hover' style='background-color:lightblue;'>";
		echo "<tr style='background-color:#3393FF;'>";
		echo "<th>City</th>";
		echo "<th>State</th>";
		echo "<th>Pincode</th>";
		echo "<th>Bus Name</th>";
		echo "<th>Registration Number</th>";
		echo "<th>Trips</th>";
		echo "<th>Start Point</th>";
		echo "<th>End Point</th>";
		echo "<th>Via</th>";					
		echo "</tr>";

		echo "<tr>";
		echo "<td>",$row['City'],"</td>";
		echo "<td>",$row['State'],"</td>";
		echo "<td>",$row['Pincode'],"</td>";
		echo "<td>",$row['Bus_name'],"</td>";
		echo "<td>",$row['Registration_number'],"</td>";
		echo "<td>",$row['Trips'],"</td>";
		echo "<td>",$row['Start_point'],"</td>";
		echo "<td>",$row['End_point'],"</td>";
		echo "<td>",$row['Via'],"</td>";

?>
	
<?php
		echo "</tr>";
		echo "</table>";
		echo "</div>";
?>
		<a href='bus registration manager.php?registration_id=<?php echo $row['registration_id'] ?>'><input type='button' class='btn btn-success btn-lg text-uppercase g-radius--50' value='Confirm' name='confirm'></a>

		<a href='delete_request.php?registration_id=<?php echo $row['registration_id'] ?>' onclick="return confirm_del();"><input type='button' class='btn btn-danger btn-lg text-uppercase ' value='Delete' name='delete'></a>

	<?php
		echo "<hr style='border-top: 5px double #FF1493'>";
	}
	
}
else
	echo "Empty Table";

	echo "</div>";
	echo "</div>";
	
	echo "</body>";
	

	
?>


<?php   require('webpage footer.php') ?>