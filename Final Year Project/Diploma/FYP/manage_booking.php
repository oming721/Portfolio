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


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script> -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script src="assets/plugins/perfect-scrollbar/jquery-perfect-scrollbar.min.js"></script>
<style>
#time8 ,#time9 ,#time10 ,#time11 ,#time12 ,#time13 ,#time14 ,#time15 ,#time16 ,#time17 ,#time18 ,#time19 ,#time20 ,#time21
{

    background: transparent;
    border: none !important;
    width:100%;
}​
</style>
</head>
<body>

<!-- Start Page Loading -->
<?php include("inc/page_loading.php"); ?>
<!-- End Page Loading -->
       
<!-- Wrapper Start -->
<div class="wrapper" >

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
                           <h3>Manage Booking</h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Bredcromb Row -->

         <div class="row">
            <div class="col-md-12">
               <div class="page-box">
                  <div class="datepicker"></div>
                    <span class="table"></span>

                    <div class="container">
                      <div class="row">
                        <div class="col-md-4">
                          <div id="calendar"></div>
                        </div>

                        <div class="col-md-8">
                          <div id="event_box"></div>
                          <div id="output"></div>
                          <div id="example-popover-content"> </div>
                          <div id="example-popover-title"> </div>
                        </div>

                      </div>
                    </div>

                    <p id="message"></p>
               </div>
            </div>
         </div>
         
   </div>
</div>
         
<!-- Footer Area Start -->
<?php include("inc/footer.php"); ?>
<!-- End Footer Area -->

</section>
<!-- End Right Side Content -->

</div>
<!-- End Wrapper -->
       
<!-- jQuery -->

<!-- Bootstrap JS -->

<!-- Bootstrap-select JS -->
<!-- Daterange JS -->
<script type="text/javascript">

