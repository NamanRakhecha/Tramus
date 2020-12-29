<?php require('webpage header.php');?>
<?php
require('connection.php');

$query="SELECT * FROM `feedback` where bus_id='$r[0]' ";
$reselt = mysqli_query($connection,$query)
or die("Could not connect... Connection Terminated".mysql_error());
echo "<h1 style='text-align:center;'>",$r[0],"</h1><table  style='margin-left: 20%; margin-top: 5%; border:2px solid black; padding:0;width:700px;height:400px' border=1 color=aqua>";
echo "<tr>";

echo "<th>Rating</th>";
echo "<th>Feedback</th>";
echo "</tr>";
while($row=mysqli_fetch_array($reselt))
{
echo "<tr>" ;

echo "<td>",$row['star'],"</td>";
echo "<td>",$row['feedback_1'],"</td>";
echo "</tr>";
}
echo "</table>";
?>
<?php require('webpage footer.php');?>