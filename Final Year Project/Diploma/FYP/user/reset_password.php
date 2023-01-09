<?php include("inc/dataconnection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>KSBB Badminton Court</title>
<link href="img/badminton-icon.png" rel="icon">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">
<!-- Favicons -->
<link href="img/apple-touch-icon.png" rel="apple-touch-icon">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!-- Bootstrap CSS File -->
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Libraries CSS Files -->
<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<!-- Main Stylesheet File -->
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/sign_in.css">
<script type="text/javascript" src="validate_confirm.js"></script> 

</head>

<body style="background: rgb(168,168,168);
background: linear-gradient(0deg, rgba(168,168,168,0.5) 0%, rgba(133,133,182,0.5049370089832808) 73%, rgba(138,130,130,0.5) 100%);">

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">RESET PASSWORD</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->


  <!--/ Team Star /-->
  <section>
    <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center"><b>Change Password</b></h5>
            <form name="change" class="form-signin" onsubmit="return form_onSubmit();" method="post">

              <div class="form-label-group">
                <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="New Password" onchange="confirm_password(this.value)" required>
                <label for="inputPassword">New Password</label>
                <p></p>
                <span style="color:red;" id="errorpassword"></span>
              </div>
              
              <div class="form-label-group">
                <input type="password" name="inputConfirm" id="inputConfirm" class="form-control" placeholder="Confirm Password" onchange="confirm_confirm(this.value)" required>
                <label for="inputConfirm">Confirm Password</label>
                <p></p>
                <span style="color:red;" id="errorconfirm"></span>
                <p></p>
              </div>

              <div class="custom-control custom-checkbox mb-3">
              </div>
              <button name="change" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Reset</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Team End /-->
  
<script>
document.getElementById("change").classList.add("active");
</script>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/popper/popper.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/scrollreveal/scrollreveal.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>
<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

</body>
</html>
<?php

date_default_timezone_set('Asia/Kuala_Lumpur');

$token = $_GET['account_token'];
$id = $_GET['account_id'];
$sql1= "SELECT * FROM account WHERE account_id='$id'";
$query1 = mysqli_query($connect,$sql1);
$row=mysqli_fetch_assoc($query1);
$c_token = $row['account_token'];
$time = $row['account_token_timestamp'];
$now = time();
$time = $time + 1800;

if($token == $c_token && $time > $now)
{
  echo "<p hidden>Reset</p>";
}

else
{
  header("Location:forget.php");
}

if(isset($_POST['change']))
{
  $password = md5($_POST['inputPassword']);
  $acc=$_GET['account_id'];
  mysqli_query($connect,"UPDATE account SET account_password='$password' WHERE account_id=$acc");
  echo "<script>";
  echo "alert('Success change your password');";
  echo "window.location = '//localhost/FYP/user/login.php';";
  echo "</script>";
}
?>