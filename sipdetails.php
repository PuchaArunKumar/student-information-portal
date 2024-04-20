<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information portal</title>
    <link rel="stylesheet" href="stylesip.css">
</head>
<body>
    <header>
        <div id="home" class="head">
            <div class="imglogo">
                <img id="logo" style="border-radius: 100%;" src="https://pbs.twimg.com/profile_images/1232918783637049344/9tUfiwQR_400x400.jpg" height="150px" style="float: right;">
                <div class="headertext">
                    <h1>Student Information Portal<br> Gayatri Vidya Parishad College For Degree and PG Courses (A) <br> Engineering and Technology Program </h1>
                </div>
            </div>
        </div>
    </header>
    <h1 style="color: yellow;">STUDENT PORTAL</h1>
    <table style="color: aliceblue;">
            <?php
            session_start(); // Start the session
            // Check if the user is logged in
            if (!isset($_SESSION['email'])) {
                header("location: student.php"); // Redirect to login page if not logged in
                exit(); // Stop script execution
            }            
            $email = $_SESSION['email']; 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "testdb1";
            $conn = new mysqli($servername . ":3306", $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT student_details.*, student_information.* FROM student_details
            INNER JOIN student_information ON student_details.roll_number = student_information.roll_number where student_details.email='$email'; ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div>';
                    echo '<div style="width: 50%; ">'; // Half of the table on the left side
                    echo '<table style="float:left; border: 1px solid black; width: 40%;">';
                    echo '<tr><td colspan="2"><h3>STUDENT DETAILS</h3></td></tr>';
                    echo '<tr><td><h3>NAME</h3></td><td><h3>' . $row["name"] . '</h3></td></tr>';
                    echo '<tr><td><h3>ROLL NUMBER</h3></td><td><h3>' . $row["roll_number"] . '</h3></td></tr>';
                    echo '<tr><td><h3>BRANCH</h3></td><td><h3>' . $row["branch"] . '</h3></td></tr>';
                    echo '<tr><td><h3>COURSE</h3></td><td><h3>' . $row["course"] . '</h3></td></tr>';
                    echo '<tr><td><h3>SECTION</h3></td><td><h3>' . $row["section"] . '</h3></td></tr>';
                    echo '<tr><td><h3>SEMESTER</h3></td><td><h3>' . $row["semester"] . '</h3></td></tr>';
                    echo '<tr><td><h3>YEAR</h3></td><td><h3>' . $row["year"] . '</h3></td></tr>';
                    echo '<tr><td><h3>RANK</h3></td><td><h3>' . $row["rank"] . '</h3></td></tr>';
                    echo '<tr><td><h3>EMAIL</h3></td><td><h3>' . $row["email"] . '</h3></td></tr>';
                    echo '<tr><td><h3>CONTACT</h3></td><td><h3>' . $row["contact"] . '</h3></td></tr>';
                    echo '</table></div>';

                    echo '<div style="width: 50%; float: right;">'; // Adjusted width to occupy half of the parent
                    echo '<table style="border: 1px solid black; width: 40%;">'; // Adjusted width to occupy full width of the parent
                    echo '<tr><td colspan="2"><h3>ATTENDANCE</h3></td></tr>';
                    echo '<tr><td><h3>TOTAL NO. OF Days</h3></td><td><h3>' . $row["no_working_days"] . '</h3></td></tr>';
                    echo '<tr><td><h3>Days Present</h3></td><td><h3>' . $row["nday_present"] . '</h3></td></tr>';
                    echo '<tr><td><h3>Days ABSENT</h3></td><td><h3>' . $row["nday_absent"] . '</h3></td></tr>';
                    echo '<tr><td colspan="2"><h3>MARKLIST</h3></td></tr>';
                    echo '<tr><td><h3>SEMESTER 1</h3></td><td><h3>' . $row["semester1"] . '</h3></td></tr>';
                    echo '<tr><td><h3>SEMESTER 2</h3></td><td><h3>' . $row["semester2"] . '</h3></td></tr>';
                    echo '<tr><td><h3>SEMESTER 3</h3></td><td><h3>' . $row["semester3"] . '</h3></td></tr>';
                    echo '<tr><td><h3>SEMESTER 4</h3></td><td><h3>' . $row["semester4"] . '</h3></td></tr>';
                    echo '<tr><td><h3>SEMESTER 5</h3></td><td><h3>' . $row["semester5"] . '</h3></td></tr>';
                    echo '<tr><td><h3>SEMESTER 6</h3></td><td><h3>' . $row["semester6"] . '</h3></td></tr>';
                    echo '</table></div></div>';
                     // End of flex container
                    
                }
            } else {
                echo "<tr><td colspan='3'>0 results</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>

</body>
</html>
