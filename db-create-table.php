<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb1";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=3306", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // sql to create table
    $sql = "CREATE TABLE student_information(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        roll_number VARCHAR(30) NOT NULL,
        no_working_days VARCHAR(10) NOT NULL,
        nday_present VARCHAR(10) NOT NULL,
        nday_absent VARCHAR(10) NOT NULL,
        semester1 VARCHAR(10) NOT NULL,
        semester2 VARCHAR(10) NOT NULL,
        semester3 VARCHAR(10) NOT NULL,
        semester4 VARCHAR(10) NOT NULL,
        semester5 VARCHAR(10) NOT NULL,
        semester6 VARCHAR(10) NOT NULL,
        reg_date TIMESTAMP,
        FOREIGN KEY (roll_number) REFERENCES student(roll_number)
    )"; // Added a comma after the FOREIGN KEY constraint
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table Student created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
