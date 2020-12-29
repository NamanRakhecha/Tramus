<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>


<?php
$to="pratik.kolvenkar16@gmail.com";
$subject="Your registration is confirmed";
$txt="Thank You for Registering your bus with Tramus.\n You can download the app from our official website.\n To login to our webite use the \n username:Joliz4EYF and password:87832gsd\n
Do not share this username and password with anyone, use these Credentials to login to your app. For any enquery or complaints use contact us page.\n
Thank you and hope you'll enjoy our Tramus!";
$headers="From:Tramus Registration" . "\r\n" .
"CC:	rishwa7875@gmail.com";
if(mail($to,$subject,$txt,$headers)){
	echo "sent";
}else{
	echo "not sent";
}

?><body>

</body>
</html>