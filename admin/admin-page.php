<?php
session_start();

// Create connection
$conn = new mysqli("localhost", "root", "", "party");

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM admin";

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
        

        <div>
            <div class="user-table">
                <h3>Admins</h3>
                <table border="1" id="table-head">
                    <tr>
                        <th>Admin ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                    <?php
            // Your PHP code goes here to fetch data from the database and display it in the table
            // Assuming $result is your mysqli result object
            if ($result) {
                // Check if there are rows returned
                if ($result->num_rows > 0) {
                    // Loop through each row of the result set
                    while ($row = $result->fetch_assoc()) {
                        // Print out the data from each row in a table row
                        echo "<tr>";
                        echo "<td>" . $row['admin_id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>";
                        // Add more fields as needed
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

            <div class="update-user">
                <h3>Update Admin</h3>

                <form method="POST">
                    <table border="0">
                        <tr>
                            <td>Admin ID</td>
                            <td><input type="number" name="admin_id"><br></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name"><br></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email"><br></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password"><br></td>
                        </tr>
                    </table>

                    <button type="submit" name="updateB">Update</button>
                </form>
            </div>

            <div class="delete-user">
                <h3>Delete Admin</h3>
                <form >
                    Admin ID
                    <input type="number" name="user_id">

                    <button type="submit" name="Delete">Delete</button>
                </form>
            </div>
        </div>
    </body>
</html>