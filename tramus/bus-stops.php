  	<?php 
	require('webpage header.php');?><body style="overflow-x: scroll;"> <?php 
	$name=$_GET['txt-bus-stop-name'];
	$name= str_replace( '_', ' ', $name );
	
	// $name=lcfirst($name);
	?>
	
	
	<?php   
	
	$server="localhost";
$user ="root";
$pass="";
$db="bus_tracking_management";
$connection=mysqli_connect($server,$user,$pass)

 or die("Connection Problem".mysql_error());
mysqli_select_db($connection,$db);


	$sql="select buses.bus_name, bus_timing.bus_timings,routes.source,routes.destination,bus_timing.trip from stops join stops_orders on stops.id=stops_orders.stop_id join bus_timing on stops_orders.id=bus_timing.stop_order_id join buses on buses.id_reg_no=bus_timing.bus_id join routes  on routes.id=stops_orders.route_id where stop_name='$name' and buses.status=1";
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
	<h6>It looks like you have entered a non-existing stop or it may not be in the databse...Try another Bus stop<br>SORRY FOR YOUR INCONVINENCE</h6></div>";
}else{
	echo "
<h1 style='padding-top: 10%;margin-left: 50%;transform: translateX(-25%);''>";
	echo "$name" ;
echo "</h1>";
echo "
	<center>";?> <img src="<?php
require('connect.php');

$sql="select path from stop_images join stops on stops.id=stop_images.sto_id where stops.stop_name='$name'";
$res=mysqli_query($conn,$sql)
 or die("Connection Problem".mysql_error());
while ($row=mysqli_fetch_array($res)) {
  echo "$row[0]";
}

?>" alt="Bus" style="width:400px;height: 200px;"> <?php echo "</center>
	<table class='table table-hover  table-bordered'>";
	echo "<tr>";
echo "<th>Bus Name</th>";
echo "<th>Time</th>";
echo "<th>Trip</th>";
echo "<th>Going To</th>";
echo "<th>Track</th>";

echo "</tr>";
	
	$sql="select buses.bus_name,buses.id_reg_no,stops.id, bus_timing.bus_timings,routes.source,routes.destination,bus_timing.trip_direction, bus_timing.trip from stops join stops_orders on stops.id=stops_orders.stop_id join bus_timing on stops_orders.id=bus_timing.stop_order_id join buses on buses.id_reg_no=bus_timing.bus_id join routes  on routes.id=stops_orders.route_id where stop_name='$name' and buses.status='1'";
	$res=mysqli_query($connection,$sql)
	or die("Query failed to execute".mysql_error());

	while($row=mysqli_fetch_array($res))
{
echo "<tr>" ;
echo "<td>",$row[0],"</td>";
$time = strtotime($row[3]);
echo "<td>",date('g:i a', $time),"</td>";
echo "<td>",$row[7],"</td>";
echo "<td>";
if($row[6]==1){
	echo "$row[4]";
}else{
	echo "$row[5]";
}


echo "</td>";
echo  "<td><button><a href='tracking.php?b_id=",$row[1],"&s_id=",$row[2],"'>track</></button></td>";


echo "</tr>";
}


echo "</table>";
}
 mysqli_free_result($res);
	?>
		

	</body>

<?php  require('webpage footer.php')  ?>
