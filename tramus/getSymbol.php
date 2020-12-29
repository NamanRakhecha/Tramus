<?php
require('connection.php');
session_start();
error_reporting(0);

//On login, when the session reporting is not required
if ( !isset($_SESSION['uname'])){
  //retrieve login information 
	$name=$_POST['userN'];
	$pwd=$_POST['passW'];

 	$key=md5("pratik");
 	$string=$name;
 	$username=rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $string, MCRYPT_MODE_ECB)));


 	$string=$pwd;
 	$password=rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $string, MCRYPT_MODE_ECB)));
 	

// check user information with database
$query = "SELECT * FROM `admin_login` where username='$username' and password='$password' "; 

$result =  mysqli_query($connection,$query) or die ("Error in query: ".mysql_error());
//if user exists, a row will be returned 
if (mysqli_num_rows($result) > 0) { 

     // add username to session variable
		$_SESSION['uname']=$_POST['userN'];
}
else
{  //redirect user to login page
  echo "<script>alert('Invalid login')</script>";
  include ("login page.php");
  exit();
}
} //outer if – on first login



// include('webpage header.php');
include('admin.php');





// $query = "SELECT * FROM `symbols`;"; 
// $result = mysql_query($query,  $connection) or die ("Error in query: ".$query. " ".mysql_error());
// if (mysql_num_rows($result) > 0) { 
//     echo "<table cellpadding=10 border=1 bordercolor=red align=center>"; 
//     while($row = mysql_fetch_array($result)) { 
//         echo "<tr>"; 
//         echo "<td>".$row['id']."</td>"; 
//         echo "<td>".$row['country']."</td>"; 
//         echo "<td>".$row['animal']."</td>"; 
//         //shows the Delete link for each row
//         echo "<td><a href=delSymbol.php?id=".$row['id']."> 		Delete</a></td>"; 
//         echo "</tr>"; 
//     } 
//     echo "</table>"; 
// } 



// else {  
// echo "No rows found!"; 
// } 

// free result set memory 
// mysql_free_result($result); 
// mysql_close($connection);
// include("webpage footer.php");

?>

