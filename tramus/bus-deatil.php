<?php require('webpage header.php') ?>
	<?php
	$name=$_GET['txt-bus-name'];
	
$server="localhost";
$user ="root";
$pass="";
$db="bus_tracking_management";
$connection=mysqli_connect($server,$user,$pass)

 or die("Connection Problem".mysql_error());
mysqli_select_db($connection,$db);


	$sql="select routes.source,routes.destination,buses.bus_name,buses.id_reg_no,bus_timing.trip_direction,bus_timing.bus_timings,stops_orders.stop_order,stops.stop_name,stops.id,bus_timing.trip from buses join bus_timing on buses.id_reg_no=bus_timing.bus_id join stops_orders on stops_orders.id=bus_timing.stop_order_id join stops on stops_orders.stop_id=stops.id join routes on routes.id=stops_orders.route_id where bus_name='$name' and buses.status='1'";
	$res=mysqli_query($connection,$sql)
	or die("Query failed to Execute".mysql_error());

if (mysqli_fetch_array($res)<=0) {
	echo "<div style=';
    top: 50%;
    left: 50%;
    width:30em;
    height:18em;
    margin-top: 9em; /*set to a negative number 1/2 of your height*/
    margin-left: 25em; /*set to a negative number 1/2 of your width*/
    '><h1 style='color:red'>404 Stop Not Found</h1>
	<h6>It looks like you have entered a non existing stop or it may not be in the databse...Try another Bus Stop<br>SORRY FOR YOUR INCONVINENCE</h6></div>";
}else{
echo "<div class='text-center'>";
echo "<h1 style='padding-top: 12%;margin-left: 24%;transform: translateX(-25%);'>";
	echo "$name" ;

echo "</h1><a href='feedback.php?bbb=$name'>FEEDBACK</a>";
echo "";?> <img src="<?php
require('connect.php');
 
$sql11="select path from bus_images join buses on buses.id_reg_no=bus_images.bus_id where buses.bus_name='$name'";
$res33=mysqli_query($conn,$sql11)
 or die("Connection Problem".mysql_error());
while ($row55=mysqli_fetch_array($res33)) {
  echo "$row55[0]";
}

?>" alt="Bus" style="width:400px;height: 200px;"> <?php echo "
		buses.id_reg_no
		
		<div> ";?> <?php

 if (isset($_GET["txt-bus-name"])) {
$bus_name=$_GET['txt-bus-name'];
    
$sqlvv="select * from driver_conductor_details where id = (select drivers_id from buses where bus_name='".$bus_name."')";

$resvv=mysqli_query($conn,$sqlvv);
$numvv=mysqli_num_rows($resvv);
//echo "$num";
 
if($numvv > 0){

    echo "<div class='container-fluid g-padding-y-40--lg g-padding-y-50--xs g-padding-y-50--sm'>";
    echo "<div class='row-fluid'>";     
        
    while($rowvv=mysqli_fetch_array($resvv))
    {
        echo "<div style='overflow:auto;'>";
        echo "<h4>Driver Info</h4>";


        echo "<table class='table table-bordered table-hover' style='background-color:grey; '>";
        echo "<tr >";
        echo "<th>Designation</th>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "<th>Email</th>";
        echo "<th>Phone</th>";
        echo "</tr>";   

        echo "<tr>";
        echo "<td>",$rowvv[1],"</td>";
        echo "<td>",$rowvv[2],"</td>";
        echo "<td>",$rowvv[3],"</td>";
        echo "<td>",$rowvv[4],"</td>";
        echo "<td>",$rowvv[5],"</td>";
        echo "</tr>";       
        echo "</table>";

?>
    
    <?php
    }
    
}
else
echo "<div style='top: 50%; left: 50%; margin-top: 4em; margin-left: 0em;' >
      <h1 style='color:red;' >404 Bus Not Found</h1>
      <h6>It looks like you have entered a non existing Bus name or it may not be in the database. Try another Bus name <br>SORRY FOR YOUR INCONVENIENCE</h6></div>";
echo "</div>";

    echo "</div>";
    echo "</div>";
     }

?> <?php echo "</div>
		</button>
		</a>
	</div>
	<table class='table table-hover  table-bordered'>";
	echo "<caption>Schedule</caption><tr>";
echo "<th>timings</th>";
echo "<th>Stop name</th>";
echo "<th>Trip No.</th>";
echo "<th>going to</th>";
echo "<th>add to favourite</th>";
echo "<th>track</th>";

echo "</tr>";
	
	while($row=mysqli_fetch_array($res))
{

echo "<tr>" ;
$time = strtotime($row[5]);
echo "<td>",date('g:i a', $time),"</td>";
echo "<td>",$row[7],"</td>";
echo "<td>",$row[9],"</td>";
echo "<td>";
if($row[4]==1){
	echo "$row[0]";
}else{
	echo "$row[1]";
}

echo "</td>";
echo  "<td><button onclick=store('tracking.php?b_id=",$row['id_reg_no'],"&s_id=",$row[8],"','",str_replace(' ', '_', $name),"')>add </button></td>";
echo "</td>";
echo  "<td><button><a href='tracking.php?b_id=",$row['id_reg_no'],"&s_id=",$row[8],"'>track</button></td>";


echo "</tr>";
}
echo "</table>";
}
 mysqli_free_result($res);
	?>
		

  <?php require('webpage footer.php') ?>