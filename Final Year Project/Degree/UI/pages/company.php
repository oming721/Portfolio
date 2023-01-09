<?php
include("inc/dataconnection.php"); 
include("function/company_func.php");
?>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Company</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../css/uploadimg/uploadfile.css">
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
              <h2>Company Profile</h2>
              <h4>Infomation</h4>
              <form class="pt-3" method="post" onsubmit="return form_onSubmit(this)">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label"><h5>Company Name</h5></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputName" name="inputName" onchange="confirm_name(this.value)" required>
                    <p><span style="color:red;" id="errorname"></span></p>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label"><h5>Company Location</h5></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputLocation" name="inputLocation" onchange="confirm_location(this.value)" required>
                    <p><span style="color:red;" id="errorlocation"></span></p>
                  </div>
                </div>
                <input type="hidden" id="inputEmail1" name="inputEmail1" value="<?php echo $email?>">
                <input type="hidden" id="inputPassword1" name="inputPassword1" value="<?php echo $password?>">
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" onchange="confirm_accept(this.checked)">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button name="btn_register" id="btn_register" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">REGISTER</button>
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
  <script src="../js/uploadimg.js"></script>
  <script src="function/company_func.js"></script>
  <!-- endinject -->
</body>

</html>
