<?php include("inc/dataconnection.php");
 
if(isset($_SESSION['loggedin']))
{

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Seipkon is a Premium Quality Admin Site Responsive Template" />
<meta name="keywords" content="admin template, admin, admin dashboard, cms, Seipkon Admin, premium admin templates, responsive admin, panel, software, ui, web app, application" />
<meta name="author" content="Themescare">
<!-- Title -->
<title>KSBB Badminton Court</title>
<!-- Favicon -->
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
<!-- Animate CSS -->
<link rel="stylesheet" href="assets/css/animate.min.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/plugins/bootstrap/bootstrap.min.css">
<!-- Font awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<!-- Themify Icon CSS -->
<link rel="stylesheet" href="assets/plugins/themify-icons/themify-icons.css">
<!-- Perfect Scrollbar CSS -->
<link rel="stylesheet" href="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css">
<!-- Jvector CSS -->
<link rel="stylesheet" href="assets/plugins/jvector/css/jquery-jvectormap.css">
<!-- Daterange CSS -->
<link rel="stylesheet" href="assets/plugins/daterangepicker/css/daterangepicker.css">
<!-- Bootstrap-select CSS -->
<link rel="stylesheet" href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css">
<!-- Summernote CSS -->
<link rel="stylesheet" href="assets/plugins/summernote/css/summernote.css">
<!-- Main CSS -->
<link rel="stylesheet" href="assets/css/seipkon.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
       
<!-- Start Page Loading -->
<?php include("inc/page_loading.php"); ?>
<!-- End Page Loading -->
      
<!-- Wrapper Start -->
<div class="wrapper">

<!-- Main Header Start -->
<?php include("inc/header.php"); ?>
<!-- Main Header End -->
          
<!-- Sidebar Start -->
<?php include("inc/sidebar.php"); ?>
<!-- End Sidebar -->
          
<!-- Right Side Content Start -->
<section id="content" class="seipkon-content-wrapper">
   <div class="page-content">
      <div class="container-fluid">
                   
         <!-- Breadcromb Row Start -->
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-area">
                  <div class="row">
                     <div class="col-md-6  col-sm-6">
                        <div class="seipkon-breadcromb-left">
                           <h3>View Staff Profile</h3>
                        </div>
                     </div>      
                  </div>
               </div>
            </div>
         </div>
         <!-- End Breadcromb Row -->
                   
         <!-- Add Product Area Start -->
         <div class="row">
            <div class="col-md-12">
               <div class="page-box">
                  <div class="row">
                     <div class="col-md-6 col-sm-6">
                        <div class="add-product-form-group">
                           <h3>Staff Profile</h3>

                           <?php 
                           if(isset($_GET['view']))
                           {
                              $id = $_GET['id'];
                              $result = mysqli_query($connect,"SELECT * FROM $bas.sign_in WHERE id = '$id'");
                              $row = mysqli_fetch_assoc($result);
                           }
                           ?>

                           <div class="row">
                              <div class="col-md-12">         
                                 <img src="profile_picture/<?php echo $row['staff_image']; ?>" style="width:100px; height: 100px; border-radius: 90px;" class="output"/>
                                 
                                 <p>
                                    <?php echo "<label>Staff Name</label>";  
                                          echo "<br>".$row['staff_name'];
                                    ?>
                                 </p>

                                 <p>
                                    <?php echo "<label>Staff Position</label>";
                                          echo"<br>".$row['staff_position'];
                                    ?>
                                 </p>

                                 <p>
                                    <?php echo "<label>Phone Number</label>";
                                          echo "<br>".$row['staff_phone_number'];
                                    ?>
                                 </p>

                                 <p>
                                    <?php echo "<label>Email Address</label>";
                                          echo "<br>".$row['email'];
                                    ?>
                                 </p>

                                 <p>
                                    <?php echo "<label>Level</label>";
                                          echo "<br>".$row['level'];
                                    ?>
                                 </p>

                                 <a href="all_staff.php" class="btn btn-success" >
                                    <i class="fa fa-check"></i>
                                    OK
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>    
            </div>
         </div>
             
         <!-- Footer Area Start -->
         <?php include("inc/footer.php"); ?>
         <!-- End Footer Area -->
      
      </div>
   </div>       
</section>
<!-- End Right Side Content -->
          
</div>
<!-- End Wrapper -->
           
<!-- jQuery -->
<script src="assets/js/jquery-3.1.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
<!-- Bootstrap-select JS -->
<script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
<!-- Daterange JS -->
<script src="assets/plugins/daterangepicker/js/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/js/daterangepicker.js"></script>
<!-- Jvector JS -->
<script src="assets/plugins/jvector/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/plugins/jvector/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/plugins/jvector/js/jvector-init.js"></script>
<!-- Raphael JS -->
<script src="assets/plugins/raphael/js/raphael.min.js"></script>
<!-- Morris JS -->
<script src="assets/plugins/morris/js/morris.min.js"></script>
<!-- Sparkline JS -->
<script src="assets/plugins/sparkline/js/jquery.sparkline.js"></script>
<!-- Chart JS -->
<script src="assets/plugins/charts/js/Chart.js"></script>
<!-- Datatables -->
<script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<!-- Perfect Scrollbar JS -->
<script src="assets/plugins/perfect-scrollbar/jquery-perfect-scrollbar.min.js"></script>
<!-- Vue JS -->
<script src="assets/plugins/vue/vue.min.js"></script>
<!-- Summernote JS -->
<script src="assets/plugins/summernote/js/summernote.js"></script>
<script src="assets/plugins/summernote/js/custom-summernote.js"></script>
<!-- Dashboard JS -->
<script src="assets/js/dashboard.js"></script>
<!-- Custom JS -->
<script src="assets/js/seipkon.js"></script>
</body>
</html>

<?php 
}

else
{
   header("Location:sign_in.php");
}


?>