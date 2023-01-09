<?php  include("inc/dataconnection.php"); include("inc/check.php");?>

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
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/combine.css">

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
          <h1 class="title-single">BOOK HISTORY</h1>
        </div>
      </div>
       
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="home.php">Home</a>
            </li>
            
            <li class="breadcrumb-item active" aria-current="page">
              Book History
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
    <button title="Successful Booked This Court" type="button" class="btn btn-success" style="font-weight:bold;">APPROVE</button>
    <button title="Booking Date Is Greater Than Today" type="button" class="btn btn-danger" style="font-weight:bold;">EXPIRE</button>
    <p></p>
    <form method="POST">
      <div class="row">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>DATE</th>
                <th>COURT</th>
                <th>BOOKING DATE</th>
                <th>TIME</th>
                <th>END TIME</th>
                <th>STATUS</th>
              </tr>
            </thead>
                  
            <tfoot>
              <tr>
                <th>ID</th>
                <th>DATE</th>
                <th>COURT</th>
                <th>BOOKING DATE</th>
                <th>TIME</th>
                <th>END TIME</th>
                <th>STATUS</th>
              </tr>
            </tfoot>
                  
            <tbody>
              <?php
                $acc=$_SESSION['acc'];
                $result=mysqli_query($connect,"SELECT * FROM court INNER JOIN account ON court_account = account_id WHERE account_id = '$acc'");

                while($row=mysqli_fetch_assoc($result))
                {
              ?>
              
              <tr>
                <td><?php echo $row['court_id']; ?></td>
                <td><?php echo $row['court_date']; ?></td>
                <td>COURT <?php echo $row['court_name']; ?></td>
                <td><?php echo $row['court_date_book']; ?></td>
                <td><?php echo date('h:i A', strtotime($row['court_time'])); ?></td>
                <td><?php echo date('h:i A', strtotime($row['court_end_time'])); ?></td>
                <td style="font-weight:bold;">
                  <?php 
                    if($row['court_status'] == "APPROVE")
                  { ?>
                      
                  <div style='color:green;'>
                  
                  <?php echo $row['court_status'];}
                  
                  else if($row['court_status'] == "EXPIRED"){ ?>
                  
                  <div style='color:red;'><?php echo $row['court_status'];}
                  
             ?>
                      </div></td>
              </tr>
              
              <?php
              }
              ?>
                  
            </tbody>
          </table>
        </div>
      </div>
    </form>           
  </div>
</section>
<!--/ Team End /-->

<?php include("inc/footer.php")?>
  
<script>
document.getElementById("history").classList.add("active");
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
<script src="datatables/jquery.dataTables.min.js"></script>
<script src="datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="demo/datatables-demo.js"></script>

</body>
</html>