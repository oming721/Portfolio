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
if($acc['acc_position'] == '2' || $acc['acc_position'] == '3')
{
  header("Refresh:0.5; URL=/UI/pages/profile.php");
}

if(isset($_GET['more_detail']) && isset($_GET['user_id']))
{
  if($acc['acc_position'] != '4')
  {
    header("Refresh:0.5; URL=/UI/pages/home.php");
  }
  else
  {
    $id = $_GET['user_id'];
    $self_position = $acc['acc_position'];
    $sql=mysqli_query($connect,"SELECT * FROM account INNER JOIN company ON comp_account = acc_id WHERE acc_id='$id'");
    $acc=mysqli_fetch_array($sql);
  }
}
else
{
  $id = $_SESSION['acc'];
  $self_position = $acc['acc_position'];
}

$email=$acc['acc_email'];
$id=$acc['comp_id'];
$name=$acc['comp_name'];
$location=$acc['comp_location'];

if($acc['acc_position'] == '1')
{
  $position = "Pending";
  $position_code = $acc['acc_position'];
}
else if($acc['acc_position'] == '5')
{
  $position = "Company";
  $position_code = $acc['acc_position'];
}
?>