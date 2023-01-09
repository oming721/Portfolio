<?php
if($_SESSION['enter']==true)
{
  header("Refresh:0.5; URL=/UI/pages/home.php");
}
$token = md5(rand(10,100)); 

if(isset($_POST['btn_submit']))
{
  $email=$_POST['inputEmail'];
  $row['acc_id'] = '';
  $sql=mysqli_query($connect,"SELECT * FROM account WHERE acc_email='$email'");
  $count=mysqli_num_rows($sql);
  $row = mysqli_fetch_assoc($sql);

  if($count != 0)
  {
    $id= $row['acc_id'];
    $url = "http://".$_SERVER["HTTP_HOST"].dirname($_SERVER["PHP_SELF"])."/reset.php?account_id=".$id."&account_token=".$token;
    $to = "$email";
    $subject = "Forget Password";
    $body = "We are from Time Attendance System.<br><br>This is your requested password reset <br><br>Click <a href='$url'>this link</a> to reset password <br><br>You only have 30 minutes to change your password, else you need to reset again";
    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: Time Attendance System <oming789@gmail.com>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    mail($to,$subject,$body,$headers);

    $sql = "UPDATE account SET acc_token = '$token' WHERE acc_email = '$email'";

    $query = mysqli_query($connect,$sql);
    echo "<script>";
    echo "alert('The email has successful sent');";
    echo "window.location='//localhost/UI/pages/login.php';";
    echo "</script>";
  }
  
  else
  {
    echo "<script>";
    echo "window.location='//localhost/UI/pages/forget.php?isWrong=wrong&email=$email';";
    echo "</script>";
  }
}

?>