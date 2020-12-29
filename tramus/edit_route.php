<?php
require('connect.php');

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="select * from routes where id='".$id."'";
	$res=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($res);
	
	if($num>0){
		while($row=mysqli_fetch_array($res))
		{
		 $id=$row['id'];
		 $source=$row['source'];
		 $destination=$row['destination']; 
		 $via=$row['via'];
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

var source=document.getElementById('source').value;
var destination=document.getElementById('destination').value;
var via=document.getElementById('via').value;

if(source.value.match(/^[A-Za-z]+$/)){
alert("Invalid Source");
return false;
}

if(!(isNaN(destination))){
alert("Invalid Destination");
return false;
}

if(!(isNaN(via))){
alert("Invalid Route");
return false;
}

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

<h1> EDIT ROUTE </h1>

<form action="update_route.php" method="POST" name="editform" onsubmit="return validate()">

<table border="5" bordercolor="FireBrick" cellpadding="20" align="center" bgcolor="gold">
<tr>
<th> ID </th>
<td> <input type="text" name="id" value="<?php echo $id ?>" readonly> </td>
</tr>

<tr>
<th> Source </th>
<td> <input type="text" name="source" id="source" value="<?php echo $source ?>" required> </td>
</tr>

<tr>
<th> Destination </th>
<td><input type="text" name="destination" id="destination" value="<?php echo $destination ?>" required></td>
</tr>

<tr>
<th> Via </th>
<td> <input type="text" name="via" value="<?php echo $via ?>" required> </td>
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