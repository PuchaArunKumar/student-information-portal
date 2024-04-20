<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=3306", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO student_information (roll_number,no_working_days,nday_present,nday_absent,semester1,semester2,semester3,semester4,semester5,semester6)
    VALUES ('5211411050','120','108','12','7.77','8.0','8.3', '8.44','8.26','9.2')";
    
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>