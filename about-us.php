<!DOCTYPE html>
<html>
  <head>
    <title>Home | Rimberio Co.</title>
    <link rel="stylesheet" href="css/about-us.css" />
    <script
      src="https://kit.fontawesome.com/d11f03c652.js"
      crossorigin="anonymous"
    ></script>
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
      <!-- first main div -->
      <div class="history">
        <div>
          <div class="our-help">
            <p>WE ARE</p>
            <h6>The Rimbirio Co.</h6>
          </div>

          <div class="our-info">
            <p>
              We are the best wedding planners in Colombo, Sri Lanka. Why we say
              it. We are industry professionals with 15 years of industry
              experience since 2005. So far we have successfully completed 450+
              events locally, 80+ Destinations events and also we are more
              strengthened with our sister companies which are the leading In the
              cooperate event industry.
            </p>

            <p>
              The Rimberio Co. is a sole subsidiary of My Events Asia , MASS
              Events and MyTicketsLK.
            </p>

            <p>
              Also we are member of Event Management Assosiation of Sri Lanka
              (EMA) and registered member of Sri Lanka Tourism Development
              Authority.
            </p>
          </div>

          <div class="our-help">
            <p>
                Your Vision. Your Style. Your Passion. Your Day. <br />
                We Make It Happen. We Are The Wedding Planner.
            </p>
          </div>
        </div>

        <div class="about-image">
          <img src="image/about-image.gif" />
        </div>
      </div>

      <div class="our-help">
        <h6>Meet Our Professionals</h6>
      </div>
      <!-- second main div -->

      <div class="profession">
        <div class="first">
          <div class="founder-image">
            <img src="image/Gayan-Attanayake.jpg"/>
          </div>

          <!-- gayan attanayake details -->
          <div class="founder-details">
            <h4>Gayan Attanayake</h4>
            <h5>(Founder / Director / Wedding Planner)</h5>

            <p>
              Gayan Attanayake who has built a name for himself and his company
              The Wedding Planer
            </p>

            <p>
              He started his career as a journalist & Radio announcer in 2002
              and completed with 8 years of media experience.
            </p>

            <p>
              He has over 15 years of experience and has worked in all aspects
              of the event management industry since 2005.
            </p>

            <p>
              Gayan Attanayake is holding top positions of Sri Lanka’s Leading
              Companies.
            </p>

            <ul>
              <li>
                MASS Events Pvt Ltd – Founder / Managing director / Show
                Director
              </li>
              <br />

              <li>TheWeddingplannerLK – Founder / Director</li>
              <br />

              <li>
                My Tickets Pvt Ltd ( MyTicketsLK ) – Co-Founder / Cheif
                Operating Officer
              </li>
              <br />

              <li>
                My Events Pvt Ltd ( My Events Asia ) – Co-Founder / Director –
                Business Development / Show director
              </li>
              <br />

              <li>Farmsburry Pvt Ltd – Co-Founder / Director</li>

              <br />

              <li>Medi Mart Pvt Ltd ( MedimartLK) – Co-Founder / Director</li>
              <br />

              <li>Mstore.LK – Founder / Director</li>

              <br />
            </ul>

            <p>
              Since 2005 he has planned and coordinated over 300 events in cooperate sectors, weddings, private parties. His concept design and development, enthusiasm has earned his reputation for unparalleled. excellence as an event planner.
            </p>

            <p>
              Also Gayan Attanayake is a well-known show director and he has contributed his service for massive solo artist’s concerns in the town. His job is to make sure that the wedding day and entire planning experience is stress-free and exactly as client’s request.
            </p>
          </div>
        </div>

        <!-- madhavi karunarathne details -->
        <div class="second">
          <div class="founder-image">
            <img src="image/madavi-karunarathna.jpg" alt="" />
          </div>

          <div class="founder-details">
            <h4>Madavi Karunarathana</h4>

            <h5>(Director / Wedding Planner)</h5>

            <p class="para">
              Madavi Karunarathna serves 10 years of event management and
              etertainment industry and aloso she was a former fashion designer.
            </p>

            <p class="para">
              Madavi Karunarathna graduated with BA (Hons) in Fashion Design
              (Northumbria university UK) in 210 and started her career in 2011
              as a Designer later she joined MASS Events as a full time member
              in 2014 as an event coordinator .
            </p>

            <p class="para">
              With her experience it’s all about creating a beautiful design for
              the wedding and finding vendors within the wedding budget. She
              enjoys the diversity that each client/event offers.
            </p>

            <p class="para">
              She is very detail oriented and thrives on ensuring that even the
              smallest details are done to perfection
            </p>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer starts -->
    <footer>
      <div class="footer">
        <div id="footer-logo">
          <img src="image/rimberio-black-bg.png" />
        </div>

        <div class="contact">
          <p>
            33/23/1/1, 1st Lane, Medawelikada Road, Rajagiriya. 10100. Sri Lanka
          </p>
          <p>+94 114 544 994</p>
          <p>info@rimberio.lk</p>
        </div>
        <div class="social-media">
          <a href="https://www.instagram.com/"
            ><i class="fa-brands fa-instagram"></i
          ></a>
          <a href="https://www.facebook.com/"
            ><i class="fa-brands fa-square-facebook"></i
          ></a>
          <a href="twitter.com"><i class="fa-brands fa-x-twitter"></i></a>
        </div>
      </div>
    </footer>
  </body>
</html>
