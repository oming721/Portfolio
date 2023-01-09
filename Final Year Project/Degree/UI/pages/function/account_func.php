<?php
if(isset($_POST['btn_submit']))
{
  $id = $_POST['inputid'];
  $password = md5($_POST['inputNew']);
  mysqli_query($connect,"UPDATE account SET acc_password = '$password' WHERE acc_id = '$id'");
  echo "<script>";
  echo "alert('Password Changed');";
  echo "window.location = 'home.php';";
  echo "</script>";
}
?>