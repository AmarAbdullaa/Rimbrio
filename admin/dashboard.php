<?php
session_start();

// Create connection
$conn = new mysqli("localhost", "root", "", "party");

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql_user = "SELECT COUNT(user_id) AS user_count FROM user";
$sql_book = "SELECT COUNT(booking_id) AS booking_count FROM bookings";

// Execute the queries
$result1 = $conn->query($sql_user);
$result2 = $conn->query($sql_book);

// Check if queries executed successfully
if ($result1 && $result2) {
    // Fetch user count
    $row_user = $result1->fetch_assoc();
    $user_count = $row_user['user_count'];

    // Fetch booking count
    $row_book = $result2->fetch_assoc();
    $booking_count = $row_book['booking_count'];
} else {
    echo "Error executing the queries: " . $conn->error;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rimberio Co.|Admin|Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <div class="count">
        <div id="user-count">
            <h3>User Count: <?php echo $user_count; ?></h3>
        </div>
        
        <div id="booking-count">
            <h3>Booking Count: <?php echo $booking_count; ?></h3>
        </div>
    </div>
</body>
</html>
