<!DOCTYPE html>
<html>
    <head>
        <title>Home | Rimberio Co.</title>
        <link rel="stylesheet" href="css/contact-us.css">
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

            <div class="contact-us">

                <div class="contact-details">
                    <div class="heading">
                        <p>GET IN TOUCH</p>
                        <h6>Rimberio Co.<br> Event Planner LK</h6>
                    </div>

                    <div>
                        <p>Wedding Planner for your wedding! You may be thinking to yourself why do I need a wedding planner? Well, your wedding day is going to be one of, if not, the most important days of your life, so why try and do it all yourself? You hire an expert to do the catering, take photos, make the cake, so why not hire a professional to help with the wedding planning? We are Leaving you with only the fun and excitement of planning, helping you to have a wonderful wedding planning experience.</p>
                    </div>

                    <div>
                        <i class="fa-solid fa-mobile-retro">   Phone</i>
                        <p>+94 114 544 994 ( Land) | +94 777 530 430 (Mobile) | +94 770 470 430 (Mobile)</p>

                        <i class="fa-regular fa-envelope">   Email</i>
                        <p>info@theeventplanner.lk</p>

                        <i class="fa-solid fa-location-dot">   Address</i>
                        <p>2A/1, Rodrigo Lane, Dehiwala</p>

                        <i class="fa-brands fa-safari">   Website</i>
                        <a href="home.html"><p>theeventplanner.lk</p></a>
                    </div>
                    

                </div>

                <div class="feedback">
                    
                    <div class="heading">
                        <p>CONTACT FORM</p>
                        <h6>Give Your Feedback</h6>
                        <p>Your email address will not be published. Required fields are marked <span style="color: red;">*</span></p>
                    </div>

                    <div class="feedback-form">
                        <form>
                            <input type="text" name="name" placeholder="Your Name" required><br>
                            <input type="email" name="email" placeholder="Email Address" required><br>
                            <input type="text" name="subject" placeholder="Subject" required><br>
                            <textarea type="text" name="message" placeholder="Message goes here..."></textarea><br>
                            <input type="submit" name="submit" class="custom-submit">
                        </form>
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