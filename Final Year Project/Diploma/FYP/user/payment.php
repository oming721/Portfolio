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
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}


input[type=text] ,input[type=password] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<script>
function count(duration)
{
  var total = 13 * duration;
  document.getElementById("total").innerHTML="RM " + total.toFixed(2);
  document.getElementById("duration").value=duration;
}
function validate(evt)
{
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]/;
  if(!regex.test(key))
  {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
function validate1(evt)
{
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[A-Z]|[a-z]|\s/;
  if(!regex.test(key))
  {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
function check()
{
  var year = document.getElementById('expyear').value;
  var month = document.getElementById('month').value;
  var d = new Date();
  var tmonth = d.getMonth() + 1;
  var tyear = d.getFullYear();
  if(year == tyear)
  {
    if(month < tmonth)
    {
      alert("Invalid Date For Credit Card");
      return false
    }
  }
  else if(year < tyear)
  {
    alert("Invalid Date For Credit Card");
    return false
  }
  else
  {
    return true;
  }
}
</script>
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
            <h1 class="title-single">PAYMENT</h1>
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
  <div class="row">
  <div class="col-75">
    <div class="container">
      <form method="post" onsubmit="return check()">

        <div class="row">

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <input type="hidden" name="court" value="<?php if(isset($_POST['time8'])){echo $_POST['time8'];}if(isset($_POST['time9'])){echo $_POST['time9'];}if(isset($_POST['time10'])){echo $_POST['time10'];}if(isset($_POST['time11'])){echo $_POST['time11'];}if(isset($_POST['time12'])){echo $_POST['time12'];}if(isset($_POST['time13'])){echo $_POST['time13'];}if(isset($_POST['time14'])){echo $_POST['time14'];}if(isset($_POST['time15'])){echo $_POST['time15'];}if(isset($_POST['time16'])){echo $_POST['time16'];}if(isset($_POST['time17'])){echo $_POST['time17'];}if(isset($_POST['time18'])){echo $_POST['time18'];}if(isset($_POST['time19'])){echo $_POST['time19'];}if(isset($_POST['time20'])){echo $_POST['time20'];}if(isset($_POST['time21'])){echo $_POST['time21'];}?>">
            <input type="hidden" name="time" value="<?php if(isset($_POST['time8'])){echo "8";}if(isset($_POST['time9'])){echo "9";}if(isset($_POST['time10'])){echo "10";}if(isset($_POST['time11'])){echo "11";}if(isset($_POST['time12'])){echo "12";}if(isset($_POST['time13'])){echo "13";}if(isset($_POST['time14'])){echo "14";}if(isset($_POST['time15'])){echo "15";}if(isset($_POST['time16'])){echo "16";}if(isset($_POST['time17'])){echo "17";}if(isset($_POST['time18'])){echo "18";}if(isset($_POST['time19'])){echo "19";}if(isset($_POST['time20'])){echo "20";}if(isset($_POST['time21'])){echo "21";}?>">
            <input type="hidden" name="date" value="<?php if(isset($_POST['date'])){echo $_POST['date'];}?>">
            <input type="hidden" name="duration" id="duration" value="1">
            <label for="cname">Name on Card</label>
            <input onkeypress="validate1(event)" type="text" id="cname" name="cardname" placeholder="John More Doe" required>
            <label for="ccnum">Credit card number</label>
            <input onkeypress="validate(event)" type="text" id="ccnum" name="cardnumber" placeholder="1111 2222 3333 4444" pattern="(?=.*\d).{16}" required>
            <label for="expmonth">Exp Month</label>
            <select id="month" style="width: 100%;margin-bottom: 20px;padding: 12px;border: 1px solid #ccc;border-radius: 3px;" required>
              <option value="">-- Select Month --</option>
              <option value="1">January</option>
              <option value="2">February</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
            
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input onkeypress="validate(event)" type="text" id="expyear" name="expyear" placeholder="2020" pattern="(?=.*\d).{4}" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input onkeypress="validate(event)" type="password" id="cvv" name="cvv" placeholder="352" pattern="(?=.*\d).{3}" required>
              </div>
            </div>
          </div>

        </div>
        <input name="payment1" type="submit" value="Pay" class="btn">
      </form>
    </div>
  </div>

  <div class="col-25">
    <div class="container">
      <h3>Court</h3>
      <form method="post">
      <p>&nbsp;</p>

      <p style="color: black;">Date <span class="price"><?php echo $_POST['date']; ?></span></p>

      <p style="color: black;">Time <span class="price"> <?php if(isset($_POST['time8'])){echo date('h:i A', strtotime('8.00'));}if(isset($_POST['time9'])){echo date('h:i A', strtotime('9.00'));}if(isset($_POST['time10'])){echo date('h:i A', strtotime('10.00'));}if(isset($_POST['time11'])){echo date('h:i A', strtotime('11.00'));}if(isset($_POST['time12'])){echo date('h:i A', strtotime('12.00'));}if(isset($_POST['time13'])){echo date('h:i A', strtotime('13.00'));}if(isset($_POST['time14'])){echo date('h:i A', strtotime('14.00'));}if(isset($_POST['time15'])){echo date('h:i A', strtotime('15.00'));}if(isset($_POST['time16'])){echo date('h:i A', strtotime('16.00'));}if(isset($_POST['time17'])){echo date('h:i A', strtotime('17.00'));}if(isset($_POST['time18'])){echo date('h:i A', strtotime('18.00'));}if(isset($_POST['time19'])){echo date('h:i A', strtotime('19.00'));}if(isset($_POST['time20'])){echo date('h:i A', strtotime('20.00'));}if(isset($_POST['time21'])){echo date('h:i A', strtotime('21.00'));}?></span></p>

      <p style="color:black;">Court <?php if(isset($_POST['time8'])){echo $_POST['time8'];}if(isset($_POST['time9'])){echo $_POST['time9'];}if(isset($_POST['time10'])){echo $_POST['time10'];}if(isset($_POST['time11'])){echo $_POST['time11'];}if(isset($_POST['time12'])){echo $_POST['time12'];}if(isset($_POST['time13'])){echo $_POST['time13'];}if(isset($_POST['time14'])){echo $_POST['time14'];}if(isset($_POST['time15'])){echo $_POST['time15'];}if(isset($_POST['time16'])){echo $_POST['time16'];}if(isset($_POST['time17'])){echo $_POST['time17'];}if(isset($_POST['time18'])){echo $_POST['time18'];}if(isset($_POST['time19'])){echo $_POST['time19'];}if(isset($_POST['time20'])){echo $_POST['time20'];}if(isset($_POST['time21'])){echo $_POST['time21'];}?> <span class="price">RM 13.00</span></p>
      
      <p style="color:black;">Duration <span class="price">
      <select onchange="count(this.value)">
      <option value="1">1 Hours</option>
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
        {
      ?>
      <option value="2">2 Hours</option>
      <?php 
        }
      ?>
      </select></span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b id="total">RM 13.00</b></span></p>
      </form>
    </div>
  </div>
</div>
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
  <script>
  document.getElementById("home").classList.add("active");
  </script>

</body>
</html>
<?php
  if(isset($_POST['payment1']))
  {
    $time=number_format((float)$_POST['time'], 2, '.', '');
    $date=$_POST['date'];
    $court=$_POST['court'];
    $acc=$_SESSION['acc'];
    $duration=$_POST['duration'] + $_POST['time'];
    $end_time=number_format((float)$duration, 2, '.', '');
    $today=date("Y-m-d");
    mysqli_query($connect,"INSERT INTO court(court_date, court_name, court_date_book, court_time, court_end_time, court_status, court_account, court_isDelete) VALUES ('$today', '$court', '$date', '$time', '$end_time', 'APPROVE', '$acc', '0');");
    echo "<script>";
    echo "alert('Book Successfully');";
    echo "window.location = '//localhost/FYP/user/book_history.php'";
    echo "</script>";
  }

  if(!isset($_POST['date']))
  {
    echo "<script>";
    echo "alert('Please Book First');";
    echo "window.location='//localhost/FYP/user/booking.php';";
    echo "</script>";
  }
?>