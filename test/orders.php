<?php
  include 'inc/conx.php';
?>
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
                <li class="dropdown active"> <a class="dropdown-toggle" href="index.php">Home</a>
                </li>
                <li class="dropdown active"><a class="dropdown-toggle" href="#">Buy Airtime</a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item " href="recharge.php">Airtime</a>
                      </li>
                      <li><a class="dropdown-item " href="data.php">Data Subscriptions</a>
                      </li>
                    </ul>
                </li>
                <li class="dropdown active"><a class="dropdown-toggle" href="#">Pay Bills</a>
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
                          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
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
    <section class="page-header page-header-text-light bg-secondary">
      <div class="hero-wrap py-5">
    
    <div class="hero-mask opacity-7 bg-dark"></div>
    <div class="hero-bg" style="background-image:url('./images/bg/image-2.jpg');"></div>
  <div class="hero-content py-2 py-lg-4 my-2 my-md-4">
      <div class="container mt-5">
        <div class="row align-items-center">
    <div class="col-12">
            <ul class="breadcrumb justify-content-start mb-0">
              <li><a href="index.php">Home</a></li>
              <li class="active">Orders</li>
            </ul>
          </div>
          <div class="col-12">
            <h1>Your Orders</h1>
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
      <div class="bg-light shadow-md rounded p-4">
        <ul class="nav nav-tabs justify-content-center mb-4" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">All</a> </li>
          <li class="nav-item"> <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">Recharge & Bill Payment</a> </li>
          <li class="nav-item"> <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">Booking</a> </li>
        </ul>
        <div class="tab-content my-3" id="myTabContent">
          <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
            <div class="table-responsive-md">
              <table class="table table-hover border">
                <thead class="thead-light">
                  <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Order ID</th>
                    <th class="text-center">Status</th>
                    <th class="text-right">Amount</th>
                    <th class="text-center"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="align-middle">06/06/2018</td>
                    <td class="align-middle"><img src="images/brands/operator/vodafone.jpg" class="img-thumbnail d-inline-flex mr-1"> <span class="text-1 d-inline-flex">Recharge of Vodafone Mobile 9696969696</span></td>
                    <td class="align-middle">5286977475</td>
                    <td class="align-middle text-center"><i class="fas fa-check-circle text-4 text-success" data-toggle="tooltip" data-original-title="Your order is Successful"></i></td>
                    <td class="align-middle text-right">$150</td>
                    <td class="align-middle text-center"><a href="#" data-toggle="tooltip" data-original-title="Repeat Order"><i class="fas fa-redo-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="align-middle">02/06/2018</td>
                    <td class="align-middle"><img src="images/brands/flights/indigo.png" class="img-thumbnail d-inline-flex mr-1"> <span class="text-1 d-inline-flex">Booking of Delhi to Sydney flight</span></td>
                    <td class="align-middle">5136907172</td>
                    <td class="align-middle text-center"><i class="fas fa-check-circle text-4 text-success" data-toggle="tooltip" data-original-title="Your order is Successful"></i></td>
                    <td class="align-middle text-right">$980</td>
                    <td class="align-middle text-center"><a href="#" data-toggle="tooltip" data-original-title="Repeat Order"><i class="fas fa-redo-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="align-middle">31/05/2018</td>
                    <td class="align-middle"><img src="images/brands/operator/vodafone.jpg" class="img-thumbnail d-inline-flex mr-1"> <span class="text-1 d-inline-flex">Bill Payment of Vodafone Mobile 9898989898</span></td>
                    <td class="align-middle">1072317951</td>
                    <td class="align-middle text-center"><i class="fas fa-ellipsis-h text-4 text-info" data-toggle="tooltip" data-original-title="Your order is in Progress"></i></td>
                    <td class="align-middle text-right">$99</td>
                    <td class="align-middle text-center"></td>
                  </tr>
                  <tr>
                    <td class="align-middle">25/05/2018</td>
                    <td class="d-lg-flex align-items-center"><span class="img-thumbnail d-inline-flex text-8 p-2 mr-1"><i class="fas fa-bus"></i></span> <span class="text-1 d-inline-flex">Booking of Mumbai to Surat Bus</span></td>
                    <td class="align-middle">4103520927</td>
                    <td class="align-middle text-center"><i class="fas fa-check-circle text-4 text-success" data-toggle="tooltip" data-original-title="Your order is Successful"></i></td>
                    <td class="align-middle text-right">$450</td>
                    <td class="align-middle text-center"><a href="#" data-toggle="tooltip" data-original-title="Repeat Order"><i class="fas fa-redo-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="align-middle">21/05/2018</td>
                    <td class="align-middle"><img src="images/brands/operator/vodafone.jpg" class="img-thumbnail d-inline-flex mr-1"> <span class="text-1 d-inline-flex">Recharge of Vodafone Mobile 9898989898</span></td>
                    <td class="align-middle">3079317986</td>
                    <td class="align-middle text-center"><i class="fas fa-times-circle text-4 text-danger" data-toggle="tooltip" data-original-title="Your order is Failed"></i></td>
                    <td class="align-middle text-right">$280</td>
                    <td class="align-middle text-center"><a href="#" data-toggle="tooltip" data-original-title="Retry Order"><i class="fas fa-redo-alt "></i></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
          <div class="table-responsive-md">
            <table class="table table-hover border">
              <thead class="thead-light">
                <tr>
                  <th>Date</th>
                  <th>Description</th>
                  <th>Order ID</th>
                  <th class="text-center">Status</th>
                  <th class="text-right">Amount</th>
                  <th class="text-center"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-middle">06/06/2018</td>
                  <td class="align-middle"><img src="images/brands/operator/vodafone.jpg" class="img-thumbnail d-inline-flex mr-1"> <span class="text-1 d-inline-flex">Recharge of Vodafone Mobile 9696969696</span></td>
                  <td class="align-middle">5286977475</td>
                  <td class="align-middle text-center"><i class="fas fa-check-circle text-4 text-success" data-toggle="tooltip" data-original-title="Your order is Successful"></i></td>
                  <td class="align-middle text-right">$150</td>
                  <td class="align-middle text-center"><a href="#" data-toggle="tooltip" data-original-title="Repeat Order"><i class="fas fa-redo-alt"></i></a></td>
                </tr>
                <tr>
                  <td class="align-middle">31/05/2018</td>
                  <td class="align-middle"><img src="images/brands/operator/vodafone.jpg" class="img-thumbnail d-inline-flex mr-1"> <span class="text-1 d-inline-flex">Recharge of Vodafone Mobile 9898989898</span></td>
                  <td class="align-middle">1072317951</td>
                  <td class="align-middle text-center"><i class="fas fa-ellipsis-h text-4 text-info" data-toggle="tooltip" data-original-title="Your order is in Progress"></i></td>
                  <td class="align-middle text-right">$99</td>
                  <td class="align-middle text-center"></td>
                </tr>
                <tr>
                  <td class="align-middle">21/05/2018</td>
                  <td class="align-middle"><img src="images/brands/operator/vodafone.jpg" class="img-thumbnail d-inline-flex mr-1"> <span class="text-1 d-inline-flex">Recharge of Vodafone Mobile 9898989898</span></td>
                  <td class="align-middle">3079317986</td>
                  <td class="align-middle text-center"><i class="fas fa-times-circle text-4 text-danger" data-toggle="tooltip" data-original-title="Your order is Failed"></i></td>
                  <td class="align-middle text-right">$280</td>
                  <td class="align-middle text-center"><a href="#" data-toggle="tooltip" data-original-title="Retry Order"><i class="fas fa-redo-alt "></i></a></td>
                </tr>
              </tbody>
            </table>
            </div>
          </div>
          <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
            <div class="table-responsive-md">
              <table class="table table-hover border">
                <thead class="thead-light">
                  <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Order ID</th>
                    <th class="text-center">Status</th>
                    <th class="text-right">Amount</th>
                    <th class="text-center"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="align-middle">02/06/2018</td>
                    <td class="align-middle"><img src="images/brands/flights/indigo.png" class="img-thumbnail d-inline-flex mr-1"> <span class="text-1 d-inline-flex">Booking of Delhi to Sydney flight</span></td>
                    <td class="align-middle">5136907172</td>
                    <td class="align-middle text-center"><i class="fas fa-check-circle text-4 text-success" data-toggle="tooltip" data-original-title="Your order is Successful"></i></td>
                    <td class="align-middle text-right">$980</td>
                    <td class="align-middle text-center"><a href="#" data-toggle="tooltip" data-original-title="Repeat Order"><i class="fas fa-redo-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td class="align-middle">25/05/2018</td>
                    <td class="d-lg-flex align-items-center"><span class="img-thumbnail d-inline-flex text-8 p-2 mr-1"><i class="fas fa-bus"></i></span> <span class="text-1 d-inline-flex">Booking of Mumbai to Surat Bus</span></td>
                    <td class="align-middle">4103520927</td>
                    <td class="align-middle text-center"><i class="fas fa-check-circle text-4 text-success" data-toggle="tooltip" data-original-title="Your order is Successful"></i></td>
                    <td class="align-middle text-right">$450</td>
                    <td class="align-middle text-center"><a href="#" data-toggle="tooltip" data-original-title="Repeat Order"><i class="fas fa-redo-alt"></i></a></td>
                  </tr>
                </tbody>
              </table>
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
</div><!-- Document Wrapper end -->

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