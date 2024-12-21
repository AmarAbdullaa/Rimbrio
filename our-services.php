<!DOCTYPE html>
<html>
    <head>
        <title>Home | Rimberio Co.</title>
        <link rel="stylesheet" href="css/our-services.css">
        <script src="https://kit.fontawesome.com/d11f03c652.js" crossorigin="anonymous"></script>
    </head>

    <body>
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
                session_start();
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
            <div class="banner-container">
                <img src="image/w1.jpg" alt="Banner Image" class="banner-image">
                <div class="banner-content">
                    <div class="left-section">
                        <h2 class="banner-heading">What We Offer</h2>
                    </div>
                    <div class="right-section">
                        <p>Vendor Booking</p>
                        <p>Connect with a wide range of wedding vendors</p>
                        <p>Personalized Recommendations</p>
                        <p>Receive personalized vendor recommendations based on your wedding preferences</p>
                    </div>
                </div>
            </div>

            <div class="card-container">

                <div class="w2 card card1 horizontal-slide" id="h1" >
                    <div class="card-content">
                        <h2>Vendor Management</h2>
                        <p>Keep track of all your booked vendors in one convenient location</p>  
                        <p>Flexible Booking Options</p>
                        <p>Choose from a variety of booking options</p>
                    </div>
                </div>	
                
                
                <div class="w3 card card2 horizontal-slide" id="h1" >
                    <div class="card-content">
                        <h2>Photographers</h2>
                        <p>Browse galleries to find your look</p> 
                    </div>
                </div>	
                
                <div class="w3 card card3 horizontal-slide" id="h1" >
                    <div class="card-content">
                        <h2>Reception venues</h2>
                        <p>find your Outdoor spaces</p> 
                    </div>
                </div>	
                
                <div class="w3 card card4 horizontal-slide" id="h1" >
                    <div class="card-content">
                        <h2>Cakes</h2>
                        <p>Meet bakers and setup tasting</p> 
                    </div>			 
                </div>
        
                <div class="w3 card card5 horizontal-slide" id="h1" >
                    <div class="card-content">
                        <h2>barns</h2>
                        <p>Reception venues</p>
                    </div> 			
                </div>
                
                <div class="w3 card card6 horizontal-slide" id="h1" >
                    <div class="card-content">
                        <h2>DJs</h2>
                        <p>Keep your dance floor moving</p>
                    </div>
                </div>
                
                <div class="w4 card card7 horizontal-slide" id="h1" >
                    <div class="card-content">
                        <h2>Catering services</h2>
                        <p>taste your favourite dish</p>
                    </div>
                </div>
                
                
                <div class="w5 card card8 horizontal-slide" id="h1" >
                    <div class="card-content">
                        <h2>VIP lounges</h2>
                        <p>meeting a truely unforgettable experience</p>
                    </div>
                </div>
        
            </div>
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