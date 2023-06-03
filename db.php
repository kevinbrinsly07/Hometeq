<?php
$dbhost = 'localhost'; 
$dbuser = 'root';
$dbpass = 'root';
$dbname = 'w1869305';

// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//select the database
mysqli_select_db($conn, $dbname);

echo "Connected successfully";
?>