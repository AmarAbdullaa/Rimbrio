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

        
    if(isset($_POST['bookB'])){
      $eventname = mysqli_real_escape_string($conn, $_POST['eventname']);
      $clientname = mysqli_real_escape_string($conn, $_POST['firstname']);
      $contact = mysqli_real_escape_string($conn, $_POST['cNo']);
      $eventdate = mysqli_real_escape_string($conn, $_POST['eventdate']);
      $start = mysqli_real_escape_string($conn, $_POST['starttime']);
      $end = mysqli_real_escape_string($conn, $_POST['endtime']);
      
      $sql = "INSERT INTO bookings (b_name, c_name, c_number, date, s_time, e_time, user_id) VALUES ('$eventname', '$clientname', '$contact', '$eventdate', '$start', '$end', '$user_id')";
      $result = mysqli_query($conn, $sql);
      if($result){
          echo "<script>alert('Booked successfully');</script>";
          header("location: show_booking.php");
      }  else{
           echo "Error: " . mysqli_error($conn);
      }
      }
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home | Rimberio Co.</title>
        <link rel="stylesheet" href="css/bookings.css">
        <script src="https://kit.fontawesome.com/d11f03c652.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <!-- Menu bar starts -->
        <header class="menu-bar">
          <div class="menubar-logo">
              <img src="image/rimberio.png" height="75px" width="75px">
          </div>
          <div id="menu-options">
          <a href="home.php">Home</a>
        <a href="about-us.php">About Us</a>
        <a href="our-services.php">Our Services</a>
        <a href="contact-us.php">Contact Us</a>
        <div class="user-dropdown">
            <a href="bookings.php">Bookings</a>
            <div class="user-content">
                <a href="bookings.php">New Booking</a>
                <a href="show_booking.php">My Bookings</a>
            </div>
          </div>
              <?php
              if(isset($_SESSION['username'])) {
                  echo '<div class="user-dropdown">';
                  echo '<a href="#"><i class="fa-solid fa-user"></i></a>';
                  echo '<div class="user-content">';
                  echo '<a href="profile.html">Profile</a>';
                  echo '<a href="logout.php">Sign Out</a>';
                  echo '<a href="admin\admin-login.html">Admin</a>';
                  echo '</div>';
                  echo '</div>';
              } else {
                  echo '<div class="user-dropdown">';
                  echo '<a href="#"><i class="fa-solid fa-user"></i></a>';
                  echo '<div class="user-content">';
                  echo '<a href="index.php">Login</a>';
                  echo '<a href="signup.php">Sign Up</a>';
                  echo '<a href="admin\admin-login.html">Admin</a>';
                  echo '</div>';
                  echo '</div>';
              }
              ?>
          </div>
      </header>


        <main>
            <section id="cover">
                <div class="bookings-image" id="container">
                  <h1>Rimberio - Book Now!</h1>
                </div>
              </section>
              
              <!-- Booking Form -->
              <section id="headings">
                <div class="bookingform">
                  <form id="bookingForm" method="POST" action="">
                  
                  <fieldset class="personalcontainer">
                    <legend class="personalName">Personal Information</legend>
                    <label for="fname">Full Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                  
                    <label for="lname">Contact Number</label>
                    <input type="text" id="cNo" name="cNo" placeholder="Your Contact..">
                  </fieldset>
                  
                    <fieldset class="personalcontainer">
                    <legend class="personalName">Booking Details</legend>
              
                    <label for="fname">Event Name</label>
                    <input type="text" id="fname" name="eventname" placeholder="Event name..">
               
                    <label for="view">Event type</label>
                    <select id="view" name="eventtype">
                      <option value="pool">Birthday Party</option>
                      <option value="garden">Farewell Party</option>
                      <option value="garden">Reunion Party</option>
                      <option value="garden">Other</option>
                    </select>
              
                    <label for="eventdate">Event Date:</label>
                      <input type="date" id="eventdate" name="eventdate">
              
                          <!-- Start Time -->
                    <label for="startTime">Start Time:</label>
                    <input type="time" id="startTime" name="starttime">
              
                    <!-- End Time -->
                    <label for="endTime">End Time:</label>
                    <input type="time" id="endTime" name="endtime">
              
              
                    <label for="view">Indoor or Outdoor</label>
                    <select id="view" name="view">
                      <option value="pool">Outdoor</option>
                      <option value="garden">Indoor</option>
                    </select>
                  </fieldset>
              
                  <fieldset class="personalcontainer">
                    <legend class="personalName">Additional Options</legend>
                    <div class="container">
                      <div class="slad">
                        <input type="checkbox" id="acroom" name="acroom">
                        <label for="acroom">DJ Music</label>
                      </div>
                      <div class="frad">
                        <label for="frAD">Photographers</label>
                        <input type="number" id="frAD" name="frAD" min="0" max="3" value="0">
                    </div>
                    </div>
                  </fieldset>
                    
                  <fieldset class="personalcontainer">
                    <legend class="personalName">Plus membership Perks</legend>
                    <label for="promoCode">Promo Code:</label>
                    <input type="text" id="promoCode" name="promoCode" placeholder="Enter Promo Code">
              
                    <div class="loyalty">
                    <input type="text" name="loyalty" id="show_loyaalty" readonly>
                    <button type="button" id="loyalty">Check loyalty</button>
                    </div>
              
                    <button type="submit" name="bookB" id="addBooking">Book Now</button>
                    <button type="button" id="add2fav" onclick="window.location.href='show_booking.php'">Show my bookings</button>

                  </fieldset>
                  </form>
                </div>
              </section>
              
        </main>

        <!-- Footer starts -->
        <footer>
            <div class="footer">
                <div id="footer-logo">
                    <img src="image/rimberio-black-bg.png">
                </div>

                <div class="contact">
                    <p>33/23/1/1, 1st Lane, Medawelikada Road, Rajagiriya. 10100. Sri Lanka</p>
                    <p>+94 114 544 994</p>
                    <p>info@theeventplanner.lk</p>
                </div>
                <div class="social-media">
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="twitter.com"><i class="fa-brands fa-x-twitter"></i></a>
                </div>
            </div>
        </footer>
    </body>
</html>

