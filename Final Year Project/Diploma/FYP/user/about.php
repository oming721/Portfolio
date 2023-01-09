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
<link rel="stylesheet" type="text/css" href="css/combine.css">
</head>

<body style="background: rgb(168,168,168);
background: linear-gradient(0deg, rgba(168,168,168,0.5) 0%, rgba(133,133,182,0.5049370089832808) 73%, rgba(138,130,130,0.5) 100%);">

<?php
    if($_SESSION['enter']==true)
    {
      include("inc/headerl.php");
    }
    else
    {
      include("inc/headerb.php");
    }
  ?>

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">FACILITIES</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="home.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Facilities
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
      <div class="row">
        <div class="col-sm-12">
          <div class="about-img-box">
            <img src="http://ksbb.com.my/wp-content/uploads/2016/03/IMG_0879.jpg" alt="" class="img-fluid">
          </div>
          <div class="sinse-box" style="background-color:grey;">
            <h3 class="sinse-title" style="color:white;">Kompleks Sukan
              <br>&emsp;&emsp;Batu Berendam</h3>
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="row">
            <div class="col-md-6 col-lg-5">
              <img src="http://www.ksbb.com.my/wp-content/uploads/2011/03/photo-00001.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 col-lg-7 section-md-t3">
              <div class="title-box-d">
                <h3 class="title-d">Facilities</h3>
              </div>
              <p class="color-text-a">
                Facilities are available:
                <ul>
                  <li>Badminton Court</li>
                  <li>Free parking</li>
                  <li>Basic PA system</li>
                  <li>Shower / Changing & Restrooms (Male & Female)</li>
                  <li>Sports Shop</li>
                  <li>Cafeteria</li>
                  <li>Lounge Area with Astro</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
      </div>          
    </div>
  </section>
  <!--/ Team End /-->

  <?php include("inc/footer.php")?>
  
<script>
document.getElementById("about").classList.add("active");
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