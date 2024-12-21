<?php
    $conn = mysqli_connect("localhost", "root", "", "party") or die("DB connection failed");
    if (isset($_GET['error'])) {
        echo '<script>alert("' . $_GET['error'] . '");</script>';

    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SignUp Page</title>
        <link rel="stylesheet" href="css/login.css">
    </head>

    <body>
        <div class="login-form">
            <form action="" method="POST">
                <h1>Sign Up</h1>

                <p>Name</p>
                <input type="text" name="name" placeholder="Full Name">
                
                <p>Email</p>
                <input type="email" name="email" placeholder="Enter email address">

                <p>User Name</p>
                <input type="text" name="username" placeholder="Enter a username">

                <p>Password</p>
                <input type="password" name="pass" placeholder="Type password">
                
                <p>Confirm Password</p>
                <input type="password" name="pass1" placeholder="Confirm password">
    
                <p><button type="submit" name="signB">Sign Up</button></p>
                <p>Are you an existing user?   <a href="index.php">Login</a></p>
            </form>
        </div>
    </body>
</html>

<?php
    if(isset($_POST['signB'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $confirm_pass = mysqli_real_escape_string($conn, $_POST['pass1']);

        if($confirm_pass != $pass){
            $login_err = "Password did not match";
            header("location: signup.php?error=$login_err");
        }else{
            $sql = "INSERT INTO user (name, email, username, password) VALUES ('$name', '$email', '$username', '$pass')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "<script>alert('registered successfully');</script>";
                header("location: login.php");
            }  else{
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
?>