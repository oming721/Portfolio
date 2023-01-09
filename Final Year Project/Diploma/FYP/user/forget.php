<?php include("inc/dataconnection.php");?>

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

<script>
function confirm_email(email)
{
  if(email=="")
  {
    document.getElementById('erroremail').innerHTML="You cannot leave this field empty";
  }
  else
  {
    document.getElementById('erroremail').innerHTML="";
  }
}
</script>
</head>

<body style="background: rgb(168,168,168);
background: linear-gradient(0deg, rgba(168,168,168,0.5) 0%, rgba(133,133,182,0.5049370089832808) 73%, rgba(138,130,130,0.5) 100%);">

  <?php
    include("inc/headerb.php");
  ?>

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">FORGET PASSWORD</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="home.php">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="login.php">Login</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Forget Password
              </li>
            </ol>
          </nav>
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
              <h5 class="card-title text-center"><b>Forget Password</b></h5>

                <form class="form-signin" name="reg" method="post">
            
                  <center>Enter your e-mail address below to reset your password.</center>
                  
                  <p>&nbsp;</p>
                    <div class="form-label-group">
                      <input type="email" value="<?php if(isset($_GET['isWrong'])){if($_GET['isWrong']=="wrong"){echo $_GET['email'];}}?>" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" onchange="confirm_email(this.value)" required>
                        <label for="inputEmail">Email address</label>
                          <p></p>
                          
                          <span style="color:red;" id="erroremail"></span>
                          <p></p>
                
                      <?php
                      if(isset($_GET['isWrong']))
                      {
                        if($_GET['isWrong']=="wrong")
                        {
                          echo "<span style='color:red;'><b>This email has not found</b></span>";
                        }
                      }
                      ?>
                    </div>

                    <div class="custom-control custom-checkbox mb-3"></div>
                    
                    <button name="submit" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Submit</button>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Team End /-->

<?php include("inc/footer.php")?>
  
<script>
document.getElementById("login").classList.add("active");
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
$time = time();
$token = md5(rand(10,100)); 

if(isset($_POST['submit']))
{
  $email=$_POST['inputEmail'];
  $row['account_id'] = '';
  $sql=mysqli_query($connect,"SELECT * FROM account WHERE account_email='$email'");
  $count=mysqli_num_rows($sql);
  $row = mysqli_fetch_assoc($sql);

  if($email!='')
  {
    $id= $row['account_id'];
  }

  if($count > 0)
  {
    $url = "http://".$_SERVER["HTTP_HOST"].dirname($_SERVER["PHP_SELF"])."/reset_password.php?account_id=".$id."&account_token=".$token;

      $to = "$email";
      $subject = "Forget Password";
      $body = "We are from Batu Berendam Badminton Court.<br><br>This is your requested password reset <br><br>Click <a href='$url'>this link</a> to reset password <br><br>You only have 30 minutes to change your password, else you need to reset again";
      $headers = "Content-type: text/html;charset=UTF-8";

      mail($to,$subject,$body,$headers);

      $sql = "UPDATE account SET account_token = '$token' , account_token_timestamp = '$time' WHERE account_email = '$email'";

      $query = mysqli_query($connect,$sql);
      echo "<script>";
     echo "alert('The email has successful sent');";
      echo "window.location='//localhost/FYP/user/login.php';";
      echo "</script>";
  }
  
  else
  {
    echo "<script>";
    echo "window.location='//localhost/FYP/user/forget.php?isWrong=wrong&email=$email';";
    echo "</script>";
  }
}

?>