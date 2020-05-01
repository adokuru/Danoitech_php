<?php include 'inc/conx.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon" />
<title>SmartVox - Recharge & Bill Payment</title>
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
<link rel="stylesheet" type="text/css" href="css/custom.css" />


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
          <div class="logo"> <a href="index.php" title="SmartVox"><h2 style="color: white">SmartVox</h2></a> </div>
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
                <li class="dropdown active"><a class="dropdown-toggle" href="#">Buy Airtime</a>
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
                      <li class="dropdown active login-signup ml-lg-2">
                        <a class="dropdown-toggle pl-lg-4 pr-0" href="#">
                          My Account<span class="d-none d-lg-inline-block">
                          <i class="fas fa-user"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="profile.php">Dashboard</a></li>
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

  
  <!-- Content
  ============================================= -->
  <div id="content">
    
    <!-- Secondary Navigation
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
              <li class="active">Airtime Recharge</li>
            </ul>
          </div>
          <div class="col-12">
            <h1>Airtime Recharge</h1>
          <p class="lead mb-0"></p>
          </div>
        </div>
      </div>
    </div>
   </div>
    </section>

    <!-- Secondary Navigation end -->
    
    <section class="container">
      <div class="bg-light shadow-md rounded p-4">
        <div class="row">
        
          <!-- Airtime Recharge
          ============================================= -->
          <div class="col-lg-4 mb-4 mb-lg-0">
            <h2 class="text-4 mb-3"> Recharge Your Line</h2>
            <form id="recharge-bill" method="post">
              <div class="form-group">
                  <select class="custom-select" id="Rechargeoperator" name="Rechargeoperator" required="">
                    <option value="">Select Your Operator</option>
                      <option value="airtel">AIRTEL</option>
                      <option value="glo">GLO</option>
                      <option value="mtn">MTN</option>
                      <option value="9mobile">9 Mobile</option>
                  </select>
                </div>
              <div class="form-group">
                <input type="text" class="form-control" data-bv-field="number" id="phoneNumber" name="phoneNumber" required placeholder="Enter Phone Number">
              </div>
              <div class="form-group input-group">
                <div class="input-group-prepend"> <span class="input-group-text">&#8358;</span> </div>
                <input class="form-control" id="Rechargeamount" name="Rechargeamount" placeholder="Enter Amount" required type="text">
              </div>
              <button class="btn btn-primary btn-block" id="rechargesubmit" name="rechargesubmit" type="submit">Continue</button>
            </form>
          </div><!-- CableTv Recharge end -->
          
          <!-- Slideshow
          ============================================= -->
          <div class="col-lg-8">
            <div class="owl-carousel owl-theme slideshow single-slider">
              <div class="item"><a href="#"><img class="img-fluid" src="images/slider/banner-5.jpg" alt="banner 5" /></a></div>
              <div class="item"><a href="#"><img class="img-fluid" src="images/slider/banner-9.jpg" alt="banner 8" /></a></div>
              <div class="item"><a href="#"><img class="img-fluid" src="images/slider/banner-7.jpg" alt="banner 3" /></a></div>
            </div>
          </div><!-- Slideshow end -->
          
        </div>
      </div>
    </section>
    
    <!-- Tabs
    ============================================= -->
    <div class="section pt-4 pb-3">
      <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"> <a class="nav-link active" id="mobile-recharge-tab" data-toggle="tab" href="#mobile-recharge" role="tab" aria-controls="mobile-recharge" aria-selected="true">CableTv Bill Payment</a> </li>
          <li class="nav-item"> <a class="nav-link" id="billpayment-tab" data-toggle="tab" href="#billpayment" role="tab" aria-controls="billpayment" aria-selected="false">Best Offers</a> </li>
          <li class="nav-item"> <a class="nav-link" id="why-quickai-tab" data-toggle="tab" href="#why-quickai" role="tab" aria-controls="why-quickai" aria-selected="false">Pay Online</a> </li>
        </ul>
        <div class="tab-content my-3" id="myTabContent">
          <div class="tab-pane fade show active" id="mobile-recharge" role="tabpanel" aria-labelledby="mobile-recharge-tab">
            <p>Instant Online CableTv Bill Payment Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum sensibus no cum. Eius eleifend in quo. At mei alia iriure propriae.</p>
            <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo. Cu pro facer sententiae, ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros adipiscing ut. Quo in nobis nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci pri. Id eum prima adipisci. Ius cu minim theophrastus, legendos pertinacia an nam.</p>
            </div>
          <div class="tab-pane fade" id="billpayment" role="tabpanel" aria-labelledby="billpayment-tab">
            <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo. Cu pro facer sententiae, ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros adipiscing ut. Quo in nobis nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci pri. Id eum prima adipisci. Ius cu minim theophrastus, legendos pertinacia an nam.</p>
            <p>Instant Online mobile recharge Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum sensibus no cum. Eius eleifend in quo. At mei alia iriure propriae.</p>
          </div>
          <div class="tab-pane fade" id="why-quickai" role="tabpanel" aria-labelledby="why-quickai-tab">
            <p>Cu pro facer sententiae, ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros adipiscing ut. Quo in nobis nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci pri. Id eum prima adipisci. Ius cu minim theophrastus, legendos pertinacia an nam.</p>
            <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo.</p>
            <p>Instant Online mobile recharge Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum sensibus no cum. Eius eleifend in quo. At mei alia iriure propriae.</p>
          </div>
        </div>
      </div>
    </div><!-- Tabs end -->
    
    <!-- Refer & Earn
    ============================================= -->
    <section class="hero-wrap section shadow-md">
      <div class="hero-mask opacity-5 bg-dark"></div>
      <div class="hero-bg" style="background-image:url('./images/bg/image-2.jpg');"></div>
      <div class="hero-content">
        <div class="container">
          <h2 class="text-9 font-weight-500 text-light text-center">Refer & Earn</h2>
          <p class="lead text-light opacity-8 text-center mb-5">Refer your friends and earn up to &#8358;20.</p>
          <div class="row">
            <div class="col-md-4">
              <div class="featured-box text-center p-4">
                <div class="hero-mask opacity-7 bg-dark rounded"></div>
                <div class="hero-content">
                  <div class="featured-box-icon shadow-none text-light mt-3 mb-4"> <i class="fas fa-bullhorn"></i> </div>
                  <h3 class="text-light">You Refer Friends</h3>
                  <p class="text-3 text-light opacity-8">Share your referral link with friends. They get &#8358;10.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-4 mt-md-0">
              <div class="featured-box text-center p-4">
                <div class="hero-mask opacity-7 bg-primary rounded"></div>
                <div class="hero-content">
                  <div class="featured-box-icon shadow-none text-light mt-3 mb-4"> <i class="fas fa-sign-in-alt"></i> </div>
                  <h3 class="text-light">Your Friends Register</h3>
                  <p class="text-3 text-light opacity-8">Your friends Register with using your referral link.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-4 mt-md-0">
              <div class="featured-box text-center p-4">
                <div class="hero-mask opacity-7 bg-dark rounded"></div>
                <div class="hero-content">
                  <div class="featured-box-icon shadow-none text-light mt-3 mb-4"> <i class="fas fa-dollar-sign"></i> </div>
                  <h3 class="text-light">Earn You</h3>
                  <p class="text-3 text-light opacity-8">You get &#8358;20. You can use these credits to take recharge.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center pt-5"> <a href="#" class="btn btn-outline-light shadow-none">Get Started Earn</a> </div>
        </div>
      </div>
    </section>
    <!-- Refer & Earn end --> 
    
    <!-- Partners
    ============================================= -->
    <div class="section bg-light">
      <div class="container">
        <h2 class="text-9 font-weight-500 text-center mb-4">Our Partners</h2>
        <ul class="nav nav-tabs justify-content-center" id="myPartners" role="tablist">
          <li class="nav-item"> <a class="nav-link active" id="operator-one-tab" data-toggle="tab" href="#operator-one" role="tab" aria-controls="operator-one" aria-selected="true">Airtime</a> </li>
          <li class="nav-item"> <a class="nav-link" id="operator-two-tab" data-toggle="tab" href="#operator-two" role="tab" aria-controls="operator-two" aria-selected="false">Data</a> </li>
          <li class="nav-item"> <a class="nav-link" id="operator-three-tab" data-toggle="tab" href="#operator-three" role="tab" aria-controls="operator-three" aria-selected="false">Electricity</a> </li>
          <li class="nav-item"> <a class="nav-link" id="operator-four-tab" data-toggle="tab" href="#operator-four" role="tab" aria-controls="operator-three" aria-selected="false">Cable TV</a> </li>
        </ul>
        <div class="tab-content mt-4" id="myPartnersContent">
          <div class="tab-pane fade show active" id="operator-one" role="tabpanel" aria-labelledby="operator-one-tab">
            <div class="brands-grid">
              <div class="row">
                <div class="col-4 col-sm-3 col-md-2 col-lg text-center"> <a href=""> <img class="img-fluid border rounded-circle" src="images/brands/operator/airtel.png" alt="Brands"> <span class="d-block">Airtel</span> </a> </div>
                <div class="col-4 col-sm-3 col-md-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/glo.png" alt="Brands"><span class="d-block">GLO</span></a></div>
                <div class="col-4 col-sm-3 col-md-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/mtn.png" alt="Brands"><span class="d-block">MTN</span></a></div>
                <div class="col-4 col-sm-3 col-md-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/9m.png" alt="Brands"><span class="d-block">9 Mobile</span></a></div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="operator-two" role="tabpanel" aria-labelledby="operator-two-tab">
            <div class="brands-grid">
              <div class="row">
                <div class="col-4 col-sm-3 col-md-2 col-lg text-center"> <a href=""> <img class="img-fluid border rounded-circle" src="images/brands/operator/airtel.png" alt="Brands"> <span class="d-block">Airtel</span> </a> </div>
                <div class="col-4 col-sm-3 col-md-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/glo.png" alt="Brands"><span class="d-block">GLO</span></a></div>
                <div class="col-4 col-sm-3 col-md-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/mtn.png" alt="Brands"><span class="d-block">MTN</span></a></div>
                <div class="col-4 col-sm-3 col-md-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/9m.png" alt="Brands"><span class="d-block">9 Mobile</span></a></div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="operator-three" role="tabpanel" aria-labelledby="operator-three-tab">
            <div class="brands-grid">
              <div class="row">
                <div class="col-4 col-sm-2 col-lg text-center"> <a href=""> <img class="img-fluid border rounded-circle" src="images/brands/operator/AEDC.png" alt="Brands"> <span class="d-block">Abuja Electricity Distribution Plc</span> </a> </div>
                <div class="col-4 col-sm-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/BEDC.png" alt="Brands"><span class="d-block">Benin Electricity Distribution Company Plc</span></a></div>
                <div class="col-4 col-sm-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/EKEDC.png" alt="Brands"><span class="d-block">Eko Electricity Distribution Company Plc</span></a></div>
                <div class="col-4 col-sm-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/EEDC.png" alt="Brands"><span class="d-block">Enugu Electricity Distribution Plc</span></a></div>
                <div class="col-4 col-sm-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/IEDC.png" alt="Brands"><span class="d-block">Ikeja Electricity Distribution company Plc</span></a></div>
                <div class="col-4 col-sm-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/JEDC.png" alt="Brands"><span class="d-block">Jos Electricity Distribution Plc</span></a></div>
                <div class="col-4 col-sm-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/KADEC.png" alt="Brands"><span class="d-block">Kaduna Electricity Distribution Company Plc</span></a></div>
                <div class="col-4 col-sm-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/Kedco.png" alt="Brands"><span class="d-block">Kano Electricity Distribution Company Plc</span></a></div>
                <div class="col-4 col-sm-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/PHEDC.png" alt="Brands"><span class="d-block">Port Harcourt Electricity Distribution company Plc</span></a></div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="operator-four" role="tabpanel" aria-labelledby="operator-four-tab">
            <div class="brands-grid">
              <div class="row">
                <div class="col-4 col-sm-2 col-lg text-center"> <a href=""> <img class="img-fluid border rounded-circle" src="images/brands/operator/dstv.png" alt="Brands"> <span class="d-block">DSTV</span> </a> </div>
                <div class="col-4 col-sm-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/gotv.png" alt="Brands"><span class="d-block">GOTV</span></a></div>
                <div class="col-4 col-sm-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/st.png" alt="Brands"><span class="d-block">StarTimes</span></a></div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="operator-five" role="tabpanel" aria-labelledby="operator-five-tab">
            <div class="brands-grid">
              <div class="row">
                <div class="col-4 col-sm-2 col-lg text-center"> <a href=""> <img class="img-fluid border rounded-circle" src="images/brands/operator/operator.png" alt="Brands"> <span class="d-block">Adani Gas</span> </a> </div>
                <div class="col-4 col-sm-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/operator.png" alt="Brands"><span class="d-block">Tripura Natural Gas</span></a></div>
                <div class="col-4 col-sm-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/operator.png" alt="Brands"><span class="d-block">Sabarmati Gas Limited (SGL)</span></a></div>
                <div class="col-4 col-sm-2 col-lg text-center"><a href=""><img class="img-fluid border rounded-circle" src="images/brands/operator/operator.png" alt="Brands"><span class="d-block">Indraprastha Gas Limited (IGL)</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Partners end --> 
    
    <!-- Mobile App
    ============================================= -->
    <section class="section bg-secondary">
      <div class="container">
        <div class="text-center">
          <h2 class="text-9 text-light font-weight-400 mb-4">Download Our App and Get &#8358;1000 Free </h2>
          
          <div class=" flex-wrap pt-2"> <a class="mr-4" href=""><img alt="" src="images/app-store.png"></a><a href=""><img alt="" src="images/google-play-store.png"></a> </div>
      </div>
    </section>
    <!-- Mobile App end --> 
    
  </div>
  <!-- Content end --> 
  <div class="modal"><!-- Place at bottom of page --></div>
  <!-- Footer
  ============================================= -->
  <?php include 'inc/footer.php'; ?>
  <!-- Footer end --> 
  
