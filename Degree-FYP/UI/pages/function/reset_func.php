<?php
if(!isset($_GET['account_id']) && !isset($_GET['account_token']))
{
  echo "<script>";
  echo "alert('Something Wrong');";
  echo "window.location = '//localhost/UI/pages/forget.php';";
  echo "</script>";
}
else
{
  $token = $_GET['account_token'];
  $id = $_GET['account_id'];
  $sql= "SELECT * FROM account WHERE acc_id='$id' AND acc_token='$token'";
  $query = mysqli_query($connect,$sql);
  $count=mysqli_num_rows($query);
  if($count == 0)
  {
    echo "<script>";
    echo "alert('Something Wrong');";
    echo "window.location = '//localhost/UI/pages/forget.php';";
    echo "</script>";
  }
}

if(isset($_POST['btn_submit']))
{
  
  $password = md5($_POST['inputPassword']);
  $acc=$_GET['account_id'];
  mysqli_query($connect,"UPDATE account SET acc_password='$password' WHERE acc_id=$acc");
  echo "<script>";
  echo "alert('Success change your password');";
  echo "window.location = '//localhost/UI/pages/login.php';";
  echo "</script>";
}
?>