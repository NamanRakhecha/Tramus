<?php
header("Refresh:30");
if(isset($_GET['busname']) and isset($_GET['stopname'])){
  require('connect.php');
  $bname=$_GET['busname'];
  $yrstop=$_GET['stopname'];
  $sql="select id_reg_no from buses where bus_name='$bname'";
  $res=mysqli_query($conn,$sql)
  or die("Connection Problem".mysql_error());
  while($row=mysqli_fetch_array($res)){
    $bnameid=$row[0];
  }

$sql="select id from stops where stop_name='$yrstop'";
  $res=mysqli_query($conn,$sql)
   or die("Connection Problem".mysql_error());
  while($row=mysqli_fetch_array($res)){
    $yrstopid=$row[0];
  }
  echo "<a id='submitlink' href='tracking.php?b_id=",$bnameid,"&s_id=",$yrstopid,"'></a>
<script type='text/javascript'>
document.getElementById('submitlink').click();
</script>";
echo "dfghjkkjhgfdsdfghjjhgfdsdfghjklkjhgfdsdfghjkkjhgfdfghjklkjhgfdsdfghjkjhgfdsdfghjkjhgfdsdfghj";
}


if (!isset($_GET['b_id']) or !isset($_GET['s_id']) ) {

  echo "<center><h1 style=color:red>Not Tracking</h1>
   
                            <div >
                                <a href='index.php' >
                                    <img  src='img/logo.png' alt='Tramus Logo'>
                                   
                                </a>
                            </div>
                            <!-- End Logo -->


<form action='tracking.php' method='get' style='border:2px solid black;padding:0;width:400px;height:180px'><div style='padding:  0% 10% 10% 10%;'>
<h3>Start Tracking</h3> <select style='border-radius:25px; width:200px;height:30px;' name='b_id'>";
require("connect.php");
$sql="select * from `buses` where status='1'";
$res=mysqli_query($conn,$sql)
 or die("Connection Problem".mysql_error());
while ($ro=mysqli_fetch_array($res)) {
  # code...
echo "

<option value=",$ro[0],">",$ro[1],"</option>

";

}
echo " </select>Select Your Bus
<select style='border-radius:25px; width:200px;height:30px;' name='s_id'>";

require("connect.php");
$sql="select * from `stops`";
$res=mysqli_query($conn,$sql)
 or die("Connection Problem".mysql_error());
while ($ro=mysqli_fetch_array($res)) {
  # code...
echo "

<option value=",$ro[0],">",$ro[1],"</option>
";
}

echo "</select>Select Location<br><br>";



echo "<input   type='submit' value='Track Bus''><br>";
if(isset($_GET['res'])){
  echo "<span><h4 style='color:red;'>sorry that bus doesnt go to that stop. Try different stop<h4></span>";
}
// </div>

echo " </form>";
// <form>


echo "
</form>
</center>

";


}else{
   echo "<center>
                            <div >
                                <a href='index.php' >
                                    <img  src='img/logo.png' alt='Tramus Logo'>
                                   
                                </a>
                            </div>
                            <!-- End Logo --></center>";
 $bus_id= $_GET['b_id'];
 $usto_id=$_GET['s_id'];



$server="localhost";
$user ="root";
$pass="";
$db="bus_tracking_management";
$connection=mysqli_connect($server,$user,$pass)


 or die("Connection Problem".mysql_error());
mysqli_select_db($connection,$db);

$statusquery="select status from buses where id_reg_no='$bus_id'";
$statusres=mysqli_query($connection,$statusquery);
$statusrow=mysqli_fetch_array($statusres);
if($statusrow[0]==0){
	?><head><title>Breakage Reported</title></time></head><body><center>
<div><div>
	</div><div><img style=" height: 35%; width: 20%%; " src="<?php 

$imagequery="select path from bus_images where bus_id='$bus_id'";
$imageres=mysqli_query($connection,$imagequery);
$imagerow=mysqli_fetch_array($imageres);
echo "$imagerow[0]";


	 ?>"></div>
		<h3 style="color: red; border:2px solid black; border-radius: 25px;">It appears that the driver just reported a breakdown of your bus. The bus is currently out of order.. This bus will be available to track when the driver changes the status.</h3>
	
</div></center>

<script type="text/javascript">
      
      if (this.Notification) {
  Notification.requestPermission(function(permission) {

       const title = 'Driver reported breakdown! you can no longer track the bus';
    const options = {
      image: 'Breakage.png',
      sound: 'horn.mp3'
    };
      return new Notification(title, options);
    

  });
} else {
  alert('Notifications not Supported');
}

    </script>
</body>
	<?php
}else{




?>
<!DOCTYPE html>

<html lang="en">
  <head>
      <title>Tracking Module</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="vendor\bootstrap\css\bootstrap.min.css">
      <link rel="stylesheet" href="hd.css">
      <script src="vendor\jquery.min.js"></script>
      <script src="vendor\bootstrap\js\bootstrap.min.js"></script>
  </head>

<body>

  <div style="z-index: -1;" class="stage">
    <div class="layer"></div>
  </div>

<!-- Progress Bar -->
  <div class="container">
    <div class="progress">
      <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
        <!-- 100% Complete (Success) -->
      </div>
    </div>
  </div>

<div class="container">
<table class="table table-bordered">
 <thead>
 <tr>
 <th><?php $sql="select buses.bus_name ,stops.id, stops.stop_name, stops_orders.stop_order,buses.stops_id, buses.trip,buses.trip_direction from buses inner join stops on buses.stops_id=stops.id join stops_orders on stops_orders.stop_id=stops.id where buses.id_reg_no='$bus_id' limit 1";

$res=mysqli_query($connection,$sql)
or die("Query failed to execute".mysql_error());

while($row=mysqli_fetch_array($res))
{
  $bustrip=$row['trip'];
  $busdirection=$row['trip_direction'];
  $sqqql="select bus_timings from bus_timing join stops_orders on stops_orders.id=bus_timing.stop_order_id join stops on stops.id=stops_orders.stop_id where stops.id='$usto_id' and bus_timing.bus_id='$bus_id' and bus_timing.trip='$bustrip' and bus_timing.trip_direction='$busdirection'";
 $rrr= mysqli_query($connection,$sqqql);
  if(mysqli_num_rows($rrr) ==0){header('Location: tracking.php?res=no');}

$sto_id=$row['id'];
$globalbusname=$row['bus_name'];
echo "BUS    :",$row['bus_name'],"<br>";
echo "<th>BUS LOCATION      :",$row['stop_name'],"</th>";
$bus_current_stop= $row['stops_id'];
$buspresent=$row[4];

$stopfrom=$row['stop_order'];
 // echo "time",$row['bus_timings'],"<br>";
// echo "</tr>";
// $timefrom=$row['bus_timings'];
}
mysqli_free_result($res);

?>
  
</th>
 <th><?php 
$sql="select stop_name from stops where id=$usto_id";
$res=mysqli_query($connection,$sql)
or die("Query failed to execute".mysql_error());

while($row=mysqli_fetch_array($res))
{
echo "You're at   :",$row['stop_name'],"<br>";


}



   ?></th>
 <th><?PHP 
   $sql="select stops_orders.stop_order from stops join stops_orders on stops.id=stops_orders.stop_id where stops.id=$usto_id";
$res=mysqli_query($connection,$sql)
or die("Query failed to execute".mysql_error());
while($row=mysqli_fetch_array($res))
{
$stopto=$row['stop_order'];
  }
  
 echo "Your bus is  ".abs($stopfrom-$stopto)." stops away";

$globalstopaway=abs($stopfrom-$stopto);
 ?>

 </th>
 <th><?php  

$sql="select bus_timings from bus_timing join stops_orders on stops_orders.id=bus_timing.stop_order_id join stops on stops.id=stops_orders.stop_id where stops.id='$usto_id' and bus_timing.bus_id='$bus_id' and bus_timing.trip='$bustrip' and bus_timing.trip_direction='$busdirection'";

$res=mysqli_query($connection,$sql)
or die("Query failed to execute".mysql_error());

while($row=mysqli_fetch_array($res))
{
$busattime=$row['bus_timings'];
}

$sql="select bus_timings from bus_timing join stops_orders on stops_orders.id=bus_timing.stop_order_id join stops on stops.id=stops_orders.stop_id where stops.id=$bus_current_stop and bus_timing.bus_id='$bus_id' and bus_timing.trip='$bustrip' and bus_timing.trip_direction='$busdirection' ";

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
  $time = strtotime($row[0]);
  
echo "ETA in  :",date('G:i ', $time),"hr:min ";
}





   ?></th>
 </tr>
 </thead>
 <tr><th align="centre" colspan="5"><?php   
 require("connect.php");

$sql="select bus_timing.trip_direction,routes.source,routes.destination from bus_timing join stops_orders on stops_orders.id=bus_timing.stop_order_id join routes on routes.id=stops_orders.route_id where bus_timings='$busattime'";
$res=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($res);

if($row[0]==1){
 
  echo "BUS IS GOING TO:",$row[2],"";
}else{
  echo "$row[0]";
  echo "BUS IS GOING TO:",$row[1],"";
}




 ?></th></tr>
 <tbody>
 <tr>
</table>
<div class="text-center">
<button type="button" class="btn btn-danger" ><a href="tracking.php" style="text-decoration:none; color: white; ">Cancel Tracking</a></button><div style="height: 3  0px;"></div><div style="height: 30px;"></div>
</div>
</div>

<!-- Image Gallery -->
<div class="container">
  <div class="row">
    <div class="text-center">
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="#demo" class="btn btn-info" data-toggle="collapse">Your Bus Image</a>
        <div id="demo" class="collapse">
          <img src="<?php
require('connect.php');

$sql="select * from bus_images where bus_id='$bus_id'";
$res=mysqli_query($conn,$sql)
 or die("Connection Problem".mysql_error());
while ($row=mysqli_fetch_array($res)) {
  $globalimageofbus=$row[2];
  echo "$row[2]";
}

?>" alt="Bus" style="width:100%">
        </div>
      </div>
    </div>
  </div>
    <div class="col-md-3">
      <div class="thumbnail">
          <a href="#demo1" class="btn btn-info" data-toggle="collapse">Your Stop Image</a>
          <div id="demo1" class="collapse">
          <img src="<?php
require('connect.php');

$sql="select * from stop_images where sto_id='$usto_id'";
$res=mysqli_query($conn,$sql)
 or die("Connection Problem".mysql_error());
while ($row=mysqli_fetch_array($res)) {
  echo "$row[2]";
}

?>" alt="Stops" style="width:100%">
          </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
          <a href="#demo2" class="btn btn-info" data-toggle="collapse">Bus Stop Current Image</a>
          <div id="demo2" class="collapse">
          <img src="<?php
require('connect.php');

$sql="select * from stop_images where sto_id='$bus_current_stop'";
$res=mysqli_query($conn,$sql)
 or die("Connection Problem".mysql_error());
while ($row=mysqli_fetch_array($res)) {
  $globalstopimage=$row[2];
  echo "$row[2]";
}

?>" alt="CurrentStop" style="width:100%">
          </div>
        </div>
    </div>
  </div>
  </div>


</body>
</html>
<?php

 

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

  
require("connect.php");
$sql="select stop_order from stops_orders where stop_id=$usto_id";
$res=mysqli_query($conn,$sql);
$row1=mysqli_fetch_array($res);
// echo "$row1[0]";
$sql="select stop_order from stops_orders where stop_id=$buspresent";
$res=mysqli_query($conn,$sql);
$row2=mysqli_fetch_array($res);
// echo "$row2[0]";
// echo "--------------------";
// echo "$busattime";
// echo "------------------";
$sql="select trip_direction from bus_timing where bus_timings='$busattime'";
$res=mysqli_query($conn,$sql);
$row3=mysqli_fetch_array($res);





if ((($row2[0]-$row1[0]>0) and ($row3[0]==0)) or (($row2[0]-$row1[0]<0) and ($row3[0]==1))) {
  echo "<div style='border:2px solid black;background-color:red;border-radius:25px;width:100%;'><h1 style='color:black;text-align:center;'>YOU'VE MISSED YOUR BUS!</h1></div>";
  $notificationvalue=0;
}else{
	$notificationvalue=1;
echo "<div style='border:2px solid black;background-color:green;border-radius:25px;width:100%;'><h1 style='color:white;text-align:center;;'>YOU CAN BOARD THIS BUS!</h1></div>";
}

}}


    ?>
    <script type="text/javascript">
      
      if (this.Notification) {
  Notification.requestPermission(function(permission) {

    if (<?php echo "$globalstopaway"; ?> <= 5 && <?php echo "$notificationvalue"; ?> ==1) {
   
       const title = '<?php echo "$globalbusname"," is About to reach your destination!"; ?>';
    const options = {
      image: '<?php  echo "$globalimageofbus" ?>'
    };
      return new Notification(title, options);
    }else{}

  });
} else {
  alert('Notifications not Supported');
}

    </script></body></html>
  
<!--  -->