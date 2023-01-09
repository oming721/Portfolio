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

  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/69101299_2363917317033537_2198443495096582144_n.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                   <!--  <p class="intro-title-top">Jalan Dato Seri Hj Mat Zain
                      <br> 75350</p> -->
                    <h1 class="intro-title mb-4">
                      <span>KSBB <br>Badminton Court</span></h1>
                    <p class="intro-subtitle intro-price">
                      <a href="booking.php" <?php if($_SESSION['enter']==true){echo'data-toggle="modal" data-target="#exampleModalLong"';}?>><span class="price-a">Book Now</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/69412876_514408129306120_7266958251059576832_n.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                   <!--  <p class="intro-title-top">Jalan Dato Seri Hj Mat Zain
                      <br> 75350</p> -->
                    <h1 class="intro-title mb-4">
                      <span>KSBB <br>Badminton Court</span></h1>
                    <p class="intro-subtitle intro-price">
                      <a href="booking.php" <?php if($_SESSION['enter']==true){echo'data-toggle="modal" data-target="#exampleModalLong"';}?>><span class="price-a">Book Now</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/69112849_421813845126319_5787569255717273600_n.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                   <!--  <p class="intro-title-top">Jalan Dato Seri Hj Mat Zain
                      <br> 75350</p> -->
                    <h1 class="intro-title mb-4">
                      <span>KSBB <br>Badminton Court</span></h1>
                    <p class="intro-subtitle intro-price">
                      <a href="booking.php" <?php if($_SESSION['enter']==true){echo'data-toggle="modal" data-target="#exampleModalLong"';}?>><span class="price-a">Book Now</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Carousel end /-->

  <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Our Services</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa">&#127992;</span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Booking</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c" style="color:black;font-weight:bold;">
                Fast, good and easy for customers to do booking by making sure that have not any clashing time.    
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-check"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Check</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c" style="color:black;font-weight:bold;">
                In order to check which time the badminton court is available to avoid wasting time going to the badminton court and finding that it is full
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--/ Services End /-->

  <?php include("inc/footer.php")?>
  
  <script>
  document.getElementById("home").classList.add("active");
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