$(document).ready(function()
{
    var selectedDate;
    var calendar = $("#calendar").datepicker({ 
      minDate: +0,

        onSelect: function(dateText)
        {                          
          var date = $("#calendar").datepicker('getDate');
          var format = $.datepicker.formatDate('dd MM yy (DD)',date);
          selectedDate = format;
          var month = '' + (date.getMonth() + 1);
          var day = '' + date.getDate();
          var year = date.getFullYear();
          if (month.length < 2)
          {
            month = '0' + month;
          }
          if (day.length < 2)
          {            
            day = '0' + day;
          }
          var fullday = [year, month, day].join('-');
          
          $.ajax({
            type: "get",
            url: "ajax_book.php",
            data: {"fullday": fullday},
            dataType: "JSON",
            success: function(service)
            {
              for(var i=0;i<service.length;i++)
              {
                if(service[i].court_time == 8)
                {
                  var duration = service[i].court_end_time - service[i].court_time;
                  if(duration >= 2)
                  {
                    var check1 = document.book.time9;
                    var check1b = document.getElementsByName('time9b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 3)
                  {
                    var check1 = document.book.time10;
                    var check1b = document.getElementsByName('time10b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 4)
                  {
                    var check1 = document.book.time11;
                    var check1b = document.getElementsByName('time11b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 5)
                  {
                    var check1 = document.book.time12;
                    var check1b = document.getElementsByName('time12b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 6)
                  {
                    var check1 = document.book.time13;
                    var check1b = document.getElementsByName('time13b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 7)
                  {
                    var check1 = document.book.time14;
                    var check1b = document.getElementsByName('time14b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 8)
                  {
                    var check1 = document.book.time15;
                    var check1b = document.getElementsByName('time15b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 9)
                  {
                    var check1 = document.book.time16;
                    var check1b = document.getElementsByName('time16b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 10)
                  {
                    var check1 = document.book.time17;
                    var check1b = document.getElementsByName('time17b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 11)
                  {
                    var check1 = document.book.time18;
                    var check1b = document.getElementsByName('time18b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 12)
                  {
                    var check1 = document.book.time19;
                    var check1b = document.getElementsByName('time19b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 13)
                  {
                    var check1 = document.book.time20;
                    var check1b = document.getElementsByName('time20b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 14)
                  {
                    var check1 = document.book.time21;
                    var check1b = document.getElementsByName('time21b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  var check = document.book.time8;
                  var checkb = document.getElementsByName('time8b');
                  for (var a=0;a<check.length;a++)
                  {
                    if(check[a].value == service[i].court_name)
                    {
                      check[a].disabled=true;
                      checkb[a].style.backgroundColor ="grey";
                    }
                  }
                }
                if(service[i].court_time == 9)
                {
                  var duration = service[i].court_end_time - service[i].court_time;
                  if(duration >= 2)
                  {
                    var check1 = document.book.time10;
                    var check1b = document.getElementsByName('time10b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 3)
                  {
                    var check1 = document.book.time11;
                    var check1b = document.getElementsByName('time11b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 4)
                  {
                    var check1 = document.book.time12;
                    var check1b = document.getElementsByName('time12b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 5)
                  {
                    var check1 = document.book.time13;
                    var check1b = document.getElementsByName('time13b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 6)
                  {
                    var check1 = document.book.time14;
                    var check1b = document.getElementsByName('time14b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 7)
                  {
                    var check1 = document.book.time15;
                    var check1b = document.getElementsByName('time15b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 8)
                  {
                    var check1 = document.book.time16;
                    var check1b = document.getElementsByName('time16b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 9)
                  {
                    var check1 = document.book.time17;
                    var check1b = document.getElementsByName('time17b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 10)
                  {
                    var check1 = document.book.time18;
                    var check1b = document.getElementsByName('time18b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 11)
                  {
                    var check1 = document.book.time19;
                    var check1b = document.getElementsByName('time19b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 12)
                  {
                    var check1 = document.book.time20;
                    var check1b = document.getElementsByName('time20b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 13)
                  {
                    var check1 = document.book.time21;
                    var check1b = document.getElementsByName('time21b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  var check = document.book.time9;
                  var checkb = document.getElementsByName('time9b');
                  for (var a=0;a<check.length;a++)
                  {
                    if(check[a].value == service[i].court_name)
                    {
                      check[a].disabled=true;
                      checkb[a].style.backgroundColor ="grey";
                    }
                  }
                }
                if(service[i].court_time == 10)
                {
                  var duration = service[i].court_end_time - service[i].court_time;
                  if(duration >= 2)
                  {
                    var check1 = document.book.time11;
                    var check1b = document.getElementsByName('time11b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 3)
                  {
                    var check1 = document.book.time12;
                    var check1b = document.getElementsByName('time12b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 4)
                  {
                    var check1 = document.book.time13;
                    var check1b = document.getElementsByName('time13b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 5)
                  {
                    var check1 = document.book.time14;
                    var check1b = document.getElementsByName('time14b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 6)
                  {
                    var check1 = document.book.time15;
                    var check1b = document.getElementsByName('time15b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 7)
                  {
                    var check1 = document.book.time16;
                    var check1b = document.getElementsByName('time16b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 8)
                  {
                    var check1 = document.book.time17;
                    var check1b = document.getElementsByName('time17b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 9)
                  {
                    var check1 = document.book.time18;
                    var check1b = document.getElementsByName('time18b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 10)
                  {
                    var check1 = document.book.time19;
                    var check1b = document.getElementsByName('time19b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 11)
                  {
                    var check1 = document.book.time20;
                    var check1b = document.getElementsByName('time20b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 12)
                  {
                    var check1 = document.book.time21;
                    var check1b = document.getElementsByName('time21b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  var check = document.book.time10;
                  var checkb = document.getElementsByName('time10b');
                  for (var a=0;a<check.length;a++)
                  {
                    if(check[a].value == service[i].court_name)
                    {
                      check[a].disabled=true;
                      checkb[a].style.backgroundColor ="grey";
                    }
                  }
                }
                if(service[i].court_time == 11)
                {
                  var duration = service[i].court_end_time - service[i].court_time;
                  if(duration >= 2)
                  {
                    var check1 = document.book.time12;
                    var check1b = document.getElementsByName('time12b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 3)
                  {
                    var check1 = document.book.time13;
                    var check1b = document.getElementsByName('time13b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 4)
                  {
                    var check1 = document.book.time14;
                    var check1b = document.getElementsByName('time14b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 5)
                  {
                    var check1 = document.book.time15;
                    var check1b = document.getElementsByName('time15b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 6)
                  {
                    var check1 = document.book.time16;
                    var check1b = document.getElementsByName('time16b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 7)
                  {
                    var check1 = document.book.time17;
                    var check1b = document.getElementsByName('time17b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 8)
                  {
                    var check1 = document.book.time18;
                    var check1b = document.getElementsByName('time18b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 9)
                  {
                    var check1 = document.book.time19;
                    var check1b = document.getElementsByName('time19b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 10)
                  {
                    var check1 = document.book.time20;
                    var check1b = document.getElementsByName('time20b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 11)
                  {
                    var check1 = document.book.time21;
                    var check1b = document.getElementsByName('time21b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  var check = document.book.time11;
                  var checkb = document.getElementsByName('time11b');
                  for (var a=0;a<check.length;a++)
                  {
                    if(check[a].value == service[i].court_name)
                    {
                      check[a].disabled=true;
                      checkb[a].style.backgroundColor ="grey";
                    }
                  }
                }
                if(service[i].court_time == 12)
                {
                  if(duration >= 2)
                  {
                    var check1 = document.book.time13;
                    var check1b = document.getElementsByName('time13b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 3)
                  {
                    var check1 = document.book.time14;
                    var check1b = document.getElementsByName('time14b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 4)
                  {
                    var check1 = document.book.time15;
                    var check1b = document.getElementsByName('time15b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 5)
                  {
                    var check1 = document.book.time16;
                    var check1b = document.getElementsByName('time16b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 6)
                  {
                    var check1 = document.book.time17;
                    var check1b = document.getElementsByName('time17b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 7)
                  {
                    var check1 = document.book.time18;
                    var check1b = document.getElementsByName('time18b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 8)
                  {
                    var check1 = document.book.time19;
                    var check1b = document.getElementsByName('time19b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 9)
                  {
                    var check1 = document.book.time20;
                    var check1b = document.getElementsByName('time20b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 10)
                  {
                    var check1 = document.book.time21;
                    var check1b = document.getElementsByName('time21b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  var check = document.book.time12;
                  var checkb = document.getElementsByName('time12b');
                  for (var a=0;a<check.length;a++)
                  {
                    if(check[a].value == service[i].court_name)
                    {
                      check[a].disabled=true;
                      checkb[a].style.backgroundColor ="grey";
                    }
                  }
                }
                if(service[i].court_time == 13)
                {
                  var duration = service[i].court_end_time - service[i].court_time;
                  if(duration >= 2)
                  {
                    var check1 = document.book.time14;
                    var check1b = document.getElementsByName('time14b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 3)
                  {
                    var check1 = document.book.time15;
                    var check1b = document.getElementsByName('time15b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 4)
                  {
                    var check1 = document.book.time16;
                    var check1b = document.getElementsByName('time16b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 5)
                  {
                    var check1 = document.book.time17;
                    var check1b = document.getElementsByName('time17b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 6)
                  {
                    var check1 = document.book.time18;
                    var check1b = document.getElementsByName('time18b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 7)
                  {
                    var check1 = document.book.time19;
                    var check1b = document.getElementsByName('time19b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 8)
                  {
                    var check1 = document.book.time20;
                    var check1b = document.getElementsByName('time20b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 9)
                  {
                    var check1 = document.book.time21;
                    var check1b = document.getElementsByName('time21b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  var check = document.book.time13;
                  var checkb = document.getElementsByName('time13b');
                  for (var a=0;a<check.length;a++)
                  {
                    if(check[a].value == service[i].court_name)
                    {
                      check[a].disabled=true;
                      checkb[a].style.backgroundColor ="grey";
                    }
                  }
                }
                if(service[i].court_time == 14)
                {
                  var duration = service[i].court_end_time - service[i].court_time;
                  if(duration >= 2)
                  {
                    var check1 = document.book.time15;
                    var check1b = document.getElementsByName('time15b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 3)
                  {
                    var check1 = document.book.time16;
                    var check1b = document.getElementsByName('time16b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 4)
                  {
                    var check1 = document.book.time17;
                    var check1b = document.getElementsByName('time17b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 5)
                  {
                    var check1 = document.book.time18;
                    var check1b = document.getElementsByName('time18b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 6)
                  {
                    var check1 = document.book.time19;
                    var check1b = document.getElementsByName('time19b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 7)
                  {
                    var check1 = document.book.time20;
                    var check1b = document.getElementsByName('time20b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 8)
                  {
                    var check1 = document.book.time21;
                    var check1b = document.getElementsByName('time21b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  var check = document.book.time14;
                  var checkb = document.getElementsByName('time14b');
                  for (var a=0;a<check.length;a++)
                  {
                    if(check[a].value == service[i].court_name)
                    {
                      check[a].disabled=true;
                      checkb[a].style.backgroundColor ="grey";
                    }
                  }
                }
                if(service[i].court_time == 15)
                {
                  var duration = service[i].court_end_time - service[i].court_time;
                  if(duration >= 2)
                  {
                    var check1 = document.book.time16;
                    var check1b = document.getElementsByName('time16b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 3)
                  {
                    var check1 = document.book.time17;
                    var check1b = document.getElementsByName('time17b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 4)
                  {
                    var check1 = document.book.time18;
                    var check1b = document.getElementsByName('time18b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 5)
                  {
                    var check1 = document.book.time19;
                    var check1b = document.getElementsByName('time19b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 6)
                  {
                    var check1 = document.book.time20;
                    var check1b = document.getElementsByName('time20b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 7)
                  {
                    var check1 = document.book.time21;
                    var check1b = document.getElementsByName('time21b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  var check = document.book.time15;
                  var checkb = document.getElementsByName('time15b');
                  for (var a=0;a<check.length;a++)
                  {
                    if(check[a].value == service[i].court_name)
                    {
                      check[a].disabled=true;
                      checkb[a].style.backgroundColor ="grey";
                    }
                  }
                }
                if(service[i].court_time == 16)
                {
                  var duration = service[i].court_end_time - service[i].court_time;
                  if(duration >= 2)
                  {
                    var check1 = document.book.time17;
                    var check1b = document.getElementsByName('time17b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 3)
                  {
                    var check1 = document.book.time18;
                    var check1b = document.getElementsByName('time18b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 4)
                  {
                    var check1 = document.book.time19;
                    var check1b = document.getElementsByName('time19b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 5)
                  {
                    var check1 = document.book.time20;
                    var check1b = document.getElementsByName('time20b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 6)
                  {
                    var check1 = document.book.time21;
                    var check1b = document.getElementsByName('time21b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  var check = document.book.time16;
                  var checkb = document.getElementsByName('time16b');
                  for (var a=0;a<check.length;a++)
                  {
                    if(check[a].value == service[i].court_name)
                    {
                      check[a].disabled=true;
                      checkb[a].style.backgroundColor ="grey";
                    }
                  }
                }
                if(service[i].court_time == 17)
                {
                  var duration = service[i].court_end_time - service[i].court_time;
                  if(duration >= 2)
                  {
                    var check1 = document.book.time18;
                    var check1b = document.getElementsByName('time18b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 3)
                  {
                    var check1 = document.book.time19;
                    var check1b = document.getElementsByName('time19b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 4)
                  {
                    var check1 = document.book.time20;
                    var check1b = document.getElementsByName('time20b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 5)
                  {
                    var check1 = document.book.time21;
                    var check1b = document.getElementsByName('time21b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  var check = document.book.time17;
                  var checkb = document.getElementsByName('time17b');
                  for (var a=0;a<check.length;a++)
                  {
                    if(check[a].value == service[i].court_name)
                    {
                      check[a].disabled=true;
                      checkb[a].style.backgroundColor ="grey";
                    }
                  }
                }
                if(service[i].court_time == 18)
                {
                  var duration = service[i].court_end_time - service[i].court_time;
                  if(duration >= 2)
                  {
                    var check1 = document.book.time19;
                    var check1b = document.getElementsByName('time19b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 3)
                  {
                    var check1 = document.book.time20;
                    var check1b = document.getElementsByName('time20b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 4)
                  {
                    var check1 = document.book.time21;
                    var check1b = document.getElementsByName('time21b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  var check = document.book.time18;
                  var checkb = document.getElementsByName('time18b');
                  for (var a=0;a<check.length;a++)
                  {
                    if(check[a].value == service[i].court_name)
                    {
                      check[a].disabled=true;
                      checkb[a].style.backgroundColor ="grey";
                    }
                  }
                }
                if(service[i].court_time == 19)
                {
                  var duration = service[i].court_end_time - service[i].court_time;
                  if(duration >= 2)
                  {
                    var check1 = document.book.time20;
                    var check1b = document.getElementsByName('time20b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  if(duration >= 3)
                  {
                    var check1 = document.book.time21;
                    var check1b = document.getElementsByName('time21b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  var check = document.book.time19;
                  var checkb = document.getElementsByName('time19b');
                  for (var a=0;a<check.length;a++)
                  {
                    if(check[a].value == service[i].court_name)
                    {
                      check[a].disabled=true;
                      checkb[a].style.backgroundColor ="grey";
                    }
                  }
                }
                if(service[i].court_time == 20)
                {
                  var duration = service[i].court_end_time - service[i].court_time;
                  if(duration >= 2)
                  {
                    var check1 = document.book.time21;
                    var check1b = document.getElementsByName('time21b');
                    for (var a=0;a<check1.length;a++)
                    {
                      if(check1[a].value == service[i].court_name)
                      {
                        check1[a].disabled=true;
                        check1b[a].style.backgroundColor ="grey";
                      }
                    }
                  }
                  var check = document.book.time20;
                  var checkb = document.getElementsByName('time20b');
                  for (var a=0;a<check.length;a++)
                  {
                    if(check[a].value == service[i].court_name)
                    {
                      check[a].disabled=true;
                      checkb[a].style.backgroundColor ="grey";
                    }
                  }
                }
                if(service[i].court_time == 21)
                {
                  var check = document.book.time21;
                  var checkb = document.getElementsByName('time21b');
                  for (var a=0;a<check.length;a++)
                  {
                    if(check[a].value == service[i].court_name)
                    {
                      check[a].disabled=true;
                      checkb[a].style.backgroundColor ="grey";
                    }
                  }
                }
              }
            }
          });
          

          var html =
          '<form action="update_court.php" method="post" name="book"><input type="hidden" name="date" value="'+ fullday +'"><table style="border-width:thick;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><p style="font-size:30px;font-weight:bold;">'+ selectedDate +'</p><thead text-align:center;"><tr><th>&nbsp;</th><th style="font-weight:bold;font-size:18px;">Court A</th><th style="font-weight:bold;font-size:18px;">Court B</th><th style="font-weight:bold;font-size:18px;">Court C</th><th style="font-weight:bold;font-size:18px;">Court D</th></tr></thead><tfoot style="text-align:center;"><tr><th>&nbsp;</th><th style="font-size:18px;">Court A</th><th style="font-size:18px;">Court B</th><th style="font-size:18px;">Court C</th><th style="font-size:18px;">Court D</th></tr></tfoot><tbody><tr><th>8 AM</th><td name="time8b"><button id="time8" name="time8" value="A" type="submit">8.00 AM</button></td><td name="time8b"><button id="time8" name="time8" value="B" type="submit">8.00 AM</button></td><td name="time8b"><button id="time8" name="time8" value="C" type="submit">8.00 AM</button></td><td name="time8b"><button id="time8" name="time8" value="D" type="submit">8.00 AM</button></td></tr><tr><th>9 AM</th><td name="time9b"><button id="time9" name="time9" value="A" type="submit">9.00 AM</button></td><td name="time9b"><button id="time9" name="time9" value="B" type="submit">9.00 AM</button></td><td name="time9b"><button id="time9" name="time9" value="C" type="submit">9.00 AM</button></td><td name="time9b"><button id="time9" name="time9" value="D" type="submit">9.00 AM</button></td></tr><tr><th>10 AM</th><td name="time10b"><button id="time10" name="time10" value="A" type="submit">10.00 AM</button></td><td name="time10b"><button id="time10" name="time10" value="B" type="submit">10.00 AM</button></td><td name="time10b"><button id="time10" name="time10" value="C" type="submit">10.00 AM</button></td><td name="time10b"><button id="time10" name="time10" value="D" type="submit">10.00 AM</button></td></tr><tr><th>11 AM</th><td name="time11b"><button id="time11" name="time11" value="A" type="submit">11.00 AM</button></td><td name="time11b"><button id="time11" name="time11" value="B" type="submit">11.00 AM</button></td><td name="time11b"><button id="time11" name="time11" value="C" type="submit">11.00 AM</button></td><td name="time11b"><button id="time11" name="time11" value="D" type="submit">11.00 AM</button></td></tr><tr><th>12 PM</th><td name="time12b"><button id="time12" name="time12" value="A" type="submit">12.00 PM</button></td><td name="time12b"><button id="time12" name="time12" value="B" type="submit">12.00 PM</button></td><td name="time12b"><button id="time12" name="time12" value="C" type="submit">12.00 PM</button></td><td name="time12b"><button id="time12" name="time12" value="D" type="submit">12.00 PM</button></td></tr><tr><th>1 PM</th><td name="time13b"><button id="time13" name="time13" value="A" type="submit">1.00 PM</button></td><td name="time13b"><button id="time13" name="time13" value="B" type="submit">1.00 PM</button></td><td name="time13b"><button id="time13" name="time13" value="C" type="submit">1.00 PM</button></td><td name="time13b"><button id="time13" name="time13" value="D" type="submit">1.00 PM</button></td></tr><tr><th>2 PM</th><td name="time14b"><button id="time14" name="time14" value="A" type="submit">2.00 PM</button></td><td name="time14b"><button id="time14" name="time14" value="B" type="submit">2.00 PM</button></td><td name="time14b"><button id="time14" name="time14" value="C" type="submit">2.00 PM</button></td><td name="time14b"><button id="time14" name="time14" value="D" type="submit">2.00 PM</button></td></tr><tr><th>3 PM</th><td name="time15b"><button id="time15" name="time15" value="A" type="submit">3.00 PM</button></td><td name="time15b"><button id="time15" name="time15" value="B" type="submit">3.00 PM</button></td><td name="time15b"><button id="time15" name="time15" value="C" type="submit">3.00 PM</button></td><td name="time15b"><button id="time15" name="time15" value="D" type="submit">3.00 PM</button></td></tr><tr><th>4 PM</th><td name="time16b"><button id="time16" name="time16" value="A" type="submit">4.00 PM</button></td><td name="time16b"><button id="time16" name="time16" value="B" type="submit">4.00 PM</button></td><td name="time16b"><button id="time16" name="time16" value="C" type="submit">4.00 PM</button></td><td name="time16b"><button id="time16" name="time16" value="D" type="submit">4.00 PM</button></td></tr><tr><th>5 PM</th><td name="time17b"><button id="time17" name="time17" value="A" type="submit">5.00 PM</button></td><td name="time17b"><button id="time17" name="time17" value="B" type="submit">5.00 PM</button></td><td name="time17b"><button id="time17" name="time17" value="C" type="submit">5.00 PM</button></td><td name="time17b"><button id="time17" name="time17" value="D" type="submit">5.00 PM</button></td></tr><tr><th>6 PM</th><td name="time18b"><button id="time18" name="time18" value="A" type="submit">6.00 PM</button></td><td name="time18b"><button id="time18" name="time18" value="B" type="submit">6.00 PM</button></td><td name="time18b"><button id="time18" name="time18" value="C" type="submit">6.00 PM</button></td><td name="time18b"><button id="time18" name="time18" value="D" type="submit">6.00 PM</button></td></tr><tr><th>7 PM</th><td name="time19b"><button id="time19" name="time19" value="A" type="submit">7.00 PM</button></td><td name="time19b"><button id="time19" name="time19" value="B" type="submit">7.00 PM</button></td><td name="time19b"><button id="time19" name="time19" value="C" type="submit">7.00 PM</button></td><td name="time19b"><button id="time19" name="time19" value="D" type="submit">7.00 PM</button></td></tr><tr><th>8 PM</th><td name="time20b"><button id="time20" name="time20" value="A" type="submit">8.00 PM</button></td><td name="time20b"><button id="time20" name="time20" value="B" type="submit">8.00 PM</button></td><td name="time20b"><button id="time20" name="time20" value="C" type="submit">8.00 PM</button></td><td name="time20b"><button id="time20" name="time20" value="D" type="submit">8.00 PM</button></td></tr><tr><th>9 PM</th><td name="time21b"><button id="time21" name="time21" value="A" type="submit">9.00 PM</button></td><td name="time21b"><button id="time21" name="time21" value="B" type="submit">9.00 PM</button></td><td name="time21b"><button id="time21" name="time21" value="C" type="submit">9.00 PM</button></td><td name="time21b"><button id="time21" name="time21" value="D" type="submit">9.00 PM</button></td></tr></tbody></table></form>';
          $('#example-popover-title').html('<br>'+html);
        }
    });
});

</script>

<!-- Dashboard JS -->
<!-- Custom JS -->
<script src="assets/js/seipkon.js"></script>
<!-- Form Wizard Custom JS For Only This Page -->

</body>
</html>
<?php 
}

else
{
   header("Location:sign_in.php");
}

?>