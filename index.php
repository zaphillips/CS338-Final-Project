<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Saint Anselm Gaming - Home</title>

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

  <!-- Visitor Hit Counter -->
  <?php
    //Opens Vistor Log to and Returns How Many Times the Website has been Visited
    $log = fopen("visitorLog.txt", "r");
    $count = fread($log, 1024);
    fclose($log);

    //Updates Hit Counter
    $count = $count + 1; 

    //Overwrites Previous Entry in Log File to Complete the Update
    $log = fopen("visitorLog.txt", "w");
    fwrite($log, $count);
    fclose($log);
  ?>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo.png" alt="Saint Anselm Gaming Logo">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.php" class="active">Home</a></li>
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

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
            <h6>Welcome to Saint Anselm Gaming</h6>
            <h2>YOUR ONE STOP SHOP FOR EVERYTHING GAMING</h2>
            <p>Saint Anselm Gaming is the best place to buy video games from all publishers, genres, and for all age groups. Hang out for a while and enjoy looking at some games!</p>
            <div class="main-button">
              <a href="shop.html">Browse Games</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="right-image">
            <a href="baldurs-gate.html"><img src="assets/images/categories-06.jpg" alt="Baldur's Gate Logo"></a>
            <span class="price">$0</span>
            <span class="offer">FREE</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-01.png" alt="Cloud Download Icon" style="max-width: 44px;">
              </div>
              <h4>Easy Downloads</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-02.png" alt="Person Icon" style="max-width: 44px;">
              </div>
              <h4>Multiplayer</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-03.png" alt="Replay Icon" style="max-width: 44px;">
              </div>
              <h4>Replayable Games</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-04.png" alt="User Interface Icon" style="max-width: 44px;">
              </div>
              <h4>Intuitive Navigation</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Trending</h6>
            <h2>Trending Games</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.html">View All</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="totk.html"><img src="assets/images/categories-01.jpg" alt="The Legend of Zelda: Tears of The Kingdom Cover"></a>
              <span class="price">$70</span>
            </div>
            <div class="down-content">
              <span class="category">Action-Adventure</span>
              <h4>The Legend of Zelda: Tears of the Kingdom</h4>
              <a href="totk.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="minecraft.html"><img src="assets/images/categories-02.jpg" alt="Minecraft Cover"></a>
              <span class="price"><em>$20</em>$19</span>
            </div>
            <div class="down-content">
              <span class="category">Survival</span>
              <h4>Minecraft</h4>
              <a href="minecraft.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="baldurs-gate.html"><img src="assets/images/categories-06.jpg" alt="Baldur's Gate Logo"></a>
              <span class="price"><em>$60</em>FREE</span>
            </div>
            <div class="down-content">
              <span class="category">Role-Playing Game</span>
              <h4>Baldur's Gate 3</h4>
              <a href="baldurs-gate.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="forza.html"><img src="assets/images/categories-04.jpg" alt="Forza Horizon 5 Cover"></a>
              <span class="price"><em>$60</em>$10</span>
            </div>
            <div class="down-content">
              <span class="category">Racing</span>
              <h4>Forza Horizon 5</h4>
              <a href="forza.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section most-played">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>TOP GAMES</h6>
            <h2>Most Played</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.html">View All</a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="totk.html"><img src="assets/images/categories-01.jpg" alt="The Legend of Zelda: Tears of The Kingdom Cover"></a>
            </div>
            <div class="down-content">
                <span class="category">Action-Adventure</span>
                <h4>The Legend of Zelda: Tears of the Kingdom</h4>
                <a href="totk.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="minecraft.html"><img src="assets/images/categories-02.jpg" alt="Minecraft Cover"></a>
            </div>
            <div class="down-content">
                <span class="category">Survival</span>
                <h4>Minecraft</h4>
                <a href="minecraft.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="ssbu.html"><img src="assets/images/categories-03.jpg" alt="Super Smash Bros. Ultimate Cover"></a>
            </div>
            <div class="down-content">
                <span class="category">Fighting</span>
                <h4>Super Smash Bros. Ultimate</h4>
                <a href="ssbu.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="forza.html"><img src="assets/images/categories-04.jpg" alt="Forza Horizon 5 Cover"></a>
            </div>
            <div class="down-content">
                <span class="category">Racing</span>
                <h4>Forza Horizon 5</h4>
                <a href="forza.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="mario.html"><img src="assets/images/categories-05.jpg" alt="Mario Party Superstars Cover"></a>
            </div>
            <div class="down-content">
                <span class="category">Party</span>
                <h4>Mario Party</h4>
                <a href="mario.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="baldurs-gate.html"><img src="assets/images/categories-06.jpg" alt="Baldur's Gate 3 Logo"></a>
            </div>
            <div class="down-content">
                <span class="category">Role-Playing Game</span>
                <h4>Baldur's Gate 3</h4>
                <a href="baldurs-gate.html">Explore</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Categories</h6>
            <h2>Top Categories</h2>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action-Adventure</h4>
            <div class="thumb">
              <a href="totk.html"><img src="assets/images/categories-01.jpg" alt="The Legend of Zelda: Tears of The Kingdom Cover"></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Survival</h4>
            <div class="thumb">
              <a href="minecraft.html"><img src="assets/images/categories-02.jpg" alt="Minecraft Cover"></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Fighting</h4>
            <div class="thumb">
              <a href="ssbu.html"><img src="assets/images/categories-03.jpg" alt="Super Smash Bros. Ultimate Cover"></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Racing</h4>
            <div class="thumb">
              <a href="forza.html"><img src="assets/images/categories-04.jpg" alt="Forza Horizon 5 Cover"></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Party</h4>
            <div class="thumb">
              <a href="mario.html"><img src="assets/images/categories-05.jpg" alt="Mario Party Superstars Cover"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="section cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="shop">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Shop</h6>
                  <h2>Better <em>Prices</em> Than Our Competitors</h2>
                </div>
                <p>Frequent sales and monthly free games!</p>
                <div class="main-button">
                  <a href="shop.html">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-2 align-self-end">
          <div class="subscribe">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>NEWSLETTER</h6>
                  <h2>Interact with your fellow gamers with the <em>SAGA</em> Newsletter!</h2>
                </div>
                <div class="search-input">
                  <form id="subscribe" action="#">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    <button type="submit">Subscribe Now</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
  <script src="vendor/jquery/jquery.min.js"></cript>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>