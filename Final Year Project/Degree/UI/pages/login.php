<?php
include("inc/dataconnection.php"); 
include("function/login_func.php");
?>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
</head>
<body>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper" >
      <div class="content-wrapper d-flex align-items-center auth px-0" style="background-image: url('../images/background.jpg');background-repeat: no-repeat;background-size: cover;">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <a href="login.php"><img src="../images/company.png" alt="logo"></a>
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <?php
                if(isset($_GET['isError']))
                {
                  if($_GET['isError']=="error")
                  {
                    echo "<span style='color:red;'><b>Please check your email or password</b></span>";
                  }
                }
              ?>
              <form class="pt-3" method="get">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" value="<?php if(isset($_GET['isError'])){if($_GET['isError']=="error"){echo $_GET['email'];}}?>" id="inputEmail" name="inputEmail" placeholder="Email" onchange="confirm_email(this.value)" required>
                  <p><span style="color:red;" id="erroremail"></span></p>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="inputPassword" name="inputPassword" placeholder="Password" onchange="confirm_password(this.value)" required>
                  <p><span style="color:red;" id="errorpassword"></span></p>
                </div>
                <div class="mt-3">
                  <button name="sign_in" id="sign_in" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                  </div>
                  <a href="forget.php" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <script src="function/login_func.js"></script>
  <!-- endinject -->
</body>

</html>