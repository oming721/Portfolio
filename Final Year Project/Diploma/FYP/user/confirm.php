<?php include("inc/dataconnection.php");
include("inc/check.php"); 

if(isset($_GET['confirm']))
{
  $password=md5($_GET['inputPassword']);
  $acc=$_SESSION['acc'];
  $sql=mysqli_query($connect,"SELECT * FROM account WHERE account_id='$acc' AND account_password='$password'");
  $count=mysqli_num_rows($sql);

  if($count==1)
  {
    $accid=mysqli_fetch_array($sql);

    $_SESSION['confirm'] = true;
    header("LOCATION: //localhost/FYP/user/change.php");
  }
  else
  {
    header("LOCATION: //localhost/FYP/user/confirm.php?isPassword=error");
  }
}


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

<script>
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
  include("inc/headerl.php");
?>

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">PASSWORD</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="home.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Password
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
            <h5 class="card-title text-center"><b>Confirm Password</b></h5>
            <form class="form-signin">

              <div class="form-label-group">
                <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Current Password" onchange="confirm_password(this.value)" required>
                <label for="inputPassword">Current Password</label>
                <p></p>
                <span style="color:red;" id="errorpassword"></span>
                <p></p>
                <?php
                if(isset($_GET['isPassword']))
                {
                  if($_GET['isPassword']=="error")
                  {
                    echo "<span style='color:red;'><b>Password Wrong</b></span>";
                  }
                }
                ?>
              </div>

              <div class="custom-control custom-checkbox mb-3">
              </div>
              <button name="confirm" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Submit</button>
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