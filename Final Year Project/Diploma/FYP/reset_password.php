<?php include("inc/dataconnection.php");

  date_default_timezone_set('Asia/Kuala_Lumpur');
  $message1='';
  $message2='';

  if(!isset($_GET['id']))
  {
    exit("Can't find page");
  }

  $token = $_GET['token'];
  $id = $_GET['id'];
  $sql1= "SELECT * FROM $bas.sign_in WHERE id='$id'";
  $query1 = mysqli_query($connect,$sql1);
  $row=mysqli_fetch_assoc($query1);
  $c_token = $row['token'];
  $time = $row['token_timestamp'];
  $now = time();
  $time = $time + 1800;

  if($token == $c_token && $time > $now)
  {
    echo "<p hidden>Reset</p>";
  }

  else
  {
    header("Location:forget_password.php");
  }

  $result = mysqli_query($connect,"SELECT * FROM $bas.sign_in WHERE id = '$id'");

  if(mysqli_num_rows($result) == 0)
  {
    exit("Can't find page");
  }

  if(isset($_POST['submit']))
  {
   $password = ($_POST['password']);
   $confirm_password = ($_POST['confirm_password']);

   $row =mysqli_fetch_assoc($result);

    if(empty($password))
    {
        $message1 = "<div class='error'>Please Enter New Password</div>";
    }

    else if (strlen($password)<5)
    {
        $message1 = "<div class='error'>Password Must At Least 5 Characters</div>";
    }

    else if(empty($confirm_password))
    {
        $message2 = "<div class='error'>Please Re-enter Password</div>";
    }

    else if($password != $confirm_password)
    {
       $message1 = "<div class='error'>Password Not Same</div>";
    }

	else
	{
    	$password = md5($password);
    	$qry = mysqli_query($connect,"UPDATE $bas.sign_in SET password = '$password' WHERE id = '$id' ");
    	$message1 = "<div class='success'>Password Reset Successfully</div>"; 
      header("Refresh:2;url=sign_in.php");
	}  
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Seipkon is a Premium Quality Admin Site Responsive Template" />
<meta name="keywords" content="admin template, admin, admin dashboard, cms, Seipkon Admin, premium admin templates, responsive admin, panel, software, ui, web app, application" />
<meta name="author" content="Themescare">
<title>KSBB Badminton Court</title>
<!-- Favicon -->
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
<!-- Animate CSS -->
<link rel="stylesheet" href="assets/css/animate.min.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/plugins/bootstrap/bootstrap.min.css">
<!-- Font awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<!-- Themify Icon CSS -->
<link rel="stylesheet" href="assets/plugins/themify-icons/themify-icons.css">
<!-- Perfect Scrollbar CSS -->
<link rel="stylesheet" href="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css">
<!-- Jvector CSS -->
<link rel="stylesheet" href="assets/plugins/jvector/css/jquery-jvectormap.css">
<!-- Daterange CSS -->
<link rel="stylesheet" href="assets/plugins/daterangepicker/css/daterangepicker.css">
<!-- Bootstrap-select CSS -->
<link rel="stylesheet" href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css">
<!-- Summernote CSS -->
<link rel="stylesheet" href="assets/plugins/summernote/css/summernote.css">
<!-- Main CSS -->
<link rel="stylesheet" href="assets/css/seipkon.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- jQuery -->
<script src="assets/js/jquery-3.1.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
<!-- Bootstrap-select JS -->
<script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
<!-- Perfect Scrollbar JS -->
<script src="assets/plugins/perfect-scrollbar/jquery-perfect-scrollbar.min.js"></script>
<!-- Custom Select JS -->
<script src="assets/plugins/bootstrap-select/js/custom-select.js"></script>
<!-- Custom JS -->
<script src="assets/js/seipkon.js"></script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js" type="text/javascript"></script>

</head>
<body>

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

      <div class="col-md-8 col-sm-8">
        <div class="login-page-logo-right">
          <!-- <button class="btn btn-primary">
            <a href="sign_in.php">Return to Sign In</a>
          </button>   -->      
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Login Page Header Area End -->

<div class="seipkon-login-form-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        
        <style type="text/css">
        .error
        {
          color: red;
        }

        .success
        {
          color: green;
        }
        </style>
                  
        <div class="login-form-box forgot-password">
          <h3>Reset Password</h3>
          <?php echo $message1; ?>

          <form method="POST">

            <div class="form-group">
              <input type="email" name="email" value="<?php echo $row['email'];?>" class="form-control" readonly>
              <input type="password" name="password" id="password" placeholder="Enter New Password" class="form-control">
              <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" class="form-control">
              <?php echo $message2; ?>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-layout-submit">
                    <div>
                      <button name="submit" class="btn btn-success">Submit</button>
                    </div>
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

</body>
</html>