<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb1";

// Create connection
$conn = new mysqli($servername.":3306", $username, $password, $dbname);

// Check connection
if ($conn->connect_error){ 
//if(!$conn){
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>