<?php
  include 'inc/conx.php';
  if (!isset($_SESSION['userEmail'])) {
    header("location: login.php");
  }else{
    $email = $_SESSION['userEmail'];
    $getUserData = mysqli_query($conx, "SELECT * FROM users_tb WHERE(email = '$email')");
    $userData = mysqli_fetch_array($getUserData);
  }
?>
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
              <li class="active">Dashboard</li>
            </ul>
          </div>
          <div class="col-12">
            <h1>Dashboard</h1>
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
        <div class="row">
          <div class="col-md-3">
            <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
              <li class="nav-item"> <a class="nav-link active" id="fourth-tab first-tab" data-toggle="tab" href="#fourthTab" role="tab" aria-controls="fourthTab" aria-selected="false">Cards</a> </li>
              <li class="nav-item"> <a class="nav-link" id="first-tab" data-toggle="tab" href="#firstTab" role="tab" aria-controls="firstTab" aria-selected="true">Personal Information</a> </li>
              <li class="nav-item"> <a class="nav-link" id="second-tab" data-toggle="tab" href="#secondTab" role="tab" aria-controls="secondTab" aria-selected="false">Change Password</a> </li>
              <li class="nav-item"> <a class="nav-link" id="third-tab" data-toggle="tab" href="#thirdTab" role="tab" aria-controls="thirdTab" aria-selected="false">Favourites</a> </li>
              
            </ul>
          </div>
          <div class="col-md-9">
            <div class="tab-content my-3" id="myTabContentVertical">
              <div class="tab-pane fade" id="firstTab" role="tabpanel" aria-labelledby="first-tab">
                <div class="row">
                  <div class="col-lg-8">
                    <h4 class="mb-4">Personal Information</h4>
                    <form id="personalInformation" method="post">
                      <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" value="<?php echo $userData['name']; ?>" class="form-control" data-bv-field="fullName" name="name" id="fullName" required placeholder="Full Name">
                      </div>
                      <div class="form-group">
                        <label for="mobileNumber">Mobile Number</label>
                        <input type="text" value="<?php echo $userData['mobile']; ?>" class="form-control" data-bv-field="mobilenumber" name="mobile" id="mobileNumber" required placeholder="Mobile Number">
                      </div>
                      <div class="form-group">
                        <label for="emailID">Email ID</label>
                        <input type="text" value="<?php echo $userData['email']; ?>" class="form-control" data-bv-field="emailid" id="emailID" required placeholder="Email ID" disabled>
                      </div>
                      <button class="btn btn-primary" type="submit" name="btnUpdate">Update Now</button>
                    </form>
                  </div>
                  <div class="col-lg-4 mt-4 mt-lg-0 ">
                    <div class="card bg-light-3 p-3">
                      <p class="mb-2">We value your Privacy.</p>
                      <p class="text-1 mb-0">We will not sell or distribute your contact information. Read our <a href="#">Privacy Policy</a>.</p>
                      <hr>
                      <p class="mb-2">Billing Enquiries</p>
                      <p class="text-1 mb-0">Do not hesitate to reach our <a href="#">support team</a> if you have any queries.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="secondTab" role="tabpanel" aria-labelledby="second-tab">
                <div class="row">
                  <div class="col-lg-8">
                    <h4 class="mb-4">Change Password</h4>
                    <form id="changePassword" method="post">
                      <div class="form-group">
                        <input type="password" class="form-control" data-bv-field="existingpassword" name="existingPassword" id="existingPassword" required placeholder="Existing Password">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" data-bv-field="newpassword" name="newPassword" id="newPassword" required placeholder="New Password">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" data-bv-field="confirmgpassword" name="confirmPassword" id="confirmPassword" required placeholder="Confirm Password">
                      </div>
                      <button class="btn btn-primary" type="submit" name="btnChangePassword">Update Password</button>
                    </form>
                  </div>
                  <div class="col-lg-4 mt-4 mt-lg-0 ">
                    <div class="card bg-light-3 p-3">
                      <p class="mb-2">We value your Privacy.</p>
                      <p class="text-1 mb-0">We will not sell or distribute your contact information. Read our <a href="#">Privacy Policy</a>.</p>
                      <hr>
                      <p class="mb-2">Billing Enquiries</p>
                      <p class="text-1 mb-0">Do not hesitate to reach our <a href="#">support team</a> if you have any queries.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="thirdTab" role="tabpanel" aria-labelledby="third-tab">
                <h4 class="mb-4">Your Saved Connections</h4>
                <div class="table-responsive-lg">
                  <table class="table table-hover border">
                    <tbody>
                      <tr>
                        <td class="text-center align-middle"><img class="border p-1 rounded bg-light" src="images/brands/operator/vodafone.jpg" alt=""></td>
                        <td class="text-center align-middle">9898989898</td>
                        <td class="text-center align-middle">Vodafone</td>
                        <td class="align-middle">
                        <div class="d-flex justify-content-end">
                        <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now</button>
                          <button class="btn btn-sm btn-outline-secondary shadow-none ml-1" type="submit" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-edit"></i></button></div></td>
                      </tr>
                      <tr>
                        <td class="text-center align-middle"><img class="border p-1 rounded bg-light" alt="" src="images/brands/operator/vodafone.jpg"></td>
                        <td class="text-center align-middle">9696969696</td>
                        <td class="text-center align-middle">Vodafone</td>
                        <td class="align-middle">
                        <div class="d-flex justify-content-end">
                        <button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now</button>
                          <button class="btn btn-sm btn-outline-secondary shadow-none ml-1" type="submit" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-edit"></i></button></div></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade show active" id="fourthTab" role="tabpanel" aria-labelledby="fourth-tab">
                <div class="row">
                  <div class="col-lg-5">
                    <h4 class="mb-4">Your Saved Cards</h4>
                    <div id="savedCard" class="bg-light-4 rounded p-3 mb-4 mb-lg-0">
                      <h4 class="mb-3">XXXX-XXXX-XXXX-<?php echo substr($userData['cardNumber'], 12,4); ?></h4>
                      <p>Expiry Date<br>
                        <small><?php echo $userData['exMonth']."/".$userData['exYear']?></small></p>
                      <p class="d-flex m-0"> 
                      <a class="mr-2" href="profile.php?editCard=yes"><i class="fas fa-edit"></i> Edit</a> 
                      <img class="ml-auto" src="images/payment/visa.png" alt="visa" title="">
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <h4>Add New Credit/Debit Card</h4>
                    <p>For experience a faster checkout experience</p>

                    <form id="payment" method="post">
                      <div class="form-group">
                        <input type="text" class="form-control" data-bv-field="cardnumber" name="cardNumber" id="cardNumber" required <?php if(isset($_GET['editCard'])){echo "value='".$userData['cardNumber']."'";}else{echo "placeholder='Card Number'";} ?> maxlength="16">
                      </div>
                      <div class="form-row">
                        <div class="col-lg-4">
                          <div class="form-group">
                            <select class="custom-select" required name="exMonth">
                              <option value="<?php echo $userData['exMonth']; ?>"><?php if($_GET['editCard']){echo date('F', mktime(0, 0, 0, $userData['exMonth'], 10));}else{echo "Expiry Month";} ?></option>
                              <option value="01">January</option>
                              <option value="02">February</option>
                              <option value="03">March</option>
                              <option value="04">April</option>
                              <option value="05">May</option>
                              <option value="06">June</option>
                              <option value="07">July</option>
                              <option value="08">August</option>
                              <option value="09">September</option>
                              <option value="10">October</option>
                              <option value="11">November</option>
                              <option value="12">December</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <select class="custom-select" required name="exYear">
                              <option value="<?php echo $userData['exYear']; ?>"><?php if($_GET['editCard']){echo $userData['exYear'];}else{echo "Expiry Year";} ?></option>
                              <?php
                                $year = date('Y');
                                echo "<option>".$year."</option>";
                                for ($i=0; $i < 10; $i++) { 
                                  $year = $year+1;
                                  echo "<option>".$year."</option>";
                                }
                              ?>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <input type="text" class="form-control" data-bv-field="cvvnumber" name="cvvNumber" id="cvvNumber" required <?php if(isset($_GET['editCard'])){echo "value='".$userData['cvvNumber']."'";}else{echo "placeholder='CVV Number'";} ?>>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" data-bv-field="cardholdername" name="holderName" id="cardHolderName" required <?php if(isset($_GET['editCard'])){echo "value='".$userData['holderName']."'";}else{echo "placeholder='Card Holder Name'";} ?>>
                      </div>
                      <button class="btn btn-primary" type="submit" name="btnAddCard">Add Card</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
            if (isset($_POST['btnUpdate'])) {
              $name = $_POST['name'];
              $mobile = $_POST['mobile'];

              $updateQ = mysqli_query($conx, "UPDATE users_tb SET name='$name', mobile='$mobile' WHERE(email='$email')");
              if ($updateQ) {
                echo "<div class='msg'>Profile update successfull</div>";
              }else{
                echo "<div class='msg'>Unknown error found <br> Try again latter</div>";
              }
            }elseif (isset($_POST['btnAddCard'])) {
              $cardNumber = $_POST['cardNumber'];
              $exMonth = $_POST['exMonth'];
              $exYear = $_POST['exYear'];
              $cvvNumber = $_POST['cvvNumber'];
              $holderName = $_POST['holderName'];

              $checkQ = mysqli_query($conx, "SELECT * FROM users_tb WHERE(cardNumber = '$cardNumber')");
              $result = mysqli_num_rows($checkQ);
              if ($result > 0) {
                echo "<div class='msg'>The inserted card already exist</div>";
              }else{
                $updateQ = mysqli_query($conx, "UPDATE users_tb SET cardNumber='$cardNumber',exMonth='$exMonth',exYear='$exYear',cvvNumber='$cvvNumber',holderName='$holderName' WHERE(email='$email') ");
                if ($updateQ) {
                  echo "<div class='msg'>Card has been added successfull</div>";
                }else{
                  echo "<div class='msg'>Unknown error found <br> Try again latter</div>";
                }
              }
            }elseif (isset($_POST['btnChangePassword'])) {
              $existingPassword = $_POST['existingPassword'];
              $newPassword = $_POST['newPassword'];
              $confirmPassword = $_POST['confirmPassword'];

              if ($newPassword == $confirmPassword) {
                if($existingPassword == $userData['password']){
                  $updateQ = mysqli_query($conx, "UPDATE users_tb SET password='$newpassword' WHERE(email = '$email')");
                  if ($updateQ) {
                    echo "<div class='msg'>Your password has been updated</div>";
                  }
                }else{
                  echo "<div class='msg'>Old password not found</div>";
                }
              }else{
                echo "<div class='msg'>Password not match</div>";
              }
            }
          ?>
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
<script src="vendor/daterangepicker/moment.min.js"></script> 

<script type="text/javascript">
  $('.msg').click(function(){
    $(this).fadeOut();
  });
</script>
<script src="js/theme.js"></script> 
</body>
</html>