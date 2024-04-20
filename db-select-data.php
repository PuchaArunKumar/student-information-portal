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

$sql = "SELECT id,name,password FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=1><tr><th>ID</th><th>Name</th><th>password</tr></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["password"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>