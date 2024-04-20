<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=3306", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE student SET name='Balla Vishnu' WHERE roll_number=5211411005";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>