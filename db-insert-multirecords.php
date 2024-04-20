<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=3306", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // begin the transaction
    $conn->beginTransaction();
    // our SQL statements
    $conn->exec("INSERT INTO student (name, roll_number, email,password) 
    VALUES ('Arun', '01', 'arun@example.com','password')");
    $conn->exec("INSERT INTO student (name, roll_number, email,password)
    VALUES ('veera', '02', 'veera@example.com','paasword')");
    $conn->exec("INSERT INTO student (name, roll_number, email,password)
    VALUES ('vishnu', 'vishnu', 'vishnu@example.com','password')");

    // commit the transaction
    $conn->commit();
    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    // roll back the transaction if something failed
    $conn->rollback();
    echo "Error: " . $e->getMessage();
    }

$conn = null;
?>