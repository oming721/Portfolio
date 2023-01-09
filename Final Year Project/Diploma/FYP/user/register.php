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
<link rel="stylesheet" type="text/css" href="css/real.css">
<script type="text/javascript" src="validate.js"></script> 

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
            <h1 class="title-single">REGISTER</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="home.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Register
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
            <h5 class="card-title text-center"><b>Register Form</b></h5>
              
              <form method="post" class="form-signin" name="reg" enctype="multipart/form-data" onsubmit="return form_onSubmit();">
            
           <!-- <div class="form-label-group">
              <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" onchange="loadFile(event)">
                <img style="width:150px; height: 150px;" id="output" class="rounded mx-auto d-block">
                  
                <script>
                var loadFile = function(event) 
                {
                  var reader = new FileReader();
                  reader.onload = function()
                  {
                    var output = document.getElementById('output');
                    output.src = reader.result;
                  };
                    
                  reader.readAsDataURL(event.target.files[0]);
                };
                </script>
            </div> -->

            <div class="form-label-group">
              <input type="text" style="text-transform:uppercase;" name="inputName" id="inputName" class="form-control" placeholder="Full Name" onchange="confirm_name(this.value)" onkeypress="validate1(event)" required autofocus>
              <label for="inputName">Full Name</label>
              <p></p>
              <span style="color:red;" id="errorname"></span>
            </div>
              
            <div class="form-label-group">
              <input value="<?php if(isset($_GET['isSame'])){if($_GET['isSame']=="same"){echo $_GET['email'];}}?>" type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" onchange="confirm_email(this.value)" required>
              <label for="inputEmail">Email address</label>
              <p></p>
              <span style="color:red;" id="erroremail"></span>
            </div>
              
            <div class="form-label-group">
              <input type="text" name="inputTel" id="inputTel" class="form-control" placeholder="Phone Number" onchange="confirm_phone(this.value)" onkeypress="validate(event)" required>
              <label for="inputTel">Phone Number</label>
              <p></p>
              <span style="color:red;" id="errorphone"></span>
            </div>

            <div class="form-label-group">
              <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" onchange="confirm_password(this.value)" required>
              <label for="inputPassword">Password</label>
              <p></p>
              <span style="color:red;" id="errorpassword"></span>
            </div>
              
            <div class="form-label-group">
              <input type="password" name="inputConfirm" id="inputConfirm" class="form-control" placeholder="Confirm Password" onchange="confirm_confirm(this.value)" required>
              <label for="inputConfirm">Confirm Password</label>
              <p></p>
              <span style="color:red;" id="errorconfirm"></span>
              <p></p>
              
              <?php
              if(isset($_GET['isSame']))
              {
                if($_GET['isSame']=="same")
                {
                  echo "<span style='color:red;'><b>This email address already exit</b></span>";
                  echo "<p></p>";
                  echo "<span style='color:red;'><b>Try other</b></span>";
                }
              }
              ?>
            </div>
              
              <div class="form-label-group">
                <p style="font-size:20px;"> Gender : 
                  &emsp;<input value="Male" type="radio" name="inputGender" id="inputGender" required> Male 
                  &emsp;<input value="Female" type="radio" name="inputGender" id="inputGender"> Female 
                </p>
                <p></p>
              </div>

              <div class="custom-control custom-checkbox mb-3">
              </div>
              <button name="register" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
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
document.getElementById("register").classList.add("active");
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

if(isset($_POST['register']))
{
  $email=$_POST['inputEmail'];
  $sql=mysqli_query($connect,"SELECT * FROM account WHERE account_email='$email'");
  $count=mysqli_num_rows($sql);

  if($count > 0)
  {
    echo "<script>";
    echo "alert('Account already taken');";
    echo "window.location = '//localhost/FYP/user/register.php?isSame=same&email=$email'";
    echo "</script>";
  }

  else
  { 
    $email=$_POST['inputEmail'];
    $password=md5($_POST['inputPassword']);
    $gender=$_POST['inputGender'];
    $phone=$_POST['inputTel'];
    $name=$_POST['inputName'];
    $code=md5(rand());
    $template = file_get_contents("emailtemplate.php");
		$template = str_replace('{{token}}',$code,$template);
		$template = str_replace('{{email}}',$email,$template);
    ini_set('sendmail_from', 'hh2017118@gmail.com');
		$to = $email;
		$subject = "Welcome to KSBB";
		$message = $template;
		$headers =  'MIME-Version: 1.0' . "\r\n"; 
		$headers .= 'From: KSBB <hh2017118@gmail.com>' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
		mail($to, $subject, $message, $headers);
    mysqli_query($connect,"INSERT INTO account(account_email, account_password, account_code, account_status) VALUES ('$email', '$password', '$code', '0')");
    mysqli_query($connect,"INSERT INTO customer(customer_name, customer_email, customer_phone, customer_gender, customer_account) VALUES ('$name', '$email', '$phone', '$gender', LAST_INSERT_ID())");

    echo "<script>";
    echo "alert('Please Active From Your Email');";
    echo "window.location = '//localhost/FYP/user/login.php'";
    echo "</script>";
  }
}


?>