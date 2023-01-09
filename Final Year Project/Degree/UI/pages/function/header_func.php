<?php
if($_SESSION['enter']==false)
{
  header("Refresh:0.5; URL=/UI/pages/login.php");
}
else
{
  $id = $_SESSION['acc'];
  $sql=mysqli_query($connect,"SELECT acc_email, acc_position FROM account WHERE acc_id='$id'");
  $acc=mysqli_fetch_array($sql);
  date_default_timezone_set("Asia/Kuala_Lumpur");
  $email=$acc['acc_email'];
  $pst = $acc['acc_position'];
  if($acc['acc_position'] == '2' || $acc['acc_position'] == '3' || $acc['acc_position'] == '4')
  {
    $sql1=mysqli_query($connect,"SELECT user_name FROM user WHERE user_account='$id'");
    $user=mysqli_fetch_array($sql1);
    $name=$user['user_name'];
    $image="images/$email/profile/profile.png";
  }
  else if($acc['acc_position'] == '5')
  {
    $sql2=mysqli_query($connect,"SELECT comp_name FROM company WHERE comp_account='$id'");
    $company=mysqli_fetch_array($sql2);
    $name=$company['comp_name'];
    $image="images/company/company.png";
  }
}
?>