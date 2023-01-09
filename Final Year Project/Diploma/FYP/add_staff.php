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
<script src="https://code.jquery.com/jquery-1.11.1.js"></script>
<script type="text/javascript" src="validation.js"></script>

<script type="text/javascript">
  $(document).ready(function(){

    $('#email_address').blur(function(){

      var email_address = $(this).val();
      var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i); 

      if(email_address == '')
      {
        $('#availability').html("<span>Cannot be empty!</span>");
      }

      else if(!pattern.test(email_address))
      {
        $('#availability').html("<span>Invalid Email Address</span>");
      }

      else{
      $.ajax({
        url:"check.php",
        type:"POST",
        data:{email_address:email_address},
        dataType:"text",
        cache: false,
        success:function(html)
        {
          $('#availability').html(html);
          console(html);
        }
      });
    }
    });
  });
</script>

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
                  <h3>Add Staff</h3>
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
              <div class="col-md-12 col-sm-12">
                <div class="add-product-form-group">

                  <h3>Staff Info</h3>

                  <form id="add_staff" action="add_staff.php" method="POST" enctype="multipart/form-data">

                    <div class="row">
                      <div class="col-md-6">

                        <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" onchange="loadFile(event)">
                          <img style="width:100px; height: 100px; border-radius: 50px;" id="output">
                          <span style="color: red;" class="error_form" id="image_error_massage"></span>
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

                            <p>
                              <label>Staff Name</label>
                              <input type="text" name="staff_name" class="form_text" id="username" placeholder="Enter Staff Name" onkeyup="check_username()">
                              <span style="color: red;" class="error_form" id="username_error_massage"></span>
                            </p>

                            <p>
                              <label>Staff Position</label>
                              <input type="text" name="staff_position" class="form_text" id="position" placeholder="Enter Staff Position" onkeyup="check_position()">
                              <span style="color: red;" class="error_form" id="position_error_massage"></span>
                            </p>

                            <p>
                              <label>Phone Number</label>
                              <input type="text" name="phone_number" class="form_text" id="mobile" placeholder="Enter Phone Number" onkeyup="check_mobile()"> 
                              <span style="color: red;" class="error_form" id="mobile_error_massage"></span>
                            </p>

                            <p>
                              <label>Email Address</label>
                              <input type="email" name="email" id="email_address" placeholder="Enter Email Address" autocomplete="off">
                              <span style="color: red;" class="error_form" id="availability"></span>
                            </p>

                            <p>
                              <label>Password</label>
                              <input type="password" name="password" class="form_text" id="password" placeholder="Enter Password" onkeyup="check_password()">
                              <span style="color: red;" class="error_form" id="password_error_massage"></span>
                            </p>

                            <p>
                              <label>Level</label>
                              <br><select>
                                <option value="admin">Admin</option>
                                <option value="staff">Staff</option>
                              </select>
                            </p>

                           <br> <button class="btn btn-success submit_btn" type="submit" name="save">
                              <i class="fa fa-check"></i>
                              Save Info
                            </button>
                        </div>
                      </div>
                    </form>
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

if(isset($_POST['save']))
{
   $target = "profile_picture/".basename($_FILES['fileToUpload']['name']);

   $image = $_FILES['fileToUpload']['name'];

   $name= $_POST['staff_name'];
   $position = $_POST['staff_position'];
   $number = $_POST['phone_number'];
   $email = $_POST['email'];
   $password = md5($_POST['password']);
   $level = $_POST['staff_level'];

   if(($name)!='' && ($password)!='' && ($position)!='' && ($number)!='' )
   {
    mysqli_query($connect,"INSERT INTO $bas.sign_in(staff_name,staff_position,staff_phone_number,email,password,level,staff_image) VALUES ('$name','$position','$number','$email','$password','$level','$image')");

    echo"<script>";
    echo"alert('<?php echo strtoupper($name) ?> saved');";
    echo"</script>";

    header("Location:all_staff.php");
   }
    
    else
    {
      echo "<script>check_username();check_password();check_mobile();check_position();check_image();check_level();</script>";
    }

    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target))
   {
      $message = "Image uploaded successfully";
   }

   else
   {
      $message = "There was a problem uploading image";
   }
?>

<?php 
}
mysqli_close($connect);
?>

<?php 
}

else
{
  header("Location:sign_in.php");
}


?>