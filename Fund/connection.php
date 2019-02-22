<?php
 $servername = "localhost";
 
$username = "root";
 
$password = "";
 
$db = "humanacts";
 
 
 
// Create connection
 
 global $Connection;
 $Connection = mysqli_connect($servername, $username, $password,$db);
 
 
 
// Check connection
 
if (!$Connection) {
 
   die("Connection failed: " . mysqli_connect_error());
 
}
 
 
?> 