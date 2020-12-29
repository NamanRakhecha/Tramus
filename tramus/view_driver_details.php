<?php
require('connect.php');
?>

<?php

 if (isset($_GET["bus_name"])) {
$bus_name=$_GET['bus_name'];
    
$sql="select * from driver_conductor_details where id = (select drivers_id from buses where bus_name='".$bus_name."')";

$res=mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);
//echo "$num";
 
if($num > 0){

    echo "<div class='container-fluid g-padding-y-40--lg g-padding-y-50--xs g-padding-y-50--sm'>";
    echo "<div class='row-fluid'>";     
        
    while($row=mysqli_fetch_array($res))
    {
        echo "<div style='overflow:auto;'>";

        echo "<h3 style='color:red; margin-left: 415px;'> Bus Name : $bus_name </h3>";

        echo "<table class='table table-bordered table-hover' style='background-color:lightblue;'>";
        echo "<tr style='background-color:#3393FF;'>";
        echo "<th>Designation</th>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "<th>Email</th>";
        echo "<th>Phone</th>";
        echo "</tr>";   

        echo "<tr>";
        echo "<td>",$row[1],"</td>";
        echo "<td>",$row[2],"</td>";
        echo "<td>",$row[3],"</td>";
        echo "<td>",$row[4],"</td>";
        echo "<td>",$row[5],"</td>";
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

?>

</div>
</div>

</body>
<?php require('webpage footer.php'); ?>