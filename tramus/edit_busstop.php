<?php
require('connect.php');

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="select * from stops where id='".$id."'";
	$res=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($res);
	
	if($num>0){
		while($row=mysqli_fetch_array($res))
		{
		 $id=$row['id'];
		 $stop_name=$row['stop_name'];
		 $latitude=$row['latitude']; 
		 $longitude=$row['longitude'];
        }
	}
}
?>

<html>
<head>

<style type="text/css">
th {
font-family:"Californian FB"; font-size:12pt; color:purple;
}

td {
color:red;
}

.size {
height:50px;
width:120px; font-family:"Segoe Script"; font-size:14pt; font-weight:bold;
}

h1 {
text-align:center; 
color:red;
}
</style>

<script type="text/javascript" language="javascript">
function validate(){

var sname=document.getElementById('sname').value;

if(!(isNaN(sname))){
alert("Invalid Stop");
return false;
}

function C1(x){
	document.getElementById('btn1').style.backgroundColor='violet';
}
		
function C2(x){
	document.getElementById('btn1').style.backgroundColor='white';
}

function C3(x){
	document.getElementById('btn2').style.backgroundColor='violet';
}
		
function C4(x){
	document.getElementById('btn2').style.backgroundColor='white';
}

</script>
</head>

<body bgcolor="AntiqueWhite">

<h1> EDIT BUS STOPS </h1>

<form action="update_stop.php" method="POST" name="editform">

<table border="5" bordercolor="FireBrick" cellpadding="20" align="center" bgcolor="gold">
<tr>
<th>ID </th>
<td> <input type="text" name="id" value="<?php echo $id ?>" readonly> </td>
</tr>

<tr>
<th>Stop Name </th>
<td> <input type="text" name="stop_name" id="sname" value="<?php echo $stop_name ?>" required> </td>
</tr>

<tr>
<th> Latitude </th>
<td><input type="number" name="latitude" id="lat" value="<?php echo $latitude ?>" required></td>
</tr>

<tr>
<th> Longitude </th>
<td> <input type="number" name="longitude" id="long" value="<?php echo $longitude ?>" required> </td>
</tr>

<tr>
<th colspan="2"> <input type="submit" name="submit" id="btn1" value="SUBMIT" class="size" onMouseOver="C1()" onMouseOut="C2()"> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="reset" id="btn2" value="CANCEL" class="size" onMouseOver="C3()" onMouseOut="C4()"> </th>
</tr>

</table>

</form>
</body>
</html>	