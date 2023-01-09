<?php include("inc/dataconnection.php");include("inc/check.php");?>

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
<link rel="stylesheet" type="text/css" href="css/combine.css">
 
<script>
function validate(evt)
{
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]/;
  if(!regex.test(key))
  {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
function validate1(evt)
{
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[A-Z]|[a-z]|\s/;
  if(!regex.test(key))
  {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
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
          <h1 class="title-single">PROFILE</h1>
        </div>
      </div>
        
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="home.php">Home</a>
            </li>
            
            <li class="breadcrumb-item active" aria-current="page">
              Profile
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
  <div class="container emp-profile">
    <form  method="post">
      <?php
        $acc=$_SESSION['acc'];
        $result=mysqli_query($connect,"SELECT * FROM customer INNER JOIN account ON account_id = customer_account WHERE account_id = '$acc'");
        $row=mysqli_fetch_assoc($result);
      ?>
      
      <div class="row">
       <!--  <div class="col-md-4">
          <div class="profile-img">
            <img src="img/<?php// echo $row['customer_image']; ?>" style="width: 150px; height: 150px;" id="output">
          </div>
        </div> -->
        
        <div class="col-md-10">
          <div class="profile-head">
            <h5 style="text-transform:uppercase;">
              <?php echo $row['customer_name'];?>
            </h5>
            
            <h6>
              &nbsp;
            </h6>
                                            
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
              </li>
            </ul>
            
            <div class="tab-content profile-tab" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                  <div class="col-md-4">
                    <label>Name</label>
                  </div>
                  
                  <div class="col-md-8">
                    <input type="text" onkeypress="validate1(event)" style="text-transform:uppercase;" name="cname" value="<?php echo $row['customer_name'];?>" size="35" class="form-control" required><p></p>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-4">
                    <label>Email</label>
                  </div>
                  
                  <div class="col-md-8">
                    <input type="email" name="cemail" value="<?php echo $row['customer_email'];?>" readonly size="35" class="form-control"><p></p>
                  </div>
                </div>
                                                
                <div class="row">
                  <div class="col-md-4">
                    <label>Phone</label>
                  </div>
                  
                  <div class="col-md-8">
                    <input type="text" onkeypress="validate(event)" name="cphone" value="<?php echo $row['customer_phone'];?>" size="35" class="form-control" required><p></p>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-4">
                    <label>Gender</label>
                  </div>
                  
                  <div class="col-md-8">
                    <input type="text" name="cgender" value="<?php echo $row['customer_gender'];?>" readonly size="35" class="form-control"><p></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-2">
          <input type="submit" class="profile-edit-btn" name="update" value="Update"><p></p>
          <input type="reset" class="profile-edit-btn" name="reset" value="Reset"><p></p>
        </div>
      </div>
    </form>           
  </div>
</section>
<!--/ Team End /-->

<?php include("inc/footer.php")?>
  
<script>
document.getElementById("contact").classList.add("active");
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
if(isset($_POST['update']))
{
  $acc=$_SESSION['acc'];
  $name=$_POST['cname'];
  $phone=$_POST['cphone'];
  mysqli_query($connect,"UPDATE customer SET customer_name='$name', customer_phone='$phone' WHERE customer_account=$acc");
  echo "<script>";
  echo "window.location = '//localhost/FYP/user/profile.php';";
  echo "</script>";
}
?>