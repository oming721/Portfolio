<?php
$id = $_SESSION['acc'];
if($acc['acc_position'] == '2' || $acc['acc_position'] == '3' || $acc['acc_position'] == '4')
{
  $sql=mysqli_query($connect,"SELECT * FROM account INNER JOIN user ON user_account = acc_id LEFT JOIN company ON user_company = comp_id WHERE acc_id='$id'");
}
else if($acc['acc_position'] == '5')
{
  $sql=mysqli_query($connect,"SELECT * FROM account INNER JOIN company ON comp_account = acc_id WHERE acc_id='$id'");
}
$acc=mysqli_fetch_array($sql);
if(isset($_GET['more_detail']) && isset($_GET['user_id']))
{
  if($acc['acc_position'] == '2' && $_GET['user_id'] != $acc['acc_id'])
  {
    header("Refresh:0.5; URL=/UI/pages/home.php");
  }
    $id = $_GET['user_id'];
    $self_position = $acc['acc_position'];
    $sql=mysqli_query($connect,"SELECT * FROM account INNER JOIN user ON user_account = acc_id LEFT JOIN company ON user_company = comp_id WHERE acc_id='$id'");
    $acc=mysqli_fetch_array($sql);
}
else
{
  if($acc['acc_position'] == '5')
  {
    header("Refresh:0.5; URL=/UI/pages/home.php");
  }
  $id = $_SESSION['acc'];
  $self_position = $acc['acc_position'];
}

$email=$acc['acc_email'];
$id=$acc['user_id'];
$name=$acc['user_name'];
$birthday=$acc['user_birthday'];
$gender=$acc['user_gender'];
$phone=$acc['user_phone'];
$address=$acc['user_address'];


if($acc['user_company'] == null)
{
  $company="Pending";
}
else
{
  $company=$acc['comp_name'];
}
if($acc['acc_position'] == '0')
{
  $position = "Pending";
}
else if($acc['acc_position'] == '2')
{
  $position = "Employee";
}
else if($acc['acc_position'] == '3')
{
  $position = "HR";
}
else if($acc['acc_position'] == '4')
{
  $position = "Admin";
}
?>