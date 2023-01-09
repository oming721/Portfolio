<?php
include("inc/dataconnection.php");
include("inc/check.php");
?>
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
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>


  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
 
 
 <style>
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
#time8 ,#time9 ,#time10 ,#time11 ,#time12 ,#time13 ,#time14 ,#time15 ,#time16 ,#time17 ,#time18 ,#time19 ,#time20 ,#time21
{

    background: transparent;
    border: none !important;
    width:100%;
}​
</style>
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
            <h1 class="title-single">BOOKING</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="home.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Booking
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
  <div class="datepicker"></div>
    <span class="table"></span>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div id="calendar"></div>
          <table>
          <tr>
              <th style="background-color:white;">Available</th>
            </tr>
  
            <tr style="width: 10%;">
              <th style="background-color:gray;">Not Available</th>
            </tr>
        </table>
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
  </section>
  <!--/ Team End /-->

  <?php include("inc/footer.php")?>
  
  <script>
  document.getElementById("book").classList.add("active");
  </script>
  
  
<script type="text/javascript">

$(document).ready(function()
{
    var selectedDate;
    var calendar = $("#calendar").datepicker({ 
      minDate: +1,
      maxDate: +14,

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
          '<form action="payment.php" method="post" name="book"><input type="hidden" name="date" value="'+ fullday +'"><table style="border-width:thick;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><p style="font-size:30px;font-weight:bold;">'+ selectedDate +'</p><thead text-align:center;"><tr><th>&nbsp;</th><th style="font-weight:bold;font-size:18px;">Court A</th><th style="font-weight:bold;font-size:18px;">Court B</th><th style="font-weight:bold;font-size:18px;">Court C</th><th style="font-weight:bold;font-size:18px;">Court D</th></tr></thead><tfoot style="text-align:center;"><tr><th>&nbsp;</th><th style="font-size:18px;">Court A</th><th style="font-size:18px;">Court B</th><th style="font-size:18px;">Court C</th><th style="font-size:18px;">Court D</th></tr></tfoot><tbody><tr><th>8 AM</th><td name="time8b"><button id="time8" name="time8" value="A" type="submit">8.00 AM</button></td><td name="time8b"><button id="time8" name="time8" value="B" type="submit">8.00 AM</button></td><td name="time8b"><button id="time8" name="time8" value="C" type="submit">8.00 AM</button></td><td name="time8b"><button id="time8" name="time8" value="D" type="submit">8.00 AM</button></td></tr><tr><th>9 AM</th><td name="time9b"><button id="time9" name="time9" value="A" type="submit">9.00 AM</button></td><td name="time9b"><button id="time9" name="time9" value="B" type="submit">9.00 AM</button></td><td name="time9b"><button id="time9" name="time9" value="C" type="submit">9.00 AM</button></td><td name="time9b"><button id="time9" name="time9" value="D" type="submit">9.00 AM</button></td></tr><tr><th>10 AM</th><td name="time10b"><button id="time10" name="time10" value="A" type="submit">10.00 AM</button></td><td name="time10b"><button id="time10" name="time10" value="B" type="submit">10.00 AM</button></td><td name="time10b"><button id="time10" name="time10" value="C" type="submit">10.00 AM</button></td><td name="time10b"><button id="time10" name="time10" value="D" type="submit">10.00 AM</button></td></tr><tr><th>11 AM</th><td name="time11b"><button id="time11" name="time11" value="A" type="submit">11.00 AM</button></td><td name="time11b"><button id="time11" name="time11" value="B" type="submit">11.00 AM</button></td><td name="time11b"><button id="time11" name="time11" value="C" type="submit">11.00 AM</button></td><td name="time11b"><button id="time11" name="time11" value="D" type="submit">11.00 AM</button></td></tr><tr><th>12 PM</th><td name="time12b"><button id="time12" name="time12" value="A" type="submit">12.00 PM</button></td><td name="time12b"><button id="time12" name="time12" value="B" type="submit">12.00 PM</button></td><td name="time12b"><button id="time12" name="time12" value="C" type="submit">12.00 PM</button></td><td name="time12b"><button id="time12" name="time12" value="D" type="submit">12.00 PM</button></td></tr><tr><th>1 PM</th><td name="time13b"><button id="time13" name="time13" value="A" type="submit">1.00 PM</button></td><td name="time13b"><button id="time13" name="time13" value="B" type="submit">1.00 PM</button></td><td name="time13b"><button id="time13" name="time13" value="C" type="submit">1.00 PM</button></td><td name="time13b"><button id="time13" name="time13" value="D" type="submit">1.00 PM</button></td></tr><tr><th>2 PM</th><td name="time14b"><button id="time14" name="time14" value="A" type="submit">2.00 PM</button></td><td name="time14b"><button id="time14" name="time14" value="B" type="submit">2.00 PM</button></td><td name="time14b"><button id="time14" name="time14" value="C" type="submit">2.00 PM</button></td><td name="time14b"><button id="time14" name="time14" value="D" type="submit">2.00 PM</button></td></tr><tr><th>3 PM</th><td name="time15b"><button id="time15" name="time15" value="A" type="submit">3.00 PM</button></td><td name="time15b"><button id="time15" name="time15" value="B" type="submit">3.00 PM</button></td><td name="time15b"><button id="time15" name="time15" value="C" type="submit">3.00 PM</button></td><td name="time15b"><button id="time15" name="time15" value="D" type="submit">3.00 PM</button></td></tr><tr><th>4 PM</th><td name="time16b"><button id="time16" name="time16" value="A" type="submit">4.00 PM</button></td><td name="time16b"><button id="time16" name="time16" value="B" type="submit">4.00 PM</button></td><td name="time16b"><button id="time16" name="time16" value="C" type="submit">4.00 PM</button></td><td name="time16b"><button id="time16" name="time16" value="D" type="submit">4.00 PM</button></td></tr><tr><th>5 PM</th><td name="time17b"><button id="time17" name="time17" value="A" type="submit">5.00 PM</button></td><td name="time17b"><button id="time17" name="time17" value="B" type="submit">5.00 PM</button></td><td name="time17b"><button id="time17" name="time17" value="C" type="submit">5.00 PM</button></td><td name="time17b"><button id="time17" name="time17" value="D" type="submit">5.00 PM</button></td></tr><tr><th>6 PM</th><td name="time18b"><button id="time18" name="time18" value="A" type="submit">6.00 PM</button></td><td name="time18b"><button id="time18" name="time18" value="B" type="submit">6.00 PM</button></td><td name="time18b"><button id="time18" name="time18" value="C" type="submit">6.00 PM</button></td><td name="time18b"><button id="time18" name="time18" value="D" type="submit">6.00 PM</button></td></tr><tr><th>7 PM</th><td name="time19b"><button id="time19" name="time19" value="A" type="submit">7.00 PM</button></td><td name="time19b"><button id="time19" name="time19" value="B" type="submit">7.00 PM</button></td><td name="time19b"><button id="time19" name="time19" value="C" type="submit">7.00 PM</button></td><td name="time19b"><button id="time19" name="time19" value="D" type="submit">7.00 PM</button></td></tr><tr><th>8 PM</th><td name="time20b"><button id="time20" name="time20" value="A" type="submit">8.00 PM</button></td><td name="time20b"><button id="time20" name="time20" value="B" type="submit">8.00 PM</button></td><td name="time20b"><button id="time20" name="time20" value="C" type="submit">8.00 PM</button></td><td name="time20b"><button id="time20" name="time20" value="D" type="submit">8.00 PM</button></td></tr><tr><th>9 PM</th><td name="time21b"><button id="time21" name="time21" value="A" type="submit">9.00 PM</button></td><td name="time21b"><button id="time21" name="time21" value="B" type="submit">9.00 PM</button></td><td name="time21b"><button id="time21" name="time21" value="C" type="submit">9.00 PM</button></td><td name="time21b"><button id="time21" name="time21" value="D" type="submit">9.00 PM</button></td></tr></tbody></table></form>';
          $('#example-popover-title').html('<br>'+html);
        }
    });
});

</script>
  
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