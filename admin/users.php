<?php
session_start();

// Create connection
$conn = new mysqli("localhost", "root", "", "party");

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user";

// Execute the query
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Rimberio Co. | Admin | Users</title>
        <link rel="stylesheet" href="users.css">
    </head>

    <body>
        

    <div style="width: 92%;">
    <div class="user-table">
        <h3>Users</h3>
        <table border="1" id="table-head">
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>User Name</th>
                <th>Password</th>
            </tr>

            <?php
            if ($result) {
                // Check if there are rows returned
                if ($result->num_rows > 0) {
                    // Loop through each row of the result set
                    while ($row = $result->fetch_assoc()) {
                        // Print out the data from each row in a table row
                        echo "<tr>";
                        echo "<td>" . $row['user_id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No records found</td></tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Error executing the query: " . $mysqli->error . "</td></tr>";
            }
            ?>
        </table>
    </div>
</div>


            <div class="update-user">
                <h3>User Management</h3>

                <form method="POST" action="">
                    <table border="0">
                        <tr>
                            <td>User ID</td>
                            <td><input type="number" name="user_id" required><br></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name" required><br></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email" required><br></td>
                        </tr>
                        <tr>
                            <td>User Name</td>
                            <td><input type="text" name="username" required><br></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" required><br></td>
                        </tr>

                        <tr>
                            <td><button type="submit" name="updateB">Update</button></td>
                            <td><button type="submit" name="addB">Add User</button></td>
                        </tr>
                    </table>

                    
                </form>
            </div>

            <div class="delete-user">
                <h3>Delete User</h3>
                <form method="POST" action="">
                    User ID
                    <input type="number" name="user_id">

                    <button type="submit" name="deleteB">Delete</button>
                </form>
            </div>
        </div>
    </body>
</html>

<?php

    if(isset($_POST['updateB'])){
        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql_update = "UPDATE user SET name='$name', email='$email', username='$username', password='$password' WHERE user_id='$user_id'";
    $result1 = $conn->query($sql_update);
    if($result1){
        echo "<script>alert('updated successfully');</script>";
        header("location: users.php");
    }  else{
        echo "Error: " . mysqli_error($conn);
    }
}

if(isset($_POST['deleteB'])){
$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
$sql_update = "DELETE FROM user WHERE user_id = '$user_id'";
$result1 = $conn->query($sql_update);
if($result1){
    echo "<script>alert('deleted successfully');</script>";
    header("location: users.php");
}  else{
    echo "Error: " . mysqli_error($conn);
}
}

if(isset($_POST['addB'])){
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "INSERT INTO user (name, email, username, password) VALUES ('$name', '$email', '$username', '$password')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('registered successfully');</script>";
        header("location: users.php");
    }  else{
        echo "Error: " . mysqli_error($conn);
    }
}

$result->close();
$conn->close();
?>