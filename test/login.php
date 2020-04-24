<?php
  include 'inc/conx.php';
  if (isset($_SESSION['userEmail'])) {
    header("location: profile.php");
  }
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
                <li class="dropdown"> <a class="dropdown-toggle" href="index.php">Home</a></li>
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
                
                <li class="login-signup ml-lg-2"><a class="pl-lg-4 pr-0"  href="<?php if(isset($_SESSION['userEmail'])){echo 'profile.html';}else{echo 'login.php';} ?>" title="Login / Sign up">My Account<span class="d-none d-lg-inline-block"><i class="fas fa-user"></i></span></a></li>
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
              <li class="active">Login & Signup</li>
            </ul>
          </div>
          <div class="col-12">
            <h1>Login & Signup</h1>
          </div>
        </div>
      </div>
    </div>
   </div>
    </section><!-- Page Header end -->
    
    <div class="container">
      <div id="login-signup-page" class="bg-light shadow-md rounded mx-auto p-4">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"> <a id="login-page-tab" class="nav-link active text-4" data-toggle="tab" href="#loginPage" role="tab" aria-controls="login" aria-selected="true">Login</a> </li>
          <li class="nav-item"> <a id="signup-page-tab" class="nav-link text-4" data-toggle="tab" href="#signupPage" role="tab" aria-controls="signup" aria-selected="false">Sign Up</a> </li>
        </ul>
        <div class="tab-content pt-4">
          <div class="tab-pane fade show active" id="loginPage" role="tabpanel" aria-labelledby="login-page-tab">
            <form id="loginForm" method="post">
              <div class="form-group">
                <input type="text" class="form-control" id="loginMobile" name="mobileEmail" required placeholder="Mobile or Email ID">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="loginPassword" name="password" required placeholder="Password">
              </div>
              <div class="row mb-4">
                <div class="col-sm">
                  <div class="form-check custom-control custom-checkbox">
                    <input id="remember-me" name="remember" class="custom-control-input" type="checkbox" checked="checked">
                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                  </div>
                </div>
                <div class="col-sm text-right"> <a class="justify-content-end" href="#">Forgot Password ?</a> </div>
              </div>
              <button class="btn btn-primary btn-block" type="submit" name="btnLogin">Login</button>
            </form>
          </div>
          <div class="tab-pane fade" id="signupPage" role="tabpanel" aria-labelledby="signup-page-tab">
            <form id="signupForm" method="post">
              <div class="form-group">
                <input type="text" class="form-control" data-bv-field="number" id="signupEmail" name="email" required placeholder="Email ID">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="signupMobile" name="mobile" required placeholder="Mobile Number">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="signuploginPassword" name="password" required placeholder="Password">
              </div>
              <button class="btn btn-primary btn-block" type="submit" name="btnSignup">Signup</button>
            </form>
          </div>
          <?php
            if (isset($_POST['btnSignup'])) {
              $email = $_POST['email'];
              $mobile = $_POST['mobile'];
              $password = $_POST['password'];

              $checkQ = mysqli_query($conx, "SELECT * FROM users_tb WHERE(email = '$email' OR mobile = '$mobile')");
              $result = mysqli_num_rows($checkQ);
              if ($result > 0) {
                echo "<div class='msg'>Email or Mobile already exists</div>";
              }else{
                $insertQ = mysqli_query($conx, "INSERT INTO users_tb(email,mobile,password) VALUES('$email','$mobile','$password')");
                if ($insertQ) {
                  echo "<div class='msg'>Account has been created successfully <br> Now you can login</div>";
                }
              }
            }elseif (isset($_POST['btnLogin'])) {
              $mobileEmail = $_POST['mobileEmail'];
              $password = $_POST['password'];

              $checkQ = mysqli_query($conx, "SELECT * FROM users_tb WHERE(email = '$mobileEmail' OR mobile = '$mobileEmail')");
              $result = mysqli_num_rows($checkQ);
              if ($result > 0) {
                $row = mysqli_fetch_array($checkQ);
                if ($row['password'] == $password) {
                  $_SESSION['userEmail'] = $row['email'];
                  header("location: profile.php");
                }else{
                  echo "<div class='msg'>Mobile/Email ID and Password not Match</div>";
                }
              }else{
                echo "<div class='msg'>Mobile or Email ID not found</div>";
              }
            }
          ?>
          
         <!--  <div class="d-flex align-items-center my-4">
            <hr class="flex-grow-1">
            <span class="mx-2">OR</span>
            <hr class="flex-grow-1">
          </div>
          <div class="row">
            <div class="col-12 mb-3">
              <button type="button" class="btn btn-block btn-outline-primary">Login with Facebook</button>
            </div>
            <div class="col-12">
              <button type="button" class="btn btn-block btn-outline-danger">Login with Google</button>
            </div>
          </div> -->
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

<!-- Modal Dialog - Login/Signup
============================================= -->
<div id="login-signup" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content p-sm-3">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"> <a id="login-tab" class="nav-link active text-4" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a> </li>
          <li class="nav-item"> <a id="signup-tab" class="nav-link text-4" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Sign Up</a> </li>
        </ul>
        <div class="tab-content pt-4">
          <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
            <form id="loginForm" method="post">
              <div class="form-group">
                <input type="email" class="form-control" id="loginMobile" required placeholder="Mobile or Email ID">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="loginPassword" required placeholder="Password">
              </div>
              <div class="row mb-4">
                <div class="col-sm">
                  <div class="form-check custom-control custom-checkbox">
                    <input id="remember-me" name="remember" class="custom-control-input" type="checkbox">
                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                  </div>
                </div>
                <div class="col-sm text-right"> <a class="justify-content-end" href="#">Forgot Password ?</a> </div>
              </div>
              <button class="btn btn-primary btn-block" type="submit">Login</button>
            </form>
          </div>
          <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
            <form id="signupForm" method="post">
              <div class="form-group">
                <input type="text" class="form-control" data-bv-field="number" id="signupEmail" required placeholder="Email ID">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="signupMobile" required placeholder="Mobile Number">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="signuploginPassword" required placeholder="Password">
              </div>
              <button class="btn btn-primary btn-block" type="submit">Signup</button>
            </form>
          </div>
          <div class="d-flex align-items-center my-4">
            <hr class="flex-grow-1">
            <span class="mx-2">OR</span>
            <hr class="flex-grow-1">
          </div>
          <div class="row">
            <div class="col-12 mb-3">
              <button type="button" class="btn btn-block btn-outline-primary">Login with Facebook</button>
            </div>
            <div class="col-12">
              <button type="button" class="btn btn-block btn-outline-danger">Login with Google</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- Modal Dialog - Login/Signup end -->

<!-- Script -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script> 
<script src="js/theme.js"></script> 
<script type="text/javascript">
  $('.msg').click(function(){
    $(this).fadeOut();
  });
</script>
</body>
</html>