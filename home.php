<!DOCTYPE html>
<html>
    <head>
        <title>Home | Rimberio Co.</title>
        <link rel="stylesheet" href="./css/home.css">
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
            <!-- welcome image starts -->
            <div class="image-1">
                <h3>We are...</h3>
                <h1>The Event Planner</h1>
                <h4><i>Your passion. Your Day. We Make It Happen</i></h4>
            </div> 
            
            <!-- We are here to help you -->

            <div class="entry-content">
                <div class="our-help">
                    <p>LOOKING FOR THE BEST EVENT PLANNERS IN SRI LANKA?</p>
                    <h6>We Are Here To Help You.</h6>
                </div>

                <div class="our-info">
                    <div class="container-1">
                        <div class="industry">
                            <a href="#"><i class="fa-regular fa-face-smile-beam fa-2xl"></i></a>
                            <h4>Industry professional</h4>
                            <p>Plan your wedding with industry professionals, with more than 12 years of experience.</p>
                        </div>
                    
                        <div>
                            <a href="#"><i class="fa-solid fa-cart-shopping fa-2xl"></i></a>
                            <h4>Discounts</h4>
                            <p>Exclusive discounts from selected service providers & suppliers</p>
                        </div>	
                    </div>
                    
                    <div class="container-2">
                        <div class="service">
                            <a href="#"><i class="fa-regular fa-pen-to-square fa-2xl"></i></a>
                            <h4>Friendly Service</h4>
                            <p>We will take away any stress and helping you to have a wonderful wedding planning experience.</p>
                        </div>
                    
                        <div>
                            <a href="#"><i class="fa-brands fa-themeco fa-2xl"></i></a>
                            <h4>Creativity</h4>
                            <p>Creative themes & design concepts</p>
                        </div>
                    </div>
                    
                    <div class="container-3">
                        <div class="tailor">
                            <a href="#"><i class="fa-solid fa-gears fa-2xl"></i></a>
                            <h4>Tailor Made Solutions</h4>
                            <p>Many tailor-made wedding planning solutions for you to choose according to your requirements.</p>
                        </div>
                    
                        <div>
                            <a href="#"><i class="fa-solid fa-power-off fa-2xl"></i></a>
                            <h4>Technology</h4>
                            <p>Plan your wedding in modern way using cutting edge technology</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="event-day">
                <div class="our-help">
                    <p>EVENT DAY IS YOUR DREAM DAY.</p>
                    <h6>We Make It Happen.</h6>
                </div>

                <DIV >
                    <p>Your Vision. Your Style. Your Passion. Your Day. We make it Happen.</p>
                    <p>Often people think that hiring a event planner is going to be a huge expense, but most of the time we can actually save you money. As well as passing on our supplier discounts directly to you, we will work with you to manage your wedding budget. You tell us what you want to spend and we will make sure you stick to this; we will work with you to get you the best value for money on every last detail. We are your best event planner in Sri Lanka.</p>
                </DIV>
            </div>

            <div class="event-pics">
                <div>
                    <img src="image/wedding-party1.jpg">
                    <img src="image/wedding-party2.jpg">
                    <img src="image/wedding-party3.jpg">
                    <img src="image/wedding-party4.jpg">
            </div>

        </main>
        <main class="client-feedback">
            <div class="our-help">
                <p>HAPPY CLIENTS</p>
                <h6>Testimonals</h6>
            </div>

            <div id="feedback">
                <div>
                    <p>They completely took away not only our stress but also the stress of parents of both parties allowing us all to enjoy 'Our Day without any hassle</p>
                    <h6>Hasini & Buddika</h6>
                </div>

                <div>
                    <p>We had so much fun and enjoyed every bit of our big day thanks to you all who took responsibility for the entire event Amidst all the chaos of pandernic and changing locations you guys gave us the fullest support to have a stress-free wedding..!! Thank you million times..!! Job Well Done..!! You guys are the best</p>
                    <h6>Vindya Tharindu</h6>
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