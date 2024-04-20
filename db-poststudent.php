<?php
$sname = $_POST['name'];
$roll_number = $_POST['roll_number'];
$email = $_POST['email'];
$passwd=$_POST['password'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb1";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=3306", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO student (name, roll_number, email, password) VALUES ('$sname', '$roll_number', '$email','$passwd')";
    $conn->exec($sql);
    echo "<a href=Register2.html >  ";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?>
    
    
    



