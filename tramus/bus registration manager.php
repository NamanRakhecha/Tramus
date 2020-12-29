<body style="overflow-x: scroll;">
<?php
require('webpage header.php');

require 'connect.php';

if(isset($_GET['registration_id'])){
$val=$_GET['registration_id'];

$sql ="select * from unregistered_request where registration_id='$val'";
$res=mysqli_query($conn,$sql)
or die();
$row=mysqli_fetch_array($res) ;
	mysqli_free_result($res);
	$email=$row[4];
$sql="insert into `driver_conductor_details` values('','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]')";
mysqli_query($conn,$sql);
$sql="select LAST_INSERT_ID()";
$res= mysqli_query($conn,$sql)
 or die();
$row1=mysqli_fetch_array($res);

$sqll="insert into `buses` values('$row[12]','$row[11]','$row1[0]','41','0','0','0')";
mysqli_query($conn,$sqll)

?>

<?php  
$sql="insert into routes values('','$row[14]','$row[15]','$row[16]')";
mysqli_query($conn,$sql)
or die ("error found".$sql." ".mysql_error());
$sql="select LAST_INSERT_ID()";
$res= mysqli_query($conn,$sql)
 or die();
$row2=mysqli_fetch_array($res);
mysqli_free_result($res);


function random_username($string) {
$pattern = " ";
$firstPart = strstr(strtolower($string), $pattern, true);
$secondPart = substr(strstr(strtolower($string), $pattern, false), 0,3);
$nrRand = rand(0, 100);
$username = trim($firstPart).trim($secondPart).trim($nrRand);
return $username;
}

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

$un=random_username($row[11]);
$ps=randomPassword();

$sqlq="insert into regitered_user_pass values('$un','$ps','1','$row[12]')";
mysqli_query($conn,$sqlq)
or die ("error found".$sqlq." ".mysql_error());
 ?>

<?php
$to=$email;
$subject="Your registration is confirmed";
$txt=" Dear User,\n
 
Greetings from TRAMUS! Hope this mail finds you in good health and spirit.\n
We are glad to know that you have registered to our website. \n
Following is a short introduction to TRAMUS and the links to respective information that would be of your interest:\n

TRAMUS was created  in the year 2017 by a group of eminent students to impart the tracking of a bus at real time and with a vision to expand the horizons of reaching the full state as well as the country, where in, the passengers can experience the ease of travelling in a bus.\n
Your registration has been successful and your login details are: \n
Username:$un \n
Password:$ps \n
YOU CAN USE YOUR APP AFTER 5 DAYS. \n
Disclaimer: The information in this e-mail and any attachments is confidential and may be legally privileged. The information contained in this communication is intended solely for the individual or entity to which it is addressed \n Any review, retransmission, dissemination or other use of, or taking any action in reliance on the contents of this information is strictly prohibited and may be unlawful. If you have received this communication in error, please notify us immediately by responding to this email. ";
$headers="From:Tramus Registration" . "\r\n" .

"CC:    rishwa7875@gmail.com";

if(mail($to,$subject,$txt,$headers)){
	echo "sent";
}else{
	echo "not sent";
}

if(isset($_GET['registration_id'])){
    $id=$_GET['registration_id'];
    $del="delete from unregistered_request where registration_id='".$id."'";
    $res=mysqli_query($conn,$del);
}

?>

<?php 
echo "</body>";
?>
<?PHP   

}
require("pending_requests.php");
?>