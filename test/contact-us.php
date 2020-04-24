<?php include 'inc/conx.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon" />
<title>SmartBox - Recharge & Bill Payment</title>
<meta name="description" content="Chargepay - Recharge & Bill Payment Gateway">
<meta name="author" content="danoitech.com">

<!-- Web Fonts
============================================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
<script src="https://kit.fontawesome.com/3221a4a972.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="vendor/owl.carousel/assets/owl.carousel.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/owl.carousel/assets/owl.theme.default.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />

</head>
<body>
<!-- Preloader -->
<div id="preloader"><div data-loader="dual-ring"></div></div><!-- Preloader End -->

<!-- Document Wrapper   
============================================= -->
<div id="main-wrapper"> 
  
  <!-- Header
  ============================================= -->
  <header id="header" class="bg-transparent header-text-light header-border">
    <div class="container">
      <div class="header-row">
        <div class="header-column justify-content-start"> 
          
          <!-- Logo
          ============================================= -->
          <div class="logo"> <a href="index.php" title="SmartBox"><h2 style="color: white">SmartBox</h2></a> </div>
          <!-- Logo end --> 
          
        </div>
        <div class="header-column justify-content-end"> 
          
          <!-- Primary Navigation
          ============================================= -->
          <nav class="primary-menu navbar navbar-expand-lg">
            <div id="header-nav" class="collapse navbar-collapse">
              <ul class="navbar-nav">
                <li class="dropdown"> <a class="dropdown-toggle" href="index.php">Home</a>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" href="#">Buy Airtime</a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item " href="recharge.php">Airtime</a>
                      </li>
                      <li><a class="dropdown-item " href="data.php">Data Subscriptions</a>
                      </li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" href="#">Pay Bills</a>
                  <ul class="dropdown-menu">
                      <li ><a class="dropdown-item " href="electricity.php">Electricity Bills</a>
                      </li>
                      <li ><a class="dropdown-item " href="cable.php">Cable Tv Blls</a>
                      </li>
                    </ul>
                </li>
                
                <?php
                  if (isset($_SESSION['userEmail'])) {
                    echo '
                      <li class="dropdown login-signup ml-lg-2">
                        <a class="pl-lg-4 pr-0"  href="profile.php" title="Profile Page">
                          My Account<span class="d-none d-lg-inline-block">
                          <i class="fas fa-user"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="orders.php">Transactions</a></li>
                          <li><a class="dropdown-item " href="logout.php">Logout</a></li>
                        </ul>
                      </li>
                    ';
                  }else{
                    echo '<li class="login-signup ml-lg-2"><a class="pl-lg-4 pr-0"  href="profile.php" title="Login / Sign up">My Account<span class="d-none d-lg-inline-block"><i class="fas fa-user"></i></span></a></li>';
                  }
                ?>
              </ul>
            </div>
          </nav>
          <!-- Primary Navigation end --> 
        </div>
        
        <!-- Collapse Button
        ============================================= -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>
      </div>
    </div>
  </header>
  <!-- Header end --> 

  
    <!-- Page Header
    ============================================= -->
    <section class="page-header page-header-text-light py-0">
      <div class="hero-wrap py-5">
        
        <div class="hero-mask opacity-7 bg-dark"></div>
        <div class="hero-bg" style="background-image:url('./images/bg/image-2.jpg');"></div>
      <div class="hero-content py-2 py-lg-4 my-2 my-md-4">
          <div class="container mt-5">
            <div class="row align-items-center">
        <div class="col-12">
                <ul class="breadcrumb justify-content-start mb-0">
                  <li><a href="index.php">Home</a></li>
                  <li class="active">Contact Us</li>
                </ul>
              </div>
              <div class="col-12">
                <h1>Contact Us</h1>
              </div>
            </div>
          </div>
        </div>
       </div>
    </section><!-- Page Header end -->
    
  <!-- Content
  ============================================= -->
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="bg-light shadow-md rounded h-100 p-3">
            <iframe class="h-100 w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2857.002331099801!2d3.351962424625662!3d6.6020280510716045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9228fa2a3999%3A0xd7a8324bddbba1f0!2sIkeja!5e0!3m2!1sen!2sng!4v1586170415509!5m2!1sen!2sng" allowfullscreen=""></iframe>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="bg-light shadow-md rounded p-4">
            <h2 class="text-6">Get in touch</h2>
            <p class="text-3">For Customer Support and Query, Get in touch with us: <a href="#">Help</a></p>
            <div class="featured-box style-1">
              <div class="featured-box-icon text-primary"> <i class="fas fa-map-marker-alt"></i></div>
              <h3>Quickai Inc.</h3>
              <p>4th Floor, Plot No.22, Above Public Park<br>
                145 Murphy Canyon Rd.<br>
                Suite 100-18<br>
                San Diego CA 2028 </p>
            </div>
            <div class="featured-box style-1">
              <div class="featured-box-icon text-primary"> <i class="fas fa-phone"></i> </div>
              <h3>Telephone</h3>
              <p>(+060) 9898980098, (+060) 8898880088</p>
            </div>
            <div class="featured-box style-1">
              <div class="featured-box-icon text-primary"> <i class="fas fa-envelope"></i> </div>
              <h3>Business Inquiries</h3>
              <p>info@quickai.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- Content end -->
  
   <!-- Footer
  ============================================= -->
  <?php include 'inc/footer.php'; ?>
  <!-- Footer end --> 

<!-- Back to Top
============================================= -->
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>


<!-- Script -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script> 
<script src="js/theme.js"></script> 

</body>
</html>