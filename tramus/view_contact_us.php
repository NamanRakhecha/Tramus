<?php require('webpage header.php') ?>

<?php
require('connect.php');
?>

<?php
$sql="select * from contact_us";
$res=mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);

if($num > 0){
	echo "<body style='background-color:#D5D5D1;'>";
	echo "<div class='container-fluid g-padding-y-150--xs'>";
	echo "<div class='row-fluid'>";		
		echo "<div style='overflow:auto;'>";

		echo "<table class='table table-bordered table-hover' style='background-color:lightblue;'>";
		echo "<tr style='background-color:#3393FF;'>";
		echo "<th>First Name</th>";
		echo "<th>Last Name</th>";
		echo "<th>Email</th>";
		echo "<th>Phone</th>";
		echo "<th>Message</th>";
		echo "</tr>";	
	
	while($row=mysqli_fetch_array($res))
	{
	
		echo "<tr>";
		echo "<td>",$row['First_Name'],"</td>";
		echo "<td>",$row['Last_Name'],"</td>";
		echo "<td>",$row['Email'],"</td>";
		echo "<td>",$row['Phone'],"</td>";
		echo "<td>",$row['Message'],"</td>";
		echo "</tr>";
	}
		echo "</table>";
		echo "</div>";

	
}
else
	echo "Empty Table";

	echo "</div>";
	echo "</div>";
	
	echo "</body>";

	
?>

<?php   require('webpage footer.php') ?>