<?php include("inc/dataconnection.php");

if(isset($_SESSION['loggedin']))
{

if(isset($_GET['del']))
{
   $id = $_GET['id'];
   mysqli_query($connect,"UPDATE $bas.contact SET contact_isDelete = '1' WHERE contact_id = '$id'");
   header("Location:contact_us.php");
}


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
<title>Seipkon - Bootstrap Admin Template</title>
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
<script src="http://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js" type="text/javascript"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

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
                     <div class="col-md-6 col-sm-6">
                        <div class="seipkon-breadcromb-left">
                           <h3>View All Contact</h3>
                        </div>
                     </div>

                     <div class="col-md-6 col-sm-6">
                        <div class="seipkon-breadcromb-right">
                           <ul>
                              <li><a href="index.php">Home</a></li>
                              <li>Contact</li>
                              <li>View Contact</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Bredcromb Row --> 
              
         <!-- Product Table Row Start -->
         <div class="row">
            <div class="col-md-12">
               <div style="font-size: 15px; color:black;" id="output"></div>
                  <div class="page-box">                     
                     <div class="table-responsive">
                        <table id="product-order" class="table table-hover">
                           <thead>
                              <tr>
                                 <th>Number</th>
                                 <th>Customer Name</th>
                                 <th>Customer Email</th>
                                 <th>Customer Contact</th>
                                 <th>Customer Message</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                                 
                           <?php
                              $result = mysqli_query($connect,"SELECT * FROM $bas.contact WHERE contact_isDelete ='0'");
                              $count = mysqli_num_rows($result);
                              while($row = mysqli_fetch_assoc($result))
                              {
                           ?>                 

                           <tbody>
                              <tr>
                                 <td><?php echo $row['contact_id'];?></td>
                                 <td><?php echo $row['contact_name'];?></td>
                                 <td style="text-transform: lowercase;"><?php echo $row['contact_email'];?></td>
                                 <td><?php echo $row['contact_subject'];?></td>
                                 <td><?php echo $row['contact_message'];?></td>
                                 <td>
                                 <button class="btn btn-info"><i class="fa fa-envelope"><a href="contact.php?mail=<?php echo $row['contact_id']?>">Mail</a></i></button>
                                 </td>
                              </tr>
                           </tbody>
                           <?php 
                              }
                           ?>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Product Table Row End -->

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
<script src="assets/plugins/datatables/js/dataTables.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables/js/buttons.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="assets/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables/js/responsive.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/js/jszip.min.js"></script>
<script src="assets/plugins/datatables/js/pdfmake.min.js"></script>
<script src="assets/plugins/datatables/js/vfs_fonts.js"></script>
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
<!-- Form Wizard Custom JS For Only This Page -->
<script src="assets/js/advance_table_custom.js"></script>
</body>
</html>

<?php 
}

else
{
   header("Location:sign_in.php");
}

?>