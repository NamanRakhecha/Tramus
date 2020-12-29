<?php require('webpage header.php')  ?>
<body style="overflow-x: scroll;">
	<?php
	$source=$_GET['txt-source']; 
	$destination=$_GET['txt-destination'];

	if ($source=="margao") {
		$id=41;
	}
	?>




<h4 style="padding-top: 20%;text-align: center;"><?php echo "$source";?> TO
<?php echo "$destination";?></h4>	


<?php	
$server="localhost";
$user ="root";
$pass="";
$db="bus_tracking_management";
$connection=mysqli_connect($server,$user,$pass)

 or die("connection main kuch gadbad hai".mysql_error());
mysqli_select_db($connection,$db);


 $sql= "select buses.bus_name,buses.id_reg_no,stops.id,stops.stop_name,bus_timing.trip_direction, bus_timing.bus_timings, routes.via,routes.source,routes.destination,bus_timing.trip from routes join stops_orders on stops_orders.route_id=routes.id join stops on stops.id=stops_orders.stop_id join bus_timing on bus_timing.stop_order_id=stops_orders.id join buses on buses.id_reg_no=bus_timing.bus_id where routes.source='$source' or routes.source='$destination' and routes.destination='$destination' or routes.destination='$source' and buses.status='1'";
	$res=mysqli_query($connection,$sql)
	or die("Query failed to execute".mysql_error());

if (mysqli_fetch_array($res)<=0) {
	echo "<div style=';
    top: 50%;
    left: 50%;
    width:30em;
    height:18em;
    margin-top: 9em; /*set to a negative number 1/2 of your height*/
    margin-left: 25em; /*set to a negative number 1/2 of your width*/
    '><h1 style='color:red'>404 Stop Not Found</h1>
	<h6>It looks like you have entered a non existing stop or it may not be in the databse...Try another Bus stop<br>SORRY FOR YOUR INCONVINENCE</h6></div>";
}else{
	echo "
<h1 style='padding-top: 10%;margin-left: 50%;transform: translateX(-25%);''>";

echo "</h1>";
echo "
	
	<table class='table table-hover  table-bordered'>";
	echo "<tr>";
echo "<th>Stop Name</th>";
echo "<th>Timings</th>";
echo "<th>Trip Number</th>";
echo "<th>Bus Name</th>";
echo "<th>Via</th>";
echo "<th>Going To</th>";

echo "<th>Track</th>";

echo "</tr>";
	
	while($row=mysqli_fetch_array($res))
{
echo "<tr>" ;
echo "<td>",$row[3],"</td>";
$time = strtotime($row[5]);
echo "<td>",date('g:i a', $time),"</td>";
echo "<td>",$row[9],"</td>";
echo "<td>",$row[0],"</td>";
echo "<td>",$row[6],"</td>";
echo "<td>";
if($row[4]==1){
	echo "$row[8]";
}else{
	echo "$row[7]";
}


echo "
</td>";
echo  "<td><button><a href='tracking.php?b_id=",$row[1],"&s_id=",$row[2],"'>Track</></button></td>";


echo "</tr>";
}
echo "</table>";
}
 mysqli_free_result($res);
	?>
		
     </body>
<?php  require('webpage footer.php')  ?>