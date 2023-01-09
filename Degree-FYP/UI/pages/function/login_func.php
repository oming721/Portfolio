<?php
if($_SESSION['enter']==true)
{
  header("Refresh:0.5; URL=/UI/pages/home.php");
}
if(isset($_GET['sign_in']))
{
  $email=$_GET['inputEmail'];
  $password=md5($_GET['inputPassword']);
  $sql=mysqli_query($connect,"SELECT * FROM account WHERE acc_email='$email' AND acc_password='$password'");
  $count=mysqli_num_rows($sql);

  if($count==1)
  {
    $accid=mysqli_fetch_array($sql);
    if($accid['acc_active'] == 0)
    {
      echo "<script>";
      echo "alert('Please Active First');";
      echo "window.location = 'login.php'";
      echo "</script>";
    }
    else if($accid['acc_position'] == 0 || $accid['acc_position'] == 1)
    {
      echo "<script>";
      echo "alert('Please Context To The Admin For Setting Your Account');";
      echo "window.location = 'login.php'";
      echo "</script>";
    }
    else
    {
      $_SESSION['enter'] = true;
      $_SESSION['acc']=$accid['acc_id'];
      
      echo "<script>";
      echo "window.location = 'home.php'";
      echo "</script>";
    }
    
  }
  else
  {
    $_SESSION['enter']=false;
    echo "<script>";
    echo "window.location = 'login.php?email=".$email."&isError=error'";
    echo "</script>";
  }
}
if(isset($_GET['targetemail']))
{

  $token = $_GET['token'];
  $email = $_GET['targetemail'];
  $result=mysqli_query($connect,"SELECT * FROM account WHERE acc_email = '$email' AND acc_token = '$token'");
  $count=mysqli_num_rows($result);
  if($count == 1)
  {
    echo "<script>";
    echo "alert('Account Successful Active');";
    echo "</script>";
    mysqli_query($connect,"UPDATE account SET acc_active = '1' WHERE acc_email = '$email'");
  }
  else
  {
    echo "<script>";
    echo "alert('Something Wrong');";
    echo "</script>";
  }
}
?>