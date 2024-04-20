<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb1";
$sname = $_POST['name'];
$rollno = $_POST['register_id'];
$emailid = $_POST['email'];
$passwd=$_POST['password']
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=3306", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO teacher (name, register_id, email,password) VALUES ('$sname', '$rollno', '$emailid','$passwd')";
    $conn->exec($sql);
    echo "New record created successfully<br>";
    echo "<a href=Register1.html >Go Back </a>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?>
    
    
    



