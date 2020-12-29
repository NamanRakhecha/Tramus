<?php
$server="localhost";
$user="root";
$pass="";
$database="bus_tracking_management";
$conn = new mysqli($server,$user,$pass,$database);
mysqli_select_db($conn,$database);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
} 
?>