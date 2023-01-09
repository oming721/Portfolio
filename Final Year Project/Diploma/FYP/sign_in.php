<?php include("inc/dataconnection.php");

$message = '';

if(isset($_POST['login']))
{
  $email = $_POST['admin_email'];
  $password = md5($_POST['admin_password']);

  $result = mysqli_query($connect,"SELECT * FROM $bas.sign_in WHERE email = '$email' AND password = '$password'") or die("You can't connect to database".mysqli_error($connect));

  $count = mysqli_num_rows($result);

	if($count==1)
	{  
		$qry = mysqli_fetch_array($result);

		$_SESSION['loggedin'] = true;
    $_SESSION['id'] = $qry['id'];
  	$_SESSION['admin_email'] = $qry['email'];
    $_SESSION['level'] = $qry['level'];
    $_SESSION['staff_status'] = $qry['staff_status'];
    $_SESSION['staff_isDelete'] = $qry['staff_isDelete'];
    $result1 = mysqli_query($connect,"SELECT * FROM court WHERE court_status = 'APPROVE'");
      while($row = mysqli_fetch_assoc($result1))
      {
        if($row['court_date_book'] < date("Y-m-d"))
        {
          $cid = $row['court_id'];
          mysqli_query($connect,"UPDATE court SET court_status = 'EXPIRED' WHERE court_id = '$cid'");
        }
      }

      if($qry['staff_isDelete'] == 0)
      {
        if($qry['staff_status'] == 0)
    	 {
    		  if($qry['level'] == "admin")
    		  {
				    header("Location:all_staff.php");
    		  }

    		  else if($qry['level'] == "staff")
    		  {
       		 	header("Location:index.php");
    		  }
    	 }

    	 else
    	 {
    		  $message = "<div class='error'>Your account has been disabled. Please contact admin";
    	 }
      }

      else
      {
        $message = "<div class='error'>Invalid Id";
      }
	}      

	else
  {  
  	$message = "<div class='error'>Wrong Email or Password";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Seipkon is a Premium Quality Admin Site Responsive Template" />
<meta name="keywords" content="admin template, admin, admin dashboard, cms, Seipkon Admin, premium admin templates, responsive admin, panel, software, ui, web app, application" />
<meta name="author" content="Themescare">
<!-- Title -->
<title>KSBB Badminton Court</title>
<!-- Favicon -->
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-22x22.png">
<!-- Animate CSS -->
<link rel="stylesheet" href="assets/css/animate.min.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/plugins/bootstrap/bootstrap.min.css">
<!-- Font awesome CSS -->
<link rel="stylesheet" href="assets/plugins/font-awesome/font-awesome.min.css">
<!-- Themify Icon CSS -->
<link rel="stylesheet" href="assets/plugins/themify-icons/themify-icons.css">
<!-- Perfect Scrollbar CSS -->
<link rel="stylesheet" href="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css">
<!-- Main CSS -->
<link rel="stylesheet" href="assets/css/seipkon.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="assets/css/responsive.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

</head>
<body class="body_white_bg">
       
<!-- Start Page Loading -->
<?php include("inc/page_loading.php"); ?>
<!-- End Page Loading -->
       
<!-- Login Page Header Area Start -->
<div class="seipkon-login-page-header-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <div class="login-page-logo">
          <a href="index.php">
            <h2 style="color: white; font-style: italic; font-size: 30px;">KSBB Badminton Court</h2>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>   
<!-- Login Page Header Area End -->
      
<style>
.error
{
  color: red;
}
</style>
       
<!-- Login Form Start -->
<div class="seipkon-login-form-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="login-form-box">
          <h3>Sign in</h3>
          <?php echo $message; ?>

          <form action="sign_in.php" method="POST"> 
            
            <div class="form-group">
              <input type="text" name="admin_email" placeholder="Email or Username" class="form-control" required>
            </div>

            <div class="form-group">
              <input type="password" name="admin_password" placeholder="Password" class="form-control" required >
            </div>

            <div class="row">
              <div class="col-md-12 col-sm-12">
                <p class="lost-pass pull-right">
                  <a href="forget_password.php">Forget Your Password?</a>
                </p>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <div class="form-layout-submit">
                    <button type="submit" id="login" name="login" value="Login" class="btn btn-success">Sign In</button>
                  </div>
                </div>
              </div>
            </div>
                     
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Login Form End -->
       
<!-- jQuery -->
<script src="assets/js/jquery-3.1.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
<!-- Perfect Scrollbar JS -->
<script src="assets/plugins/perfect-scrollbar/jquery-perfect-scrollbar.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/seipkon.js"></script>
</body>
</html>