</div>
<!-- Document Wrapper end --> 

<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- Modal Dialog - View Plans
============================================= -->
<div id="view-plans" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Browse Plans</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
      </div>
      <div class="modal-body">
        
        <div class="plans">
          <div class="table-responsive-md">
            <table class="table table-hover border">
              <tbody>
                <tr>
                  <td class="text-5 text-primary text-center align-middle">&#8358; 100 <span class="text-1 text-muted d-block">Amount</span></td>
                  <td class="text-3 text-center align-middle">7 Days <span class="text-1 text-muted d-block">Validity</span></td>
                  <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now</button></td>
                </tr>
                <tr>
                  <td class="text-5 text-primary text-center align-middle">&#8358; 105 <span class="text-1 text-muted d-block">Amount</span></td>
                  <td class="text-3 text-center align-middle">15 Days <span class="text-1 text-muted d-block">Validity</span></td>
                  <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now</button></td>
                </tr>
                <tr>
                  <td class="text-5 text-primary text-center align-middle">&#8358; 100 <span class="text-1 text-muted d-block">Amount</span></td>
                  <td class="text-3 text-center align-middle">28 Days <span class="text-1 text-muted d-block">Validity</span></td>
                  <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Dialog - View Plans end --> 

<!-- Script --> 

<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="vendor/owl.carousel/owl.carousel.min.js"></script> 
<script src="js/theme.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="api/callback.js"></script>
 <script type="text/javascript">
      $body = $("body");
      $(document).on({
            ajaxStart: function() { $body.addClass("loading");    },
             ajaxStop: function() { $body.removeClass("loading"); }    
        });
  </script>
</body>
</html>