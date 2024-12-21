<?php
session_start();
$servername = "localhost"; // Change this if your MySQL server is on a different host
$username = "root";
$password = "";
$database = "party";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST['adminname'];
    $password = $_POST['password'];

    // Prepare a SELECT statement to fetch user from the database
    $sql = "SELECT admin_id, name, email, password FROM admin WHERE name = ?";
    
    if ($stmt = $conn->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("s", $param_username);
        
        // Set parameters
        $param_username = $username;
        
        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Store result
            $stmt->store_result();
            
            // Check if username exists, if yes then verify password
            if ($stmt->num_rows == 1) {                    
                // Bind result variables
                $stmt->bind_result($id, $name, $email, $db_password);
                if ($stmt->fetch()) {
                    if ($password == $db_password) {
                        // Password is correct, start a new session
                        session_start();
                        
                        // Store data in session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["username"] = $username;
                        
                        // Redirect user to welcome page
                        header("location: main.html");
                    } else {
                        // Display an error message if password is not valid
                        $login_err = "Invalid username or password.";
                        header("location: admin-login.html?error=$login_err");
                    }
                }
            } else {
                // Display an error message if username doesn't exist
                $login_err = "Invalid username or password.";
                header("location: admin-login.html?error=$login_err");
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $conn->close();
}
?>
