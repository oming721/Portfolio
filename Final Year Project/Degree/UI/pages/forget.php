<?php
include("inc/dataconnection.php"); 
include("function/forget_func.php");
?>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Forget</title>
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
              <h4>Forget Password</h4>
              <h6 class="font-weight-light">Enter your e-mail address below to reset your password.</h6>
              <?php
                if(isset($_GET['isWrong']))
                {
                  if($_GET['isWrong']=="wrong")
                  {
                    echo "<span style='color:red;'><b>This email has not found</b></span>";
                  }
                }
              ?>
              <form class="pt-3" method="post" onSubmit="form_onSubmit()">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" value="<?php if(isset($_GET['isError'])){if($_GET['isError']=="error"){echo $_GET['email'];}}?>" id="inputEmail" name="inputEmail" placeholder="Email" onchange="confirm_email(this.value)" required>
                  <p><span style="color:red;" id="erroremail"></span></p>
                </div>
                <div class="mt-3">
                  <button name="btn_submit" id="btn_submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SUBMIT</button>
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
  <script src="function/forget_func.js"></script>
  <!-- endinject -->
</body>

</html>