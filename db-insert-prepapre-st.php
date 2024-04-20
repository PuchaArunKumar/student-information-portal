<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=3306", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO student (name, roll_number, email,password)
    VALUES (:name, :roll_number, :email, :password)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':roll_number', $roll_number);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    // insert a row
    $name = "Arun kumar";
    $roll_number = "5211411050";
    $email = "5211411050@gvpcdpgc.edu.in";
    $password = 5211411050;
    $stmt->execute();

    // insert another row
    $name = "vishnu";
    $roll_number = "5211411005";
    $email = "5211411005@gvpcdpgc.edu.in";
    $password = 5211411005;
    $stmt->execute();

    // insert another row
    $name = "veera";
    $roll_number = "5211411046";
    $email = "5211411046@gvpcdpgc.edu.in";
    $password = 5211411046;
    $stmt->execute();

    // insert another row
    $name = "triguna";
    $roll_number = "5211411057";
    $email = "5211411057@gvpcdpgc.edu.in";
    $password = 5211411057;
    $stmt->execute();

    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>
