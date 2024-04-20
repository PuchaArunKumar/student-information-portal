<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb1";
$pname = $_POST['parent_name'];
$studid = $_POST['student_id'];
$emailid = $_POST['email'];
$passwd=$_POST['password']
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=3306", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO parent (parent_name, student_id, email,password) VALUES ('$pname', '$studid', '$emailid','$passwd')";
    $conn->exec($sql);
    echo "New record created successfully<br>";
    echo "<a href=Register.html >Go Back </a>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?>
    
    
    



