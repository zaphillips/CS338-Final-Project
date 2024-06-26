<!DOCTYPE html>
<html lang="en">

  <head>

    <script src="myscripts.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Saint Anselm Gaming - Cart</title>

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

<body onload="checkCookie(), setQuantities()">

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
                        <img src="assets/images/logo.png" alt="Saga Logo">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="shop.html">Shop</a></li>
                      <li><a href="contact.php">Contact</a></li>
                      <li><a href="cart.php" class="active">Cart <i class="fa fa-shopping-bag"></i></a></li>
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
          <h3>Cart</h3>
          <span class="breadcrumb"><a href="index.php">Home</a>  /  Cart</span>
        </div>
      </div>
    </div>
  </div>

  <?php
    if(array_key_exists('purchase', $_POST)) { 
      purchase();
    } 

    function purchase() {
        echo '<script>purchase();</script>';
        echo '<script>window.location.href = "index.php"</script>';
    }
  ?>

  <div class="cart-page section">
    <div class="header">
      <h1>Cart</h1>
    </div>
    <div class="header" id="empty-message">
      <h2>Your Cart is Empty</h2>
    </div>
    <div class="container" id="cart-grid">
      <div class="row column-titles">
        <div class="col-lg justify-content-center">
          <h4>Item</h4>
        </div>
        <div class="col-md justify-content-center">
          <h4>Quantity</h4>
        </div>
        <div class="col-md justify-content-center">
          <h4>Subtotal</h4>
        </div>
      </div>
      <div class="row game" id="baldurs">
        <div class="col-lg">
          <h6>Baldur's <br>Gate 3</h6>
          <img src="assets/images/categories-06.jpg">
        </div>
        <div class="col-md justify-content-center">
          <form name="baldurs-form">
            <input name="quantity" type="number" class="form-control" id="baldurs-qty" aria-describedby="quantity" placeholder="0" min="0" max="99" onchange="updateSubtotals()">
          </form>
        </div>
        <div id="baldurs-subtotal" class="col-md justify-content-center">$0</div>
      </div>
      <div class="row game" id="forza">
        <div class="col-lg">
          <h6>Forza <br>Horizon 5</h6>
          <img src="assets/images/categories-04.jpg">
        </div>
        <div class="col-md justify-content-center">
          <form name="forza-form">
            <input name="quantity" type="number" class="form-control" id="forza-qty" aria-describedby="quantity" placeholder="0" min="0" max="99" onchange="updateSubtotals()">
          </form>
        </div>
        <div id="forza-subtotal" class="col-md justify-content-center">$0</div>
      </div>
      <div class="row game" id="mario">
        <div class="col-lg">
          <h6>Mario<br>Party<br>Superstars</h6>
          <img src="assets/images/categories-05.jpg">
        </div>
        <div class="col-md justify-content-center">
          <form name="mario-form">
            <input name="quantity" type="number" class="form-control" id="mario-qty" aria-describedby="quantity" placeholder="0" min="0" max="99" onchange="updateSubtotals()">
          </form>
        </div>
        <div id="mario-subtotal" class="col-md justify-content-center">$0</div>
      </div>
      <div class="row game" id="minecraft">
        <div class="col-lg">
          <h6>Minecraft</h6>
          <img src="assets/images/categories-02.jpg">
        </div>
        <div class="col-md justify-content-center">
          <form name="minecraft-form" method="post">
            <input name="quantity" type="number" class="form-control" id="minecraft-qty" aria-describedby="quantity" placeholder="0" min="0" max="99" onchange="updateSubtotals()">
          </form>
        </div>
        <div id="minecraft-subtotal" class="col-md justify-content-center">$0</div>
      </div>
      <div class="row game" id="ssbu">
        <div class="col-lg">
          <h6>Super<br>Smash Bros.<br>Ultimate</h6>
          <img src="assets/images/categories-03.jpg">
        </div>
        <div class="col-md justify-content-center">
          <form name="ssbu-form" method="post">
            <input name="quantity" type="number" class="form-control" id="ssbu-qty" aria-describedby="quantity" placeholder="0" min="0" max="99" onchange="updateSubtotals()">
          </form>
        </div>
        <div id="ssbu-subtotal" class="col-md justify-content-center">$0</div>
      </div>
      <div class="row game" id="totk">
        <div class="col-lg">
          <h6>The Legend <br> of Zelda:<br> TOTK</h6>
          <img src="assets/images/categories-01.jpg">
        </div>
        <div class="col-md justify-content-center">
          <form name="zelda-form">
            <input name="quantity" type="number" class="form-control" id="zelda-qty" aria-describedby="quantity" placeholder="0" min="0" max="99" onchange="updateSubtotals()">
          </form>
        </div>
        <div id="zelda-subtotal" class="col-md justify-content-center">$0</div>
      </div>
      <hr>
      <div id="purchase-section">
        <form method="post">
          <input id="purchaseButton" type="submit" class = "button" name="purchase" value="complete purchase"/>
        </form>
        <h6 id="total_purchase">Total: $0</h6>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
  
  </body>
</html>