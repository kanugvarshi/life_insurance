<?php

//EDIT Your Database name, Username and Password here
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "myDATABASE";


 // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("User/password is wrong");
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
?>