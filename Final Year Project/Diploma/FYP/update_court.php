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
                  <h3>Updated Court</h3>
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

                  <h3>Court Info</h3>

                  <form method="post">

                    <div class="row">
                      <div class="col-md-6">

                        <p>
                          <label>Date</label>
                          <input type="text" name="court_date" value="<?php echo $_POST['date'];?>" readonly>
                        </p>

                        <p>
                          <br><label>Court Name</label>
                          <input type="text" name="court_name" value="<?php if(isset($_POST['time8'])){echo $_POST['time8'];}if(isset($_POST['time9'])){echo $_POST['time9'];}if(isset($_POST['time10'])){echo $_POST['time10'];}if(isset($_POST['time11'])){echo $_POST['time11'];}if(isset($_POST['time12'])){echo $_POST['time12'];}if(isset($_POST['time13'])){echo $_POST['time13'];}if(isset($_POST['time14'])){echo $_POST['time14'];}if(isset($_POST['time15'])){echo $_POST['time15'];}if(isset($_POST['time16'])){echo $_POST['time16'];}if(isset($_POST['time17'])){echo $_POST['time17'];}if(isset($_POST['time18'])){echo $_POST['time18'];}if(isset($_POST['time19'])){echo $_POST['time19'];}if(isset($_POST['time20'])){echo $_POST['time20'];}if(isset($_POST['time21'])){echo $_POST['time21'];}?>" readonly>
                        </p>

                        <p>
                          <br><label>Time</label>
                          <input type="text" name="court_time" value="<?php if(isset($_POST['time8'])){echo date('h:i A', strtotime('8.00'));}if(isset($_POST['time9'])){echo date('h:i A', strtotime('9.00'));}if(isset($_POST['time10'])){echo date('h:i A', strtotime('10.00'));}if(isset($_POST['time11'])){echo date('h:i A', strtotime('11.00'));}if(isset($_POST['time12'])){echo date('h:i A', strtotime('12.00'));}if(isset($_POST['time13'])){echo date('h:i A', strtotime('13.00'));}if(isset($_POST['time14'])){echo date('h:i A', strtotime('14.00'));}if(isset($_POST['time15'])){echo date('h:i A', strtotime('15.00'));}if(isset($_POST['time16'])){echo date('h:i A', strtotime('16.00'));}if(isset($_POST['time17'])){echo date('h:i A', strtotime('17.00'));}if(isset($_POST['time18'])){echo date('h:i A', strtotime('18.00'));}if(isset($_POST['time19'])){echo date('h:i A', strtotime('19.00'));}if(isset($_POST['time20'])){echo date('h:i A', strtotime('20.00'));}if(isset($_POST['time21'])){echo date('h:i A', strtotime('21.00'));}?>" readonly>
                        </p>

                        <p>
                          <br><label>Duration</label>
                          <br><select name="duration">
                            <option value="1">1 Hour</option>
                            <?php
                            if(isset($_POST['time8'])){$option = 14;}if(isset($_POST['time9'])){$option = 13;}if(isset($_POST['time10'])){$option = 12;}if(isset($_POST['time11'])){$option = 11;}if(isset($_POST['time12'])){$option = 10;}if(isset($_POST['time13'])){$option = 9;}if(isset($_POST['time14'])){$option = 8;}if(isset($_POST['time15'])){$option = 7;}if(isset($_POST['time16'])){$option = 6;}if(isset($_POST['time17'])){$option = 5;}if(isset($_POST['time18'])){$option = 4;}if(isset($_POST['time19'])){$option = 3;}if(isset($_POST['time20'])){$option = 2;}
                            
                            if(isset($_POST['time8'])){$court =  $_POST['time8'];}if(isset($_POST['time9'])){$court =  $_POST['time9'];}if(isset($_POST['time10'])){$court =  $_POST['time10'];}if(isset($_POST['time11'])){$court =  $_POST['time11'];}if(isset($_POST['time12'])){$court =  $_POST['time12'];}if(isset($_POST['time13'])){$court =  $_POST['time13'];}if(isset($_POST['time14'])){$court =  $_POST['time14'];}if(isset($_POST['time15'])){$court =  $_POST['time15'];}if(isset($_POST['time16'])){$court =  $_POST['time16'];}if(isset($_POST['time17'])){$court =  $_POST['time17'];}if(isset($_POST['time18'])){$court =  $_POST['time18'];}if(isset($_POST['time19'])){$court =  $_POST['time19'];}if(isset($_POST['time20'])){$court =  $_POST['time20'];}if(isset($_POST['time21'])){$court =  $_POST['time21'];}
                            
                            if(isset($_POST['time8'])){$time_date =  date('h:i A', strtotime('8.00'));}if(isset($_POST['time9'])){$time_date =  date('h:i A', strtotime('9.00'));}if(isset($_POST['time10'])){$time_date =  date('h:i A', strtotime('10.00'));}if(isset($_POST['time11'])){$time_date =  date('h:i A', strtotime('11.00'));}if(isset($_POST['time12'])){$time_date =  date('h:i A', strtotime('12.00'));}if(isset($_POST['time13'])){$time_date =  date('h:i A', strtotime('13.00'));}if(isset($_POST['time14'])){$time_date =  date('h:i A', strtotime('14.00'));}if(isset($_POST['time15'])){$time_date =  date('h:i A', strtotime('15.00'));}if(isset($_POST['time16'])){$time_date =  date('h:i A', strtotime('16.00'));}if(isset($_POST['time17'])){$time_date =  date('h:i A', strtotime('17.00'));}if(isset($_POST['time18'])){$time_date =  date('h:i A', strtotime('18.00'));}if(isset($_POST['time19'])){$time_date =  date('h:i A', strtotime('19.00'));}if(isset($_POST['time20'])){$time_date =  date('h:i A', strtotime('20.00'));}if(isset($_POST['time21'])){$time_date =  date('h:i A', strtotime('21.00'));}
                            
                            $time=number_format((float)date("H:i", strtotime($time_date)), 2, '.', '');
                            $date=$_POST['date'];
                            $result=mysqli_query($connect,"SELECT * FROM court WHERE court_date_book = '$date' AND  court_time > '$time' AND court_name = '$court' ORDER BY court_time LIMIT 1;");
                            $count=mysqli_num_rows($result);
                            if($count == 1)
                            {
                              $row=mysqli_fetch_assoc($result);
                              $option = $row['court_time'] - $time;
                            }
                            
                            if((isset($_POST['time8'])||isset($_POST['time9'])||isset($_POST['time10'])||isset($_POST['time11'])||isset($_POST['time12'])||isset($_POST['time13'])||isset($_POST['time14'])||isset($_POST['time15'])||isset($_POST['time16'])||isset($_POST['time17'])||isset($_POST['time18'])||isset($_POST['time19'])||isset($_POST['time20']))&&$option >= 2)
                            { ?>
                            <option value="2">2 Hour</option>
                            <?php
                              if((isset($_POST['time8'])||isset($_POST['time9'])||isset($_POST['time10'])||isset($_POST['time11'])||isset($_POST['time12'])||isset($_POST['time13'])||isset($_POST['time14'])||isset($_POST['time15'])||isset($_POST['time16'])||isset($_POST['time17'])||isset($_POST['time18'])||isset($_POST['time19']))&&$option >= 3)
                              { ?>
                            <option value="3">3 Hour</option>
                            <?php
                                if((isset($_POST['time8'])||isset($_POST['time9'])||isset($_POST['time10'])||isset($_POST['time11'])||isset($_POST['time12'])||isset($_POST['time13'])||isset($_POST['time14'])||isset($_POST['time15'])||isset($_POST['time16'])||isset($_POST['time17'])||isset($_POST['time18']))&&$option >= 4)
                                { ?>
                            <option value="4">4 Hour</option>
                            <?php
                                  if((isset($_POST['time8'])||isset($_POST['time9'])||isset($_POST['time10'])||isset($_POST['time11'])||isset($_POST['time12'])||isset($_POST['time13'])||isset($_POST['time14'])||isset($_POST['time15'])||isset($_POST['time16'])||isset($_POST['time17']))&&$option >= 5)
                                  { ?>
                            <option value="5">5 Hour</option>
                            <?php
                                    if((isset($_POST['time8'])||isset($_POST['time9'])||isset($_POST['time10'])||isset($_POST['time11'])||isset($_POST['time12'])||isset($_POST['time13'])||isset($_POST['time14'])||isset($_POST['time15'])||isset($_POST['time16']))&&$option >= 6)
                                    { ?>
                            <option value="6">6 Hour</option>
                            <?php
                                      if((isset($_POST['time8'])||isset($_POST['time9'])||isset($_POST['time10'])||isset($_POST['time11'])||isset($_POST['time12'])||isset($_POST['time13'])||isset($_POST['time14'])||isset($_POST['time15']))&&$option >= 7)
                                      { ?>
                            <option value="7">7 Hour</option>
                            <?php
                                        if((isset($_POST['time8'])||isset($_POST['time9'])||isset($_POST['time10'])||isset($_POST['time11'])||isset($_POST['time12'])||isset($_POST['time13'])||isset($_POST['time14']))&&$option >= 8)
                                        { ?>
                            <option value="8">8 Hour</option>
                            <?php
                                          if((isset($_POST['time8'])||isset($_POST['time9'])||isset($_POST['time10'])||isset($_POST['time11'])||isset($_POST['time12'])||isset($_POST['time13']))&&$option >= 9)
                                          { ?>
                            <option value="9">9 Hour</option>
                            <?php
                                            if((isset($_POST['time8'])||isset($_POST['time9'])||isset($_POST['time10'])||isset($_POST['time11'])||isset($_POST['time12']))&&$option >= 10)
                                            { ?>
                            <option value="10">10 Hour</option>
                            <?php
                                              if((isset($_POST['time8'])||isset($_POST['time9'])||isset($_POST['time10'])||isset($_POST['time11']))&&$option >= 11)
                                              { ?>
                            <option value="11">11 Hour</option>
                            <?php
                                                if((isset($_POST['time8'])||isset($_POST['time9'])||isset($_POST['time10']))&&$option >= 12)
                                                { ?>
                            <option value="12">12 Hour</option>
                            <?php
                                                  if((isset($_POST['time8'])||isset($_POST['time9']))&&$option >= 13)
                                                  { ?>
                            <option value="13">13 Hour</option>
                            <?php
                                                    if(isset($_POST['time8'])&&$option >= 14)
                                                    { ?>
                            <option value="14">14 Hour</option>
                            <?php
                                                    }
                                                  }
                                                }
                                              }
                                            }
                                          }
                                        }
                                      }
                                    }
                                  }
                                }
                              }
                            }
                            ?>
                          </select>
                        </p>

                        <br> <button class="btn btn-success submit_btn" type="submit" name="save1">
                          <i class="fa fa-check"></i>
                          Save Info
                        </button>
                        &nbsp;
                        <button class="btn btn-danger" type="submit">
                        <i class="fa fa-arrow-left"></i>
                        <a href="manage_booking.php">Back</a>
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
  if(isset($_POST['save1']))
  {
    $time=number_format((float)date("H:i", strtotime($_POST['court_time'])), 2, '.', '');
    $date=$_POST['court_date'];
    $court=$_POST['court_name'];
    $duration=$_POST['duration'] + $time;
    $end_time=number_format((float)$duration, 2, '.', '');
    $today=date("Y-m-d");
    $sign_in = $_SESSION['id'];
    mysqli_query($connect,"INSERT INTO court(court_date, court_name, court_date_book, court_time, court_end_time, court_status, court_sign_in) VALUES ('$today', '$court', '$date', '$time', '$end_time', 'DISABLE', '$sign_in');");
    echo "<script>";
    echo "alert('Update successful');";
    echo "window.location = '//localhost/FYP/index.php'";
    echo "</script>";
  }
  if(!isset($_POST['date']))
  {
    echo "<script>";
    echo "alert('Please Book First');";
    echo "window.location='//localhost/FYP/manage_booking.php';";
    echo "</script>";
  }
}
else
{
  header("Location:sign_in.php");
}


?>