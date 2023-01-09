<?php
include("inc/dataconnection.php");
include("function/header_func.php");
include("function/more_leave_func.php");
?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>UI</title>
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
              <a class="dropdown-item" href="selfie.php">
                <i class="ti-face-smile text-primary"></i>
                Manage Faces
              </a>
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
					  <h3 class="font-weight-bold">Leaves</h3>
					</div>
				  </div>
				</div>
			  </div>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
            
            
            
            <form class="form-sample" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Leaves Date</label>
                          <div class="col-sm-9">
                          <?php
                          $st = '';
                          if($pst != '4')
                          {
                            $st = "readonly";
                          }
                          
                          ?>
                            <input type="date" id="inputDate" name="inputDate" class="form-control" value="<?php echo "$date";?>" required <?php echo "$st"?>>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Leave Type</label>
                          <div class="col-sm-9">
                          <?php
                          if($pst == '4')
                          {
                            echo '<select class="form-control" id="inputType" name="inputType">';
                            
                            if($type == '0')
                            {
                              echo '<option value="0" selected>Annual Leave</option>';
                              echo '<option value="1">Medical Leave</option>';
                            }
                            else if($type == '1')
                            {
                              echo '<option value="0">Annual Leave</option>';
                              echo '<option value="1" selected>Medical Leave</option>';
                            }        
                            echo '</select>';
                          }
                          else
                          {
                            if($type == '0')
                            {
                              $lv = 'Annual Leave';
                            }
                            else if($type == '1')
                            {
                              $lv = 'Medical Leave';
                            }
                            echo '<input type="text" id="inputType" name="inputType" class="form-control" value="'.$lv.'" readonly>';
                          }
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Reason</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Optional" name="inputReason" id="inputReason" value="<?php echo "$reason";?>" <?php echo "$st"?>>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Leave Status</label>
                          <div class="col-sm-9">
                          <?php
                          if($pst == '4')
                          {
                            echo '<select class="form-control" id="inputStatus" name="inputStatus">';
                            if($status == '0')
                            {
                              echo '<option value="0" selected>Pending</option>';
                              echo '<option value="1">Approved</option>';
                              echo '<option value="2">Rejected</option>';
                            }
                            else if($status == '1')
                            {
                              echo '<option value="0">Pending</option>';
                              echo '<option value="1" selected>Approved</option>';
                              echo '<option value="2">Rejected</option>';
                            }
                            else if($status == '2')
                            {
                              echo '<option value="0">Pending</option>';
                              echo '<option value="1">Approved</option>';
                              echo '<option value="2" selected>Rejected</option>';
                            }
                          }
                          else
                          {
                            if($status == '0')
                            {
                              $lv1 = 'Pending';
                            }
                            else if($status == '1')
                            {
                              $lv1 = 'Approved';
                            }
                            else if($status == '2')
                            {
                              $lv1 = 'Rejected';
                            }
                            echo '<input type="text" id="inputStatus" name="inputStatus" class="form-control" value="'.$lv1.'" readonly>';
                          }
                            
                            ?>
                            </select>
                          </div>
                          <input type="hidden" name="inputid" id="inputid" value="<?php echo "$id";?>">
                        </div>
                      </div>
                    </div>
                    <?php
                          if($pst == '4')
                          {
                            echo '<input type="submit" class="add btn btn-primary" name="addleave" id="addleave" value="UPDATE">';
                          }
                          ?>
                  </form>
            
            
            
            
            
            
            
            
            
            
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
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <script src="../js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->

<!-- Page level custom scripts -->
<script src="tables/datatables-demo.js"></script>
</body>

</html>

