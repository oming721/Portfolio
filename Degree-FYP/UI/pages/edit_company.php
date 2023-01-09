<?php
include("inc/dataconnection.php");
include("function/header_func.php");
include("function/edit_company_func.php");
?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Profile</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="stylesheet" type="text/css" href="css/user_profile_func.css">
  <link rel="stylesheet" href="../css/uploadimg/uploadfile.css">
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="home.php"><img src="../images/company.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="home.php"><img src="../images/company.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="<?php echo "$image";?>" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <?php
            if($pst == '2' || $pst == '3' || $pst == '4')
            {
            ?>
              <a class="dropdown-item" href="selfie.php">
                <i class="ti-face-smile text-primary"></i>
                Manage Faces
              </a>
            <?php }?>
              <a class="dropdown-item" href="profile.php">
                <i class="ti-user text-primary"></i>
                Profile
              </a>
              <a class="dropdown-item" href="account.php">
                <i class="ti-settings text-primary"></i>
                Account
              </a>
              <a class="dropdown-item" href="logout.php">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include("sidebar.php");?>
      <!-- partial -->
      <div class="main-panel">
			<div class="content-wrapper">
			  <div class="row">
				<div class="col-md-12 grid-margin">
				  <div class="row">
					<div class="col-12 col-xl-8 mb-4 mb-xl-0">
					  <h3 class="font-weight-bold">Profile</h3>
					</div>
				  </div>
				</div>
			  </div>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <section>
                <div class="container emp-profile">
                  <form enctype="multipart/form-data" method="post" onsubmit="return form_onSubmit(this)">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="profile-img">
                          <img src="<?php echo "images/company/company.png";?>" style="border-radius: 50%;" id="profileImage">
                        </div>
                        <input id="imageUpload" type="file" name="imageUpload" placeholder="Photo" accept="image/png" onchange="confirm_image(this.value)" capture>
                      </div>
                      <div class="col-md-6">
                        <div class="profile-head">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="update" id="update" value="Update"><p></p>
                        <input type="reset" class="profile-edit-btn" name="reset" id="reset" value="Reset"><p></p>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                        <div class="profile-head">
                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                          </ul>
                                              
                          <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Email</label>
                                </div>
                                
                                <div class="col-md-8">
                                  <input type="email" name="inputEmail" id="inputEmail" value="<?php echo "$email";?>" readonly size="35" class="form-control"><p></p>
                                </div>
                              </div>
                              
                              <div class="row">
                                <div class="col-md-4">
                                  <label>ID</label>
                                </div>
                                
                                <div class="col-md-8">
                                  <input type="text" name="inputId" id="inputId" value="<?php echo "$id";?>" readonly size="35" class="form-control"><p></p>
                                </div>
                              </div>
                              
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Name</label>
                                </div>
                                
                                <div class="col-md-8">
                                  <?php
                                  if($self_position == '4')
                                  {
                                  ?>
                                    <input type="text" name="inputName" id="inputName" value="<?php echo "$name";?>" onchange="confirm_name(this.value)" size="35" class="form-control" required><p></p>
                                  <?php
                                  }
                                  else
                                  {
                                  ?>
                                    <input type="text" name="inputName" id="inputName" value="<?php echo "$name";?>" readonly size="35" class="form-control"><p></p>
                                  <?php
                                  }
                                  ?>
                                </div>
                              </div>
                              
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Position</label>
                                </div>
                                
                                <div class="col-md-8">
                                    <?php
                                    if($self_position == '4')
                                    {
                                      echo "<select class='form-control' id='inputPosition' name='inputPosition'>";
                                      if($position == 'Pending')
                                      {
                                        echo "<option value='1' selected>Pending</option>";
                                        echo "<option value='5'>Company</option>";
                                      }
                                      else if($position == 'Company')
                                      {
                                        echo "<option value='1'>Pending</option>";
                                        echo "<option value='5' selected>Company</option>";
                                      }
                                      echo "</select><p></p>";
                                    }
                                    else
                                    {
                                    ?>
                                      <input type="text" name="inputPosition" value="<?php echo "$position";?>" readonly size="35" class="form-control"><p></p>
                                    <?php
                                    }
                                    ?>
                                </div>
                              </div>
                              
                              <div class="row">
                                <div class="col-md-4">
                                  <label>Location</label>
                                </div>
                                
                                <div class="col-md-8">
                                  <input type="text" name="inputLocation" id="inputLocation" value="<?php echo "$location";?>" onchange="confirm_location(this.value)" size="35" class="form-control"><p></p>
                                </div>
                              </div>
                              
                              <?php
                              if(isset($_POST['more_detail']) && isset($_POST['user_id']))
                              {
                               $detail = $_POST['more_detail'];
                               $user_in = $_POST['user_id'];
                                echo '<input type="hidden" name="more_detail" id="more_detail" value="'.$detail.'">';
                                echo '<input type="hidden" name="user_id" id="user_id" value="'.$user_in.'">';
                              }
                              ?>
                              
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                  </form>           
                </div>
              </section>
            </div>
          </div>
        </div> 
			</div>
			<!-- content-wrapper ends -->
			<!-- partial:partials/_footer.html -->
			<footer class="footer">
			  <div class="d-sm-flex justify-content-center justify-content-sm-between">
				<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. template</a>. All rights reserved.</span>
				<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
			  </div>
			  <div class="d-sm-flex justify-content-center justify-content-sm-between">
				<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by</a></span> 
			  </div>
			</footer> 
			<!-- partial -->
		  </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <script src="../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <script src="../js/uploadimg.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <script src="../js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->

<!-- Page level custom scripts -->
</body>

</html>

