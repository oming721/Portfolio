<?php
include("inc/dataconnection.php"); 
include("function/register_func.php");
?>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
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
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" style="background-image: url('../images/background.jpg');background-repeat: no-repeat;background-size: cover;">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <a href="login.php"><img src="../images/company.png" alt="logo"></a>
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" method="post" action="<?php echo $action;?>" name="reg" onsubmit="return form_onSubmit()">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="inputEmail" id="inputEmail" placeholder="Email" onchange="confirm_email(this.value)" required>
                  <p><span style="color:red;" id="erroremail"></span></p>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="inputPassword" id="inputPassword" placeholder="Password" onchange="confirm_password(this.value)" required>
                  <p><span style="color:red;" id="errorpassword"></span></p>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="inputConfirm" id="inputConfirm" placeholder="Confirm Password" onchange="confirm_confirm(this.value)" required>
                  <p><span style="color:red;" id="errorconfirm"></span></p>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label"><h6>Position</h6></label>
                  <div class="col-sm-4">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="inputSelection" id="inputSelection" value="employee" onclick="check_selection(this.value)" checked>User
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="inputSelection" id="inputSelection1" value="company" onclick="check_selection(this.value)">Company
                      </label>
                    </div>
                  </div>
                </div>
                <div class="mt-3">
                  <button name="btn_next" id="btn_next" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">NEXT</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.php" class="text-primary">Login</a>
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
  <script src="function/register_func.js"></script>
  <!-- endinject -->
</body>

</html>
