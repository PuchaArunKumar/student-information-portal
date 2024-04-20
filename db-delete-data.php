<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=3306", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM student WHERE id=6";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>