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
                  <li class="active">FAQ</li>
                </ul>
              </div>
              <div class="col-12">
                <h1>FAQ</h1>
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
        <h3 class="text-6">Get answers to your queries</h3>
        <hr>
        <div class="row">
        	<div class="col-md-3">
            <h3 class="text-5 font-weight-400">Recharge & Bill</h3>
            </div>
            <div class="col-md-9">
            <div class="accordion accordion-alternate" id="accordion">
          <div class="card">
            <div class="card-header" id="heading1">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq1" aria-expanded="false" aria-controls="faq1">Recharge not done but my money deducted.</a> </h5>
            </div>
            <div id="faq1" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
              <div class="card-body"> Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading2">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq2" aria-expanded="false" aria-controls="faq2">I was recharging and got this message: ‘Pending State’</a> </h5>
            </div>
            <div id="faq2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
              <div class="card-body"> Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading3">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq3" aria-expanded="false" aria-controls="faq3">I was not able to recharge</a> </h5>
            </div>
            <div id="faq3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
              <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading4">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq4" aria-expanded="false" aria-controls="faq4">I recharged on a wrong number.</a> </h5>
            </div>
            <div id="faq4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
              <div class="card-body"> Iisque Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
            </div>
          </div>
        </div>
            </div>
        
        </div>
        <hr>
        <div class="row">
        	<div class="col-md-3">
            <h3 class="text-5 font-weight-400">Booking</h3>
            </div>
            <div class="col-md-9">
            <div class="accordion accordion-alternate" id="accordionBooking">
          <div class="card">
            <div class="card-header" id="heading5">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq5" aria-expanded="false" aria-controls="faq5">How can i cancel my booking?</a> </h5>
            </div>
            <div id="faq5" class="collapse" aria-labelledby="heading5" data-parent="#accordionBooking">
              <div class="card-body"> Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading6">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq6" aria-expanded="false" aria-controls="faq6">How do I print my e-ticket? </a> </h5>
            </div>
            <div id="faq6" class="collapse" aria-labelledby="heading6" data-parent="#accordionBooking">
              <div class="card-body"> Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet.</div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading7">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq7" aria-controls="faq7">Do I need an ID Proof while booking a train ticket?</a> </h5>
            </div>
            <div id="faq7" class="collapse" aria-labelledby="heading7" data-parent="#accordionBooking">
              <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading8">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq8" aria-expanded="false" aria-controls="faq8"> Why are seats priced differently on the same bus?</a> </h5>
            </div>
            <div id="faq8" class="collapse" aria-labelledby="heading8" data-parent="#accordionBooking">
              <div class="card-body"> Iisque Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
            </div>
          </div>          
        </div>
            </div>
        
        </div>
        <hr>
        <div class="row">
        	<div class="col-md-3">
            <h3 class="text-5 font-weight-400">Payments</h3>
            </div>
            <div class="col-md-9">
            <div class="accordion accordion-alternate" id="accordionPayments">
          <div class="card">
            <div class="card-header" id="heading9">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq9" aria-expanded="false" aria-controls="faq9">How do I pay?</a> </h5>
            </div>
            <div id="faq9" class="collapse" aria-labelledby="heading9" data-parent="#accordionPayments">
              <div class="card-body"> Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading10">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq10" aria-expanded="false" aria-controls="faq10">How do I pay using a credit/debit card?</a> </h5>
            </div>
            <div id="faq10" class="collapse" aria-labelledby="heading10" data-parent="#accordionPayments">
              <div class="card-body"> Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading11">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq11" aria-expanded="false" aria-controls="faq11">Can I use my bank's Internet Banking feature to make a payment?</a> </h5>
            </div>
            <div id="faq11" class="collapse" aria-labelledby="heading11" data-parent="#accordionPayments">
              <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading12">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq12" aria-expanded="false" aria-controls="faq12">Are there any hidden charges (Octroi or Tax)? </a> </h5>
            </div>
            <div id="faq12" class="collapse" aria-labelledby="heading12" data-parent="#accordionPayments">
              <div class="card-body"> Iisque Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
            </div>
          </div>
        </div>
            </div>
        
        </div>
        <hr>
        <div class="row">
        	<div class="col-md-3">
            <h3 class="text-5 font-weight-400">My Account</h3>
            </div>
            <div class="col-md-9">
            <div class="accordion accordion-alternate" id="accordionAccount">
          <div class="card">
            <div class="card-header" id="heading13">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq13" aria-expanded="false" aria-controls="faq13">Is there any registration fee?</a> </h5>
            </div>
            <div id="faq13" class="collapse" aria-labelledby="heading13" data-parent="#accordionAccount">
              <div class="card-body"> Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading14">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq14" aria-expanded="false" aria-controls="faq14">Is my account information safe?</a> </h5>
            </div>
            <div id="faq14" class="collapse" aria-labelledby="heading14" data-parent="#accordionAccount">
              <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading15">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq15" aria-expanded="false" aria-controls="faq15">How does it work?</a> </h5>
            </div>
            <div id="faq15" class="collapse" aria-labelledby="heading15" data-parent="#accordionAccount">
              <div class="card-body"> Iisque Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading16">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq16" aria-expanded="false" aria-controls="faq16">I did not receive the cashback</a> </h5>
            </div>
            <div id="faq16" class="collapse" aria-labelledby="heading16" data-parent="#accordionAccount">
              <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading17">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq17" aria-expanded="false" aria-controls="faq17">Forgot my password! What next?</a> </h5>
            </div>
            <div id="faq17" class="collapse" aria-labelledby="heading17" data-parent="#accordionAccount">
              <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading18">
              <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq18" aria-expanded="false" aria-controls="faq18">Closing Your Account</a> </h5>
            </div>
            <div id="faq18" class="collapse" aria-labelledby="heading18" data-parent="#accordionAccount">
              <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
            </div>
          </div>
        </div>
            </div>
        
        </div>
        <hr>
        <div class="text-center my-3 my-md-5">
          <p class="text-4 mb-3">Can't find what you're looking for? Our customer care team are here to help</p>
          <a href="support.php" class="btn btn-primary">Contact Customer Care</a> </div>
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