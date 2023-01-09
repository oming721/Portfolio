<?php
include("inc/dataconnection.php"); 
include("function/user_func.php");
?>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>User</title>
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
              <h2>Profile</h2>
              <h4>Add Profile Picture</h4>
              <form class="pt-3" method="post" enctype="multipart/form-data" onsubmit="return form_onSubmit(this)">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group row">
                      <div id="profile-container">
                        <image id="profileImage" src="../images/user.png" />
                      </div>
                      <input id="imageUpload" type="file" name="imageUpload" placeholder="Photo" accept="image/png" onchange="confirm_image(this.value)" capture>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Full Name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputName" name="inputName" onkeypress="validate1(event)" onchange="confirm_name(this.value)" required autofocus>
                        <p><span style="color:red;" id="errorname"></span></p>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label">Birthday</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control form-control-lg" id="inputBirthday" name="inputBirthday" min='1899-01-01' max='2023-01-01' onchange="confirm_birthday(this.value)" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label"><h5>Contact Number</h5></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPhone" name="inputPhone" onkeypress="validate(event)" onchange="confirm_phone(this.value)" required>
                    <p><span style="color:red;" id="errorphone"></span></p>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label"><h5>Home Address</h5></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputAddress" name="inputAddress" onchange="confirm_address(this.value)" required>
                    <p><span style="color:red;" id="erroraddress"></span></p>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label"><h5>Gender</h5></label>
                  <div class="col-sm-4">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="inputGender" id="inputGender" value="Male" checked>Male
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="inputGender" id="inputGender1" value="Female">Female
                      </label>
                    </div>
                  </div>
                </div>
                <input type="hidden" id="inputEmail1" name="inputEmail1" value="<?php echo $email?>">
                <input type="hidden" id="inputPassword1" name="inputPassword1" value="<?php echo $password?>">
                
                <div class="form-group row">
                  <label class="col-sm-12 col-form-label"><h5>Add two selfie for face attendance purpose.</h5></label>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="text-muted">
                      <input id="imageUpload1" type="file" name="imageUpload1" placeholder="Photo" accept="image/jpeg" onchange="confirm_image1(this.value)">
                    </label>
                    <label class="text-muted">
                      <input id="imageUpload2" type="file" name="imageUpload2" placeholder="Photo" accept="image/jpeg" onchange="confirm_image2(this.value)">
                    </label>
                  </div>
                </div>
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
  <script src="function/user_func.js"></script>
  <!-- endinject -->
</body>

</html>
