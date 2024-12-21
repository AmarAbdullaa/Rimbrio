<?php
    session_start(); // Start the session at the beginning of the script

    // Check if the user is not logged in
    if (!isset($_SESSION['username'])) {
        // Redirect the user to the login page
        header("Location: login.php");
        exit(); // Stop further execution of the script
    }

    $conn = mysqli_connect("localhost", "root", "", "party") or die("DB connection failed");

    // Get the user_id of the currently logged-in user
    $username = $_SESSION['username'];
    $user_query = "SELECT user_id FROM user WHERE username = '$username'";
    $user_result = mysqli_query($conn, $user_query);
    
    if ($user_result && mysqli_num_rows($user_result) > 0) {
        $user_row = mysqli_fetch_assoc($user_result);
        $user_id = $user_row['user_id'];
    }

    // Retrieve booking details from the database
    $sql = "SELECT * FROM bookings where user_id='$user_id'";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            
            color: gold;
        }
        

        table, th, td {
            padding: 8px;
            text-align: left;
            border: 2px solid white;
        }

        tr th {
            background-color: gold;
            color: black;
        }

        th {
            text-align: center;
            font-size: 18px;
        }

        th:first-child {
            border-top-left-radius: 25px;
        }

        th:last-child {
            border-top-right-radius: 25px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        

        h2 , h1 ,h3 {
            text-align: center;
        }

        h2 {
            font-size: 27px;
        }

        h1 ,h3 , h2{
            margin-bottom: 0;
            padding-bottom: 0;
            margin-top: 0;
            padding-top: 0;
        }

        h2 {
            padding-top: 10px
        }

        button {
            height: 40px;
            width: 150px;
            border-radius: 10px;
            background-color: white;
            color: black;
            cursor: pointer;
            font-size: 18px;
            margin-top: 25px;
            float: right;
        }

        button:hover {
            background-color: black;
            color: gold;
        }

        td {
            background-color: black;
            height: 25px;
            font-size: 16px;
        }

        

    </style>
</head>
<body>
    <h1>Rimberio Co.</h1>
    <h3>The Event Planner</h3>
    <h2>Booking Details</h2>
    <table>
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Client Name</th>
                <th>Contact Number</th>
                <th>Event Date</th>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>
        </thead>
        <tbody>
            <?php


                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["b_name"] . "</td>";
                        echo "<td>" . $row["c_name"] . "</td>";
                        echo "<td>" . $row["c_number"] . "</td>";
                        echo "<td>" . $row["date"] . "</td>";
                        echo "<td>" . $row["s_time"] . "</td>";
                        echo "<td>" . $row["e_time"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No bookings found</td></tr>";
                }

                // Close database connection
                mysqli_close($conn);
            ?>
            
        </tbody>
    </table>
    <button type="button" id="add2fav" onclick="window.location.href='bookings.php'">Go Back</button>
</body>
</html>
