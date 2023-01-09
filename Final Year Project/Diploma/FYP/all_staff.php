   <?php include("inc/dataconnection.php");

if(isset($_SESSION['loggedin']))
{
 
if(isset($_GET['del']))
{
   $id = $_GET['id'];

   mysqli_query($connect,"UPDATE $bas.sign_in SET staff_isDelete = '1' WHERE id = '$id'");

   echo "<script> Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )</script>";

   header("Refresh:0.5; URL=//localhost/FYP/all_staff.php");
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="assets/js/jquery-3.1.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

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
          
<!-- Slide Bar -->
<?php include("inc/sidebar.php"); ?>
<!-- End Bar -->
          
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
                           <h3>View All Staff</h3>
                        </div>
                     </div>

                     <!-- <div class="col-md-6 col-sm-6">
                        <div class="seipkon-breadcromb-right">
                           <form>
                              <input type="search" placeholder="Search..." >
                              <button type="submit" ><i class="fa fa-search"></i></button>
                           </form>
                        </div>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
         <!-- End Breadcromb Row --> 

         <!-- Product Table Row Start -->
         <div class="row">
            <div class="col-md-12">
               <div class="page-box">
                  <div class="table-responsive">
                     <table id="product-order" class="table table-hover">
                        <thead>
                           <tr>
                              <th>Staff Name</th>
                              <th>Staff Position</th>
                              <th>Staff Email Address</th>
                              <th colspan="3" style="text-align:center;">Action</th>
                              <th>Current Status</th>
                              <th>Change Status</th>
                           </tr>
                        </thead>

                        <tbody>
                        <?php 
                           $result = mysqli_query($connect,"SELECT * FROM $bas.sign_in WHERE staff_isDelete = '0'");
                           $count = mysqli_num_rows($result);
                           while($row = mysqli_fetch_array($result))
                           {
                        ?>
                                
                           <tr> 
                              <td><?php echo $row['staff_name']; ?></td>
                              <td><?php echo $row['staff_position'];?></td>
                              <td style="text-transform: lowercase;"><?php echo $row['email'] ?></td>
                              <td><button class="btn btn-info"><i class="fa fa-eye"><a href="view_staff.php?view&id=<?php echo $row['id']; ?>">View</a></i></button></td>
                              <td><button class="btn btn-primary"><i class="fa fa-pencil"><a href="edit_staff.php?edit&id=<?php echo $row['id']; ?>">Edit</a></i></button></td>
                              <td><button class="btn btn-danger" class="confirm" onclick="confirm('<?php echo $row['id']; ?>')"><i class="fa fa-trash-o">Delete</i></button></td>
                              <td>
                                 <?php if($row['staff_status'] == 0)
                                 {
                                    echo "<p style='color:green;' id=str".$row['id'].">Active</p>";
                                 } 

                                 else
                                 {
                                    echo "<p style='color:red;' id=str".$row['id'].">Deactivate</p>";
                                 }
                                 ?>
                                    
                              </td>
                              <td>
                                 <select onchange="active_disactive_staff(this.value,<?php echo $row['id']; ?>)">
                                    <option>None</option>
                                    <option value="0">Active</option>
                                    <option value="1">Deactivate</option>
                                 </select>
                              </td>
                           </tr>
                        </tbody>

                        <script>
                        function confirm(id)
                        {
                          Swal.fire({
                                    title: 'Are you sure?',
                                    text: "You won't be able to revert this!",
                                    type: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Yes, delete it!'
                                 }).then((result) => {
                                 
                                    if (result.value) {
                                       window.location = window.location.href+="?del&id="+id;
                                      
                                    }
                                 })
                        }
                        </script>

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
<!-- <script src="assets/js/jquery-3.1.0.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-1.11.1.js"></script> -->
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

<script type="text/javascript">
   function active_disactive_staff(val,id)
   {
      $.ajax({
         type:'POST',
         url:'change.php',
         data:{val:val,id:id},
         success: function(result){
            if(result==0)
            {
               $('#str'+id).html('Active');
            }

            else
            {
               $('#str'+id).html('Deactivate');
            }
         }
      });
   }
</script>

</html>

<?php 
}

else
{
   header("Location:sign_in.php");
}

?>