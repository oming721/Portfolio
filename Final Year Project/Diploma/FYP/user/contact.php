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
            <h1 class="title-single">Contact US</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="home.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Contact
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Contact Star /-->
  <section class="contact">
    <div class="container">
      <div class="row">

        <div class="col-sm-12">
          <div class="contact-map box">
            <div id="map" class="contact-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15946.952424557408!2d102.2474671!3d2.251539!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb7f6ce0afc366345!2sSports+Complex+Batu+Berendam!5e0!3m2!1sen!2smy!4v1566029118677!5m2!1sen!2smy" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>

        <div class="col-sm-12 section-t8">
        <div class="container emp-profile">
          <div class="row">
            <div class="col-md-7">

              <form action="contact.php" method="POST">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name">
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-lg form-control-a" placeholder="Your Email">
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject">
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <textarea name="message" class="form-control" cols="45" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-success">Send Message</button>
                  </div>
                </div>
              </form>

            </div>

            <div class="col-md-5 section-md-t3">
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-paper-plane"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Say Hello</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">Tel.
                      <span class="color-a">+606 317 8778</span>
                    </p>
                    <p class="mb-1">Mobile.
                      <span class="color-a">+6012 353 5588</span>
                    </p>
                    <p class="mb-1">Fax.
                      <span class="color-a">+606 317 8790</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-pin"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Find us in</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">
                      Jalan Dato Seri Hj Mat Zain
                      <br> 75350 Melaka
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box">
                <div class="icon-box-icon">
                  <span class="ion-ios-redo"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Social networks</h4>
                  </div>
                  <div class="icon-box-content">
                    <div class="socials-footer">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="https://m.facebook.com/pages/batu-berendam-sport-complex/339713033484882" target="_blank" class="link-one">
                            <i class="fa fa-facebook-f" style="font-size: 24px;" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="https://www.instagram.com/explore/locations/267521711/batu-berendam-badminton-court" target="_blank" class="link-one">
                            <i class="fa fa-instagram" style="font-size: 24px;" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>
  <!--/ Contact End /-->
  
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

if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  mysqli_query($connect,"INSERT INTO $bas.contact(contact_name, contact_email, contact_subject, contact_message) VALUES ('$name','$email','$subject','$message')");

}


?>