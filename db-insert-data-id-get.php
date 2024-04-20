
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb1";

// Create connection
$conn = new mysqli($servername.":3306", $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO teacher (parent_name, student_id, email,password)
VALUES ('KAMA RAJU', '5211411050', 'kamaraju@gmail.com','kamaraju@123')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
