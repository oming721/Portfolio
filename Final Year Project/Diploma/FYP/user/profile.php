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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
 
 
 <style>
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
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
    <form method="post" action="edit.php">
      
      <?php
        $acc=$_SESSION['acc'];
        $result=mysqli_query($connect,"SELECT * FROM customer INNER JOIN account ON account_id = customer_account WHERE account_id = '$acc'");
        $row=mysqli_fetch_assoc($result);
      ?>
      
      <div class="row">
        <!-- <div class="col-md-4">
          <div class="profile-img">
            <img src="img/agent-4.jpg" height="60px" width="60px">
          </div>
        </div>
         -->
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
                    <input type="text" name="cname" style="text-transform:uppercase;" value="<?php echo $row['customer_name'];?>" readonly size="35" class="form-control"><p></p>
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
                    <input type="text" name="cphone" value="<?php echo $row['customer_phone'];?>" readonly size="35" class="form-control"><p></p>
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
      <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile">
    </div>
  </div>
</form>           
</div>
</section>
<!--/ Team End /-->

<?php include("inc/footer.php")?>
  
<script>
document.getElementById("profile").classList.add("active");
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