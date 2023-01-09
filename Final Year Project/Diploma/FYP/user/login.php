<?php include("inc/dataconnection.php"); ?>

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
function confirm_password(password)
{
  if(password=="")
  {
    document.getElementById('errorpassword').innerHTML="You cannot leave this field empty";
  }
  else
  {
    document.getElementById('errorpassword').innerHTML="";
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
            <h1 class="title-single">LOGIN</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="home.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Login
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
            <h5 class="card-title text-center"><b>Login Form</b></h5>
            <form class="form-signin" method="get">
              <div class="form-label-group">
                <input value="<?php if(isset($_GET['isError'])){if($_GET['isError']=="error"){echo $_GET['email'];}}?>" type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" onchange="confirm_email(this.value)" autofocus required>
                <label for="inputEmail">Email address</label>
                <p></p>
                <span style="color:red;" id="erroremail"></span>
              </div>

              <div class="form-label-group">
                <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" onchange="confirm_password(this.value)" required>
                <label for="inputPassword">Password</label>
                <p></p>
                <span style="color:red;" id="errorpassword"></span>
                <p></p>
                <?php
                if(isset($_GET['isError']))
                {
                  if($_GET['isError']=="error")
                  {
                    echo "<span style='color:red;'><b>Please check your email or password</b></span>";
                  }
                }
                ?>
              </div>

              <div class="custom-control custom-checkbox mb-3">
              </div>
              <button name="sign_in" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
              <hr class="my-4">
            </form>
            <button class="btn btn-lg btn-google btn-block text-uppercase" style="font-size: 80%;border-radius: 5rem;letter-spacing: .1rem;font-weight: bold;padding: 1rem;transition: all 0.2s;" onclick="location.href='register.php'">Register</button>
            <button class="btn btn-lg btn-facebook btn-block text-uppercase" style="font-size: 80%;border-radius: 5rem;letter-spacing: .1rem;font-weight: bold;padding: 1rem;transition: all 0.2s;" onclick="location.href='forget.php'">Forget Password</button>
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
if(isset($_GET['sign_in']))
{
  $email=$_GET['inputEmail'];
  $password=md5($_GET['inputPassword']);
  $sql=mysqli_query($connect,"SELECT * FROM account WHERE account_email='$email' AND account_password='$password'");
  $count=mysqli_num_rows($sql);

  if($count==1)
  {
    $accid=mysqli_fetch_array($sql);
    if($accid['account_status'] == 0)
    {
      echo "<script>";
      echo "alert('Please Active First');";
      echo "window.location = '//localhost/FYP/user/login.php'";
      echo "</script>";
    }
    else
    {
      $_SESSION['enter'] = true;
      $_SESSION['acc']=$accid['account_id'];
      $id = $accid['account_id'];
      $result1 = mysqli_query($connect,"SELECT * FROM court WHERE court_account = '$id' AND court_status = 'APPROVE'");
      while($row = mysqli_fetch_assoc($result1))
      {
        if($row['court_date_book'] < date("Y-m-d"))
        {
          $cid = $row['court_id'];
          mysqli_query($connect,"UPDATE court SET court_status = 'EXPIRED' WHERE court_id = '$cid'");
        }
      }
      
      echo "<script>";
      echo "window.location = '//localhost/FYP/user/home.php'";
      echo "</script>";
    }
    
  }
  else
  {
    $_SESSION['enter']=false;
    echo "<script>";
    echo "window.location = '//localhost/FYP/user/login.php?email=".$email."&isError=error'";
    echo "</script>";
  }
}
if(isset($_GET['targetemail']))
{

  $token = $_GET['token'];
  $email = $_GET['targetemail'];
  $result=mysqli_query($connect,"SELECT * FROM account WHERE account_email = '$email' AND account_code = '$token'");
  $count=mysqli_num_rows($result);
  if($count == 1)
  {
    echo "<script>";
    echo "alert('Account Successful Active');";
    echo "</script>";
    mysqli_query($connect,"UPDATE account SET account_status = '1' WHERE account_email = '$email'");
  }
  else
  {
    echo "<script>";
    echo "alert('Something Wrong');";
    echo "</script>";
  }
}
?>