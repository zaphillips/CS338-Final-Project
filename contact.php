<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Saint Anselm Gaming - Contact Us</title>

    <script src="cookie.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
  </head>

<body onload="checkCookie()">

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="shop.html">Shop</a></li>
                      <!-- <li><a href="contact.html" class="active">Contact</a></li> -->
                      <li><a href="contact.php">Contact</a></li>
                      <li><a href="cart.php">Cart <i class="fa fa-shopping-bag"></i></a></li>
                      <li class="li-button" id ="nav-login"><a href="sign-in.html">Sign In</a></li>
                      <li class="nav-item dropdown" id ="nav-account">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a id="greeting-dropdown" class="dropdown-item"></a></li>
                          <li id="admin-dropdown"><a class="dropdown-item" href="admin.php">Dashboard</a></li>
                          <li id="logout-dropdown"><a class="dropdown-item" href="index.php" onclick="deleteCookie()">Log Out</a></li>
                        </ul>
                      </li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Contact Us</h3>
          <span class="breadcrumb"><a href="#">Home</a>  /  Contact</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-text">
            <div class="section-heading">
              <h6>Contact</h6>
              <h2>Say Hello!</h2>
            </div>
            <p>Saint Anselm Gaming is the best place to buy video games from all publishers, genres, and for all age groups. Hang out for a while and enjoy looking at some games!</p>
            <ul>
              <li><span>Address</span>100 St Anselm Dr, Goffstown, NH 03102</li>
              <li><span>Phone</span> +1 (603) 641-7000</li>
              <li><span>Email</span> saga@anselm.edu</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-content">
            <div class="row">
              <div class="col-lg-12">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2918.695422790731!2d-71.50860202437984!3d42.984689195411924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e249173daf6d11%3A0x8e02b6f37033ebf4!2sSaint%20Anselm%20College!5e0!3m2!1sen!2sus!4v1713638934658!5m2!1sen!2sus" width="100%" height="325px" frameborder="0" style="border:0; border-radius: 23px;" allowfullscreen=""></iframe>
                </div>
              </div>
              <div class="col-lg-12">
                <form id="contact-form" method="post">
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="First Name" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="surname" name="surname" id="surname" placeholder="Last Name" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-mail" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="message" id="message" placeholder="Message"></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button" onclick="location.href = 'index.php';">Send Message Now</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  

<?php
$servername = "apollo.anselm.edu";
$username = "team5";
$password = "team5pass";
$database = "DBteam5";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    $message = $conn->connect_error;
    die('<script>alert("Connection Failed: '.$message.'")</script>');
  }

$fname = $_POST['name'];
$lname = $_POST['surname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if ($fname != ""){
  $sql="INSERT INTO messages (fname, lname, email, subject, message) VALUES ('$fname','$lname', '$email', '$subject', '$message')";

  if ($conn->query($sql) == TRUE) {
      echo '<script>alert("Record added successfully")</script>';
  } else {
      echo '<script>alert("Error adding record: '. $conn->error.'")</script>';
  }
}

$conn->close();
?>

  <footer>
    <div class="container">
      <div class="col-lg-12 text-center">
        <p>Copyright © 2024 <a href="mailto:saga@anselm.edu">Saint Anselm Gaming</a>. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
          <script>
            const time = new Date(); //Returns Current Time Back to Footer of Given Page
            document.write(time);
          </script>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>