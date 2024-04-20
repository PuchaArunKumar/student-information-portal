<?php
// Start the session
session_start();
// Include database connection
include 'db_connection.php';
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM teacher WHERE email=? AND password=?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        die("Error: " . mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $email; 
        header("location: sipdetails2.php"); 
    } else {
        header("location: teacher.php?error=Invalid email or password");
    }
}
?>


