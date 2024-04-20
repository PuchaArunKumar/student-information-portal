<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
    <div class="wrapper">
        <header>Student Registration Form</header>
        <form method="POST" action="db-poststudent.php">
            <div class="field name">
                <div class="input-area">
                    <input type="text" placeholder="Student Name" name="name">
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Name can't be blank</div>
            </div>
            <div class="field id">
                <div class="input-area">
                    <input type="text" placeholder="Student ID" name="roll_number">
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Student ID can't be blank</div>
            </div>
            <div class="field email">
                <div class="input-area">
                    <input type="text" placeholder="Email Address" name="email">
                    <i class="icon fas fa-envelope"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Email can't be blank</div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="password" placeholder="Password" name="password">
                    <i class="icon fas fa-lock"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Password can't be blank</div>
            </div>
            <input type="submit" value="Submit" >
        </form>
      </div>
</body>
</html>