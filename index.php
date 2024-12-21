<?php
    $conn = mysqli_connect("localhost", "root", "", "party") or die("DB connection failed");

    if (isset($_GET['error'])) {
        echo '<script>alert("' . $_GET['error'] . '");</script>';

    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="css/login.css">
    </head>

    <body>
        <div class="login-form">
            <form action="login_authorization.php" method="POST">
                <h1>Login</h1>
                
                <p>User Name or email</p>
                <input type="text" name="username" placeholder="Type name or email address">
                <p>Password</p>
                <input type="password" name="password" placeholder="Type password">
                <p><button type="submit">Login</button></p>
                <p>Don't have an account?   <a href="signup.php">Sign Up</a></p>
            </form>
        </div>
    </body>
</html>

    