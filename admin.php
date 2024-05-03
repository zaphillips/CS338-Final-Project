<!DOCTYPE html>
<html lang="en">

  <head>

    <script src="myscripts.js"></script>
    <script src="cookie.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Saint Anselm Gaming - Admin</title>

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
                      <!-- <li><a href="product-details.html">Product Details</a></li> -->
                      <!-- <li><a href="contact.html">Contact</a></li> -->
                      <li><a href="contact.php">Contact</a></li>
                      <li><a href="cart.html">Cart <i class="fa fa-shopping-bag"></i></a></li>
                      <li class="li-button" id ="nav-login"><a href="sign-in.html">Sign In</a></li>
                      <li class="nav-item dropdown" id ="nav-account">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a id="greeting-dropdown" class="dropdown-item"></a></li>
                          <li id="admin-dropdown"><a class="dropdown-item active" href="#top"><u>Dashboard</u></a></li>
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
          <h3>Admin Dashboard</h3>
          <span class="breadcrumb"><a href="index.php">Home</a>  /  Admin Dashboard</span>
        </div>
      </div>
    </div>
  </div>
    
  <div class="login-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="d-flex justify-content-center section-heading">
            <h2>Admin Dashboard</h2>
          </div>
          <div class="d-flex justify-content-center">
              <div class="col-lg-12 justify-content:center height:20px">
                <fieldset>
                  <form method = "POST">
                    <button name = "totalSales" type="submit">Calculate Total Sales of the Site</button>
                    <button name = "tax" type="submit">Calculate Tax Incurred on Total Sales Made By Site</button>
                    <button name = "numProdSold" type="submit">Calculate Number of Games Sold</button>
                    <button name = "bestSellingProd" type="submit">Determine Best Selling Game</button>
                    <button name = "worstSellingProd" type="submit">Determine Worst Selling Game</button>
                    <button name = "visitors" type="submit" value="1">Calculate Total Visitors of the Site</button>
                    <button name = "testConn" type="submit">Test Connection with Apollo</button>
                  </form>
                </fieldset>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
    if(isset($_POST['totalSales'])) {
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

      //Query
      $sql = "SELECT SUM(SoldUnits * Price) as 'Total Sales' FROM sales";
      $result = $conn->query($sql);

      if ($result == TRUE) {
        $record = mysqli_fetch_array($result);
        echo '<script>alert("Total Sales: $'. $record['Total Sales'] .'")</script>';
        } else {
          $message = $conn->error;
          echo '<script>alert("Error Sending Query: '.$message.'")</script>';
      }
      //Close Connection
      $_POST = array();
      $conn->close();
    }

    if(isset($_POST['tax'])) {
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

      //Query
      $sql = "SELECT SUM(SoldUnits * Price) *.20 as 'Tax' FROM sales";
      $result = $conn->query($sql);

      if ($result == TRUE) {
        $record = mysqli_fetch_array($result);
        echo '<script>alert("Tax: $'. $record['Tax'] .'")</script>';
        } else {
          $message = $conn->error;
          echo '<script>alert("Error Sending Query: '.$message.'")</script>';
      }
      //Close Connection
      $_POST = array();
      $conn->close();
    }

    if(isset($_POST['numProdSold'])) {
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

      //Query
      $sql = "SELECT SUM(SoldUnits) as 'Units' FROM sales";
      $result = $conn->query($sql);

      if ($result == TRUE) {
        $record = mysqli_fetch_array($result);
        echo '<script>alert("Total Number of Games Sold: '. $record['Units'] .'")</script>';
        } else {
          $message = $conn->error;
          echo '<script>alert("Error Sending Query: '.$message.'")</script>';
      }
      //Close Connection
      $_POST = array();
      $conn->close();
    }

    if(isset($_POST['bestSellingProd'])) {
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

      //Query
      $sql = "SELECT Title as 'Title', SoldUnits as 'SoldUnits' FROM sales AS a WHERE (SELECT MAX(SoldUnits) FROM sales AS b WHERE a.SoldUnits = b.SoldUnits) GROUP BY GameID ORDER BY SoldUnits DESC LIMIT 1";
      $result = $conn->query($sql);

      if ($result == TRUE) {
        $record = mysqli_fetch_array($result);
        echo '<script>alert("'.$record['Title'].' was the best selling game with '. $record['SoldUnits'] .' units sold.")</script>';
        } else {
          $message = $conn->error;
          echo '<script>alert("Error Sending Query: '.$message.'")</script>';
      }
      //Close Connection
      $_POST = array();
      $conn->close();
    }

    if(isset($_POST['worstSellingProd'])) {
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

      //Query
      $sql = "SELECT Title as 'Title', SoldUnits as 'SoldUnits' FROM sales AS a WHERE (SELECT MAX(SoldUnits) FROM sales AS b WHERE a.SoldUnits = b.SoldUnits) GROUP BY GameID ORDER BY SoldUnits ASC LIMIT 1";
      $result = $conn->query($sql);
      
      if ($result == TRUE) {
        $record = mysqli_fetch_array($result);
        echo '<script>alert("'.$record['Title'].' was the worst selling game with '. $record['SoldUnits'] .' units sold.")</script>';
        } else {
          $message = $conn->error;
          echo '<script>alert("Error Sending Query: '.$message.'")</script>';
      }
      //Close Connection
      $_POST = array();
      $conn->close();
    }
    
    if(isset($_POST['visitors'])) {
        //Opens Vistor Log to and Returns How Many Times the Website has been Visited
        $log = fopen("visitorLog.txt", "r");
        $count = fread($log, 1024);
        fclose($log);
  
        echo '<script>alert("Visitors: '.$count.'")</script>';
      }

    if(isset($_POST['testConn'])) {
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
      else{
          echo '<script>alert("Apollo Connection Test was Successful")</script>';
      }

      //Close Connection
      $_POST = array();
      $conn->close();
    }
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