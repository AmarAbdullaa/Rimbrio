<?php
session_start();

// Create connection
$conn = new mysqli("localhost", "root", "", "party");

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM bookings";

// Execute the query
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Rimberio Co. | Admin | Bookings</title>
        <link rel="stylesheet" href="users.css">
    </head>

    <body>
        <div>
            <div class="user-table">
                <h3>Event Bookings</h3>
                <table border="1" id="table-head"> 
                    <tr>
                        <th>User ID</th>
                        <th>Booking ID</th>
                        <th>Event Name</th>
                        <th>Client Name</th>
                        <th>Event Date</th>
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
                        echo "<td>" . $row['user_id'] . "</td>";
                        echo "<td>" . $row['booking_id'] . "</td>";
                        echo "<td>" . $row['b_name'] . "</td>";
                        echo "<td>" . $row['c_name'] . "</td>";
                        echo "<td>" . $row['date'] . "</td>";
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

            <div class="delete-user">
                <h3>Delete Booking</h3>
                <form method="POST" action="" >
                    Booking ID
                    <input type="number" name="booking_id">

                    <button type="submit" name="deleteB">Delete</button>
                </form>
            </div>
        </div>
    </body>
</html>


<?php
if(isset($_POST['deleteB'])){
$book_id = mysqli_real_escape_string($conn, $_POST['booking_id']);
$sql_update = "DELETE FROM bookings WHERE booking_id = '$book_id'";
$result1 = $conn->query($sql_update);
if($result1){
    echo "<script>alert('deleted successfully');</script>";
    header("location: booking.php");
}  else{
    echo "Error: " . mysqli_error($conn);
}
}

?>