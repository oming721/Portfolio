<?php include("inc/dataconnection.php");

$message='';

date_default_timezone_set('Asia/Kuala_Lumpur');
$time = time();
$token = md5(rand(10,100));

if($_POST)
{
 	$email = $_POST['email'];
	$row['id']='';
	$result = mysqli_query($connect,"SELECT * FROM $bas.sign_in WHERE email = '$email'");
 	$count = mysqli_num_rows($result);
 	$row = mysqli_fetch_array($result);

  if($email!='')
 	{
    $id= $row['id'];
  }
    
  	if($count > 0)
  	{
    	$url = "http://".$_SERVER["HTTP_HOST"].dirname($_SERVER["PHP_SELF"])."/reset_password.php?id=".$id."&token=".$token;

    	$to = "$email";
    	$subject = "Forget Password";
    	$body = "We are from Batu Berendam Badminton Court.<br><br>This is your requested password reset <br><br>Click <a href='$url'>this link</a> to reset password <br><br>You only have 30 minutes to change your password, else you need to reset again";
    	$headers = "Content-type: text/html;charset=UTF-8";

    	mail($to,$subject,$body,$headers);

    	$message="<div class='success'>Your reset password has send to your email</div>";

    	$sql = "UPDATE $bas.sign_in SET token = '$token' ,token_timestamp = '$time' WHERE id = '$id'";

    	$query = mysqli_query($connect,$sql);
  	}

  	else
  	{
    	$message="<div class='error'>This email has not found";
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
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
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
       
<!-- Login Form Start -->
<div class="seipkon-login-form-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">

        <style type="text/css">
        .success
        {
          color: green;
        }

        .error
        {
          color: red;
        }
        </style>

        <div class="login-form-box forgot-password">
          <h3>Forgot Your Password?</h3>
          <p>Enter your e-mail address below to reset your password.</p>

          <form name="frmForgot" id="frmForgot" method="POST">

            <div class="form-group">
              <input type="email" name="email" id="user_email" placeholder="Enter Email Address" class="form-control" required autocomplete="off" >
              <?php echo $message; ?>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-layout-submit">
                    <div><input type="submit" name="submit" value="Submit" class="btn btn-success"></div>
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