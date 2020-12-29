<?php
if (!isset($_GET['b_id']) or !isset($_GET['s_id'])) {
	echo "<h1>Not Tracking..</h1>";
}else{
 $bus_id= $_GET['b_id'];
 $usto_id=$_GET['s_id'];


$server="localhost";
$user ="root";
$pass="";
$db="bus_tracking_management";
$connection=mysqli_connect($server,$user,$pass)


 or die("Connection Problem".mysql_error());
mysqli_select_db($connection,$db);

$sql="select stop_name from stops where id=$usto_id";
$res=mysqli_query($connection,$sql)
or die("Query failed to execute".mysql_error());

while($row=mysqli_fetch_array($res))
{
echo "You are at",$row['stop_name'],"<br>";


}


 $sql="select buses.bus_name ,stops.id, stops.stop_name, stops_orders.stop_order from buses inner join stops on buses.stops_id=stops.id join stops_orders on stops_orders.stop_id=stops.id where buses.id_reg_no=$bus_id";

$res=mysqli_query($connection,$sql)
or die("Query failed to execute".mysql_error());

while($row=mysqli_fetch_array($res))
{
$sto_id=$row['id'];
echo "Your Bus",$row['bus_name'],"<br>";
echo "BUS AT",$row['stop_name'],"<br>";
$stopfrom=$row['stop_order'];
 // echo "time",$row['bus_timings'],"<br>";
// echo "</tr>";
// $timefrom=$row['bus_timings'];
}
mysqli_free_result($res);
$sql="select stops_orders.stop_order from stops join stops_orders on stops.id=stops_orders.stop_id where stops.id=$usto_id";
$res=mysqli_query($connection,$sql)
or die("Query failed to execute".mysql_error());
while($row=mysqli_fetch_array($res))
{
$stopto=$row['stop_order'];
	}
	
 echo "Your Bus is".abs($stopfrom-$stopto)."away";
date_default_timezone_set("Asia/Kolkata");

$timeto= date("h:i:sa");




echo "<br>";

// $start_date = new DateTime($timefrom);
// $since_start = $start_date->diff(new DateTime('now'));

// echo $since_start->h.' hours<br>';
// echo $since_start->i.' minutes<br>';
// echo $since_start->s.' seconds<br>';


echo "
<div style='height=100px; width:100px'>




</div>
";



$sql="select bus_timings from bus_timing join stops_orders on stops_orders.id=bus_timing.stop_order_id join stops on stops.id=stops_orders.stop_id where stops.id=$sto_id";

$res=mysqli_query($connection,$sql)
or die("Query failed to execute".mysql_error());

while($row=mysqli_fetch_array($res))
{
$busattime=$row['bus_timings'];
}

$sql="select bus_timings from bus_timing join stops_orders on stops_orders.id=bus_timing.stop_order_id join stops on stops.id=stops_orders.stop_id where stops.id=$usto_id";

$res=mysqli_query($connection,$sql)
or die("Query failed to execute".mysql_error());

while($row=mysqli_fetch_array($res))
{
$userattime=$row['bus_timings'];
}





$sql="SELECT TIMEDIFF('$busattime', '$userattime')";

$res=mysqli_query($connection,$sql)
or die("Query failed to execute".mysql_error());

while($row=mysqli_fetch_array($res))
{
echo "Bus will arrive in",$row[0],"<br>";
}
}

?>